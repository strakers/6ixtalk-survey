<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordPhraseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fields = [
            'submission_id',
            'word_type_id',
            'name',
            'meaning',
        ];

        foreach($this->storage_values as $storage_set){
            $package = array_combine($fields, $storage_set);
            DB::table('word_phrases')->insert( $package );
        }
    }

    private $storage_values = [
        [0,2,'6ix','toronto'],
        [0,4,'ahlie','right, true, truth'],
        [0,3,'all whagwan','all I know is, all that happened was'],
        [0,2,'amped','excited'],
        [0,3,'are you dumb','stupid or surprisingly impressed'],
        [0,3,'arms house','outrageous, petty, unscrupulous'],
        [0,3,'baddie','a girl with attitude'],
        [0,3,'ball up','smoke weed, handle business'],
        [0,2,'bare','a lot, much'],
        [0,2,'base','home'],
        [0,3,'be heat','attract attention'],
        [0,3,'be sick with it','to be cool, hype, talented'],
        [0,2,'beak','mouth'],
        [0,2,'beak','fronting, lying'],
        [0,2,'bean','waste man to another level'],
        [0,2,'beat','ugly, tired, also to have sex'],
        [0,2,'beatty','ugly, unattractive'],
        [0,2,'beaut','a good-looking/attractive person'],
        [0,2,'beef','grudge, problem, dispute, contention'],
        [0,2,'beef ting','a fight'],
        [0,2,'beg','doing too much, acting out, out of order, out of character'],
        [0,2,'bet','affirmative, i\'m down'],
        [0,2,'bill up','roll weed, build up'],
        [0,2,'bitty','a girl, usually slim in nature'],
        [0,2,'blem','high, tipsy, drunk'],
        [0,2,'blessed','good'],
        [0,4,'bloodclot',''],
        [0,4,'boom',''],
        [0,2,'book','to catch, expose'],
        [0,3,'bout it','to be on board'],
        [0,2,'bro','brother, friend, fellow person'],
        [0,2,'bucktee','homeless person, crackhead, useless person, slob, urban NEET, whack person'],
        [0,2,'bun','light/smoke up'],
        [0,2,'check','visit, look up on, look after'],
        [0,2,'checking','courting, onset to dating'],
        [0,2,'cheese','to anger, vexate'],
        [0,2,'cheesed','angered, vexed, irate'],
        [0,2,'chop','holler, pick up'],
        [0,2,'crib','home'],
        [0,2,'cuss','curse, insult'],
        [0,2,'cut','leave, exit'],
        [0,2,'cyattie',''],
        [0,2,'dat','that'],
        [0,2,'deadass',''],
        [0,2,'deaffaz','a blow/punch'],
        [0,2,'deal','handle; onset to dating'],
        [0,2,'deal with','whats going on, whats up'],
        [0,2,'deep','far'],
        [0,2,'deezed','muscular'],
        [0,2,'dhillo','thot, hoe'],
        [0,2,'dime-piece','a beautiful looking woman'],
        [0,2,'dip','leave, exit'],
        [0,2,'dis','this'],
        [0,2,'diss','disrespect, insult'],
        [0,2,'dog','a friend, companion, acquaintance'],
        [0,2,'doobie','a spliff'],
        [0,2,'dro','weed'],
        [0,2,'dukes','parent(s)'],
        [0,4,'dun kno','already know, affirmative'],
        [0,4,'eh',''],
        [0,2,'extra','extremely over the top'],
        [0,4,'facts','the truth'],
        [0,2,'fam','family, friend'],
        [0,2,'finesse','deceive, lie, trick'],
        [0,2,'floss',''],
        [0,3,'from time','from way back when, a long time'],
        [0,3,'get done up','to get dealt with'],
        [0,2,'greeze',''],
        [0,2,'greezy',''],
        [0,2,'grimey',''],
        [0,2,'gyaldem','a set of females'],
        [0,2,'gyallis',''],
        [0,2,'haram','forbidden'],
        [0,2,'honest',''],
        [0,2,'hooyo','mother'],
        [0,3,'hug it','to take little importance of, to allow'],
        [0,4,'hunnit','hundred, honest'],
        [0,2,'jeez','jesus'],
        [0,2,'kawal','deceive, lie, trick, fool, be sneaky'],
        [0,2,'kicks','shoes'],
        [0,3,'know those ones','to relate'],
        [0,2,'kush','weed'],
        [0,2,'light','mild, unimportant, less impactful, insignificant, lesser'],
        [0,2,'link','a connection, contact, or resource'],
        [0,2,'link up','to meet, connect with'],
        [0,2,'liqs','alcohol'],
        [0,2,'lit','amazing, crazy, best'],
        [0,2,'live','amazing, exciting, hot'],
        [0,2,'loud','weed'],
        [0,2,'lowe','to allow, ignore, pass'],
        [0,2,'lowkey','really, subtlely, obscurely'],
        [0,3,'make movements','leave, go somewhere else'],
        [0,2,'mandem','a set of males'],
        [0,2,'mans','3rd person self, 3rd person abstract'],
        [0,2,'marved','hungry'],
        [0,2,'merk',''],
        [0,2,'merked',''],
        [0,2,'minute','a long period of time'],
        [0,4,'miskeen','expressing sympathy, empathy, for sad or pathetic situations'],
        [0,2,'mixx','prone to drama/issues'],
        [0,2,'momma dukes','mom'],
        [0,3,'more times','often'],
        [0,2,'moss',''],
        [0,2,'motive','plan, goal, schedule'],
        [0,2,'nice',''],
        [0,2,'nize','to shut up, stop talking'],
        [0,2,'nuff','enough'],
        [0,2,'nyam','to eat (vigorously)'],
        [0,4,'nyeah eh',''],
        [0,3,'ooobviously','an accentuated version of the word (often followed by "are you dumb")'],
        [0,3,'on road','out and about'],
        [0,2,'page','confront, tackle, fess up'],
        [0,1,'pree',''],
        [0,2,'ratchet','ghetto, unruly'],
        [0,2,'reach','to arrive'],
        [0,2,'reach','to overextend, exaggerate, make something of nothing, to instigate'],
        [0,3,'real shit','honestly'],
        [0,2,'reggie',''],
        [0,2,'regulate','to deal with, handle, fight, beat'],
        [0,2,'rinse',''],
        [0,2,'roadman',''],
        [0,2,'rocket',''],
        [0,2,'run up','to approach'],
        [0,3,'saying','whats going on, whats up'],
        [0,2,'scoop','pick up (in a vehicle)'],
        [0,2,'scrap','fight'],
        [0,2,'shordy','a girl'],
        [0,2,'sick','cool, hype'],
        [0,2,'sketch','suspicious, potentially dangerous'],
        [0,2,'sleep','miss out, pass up'],
        [0,2,'slew','an overly promiscuous person (usually female)'],
        [0,2,'smash','to have a sexual encounter with someone'],
        [0,2,'snake','an untrustworthy person'],
        [0,1,'soft',''],
        [0,1,'steeze',''],
        [0,4,'styll',''],
        [0,2,'sus','suspect, suspicious'],
        [0,2,'sweet','cute, good looking'],
        [0,2,'sweeterman','an attractive male'],
        [0,2,'swerve','dodge'],
        [0,4,'szeen','you know what I\'m saying, right, you agree, you feel me'],
        [0,2,'telly ting','a callgirl, bootycall girl'],
        [0,2,'timmies','tim hortons'],
        [0,2,'ting','a thing; a girl'],
        [0,2,'too tough','that much'],
        [0,2,'topleft','honestly, on my life'],
        [0,1,'toronto',''],
        [0,2,'touch','go somewhere'],
        [0,3,'touch base','go home'],
        [0,3,'touch road','go somwhere outside'],
        [0,2,'tru',''],
        [0,3,'tun up','to become lively, wild'],
        [0,3,'two-twos','suddenly, but, on the other hand, on the contrary, basically, long story short, funny thing is'],
        [0,3,'wallahi','swear to God'],
        [0,2,'wassi','crazy, mad, out of order, silly'],
        [0,2,'wasteman','a worthless person'],
        [0,2,'wasteyute','a worthless young person'],
        [0,2,'wavy','high, tispy'],
        [0,4,'whagwan','hello (greeting)'],
        [0,2,'wheel','to stall; a car'],
        [0,2,'whyle','act crazy'],
        [0,2,'wife','one\'s woman'],
        [0,2,'wifey','one\'s woman (endearing)'],
        [0,2,'word','honestly'],
        [0,4,'yeah eh',''],
        [0,2,'pac mall','pacific mall'],
        [0,2,'p mall','pacific mall'],
        [0,2,'joobie',''],
        [0,2,'butterface','an unattractive person'],
        [0,2,'c-note',''],
        [0,2,'feen','to crave'],
    ];
}