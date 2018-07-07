<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//User: Webmaster
        App\User::create ([
            'name'      =>  'Rafael',
            'lastname'  =>  'Muñoz Ramirez',
            'slug'      =>  'rafael-munoz-ramirez',
            'email'     =>  'rafaelmunoznl@yahoo.com',
            'password'  =>  bcrypt('0vaci0nES!!'),
        ]);

	        // User Status 
	            App\Status::create ([
	                'statusable_id'     =>  1,
	                'status'            => 'active',
	                'statusable_type'   =>  'users',
	            ]);

        App\Profile::create ([
            'user_id'       =>  1,
            'title'         =>  'Rafael',
            'subtitle'	   	=>  'Fachinformatiker für Anwedungsentwicklung',
            'role_id'       =>  1,
            'gender_id'     =>  3,
            'slug'		    => 'fachinformatiker',
            'birthday' 	    =>  '1966-05-19',          
            'about'   	     =>  'Mein Name ist Rafael Muñoz Ramírez. Ich arbeite Vollzeit als Webentwickler und gleichzeitig als freiberuflicher Webdesigner in Berlin. Meine Tätigkeit geht allerdings weit über die Hauptstadt hinaus.

Ich habe mein Studium erfolgreich als Architekt Ende der 80er Jahre in Kuba abgeschlossen. Wie das Leben so spielt, sollte dies nicht die Endstation meines beruflichen Werdegangs sein. Es war ein langer Weg, der mich zum Webdesigner gemacht hat. Ich begann mit kleinen Änderungen meiner eigenen Website, indem ich Farben hinzufügte oder Plugins verband. Dies waren die ersten schritte meiner HTML und CSS Erfahrungen.

In Deutschland hatte ich die Gelegenheit in weltbekannten Firmen wie ebay und 1&1 zu arbeiten. Dort wurde ich zum Experten in WordPress und konnte mich in PHP und Larabel weiterentwickeln. Wie es in Deutschland üblich ist, kann man einen Beruf ohne einen Abschluss nicht erfolgreich ausüben. So erlangte ich im Abendstudium den Titel Fachinformatiker für Anwedungsentwicklung.

Heute betreue ich kleine und mittelständische Unternehmen in ganz Deutschland. Mein Servicespektrum beinthaltet die Umsetzung von individuellem Design und Layout-Ideen für Websites für kleine Unternehmen (KMU).',            
        ]);

	        // Profile Status 
	            App\Status::create ([
	                'statusable_id'     =>  1,
	                'status'            => 'active',
	                'statusable_type'   =>  'profiles',
	            ]);

         App\Image::create ([
            'id'                =>  1,
            'profile_id'        =>  1,
            'imageable_id'      =>  1,
            'imageable_type'    =>  'profiles',           
            'slug'              =>  'rafael.jpg',
            'title'             =>  'rafael',
            'alt'               =>  'Rafael,Fachinformatiker für Anwedungsentwicklung',
            'about'             =>  'Rafael, Fachinformatiker für Anwedungsentwicklung',
        ]);


        // Image Status 
            App\Status::create ([
                'statusable_id'     =>  1,
                'status'            => 'active',
                'statusable_type'   =>  'images',
            ]);

    }
}
