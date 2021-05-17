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
        <h2>Information About The Isekai Genre</h2>
        <p>The Isekai genre has exploded in popularity in the last couple of seasons. The isekai genre usually involves our main character somehow going into a
            new world. Most popular ways is that either, the main character dies in some kind of accident and is transported into a new world by some angel, or
            supernatural being. But sometimes, the character is simply transferred without any real reason. The third and final reason is, that some circumstance
            in the new world required that someone was transferred there. The Saga of Tanya the Evil is more like the first type we discussed, Tanya in her old
            life was a buisness man who's job was to fire other people but then someone that he fired got revenge on him and killed him by pushing him into train tracks.
            A god like figure appears and transfers him into a new world. The Rising of the Shield Hero is more like the last option, the world he was transferred to
            need new heros. So they summoned four people including our main character Naofumi. Re:Zero is more like the second option. Our main character Subaru, was
            going on with his day until he is transported into a new world without any warning or reason. He simply just appeared into the new world.</p>
    </div>
    <h2>Here is information about the popular Isekai animes mentioned on the home page!</h2>
    <div class="info">
        <h3>The Saga of Tanya the Evil</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/tanyaevil.jpg" />
        <p>The Saga of Tanya the Evil takes place in an alternate universe, where humans can use magic. Our main character Tanya is transported to this world when she is killed in her
            previous life and was brought to this new world by a supernatural being that is referred to as "Being-X". Being-X wants to strengthen Tanya's belief in god and to do so, he
            makes her suffer through time of war. Ocassionally also making things go against her on purpose. She is a part of the Empire which would represent our world Germany. She has to
            fight her way out of the war, which resembles World War 1, without falling to the enemy and not submitting to Being-X.</p>
    </div>
    <div class="info">
        <h3>The Rising of the Shield Hero</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/shieldhero.jpg" />
        <p>The Rising of the Shield Hero takes place in a fantasy world. Our main character, Naofumi, is suddenly summoned to this new world without any information. Later he finds out
            that he is one of the cardinal heros (heros which have great power and defend the country form waves of enemies). He is assigned the task of being the Shield Hero. He quickly
            learns the hard way that the Shield Hero is not welcomed in the country he is summoned in. They quickly accuse him of sexual assult and is always treated poorly. The other
            heros refuse to work aside him. All he has is himself and a new demi human named Raphtalia that he got from a slave owner. But it turns out that demi humans really respect the
            shield hero! Together they work together to clear his name and fight off waves of enemies to save the country.</p>
    </div>
    <div class="info">
        <h3>Re:Zero</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/rezero.jpg" />
        <p>Natsuki Subaru is a regular boy living an ordinary life. One day when he is gone to go buy food he is transported to a different world! He meets this beautiful mysterious
            girl and finds out that she has lost something of value. He decides to help this girl look for her stole goods. When finding her valuables, they are both killed! Subaru finds
            out that he can come back to life with all his memories still there! He tries to find this girl again but once found it seems like she doesn't remember anything! In order to
            find out about this power and to protect the girl, he continously repeats history over and oveer again until he can get behind all of this. But little did he know, this would
            be a long, daring, and brutal proccess...</p>
    </div>
    <div class="info">
        <h3 style="text-align: left">Want to find out the Japanese Name for one of these animes? Type it below!</h3>
        <form name="form_name" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            @csrf
            <p>English Name:</p>
            <input type="text" name="name" /> <br />
            <input type="hidden" name="form" value="A"> <br />
            <input type="submit" name="submit1" value="Gimme the Japanese Name!" />
        </form>

        <h3 style="text-align: left">Want more info about on one of the three animes? Type the name here!</h3>
        <form name="form_info" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            @csrf
            <p>Anime Name:</p>
            <input type="text" name="aName" /> <br />
            <input type="hidden" name="form" value="B"> <br />
            <input type="submit" name="submit2" value="I want more info!" />
        </form>
        <?php
        if(($_SERVER['REQUEST_METHOD'] == 'POST')) {
            switch ($_POST['form']){
                case "A":
                    $name = $_POST['name'];
                    if (strcasecmp($name, "The Saga of Tanya the Evil") == 0){
                        print("The japanese name of " . $name . " is: Youjo Senki");
                    }
                    elseif (strcasecmp($name, "The Rising of the Shield Hero") == 0){
                        print("The japanese name of " . $name . " is: Tate no Yuusha no Nariagari");
                    }
                    elseif (strcasecmp($name, "Re:Zero") == 0){
                        print("The japanese name of " . $name . " is: Re:Zero kara Hajimeru Isekai Seikatsu");
                    }
                    else {
                        print("Hey! That anime was not mentioned above D:");
                    }
                    break;
                case "B":
                    $aname = $_POST['aName'];
                    if (strcasecmp($aname, "The Saga of Tanya the Evil") == 0){
                        print("Get more info on " . $aname . " here: "  . "<a href='https://myanimelist.net/anime/32615/Youjo_Senki?q=saga%20of%20tan&cat=anime'>$aname information</a>");
                    }
                    elseif (strcasecmp($aname, "The Rising of the Shield Hero") == 0){
                        print("Get more info on " . $aname . " here: "  . "<a href='https://myanimelist.net/anime/35790/Tate_no_Yuusha_no_Nariagari?q=rising%20of%20the%20&cat=anime'>$aname information</a>");
                    }
                    elseif (strcasecmp($aname, "Re:Zero") == 0){
                        print("Get more info on " . $aname . " here: " . "<a href='https://myanimelist.net/anime/31240/Re_Zero_kara_Hajimeru_Isekai_Seikatsu?q=re&cat=anime'>$aname information</a>");
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
