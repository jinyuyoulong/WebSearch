<?php
namespace app\api\controller;
use think\Config;
/**
 * 
 */
class Index
{
	
	public function index($type='json')
	{
		if (!in_array($type, ['json','xml'])) {
			$type =  'json';
		}
		Config::set('default_return_type',$type);
		$response = [
            'code' => 200,
            'result' => [
                'list'=>[1,2,3,4,5]
            ]
        ];
		return $response;
	}

	public function demo()
	{
		return 'api index demo';
	}
}