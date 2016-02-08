<?php
	$options = array(
   		'Yes' => 'Yes',
   		'No' => 'No',
   	);
	$attributes = array(
        'div' => false,
        'label' => false,
        'type' => 'radio',
        'default'=> 0,
        'legend' => false,
        'before' => '<label class="btn btn-default btn-lg">',
        'separator' => '</label><label class="btn btn-default btn-lg">',
        'after' => '</label>',
        'options' => $options
	);
	$moptions = array(
   		'Less than 6 weeks' => 'Less than 6 weeks',
   		'6-12 Weeks' => '6-12 Weeks',
   		'3-12 Months' => '3-12 Months',
   		'Over 1 Year' => 'Over 1 Year',
   	);
	$mattributes = array(
        'div' => false,
        'label' => false,
        'type' => 'radio',
        'default'=> 0,
        'legend' => false,
        'before' => '<label class="btn btn-default">',
        'separator' => '</label><label class="btn btn-default">',
        'after' => '</label>',
        'options' => $moptions
	);
	$aoptions = array(
   		'Under 15' => 'Under 15',
   		'15-29' => '15-29',
   		'30-54' => '30-54',
   		'55-70' => '55-70',
   		'70+' => '70+',
   	);
	$ageattributes = array(
		'type' => 'select',
		'empty' => 'Select One',
		'label' => 'What is your age?',
		'options' => $aoptions
	);
?>

<div class="container">
	<br /><br />
	<div class="row">
		<div id="assessmentform" class="col-md-12">

			<div id="surveyWelcome">
				<div class="row">
					<div class="col-md-2">
						<img src="/img/safety_first_icon.jpg" class="img-responsive" style="max-width:170px;margin:0 auto;">
					</div>
					<div class="col-md-10">
						<h2 class="hands">Workplace Safety Survey</h2>
						<p>Please answer each question to the best of your knowledge. One of our physical therapists will get back to you shortly to inform you on any areas where the ErgoPlus system could potentially help your company to keep employee wellness and safety education known and keep employee job satisfaction on the rise.</p>
						<br />
					</div>
				</div>
				<div class="col-md-12"><hr></div>
			</div>

			<div class="row assessmentformarea">
				<?=$this->Form->create('assessment', array('inputDefaults'=>array('div'=>'form-group', 'class'=>'form-control', 'wrapInput'=>false)));?>
				<div id="questSet1" class="col-md-12 questions">
					<h2 class="text-center">Bio-Physics <small>(questions 1-5)</small></h2>
					<br />
					<div class="well">
						<div class="row">
							<div class="col-md-10">
								<p class="lead">1. Does your company provide new hire assessments to determine if a candidate is physically able to perform job tasks?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q1', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">2. Does your company provide on-site wellness, general health or fitness center equipment?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q2', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">3. Does your company provide opportunities for employees to receive on-site, one-on-one training for physical conditioning?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q3', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">4. Is there a job conditioning program for employees upon their return to work from an injury?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q4', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">5. Is there an in-house job transfer program to physically condition existing employees for a desired job?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q5', $attributes);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="questSet2" class="col-md-12 questions" style="display:none;">
					<h2 class="text-center">Ergonomics <small>(questions 6-10)</small></h2>
					<br />
					<div class="well">
						<div class="row">

							<div class="col-md-10">
								<p class="lead">6. Does your company have an ergonomic team in place?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q6', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">7. Are ergonomic assessments being performed immediately upon notification of a risk?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q7', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">8. Are risks being identified and addressed prior to employee notification or injury?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q8', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">9. Are modifications being made to reduce risk of injury and assist an employee in performing a job safely?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q9', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">10. Is there a process in place to track ergonomic and safety recommendations, implementations and successes?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q10', $attributes);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="questSet3" class="col-md-12 questions" style="display:none;">
					<h2 class="text-center">Education <small>(questions 11-15)</small></h2>
					<br />
					<div class="well">
						<div class="row">

							<div class="col-md-10">
								<p class="lead">11. Are employees trained to identify job risk and carry out injury reporting protocols?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q11', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">12. Is there a program in place for employees to identify and report injury risk at early signs of discomfort?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q12', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">13. Are employees involved in ongoing training for body mechanics and job performance?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q13', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">14. Are employees informed on where to find resources and support for environmental issues?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q14', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">15. Are employees trained in their personal responsibilities and contributing to the company's safety culture?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q15', $attributes);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="questSet4" class="col-md-12 questions" style="display:none;">
					<h2 class="text-center">Awareness <small>(questions 16-20)</small></h2>
					<br />
					<div class="well">
						<div class="row">
							<div class="col-md-10">
								<p class="lead">16. Are all employees aware of who safety/ergonomic representatives are and how to contact them?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q16', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">17. Does management foster a culture of safety through specific initiatives and provided programs?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q17', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">18. Are employees aware of company safety statistics and initiatives, as well as encouraged to contribute to improving those statistics?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q18', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">19. Is there an incentive program in place to acknowledge and reward employees for reaching safety milestones?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q19', $attributes);?>
									</div>
								</div>
							</div>

							<div class="col-md-12"><hr></div>

							<div class="col-md-10">
								<p class="lead">20. Is your company's safety message positioned as a part of employees' everyday lives?</p>
							</div>
							<div class="col-md-2">
								<div class="text-right">
									<div id="q1" class="btn-group" data-toggle="buttons">
										<?=$this->Form->input('q20', $attributes);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Submit -->
				<div id="questSet5" class="col-md-12" style="display:none;">
					<h2 class="text-center">Thank you for taking the Safety Survey!</h2>
					<br />
					<div class="well">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<h3 class="text-center">Where do we send your results?</h3>
								<hr>
								<?=$this->Form->input('name', array('placeholder'=>'Enter Your First and Last Name', 'required' => true, 'allowEmpty' => false)); ?>
								<?=$this->Form->input('businessName', array('placeholder'=>'Enter Business Name', 'required' => true, 'allowEmpty' => false)); ?>
								<?=$this->Form->input('phone', array('placeholder'=>'Enter Your Phone Number', 'required' => true, 'allowEmpty' => false)); ?>
								<?=$this->Form->input('email', array('placeholder'=>'Enter Your Email', 'required' => true, 'allowEmpty' => false)); ?>
								<div class="g-recaptcha" data-sitekey="6LfOBRETAAAAAEwXi6Nkt5I5j5k8uy9QmjWgJrqz"></div>
								<br />
							</div>
							<div class="col-md-2"></div>
						</div>
					</div>
				</div>
				<div id="surveyDisclaimer" class="col-md-12 text-center alert alert-danger">
					Note: Please be sure you have filled out all fields including the recaptcha. Our specialists will go over your answers and get back to you with recomendation.
				</div>
				<div class="col-md-12">
					<button id="nextbtn" class="btn btn-primary btn-lg pull-right" type="button">Next <span class="glyphicon glyphicon-chevron-right"></span></button>
					<?=$this->Form->submit('Submit Survey!', array('class'=>'btn btn-primary btn-lg btn-mega pull-right', 'id'=>'submitbtn'))?>
					<button id="prevbtn" class="btn btn-default btn-lg" type="button" style="display:none;"></button>
				</div>
				<?=$this->Form->end()?>
			</div>
		</div>
	</div>
</div>
