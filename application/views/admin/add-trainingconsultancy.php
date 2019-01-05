<?php include('header.php');?>
	<div class="app-content content">
    <div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
			  <div class="row breadcrumbs-top d-inline-block pull-left">
				<div class="breadcrumb-wrapper col-12">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a>
					</li>
					<li class="breadcrumb-item"><a href="trainingconsultancy.php">Premium Consultany</a>
					</li>
					
				  </ol>
				</div>
			  </div>
			</div>
		</div>
		<div class="content-body">
			<!-- Basic form layout section start -->
			<div class="row match-height">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
						  <h4 class="card-title" id="basic-layout-form-center">Premium Consultany</h4>
						 
						</div>
						<div class="card-content collapse show">
							<div class="card-body">
								<div class="">
									<h4 class="sb-ttl">Add New Consultany</h4>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
											  <label for="eventInput1">Consultany  Name</label>
											  <input type="text" class="form-control" placeholder="" name="Name" value="">
											
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											  <label for="eventInput1">	Category </label>
												<select class="form-control">
													<option value="">Choose Category</option>
													<option value="18"> Accounting/Taxation </option>
													<option value="19"> Advertising/Event Management </option>
													<option value="20"> Agriculture/Dairy </option>
													<option value="21"> Automobile </option>
													<option value="22"> Banks/Insurance/Financial Services </option>
													<option value="23"> Call Center/BPO </option>
													<option value="24"> Chemicals/ PetroChemical/Plastic/Rubber  </option>
													<option value="25"> Computers/Technology </option>
													<option value="26"> Construction/Facilities </option>
													<option value="27"> Education/Training </option>
													<option value="28"> Engineering </option>
													<option value="29"> Fashion/Garments/Merchandising </option>
													<option value="30"> Health Care/Pharma </option>
													<option value="31"> Hotel/Restaurant </option>
													<option value="32"> Human Resources/Admin/Recruitment </option>
													<option value="33"> Installation &amp; Maintenance </option>
													<option value="34"> Law Enforcement/Security </option>
													<option value="35"> Legal/Law </option>
													<option value="36"> Marketing/Sales </option>
													<option value="37"> Media/Journalism </option>
													<option value="38"> Production/Manufacturing/Maintenance </option>
													<option value="39"> Information Technology/Software </option>
													<option value="40"> Tours and Travel/Airline </option>
													<option value="41"> Transportation/Logistics </option>
													<option value="42"> KPO/Technical Support </option>
													<option value="43"> Other </option>
													<option value="44"> Strategy / Management Consulting Firms </option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											  <label for="eventInput1">Consultany Profile</label>
												<input type="text" class="form-control" />
											</div>
										</div>
									</div>
									<div class="row">
										
										<div class="col-md-8">
											<div class="form-group">
											  <label for="eventInput1">Address</label>
											  <div class="input-group">
												<div class="input-group-prepend">
												  <span class="input-group-text"><i class="ft-map"></i></span>
												</div>
												<textarea class="form-control" rows="5" cols="20"> </textarea>
											  </div>
											</div>
										</div>
										<div class="col-md-4">
											<!--div class="form-group">
											  <label for="eventInput1">Login To Date</label>
											  <div class="input-group">
												<div class="input-group-prepend">
												  <span class="input-group-text"><i class="ft-calendar"></i></span>
												</div>
												<input type="text" class="form-control datepicker-default" />
											  </div>
											</div-->
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1">Country</label>
												<select class="form-control">
													<option value="">Select Country</option>
													<option value="7">   Albania </option>
													<option value="5"> Algeria </option>
													<option value="10"> Angola </option>
													<option value="2"> Antigua and Barbuda </option>
													<option value="11"> Argentina </option>
													<option value="8"> Armenia </option>
													<option value="12"> Australia </option>
													<option value="13"> Austria </option>
													<option value="6"> Azerbaijan </option>
													<option value="20"> Bahamas </option>
													<option value="15"> Bahrain </option>
													<option value="21"> Bangladesh </option>
													<option value="16"> Barbados </option>
													<option value="27"> Belarus </option>
													<option value="19"> Belgium </option>
													<option value="22"> Belize </option>
													<option value="26"> Benin </option>
													<option value="18"> Bermuda </option>
													<option value="30"> Bhutan </option>
													<option value="23"> Bosnia and Herzegovina </option>
													<option value="17"> Botswana </option>
													<option value="29"> Brazil </option>
													<option value="32"> Brunei Darussalam </option>
													<option value="31"> Bulgaria </option>
													<option value="210"> Burkina Faso </option>
													<option value="33"> Burundi </option>
													<option value="35"> Cambodia </option>
													<option value="44"> Cameroon </option>
													<option value="34"> Canada </option>
													<option value="50"> Cape Verde </option>
													<option value="42"> Cayman Islands </option>
													<option value="48"> Central African Republic </option>
													<option value="36"> Chad </option>
													<option value="41"> Chile </option>
													<option value="40"> China </option>
													<option value="46"> Colombia </option>
													<option value="38"> Congo </option>
													<option value="39"> Congo, The Democratic Republic of the </option>
													<option value="47"> Costa Rica </option>
													<option value="98"> Cote d'Ivoire </option>
													<option value="90"> Croatia </option>
													<option value="49"> Cuba </option>
													<option value="52"> Cyprus </option>
													<option value="65"> Czech Republic </option>
													<option value="53"> Denmark </option>
													<option value="54"> Djibouti </option>
													<option value="55"> Dominica </option>
													<option value="56"> Dominican Republic </option>
													<option value="94"> Ecuador </option>
													<option value="58"> Egypt </option>
													<option value="63"> El Salvador </option>
													<option value="60"> Equatorial Guinea </option>
													<option value="62"> Eritrea </option>
													<option value="61"> Estonia </option>
													<option value="64"> Ethiopia </option>
													<option value="68"> Fiji </option>
													<option value="67"> Finland </option>
													<option value="72"> France </option>
													<option value="74"> Gabon </option>
													<option value="73"> Gambia </option>
													<option value="75"> Georgia </option>
													<option value="81"> Germany </option>
													<option value="76"> Ghana </option>
													<option value="83"> Greece </option>
													<option value="80"> Greenland </option>
													<option value="78"> Grenada </option>
													<option value="84"> Guatemala </option>
													<option value="79"> Guernsey </option>
													<option value="85"> Guinea </option>
													<option value="164"> Guinea-Bissau </option>
													<option value="86"> Guyana </option>
													<option value="87"> Haiti </option>
													<option value="89"> Honduras </option>
													<option value="91"> Hungary </option>
													<option value="92"> Iceland </option>
													<option value="57"> India </option>
													<option value="93"> Indonesia </option>
													<option value="95"> Iran, Islamic Republic of </option>
													<option value="99"> Iraq </option>
													<option value="59"> Ireland </option>
													<option value="96"> Israel </option>
													<option value="97"> Italy </option>
													<option value="102"> Jamaica </option>
													<option value="100"> Japan </option>
													<option value="229"> Jersey </option>
													<option value="238"> jghjgj </option>
													<option value="103"> Jordan </option>
													<option value="111"> Kazakhstan </option>
													<option value="104"> Kenya </option>
													<option value="107"> Kiribati </option>
													<option value="106"> Korea, Democratic People's Republic of </option>
													<option value="108"> Korea, Republic of </option>
													<option value="110"> Kuwait </option>
													<option value="105"> Kyrgyzstan </option>
													<option value="112"> Lao People's Democratic Republic </option>
													<option value="114"> Latvia </option>
													<option value="113"> Lebanon </option>
													<option value="119"> Lesotho </option>
													<option value="116"> Liberia </option>
													<option value="121"> Libyan Arab Jamahiriya </option>
													<option value="118"> Liechtenstein </option>
													<option value="115"> Lithuania </option>
													<option value="120"> Luxembourg </option>
													<option value="124"> Macao </option>
													<option value="130"> Macedonia </option>
													<option value="122"> Madagascar </option>
													<option value="129"> Malawi </option>
													<option value="140"> Malaysia </option>
													<option value="138"> Maldives </option>
													<option value="131"> Mali </option>
													<option value="231"> Marshall Islands </option>
													<option value="123"> Martinique </option>
													<option value="135"> Mauritania </option>
													<option value="134"> Mauritius </option>
													<option value="126"> Mayotte </option>
													<option value="139"> Mexico </option>
													<option value="101"> Micronesia, Federated States of </option>
													<option value="125"> Moldova, Republic of </option>
													<option value="132"> Monaco </option>
													<option value="127"> Mongolia </option>
													<option value="230"> Montenegro </option>
													<option value="128"> Montserrat </option>
													<option value="133"> Morocco </option>
													<option value="141"> Mozambique </option>
													<option value="25"> Myanmar </option>
													<option value="217"> Namibia </option>
													<option value="151"> Nauru </option>
													<option value="150"> Nepal </option>
													<option value="148"> Netherlands </option>
													<option value="153"> Netherlands Antilles </option>
													<option value="142"> New Caledonia </option>
													<option value="155"> New Zealand </option>
													<option value="154"> Nicaragua </option>
													<option value="145"> Niger </option>
													<option value="147"> Nigeria </option>
													<option value="143"> Niue </option>
													<option value="144"> Norfolk Island </option>
													<option value="232"> Northern Mariana Islands </option>
													<option value="149"> Norway </option>
													<option value="137"> Oman </option>
													<option value="159"> Pakistan </option>
													<option value="235"> Palau </option>
													<option value="234"> Palestinian Territory </option>
													<option value="161"> Panama </option>
													<option value="163"> Papua New Guinea </option>
													<option value="156"> Paraguay </option>
													<option value="158"> Peru </option>
													<option value="168"> Philippines </option>
													<option value="157"> Pitcairn </option>
													<option value="160"> Poland </option>
													<option value="162"> Portugal </option>
													<option value="233"> Puerto Rico </option>
													<option value="165"> Qatar </option>
													<option value="166"> Reunion </option>
													<option value="167"> Romania </option>
													<option value="169"> Russian Federation </option>
													<option value="170"> Rwanda </option>
													<option value="177"> Saint Helena </option>
													<option value="173"> Saint Kitts and Nevis </option>
													<option value="184"> Saint Lucia </option>
													<option value="172"> Saint Pierre and Miquelon </option>
													<option value="213"> Saint Vincent and the Grenadines </option>
													<option value="221"> Samoa </option>
													<option value="180"> San Marino </option>
													<option value="198"> Sao Tome and Principe </option>
													<option value="171"> Saudi Arabia </option>
													<option value="176"> Senegal </option>
													<option value="236"> Serbia </option>
													<option value="174"> Seychelles </option>
													<option value="179"> Sierra Leone </option>
													<option value="181"> Singapore </option>
													<option value="117"> Slovakia </option>
													<option value="178"> Slovenia </option>
													<option value="28"> Solomon Islands </option>
													<option value="182"> Somalia </option>
													<option value="175"> South Africa </option>
													<option value="188"> South Georgia and the South Sandwich Islands </option>
													<option value="183"> Spain </option>
													<option value="37"> Sri Lanka </option>
													<option value="185"> Sudan </option>
													<option value="152"> Suriname </option>
													<option value="186"> Svalbard and Jan Mayen </option>
													<option value="222"> Swaziland </option>
													<option value="187"> Sweden </option>
													<option value="190"> Switzerland </option>
													<option value="189"> Syrian Arab Republic </option>
													<option value="203"> Taiwan </option>
													<option value="193"> Tajikistan </option>
													<option value="205"> Tanzania, United Republic of </option>
													<option value="239"> test </option>
													<option value="1"> test countey </option>
													<option value="192"> Thailand </option>
													<option value="200"> Timor-Leste </option>
													<option value="197"> Togo </option>
													<option value="195"> Tokelau </option>
													<option value="196"> Tonga </option>
													<option value="191"> Trinidad and Tobago </option>
													<option value="199"> Tunisia </option>
													<option value="201"> Turkey </option>
													<option value="204"> Turkmenistan </option>
													<option value="202"> Tuvalu </option>
													<option value="206"> Uganda </option>
													<option value="208"> Ukraine </option>
													<option value="3"> United Arab Emirates </option>
													<option value="207"> United Kingdom </option>
													<option value="209"> United States </option>
													<option value="211"> Uruguay </option>
													<option value="212"> Uzbekistan </option>
													<option value="146"> Vanuatu </option>
													<option value="214"> Venezuela </option>
													<option value="216"> Vietnam </option>
													<option value="215"> Virgin Islands, British </option>
													<option value="237"> Virgin Islands, U.S. </option>
													<option value="219"> Wallis and Futuna </option>
													<option value="220"> Western Sahara </option>
													<option value="224"> Yemen </option>
													<option value="225"> Zambia </option>
													<option value="226"> Zimbabwe </option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1">State </label>
												<select class="form-control">
													<option value="">Select State</option>
													<option value="">None</option>
													<option value="212">Antwerpen</option>
													<option value="537">Brabant Wallon</option>
													<option value="566">Brussels Hoofdstedelijk Gewest</option>
													<option value="1312">Hainaut</option>
													<option value="1929">Liege</option>
													<option value="1940">Limburg</option>
													<option value="2017">Luxembourg</option>
													<option value="2342">Namur</option>
													<option value="2561">Oost-Vlaanderen</option>
													<option value="3732">Vlaams-Brabant</option>
													<option value="3785">West-Vlaanderen</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1" class="top-lab">City</label>
												<select class="form-control">
													<option value="">Select City</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1">Landline </label>
												<input type="text" class="form-control " />
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1">Mobile </label>
												<input type="text" class="form-control " />
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1">E-mail </label>
												<input type="text" class="form-control " />
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1">Website URL </label>
												<input type="text" class="form-control " />
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1">Consultany Logo</label>
												<input type="file" class="form-control " />
											</div>
										</div>
									</div>
									
									
									
									<div class="form-group">
										<button type="submit" class="btn btn-success">
											<i class="la la-check-square-o"></i> Save
										</button>
										<button type="submit" class="btn btn-danger">
											<i class="la la-close"></i> Cancel
										</button>
									</div>
										
								</div>
								
							</div>
						</div>
					</div>
				</div>	  	 
			</div>	   	
		</div>	   	
	</div>	   	
</div>	   	
    <?php include('footer.php') ?>
