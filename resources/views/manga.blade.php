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
        <h2>Information About Mangas</h2>
        <p>This isn't an anime genre but it is what many animes are based off of! What a lot of people think about manga is that they are Japanese comics.
            While they might seem similar, not all mangas have the traditional superhero thing that comics have going for themselves.
            All the genres that we talked about are included in mangas. All of the animes that we talked about have their own mangas.
            The only anime that we talked about that doesn't really have a manga is Code Geass. That anime was not based off of any manga or book.</p>
    </div>
    <h2>Here is information about the popular mangas mentioned on the home page!</h2>
    <div class="info">
        <h3>Goodnight Punpun</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/goodnightpunpun.jpg" />
        <p>Unlike most of the animes that we talked about, Goodnight Punpun is more of a sad/depressing manga.
            In Goodnight Punpun, we follow the life of a boy named Punpun. It seems as he is a regular boy but soon life takes a complete 180.
            Some family complications took place which resulted in his mother getting injured by his father.
            This made them split apart and we quickly see his once happy life starting to take a hit. The story follows his life in a constant downhill spiral.
            All we can do while reading the manga is hope that his life starts to get better eventually.
            Goodnight Punpun has not been adapted into an anime yet, so the manga is the only source for this story.</p>
    </div>
    <div class="info">
        <h3>Seraph of the End</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/seraphoftheend.jpg" />
        <p>Seraph of the End takes place in the future of our world, in a world in which a virus took over the world and caused a new race of vampires to rise.
            Alongside the vampires, Demons came to existance as well. In order for humanity to survive after majority of there race was wiped out by the virus, they use demons along there weapons to combat the extremly strong Vampires.
            Yuichiro Hyakuya and Mikaela Hyakuya alongside their family try escaping the grasp of the vampires, in the process their family is killed.
            Yuichiro espaced and thinks everyone is dead, he joins the army in order to get revenge for his family and kill vampires. Little did he know, Mikalea is alive but is now a vampire.
            Unlike Goodnight Punpun, Seraph of the End does have its own anime.</p>
    </div>
    <div class="info">
        <h3>Komi Can't Communicate</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/komicantcommunicate.jpg" />
        <p>Komi Can't Communicate is totally different from the other two mangas, while they are serious this one is something nice to read on your free time.
            It is filled with comedy and is sure to lighten up your mood. Komi is a beautiful and elegant highschool girl that is admired by all. She is the perfect person to exist.
            There are  no flaws with her at all... besides one. She can't talk to anyone!
            She gets too nervous and fails to spit out any words! One day she meets a boy named Tadano, at first she thought it was going to be the same thing again, just another person she won't be able to talk to.
            But it turns out Tadano was different, he was the only one to constantly approach her and was the only one to find out about her struggles in communicating.
            Tadano makes it his goal to help Komi get more friends and make her get over her communication complications.
            Like Goodnight Punpun, this manga does not have an anime, but we are all praying that it gets one soon.</p>
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

        <h3 style="text-align: left">Want more info about on one of the three mangas? Type the name here!</h3>
        <form name="form_info" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            @csrf
            <p>Manga Name:</p>
            <input type="text" name="aName" /> <br />
            <input type="hidden" name="form" value="B"> <br />
            <input type="submit" name="submit2" value="I want more info!" />
        </form>

        <?php
        if(($_SERVER['REQUEST_METHOD'] == 'POST')) {
            switch ($_POST['form']){
                case "A":
                    $name = $_POST['name'];
                    if (strcasecmp($name, "Goodnight Punpun") == 0){
                        print("The japanese name of " . $name . " is: Oyasumi Punpun");
                    }
                    elseif (strcasecmp($name, "Seraph of the End") == 0){
                        print("The japanese name of " . $name . " is: Owari no Seraph");
                    }
                    elseif (strcasecmp($name, "Komi Can't Communicate") == 0){
                        print("The japanese name of " . $name . " is: Komi-san wa, Comyushou desu.");
                    }
                    else {
                        print("Hey! That anime was not mentioned above D:");
                    }
                    break;
                case "B":
                    $aname = $_POST['aName'];
                    if (strcasecmp($aname, "Goodnight Punpun") == 0){
                        print("Get more info on " . $aname . " here: "  . "<a href='https://myanimelist.net/manga/4632/Oyasumi_Punpun?q=goodnight&cat=manga'>$aname information</a>");
                    }
                    elseif (strcasecmp($aname, "Seraph of the End") == 0){
                        print("Get more info on " . $aname . " here: "  . "<a href='https://myanimelist.net/manga/43661/Owari_no_Seraph?q=seraph&cat=manga'>$aname information</a>");
                    }
                    elseif (strcasecmp($aname, "Komi Can't Communicate") == 0){
                        print("Get more info on " . $aname . " here: " . "<a href='https://myanimelist.net/manga/99007/Komi-san_wa_Comyushou_desu?q=Komi%20Can%27t%20Communicate&cat=manga'>$aname information</a>");
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
