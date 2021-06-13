<!DOCTYPE html>
<html lang="en">
<link href="../css/styles.css" rel="stylesheet" />

<head>

    <style>
        .button-3d {
            background-color: rgba(155, 89, 182, 1);
            border: 2px solid rgba(142, 68, 173, 1);
            border-radius: 8px;
            box-shadow: 0 6px rgba(155, 89, 182, 1),
                0 8px rgba(142, 68, 173, 1);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            padding: 15px 50px;
            position: relative;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: transform 0.2s linear, box-shadow 0.2s linear;
            text-decoration: none;
        }

        .button-3d:active {
            transform: translateY(8px);
            box-shadow: 0 0 rgba(155, 89, 182, 1),
                0 0 rgba(142, 68, 173, 1);
        }

        .button-3d:focus {
            outline: none;
            cursor: pointer;
        }

        .back-button {
            margin-top: 20px;
            margin-left: 20px;
        }

        .img-centro {
            width: 1000px;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
        }

        svg {
            width: 1000px;
            top: 50%;
            left: 50%;
            position: absolute;
            z-index: 1;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>

    <div>
        <button class="button-3d back-button" id="button" onclick="window.history.go(-1); return false;"> &#8249; Back </button>

        <svg viewBox="0 0 300 200">
            <circle id="circle" cx="30" cy="30" r="5" fill="purple" onclick="">
                <animateMotion id="ani" dur="10s" repeatCount="end" path="m20 40c0-110 160 90 160 0c0-120-160 90-160 0z" />
            </circle>
        </svg>

        <img src="../assets/img/HechtMuseumNew.png" class="img-centro" alt="" id="plano">
    </div>

    <!-- Table -->

    <div class="container" style="margin-top: 650px;">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Day</th>
                            <th scope="col">Visitor</th>
                            <th scope="col">Positions</th>
                            <th scope="col">Presentations</th>
                            <th scope="col">Events</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>visitor_195_146</td>
                            <td>14:12:05,14:12:19,JerusalemPhoto
                                14:12:19,14:13:23,MaterialCultures</td>
                            <td>14:12:19,14:13:23,MaterialCultures,137,System,5
                                14:14:11,14:14:47,MaterialCultures,165,User,5</td>
                            <td>14:12:14,chosenExhibit,44
                                14:12:14,return from screen</td>
                            <td>
                                <button class="button-3d back-button" id="button" onclick="window.scrollTo(0, 0); window.setTimeout(function() { window.location.reload(); }, 500);"> PlayBack </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>visitor_196_146</td>
                            <td>14:12:32,14:13:54,MaterialCultures
                                14:14:13,14:19:49,DuckBoxIvories</td>
                            <td>14:12:32,14:13:01,MaterialCultures,165,User
                                14:13:25,14:13:54,MaterialCultures,165,User</td>
                            <td>14:14:38,return from screen
                                14:14:38,chosenExhibit,49</td>
                            <td>
                                <button class="button-3d back-button" id="button" onclick="window.scrollTo(0, 0); window.setTimeout(function() { window.location.reload(); }, 500);"> PlayBack </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>visitor_197_147</td>
                            <td>11:36:46,11:39:38,SymbolsJewishMenorah
                                11:39:38,11:39:40,EntranceReubenHecht</td>
                            <td>11:37:01,11:37:45,SymbolsJewishMenorah,131,System,4
                                11:43:43,11:44:00,PersianCult,310,User</td>
                            <td>11:36:52,chosenExhibit,41
                                11:36:52,return from screen</td>
                            <td>
                                <button class="button-3d back-button" id="button" onclick="window.scrollTo(0, 0); window.setTimeout(function() { window.location.reload(); }, 500);"> PlayBack </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

<!-- Core theme JS-->
<script src="js/scripts.js">
    function point(color) {
        let circle = document.getElementById("circle");
        let plano = document.getElementById("plano");
        let width = 200;
        let height = 200;
        let {
            x,
            y
        } = circle.getBoundingClientRect();
        let c = document.createElementNS("http://www.w3.org/2000/svg", "circle");
        x = x + width / 2;
        y = y + height / 2;
        c.setAttribute("cx", x);
        c.setAttribute("cy", y);
        c.setAttribute("fill", color);
        circle.parentNode.append(c);
    }

    document.getElementById("button").addEventListener("onclick", function() {

    });

    function buttonClicked() {
        window.scrollTo(0, 0);
        var timeoutID = window.setTimeout(function() {
            alert("That was 2 secs slow!");
            window.location.reload();
        }, 100);
    }
</script>

</html>