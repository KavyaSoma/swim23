<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;
use session;
use Calendar;
use App\Event;

class ClubController extends Controller
{
   public function clubs(Request $request) {
$total_count = DB::select(' select count(ClubId) as count from clubs where IsDeleted="no"');
$clubs = DB::table('clubs')
   ->selectRaw('*, clubs.ClubId,clubs.ClubName,clubs.ShortName,clubs.MobilePhone')
         ->join('images', 'ReferenceId', '=', 'clubs.ClubId')
         ->where('clubs.IsDeleted',['no'])
         ->where('images.ImageRefType',['club'])
         ->where('images.IsDeleted',['N'])
         ->orderBy('clubs.ClubId')
         ->paginate(12);
return view('clubs',['clubs'=>$clubs,'total_count'=>$total_count[0]->count,'show_count'=>'yes']);
}
 public function myClubs(Request $request) {
   if($request->session()->has('user_id')){
   $userid = $request->session()->get('user_id');
   $clubs = DB::table('clubs')
       ->selectRaw('*, clubs.ClubId,clubs.ClubName,clubs.ShortName,clubs.MobilePhone')
             ->join('favourites', 'Attribute', '=', 'clubs.ClubId')
             ->where('favourites.Flag',['Yes'])
             ->where('favourites.FavouriteType',['club'])
             ->where('favourites.UserId',[$userid])
             ->orderBy('clubs.ClubId')
             ->paginate(12);
   return view('myclubs',['clubs'=>$clubs,'show_count'=>'yes']);
   } else {
         return redirect('clubs');
     }
 }
public function searchClubs(Request $request) {
   $club = $request->club;
   $total_count = DB::select(' select count(ClubId) as count from clubs where IsDeleted=?',['no']);
   $clubs = DB::table('clubs')
       ->selectRaw('*, clubs.ClubId,clubs.ClubName,clubs.ShortName,clubs.MobilePhone')
             ->join('images', 'ReferenceId', '=', 'clubs.ClubId')
             ->where('clubs.IsDeleted',['no'])
             ->where('clubs.ClubName','like','%'.strtolower($club).'%')
             ->where('images.ImageRefType',['club'])
             ->where('images.IsDeleted',['N'])
             ->orderBy('clubs.ClubId')
             ->paginate(12);
   return view('clubs',['clubs'=>$clubs,'total_count'=>$total_count[0]->count,'show_count'=>'no','search_term'=>$club]);
 }
   public function allClubs(Request $request){
        if($request->session()->has('user_id')){
            $userid = $request->session()->get('user_id');
            $clubs = DB::table('clubs')
        ->selectRaw('*, clubs.ClubId,ClubName,clubs.Description,clubs.MobilePhone')
        ->paginate(10);
      $users = DB::select('select UserId from Users Where UserId =?',[$userid]);
        
           return view('allclubs',['clubs' => $clubs,'users' => $users]);    
        
        }
        else{
            $request->session()->flash('message.level','danger');
            $request->session()->flash('message.content','please login to continue...');
            return view('login');
        }
    }

      public function clubInformation(Request $request){
        if($request->session()->has('user_id')){
            $userid = $request->session()->get('user_id');
            $club = DB::select('select clubs.ClubName,clubs.ClubId, address.AddressLine1,address.AddressId,address.City,address.PostCode,address.County,address.Country,clubs.ClubName,clubs.ShortName,clubs.ClubType,clubs.Description,clubs.MobilePhone,clubs.Email,clubs.Website,clubs.Facebook,clubs.GooglePlus,clubs.Twitter,clubs.Others FROM clubs INNER JOIN address ON clubs.AddressId=address.AddressId and clubs.ShortName=?',[$request->shortname]); 
            $ReferenceId = $club[0]->ClubId;
            $venue_status = DB::select('select * from bridgemembers where UserId = ? and BridgeType="club" and ReferenceId=?',[$userid,$ReferenceId]);
            return view('clubinformation',['clubs' => $club,'bridgemembers' => $venue_status]);
        }
        else{
            $request->session()->flash('message.level','danger');
            $request->session()->flash('message.content','please login to continue...');
            return view('login');
        }
      }

      public function JoinClub(Request $request){
if($request->session()->has('user_id')){
       $userid = $request->session()->get('user_id');
         $clubid = DB::select('select clubs.ClubName,clubs.ClubId, address.AddressLine1,address.AddressId,address.City,address.PostCode,address.County,address.Country,clubs.ClubName,clubs.ShortName,clubs.ClubType,clubs.Description,clubs.MobilePhone,clubs.Email,clubs.Website,clubs.Facebook,clubs.GooglePlus,clubs.Twitter,clubs.Others FROM clubs INNER JOIN address ON clubs.AddressId=address.AddressId and clubs.ShortName=?',[$request->shortname]);
         $ReferenceId = $clubid[0]->ClubId;
         
       $requeststatus = DB::select('select * from bridgemembers where UserId = ? and BridgeType="club" and ReferenceId=?',[$userid,$ReferenceId]);
 if(count($requeststatus)>0){
           $request->session()->flash('message.level','danger');
           $request->session()->flash('message.content','Already you made a request');
           return redirect('club/'.$request->shortname);
        }
        else{
         
        $date=date("Y-m-d");
           $bridgemembers = DB::insert('insert into bridgemembers(BridgeType,ReferenceId,UserId,ApproveStatus,CreatedDate,IsDeleted,DeletedBy,DeletedDate) values(?,?,?,?,?,?,?,?)',['club',$ReferenceId,$userid,'pending',$date,'no',0,$date]);
           if($bridgemembers){
                 $request->session()->flash('message.level','info');
           $request->session()->flash('message.content','Request Sent Successfully..');
           return redirect('club/'.$request->shortname);
           }
         }  
        }
       
   
    else{
       $request->session()->flash('message.level','danger');
       $request->session()->flash('message.content','please login to continue...');
       return view('login');
    }
   }

    public function clubInfo(Request $request){
        if($request->session()->has('user_id')){
            $userid = $request->session()->get('user_id');
            $club_info = DB::table('clubs')
  ->selectRaw('clubs.ClubId,ClubName,clubs.ClubType,clubs.MobilePhone,clubs.Email,clubs.Website')
       ->where('clubs.CreatedBy',[$userid])
       ->where('clubs.IsDeleted',['no'])
        ->orderBy('clubs.ClubId')
       ->paginate(4);

             return view('clubinfo',['clubinfo' => $club_info]);
        }
        else{
            $request->session()->flash('message.level','danger');
            $request->session()->flash('message.content','please login to continue...');
            return view('login');
        }
    }
    public function deleteClub(Request $request){
       if($request->session()->has('user_id')){
           $user_id = $request->session()->get('user_id');
           $club_id = $request->id;
           $club_details = DB::select('select AddressId from clubs where ClubId=?',[$club_id]);
           $address_id = $club_details[0]->AddressId;
            $remove_club = DB::update('update clubs set IsDeleted="yes" where ClubId=?',[$club_id]);
           if($remove_club){
               $request->session()->flash('message.level', 'info');
               $request->session()->flash('message.content', 'Club Deleted Sucessfully');
               return redirect('clubinfo');
           }
       }
       else{
           $request->session()->flash('message.level', 'danger');
           $request->session()->flash('message.content', 'Please Login to continue....');
           return view('login');
       }
   }

    public function ClubDashboard(Request $request){
        if($request->session()->has('user_id')){
         $userid = $request->session()->get('user_id');
         $pendingrequests = DB::select('select users.UserName,users.Image,users.UserType, bridgemembers.CreatedDate,bridgemembers.ReferenceId,bridgemembers.ApproveStatus,clubs.ClubId,clubs.ClubOwner FROM users,clubs INNER JOIN bridgemembers where users.UserId = bridgemembers.UserId and clubs.ClubId=bridgemembers.ReferenceId and bridgemembers.ApproveStatus = "pending" and bridgemembers.BridgeType = "club" and clubs.ClubOwner=?',[$userid]);
        $completedrequests = DB::select('select users.UserName,users.Image,users.UserType, bridgemembers.CreatedDate,bridgemembers.ReferenceId,bridgemembers.ApproveStatus,clubs.ClubId,clubs.ClubOwner FROM users,clubs INNER JOIN bridgemembers where users.UserId = bridgemembers.UserId and clubs.ClubId=bridgemembers.ReferenceId and bridgemembers.ApproveStatus!= "pending" and bridgemembers.BridgeType = "club" and clubs.ClubOwner=?',[$userid]);
         $venue_status = DB::select('select *  from bridgemembers where UserId = ?',[$userid]);  
         $events = [];
        $futureevents = DB::select('select events.*, eventschedules.* FROM events JOIN eventschedules on events.eventID = eventschedules.eventID and eventschedules.StartDateTime > CURDATE()');
      
        if(count($futureevents)>0) {
            foreach ($futureevents as $value) {
                $events[] = Calendar::event(
                    $value->EventName,
                    true,
                    new \DateTime($value->StartDateTime),
                    new \DateTime($value->EndDateTime.' +1 day'),
                    null,
                    // Add color and link on event
                  [
                      'color' => '#028482',
                      'url' => 'clubdashboard',
                  ]
                );
            }
        }
       

 $pastevents = DB::select('select events.*, eventschedules.* FROM events JOIN eventschedules on events.eventID = eventschedules.eventID and eventschedules.StartDateTime < CURDATE()');
      
   if(count($pastevents)>0) {
            foreach ($pastevents as $value1) {
                $events[] = Calendar::event(
                    $value1->EventName,
                    true,
                    new \DateTime($value1->StartDateTime),
                    new \DateTime($value1->EndDateTime.' +1 day'),
                    null,
                    // Add color and link on event
                  [
                      'color' => '#FF0000',
                      'url' => 'clubdashboard',
                  ]
                );
            }
        }
       

    $presentevents = DB::select('select events.*, eventschedules.* FROM events JOIN eventschedules on events.eventID = eventschedules.eventID and eventschedules.StartDateTime = CURDATE()');
      
   if(count($presentevents)>0) {
            foreach ($presentevents as $value2) {
                $events[] = Calendar::event(
                    $value2->EventName,
                    true,
                    new \DateTime($value2->StartDateTime),
                    new \DateTime($value2->EndDateTime.' +1 day'),
                    null,
                    // Add color and link on event
                  [
                      'color' => '#336699',
                      'url' => 'clubdashboard',
                  ]
                );
            }
        }
        
        $calendar = Calendar::addEvents($events);
          return view('clubdashboard',compact('calendar'),['pendingrequests' => $pendingrequests, 'bridgemember' => $venue_status, 'completedrequests' => $completedrequests]);
        }
      else{
        $request->session()->flash('message.level','danger');
        $request->session()->flash('message.content','please login to continue...');
        return view('login');
      }
    }

  public function acceptclubrequest(Request $request) {
      $userid = $request->session()->get('user_id');
     $pendingrequests = DB::select('select users.UserName,users.Image,users.UserType, bridgemembers.CreatedDate,bridgemembers.ReferenceId FROM users INNER JOIN bridgemembers ON users.UserId = bridgemembers.UserId WHERE  bridgemembers.ApproveStatus = "pending" and bridgemembers.BridgeType = "club"');
 $acceptclubrequest =  DB::table('bridgemembers')->where('ReferenceId',$request->id)->update(['ApproveStatus'=>'accepted']);
           if($acceptclubrequest){
             $request->session()->flash('message.level','info');
             $request->session()->flash('message.content','Request Accepted');
              return redirect('clubdashboard');
            }
        }
        
  public function rejectclubrequest(Request $request) {

           $userid = $request->session()->get('user_id');
          $pendingrequests = DB::select('select users.UserName,users.Image,users.UserType, bridgemembers.CreatedDate,bridgemembers.ReferenceId,bridgemembers.ApproveStatus,clubs.ClubId,clubs.ClubOwner FROM users,clubs INNER JOIN bridgemembers where users.UserId = bridgemembers.UserId and clubs.ClubId=bridgemembers.ReferenceId and bridgemembers.ApproveStatus = "pending" and bridgemembers.BridgeType = "club" and clubs.ClubOwner=?',[$userid]);
         
        $rejectclubrequest =  DB::table('bridgemembers')->where('ReferenceId',$request->id)->update(['ApproveStatus'=>'rejected']);
           if($rejectclubrequest){
             $request->session()->flash('message.level','danger');
             $request->session()->flash('message.content','Request Rejected');
              return redirect('clubdashboard');
            }
           
      }      
 
 public function eventClub(Request $request){
    $clubid = $request->session()->get('user_id');
    $event_details = DB::table('events')
    ->DISTINCT('events.EventName')
    ->selectRaw('*,EventName')
    ->JOIN('bridgeeventclubs','events.EventId','=','bridgeeventclubs.EventId')
    ->where('bridgeeventclubs.ClubId','=',$clubid)
    ->paginate(10);
    if(count($event_details)>0){
    foreach($event_details as $event){
        $heat = DB::select('select SubEventId,HeatName from eventheats where EventId=?',[$event->EventId]);
    }
    if(count($heat)>0){
    return view('eventclub',['event_details'=>$event_details,'heat'=>$heat]);
    }
    else{  $heat=array();
        return view('eventclub',['event_details'=>$event_details,'heat'=>$heat]);
    }
    }
    else{
        $event_details=array();
        $heat=array();
        return view('eventclub',['event_details'=>$event_details,'heat'=>$heat]);
    }
 }
 
 public function addClub(Request $request){
        if($request->session()->has('user_id') && $request->session()->get('user_type')) {
        $userid = $request->session()->get('userid');
      
         return view('addclub');
        }
        else{
                    $request->session()->put('loginredirection', '/addclub');
             $request->session()->flash('message.level', 'info');
            $request->session()->flash('message.content', 'Please login as Club Admin to Add Club');
            return redirect('/');
        }
    }
    public function clubname(Request $request){
       $shortname = $request->shortname;
        if(count(DB::select('select ClubId from clubs where ShortName=?',[$shortname]))>0){
            echo "error";
        }
        else{
            echo "success";
        }
    }
   public function saveClub(Request $request){
    $userid = $request->session()->get('user_id');
    $address = $request->Address;
    $city = $request->city;
    $postcode = $request->post_code;
    $town = $request->town;
    $country = $request->country;
      $date=date("Y-m-d");
      $image = $request->image;
     $club_name = $request->club_name;
        $description = $request->description;
        $club_type= $request->club_type;
        $mobile = $request->mobile;
        $email = $request->email;
        $website = $request->web;
        $facebook  = $request->facebook;
        $twitter = $request->twitter;
        $googleplus = $request->google;
        $others = $request->others;
        $shortname = $request->short_name;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = 20;
    $clubaddress = DB::table('address')->insertGetId(array('AddressLine1' => $address,'AddressLine2' => 'NA','AddressLine3' => 'NA', 'City' => $city, 'Country' => $country,'County'=>$town, 'Council' =>'NA', 'PostCode'=>$postcode,'Latitude' =>0, 'Longitude' =>0, 'CreatedDate' => $date, 'UpdatedDate' => $date));
    if($clubaddress){
    $addclub = DB::table('clubs')->insertGetId(array('ClubName'=>$club_name, 'Description' => $description, 'ClubType' => $club_type, 'AddressId'=>$clubaddress, 'Email' =>  $email,'MobilePhone' => $mobile, 'Website' => $website, 'Facebook' => $facebook, 'Twitter' => $twitter, 'GooglePlus' => $googleplus, 'Others' => $others, 'OpeningHours' => '00:00:00', 'CreatedDate' => $date, 'UpdatedDate' =>$date, 'ClubOwner' =>$userid , 'IsDeleted' => 'no', 'CreatedBy' => $userid, 'UpdatedBy' => $userid, 'ShortName' => $shortname));
        if(Input::hasFile('image')){
            $file = Input::file('image');
            $randomString = '';
            for ($i = 0; $i < 20; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $file->move('./public/images', $randomString.".png");
            $image = url("public/images/".$randomString.".png");
            $image_insert = DB::table('images')->insertGetId(array('ImagePath'=>$image,'ImageRefType'=>'Club','ReferenceId'=>$addclub));
        }
        else {
            $image = "NA";
        }
        $club_favourite =  DB::insert('insert into favourites(Flag,UserId,FavouriteType,Attribute) values (?,?,?,?)',['Yes',$userid,'club',$addclub]);
     $request->session()->flash('message.level','info');
     $request->session()->flash('message.content','Club details saved successfully...');
     return view('addclub');
    }
    else{
        $request->session()->flash('message.level','danger');
        $request->session()->flash('message.content','Unable to save your details,please try again..');
        return view('addclub');
    }
    }
    public function editClub(Request $request){
        if($request->session()->has('user_id') && $request->session()->get('user_type')) {
            $userid = $request->session()->get('user_id');
            $clubinfo = DB::select('select clubs.ClubName,clubs.ClubId, address.AddressLine1,address.AddressId,address.City,address.PostCode,address.County,address.Country,clubs.ClubName,clubs.ShortName,clubs.ClubType,clubs.Description,clubs.MobilePhone,clubs.Email,clubs.Website,clubs.Facebook,clubs.GooglePlus,clubs.Twitter,clubs.Others FROM clubs INNER JOIN address ON clubs.AddressId=address.AddressId and clubs.ClubId=?',[$request->id]); 
           return view('editclub',['clubinfo' => $clubinfo]);  
     }
        else{
             $request->session()->flash('message.level', 'info');
            $request->session()->flash('message.content', 'Please login as Club Admin to Add Club');
            return redirect('/');
        }
    }
      public function saveEditClub(Request $request){
        $club_id = $request->id;
        $userid = $request->session()->get('user_id');
       $clubname = $request->ClubName;
       $clubtype = $request->ClubType;
       $description = $request->Description;
       $mobile = $request->MobilePhone;
       $email = $request->Email;
       $website = $request->Website;
       $facebook = $request->Facebook;
       $twitter = $request->Twitter;
       $googleplus = $request->GooglePlus;
       $others = $request->Others;
       $shortname =$request->shortname;
        $addressid = $request->AddressId;
        $address = $request->AddressLine1;
        $city = $request->City;
        $postcode = $request->PostCode;
        $county = $request->Town;
        $country = $request->Country;
        $image = $request->image;
        $image_details = DB::select('select ImageId from images where ImageRefType=? and ReferenceId=?',['Club',$club_id]);
     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = 20;
        if(Input::hasFile('image')){
            $file = Input::file('image');
            $randomString = '';
            for ($i = 0; $i < 20; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $file->move('./public/images', $randomString.".png");
            $image = url("public/images/".$randomString.".png");
            $image_insert = DB::update('update images set ImagePath=? where ImageId=?',[$image,$image_details[0]->ImageId]);
        }
        else {
            $image = "NA";
        }
      $updateclub = DB::update('update clubs set ClubName=?,ClubType=?,Description=?,MobilePhone=?,Email=?,Website=?,Facebook=?,Twitter=?,GooglePlus=?,Others=?,shortname=? where ClubId=? and CreatedBy=?',[$clubname,$clubtype,$description,$mobile,$email,$website,$facebook,$twitter,$googleplus,$others,$shortname,$club_id,$userid]);
      $clubinfo = DB::select('select clubs.ClubName,clubs.ClubId, address.AddressLine1,address.AddressId,address.City,address.PostCode,address.County,address.Country,clubs.ClubName,clubs.ShortName,clubs.ClubType,clubs.Description,clubs.MobilePhone,clubs.Email,clubs.Website,clubs.Facebook,clubs.GooglePlus,clubs.Twitter,clubs.Others FROM clubs INNER JOIN address ON clubs.AddressId=address.AddressId and clubs.ClubId=?',[$club_id]); 
      $update_club_address = DB::update('update address set AddressLine1=?,City=?,PostCode=?,County=?,Country=? where AddressId = ?',[$address,$city,$postcode,$county,$country,$addressid]);
      $request->session()->flash('message.level', 'info');
      $request->session()->flash('message.content', 'Club Details Edited Sucessfully');
      return redirect('editclub/'.$club_id);
     }
     
     public function autocompleteclub(Request $request){
  $type = $request->type;
  if($type == "address"){
    $address = $request->key;
    $address_information = DB::select('select AddressLine1,City,County,Country,PostCode from address where AddressLine1 like "%'.$address.'%"');
    if(count($address_information)>0){
       echo json_encode($address_information);
    }
  }
  else{
    $contact = $request->key;
    $contact_details = DB::select('select Phone,Website,Email from contacts where Phone like "%'.$contact.'%"');
    if(count($contact_details)>0){
        echo json_encode($contact_details);
    }
  }
 }
   
}
