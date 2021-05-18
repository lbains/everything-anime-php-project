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
        <h2>About Us</h2>
        <p>
            Hello! The two masterminds behind this website are Lovepreet Bains and Brandon Thorng. We are college students in our 2nd to last year in college.
            We both love anime hence why we made an anime website and the fact that we had to make a website for college.
        </p>

        <form name="form_name" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            @csrf
            <div style="font-size: 25px; padding-bottom: 10px;">
                Lovepreet's Favorite Anime!:
                <input type="hidden" name="name" value="lovepreet"> <br />
                <input style="padding-top: 10px" type="submit" name="submit1" value="Lovepreet's List" />
            </div>
        </form>

        <form name="form_info" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            @csrf
            <div style="font-size: 25px; padding-bottom: 10px;">
                Brandon's Favorite Anime!:
                <input type="hidden" name="name" value="brandon"> <br />
                <input style="padding-top: 10px" type="submit" name="submit2" value="Brandon's List" />
            </div>
        </form>

        <?php
        if(($_SERVER['REQUEST_METHOD'] == 'POST')) {
            switch ($_POST['name']){
                case "lovepreet":
                    print(
                       "<table>
                        <caption>Lovepreet's Favorite Anime Not Mentioned!</caption>
                        <tr>
                            <th>Anime (Hover over and Click on their Name for more info!)</th>
                        </tr>
                        <tr>
                            <td align='center'><div id='container'>
                                <img src='../images/tqq.jpg' alt='The Quintessential Quintuplets' id='image' style='width:100%'>
                                <div id='middle'>
                                <a id='text' href='https://myanimelist.net/anime/38101/5-toubun_no_Hanayome?q=the%20quintess&cat=anime'>Quintuplets</a>
                                </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align='center'><div id='container'>
                                <img src='../images/shippuden.jpg' alt='Naruto Shippuden' id='image' style='width:100%'>
                                <div id='middle'>
                                <a id='text' href='https://myanimelist.net/anime/1735/Naruto__Shippuuden?q=naruto%20shippuden&cat=anime'>Naruto Shippuden</a>
                                </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td align='center'><div id='container'>
                                <img src='../images/dxd.jpg' alt='High School DxD' id='image' style='width:100%'>
                                <div id='middle'>
                                <a id='text' href='https://myanimelist.net/anime/11617/High_School_DxD?q=highschool&cat=anime'>High School DxD</a>
                                </div>
                                </div>
                            </td>
                        </tr>
                        </table>"
                    );
                    break;
                case "brandon":
                    print(
                    "<table>
                        <caption>Brandon's Favorite Anime Not Mentioned!</caption>
                        <tr>
                            <th>Anime (Hover over and Click on their Name for more info!)</th>
                        </tr>
                        <tr>
                            <td align='center'><div id='container'>
                                <img src='../images/hololive.jpg' alt='Holo no Graffiti' id='image' style='width:100%'>
                                <div id='middle'>
                                <a id='text' href='https://myanimelist.net/anime/44042/Holo_no_Graffiti'>Holo no Graffiti</a>
                                </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align='center'><div id='container'>
                                <img src='../images/vivy.jpg' alt='Vivy: Fluorite Eye&#39s;Song' id='image' style='width:100%'>
                                <div id='middle'>
                                <a id='text' href='https://myanimelist.net/anime/46095/Vivy__Fluorite_Eyes_Song'>Vivy</a>
                                </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td align='center'><div id='container'>
                                <img src='../images/fate.jpg' alt='Fate Series' id='image' style='width:100%'>
                                <div id='middle'>
                                <a id='text' href='https://myanimelist.net/anime/25537/Fate_stay_night_Movie__Heavens_Feel_-_I_Presage_Flower?q=fate%2Fstay%20night%20hea&cat=anime'>Fate Series</a>
                                </div>
                                </div>
                            </td>
                        </tr>
                        </table>"
                    );
                    break;
                default:
                    echo "huh";
            }
        }
        ?>
    </div>
    <div class="info">
        <h2>Where to Contact us!</h2>
        <p>Well, we don't think that we need to be contacted but it completes the look lol.  </p>
    </div>
    </body>
    <footer>
        This is a college assignment, NONE of the images belong to us, just found them on google lmao, plz no copyright
    </footer>
</html>
