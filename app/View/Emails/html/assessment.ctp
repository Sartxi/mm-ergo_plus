<h2>Safety Survey Answers</h2>
<table>
	<tr>
		<td><b>Name</b>:</td>
		<td><?=$this->data['assessment']['name']?></td>
	</tr>
	<tr>
		<td><b>Business Name</b>:</td>
		<td><?=$this->data['assessment']['businessName']?></td>
	</tr>
	<tr>
		<td><b>Phone</b>:</td>
		<td><?=$this->data['assessment']['phone']?></td>
	</tr>
	<tr>
		<td><b>Email</b>:</td>
		<td><?=$this->data['assessment']['email']?></td>
	</tr>
</table>
<br /><br />
<table cellspacing="0" border="0" bgcolor="#eee" style="margin: 0; padding: 0; border: 1px solid silver;" width="100%" cellpadding="0">
	<thead>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b>Answers</b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;"><b>Questions</b></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q1'])){print $this->data['assessment']['q1'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">1. Does your company provide new hire assessments to determine if a candidate is physically able to perform job tasks?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q2'])){print $this->data['assessment']['q2'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">2. Does your company provide on-site wellness, general health or fitness center equipment?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q3'])){print $this->data['assessment']['q3'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">3. Does your company provide opportunities for employees to receive on-site, one-on-one training for physical conditioning?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q4'])){print $this->data['assessment']['q4'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">4. Is there a job conditioning program for employees upon their return to work from an injury?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q5'])){print $this->data['assessment']['q5'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">5. Is there an in-house job transfer program to physically condition existing employees for a desired job?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q6'])){print $this->data['assessment']['q6'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">6. Does your company have an ergonomic team in place?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q7'])){print $this->data['assessment']['q7'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">7. Are ergonomic assessments being performed immediately upon notification of a risk?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q8'])){print $this->data['assessment']['q8'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">8. Are risks being identified and addressed prior to employee notification or injury?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q9'])){print $this->data['assessment']['q9'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">9. Are modifications being made to reduce risk of injury and assist an employee in performing a job safely?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q10'])){print $this->data['assessment']['q10'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">10. Is there a process in place to track ergonomic and safety recommendations, implementations and successes?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q11'])){print $this->data['assessment']['q11'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">11. Are employees trained to identify job risk and carry out injury reporting protocols?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q12'])){print $this->data['assessment']['q12'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">12. Is there a program in place for employees to identify and report injury risk at early signs of discomfort?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q13'])){print $this->data['assessment']['q13'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">13. Are employees involved in ongoing training for body mechanics and job performance?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q14'])){print $this->data['assessment']['q14'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">14. Are employees informed on where to find resources and support for environmental issues?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q15'])){print $this->data['assessment']['q15'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">15. Are employees trained in their personal responsibilities and contributing to the company's safety culture?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q16'])){print $this->data['assessment']['q16'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">16. Are all employees aware of who safety/ergonomic representatives are and how to contact them?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q17'])){print $this->data['assessment']['q17'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">17. Does management foster a culture of safety through specific initiatives and provided programs?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q18'])){print $this->data['assessment']['q18'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">18. Are employees aware of company safety statistics and initiatives, as well as encouraged to contribute to improving those statistics?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q19'])){print $this->data['assessment']['q19'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">19. Is there an incentive program in place to acknowledge and reward employees for reaching safety milestones?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q20'])){print $this->data['assessment']['q20'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">20. Is your company's safety message positioned as a part of employees' everyday lives?</td>
		</tr>
	</tbody>
</table>
