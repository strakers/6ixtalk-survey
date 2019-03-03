<?php

namespace App\Http\Controllers;

use App\Submission;
use App\WordPhrase;
use App\WordPhraseMeaning;
use App\WordPhraseRating;
use Illuminate\Http\Request;
use App\Http\Requests\SubmissionRequest;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubmissionRequest $request)
    {
        $savelog = [
            'submission' => [
                'success' => 0,
                'error' => 0,
            ],
            'ratings' => [
                'success' => 0,
                'error' => 0,
            ],
            'meanings' => [
                'success' => 0,
                'error' => 0,
            ]
        ];
        //
        $submission = new Submission();
        $submission->name = $request->get('personal.name');
        $submission->generated_name_id = $request->get('personal.generated_name_id');
        $submission->age = $request->get('personal.age');
        $submission->gender = $request->get('personal.gender');
        $submission->used_binary_gender = $request->get('personal.used_binary_gender');
        $submission->location = $request->get('personal.location');
        $submission->nationality = $request->get('personal.nationality');
        $submission->email_address = $request->get('personal.email');
        $submission->ip_address = $request->ip();

        if( $submission->save() ){
            $savelog['submission']['success']++;

            foreach($request->corrections as $correction){
                $rating = new WordPhraseRating();
                $rating->submission_id = $submission->id;
                $rating->word_phrase_id = $correction['word_id'];
                $rating->rating = $correction['rating'];
                $rating->theme = $correction['theme'];
                $rating->meaning = $correction['meaning'];
                $rating->region = $correction['region'];
                if( $rating->save() ){
                    $savelog['ratings']['success']++;
                }
                else{
                    $savelog['ratings']['error']++;
                }
            }

            foreach($request->experience as $addition){
                $word = WordPhrase::firstOrCreate(
                    [
                        'name' => $addition['word']
                    ],
                    [
                        'meaning' => $addition['meaning']
                    ]
                );

                $meaning = new WordPhraseMeaning();
                $meaning->submission_id = $submission->id;
                $meaning->word_phrase_id = $word->id;
                $meaning->similar = $addition['similar'];
                $meaning->usage = $addition['usage'];
                $meaning->meaning = $addition['meaning'];
                $meaning->region = $addition['region'];

                if( $meaning->save() ){
                    $savelog['meanings']['success']++;
                }
                else{
                    $savelog['meanings']['error']++;
                }
            }
        }
        else {
            $savelog['submission']['error']++;
        }

        return response()->json($savelog);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(Submission $submission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function edit(Submission $submission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submission $submission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submission $submission)
    {
        //
    }
}
