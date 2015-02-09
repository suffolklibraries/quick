<!doctype html>

<html lang="en">

	<head>
	
		<title>Quick search</title>
		
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="robots" content="noindex, nofollow">
		
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet'>
		
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
		
		<?php
		
			$image_number = rand(1, 4);
			
		?>
		
		<style>
		
			body {
				background-color: #FFF;
				color: #333;
				font-family: 'Source Sans Pro', sans-serif;
				font-size: 112.5%;
				line-height: 1.5;
				margin: 0 auto;
				background-image: url('images/image-<?php echo $image_number; ?>.jpg');
				background-repeat: no-repeat;	
				background-size: 1920px 1080px;
			}
			
			.wrapper {
				margin: 2.25em auto 0.75em auto;
			}
			
			.page {
				background-color: #FFF;
				opacity: 0.95;
				padding: 1.5em;
				box-shadow: 0.25em 0.25em 1em #CFCFCF;
			}
			
			.logo {
				display: block;
				margin: 0 auto;
				border-radius: 0 0 0.25em 0.25em;
				opacity: 0.95;
			}
			
			input,
			select,
			option {
				font-family: 'Source Sans Pro', sans-serif;
			}
			
			label {
				color: #888;
			}
			
			.hidden {
				display: none !important;
			}
			
			.search-results-options legend {
				padding-top: 1.5em;
			}
			
			h1 {
				font-size: 1.5em;
				line-height: 1em;
				margin-bottom: 0.5em;
			}
			
			.pure-form input,
			.pure-form select,
			.pure-form option {
				opacity: 1 !important;
				border-radius: 0;
			}
			
			@media screen and (min-width: 740px) {
			
				body {
					max-width: 900px;
					font-size: 131.25%;
				}
				
				.page {
					padding: 1.5em 3em;
				}
				
			}
			
		</style>
		
	</head>
	
	<body>
		
		<img class="logo" src="images/logo.jpg" alt="Suffolk Libraries" height="44" width="200">
	
		<div class="wrapper">
	
			<form role="search" class="page pure-form pure-form-stacked" method="get" action="http://suffolk.spydus.co.uk/cgi-bin/spydus.exe/ENQ/OPAC/BIBENQ" onsubmit="return SubmitOK()">
			
				<h1>Search for books, CDs and DVDs</h1>
			
				<fieldset class="search-queries">
			
					<label for="ENTRY_NAME">Title:</label>
					
					<div class="hidden" hidden >
					
						<select name="ENTRY_NAME" id="ENTRY_NAME" class="selectLabel">
						
							<option value="TI" selected="selected">Title</option>
							<option value="AU">Author/artist</option>
							<option value="SU">Subject</option>
							<option value="SE">Series Title</option>
							<option value="PU">Publisher</option>
							<option value="NTS">General Notes</option>
							<option value="AB">Abstract</option>
							<option value="BS">All fields (author/artist name, title, summary etc.)</option>
							
						</select>
						
					</div>
					
					<label class="hidden" hidden  for="ENTRY">Search for:</label>
					
					<input class="pure-input-1" name="ENTRY" id="ENTRY" type="search">
					
					<div class="hidden" hidden >
					
						<label>Type of search:</label>
						
						<input name="ENTRY_TYPE" id="ENTRY_TYPE_A" class="inputRadio" value="A" type="radio">
						
						<label for="ENTRY_TYPE_A" class="labelRadio">Phrase</label>
						
						<input name="ENTRY_TYPE" id="ENTRY_TYPE_K" class="inputRadio" value="K" checked="checked" type="radio"><label for="ENTRY_TYPE_K" class="labelRadio">Keywords</label>
						
						<input name="ENTRY_TYPE" id="ENTRY_TYPE_E" class="inputRadio" value="E" type="radio">
						
						<label for="ENTRY_TYPE_E" class="labelRadio">Exact Match</label>
						
						<label for="ENTRY1_OPER" class="hidden" hidden >Search Operator 1:</label>
						
						<select name="ENTRY1_OPER" id="ENTRY1_OPER">
						
							<option value="+" selected="selected">AND</option>
							<option value="-">NOT</option>
							<option value="/">OR</option>
							
						</select>
						
					</div>
					
					<label for="ENTRY2_NAME">Author/artist:</label>
					
					<div class="hidden" hidden >
					
						<select name="ENTRY2_NAME" id="ENTRY2_NAME">
						
							<option value="TI">Title</option>
							<option value="AU" selected="selected">Author/artist</option>
							<option value="SU">Subject</option>
							<option value="SE">Series Title</option>
							<option value="PU">Publisher</option><option value="NTS">General Notes</option>
							<option value="AB">Abstract</option>
							<option value="BS">All fields (author/artist name, title, summary etc.)</option>
							
						</select>
						
					</div>
					
					<label class="hidden" hidden  for="ENTRY2">Search for:</label>
					
					<input class="pure-input-1" name="ENTRY2" id="ENTRY2" type="search">
					
					<div class="hidden" hidden >
					
						<label>Type of search:</label>
						
						<input name="ENTRY2_TYPE" id="ENTRY2_TYPE_A" class="inputRadio" value="A" type="radio">
						
						<label for="ENTRY2_TYPE_A" class="labelRadio">Phrase</label>
						
						<input name="ENTRY2_TYPE" id="ENTRY2_TYPE_K" class="inputRadio" value="K" checked="checked" type="radio">
						
						<label for="ENTRY2_TYPE_K" class="labelRadio">Keywords</label>
						
						<input name="ENTRY2_TYPE" id="ENTRY2_TYPE_E" class="inputRadio" value="E" type="radio">
						
						<label for="ENTRY2_TYPE_E" class="labelRadio">Exact Match</label>
						
					</div>
					
					<label for="ENTRY2_NAME">Subject:</label>
					
					<div class="hidden" hidden >
					
						<select name="ENTRY3_NAME" id="ENTRY3_NAME">
						
							<option value="TI">Title</option>
							<option value="AU">Author/artist</option>
							<option value="SU" selected="selected">Subject</option>
							<option value="SE">Series Title</option>
							<option value="PU">Publisher</option><option value="NTS">General Notes</option>
							<option value="AB">Abstract</option>
							<option value="BS">All fields (author/artist name, title, summary etc.)</option>
							
						</select>
						
					</div>
					
					<label class="hidden" hidden  for="ENTRY3">Search for:</label>
					
					<input class="pure-input-1" name="ENTRY3" id="ENTRY3" type="search">
					
					<div class="hidden" hidden >
					
						<label>Type of search:</label>
						
						<input name="ENTRY3_TYPE" id="ENTRY3_TYPE_A" class="inputRadio" value="A" type="radio">
						
						<label for="ENTRY3_TYPE_A" class="labelRadio">Phrase</label>
						
						<input name="ENTRY3_TYPE" id="ENTRY3_TYPE_K" class="inputRadio" value="K" checked="checked" type="radio">
						
						<label for="ENTRY3_TYPE_K" class="labelRadio">Keywords</label>
						
						<input name="ENTRY3_TYPE" id="ENTRY2_TYPE_E" class="inputRadio" value="E" type="radio">
						
						<label for="ENTRY3_TYPE_E" class="labelRadio">Exact Match</label>
						
					</div>
					
					<br>
					
					<input class="pure-button pure-button-primary" value="Search" type="submit">
					
					<input class="pure-button pure-button-primary" value="Clear" type="reset">
					
					&nbsp;&nbsp;&nbsp;<a href="https://suffolk.spydus.co.uk/cgi-bin/spydus.exe/MSGTRN/OPAC/COMB">Advanced search</a> (search for subject, ISBN, publisher, date etc.)
					
					<br>
					
				</fieldset>
				
				<fieldset class="search-results-options">
				
					<legend>Search results options</legend>
					
					<label for="NRECS" class="w30">Results per page:</label>
					
					<select name="NRECS" id="NRECS" class="selectSingle w10">
					
						<option value="5">5</option><option value="10">10</option>
						<option value="20" selected="selected">20</option>
						<option value="30">30</option>
						<option value="50">50</option>
						<option value="100">100</option>
						
					</select>
					
					<label for="SORTS" class="w30">Sort by:</label>
					
					<select name="SORTS" id="SORTS" class="selectSingle w65">
					
						<option value="HBT.SOVR" selected="selected">Title</option>
						<option value="DTE.DATE1.DESC]HBT.SOVR">Publication Date, latest to earliest</option>
						<option value="DTE.DATE1]HBT.SOVR">Publication Date, earliest to latest</option>
						<option value="SQL_AUTHOR_TITLE">Author by Title</option>
						
					</select>
					
					<input name="SEARCH_FORM" value="/cgi-bin/spydus.exe/MSGTRN/OPAC/BSEARCH" type="hidden">
					<input name="CF" value="GEN" type="hidden"><input name="GQ" id="GQ" type="hidden">
					
				</fieldset>
				
				<p>You can also try our <a href="http://suffolklibraries.lib.overdrive.com/">eBook collection</a>, our <a href="http://suffolk.oneclickdigital.eu/">eAudio collection</a> and our <a href="http://suffolklibraries.freegalmusic.com/">MP3 downloading and streaming service</a>.</p>
				
			</form>
			
		</div> <!-- end .wrapper -->
		
	</body>
	
</html>