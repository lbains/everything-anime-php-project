<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Everything Anime</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="{{ asset('project.css') }}">
</head>
    <header>
    </header>
    <nav id="nav">
        <a class="nav-link" href="/">Home</a> &nbsp;
        <a class="nav-link" href="{{ route('shounen') }}">Shounen</a> &nbsp;
        <a class="nav-link" href="{{ route('isekai') }}">Isekai</a> &nbsp;
        <a class="nav-link" href="{{ route('horror') }}">Horror</a> &nbsp;
        <a class="nav-link" href="{{ route('psychological') }}">Psychological</a> &nbsp;
        <a class="nav-link" href="{{ route('manga') }}">Manga</a> &nbsp;
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
    </nav>
    <body>
    <div class="info">
        <h2>Information About The Shounen Genre</h2>
        <p>One of the most iconic genres in anime is the Shounen genre. It has produced many animes that people love to watch today. For example, some of the most popular animes like
            Naruto, Black Clover, and Demon Slayer are all animes that fall under this category. For the most part, the shounen genre focuses on fighting.
            Usually, there is the main character up against one evil character. A lot of the times the bad guy or the main rival of our main character is/used to be friends,
            let's take Naruto, for example, Naruto and his rival Sasuke used to be good friends until Sasuke turned evil. But this is not the case for all shounen, Demon Slayer has
            our main character up against a whole group of people or as I should say Demons. While the shounen genre focuses on fight scenes, it also has a lot of comedy mixed into it.
            Our main character usually starts of being weak and being teased for being weak, but a specific event in their life allows them to discover a new power that they had inside
            of them this entire time. In Black Clover, Asta is always teased for being the only one without and magic, but then suddenly when his best friend, Yuno, is in danger he gets
            a new power that is referred to as "Anti Magic." Shounen animes may all seem the same, but that is the point, the genre isn't very flexible, and that will result in
            very similar animes. This genre is more popular with males and usually is watched by kids, teenagers, and young adults.</p>
    </div>
    <h2>Here is information about the popular Shounen animes mentioned on the home page!</h2>
    <div class="info">
        <h3>Naruto</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/naruto.jpg" />
        <p>
            Naurto Uzumaki is a boy that was born in the Village of the Hidden Leaves. He grew up without a family and was always shunned. He had no idea to why everyone distanced themselves
            from him but later he finds out that the spirit of the nine tailed fox was inside of him. This nine tailed fox almost destroyed the entire village. The fox even took
            the life of the fourth hokage, which is known to be the strongest ninja in the village. Naruto vowes that he'll become the hokage one day, along side his comrades
            he takes down evil and trains everyday to become the strongest. But one day, everything turns sour as his best friend, Sasuke Uchiha, turns evil and joins forces
            with the strongest terriost, Orochimaru. Now together with his comrades, he needs to bring back Sasuke while trying to become the new Hokage.

        </p>
    </div>
    <div class="info">
        <h3>Black Clover</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/blackclover.jpg" />
        <p>Asta and his foster brother Yuno grew up in the ruins of the Clover Kingdom. Yuno has overwhelming magical powers while Asta has no magic at all. But soon, Asta
            discovers a new power, Anti Magic. With this new power, Yuno and Asta try proving to everyone that you do not have to be royalty to become the strongest wizard in
            the kingdom. Early on in their careers of being Magic Knights, Yuno and Asta quickly become some of the strongest knights. Both of them make a competition of who
            could become the strongest faster and become the Wizard King, the strongest Magic Knight in the Clover Kingdom. Things quickly start to get serious as a terrorist group
            known as  the Eye of the Midnight Sun start to rise and swear to kill all humans. Together with his teammates known as the Black Bulls, Asta needs to take down this group
            with other help like Yuno and his teammates known as the Golden Dawn.</p>
    </div>
    <div class="info">
        <h3>Demon Slayer</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/demonslayer.jpg" />
        <p>One day Tanjiro Kamado goes out to sell coal. When he returns he finds his family dead. It turns out that a demon attacked his home while he was away. When inspecting for
            clues about who did it, he finds his little sister, Nezuko, still breathing. He decides to take her and run away so the demon doesn't come back. When his sister wakes up it
            turns out that she is now a demon. But she refuses to attack any humans, Tanjiro and Nezuko try to find out who did this to their family. Along the way they make
            new friends that help them and Tanjiro decides to join something called the "Demon Corps" that go and kill demons. They face adversity as some people can't accept the
            fact that a demon and human work together. They still don't let that stop them and continue on their conquest to find out who is ruining innocent people's lives.</p>
    </div>
    <div class="info">
        <h3 style="text-align: left">Want to find out the Japanese Name for one of these animes? Type it below!</h3>
        <form name="form_name" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            @csrf
            <div style="font-size: 25px; padding-bottom: 10px;">
                English Name:
                <input type="text" name="name" /> <br />
                <input type="hidden" name="form" value="A"> <br />
                <input type="submit" name="submit1" value="Gimme the Japanese Name!" />
            </div>
        </form>

        <h3 style="text-align: left">Want more info about on one of the three animes? Type the name here!</h3>
        <form name="form_info" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            @csrf
            <div style="font-size: 25px; padding-bottom: 10px;">
                Anime Name:
                <input type="text" name="aName" /> <br />
                <input type="hidden" name="form" value="B"> <br />
                <input type="submit" name="submit2" value="I want more info!" />
            </div>
        </form>
        <?php

        if(($_SERVER['REQUEST_METHOD'] == 'POST')) {
            switch ($_POST['form']){
                case "A":
                    $name = $_POST['name'];
                    if (strcasecmp($name, "Naruto") == 0){
                        print("Naruto has the same name in Japan!");
                    }
                    elseif (strcasecmp($name, "Black Clover") == 0){
                        print("Black Clover has the same name in Japan!");
                    }
                    elseif (strcasecmp($name, "Demon Slayer") == 0){
                        print("The japanese name of " . $name . " is: Kimetsu no Yaiba");
                    }
                    else {
                        print("Hey! That anime was not mentioned above D:");
                    }
                    break;
                case "B":
                    $aname = $_POST['aName'];
                    if (strcasecmp($aname, "Naruto") == 0){
                        print("Get more info on " . $aname . " here: "  . "<a href='https://myanimelist.net/anime/20/Naruto?q=naruto&cat=anime'>$aname information</a>");
                    }
                    elseif (strcasecmp($aname, "Black Clover") == 0){
                        print("Get more info on " . $aname . " here: "  . "<a href='https://myanimelist.net/anime/34572/Black_Clover?q=black%20clover&cat=anime'>$aname information</a>");
                    }
                    elseif (strcasecmp($aname, "Demon Slayer") == 0){
                        print("Get more info on " . $aname . " here: " . "<a href='https://myanimelist.net/anime/38000/Kimetsu_no_Yaiba?q=demon%20slayer&cat=anime'>$aname information</a>");
                    }
                    else {
                        print("Hey! That anime was not mentioned above D:");
                    }
                    break;
                default:
                    echo "huh";
            }
        }
        ?>
    </div>



    </body>
    <footer>
        This is a college assignment, NONE of the images belong to me, just found them on google lmao, plz no copyright
    </footer>
</html>
