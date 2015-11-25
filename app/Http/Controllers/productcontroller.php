<?php
namespace App\Http\Controllers;

use App\contract\Mailer as Mailer;
use Illuminate\Routing\Controller;
use App\Model\Product;
use Illuminate\Http\Request  as Request;
use App\Facades\MymailFacade as Mymail;

class ProductController extends Controller
{

    /* public function __construct()
       {
           $this->middleware('guest');
       }*/

    /*  public function main()
    {
        return view('main',[]);   //主模板函数
    }


 */


    public function index()
    {
        $products=Product::all();
        return view('product.index',['products'=>$products]);
    }

    public function show($id)
    {
        $p=Product::find($id);
        return view('product.show',['product'=>$p]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $p=Product::find($id);
        }
        else {
            $p = new Product();
        }
        return view('product.edit',['product'=>$p]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Product::updateOrCreate(["id"=>$id],$request->input());
        }
        else
        { Product::create($request->input());}
        return redirect("/product");
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect("/product");
    }



   /* public function testsend(Mailer $mm)//发送邮件实例
    {
        $mm->send(",yes sent.");
    }
    public function testreceive(Mailer $mm)//接收邮件
    {
        $mm->receive(",ok received.");
    }*/


   public function testsend()
    {
        Mymail::send(",yes it is sent by  Mymail.");
    }
    public function testreceive()
    {
        Mymail::receive(",ok received through  Mymail.");
    }
}






