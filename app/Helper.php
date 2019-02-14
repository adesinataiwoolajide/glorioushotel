<?php

   	function gettingRoomType($type_id){
   		return \DB::table('room_types')->where([
   			"id" => $type_id
   		])->get();
    }

    function gettingRooms($type_id){
   		return \DB::table('rooms')->where([
   			"type_id" => $type_id,
   			"status"=>0,
   		])->get();
    }

    function gettingRoomTypeName($type_name){
      return \DB::table('room_types')->where([
        "type_name" => $type_name,
      ])->get();
    }

 ?>