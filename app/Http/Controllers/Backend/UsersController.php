<?php
/**
 * Controller : Users
 * @author    : Moazzam <en.moazzam@gmail.com>
 * Created    : 25 January, 2020
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Helper;
use DB;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('backend.users.users', compact('users'));
    }

    public function company(){
        $company=DB::table('contact_info')->where('info_id',1)->first();

        return view('backend.company.edit', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $user = new User;
            $user->full_name = $request->full_name;
            $user->email = $request->email;
            $user->designation = $request->designation;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->created_at = date('Y-m-d H:i:s');
            $user->created_by = Session::get('admin.id');
            $user->remember_token = $request->_token;
            
            if($user->save()) {
                #--- Image upload by Helper function ---#
                if($request->user_image) {
                    $imageName = Helper::imageUpload('users', $user->id, $request->user_image);
                    #--- update image field in database ---#
                    $this->updateImageField($user->id, $imageName); 
                }
            }
            toastr()->success('Data has been saved successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/users');
    }

    /**
     * Update image field
     *
     * @param  \App\Models\EmployeeTarget  $employeeTarget
     * @return \Illuminate\Http\Response
     */
    public function updateImageField($userId, $imageName = "example") 
    {
        $user = User::find($userId);
        $user->image = $imageName;
        $user->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('backend.users.edit_user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $user = User::find($request->user_id);
            $user->full_name = $request->full_name;
            $user->email = $request->email;
            $user->designation = $request->designation;
            $user->updated_at = date('Y-m-d H:i:s');
            $user->save();
            #--- Image upload by Helper function ---#
            if( $request->file('user_image') ) {
                $imageName = Helper::imageUpload('users', $user->id, $request->user_image);
                #--- update image field in database ---#
                $this->updateImageField($user->id, $imageName);
                #--- delete image from location ---#
                if($user->image) {
                    Helper::deleteImage('users', $user->image);
                }
            }
            
            toastr()->success('Data has been updated successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/users');
    }
public function updateCompany(Request $request){
     try {
        $data=array();
        $data['about_en']=$request->about_en;
        $data['about_rs']=$request->about_rs;
        $data['address']=$request->address;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['lat']=$request->lat;
        $data['lang']=$request->lang;
        $data['fb']=$request->fb;
        $data['twt']=$request->twt;
        $data['link']=$request->link;
        $data['ins']=$request->ins;
DB::table('contact_info')->where('info_id',$request->info_id)->update($data);
            
            toastr()->success('Data has been updated successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/company-info');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if($user->delete()) {
            if($user->image)
                Helper::deleteImage('users', $user->image);
            return 1;
        } else
            return 0;
    }
}
