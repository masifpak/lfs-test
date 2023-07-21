<script type="text/javascript">
    $(function () {
        var page = $("html, body");

        $('#content_box').find('a').click(function(){
            var $href = $(this).attr('href');
            var $anchor = $('#'+$href).offset();

            page.on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function(){
                page.stop();
            });
            page.animate({ scrollTop: $anchor.top - 60 }, 'slow', function(){
                page.off("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove");
            });
            return false;
        });
    });

    // When your page loads
    $(document).ready(function() {
        $('#search-button').hide();
    });

</script>
<div id="content_box" class="content_box">
    <div class="row center-block content_center">
        <div class="col-sm-4 hidden-xs">
            <div class="fixed col-sm-4 content_left_box">
                <a href="terms"><div class="left_menu_item">Terms & Conditions</div></a>
                <a href="privacy"><div class="left_menu_item">Privacy Policy</div></a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 center-block content_right_box">
            <span id="terms" class="bold_title">Terms & Conditions of Use</span><br><br>

            These Terms & Conditions of Use ("Terms & Conditions of Use" or "Terms") regulate how eddress s.a.l ("eddress" and/or "we" and/or "us") provides geolocalisation and relocalisation services ("Services").<br><br>
            The Services are available on or through the www.eddress.co website and/or App ("Site" and/or "App").<br><br>
            The Site and App are produced and operated by eddress s.a.l, a Lebanon based company.<br><br>

            By accessing the eddress Site and/or App and using the eddress Services, you agree to, and follow, the terms and conditions set forth in these Terms. Use of the eddress Services on third party and/or partner sites is subject to compliance with these Terms and any end user license agreement that might accompany an eddress service. The provision of the Services is provided free of charge but subject to these Terms. If you do not wish to be bound by the Terms, you are not authorized to use the Site and/or App.<br><br>
            <span class="bold_title_small">Use of Site and App</span><br>
            <ol>
                <li>Access and use of the eddress Services requires the registration or the creation of an account with eddress.  All registration information you submit must be accurate and updated. You are responsible for all use on your account, including unauthorized use by any third party- please be careful to guard the security of your password and eddress alphanumerical code.  We reserve the right to immediately terminate or restrict your account or your use of the eddress Services at any time, without notice or liability, if eddress determines in its sole discretion that you have breached these Terms, violated any law, rule, or regulation, engaged in other inappropriate conduct, or for any other business reason.</li>
                <li>In order to participate in certain eddress Services, you may be notified that it is necessary to download software or other materials or agree to additional terms and conditions. Unless otherwise provided by these additional terms and conditions, they are hereby incorporated into these Terms.</li>
                <li>You must be of legal age in your country of origin to use the Site and/or App, otherwise, do not access or use the Site and/or App.</li>
                <li>In respect of any user identification code, password or any other piece of information provided as part of our security procedures, you must treat such information as confidential, and you must not disclose it to any third party. We have the right to disable any user identification code or password, whether chosen by you or allocated by us, at any time, if in our opinion you have failed to comply with any of the provisions of these Terms.</li>
                <li>Access to our Site and the App is permitted on a temporary basis, and we reserve the right to withdraw or amend the Services we provide on our Site or in connection with the App without notice. We will not be liable if for any reason our site or the App is unavailable at any time or for any period.</li>
                <li>From time to time, we may restrict access to some parts of our site, or our entire Site or the App or some parts of the App, to users who have registered with us.</li>
                <li>The material displayed on our Site or in connection with the App is provided without any guarantees, conditions or warranties as to its accuracy. We may at any time alter the content of our Site or the App without communicating the alteration to you.</li>
                <li>Where our Site or App contain links to other sites, apps and resources provided by third parties, these links are provided for your information only. We have no control over the contents of those sites or resources, or how they handle any links we provide to them, and we accept no responsibility for them or for any loss or damage that may arise from your use of them.</li>
                <li>Using our Site may result in cookies being set and by continuing to browse the site, you are agreeing to our use of cookies.</li>
                <li>You acknowledge that eddress may change, suspend, or discontinue — temporarily or permanently — some or all of the Services in its sole discretion. You also agree that eddress will not be liable to you for any modification, suspension, or discontinuance of the Services.</li>
                <li>You are responsible for using compatible equipment and any internet or other costs you may incur to access eddress Services.</li>
                <li>By using our Site or the App you are agreeing to be bound by the Terms of Use of Google Maps API. For details please click here http://developers.google.com/maps/terms</li>
                <li>You may only cancel a contract to use the App to the extent permitted by the relevant App Stores' terms and conditions.</li>
                <li>We give no warranty for the quality or reliability of the services provided by any App Store.</li>
                <li>We shall not be liable to you for any loss of connection to the internet from your Mobile Device or malfunction or failure of the in-built GPS in your Mobile Device, which prevents you accessing the App.</li>
                <li>IN NO EVENT SHALL EDDRESS OR ITS AFFILIATES, SUCCESSORS, AND ASSIGNS, AND EACH OF THEIR RESPECTIVE INVESTORS, DIRECTORS, OFFICERS, EMPLOYEES, AGENTS, AND SUPPLIERS (COLLECTIVELY, THE "EDDRESS PARTIES"), BE LIABLE FOR ANY DIRECT, INDIRECT OR OTHER DAMAGES, INCLUDING LOSS OF PROFITS, ARISING OUT OF OR IN ANY WAY RELATED TO THE USE OF THE EDDRESS SERVICES.  YOU AGREE TO DEFEND, INDEMNIFY, AND HOLD HARMLESS THE EDDRESS PARTIES FROM AND AGAINST ANY AND ALL LIABILITIES, CLAIMS, DAMAGES, EXPENSES (INCLUDING ATTORNEYS' FEES AND COSTS), AND OTHER LOSSES ARISING OUT OF OR IN ANY WAY RELATED TO YOUR BREACH OR ALLEGED BREACH OF THESE TERMS OR YOUR USE OF THE EDDRESS SERVICES (INCLUDING YOUR USE OF THE CONTENT).</li>
            </ol>
            <span class="bold_title_small">Intellectual Property</span><br>
            <ol>
                <li>You acknowledge that all Intellectual Property belongs to us or our licensors, that rights in the Intellectual Property are licensed for use not ownership to you, and that you have no rights in, or to, the Intellectual Property other than the right to use the Intellectual Property in accordance with these Terms.</li>
                <li>The Intellectual Property shall remain our property, but in consideration of you agreeing to abide by the terms of these Terms, we shall grant you a non-assignable, non-transferable, non-exclusive and revocable license to use the Intellectual Property for the sole purpose of using the Services as permitted by these Terms and any App Store rules. Such license is conditional on you having paid all necessary charges to us to use such Services and on you keeping intact all copyright and other proprietary notices. Any copying, re-utilization, extraction, reproduction or redistribution of the content of the Intellectual Property is expressly prohibited, and this shall include but not be limited to copying or reproduction of the content of the Intellectual Property to any other server or location for further reproduction or redistribution.</li>
                <li>You may download a copy of the App onto your device to view, use and display the App on the device to access the Services for your personal and non-commercial purposes only. You are not permitted or licensed to use the App or the Services for any other purpose and nothing in these Terms shall be deemed to grant you any right, title or interest in the App or the Services.</li>
                <li>You have no right, and shall not permit any third party to copy, adapt, reverse engineer, decompile, disassemble, modify or reproduce the App or the Services in any way without obtaining our express prior written consent in each instance or to the extent required by law.</li>
                <li>You may use our logo, content and trademarks acknowledging that this use is under license from us, and that your use will not cause any confusion as to their ownership.</li>
                <li>Except as expressly stated herein, these Terms do not grant you any rights to, or in, patents, copyrights, database rights, trade names, trademarks (whether registered or unregistered), or any other rights or licenses in respect of the Intellectual Property, our Site, the App and the material published on it.</li>
                <li>Our technology for the operation of our Site and the App is subject to patent protection.</li>
            </ol>
            <span class="bold_title_small">Photo, Video and Other Content Uploading</span><br>
            <ol>
                <li>By uploading any photograph, video or other content to the Site and/or App you represent and warrant that:</li>
                <ol>
                    <li>you are the sole author and owner of the intellectual property rights thereto and no use by us shall cause us to infringe the rights of any third party;</li>
                    <li>all "moral rights" that you may have in such uploaded content, for example, the right to be named as the creator of your photograph, have been voluntarily waived by you;</li>
                    <li>photographs/videos are not obscene, defamatory, libelous or otherwise unlawful, or likely to damage our reputation; and</li>
                    <li>use of the content you supply does not violate these Terms.</li>
                </ol>
                <li>We reserve the right in our absolute discretion to withdraw or suspend the provision of the content upload service to you and remove any photographs, videos or other content you have uploaded without prior warning if you are in our sole opinion in breach of any of the provisions herein. You agree that you will compensate us for any costs, loss, or damage of any kind incurred by us as a result of any breach by you.</li>
                <li>By uploading any photograph, video or other content you are agreeing that we  may display the content on our Site, App and that when displayed we may include your name as submitted by you in the uploading process. We are not responsible for any unauthorized use of your photograph, video or other content by visitors.</li>
                <li>By uploading any photograph, video or other content you are agreeing that we may at any time edit, publish and use your content in any and all media (now or later developed) for promotion, news and information purposes and as part of our goods and services, without any payment to you. You agree to sign any necessary documentation or take any action that may reasonably be required for us and our group and affiliate companies to make use of the rights you grant above.</li>
                <li>We do not guarantee that you will have recourse to edit or delete any photographs, videos or other content that you have uploaded.</li>
            </ol>
            <span class="bold_title_small">Liability</span><br>

            <ol>
                <li>We shall not be liable to you for any failure, however caused, to find any location, to which eddress apply or for any consequence of the failure to find such location.</li>
                <li>If we fail to comply with these Terms, we are responsible for loss or damage you suffer that is a foreseeable result of our breach of these Terms or our negligence, but we are not responsible for any loss or damage that is not foreseeable.</li>
                <li>Unless otherwise agreed in writing, we only supply the Services for domestic, private and commercial use. Where the Services are used for commercial or business use, we have no liability to you for any loss of profit, loss of business, business interruption, or loss of business opportunity.</li>
                <li>Where we supply to you coordinates for a location as part of our Services, for use with satellite navigation devices, we shall not be liable to you for any inaccuracies in the coordinates supplied nor for any consequence, however arising, of the provision of inaccurate coordinates.</li>
            </ol>
            <span class="bold_title_small">Force Majeure</span><br>
            We will not be liable or responsible for any failure to perform, or delay in performance of, any of our obligations under these Terms that is caused by Force Majeure. Force Majeure means any act or event beyond our reasonable control, including without limitation accident to or breakdown of delivery vehicle, strikes, lock-outs or other industrial action by third parties, civil commotion, riot, invasion, terrorist attack or threat of terrorist attack, war (whether declared or not) or threat or preparation for war, fire, explosion, storm, flood, earthquake, subsidence, epidemic or other natural disaster, or failure of public or private telecommunications networks or impossibility of the use of railways, shipping, aircraft, motor transport or other means of public or private transport.<br><br>
            <span class="bold_title_small">General Terms</span><br>
            <ol>
                <li>We may transfer our rights and obligations under an agreement or another organization, but this will not affect your rights or our obligations under these Terms.</li>
                <li>You may only transfer your rights or your obligations under these Terms to another person if we agree in writing.</li>
                <li>Each of the paragraphs of these Terms operates separately. If any court or relevant authority decides that any of them are unlawful or unenforceable, the remaining paragraphs will remain in full force and effect.</li>
                <li>If we do not enforce our rights against you, or if we delay in doing so, that will not mean that we have waived our rights against you and will not mean that you do not have to comply with those obligations. If we do waive a default by you, we will only do so in writing, and that will not mean that we will automatically waive any later default by you.</li>
                <li>These Terms are governed by, and construed in accordance with, the laws of Lebanon without giving effect to principles of conflicts of law.  In the event of any dispute arising out of or in connection with the Terms, the matter is to be submitted to settlement proceedings under the Lebanese Mediation Center (LMC) of the Chamber of Commerce, Industry and Agriculture of Beirut and Mount Lebanon (CCIA-BML) Mediation Procedure. The mediator will be appointed by the LMC. If the dispute has not been settled within 45 days following the filing of a request for mediation, such dispute shall be finally settled under the Rules of Arbitration of the Lebanese Arbitration Center of the Chamber of Commerce, Industry and Agriculture of Beirut and Mount Lebanon (CCIA-BML)  by one arbitrator appointed in accordance with the said Rules of Arbitration. Arbitration will be conducted in English in Beirut.</li>
                <li>These Terms, including eddress's Privacy Policy and any end user license agreement that might accompany the Services, constitute the entire legal agreement between you and eddress and govern your use of the Services. If any part, term or provisions of these Terms is found to be illegal or unenforceable by the court, the remainder of these Terms shall continue to govern our provision of the Services to you.</li>
            </ol>
            <span class="bold_title_small">Definitions</span><br>
            "App" means any application created by us for the use of any of our Services;
            "App Store" means the app store operated and owned by Apple Inc or by Google Play or any other store for selling apps and protected by trademarks;
            "Intellectual Property" means all intellectual property rights in our Site, the Services, our trademarks, our content,
            "Mobile Device" means a mobile phone or other mobile communication device which is compatible with the App;
            "Trade Marks" means all registered and unregistered trademarks and designs of eddress.<br><br>

            <span class="bold_title_small">Modification</span><br>
            eddress may amend these Terms at any time by posting the amended Terms of Use on the Site at www.eddress.co and App. You agree and have the obligation to review these Terms regularly to be aware of any such modifications. Your continued use of the website shall be deemed to be your conclusive acceptance of any modified version of the Terms.<br><br><br>

            <span id="privacy" class="bold_title">Privacy Policy</span><br><br>
            This privacy policy regulates the collection and processing of your personal data ("personal data") and other aggregate information by eddress s.a.l (“eddress” and/or “us” and/or “we”) through our website at www.eddress.co and/or App (“Site” and/or “App”).<br><br>
            Your use of the eddress Site and/or App is subject to our Terms of Use. By using the Site and/or App, you consent to the collection and processing of your personal data and other aggregate information by eddress as described herein. If you do not wish to be bound by this Privacy Policy, you are not authorized to use the Site and/or App.<br><br>

            <span class="bold_title_small">Legal age</span><br>
            eddress does not knowingly solicit and/or collect personal data from anyone under the legal age of their country of origin. If you are under the legal age in your country of origin, you are not authorized to submit any personal data to us.<br><br>

            <span class="bold_title_small">Personal Data and Information Collected</span><br>
            If you voluntarily choose to visit and/or access and use the Site and/or App and/or send an electronic communication to us, some of the information you provide us, and which we may retain, may contain personal data such as but not limited to your name, address and email address.  You are not obligated to provide any personal data to us and your decision to provide us with such information is in your sole discretion.<br><br>
            We may also collect anonymous and aggregate information from you about details of your visits to our Site and App, the resources that you access, and how you access them. This may include information about the Mobile Device you are using, how your Mobile Device interacts with our Services, your search queries and information about your actual location at the time of using our Services, your preferences in navigating the Site and/or App by using cookies and other technologies. If you do not want to be identified by us, please set your browser accordingly.<br><br>

            <span class="bold_title_small">Personal Data Storing and Processing</span><br>
            The data that we collect from you is transferred to, and stored with the Google App Engine. It is processed by staff operating in Lebanon who work for us as well as in or out of Lebanon for one of collaborating third parties based on your consent. By submitting your personal data to us, via our site or otherwise, you agree to this transfer, storing or processing. We will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this privacy policy.<br><br>
            Unfortunately, the transmission of information via the internet is not completely secure. Although we will do our best to protect your personal data, we cannot guarantee the security of your data transmitted to our site; any transmission is at your own risk. Once we have received your information, we will use strict procedures and security features to try to prevent unauthorized access.<br><br>

            <span class="bold_title_small">Use of personal data and aggregate information</span><br>
            eddress collects and processes personal data to accurately respond to your requests and needs. We may also use your personal data to inform you of additional services which may be of interest to you and ask you for information about your interests in an effort to deliver to you the best possible Site and/or App as well as service user experience.<br><br>
            eddress will not use or share your personal data otherwise or with any other third parties unless upon your consent. We may however release your personal data in good faith (i) if such release is necessary to comply with the law, (ii) to protect our rights and/or yours from fraudulent, abusive, or unlawful use of the Site and/or App, or (iii) if we reasonably believe that a danger to any person requires disclosure of such personal data.<br><br>
            eddress may also use aggregate data which is information that we collect on an individualized basis (for example, statistics) but subsequently use in a way that combines information about individuals together so that no individual is identifiable. We may use aggregate data for a variety of purposes, including for suggesting works to watch, research or analysis, administration and advertising purposes.<br><br>
            We may share aggregated and anonymized information publicly and with our partners for statistical purposes or better implementation of our services with our partners.<br><br>

            <span class="bold_title_small">Third Party Services and limitation of liability</span><br>
            Our Site or App may contain links to other websites, apps and resources provided by third parties and partners as well as services which are interoperable with third party and/or partners’ services. If you use any third party or partner service which is interoperable with eddress or follow a link from our site or app to any third party or partner service, please note that (1) you consent that we share your personal date with the concerned third party and/or party for the service provisions and (2) they have their own privacy policies and that we do not accept any responsibility or liability for these policies- your consent is therefore implied. Please check these policies before you submit any personal data to these services provided by third parties.<br><br>
            eddress takes all reasonable efforts to secure your personal data loss, misuse, unauthorized access and destruction while under our control. However, we cannot guarantee that such information will not be lost, disclosed or accessed by accidental circumstances or by the unauthorized acts of third parties and we may not be held liable for it.<br><br>
            The Site and/or App may indeed provide links to third party websites. Because we have no control over such websites, you acknowledge and agree that we do not endorse such websites and are not responsible or liable, directly or indirectly. Your use of any website linked to from the website is subject to their policies and procedures, and you acknowledge and agree that your use of all such websites is subject to such policies and procedures and not to the eddress Terms & Conditions of Use and Privacy Policy.<br><br>
            We use Google Maps APIs and this privacy policy incorporates the Google Privacy Policy ( http://www.google.com/privacy.html) as amended by Google from time to time.<br><br>

            <span class="bold_title_small">Access to and Deletion of Personal Data</span><br>
            If you wish to remove, correct, access personal data that you have submitted to eddress, do not wish to receive any communication from eddress and/or you have questions or concerns about any of our personal data collection or handling practices, you may contact us by sending us an email at: admin@myeddress.com<br><br>
            eddress will make your account invisible for a year as of the date of notification of your wish to suspend use of your account on the Site and/or App. During this year, your personal data will be securely stored and you may access it if you reactivate your account. Upon expiry of this year duration, your account and personal data will be permanently deleted.<br><br>

            <span class="bold_title_small">Modification</span><br>
            We reserve the right to modify, at any time, our personal data collection and processing terms as well as the Privacy Policy. You agree and have the obligation to review the Privacy Policy periodically to remain informed of any such modifications. Therefore, it is important to check the effective date of the Privacy Policy posted at www.eddress.co each time you visit the Site and/or App to ensure you are familiar with the most updated policies.<br><br>


        </div>
    </div>
</div>