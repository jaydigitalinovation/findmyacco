<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Uniacco</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="text/css" href="images/fevicon.png">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/css/bootstrap-select.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
</head>
<body class="body">
    <div class="uni_menu" id="dynamic">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="uni_logo">
                <a href="{{url('/education')}}"><img src="image/logo3.png"></a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="u_menu">
                <nav id="top-nav">
                  <ul class="">
                    <li class="dropdown"><a href="#">Student Loan  <span>&diams;</span> </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{url('/education_studentloan')}}">Abroad Education Loan</a></li>
                        <li><a href="{{url('/education_studentloan')}}">Avanse Education Loan</a></li>
                        <li><a href="{{url('/education_studentloan')}}">Incred Education Loan</a></li>
                        <li><a href="{{url('/education_studentloan')}}">HDFC Education Loan</a></li>
                        <li><a href="{{url('/education_studentloan')}}">Axis Bank Education Loan</a></li>
                        <li><a href="{{url('/education_studentloan')}}">Auxilo Education Loan</a></li>
                        <li><a href="{{url('/education_studentloan')}}">Leap Finance Education Loan</a></li>
                        <li><a href="{{url('/education_studentloan')}}">ICICI Bank Study Abroad Loan</a></li>
                        <li><a href="{{url('/education_studentloan')}}">Bank of Baroda Education Loan</a></li>
                        <li><a href="{{url('/education_studentloan')}}">Prodigy Finance Education Loan</a></li>
                        <li><a href="{{url('/education_studentloan')}}">Mpower Education Loan</a></li>
                        <li><a href="{{url('/education_studentloan')}}">Credenc Education Loan</a></li>
                        <li><a href="{{url('/education_studentloan')}}">IDFC Education Loan</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a href="#">Contact Us <span>&diams;</span></a>
                      @foreach($admin_detail as $ad)
                      <ul class="dropdown-menu">
                        <li><a href="#">WhatsApp</a></li>
                        <li><a href="tel:{{$ad->phone_no}}"><i class="fa-solid fa-phone"></i> {{$ad->phone_no}}</a></li>
                        <li><a href="tel:{{$ad->phone_no}}"><i class="fa-solid fa-phone"></i> {{$ad->phone_no}}</a></li>
                        <li><a href="melto:{{$ad->email}}"><i class="fa-regular fa-envelope"></i>{{$ad->email}}</a></li>
                      </ul>
                    @endforeach
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
    </div>
    @foreach($banner_image as $bi)
    <div class="patner_banner">
        <img src="/uploads/{{$bi->image}}">
        <div class="container">
          <div class="sub_patner">
            <h2>Partners</h2>
            <ul>
              <li><a href="{{url('/')}}"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
              <li class="bd"><i class="fa-solid fa-angles-right"></i></li>
              <li class="bd">Partners</li>
              <li class="bd"><i class="fa-solid fa-angles-right"></i></li>
              <li class="bd">Education Loan</li>
              <li class="bd"><i class="fa-solid fa-angles-right"></i></li>
              <li class="bd">Avanse Education Loan</li>
            </ul>
          </div>
        </div>
    </div>
    @endforeach
    <div class="scroll_tab">
        <div class="container">
            <div data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

                <nav id="dynamic1" class="navbar navbar-expand-sm affix-top">
                      <ul class="navbar-nav">
                        @foreach($education_partner_detail as $ep)
                        <li class="nav-item">
                          <a class="nav-link" href="#section{{$ep->id}}">{{$ep->title1}}</a>
                        </li>
                        @endforeach
                        <li class="nav-item">
                          <a class="nav-link" href="#section">FAQs</a>
                        </li>
                      </ul>
                </nav>
                @foreach($education_partner_detail as $epd)
                <div id="section{{$epd->id}}"style="padding:50px 20px;">
                  <h3>{{$epd->title2}}</h3>
                       {!!$epd->description!!}
                </div>
                @endforeach
                <!-- <div id="section2" style="padding:50px 20px;">
                    <div class="Benefit">
                        <div class="ben_filt">
                          <h3>Benefits of Avanse Abroad Education Loan</h3>
                          <div class="first_b">
                              <h6>Up To 100% Finance</h6>
                              <p>Whether you choose an Avanse Education Loan with or without collateral, you can continue to earn up to 100% financing. With so many various types of charges to cover throughout your trip abroad, Avanse will keep you safe.</p>
                          </div>
                          <div class="first_b">
                              <h6>Flexible Options For Repayment</h6>
                              <p>Make use of the Avanse Education Loan's repayment options, which enable loans to be adjusted to the needs of the user. If you have any specific requirements for your student loans, please contact UniCreds, and we'll forward them on to the Avanse team, who will present you with the finest possibilities available.</p>
                          </div>
                          <div class="first_b">
                              <h6>No Margin Moneyt</h6>
                              <p>Avanse education loans have a significant benefit over school loans from other banks in that no margin money is needed. In essence, margin money is the amount that borrowers must pay out of pocket, with the lender covering the remainder. The loan will cover all expenses excluding tuition, housing, travel, and the Caution Deposit/Building Fund/Refundable Deposit. As a result, you will not be required to pay any out-of-pocket fees to fund your education.</p>
                          </div>
                          <div class="first_b">
                              <h6>Customised Education Loan Solutions</h6>
                              <p>Avanse can provide you with customised alternatives for your education loans, such as tenure, payment during the moratorium period, and distribution, to match your specific demands.</p>
                          </div>
                          <div class="first_b">
                              <h6>Education Loan That Covers Tuition Cost, Accommodation, Caution</h6>
                              <p>Deposit/Building Fund/ Refundable Deposit, Travel Expenses And Other Living Costs Associated With Studying Abroad</p>
                          </div>
                          <div class="first_b">
                              <h6>No Defined Limit On The Loan Amount</h6>
                              <p>There is no limit on the amount you would like to have for your higher education from Avanse Education Loan.</p>
                          </div>
                        </div>
                        <div class="ben_filt">
                          <h3>Benefits Of Getting Your Avanse Abroad Education Loan Through UniCreds</h3>
                          <div class="first_b">
                              <h6>Higher Chance Of Approval</h6>
                              <p>By applying for your education loan through UniCreds, you are increasing your chances of approval. Generally, banks dismiss applications if they find any missing documents, property issues, or any other problem. With UniCreds, we will immediately reach out to Avanse Financial officials and find the best solution.</p>
                          </div>
                          <div class="first_b">
                              <h6>Online Submission Of Documents</h6>
                              <p>With UniCreds, you can submit all the required documents from home! There won’t be any need to visit the branch. Simply head over to our website and submit all the documents there. There won’t be a possibility of not submitting an essential document, as our system is designed to ensure all essential documents are submitted. You also get stepwise updates via notifications.</p>
                          </div>
                          <div class="first_b">
                              <h6>No Cost To You</h6>
                              <p>All our education loan services are completely free of cost.</p>
                          </div>
                          <div class="first_b">
                              <h6>Quicker Sanctions</h6>
                              <p>Our strategic partnerships ensure low turnaround time. Expect to have your education loan processed and sanctioned within 5 days.</p>
                          </div>
                        </div>
                    </div>
                </div>
                <div id="section3"  style="padding:50px 20px;">
                    <h3>Eligibility Criteria For Avanse Abroad Education Loan</h3>
                    <div class="flexible" data-component="FlexibleTable" data-source-file="FlexibleTable.js">
                      <table>
                        <thead>
                          <tr>
                            <th>Sr. No</th>
                            <th>Type</th>
                            <th>Requirement</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td class="text-left">Eligibility for Avanse education loan</td>
                            <td class="text-left"><p class="w_10">Avanse Education Loan Eligibility is as follows:</p>

                              1. The student taking the study loan must be an Indian Citizen and 18 years old or above.<br>

                              2.There must be confirmed admission to the Institute before the final disbursement of the education loan.<br>

                              3.The student loan must be co-signed by an earning co-borrower in India.</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td class="text-left">Avanse Education Loan Eligible Courses:</td>
                              <td class="text-left"><p class="w_10">If you're pursuing one of the following courses, you're eligible for an Avanse loan:</p>

                              Programs for undergraduates (bachelor degrees)<br>
                              Postgraduate education (masters degree)<br>
                              Diploma and certificate programmes are available.<br>

                              Avanse will fund any disciplines or programs that have been authorised by the appropriate regulatory bodies.</td>
                            </tr>
                          </tbody>
                      </table>
                    </div>
                </div>
                <div id="section4"  style="padding:50px 20px;">
                    <div class="w_11">
                        <h5>Documents Required for Avanse Abroad Education Loan</h5>
                        <p>UniCreds provides students with a customised list of documents by analysing the student’s profile, the co-applicant’s profile and any property/asset, which you may offer as collateral. At a high level, these are the documents needed:</p>
                        <div class="flexible" data-component="FlexibleTable" data-source-file="FlexibleTable.js">
                          <table>
                            <thead>
                              <tr>
                                <th>Sr. No</th>
                                <th>Type</th>
                                <th>Requirement</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td class="text-left">Documents required for Avanse education loan</td>
                                <td class="text-left"><p class="w_10">UniCreds provides students with a customised list of documents for an Avanse Education Loan analysing the student’s profile, the co-applicants profile, and any property/asset, which you may offer as collateral. At a high level, these are the documents needed:</p>
                                  <p>Here is a list of some of the documents that you would need:</p>

                                    1. Your KYC<br>
                                    2. All your educational documents<br>
                                    3. The details of the cost of your course<br>
                                    4. The KYC of the co-borrower<br>
                                    5. The income documents of the co-borrower<br>
                                    6. Collateral documents</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td class="text-left">Avanse Education Loan Eligible Courses:</td>
                                  <td class="text-left"><p class="w_10">If you're pursuing one of the following courses, you're eligible for an Avanse loan:</p>

                                  Programs for undergraduates (bachelor degrees)<br>
                                  Postgraduate education (masters degree)<br>
                                  Diploma and certificate programmes are available.<br>

                                  Avanse will fund any disciplines or programs that have been authorised by the appropriate regulatory bodies.</td>
                                </tr>
                              </tbody>
                          </table>
                        </div>
                    </div>
                </div>
                <div id="section5"  style="padding:50px 20px;">
                    <div class="Benefit">
                        <div class="ben_filt">
                            <h5>Loan Repayment For Avanse</h5>
                            <p>Flexible repayment choices are provided under the Avanse education loan terms and conditions. However, the most popular method of repaying an NBFC Education Loan is the partial payment of interest while the student is still enrolled in the course.</p>
                        </div>
                        <div class="ben_filt">
                            <h3>Benefits Of Getting Your Avanse Abroad Education Loan Through UniCreds</h3>
                            <div class="first_b">
                                <h6>Higher Chance Of Approval</h6>
                                <p>By applying for your education loan through UniCreds, you are increasing your chances of approval. Generally, banks dismiss applications if they find any missing documents, property issues, or any other problem. With UniCreds, we will immediately reach out to Avanse Financial officials and find the best solution.</p>
                            </div>
                            <div class="first_b">
                                <h6>Online Submission Of Documents</h6>
                                <p>With UniCreds, you can submit all the required documents from home! There won’t be any need to visit the branch. Simply head over to our website and submit all the documents there. There won’t be a possibility of not submitting an essential document, as our system is designed to ensure all essential documents are submitted. You also get stepwise updates via notifications.</p>
                            </div>
                            <div class="first_b">
                                <h6>No Cost To You</h6>
                                <p>All our education loan services are completely free of cost.</p>
                            </div>
                            <div class="first_b">
                                <h6>Quicker Sanctions</h6>
                                <p>Our strategic partnerships ensure low turnaround time. Expect to have your education loan processed and sanctioned within 5 days.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="section6"  style="padding:50px 20px;">
                    <div class="Benefit">
                        <div class="ben_filt">
                            <h3>How To Apply For Avanse Abroad Education Loan?</h3>
                            <div class="first_b">
                                <h6>Apply Online & Upload Your Documents</h6>
                                <p>1. After you've determined your eligibility, you may apply online or contact one of our experienced education loan counsellors and request a callback. Depending on your needs, our skilled counsellors can help you secure an Avanse education loan with or without collateral.</p>

                                <p>2. Once you've provided your profile data, our specialists will thoroughly examine your profile and, based on your eligibility, propose the next set of steps to you.</p>

                                <p>3. UniCreds allows students to upload documents online, saving you the inconvenience of presenting your documents at the bank and allowing you to do it from the comfort of your own home.</p>
                                

                                <p>4. Furthermore, to expedite the process, UniCreds provides you with a customised list of documents to submit depending on your profile and the loan that you've applied for.</p>
                            </div>
                            <div class="first_b">
                                <h6>Processing and Approval</h6>
                                <p>1. You can send your loan application and accompanying paperwork to Avanse for evaluation and real-time approval once you've uploaded/submitted the necessary documents.</p>

                                <p>2. UniCreds will connect with Avanse on a regular basis in order to establish the progress of your application and ensure that it is handled as soon as feasible. Our website will keep you updated on the latest developments if any</p>

                                <p>3.Applicants should be aware that the lender may contact them at this time to request more paperwork in support of their loan application. UniCreds will be sending these specific requirements to applicants. If an unreasonable demand is made, we will send it to the appropriate Avanse authorities</p>
                                

                                <p>4. Once the documentation and application are confirmed to be free of errors or additional loopholes, the loan is accepted and ready for sanction.</p>
                            </div>
                            <div class="first_b">
                                <h6>Loan Sanction And Disbursal</h6>
                                <p>1. After your loan is approved, you must pay the processing fees in order to acquire the sanction letter.</p>

                                <p>2. Following receipt of the sanction letter, the student and co-applicant must complete the loan agreement within the validity period of the sanction letter, which is six months.</p>

                                <p>3.The student is eligible for loan disbursement after signing the agreement.</p>
                                

                                <p>4. The lender will deposit the required sum of money into your bank account or university/account. We talk with the Avanse education loan interest rate and get it done if the student requires disbursement prior to the visa as per the visa office's guidelines.</p>

                                <p>UniCreds will also guarantee that disbursements are completed on time, and students can contact UniCreds at any time during the loan term.</p>
                            </div>
                            <div class="first_b">
                                <h6>Customised Education Loan Solutions</h6>
                                <p>Avanse can provide you with customised alternatives for your education loans, such as tenure, payment during the moratorium period, and distribution, to match your specific demands.</p>
                            </div>
                            <div class="first_b">
                                <h6>Education Loan That Covers Tuition Cost, Accommodation, Caution</h6>
                                <p>Deposit/Building Fund/ Refundable Deposit, Travel Expenses And Other Living Costs Associated With Studying Abroad</p>
                            </div>
                            <div class="first_b">
                                <h6>No Defined Limit On The Loan Amount</h6>
                                <p>There is no limit on the amount you would like to have for your higher education from Avanse Education Loan.</p>
                            </div>
                         </div>
                        <div class="ben_filt">
                            <h3>Benefits Of Getting Your Avanse Abroad Education Loan Through UniCreds</h3>
                            <div class="first_b">
                                <h6>Higher Chance Of Approval</h6>
                                <p>By applying for your education loan through UniCreds, you are increasing your chances of approval. Generally, banks dismiss applications if they find any missing documents, property issues, or any other problem. With UniCreds, we will immediately reach out to Avanse Financial officials and find the best solution.</p>
                            </div>
                            <div class="first_b">
                                <h6>Online Submission Of Documents</h6>
                                <p>With UniCreds, you can submit all the required documents from home! There won’t be any need to visit the branch. Simply head over to our website and submit all the documents there. There won’t be a possibility of not submitting an essential document, as our system is designed to ensure all essential documents are submitted. You also get stepwise updates via notifications.</p>
                            </div>
                            <div class="first_b">
                                <h6>No Cost To You</h6>
                                <p>All our education loan services are completely free of cost.</p>
                            </div>
                            <div class="first_b">
                                <h6>Quicker Sanctions</h6>
                                <p>Our strategic partnerships ensure low turnaround time. Expect to have your education loan processed and sanctioned within 5 days.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div id="section">
                    <div class="so_faq">
                        <div class="so_head s_head">
                            <h3>Frequently Asked Questions</h3>
                        </div>
                        <div class="so_main">
                            <div class="accordion" id="accordionExample">
                              @foreach($education_faq as $key=>$ef)
                                  <div class="item">
                                     <div class="item-header" id="heading{{$ef->id}}">
                                        <h2 class="mb-0">
                                           <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                              data-bs-target="#collapse{{$ef->id}}" aria-expanded="false" aria-controls="collapse{{$ef->id}}">{{$key+1}}. {{$ef->question}}
                                           <i class="fa fa-angle-down"></i>
                                           </button>
                                        </h2>
                                     </div>
                                     @if($key+1 == 1)
                                     <div id="collapse{{$ef->id}}" class="collapse show" aria-labelledby="heading{{$ef->id}}"
                                        data-bs-parent="#accordionExample">
                                        <div class="t-p t-pp">
                                           {{$ef->answer}}
                                        </div>
                                     </div>
                                     @else
                                     <div id="collapse{{$ef->id}}" class="collapse" aria-labelledby="heading{{$ef->id}}"
                                        data-bs-parent="#accordionExample">
                                        <div class="t-p t-pp">
                                           {{$ef->answer}}
                                        </div>
                                     </div>
                                     @endif
                                  </div>
                                  @endforeach
                                  
                                </div>
                        </div>
                    </div>
                    <div class="bg-city-tab">
                        <div class="container">
                            <div class="multi-partner-title">
                                <h2>
                                    Near by location
                                </h2>
                            </div>
                            <div class="city-tab">
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <div class="slider"></div>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home1-tab" data-bs-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true">Countries</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="home2-tab" data-bs-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="false">Education Loan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="home3-tab" data-bs-toggle="tab" href="#home3" role="tab" aria-controls="home3" aria-selected="false">Student Accommodation In the UK</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home1-tab">
                                        <div class="city">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Auxilo Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">IDFC Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Credenc Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Prodigy Finance Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Bank of Baroda Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">ICICI Bank Study Abroad Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Leap Finance Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Axis Bank Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">HDFC Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Incred Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Avanse Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Abroad Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Prodigy Finance Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Bank of Baroda Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">ICICI Bank Study Abroad Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Leap Finance Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Axis Bank Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">HDFC Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Incred Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Avanse Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Abroad Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Prodigy Finance Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Bank of Baroda Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">ICICI Bank Study Abroad Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Leap Finance Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Axis Bank Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">HDFC Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Incred Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Avanse Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   <div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Abroad Education Loan</a>
														</p>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                                        <div class="city">
                                            <div class="row">
                                             	<div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Auxilo Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">IDFC Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Credenc Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">IDFC Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Auxilo Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Credenc Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Prodigy Finance Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Auxilo Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">IDFC Education Loan</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Prodigy Finance Education Loan</a>
														</p>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home3-tab">
                                        <div class="city">
                                             <div class="row">
                                            	<div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">University of Chester Queens Park Campus</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">University of Essex</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Coventry University</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">University of Strathclyde</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Howard Gardens</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Buchanan View</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">University of Chester Queens Park Campus</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">University of Essex</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">University of Strathclyde</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Coventry University</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Howard Gardens</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Buchanan View</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">University of Chester Queens Park Campus</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">University of Essex</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Coventry University</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">University of Strathclyde</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Howard Gardens</a>
														</p>
													</div>
                                                </div>
                                                <div class="col-lg-3">
                                                   	<div class="city-list">
														<p>
															<i class="fa-solid fa-angles-right"></i>
															<a href="#">Buchanan View</a>
														</p>
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
            </div>
        </div>
    </div>
    <!-- <div class="co_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 padding">
                    <div class="footer footer-1">
                        <h2 class="footer-title">about us</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        <ul class="social-link">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 padding">
                    <div class="footer">
                        <h2 class="footer-title">Discover</h2>
                        <ul class="discover-link">
                            <li><a href="{{url('/host_home')}}"><i class="fa-solid fa-angle-right"></i> Host A Home</a></li>
                            <li><a href="{{url('/faq')}}"><i class="fa-solid fa-angle-right"></i> FAQs</a></li>
                            <li><a href="{{url('/education')}}"><i class="fa-solid fa-angle-right"></i> Education loans</a></li>
                            <li><a href="{{url('/scholarship')}}"><i class="fa-solid fa-angle-right"></i> Scholarships</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padding">
                    <div class="footer">
                        <h2 class="footer-title">Company</h2>
                        <ul class="discover-link">
                            <li><a href="{{url('/')}}"><i class="fa-solid fa-angle-right"></i>Find My Acco</a></li>
                            <li><a href="{{url('/about_us')}}"><i class="fa-solid fa-angle-right"></i> About Us</a></li>
                            <li><a href="{{url('/contact_us')}}"><i class="fa-solid fa-angle-right"></i> contact us</a></li>
                            <li><a href="{{url('/partner')}}"><i class="fa-solid fa-angle-right"></i> partners</a></li>
                            <li><a href="{{url('/blog')}}"><i class="fa-solid fa-angle-right"></i> blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padding">
                    <div class="footer">
                        <h2 class="footer-title">Contact Info</h2>
                        <ul class="con-home">
                            <li><i class="fa-solid fa-house-chimney"></i>
                                <div class="home-content">
                                    <h6>ADDRESS:</h6>
                                    <p>Allée Pic-Pic 2, 1203 Genève</p>
                                </div>
                            </li>
                            <li><i class="fa-solid fa-envelope"></i>
                                <div class="home-content">
                                    <h6>EMAIL:</h6>
                                    <p><a href="mailto:example@gmail.com">example@gmail.com</a></p> 
                                </div>   
                            </li>
                            <li><i class="fa-solid fa-phone-flip"></i>
                                <div class="home-content">
                                    <h6>PHONE:</h6>
                                    <p><a href="tel: +1234567890">+1234567890</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <p>© 2022 Adventum Student Living Pvt. Ltd. All Rights Reserved | Made with  ♥</p>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <ul class="f-blink">
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>   
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="co_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 padding">
                    <div class="footer footer-1">
                        <h2 class="footer-title">about us</h2>
                        <p>{{$footer_description}}</p>
                        <ul class="social-link">
                            @foreach($social_links as $sl)
                            <li><a href="{{$sl->facebook_url}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$sl->twitter_url}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{$sl->linkedin_url}}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{$sl->instagram_url}}"><i class="fab fa-instagram"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 padding">
                    <div class="footer">
                        <h2 class="footer-title">Discover</h2>
                        <ul class="discover-link">
                            <li><a href="/host_home"><i class="fa-solid fa-angle-right"></i> Host A Home</a></li>
                            <li><a href="/faq"><i class="fa-solid fa-angle-right"></i> FAQs</a></li>
                            <li><a href="/education"><i class="fa-solid fa-angle-right"></i> Education loans</a></li>
                            <li><a href="/scholarship"><i class="fa-solid fa-angle-right"></i> Scholarships</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padding">
                    <div class="footer">
                        <h2 class="footer-title">Company</h2>
                        <ul class="discover-link">
                          <li><a href="/"><i class="fa-solid fa-angle-right"></i>Find My Acco</a></li>
                            <li><a href="/about_us"><i class="fa-solid fa-angle-right"></i> About Us</a></li>
                            <li><a href="/contact_us"><i class="fa-solid fa-angle-right"></i> contact us</a></li>
                            <li><a href="/partner"><i class="fa-solid fa-angle-right"></i> partners</a></li>
                            <li><a href="/blog"><i class="fa-solid fa-angle-right"></i> blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padding">
                    <div class="footer">
                        <h2 class="footer-title">Contact Info</h2>
                        @foreach($admin_detail as $ad)
                        <ul class="con-home">
                            <li><i class="fa-solid fa-house-chimney"></i>
                                <div class="home-content">
                                    <h6>ADDRESS:</h6>
                                    <p>{{$ad->address}}</p>
                                </div>
                            </li>
                            <li><i class="fa-solid fa-envelope"></i>
                                <div class="home-content">
                                    <h6>EMAIL:</h6>
                                    <p><a href="mailto:{{$ad->email}}">{{$ad->email}}</a></p> 
                                </div>   
                            </li>
                            <li><i class="fa-solid fa-phone-flip"></i>
                                <div class="home-content">
                                    <h6>PHONE:</h6>
                                    <p><a href="tel: {{$ad->phone_no}}">{{$ad->phone_no}}</a></p>
                                </div>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <p>© 2022 Adventum Student Living Pvt. Ltd. All Rights Reserved | Made with  ♥</p>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <ul class="f-blink">
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy">
        <a class="up-btn show1" href="#"><i class="fas fa-angle-double-up"></i></a>
    </div>

    <style type="text/css">
  
  div#message {
    color: white;
    background-color: #dfa920;
    text-align: center;
    
}
</style>
 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){

        $(".btn-link").click(function(){
          $(".btn-link").toggleClass("collapsed");
        });
      });

        $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('#dynamic1').addClass('affix');
            } else {
                $('#dynamic1').removeClass('affix');
            }
        });

        $(".city-tab .nav-tabs a").click(function() {
          var position = $(this).parent().position();
          var width = $(this).parent().width();
            $(".city-tab .slider").css({"left":+ position.left,"width":width});
        });
        var actWidth = $(".city-tab .nav-tabs").find(".active").parent("li").width();
        var actPosition = $(".city-tab .nav-tabs .active").position();
        $(".city-tab .slider").css({"left":+ actPosition.left,"width": actWidth});

      
      $("#nav ul li a[href^='#']").on('click', function(e) {

         e.preventDefault();

         var hash = this.hash;

         $('html, body').animate({
             scrollTop: $(hash).offset().top
           }, 1000, function(){
             window.location.hash = hash;
           });

      });

      $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('#dynamic').addClass('newClass');
            } else {
                $('#dynamic').removeClass('newClass');
            }
        });


        $(function(){
  
          $('li.dropdown > a').on('click',function(event){
            
            event.preventDefault()
            
            $(this).parent().find('ul').first().toggle(300);
            
            $(this).parent().siblings().find('ul').hide(200);
            $(this).parent().find('ul').mouseleave(function(){  
              var thisUI = $(this);
              $('html').click(function(){
                thisUI.hide();
                $('html').unbind('click');
              });
            });
            
          });
          
        });
    </script>
  </body>
  </html>