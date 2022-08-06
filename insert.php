<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration for Event|Magical Momentzz</title>
    <style>
        * {
            background-color: rgb(37, 28, 63);
        }

        /* for form container */
        .container {
            position: relative;
            top: 10%;
            width: 90%;
            display: flex;
            justify-content: space-around;
            left: 5%;


        }

        /* for heading */
        caption {
            font-size: 3rem;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: whitesmoke;
        }

        /* for labels  */
        label {
            font-size: xx-large;
            color: wheat;
        }

        /* for inputs  */
        input,
        select,
        .input {
            font-size: xx-large;
            color: rgb(170, 164, 220);

        }

        /* for buttons */
        .btn {
            color: white;
            background-color: rgba(71, 77, 119, 0.911);
        }

        .btn:hover {
            background-color: white;
            color: rgba(71, 77, 119, 0.911);
        }

        .btn:focus {
            color: wheat;
            background-color: rgba(71, 77, 119);
        }

        /* for mini laptops */
        @media screen and (max-width: 1000px) {

            /* for labels  */
            label {
                font-size: x-large;

            }

            /* for inputs  */
            input,
            select,
            .input {
                font-size: x-large;


            }

        }

        /* for tabs phone */
        @media screen and (max-width: 800px) {

            caption {
                font-size: 2rem;
            }

            /* for labels  */
            label {
                font-size: large;

            }

            /* for inputs  */
            input,
            select,
            .input {
                font-size: large;


            }

        }

        /* for tabs phone */
        @media screen and (max-width: 500px) {

            caption {
                font-size: 2rem;
            }

            /* for labels  */
            label {
                font-size: small;

            }

            /* for inputs  */
            input,
            select,
            .input {
                font-size: small;


            }

        }
    </style>

</head>

<body>
    <div class="container">
        <form action="code.php" method="POST">
            <table>
                <caption>Grab Your Passes</caption>
                <tr>
                    <td><label for="name">Enter your Name</label></td>
                    <td><input type="text" name="name" id="name" required></td>
                </tr>
                <tr>
                    <td><label for="email">Enter Your Email</label></td>
                    <td><input type="email" name="email" id="email" required></td>
                </tr>
                <tr>
                    <td><label for="mobNo">Enter your Mobile Nubmer</label></td>
                    <td><input type="tel" name="mobNo" id="mobNo" required></td>
                </tr>
                <tr>
                    <td><label for="quantity">Select Nubmer of passes</label></td>
                    <td><select name="quantity" id="quantity" onchange="yourtotal()">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="total">Your Total</label></td>
                    <td>
                        <p class="input" id="total">700Rs</p>
                    </td>
                </tr>
                <tr>
                    <td><input type="reset" value="Reset" name="reset" class="btn"></td>
                    <td><input type="submit" value="Submit" name="submit" class="btn"></td>
                </tr>
            </table>
        </form>
    </div>


</body>
<script>
    // for changing value as per quantity
    function yourtotal() {
        let price = 700;
        let total = document.getElementById('total')
        let quantity = document.getElementById('quantity').value
        let yourTotal = quantity * price + "Rs";
        total.innerHTML = yourTotal;
    }
</script>

</html>