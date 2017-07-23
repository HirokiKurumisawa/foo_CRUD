<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Crud; #Crudモデルのパスを通す
use App\Http\Requests\CrudRequest;


class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        #キーワード受け取り
        $keyword = $request->input('keyword');
 
        #クエリ生成
        $query = Crud::query();
 
        #もしキーワードがあったら
        if(!empty($keyword))
        {
        $query->where('name','like','%'.$keyword.'%')->orWhere('mail','like','%'.$keyword.'%');
        }
 
         #ページネーション
        $data = $query->orderBy('created_at','desc')->paginate(5);
        return view('crud.index')->with('data',$data)
                                  ->with('keyword',$keyword)
                                  ->with('message','ユーザーリスト');

        
       /* $data = Crud::latest('created_at')->paginate(10);
        return view('crud.index')->with('message','ユーザーリスト')->with('data',$data);  */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create')->with('message','登録するユーザーを入力してください。');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRequest $request) //storeメソッドの引数にCrudRequestを指定。
    {
        $crud = new Crud();
        $crud->name = $request->name;
        $crud->mail = $request->mail;
        $crud->gender = $request->gender;
        $crud->age = $request->age;
        $crud->pref = $request->pref;
        $crud->birthday = $request->birthday;
        $crud->tel = $request->tel;
        $crud->save();
        
       #viewの表示
        $res = $request->input('name')."さんを追加しました。";
        $data = Crud::latest('created_at')->paginate(5);
        return redirect('/crud/')->with('message',$res)->with('data',$data)->with('status','新規保存の処理完了！');
    }    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Crud::findOrFail($id);
        return view('crud.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Crud::findOrFail($id);
        return view('crud.edit')->with('message','編集フォーム')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrudRequest $request, $id) //updateメソッドの引数にCrudRequestを指定。
    {
        $crud = Crud::findOrFail($id);
        $crud->name = $request->name;
        $crud->mail = $request->mail;
        $crud->gender = $request->gender;
        $crud->age = $request->age;
        $crud->pref = $request->pref;
        $crud->birthday = $request->birthday;
        $crud->tel = $request->tel;
        $crud->save();
        
        #viewの表示
        $res = $request->input('name')."さんを更新しました。";
        $data = Crud::latest('created_at')->paginate(5);
        return redirect('/crud/')->with('message',$res)->with('data',$data)->with('status','更新処理完了！');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = Crud::findOrFail($id);
        $crud->delete();
        
        $data = Crud::latest('created_at')->get();
        return redirect('/crud/')->with('status', '削除処理完了！')->with('data',$data);
    }
}
