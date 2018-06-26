<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="description" content="tansi9 al nosous w ashel bel css ">
		<title>form part1(label, text input, password input, ckeckbox, submit input)
			   form part2(button, file, image, hidden, reset, radio)
			   form part3(textarea, filedset, legend, select, option)
		</title>
		<style >
		 	fieldset{background: #EFEFEF; border: 1px solid #CCC; padding: 10PX; margin-bottom: 20PX }	
		 	legend{background: #FFF; border: 1px solid #CCC; padding: 5px }
		</style>
        <link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript">
			function sayHello() {
				alert("hello html");
			}
		</script>
	</head>
	<body>
		<form name="register" action="post.php" method="get"><!--name   y3aref lform fel php w css w javascript /action lpage eli bech temchilo kol lbayanet /method get ou post tari9et ba3th lbayanet-->

            <!--form part1-->
	    <fieldset>
	       <legend>form part1</legend>
			<label>username</label>
			<input type="text" name="username" value="" placeholder="type your name" maxlength="10"><!--name eli bech teb3eth bih bayanet lel php bech tet3alej/value l9ima momken tkoun 7adhra ou bien yfasa5a w ybadel/placeholder tfasarli chnowa bch nekteb/maxlength mayfoutech 10 7orouf-->
			<br>

			<label>password</label>
			<input type="password" name="password">
			<br>

			<input type="checkbox" name="checkbox">
			<label>Remember Me</label>

			<br>
			<input type="submit" name="submit" value="sign up"><!--yeb3eth lbayanet lsaf7et el parmaga (php) y3alejha w yeb3athha lel server-->
		</fieldset>
			<!--form part2-->
		<fieldset>
            	<legend>form part2</legend>
            <input type="button" name="say hello" value="say hello"  onclick="sayHello()"><!--nesta5edmouh m3a javascript-->
           <br>

           <label>upload your cv</label>
           <br>
           <input type="file" ><!--manajamech na3malou value bech nbadel esmo lezem bel javascript -->

           <br>
           <input type="image" src="http://placehold.it/100/100" alt="submit" ><!-- ya3mel submit amahedhi soura web3eth (x,y) lel php  yesta3emlouha fel kharita-->

           <br>
            <input type="hidden" value="testing" ><!--mayodhhorech teteb3ath m3a lform ama matetrach-->

           <br>
            <input type="reset" value="restore default" ><!--yemsa7 lbayanet bech tekteb men jdid -->

           <br>
           <!--lezem yekhtar ken wa7da khater 3aned hom nafes name si name diffrent najem na5tarhom lkol alors que checkbox ynajem ya5tar lkol-->
            <label>choose your browser</label>
            <br>
           <input type="radio" name="browser" value="chrome" >Google CHrome <br>
           <input type="radio" name="browser" value="firefox" >Fire Fox <br>
           <input type="radio" name="browser"  value="opera" >Opera  
           <br>
            <label>choose your mobile</label>
            <br>
           <input type="radio" name="mobile" value="iphone" >iphone <br>
           <input type="radio" name="mobile" value="sumsung" >sumsung<br>
           <input type="radio" name="mobile"  value="nokia" >nokia  <br>
       	</fieldset>

           <!--form part3-->
        <fieldset>
            	<legend>form part3</legend>
           <label>your message</label>
           <br>
           <textarea>your name: </textarea><!-- rows:3adad les ligne/cols:nbre des colones/w a7sen 7aja na3mel class w n3adel bel css/
           your name tal9aha wenti tzid 3liha/readonly :ta9ra akahaw w 3lech textarea khater momken bel javascript nraj3o nekteb fih/disabled :kif kif-->
           <select name="time"> 
           	<optgroup label="Near time">
           			<option>now</option>
           			<option>tomorow</option>
           			<option>after a week </option>
           	</optgroup>
           	
            <optgroup label="far time"><!--momken na3emlelha disabled-->
            	    <option>year</option>
           			<option>10 years </option>
           			<option>20 years </option>
            </optgroup>
           	<!--yekho nafes les attribut mta3 select kima disable/selected:ya3ni ki na3mel reload yjibheli selectionner exple ya3ref eli hiya femme yselectionniha ou bien ip ya3ref eli inti men tounes yselectioni tunis/value:momken tkoun ra9em l9ima eli bech tetb3ath l database(time=value selctionner)-->
           </select>
        </fieldset>
		</form>
	
	</body>
</html>