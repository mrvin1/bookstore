<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('book')->insert([
            'name' => 'Harry Potter and the Philosophers Stone',
            'synopsis' => 'Ten-year-old Harry Potter is an orphan who lives in the fictional London suburb of Little Whinging, Surrey, with the Dursleys: his uncaring Aunt Petunia, loathsome Uncle Vernon, and spoiled cousin Dudley. The Dursleys barely tolerate Harry, and Dudley bullies him. One day Harry is astonished to receive a letter addressed to him in the cupboard under the stairs (where he sleeps). Before he can open the letter, however, Uncle Vernon takes it. Letters for Harry subsequently arrive each day, in increasing numbers, but Uncle Vernon tears them all up, and finally, in an attempt to escape the missives, the Dursleys go to a miserable shack on a small island. On Harry’s 11th birthday, a giant named Hagrid arrives and reveals that Harry is a wizard and that he has been accepted at the Hogwarts School of Witchcraft and Wizardry. He also sheds light on Harry’s past, informing the boy that his parents, a wizard and a witch, were killed by the evil wizard Voldemort and that Harry acquired the lightning-bolt scar on his forehead during the fatal confrontation.',
            'cover' => '1.jpg',
            'price' => 300000,
            'author'=> 'J.K. Rowling'
        ]);
        \DB::table('book')->insert([
            'name' => 'The Christmas Pig',
            'synopsis' => 'One boy and his toy are about to change everything... Jack loves his childhood toy, Dur Pig. DP has always been there for him, through good and bad. Until one Christmas Eve something terrible happens -- DP is lost. But Christmas Eve is a night for miracles and lost causes, a night when all things can come to life... even toys. And Jack’s newest toy -- the Christmas Pig (DP’s replacement) -- has a daring plan: Together they’ll embark on a magical journey to seek something lost, and to save the best friend Jack has ever known... ',
            'cover' => '2.jpg',
            'price' => 436000,
            'author'=> 'J.K. Rowling'
        ]);
        \DB::table('book')->insert([
            'name' => 'Smile: The Story of a Face',
            'synopsis' => 'The extraordinary story of one woman’s ten-year medical and metaphysical odyssey that brought her physical, creative, emotional, and spiritual healing, by a MacArthur genius and two-time Pulitzer finalist. With a play opening on Broadway, and every reason to smile, Sarah Ruhl has just survived a high-risk pregnancy when she discovers the left side of her face is completely paralyzed. She is assured that 90 percent of Bell’s palsy patients see spontaneous improvement and experience a full recovery. Like Ruhl’s own mother. But Sarah is in the unlucky ten percent. And for a woman, wife, mother, and artist working in theater, the paralysis and the disconnect between the interior and exterior brings significant and specific challenges. So Ruhl begins an intense decade-long search for a cure while simultaneously grappling with the reality of her new face—one that, while recognizably her own—is incapable of accurately communicating feelings or intentions.',
            'cover' => '3.jpg',
            'price' => 470000,
            'author'=> 'Sarah Ruhl'
        ]);
        \DB::table('book')->insert([
            'name' => 'The Little Prince',
            'synopsis' => 'A pilot stranded in the desert awakes one morning to see, standing before him, the most extraordinary little fellow. "Please," asks the stranger, "draw me a sheep." And the pilot realizes that when lifes events are too difficult to understand, there is no choice but to succumb to their mysteries. He pulls out pencil and paper... And thus begins this wise and enchanting fable that, in teaching the secret of what is really important in life, has changed forever the world for its readers.',
            'cover' => '4.jpg',
            'price' => 250000,
            'author'=> 'Antoine de Saint-Exupéry'
        ]);
        \DB::table('book')->insert([
            'name' => 'The Hunger Games',
            'synopsis' => 'Could you survive on your own in the wild, with every one out to make sure you do not live to see the morning? In the ruins of a place once known as North America lies the nation of Panem, a shining Capitol surrounded by twelve outlying districts. The Capitol is harsh and cruel and keeps the districts in line by forcing them all to send one boy and one girl between the ages of twelve and eighteen to participate in the annual Hunger Games, a fight to the death on live TV',
            'cover' => '5.jpg',
            'price' => 275000,
            'author'=> 'Suzanne Collins'
        ]);
        \DB::table('book')->insert([
            'name' => 'IT',
            'synopsis' => 'A promise made twenty-eight years ago calls seven adults to reunite in Derry, Maine, where as teenagers they battled an evil creature that preyed on the citys children. Unsure that their Losers Club had vanquished the creature all those years ago, the seven had vowed to return to Derry if IT should ever reappear. Now, children are being murdered again and their repressed memories of that summer return as they prepare to do battle with the monster lurking in Derrys sewers once more',
            'cover' => '6.jpg',
            'price' => 319000,
            'author'=> 'Stephen King'
        ]);
        \DB::table('book')->insert([
            'name' => 'Georges Secret Key to the Universe',
            'synopsis' => 'Georges parents, who have always been wary of technology, warn him about their new neighbors: Eric is a scientist and his daughter, Annie, seems to be following in his footsteps. But when George befriends them and Cosmos, their super-computer, he finds himself on a wildly fun adventure, while learning about physics, time, and the universe. With Cosmos help, he can travel to other planets and a black hole. But what would happen if the wrong people got their hands on Cosmos? George, Annie, and Eric arent about to find out, and what ensues is a funny adventure that clearly explains the mysteries of science.',
            'cover' => '7.jpg',
            'price' => 200000,
            'author'=> 'Lucy Hawking and Stephen Hawking'
        ]);
        \DB::table('book')->insert([
            'name' => 'No Longer Human',
            'synopsis' => 'Osamu Dazais No Longer Human, this leading postwar Japanese writers second novel, tells the poignant and fascinating story of a young man who is caught between the breakup of the traditions of a northern Japanese aristocratic family and the impact of Western ideas. In consequence, he feels himself "disqualified from being human" (a literal translation of the Japanese title).',
            'cover' => '8.jpg',
            'price' => 329000,
            'author'=> 'Osamu Dazai'
        ]);
        \DB::table('book')->insert([
            'name' => 'Norwegian Wood',
            'synopsis' => 'Toru, a quiet and preternaturally serious young college student in Tokyo, is devoted to Naoko, a beautiful and introspective young woman, but their mutual passion is marked by the tragic death of their best friend years before. Toru begins to adapt to campus life and the loneliness and isolation he faces there, but Naoko finds the pressures and responsibilities of life unbearable. As she retreats further into her own world, Toru finds himself reaching out to others and drawn to a fiercely independent and sexually liberated young woman.',
            'cover' => '9.jpg',
            'price' => 288000,
            'author'=> 'Haruki Murakami'
        ]);
        \DB::table('book')->insert([
            'name' => 'You Are the Apple of My Eye',
            'synopsis' => 'It all started when Ke Jingteng, a student above, was transferred to sit in front of Shen Jiayi, so that the model girl could watch over him. Ke Jingteng felt that Shen Jiayi was as boring as mothers, as well as annoying. Moreover, the girl always likes to stab her in the back when she wants to sleep in class with a pen so that her uniform is full of ink. However, Ke Jingteng slowly realized that Shen Jiayi was a very special girl for him.',
            'cover' => '10.jpg',
            'price' => 309000,
            'author'=> 'Giddens Ko'
        ]);
        \DB::table('book')->insert([
            'name' => 'Ready Player One',
            'synopsis' => 'IN THE YEAR 2044, reality is an ugly place. The only time teenage Wade Watts really feels alive is when hes jacked into the virtual utopia known as the OASIS. Wades devoted his life to studying the puzzles hidden within this worlds digital confines, puzzles that are based on their creators obsession with the pop culture of decades past and that promise massive power and fortune to whoever can unlock them.',
            'cover' => '11.jpg',
            'price' => 420000,
            'author'=> 'Ernest Cline'
        ]);
        \DB::table('book')->insert([
            'name' => 'Your Name',
            'synopsis' => 'Mitsuha Miyamizu, a high school girl, yearns to live the life of a boy in the bustling city of Tokyo—a dream that stands in stark contrast to her present life in the countryside. Meanwhile in the city, Taki Tachibana lives a busy life as a high school student while juggling his part-time job and hopes for a future in architecture. One day, Mitsuha awakens in a room that is not her own and suddenly finds herself living the dream life in Tokyo—but in Takis body! Elsewhere, Taki finds himself living Mitsuhas life in the humble countryside. In pursuit of an answer to this strange phenomenon, they begin to search for one another.',
            'cover' => '12.jpg',
            'price' => 180000,
            'author'=> 'Makoto Shinkai'
        ]);
        
        
    }
}
