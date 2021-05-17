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
        <h2>Information About The Psychological Genre</h2>
        <p>The Psychological anime genre is really a genre made up of every other genre but with a twist. These animes get you on edge and really make you think
            about what is going to happen next. This genre usually has two people of similar intelligence, usually extremly smart people
            or just our main character who is extremly smart. This person has the task of taking on another person or many people. In Death Note, we have Light Yagami
            who is a really smart student who obtains the power to kill anyone, but someone is stopping him, L, who is an extremly intelligent detective. In Code Geass,
            our main character, Lelouch vi Britannia is a really good strategist, he knows how to get out of tricky situations in a snap of fingers, but instead of being
            up againt another being, he is up against an entire nation. In Kaguya-sama Love is War, Kaguya and Shirogane are the two smartest people in their school,
            they have a sophisticated image and while being in love with each other, they refuse to admit it to keep this image. The entire anime is about them trying
            to outsmart one another and try to get the other to confess their love. All these animes also have many other genres linked to them, the best example of this
            is Kaguya-sama Love is War, this anime has a lot of comedy scenes and is very well known for its comedy.</p>
    </div>
    <h2>Here is information about the popular Psychological animes mentioned on the home page!</h2>
    <div class="info">
        <h3>Death Note</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/deathnote.jpg" />
        <p>Light Yagami, a high school student and prodigy, finds a mysterious notebook called the Death Note. Apparently the book can kill people by simply writing their name down in
            it and imagining their face while at it. At first he is unmoved by the book thinking it is some kind of prank. But he is just to curious and takes the notebook. He tests it by
            killing a criminal and to his suprise it works. He continues down this path and kills criminals to make it a world centered around his justice. The world is taken by surprise
            and needs to do something about this, they don't know who Light is as he goes under an alias of Kira. The best detective in the world, L, is called to the case, he has always
            solved every case he's gone after and he intends to catch Kira no matter what. It is a battle between two geniuses and whoever finds out the others true identity first wins it
            all. </p>
    </div>
    <div class="info">
        <h3>Code Geass</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/codegeass.jpg" />
        <p>Lelouch is a Britannian boy who lives in Japan. Japan had just recently fallen to the Britannian Empire and is stripped of their identity and pride. They are simply referred
            to as "District 13". The Japanese are treated extremly poorly and are even executed in mass. Outraged, many Japanese liberation forces rise. Lelouch who has a grudge aganist
            the empire decides it is a great time to lead a revolution against the cruel empire. Lelouch is meant to be royalty but detests the empire after his father, the king, is
            believed to kill his mother. While witnessing a mass execution he finds a mysterious girl named C.C who give Lelouch the Geass power, which allows him to command anyone to
            do anything he wants by simply looking at them in the eye and commanding them to do something. With this new power he tries to take down this empire with the aid of C.C and the
            Japanese.</p>
    </div>
    <div class="info">
        <h3>Kaguya-sama:Love is War</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/loveiswar.jpg" />
        <p>Kaguya-sama:Love is War is very different from the other two animes we talked about here. This one is funny and nice to watch when trying to relax. Kaguya and Shirogane are
            looked at with high respect and are regarded being extremly sophisticated and smart. Little do people know... the two are in love with one another! But in order to keep their
            images they refuse to admit it! The anime is about the two trying to outsmart one another and trying to get the other to confess first. Comedy is added by the supporting cast,
            especially by Chika, Kaguya and Shirogane's friend, who is a absent minded and joyful girl who always makes everyone laugh right as she appears on the screen. </p>
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
                    if (strcasecmp($name, "Death Note") == 0){
                        print("Death Note has the same name in Japan!");
                    }
                    elseif (strcasecmp($name, "Code Geass") == 0){
                        print("The japanese name of " . $name . " is: Code Geass: Hangyaku no Lelouch");
                    }
                    elseif (strcasecmp($name, "Kaguya-sama:Love is War") == 0){
                        print("The japanese name of " . $name . " is: Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen");
                    }
                    else {
                        print("Hey! That anime was not mentioned above D:");
                    }
                    break;
                case "B":
                    $aname = $_POST['aName'];
                    if (strcasecmp($aname, "Death Note") == 0){
                        print("Get more info on " . $aname . " here: "  . "<a href='https://myanimelist.net/anime/1535/Death_Note?q=deat&cat=anime'>$aname information</a>");
                    }
                    elseif (strcasecmp($aname, "Code Geass") == 0){
                        print("Get more info on " . $aname . " here: "  . "<a href='https://myanimelist.net/anime/1575/Code_Geass__Hangyaku_no_Lelouch?q=code%20gea&cat=anime'>$aname information</a>");
                    }
                    elseif (strcasecmp($aname, "Kaguya-sama:Love is War") == 0){
                        print("Get more info on " . $aname . " here: " . "<a href='https://myanimelist.net/anime/37999/Kaguya-sama_wa_Kokurasetai__Tensai-tachi_no_Renai_Zunousen?q=kaguya&cat=anime'>$aname information</a>");
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
