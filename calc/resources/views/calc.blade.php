<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <title>HTML калькулятор</title>
</head>
<body>
<form name="calc" class="wrapper">
    <table class="main">
        <tr class="display">
            <td colspan="4"><input type="text" name="input"></td>
        </tr>
        <tr class="buttons">
            <td><input type="button" value="1" OnClick="calc.input.value += '1'"></td>
            <td><input type="button" value="2" OnClick="calc.input.value += '2'"></td>
            <td><input type="button" value="3" OnClick="calc.input.value += '3'"></td>


            <td rowspan="4">
            <input type="reset" value="c" OnClick="calc.input.value = ''">
            <input type="button" value="/" OnClick="calc.input.value += '/'">
            <input type="button" value="x" OnClick="calc.input.value += '*'">
            <input type="button" value="-" OnClick="calc.input.value += '-'">
            <input type="button" value="+" OnClick="calc.input.value += '+'">
            </td>
        </tr>
        <tr class="buttons">
            <td><input type="button" value="4" OnClick="calc.input.value += '4'"></td>
            <td><input type="button" value="5" OnClick="calc.input.value += '5'"></td>
            <td><input type="button" value="6" OnClick="calc.input.value += '6'"></td>

        </tr>
        <tr class="buttons">
            <td><input type="button" value="7" OnClick="calc.input.value += '7'"></td>
            <td><input type="button" value="8" OnClick="calc.input.value += '8'"></td>
            <td><input type="button" value="9" OnClick="calc.input.value += '9'"></td>


        </tr>
        <tr class="buttons">

            <td><input type="button" value="0" OnClick="calc.input.value += '0'"></td>
            <td><input type="button" value="." OnClick="calc.input.value += '.'"></td>
            <td><input type="button" value="=" OnClick="calc.input.value = eval(calc.input.value)"></td>


        </tr>
    </table>
</form>
</body>
</html>