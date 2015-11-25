Public function  submitlogin()request $request{
$username=$request[“username”];
$password=$request[“password”];
If($username==”zena”&&passwword==”123”){
$request->session()->push(“user”,$username);
Return redirect(‘welcome’);
}
Else
Return redirect(‘/user/login’)
}