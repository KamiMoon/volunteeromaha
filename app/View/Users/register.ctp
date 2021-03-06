<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10 form-2">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><img src="/volunteeromaha/img/Register.png"/> Register for Volunteer Omaha</legend>
        <?php
        echo $this->Form->input('first_name', array('label'=>'First Name:'));
        echo $this->Form->input('last_name', array('label'=>'Last Name:'));
        echo $this->Form->input('username', array('label'=>'Username:'));
        echo $this->Form->input('email', array('label'=>'Email:'));
        echo $this->Form->input('password', array('label'=>'Password:'));
        echo $this->Form->input('confirm_password', array('type' => 'password', 'label'=>'Confirm Password:'));		
		?>
		
		<div class="form-group required">
			<label for="UserConfirmPassword" class="col-lg-2 control-label">
				<a data-toggle="modal" data-target="#myModal">Agree to Terms &amp; Conditions:</a>
			</label>
			<div class="col-lg-10">
				<input type="checkbox" name="data[User][terms]" class="form-control" style="width: 32px" value="1" id="UserTerms">
			</div>
		</div>
		
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="col-md-1"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
      </div>
      <div class="modal-body" align="justify">
<p>VolunteerOmaha Terms and Conditions</p>
<p>VOLUNTEERMATCH - TERMS OF SERVICE AND USE</p>
<p>VolunteerOmaha ("VolunteerOmaha," "we," or "us") provides the VolunteerOmaha site at URL: http://www.volunteeromaha.com/ ("Site"). The Site offers the services, including but not limited to the VolunteerOmaha online volunteer matching service and other information related thereto (collectively, the "Services") to our users, whether they be nonprofit organizations, volunteers, registered VolunteerOmaha members, or other visitors to the Site under the terms of service and use contained in these Terms (as defined below). "You" means the individual person entering this Agreement on his or her own behalf; or, if this Agreement is being entered on behalf of an organization, such as an employer / school, "you" means the organization on whose behalf which this Agreement is entered, and in the latter case, the person entering this Agreement represents and warrants that he or she has the authority to do so on your behalf.
These VolunteerOmaha Terms of Service and Use, along with VolunteerOmaha's Privacy Policy, located in this document ("Privacy Policy" Section 22), set forth the legally binding terms of your access to and use of the Services ("Terms").</p>
<p>Please read the Terms, Conditions and Privacy Policy carefully. You understand and agree that these terms set forth the legally binding terms and conditions for your use of the Site and Services, and the Site and Services are made available and provided to you exclusively under these Terms. By visiting, using or accessing Site and/or the Services, you agree to comply with and be bound by the Terms. If you do not agree with these Terms, you should leave the Site and discontinue use of the Site and Services immediately. If you wish to register as a VolunteerOmaha member to make use of the Services reserved for members, you must read these Terms and indicate your acceptance during the registration process. Note, however, that these Terms apply to your access to and use of the Site and Services regardless of whether you register as a VolunteerOmaha member. We reserve the right to terminate your use or access to the Services at any time for any reason, including, without limitation, if we learn that you have provided false or misleading information or have violated the Terms. </p>
<p>1. VOLUNTEEROMAHA ACCOUNT</br>
Registering. Depending on what Services you desire to receive, you may need to register and become a VolunteerOmaha member. You will find registration instructions on the Site.
Eligibility. By registering as a VolunteerOmaha member, you represent that: (a) all required registration information you submit is truthful and accurate; (b) you will maintain the accuracy of such information; and (c) your use of the Services does not violate any applicable law or regulation. Your member profile may be deleted without warning if we have reason to believe that you do not meet eligibility requirements. </p>
<p>Username and Password. When you sign up to become a VolunteerOmaha member either to post volunteer opportunities or to register for volunteer opportunities, you will also be asked to choose a username and password for your VolunteerOmaha profile. You are entirely responsible for maintaining the confidentiality of your password and all use of your VolunteerOmaha username, password, and profile. You agree not to use the VolunteerOmaha profile, username, or password of another VolunteerOmaha member at any time unless expressly authorized by such VolunteerOmaha member. You agree to notify us immediately if you suspect any unauthorized use of your VolunteerOmaha profile or access to your password. </p>
<p>Term. This Agreement shall remain in full force and effect while you use the Site, Services, or are a VolunteerOmaha member. You may terminate your VolunteerOmaha membership at any time, for any reason, by sending an email to volunteeromaha@gmail.com. We may terminate your membership for any reason, effective upon sending notice to you at the primary e-mail address you have stored in your VolunteerOmaha profile. </p>
<p>VolunteerOmaha will provide you the Services chosen by you substantially as described on the Site. The Site and Services are made available for your personal, internal, non-commercial use. You may not frame the Site or Services, or make available, or facilitate distribution of Content through any means or medium. You may link to the Site from other websites if you obtain VolunteerOmaha's prior consent. Please send all requests to: volunteeromaha@gmail.com to get more information about linking to the Site. </p>
<p>2. YOUR RESPONSIBILITIES</br>
You must not use the Site or Services to: (a) violate any local, state, national or international law; (b) stalk, harass or harm another individual; (c) collect or store personal data about other users; (d) impersonate any person or entity, or otherwise misrepresent your affiliation with a person or entity; or (e) interfere with or disrupt the Services or servers or networks connected to the Services, or disobey any requirements, procedures, policies or regulations of networks connected to the Services. You must not reproduce, duplicate, copy, sell, resell or exploit for any commercial purposes, any portion of the Content, Site, or Services, use of the Content, Site, or Services, or access to the Content, Site, or Services. Without our prior written consent, you may not (a) allow, enable, or otherwise support the transmission of mass unsolicited, commercial advertising or solicitations via e-mail (spam); (b) use any high volume, automated, or electronic means (including without limitation robots, spiders, scripts or other automatic device) to access the Services or monitor or copy our web pages or the content contained thereon; (c) link or deep-link to the Site for any purpose; or (d) frame the Site, place pop-up windows over its pages, or otherwise affect the display of its pages. All information that you provide to us will be true, accurate and current. </p>
<p>3. MODIFICATIONS TO TERMS</br>
We may change the Terms including, without limitation, the Privacy Policy, from time to time. We will notify you of any such changes via e-mail. You agree that such amended Terms will be effective 30 days after the notice is sent to you, and your continued access to the Site or use of the Services after that time shall constitute your acceptance of the amended Agreement. If you object to any such changes, your sole and exclusive remedy shall be to terminate your membership by sending an email to volunteeromaha@gmail.com. In addition, certain areas of the Services may be subject to additional terms of use. By using such areas, or any part thereof, you agree to be bound by the additional terms of use applicable to such areas. In the event that any of the additional terms of use governing such areas conflict with these Terms, these Terms shall control. </p>
<p>4. TRADE SECRETS</br>
All rights not expressly granted by VolunteerOmaha to you are reserved.
You acknowledge that the Code ("Code") and its structure, organization and source code may constitute valuable trade secrets of VolunteerOmaha and its suppliers. Except as expressly allowed under Section 5, you must not (a) modify, adapt, alter, translate, or create derivative works from the Code or the Content; or (b) sublicense, distribute, sell, use for service bureau use, lease, rent, loan or otherwise transfer the Code or Content to any third party. </p>
<p>5. MODIFICATIONS TO SERVICES</br>
We reserve the right to modify or discontinue the Site or Services with or without notice to you. We shall not be liable to you or any third party should we exercise our right to modify or discontinue the Site or Services. If you object to any such changes, your sole recourse shall be to cease using the Site or Services. Continued use of the Site or Services following notice of any such changes shall indicate your acknowledgement of such changes and satisfaction with the Site or Services as so modified. </p>
<p>6. PRIVACY</br>
As part of the registration process, you will be asked to provide certain personal information to us. All uses of your personal information will be treated in accordance with our Privacy Policy, which is hereby incorporated by reference. If you use the Site and/or the Services, you are accepting the terms and conditions of our Privacy Policy. If you do not agree to have your information used in any of the ways described in the Privacy Policy, you must discontinue use of the Site and/or the Services. </p>
<p>7. THIRD PARTY CONTENT AND MONITORING</br>
We are a distributor and publisher of content supplied by users of the Services and by other third parties ("Content"). Accordingly, we have no editorial control over such Content. Any services, offers, or other information expressed or made available by third parties as part of the Content, including information provided by other users of the Services, are those of the respective author(s) or distributor(s) of that information and not of us. We neither endorse nor are responsible for the accuracy or reliability of any Content, or opinion, advice, information, or statement made on the Services by anyone. We have the right, but not the obligation, to monitor and review the Content on the Services and your account to determine compliance with these Terms and any other operating rules established by us, to satisfy any law, regulation or authorized government request, or for other purposes. You understand and acknowledge that we do not monitor Content for accuracy or reliability. </p>
<p>8. YOUR CONTENT; LICENSE; REPRESENTATION AND WARRANTY</br>
You are solely responsible for any information, comments, feedback, data, materials, photos or other content of any type or description that you provide or make available to us through or to the Site or Services, including any data entry forms found through the Site ("Your Content"), and we act as a passive conduit for the distribution and publication of Your Content. However, we reserve the right to remove Your Content if we believe Your Content may create liability for us. You represent and warrant that Your Content (a) does not infringe on any third party's copyright, patent, trademark, trade secret or other proprietary rights or rights of publicity or privacy; (b) does not violate any law, statute, ordinance or regulation, including without limitation the laws and regulations governing export control; (c) is not defamatory or trade libelous; (d) is not pornographic or obscene; (e) does not violate any laws regarding unfair competition, anti-discrimination or false advertising; and (f) does not contain viruses, trojan horses, worms, time bombs, cancelbots, spyware, or other similar harmful or deleterious programming routines. You acknowledge and agree that Third Parties (as defined below) are third-party beneficiaries of these representations and warranties, and that they shall apply to them with the same force and effect as they apply to us. You hereby grant to us a worldwide, perpetual, irrevocable and royalty-free license, sublicensable through multiple tiers of sublicensees, to use, reproduce, modify, distribute, display, perform, and create derivative works from Your Content in any media or through any means now known or not currently known. You acknowledge that some of Your Content will be publicly available for other users of the Site or Services to view, such as feedback and comments. You are solely responsible for the content of Your Content. </p>
<p>Without limiting the foregoing, if you believe that your work has been copied and posted on the Site or Services in a way that constitutes copyright infringement, please provide our site administrator with the following information: (i) an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright interest; (ii) a description of the copyrighted work that you claim has been infringed; (iii) a description of where the material that you claim is infringing is located on the Site or Services; (iv) your address, telephone number, and email address; (v) a written statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law; (vi) a statement by you, made under penalty of perjury, that the above information in your notice is accurate and that you are the copyright owner or authorized to act on the copyright owner's behalf. VolunteerOmaha's Copyright Agent for notice of claims of copyright infringement can be reached by email: volunteeromaha@gmail.com. </p>
<p>9. INTELLECTUAL PROPERTY</br>
You acknowledge that VolunteerOmaha owns all right, title and interest in and to the Services, including without limitation, the Site, and all underlying software and technology, including without limitation all Intellectual Property Rights. "Intellectual Property Rights" means any and all rights existing from time to time under patent law, copyright law, trade secret law, trademark law, unfair competition law, and any and all other proprietary rights, and any and all applications, renewals, extensions and restorations thereof, now or hereafter in force and effect worldwide. </p>
<p>10. RESPONSIBILITY FOR DEALINGS WITH THIRD PARTIES</br>
If you are using the Services to find volunteer opportunities, your correspondence or ensuing relationship with nonprofit and public service organizations, volunteers, partners, advertisers, sponsors or other third parties found on or through the Services ("Volunteer Organization"), including posting or acceptance of volunteer opportunities, and any other terms or conditions associated with such dealings, are solely between you and the Volunteer Organization you choose to deal with. YOU AGREE THAT VOLUNTEEROMAHA WILL NOT BE RESPONSIBLE OR LIABLE FOR ANY LOSS, COST, DAMAGE, OR OTHER LIABILITY OF ANY SORT INCURRED AS THE RESULT OF ANY SUCH DEALINGS, OR AS THE RESULT OF THE PRESENCE OF SUCH PARTIES ON THE SERVICES AND YOU HEREBY IRREVOCABLY WAIVE ANY CLAIMS AGAINST VOLUNTEEROMAHA ARISING FROM OR RELATED TO YOUR RELATIONSHIP WITH A VOLUNTEER ORGANIZATION. </p>
<p>If you are using the Services to find volunteers to fill volunteer opportunities, your correspondence or ensuing relationship with the volunteers found on or through the Services, including posting volunteer opportunities, and any other terms or conditions associates with such dealings, are solely between you and the Volunteer. YOU AGREE THAT VOLUNTEEROMAHA WILL NOT BE RESPONSIBLE OR LIABLE FOR ANY LOSS, COST, DAMAGE, OR OTHER LIABILITY OF ANY SORT INCURRED AS THE RESULT OF ANY SUCH DEALINGS, OR AS THE RESULT OF THE PRESENCE OF SUCH PARTIES ON THE SERVICES AND YOU HEREBY IRREVOCABLY WAIVE ANY CLAIMS AGAINST VOLUNTEEROMAHA ARISING FROM OR RELATED TO YOUR RELATIONSHIP WITH A VOLUNTEER. </p>
<p>Release. You hereby release us, our officers, employees, agents and successors from claims, demands any and all losses, damages, rights, claims, and actions of any kind including, without limitation, personal injuries, death, and property damage, that is either directly or indirectly related to or arises from (i) any interactions with other VolunteerOmaha users, or (ii) your participation in any offline events or activities arising from or related to your use of the Services. </p>
<p>11. LINKS</br>
Our provision of a link to any other site or location is for your convenience and does not signify our endorsement of such other site or location or its contents. We have no control over, do not review, and cannot be responsible for, these outside Web sites or their content. WE WILL NOT BE LIABLE FOR ANY INFORMATION, SOFTWARE, OR LINKS FOUND AT ANY OTHER WEBSITE, INTERNET LOCATION, OR SOURCE OF INFORMATION, OR FOR YOUR USE OF SUCH INFORMATION. </p>
<p>12. TERMINATION</br>
You agree that we, in our sole discretion, may terminate your VolunteerOmaha membership or other use of the Site or Services without prior notice, and remove and discard Your Content from the Site, for any reason and without prior notice, including, without limitation, if we believe that you have violated or acted inconsistently with the letter or spirit of the Terms. FURTHER, YOU AGREE THAT WE SHALL NOT BE LIABLE TO YOU OR ANY OTHER PARTY FOR ANY TERMINATION OF YOUR ACCESS TO THE SERVICES. You may discontinue your participation in and access to the Services at any time. </p>
<p>13. DISCLAIMER OF WARRANTIES</br>
YOU EXPRESSLY AGREE THAT USE OF THE SERVICES IS AT YOUR SOLE RISK. THE SERVICES AND SITE ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS. VOLUNTEEROMAHA EXPRESSLY DISCLAIMS ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR USE OR PURPOSE AND NON-INFRINGEMENT WITH RESPECT TO THE SERVICES. VOLUNTEEROMAHA MAKES NO WARRANTY THAT THE SERVICES OR SITE WILL MEET YOUR REQUIREMENTS, OR THAT THE SERVICES OR SITE WILL BE UNINTERRUPTED, TIMELY, SECURE, OR ERROR FREE; NOR DOES VOLUNTEEROMAHA MAKE ANY WARRANTY AS TO THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE SERVICES OR SITE OR AS TO THE ACCURACY OR RELIABILITY OF ANY INFORMATION OBTAINED THROUGH THE SERVICES OR SITE, OR THAT DEFECTS IN THE SERVICES OR SITE WILL BE CORRECTED. YOU UNDERSTAND AND AGREE THAT ANY MATERIAL AND/OR INFORMATION DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF THE SERVICES OR SITE IS DONE AT YOUR OWN DISCRETION AND RISK AND THAT YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SERVICES OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD OF SUCH MATERIAL AND/OR INFORMATION. VOLUNTEEROMAHA MAKES NO WARRANTY REGARDING ANY DEALINGS WITH OR TRANSACTIONS ENTERED INTO WITH ANY OTHER PARTIES THROUGH THE SERVICES OR SITE. THE ENTIRE RISK AS TO SATISFACTORY QUALITY, PERFORMANCE, ACCURACY, EFFORT AND RESULTS TO BE OBTAINED THROUGH THE USE OF THE SITE OR THE SERVICES IS WITH YOU. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM VOLUNTEEROMAHA OR THROUGH THE SERVICES SHALL CREATE ANY WARRANTY NOT EXPRESSLY MADE HEREIN.
<p>14. LIMITATION OF LIABILITY; RELEASE</br>
Limitation on Liability. YOU UNDERSTAND THAT TO THE EXTENT PERMITTED UNDER APPLICABLE LAW, IN NO EVENT WILL VOLUNTEEROMAHA OR ITS OFFICERS, EMPLOYEES, DIRECTORS, PARENTS, SUBSIDIARIES, AFFILIATES, AGENTS OR LICENSORS BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL OR EXEMPLARY DAMAGES, INCLUDING BUT NOT LIMITED TO, DAMAGES FOR LOSS OF REVENUES, PROFITS, GOODWILL, USE, DATA OR OTHER INTANGIBLE LOSSES (EVEN IF SUCH PARTIES WERE ADVISED OF, KNEW OF OR SHOULD HAVE KNOWN OF THE POSSIBILITY OF SUCH DAMAGES, AND NOTWITHSTANDING THE FAILURE OF ESSENTIAL PURPOSE OF ANY LIMITED REMEDY), ARISING OUT OF OR RELATED TO YOUR USE OF THE SITE OR THE SERVICES, REGARDLESS OF WHETHER SUCH DAMAGES ARE BASED ON CONTRACT, TORT (INCLUDING NEGLIGENCE AND STRICT LIABILITY), WARRANTY, STATUTE OR OTHERWISE. IF YOU ARE DISSATISFIED WITH ANY PORTION OF THIS SITE, YOUR SOLE AND EXCLUSIVE REMEDY IS TO DISCONTINUE USE OF THE SITE. </p>
<p>15. EXCLUSIONS AND LIMITATIONS</br>
Some jurisdictions do not allow the exclusion of certain warranties or the limitation or exclusion of liability for incidental or consequential damages. Accordingly, some of the above limitations and disclaimers may not apply to you. To the extent that we may not, as a matter of applicable law, disclaim any implied warranty or limit its liabilities, the scope and duration of such warranty and the extent of our liability shall be the minimum permitted under such applicable law. </p>
<p>16. INDEMNIFICATION</br>
You agree to indemnify, defend and hold harmless VolunteerOmaha, its parents, subsidiaries, affiliates, officers, directors, co-branders and other partners (including third-party partners to whom VolunteerOmaha may provide Your Content ("Third Parties")), employees, consultants and agents, from and against any and all claims, liabilities, damages, losses, costs, expenses, fees (including reasonable attorneys' fees and court costs) that VolunteerOmaha or Third Parties may incur as a result of or arising from (1) Your Content and any information you (or anyone accessing the Services using your password) submit, post or transmit through the Services, (2) your (or access to the Services as you) violation of these Terms or applicable law, (3) your (or anyone using your account's) violation of any rights of any other person or entity, or (4) any information or content we collect from third parties through the Site or Service at your request, or (5) any viruses, trojan horses, worms, time bombs, cancelbots, spyware or other similar harmful or deleterious programming routines input by you into the Services. </p>
<p>17. TRADEMARKS</br>
Certain of the names, logos, and other materials displayed in the Services constitute trademarks, tradenames, service marks or logos ("Marks") of us or other entities. You are not authorized to use any such Marks. Ownership of all such Marks and the goodwill associated therewith remains with us or those other entities. </p>
<p>18. COPYRIGHTS; RESTRICTIONS ON USE</br>
The content made available to you through the Services, other than Content and Your Content, including without limitation, text, databases, software, code, music, sound, photos, and graphics ("Our Content"), is (1) copyrighted by VolunteerOmaha and/or its licensors under United States and international copyright laws, (2) subject to other intellectual property and proprietary rights and laws, and (3) owned by VolunteerOmaha or its licensors. Our Content, and Content, may not be copied, modified, reproduced, republished, posted, transmitted, sold, offered for sale, publicly performed, publicly displayed, or redistributed in any way without our prior written permission and the prior written permission of our applicable licensors, with the sole exception that one copy may be downloaded onto a single computer for (a) your personal, noncommercial use if you are a volunteer or (b) your archival purposes, if you are a nonprofit or public service organization. You must abide by all copyright notices, information, or restrictions contained in or attached to any of Content. </p>
<p>19. MISCELLANEOUS</br>
The Terms constitute the entire and exclusive and final statement of the agreement between you and us with respect to the subject matter hereof, and govern your use of the Services, superseding any prior agreements or negotiations between you and us with respect to the subject matter hereof. The Terms and the relationship between you and VolunteerOmaha shall be governed by the laws of the State of California, without giving effect to any choice of laws or principles that would require the application of the laws of a different country or state. Any legal action, suit or proceeding arising out of or relating to the Terms, or your use of, the Services must be instituted exclusively in the federal or state courts located in San Francisco County, California and in no other jurisdiction. You further consent to personal jurisdiction and venue in, and agree to service of process issued or authorized by, any such court. Our failure to exercise or enforce any right or provision of the Terms shall not constitute a waiver of such right or provision. If any provision of the Terms is found by a court of competent jurisdiction to be invalid, the parties nevertheless agree that the court should endeavor to give effect to the parties' intentions as reflected in the provision, and that the other provisions of the Terms remain in full force and effect. You agree that regardless of any statute or law to the contrary, any claim or cause of action arising out of or related to use of the Services or the Terms must be filed within one (1) year after such claim or cause of action arose or be forever barred. The section titles in the Terms are for convenience only and have no legal or contractual effect. This Agreement cannot be transferred or assigned by you without VolunteerOmaha's prior written consent. The terms of this Agreement can only be modified as set forth in Section 3 or upon VolunteerOmaha's written agreement. </p>
<p>20. SURVIVAL</br>
The terms of Sections 5 through 21 as well as any other limitations on liability explicitly set forth herein shall survive the expiration or earlier termination of the Terms for any reason. Our (and our licensors') proprietary rights (including any and all Intellectual Property Rights) in and to Our Content and the Services shall survive the expiration or earlier termination of the Terms for any reason. </p>
<p>21. VIOLATIONS</br>
Please report any violations of the Terms to volunteeromaha@gmail.com
Effective Date: May 06, 2014</p>
<p>22. PRIVACY POLICY</p>
<p>A. OUR COMMITMENT TO PRIVACY</br>
Your privacy is important to us. Our ongoing commitment to the protection of your privacy is essential to maintaining the relationship of trust that exists between VolunteerOmaha and all of our users, whether they be a nonprofit or other volunteer organization seeking volunteers (each, an "Agency"), volunteers, volunteers with a personalized account. This privacy policy (the "Privacy Policy") is intended to help you understand our online information security practices. </p>
<p>B.THE INFORMATION WE COLLECT</br>
You may have accessed VolunteerOmaha directly by visiting our Web site, the home page of which is located at www.volunteeromaha.com, or through the Web site of one of our third-party partners with whom we have teamed to provide volunteering services, such as (a) your employer / school; (b) a VolunteerOmaha co-branding partner; or (c) a corporate partner (collectively, "Partners"). This notice applies to all information you submit to VolunteerOmaha through the VolunteerOmaha Web site. Please note that we cannot be responsible for the information you submit directly to third parties, including our Partners, who may have their own posted policies regarding the collection and use of your information. We urge you to review the policies of our Partners through whom you may access our services. </p>
<p>The types of information including without limitation, personal information ("Information") we may collect are: </p>
<p>For volunteers without a personal VolunteerOmaha account who have accessed VolunteerOmaha through www.volunteeromaha.com or a Partner's Web site: </br> ◾First and Last Name</br>
◾Email address</br>
◾Telephone number</br>
◾Address, City and State (optional) </br>
◾Zip Code</br>
◾Comments about volunteer opportunity (optional) </br>
◾Other categories of information required or requested by an Agency to register for a particular volunteer opportunity. </p>

<p>For volunteers with a personal VolunteerOmaha account who have accessed VolunteerOmaha through www.volunteeromaha.com or a Partner's Web site: </br>◾First and Last Name</br>
◾Email address</br>
◾Telephone number</br>
◾Address, City and State (optional) </br>
◾Zip Code</br>
◾Comments about volunteer opportunity (optional) </br>
◾Username and Password</br>
◾Customized email preferences (optional) </br>
◾Feedback and comments</br>
◾Other categories of information required or requested by an Agency to register for a particular volunteer opportunity. </p>

<p>For volunteers with a personal VolunteerOmaha account who have accessed VolunteerOmaha through a Partner's Web site where "Hours" (a tool for individuals to record their volunteer hours) and/or "Volunteer Opportunities" (a registration and response tool for volunteering events) are enabled: </br>◾First and Last Name</br>
◾Email address</br>
◾Telephone number</br>
◾Home Address, City and State (optional) </br>
◾Home Zip Code</br>
◾Employee Information chosen by a corporate Partner, including without limitation Employee ID; Employee Position Information (Status, Title, Level, Business Unit, Division, Location, Department, Immediate Supervisor); Employee Office Information (Office, Mail Code/Mail Stop, Address, City, State, Zip Code, Telephone Number) </br>
◾Information Regarding the Agency that Received Your Services - Agency Name; Address; City; State; Telephone Number; Fax; Web site Address; Description of Services; Mission Statement; Tax ID/EIN </br>
◾Additional Information Regarding Agencies - Contact Information (Contact Title, First and Last Name, Telephone Number, Email); </br>
◾Opportunity Information (Type, Description, Duration) (optional) </br>
◾Volunteer Event Information - Accomplishments; Skills Used; Paid Time Off; Dollars for Doers; Team Grant Name; Team Grant Beneficiary; Number of Clients Served Under Median Income; Role in Activity (optional) </br>
◾Comments about opportunity (optional) </br>
◾Referral history</br>
◾Customized email preferences (optional) </br>
◾Resume (optional) </br>
◾Feedback and comments</br>
◾Other categories of information required or requested by an Agency to register for a particular volunteer opportunity. </p>

<p>For Nonprofit Organizations: </br>◾Administrator Information - First and Last Name; Email; Telephone Number; Zip Code; Username and Password. Address; City; State (optional)
◾Agency Information - Agency Name; Contact Information (Contact Title, First and Last Name, Telephone Number, Address, City, State, Zip Code, Email); Description Of Services; Mission Statement; Tax ID/EIN; Affiliations; Volunteer Type Category. Web site Address; Fax (optional). </br>
◾Volunteer Opportunity Information - Opportunity Title; Contact Email; Description; Volunteer Type; Location Information (either Street Location or "Virtual" Designation). Required Skills; Date; Time; Commitment Information; Volunteer Age; Group Size (optional). </br>
◾Feedback and comments</p>

<p>C. USER CONSENT</br>
By submitting Information through our Web site, you agree to the terms of this Privacy Policy and you expressly consent to the processing of your Information according to this Privacy Policy and you agree to the VolunteerOmaha Terms of Service located in Sections 1-21 (the "Terms of Service").</p>

<p>Your Information may be processed by us in the country where it was collected as well as other countries (including the United States) where laws regarding processing of Information may be less stringent than the laws in your country. </p>

<p>D. HOW WE USE INFORMATION</br>
We do not sell, rent or trade our volunteer, administrator, nonprofit, or general newsletter email addresses to outside parties. We use the Information we collect about you to facilitate the volunteering process and to provide information to you about VolunteerOmaha and related industry topics. We use return email addresses to answer the email we receive. </p>

<p>Please be aware that, to the extent required to provide our services, we share your Information with volunteers, Agencies, or our Partners, as applicable. We also reserve the right to use your Information to send you e-mails regarding system downtime and/or changes to this Privacy Policy or the Terms of Service, and you are not permitted to opt out of receiving these e-mail messages. We will also use Information for the purpose you provide, for instance to sign you up for the Adopt-A-Zip-Code program. </p>

<p>Otherwise we use your Information in the following ways: 
For Newsletter Subscribers: </p>

<p>We may use our email lists for sending out our newsletter and other VolunteerOmaha outbound communications, such as product enhancements, tool upgrades, or membership news. </p>

</p>For volunteers without a personal VolunteerOmaha account who have accessed VolunteerOmaha through www.volunteeromaha.com or a Partner's Web site: </p>

<p>If you indicate to us that you are interested in a particular volunteer opportunity and provide us with your Information, either through www.volunteeromaha.com or a Partner's Web site, we will forward your Information to the Agency that is hosting that opportunity so that the Agency can contact you regarding your potential involvement, and, if the particular Agency (including an Agency that is a Partner) has a regional or national office or is closely affiliated with or a member of a related Agency (each, an "Affiliate"), then we may also share your Information with the applicable Affiliate. </p>

<p>To the extent that you have provided any Information to us through our Web site regarding volunteer opportunities associated with one of our Partners, we may share your Information and referral history with the applicable Partner. Each of our Partners has its own policies regarding the collection and use of personal information, and VolunteerOmaha is not responsible for their use of your Information. Furthermore, our Partners may collect additional information from you, independent of VolunteerOmaha.org, in connection with the volunteer services. </p>

<p>Additionally, for volunteers with a personal VolunteerOmaha account who have accessed VolunteerOmaha through www.volunteeromaha.com or a Partner's Web site: </p>

<p>If you indicate to us that you are interested in creating a personalized account, the information we gather from you will be used to permit you to: access the account, customize outbound email services, review your referral history and/or post a resume that can be sent as an attachment to inquiries you make using the VolunteerOmaha service. </p>

</p>For volunteers who have accessed VolunteerOmaha through a Partner's Web site where Hours Tracking and/or Special Event Manager are enabled: If you indicate to us that you are interested in a particular volunteer opportunity and provide us with your Information via your employer / school's intranet, we will forward your Information to the Agency, or Affiliate, that is hosting that opportunity so that the Agency can contact you regarding your potential involvement. </p>

<p>We share your Information with your employer / school so that your employer / school may log the number of hours you have volunteered during a specified period of time ("Hours"). In some instances, your employer / school may share your Information with third-party service providers to help your employer / school process data regarding your Hours. Your employer / school has its own policies regarding the use of your Information, and VolunteerOmaha is not responsible for your employer / school's use of your Information. Furthermore, your employer / school may collect additional information from you, independent of VolunteerOmaha.org, in connection with the volunteer services. </p>

<p>E. FOR AGENCIES: </br>
If you submit Information to us as an Agency, then, subject to the terms and conditions as a nonprofit member of VolunteerOmaha, your Information (excluding your EIN number) will be accessible by anyone who accesses VolunteerOmaha. In addition, we may share your Information, including your EIN number, with selected Partners in order to verify your Agency's identity and tax status. </p>

<p>Agencies who receive email addresses from potential volunteer signups are strongly encouraged to adopt privacy standards similar to those of VolunteerOmaha. Each such Agency, however, has its own policies regarding collection and use of personal information and we are not responsible for their use of your Information. Inappropriate use of personal information received from VolunteerOmaha may jeopardize nonprofit membership with VolunteerOmaha. VolunteerOmaha reserves the right to determine, in its discretion, what constitutes inappropriate use of this information. For more about an Agency's policy, please contact them directly using the contact information posted for that Agency on our Web site. </p>

<p>In all cases, we use information provided by you for the purposes you provided the information. For instance, if you e-mail us with questions, we may use the information in your e-mail to answer the question. If you provide comments or feedback, we may publicly post those comments or feedback. </p>

<p>If you submit Information to us as an Agency, then, subject to the terms and conditions as a nonprofit member of VolunteerOmaha, your Information (excluding your EIN number) will be accessible by anyone who accesses VolunteerOmaha. In addition, we may share your Information, including your EIN number, with selected Partners in order to verify your Agency's identity and tax status. </p>

<p>Please note that any feedback or comments provided by you on the Web site may be generally accessibly by any visitor to the Web site. Therefore, please take care when posting feedback or comments to the site, as you will forfeit the privacy of that information. </p>

<p>F. CHILDREN'S PRIVACY</br>
We welcome Volunteers of all ages, including children under the age of thirteen. Due to our status as a non-profit organization, we are not required to comply with the Children's Online Privacy Protection Act (COPPA). However, we strongly encourage our volunteers aged thirteen and under to use our services only with parental consent and supervision. </p>

<p>G. COOKIES</br>
Cookies are tiny data files that Web sites commonly write to your hard drive when you visit them so that they can remember you when you visit. A cookie file contains information that can identify you anonymously and maintain your account's privacy. Our site uses cookies to maintain a user's identity between sessions so that the site can be personalized based on user preferences or a user's history. You can set your Web browser to prompt you before you accept a cookie, accept cookies automatically or reject all cookies.Â  However, if you choose not to accept cookies from this Web site, then you may not be able to access and use all or part of this Web site or benefit from the information and services which it offers. </p>

<p>H. THIRD-PARTY ACCESS AND USE</br>
Occasionally, we or our Partners hire third-party service providers to help provide or improve the services we offer you. Sometimes it is necessary for these providers to have access to the Information we collect about you. In those cases, we take reasonable steps to ensure that these providers do not use or otherwise disclose any Information we collect about you except for the purpose of fulfilling their service obligations to us and our Partners. We may share your Information with third-party service providers in connection with the following: 
Some of our Partners will match your volunteer hours contribution with a donation. In such cases, third-party service providers may be hired to help calculate the Partner's donation amount.
Our Partners may also hire third-party service providers to help coordinate volunteer events. We may share information with these third-party service providers in order to facilitate coordination of these events. </p>

<p>Information collected from Agencies may be shared with other websites, in order to promote volunteer events. </p>

<p>We share aggregate information about our users with certain third parties. This information shows user activity as a whole rather than on an individual basis; such aggregate information cannot be used to individually identify you. We use aggregated information we collect about users to continue to improve our service for you. </p>

<p>In the unlikely event that VolunteerOmaha undergoes a sale or transfer of all or substantially all of its assets, the acquiring entity will be subject to this Privacy Policy in its use of your personally identifiable Information. In addition, in the further unlikely event that VolunteerOmaha is adjudicated bankrupt or insolvent (a) there will be no further use or disclosure of your personally identifiable Information by VolunteerOmaha and (b) your personally identifiable Information will be destroyed. In addition, there will be no use or disclosure of your personally identifiable Information by any entity that acquires assets of VolunteerOmaha pursuant to such bankruptcy or insolvency proceedings. </p>

<p>Due to factors beyond our control, however, we cannot fully ensure that your Information will not be disclosed to third parties. For example, we may be legally obligated to disclose Information to the government or third parties under certain circumstances, or third parties may circumvent our security measures to unlawfully intercept or access your Personal Information. </p>

<p>I. WEB BEACONS</br>
Our pages on www.volunteeromaha.com may contain files called web beacons that we use for research and evaluation purposes. Information recorded through these beacons is used to report anonymous information about the results of pro-bono media campaigns donated by Yahoo!. Aggregate information may include demographic and usage information. You may choose to opt-out of this research by visiting: http://info.yahoo.com/privacy/us/yahoo/opt_out/targeting/details.html. </p>

<p>J. LINKS</br>
This site contains links to other sites. VolunteerOmaha is not responsible for the privacy practices or the content of such Web sites. </p>

<p>K. HOW YOU CAN REVIEW OR CORRECT YOUR INFORMATION</br>
If you are a nonprofit member or volunteer with a personal VolunteerOmaha account (either through www.volunteeromaha.com or a Partner's Web site) you may review and make changes to all of your Information that we collect and maintain online by simply inputting your username and password where indicated on the Web site. </p>

<p>If you are a volunteer with a personal VolunteerOmaha account, once you login in, you may make any changes or correct factual errors in your account by changing the information on your login page. This option is available 24 hours a day to better safeguard your Information, subject to downtime for standard maintenance and support. You do not need to contact us to access your record or to make any changes. If you have problems changing your Information, please contact Community Services at support@volunteeromaha.com. </p>

<p>L. FOR NONPROFIT OR OTHER VOLUNTEER AGENCIES</br>
If you are an Agency administrator, you may make any changes or correct factual errors in your administrator, organization and opportunity information 24 hours a day. We use this procedure to better safeguard your Information. You do not need to contact us to access your record or to make any changes. If you have problems changing your Agency's Information, please contact Community Services at support@volunteeromaha.com. </p>

<p>If you are a nonprofit member or volunteer with an account and would like to have your Information deleted from the site, you may do so by contacting Community Services at support@volunteeromaha.com. </p>

<p>M. OPTING-OUT OF NEWSLETTERS & COMMUNICATIONS</br>
Subscriptions to VolunteerOmaha newsletters are optional and VolunteerOmaha allows Agencies, volunteers, subscribers or other users to unsubscribe from newsletters at any time. In each newsletter we provide instructions regarding how to opt-out from receiving future newsletter mailings. You can also email us at volunteeromaha@gmail.com to remove your name from our newsletter subscription data base and ensure that you will cease receiving future newsletters from us. </p>

<p>We may also use our email lists for sending out other VolunteerOmaha outbound communications such as product enhancements, tool upgrades, or membership news. Registered members are required to receive these communications. </p>

<p>N. OUR COMMITMENT TO DATA SECURITY</br>
To prevent unauthorized access, maintain data accuracy, and ensure the correct use of Information, we have put in place reasonable physical, electronic, and managerial procedures to safeguard and secure the Information we collect online. </p>

<p>O. CHANGES TO POLICY</br>
As part of the Terms of Service, this Privacy Policy is subject to occasional amendment, in accordance with the terms of the Terms of Service. </p>

<p>P. HOW TO CONTACT US</br>
We appreciate your questions or comments about this privacy statement, the practices of this Web site, or your dealings with VolunteerOmaha. Please send email to: volunteeromaha@gmail.com</p>

<p>Effective Date: May 06, 2014</p>
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>