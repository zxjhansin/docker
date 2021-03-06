<?php
namespace app\user\model;

use think\Cache;
use think\Model;
use think\Db;

Class User extends Model{

	static public function createUser($data){
		//$user = new User;
		$items = json_decode($data,true);
		foreach($items as $item){
			$item['password'] = md5($item['password']);
			$item['status'] =1;
			//$user->allowField(true)->save($item);
			User::create($item);
		}
	}
	
	static public function index($item){
		$limit = $item['limit'];
		$where = ['status'=>1];
		$result = User::where($where)->paginate($limit,false);
        $res['data'] = $result->items();
        $res['count'] = $result->total();
		return $res;
	}
	
	static public function read($item){
		$user = User::get(['id' => $item])->toArray();
		return $user;
	}
	
    static public function updateUser($id,$item){
		$item = json_decode($item,true);
		User::update($item,['id' => $id]);
		return true;
	}
	
}