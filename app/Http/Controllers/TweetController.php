<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use DB;

class TweetController extends Controller
{
    public function Tweets(){
        // Elequent
        //$tweets = Tweet::all();

        //SQL
        $tweets = DB::select("SELECT * FROM tweets");

        
        return view("tweets")->with(array("tweetss" => $tweets, "title" => "Tweets"));
    }

    public function ApiTweets(){
        // Elequent
        //$tweets = Tweet::all();

        //SQL
        $tweets = DB::select("SELECT * FROM tweets");

        return response()->json($tweets);
    }

    public function TweetDetail($id){
        $tweet = Tweet::find($id);
        return $tweet;
    }

    public function Test($param1, $param2){
        return "Test";
    }

    public function Create(Request $request){
        $this->validate($request, [
            "tweetbody" => "required"
        ]);
        $tweet = new Tweet;
        $tweet->body = $request->input("tweetbody");
        $tweet->userid = auth()->user()->id;
        $tweet->save();
        //return "123";
        return redirect("/tweets");
    }

    public function Destroy($id){

    }
}
