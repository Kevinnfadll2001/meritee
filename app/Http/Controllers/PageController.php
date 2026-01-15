<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function careers()
    {
        return view('pages.careers');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function services()
    {
        return view('pages.services');
    }

    // =======================
// NEWS DATA (ONE SOURCE)
// =======================
private function newsData()
{
    return [
        [
            'slug' => 'pioneers-contact-centers-2016-feb',
            'img' => 'blog1.jpeg',
            'date' => '15 Feb 2016',
            'title' => 'Call Center International Pioneers the Operation of Contact Centers in Lebanon',
            'content' => 'CCINTL announced today it has agreed to support a USA based financial services processing firm. Senior Marketing Consultant for CCI, Will Robertson stated that CCI will be creating appointments for use with focus on credit card processing offers to established businesses. CCI Founder and President, Jay Ajaltouni, said that the project was a step in the right direction. “Salespeople do their best work when they are not on the phones looking for their next appointment. That’s our job and we look forward to supporting this new project with a robust campaign designed to keep the sales team busy.”


It was also announced that Mr. Robertson will assist in locating new U.S. opportunities in 2016. Mr. Robertson brings 28 years of experience in the telecom industry from wireless, data, satellite, fiber optics and CLEC operations on a global scale.'
        ],
        [
            'slug' => 'pioneers-contact-centers-2016-jan',
            'img' => 'blog2.jpeg',
            'date' => '15 Jan 2016',
            'title' => 'Call Center International Pioneers the Operation of Contact Centers in Lebanon',
            'content' => 'CCINTL reported today that a staff expansion is under way in anticipation of new contracts being sought in the U.S.A. market. Founder and CEO Jay Ajaltouni said “We are excited to ramp up our call center staff to accommodate what we feel will be an increase in demand for our services due to new U.S. efforts to secure new service contracts.” It was also announced that Mr. Will Robertson will be brought on board as the company’s Senior Marketing Consultant as of Feb. 1, 2016. Mr. Robertson will operated from his headquarters in Orange County California and report to CEO Jay Ajaltouni.'
        ],
        [
            'slug' => 'pioneers-contact-centers-2015-dec',
            'img' => 'blog3.jpeg',
            'date' => '15 Dec 2015',
            'title' => 'Call Center International Pioneers the Operation of Contact Centers in Lebanon',
            'content' => 'CCINTL announced today the expansion of its second call center offices in the building of Developer’s Tower in the heart of the business district in Beirut, Lebanon. Founder and CEO Jay Ajaltouni said “Expansion is taking place at our company headquarters to extend our service capability, adding additional seats for our international call center operations. We look forward to hiring and training new staff members in the first quarter of 2016.”'
        ],
        [
            'slug' => 'telecom-power-inauguration',
            'img' => 'blog4.jpeg',
            'date' => '23 May 2014',
            'title' => 'The Ministers of Telecommunication and Power in Call Center Inauguration',
            'content' => 'The Minister of Telecommunications, Nicholas Sehnaoui, and the Minister of Power, Gebran Basil, inaugurated today a new contact center pertaining to Call Center International in Jdeideh.



The opening of new call centers had proliferated since the taking off of the sector in 2008, in the era of Minister Basil.



According to Minister Sehnaoui, this is a promising sector that could be beneficial to Lebanon and it’s economy, allowing the creation of new job opportunities.



Call Center International has signed a contract with French company SFR, a company with a leading role in the telecommunication sector with 20 million clients. A contract with a company of that scale puts Lebanon in the spotlight as a serious provider for call center services.'
        ],
        [
            'slug' => 'second-international-call-center',
            'img' => 'blog5.jpeg',
            'date' => '09 Feb 2013',
            'title' => 'Lebanon gets second international call center',
            'content' => 'Telecommunications Minister Nicolas Sehnaoui inaugurated Friday a second Call Center International branch in Jdeideh, a northern suburb of Beirut.'
        ],
        [
            'slug' => 'pioneers-contact-centers-2009-may-3',
            'img' => 'blog6.jpeg',
            'date' => '03 May 2009',
            'title' => 'Call Center International Pioneers the Operation of Contact Centers in Lebanon',
            'content' => 'Our entry into Lebanon represents a major new phase in the global call center market," was how the Chairman of Call Center International (CCI), Jay Hanna Ajaltouni described the level of operations made possible by an agreement reached with inContact.



The two companies have entered into an exclusive two-year contract to build and operate leading-edge contact centres in Lebanon. CCI is providing bandwidth, connectivity, staffing and management, with inContact making a substantial commitment in providing Automated Call Distribution (ACD), eLearning and Workforce Management solutions. Their contract gives CCI the exclusive rights to use the services of inContact within Lebanon.



US-based CCI has been awarded one of five licences to operate contact centres in Lebanon by the Lebanese Ministry of Telecommunications. Granting these licences is part of the Lebanese governments efforts to provide more jobs for the country s workforce, which is acknowledged to be well educated and highly skilled. Along with the licence, the Lebanese government has pledged to provide full support and encouragement of this new business.



CCI Chairman, Jay Hanna Ajaltouni brings over two decades of experience in telecommunications, including serving as CEO of three companies that he founded and continues to lead. Contact centre industry veterans with over a century of combined experience in establishing and operating contact centres have been recruited to fill out the balance of the executive management team.



"We have the objective of bringing new jobs to Lebanon as well as offering a state-of-the-art value proposition to our customers," said Ajaltouni.



Senior Corporate Advisor, Dr William Robertson, said: "We are planning a total of five contact centres in Lebanon to be provisioned over time and look forward to working with our technology partners and the Ministry of Telecommunications as well as the American Lebanese Chamber of Commerce in this process. One of our key focus areas includes the development of online distance education for schools, government agencies, and higher learning institutions.'
        ],
        [
            'slug' => 'pioneers-contact-centers-2009-may-2',
            'img' => 'blog7.jpeg',
            'date' => '02 May 2009',
            'title' => 'Call Center International Pioneers the Operation of Contact Centers in Lebanon',
            'content' => 'Our entry into Lebanon represents a major new phase in the global call center market was how the Chairman of Call Center International described the level of operations made possible by an agreement reached with inContact, Inc'
        ],
        [
            'slug' => 'pioneers-contact-centers-2009-may-1',
            'img' => 'blog8.jpeg',
            'date' => '01 May 2009',
            'title' => 'Call Center International Pioneers the Operation of Contact Centers in Lebanon',
            'content' => 'IRVINE, Calif., May 1 /PRNewswire/ -- "Our entry into Lebanon represents a major new phase in the global call center market," was how the Chairman of Call Center International (CCI) (www.CCIntl.cc) described the level of operations made possible by an agreement reached with inContact, Inc. (Nasdaq: SAAS) (www.inContact.com). The two companies have entered into an exclusive two-year contract to build and operate leading-edge contact centers in Lebanon. CCI is providing bandwidth, connectivity, staffing and management, with inContact making a substantial commitment in providing Automated Call Distribution (ACD), eLearning and Workforce Management solutions. Their contract gives CCI the exclusive rights to use the services of inContact within Lebanon.



Irvine CA-based CCI has been awarded one of five licenses to operate contact centers in Lebanon by the Lebanese Ministry of Telecommunications. Granting these licenses is part of the Lebanese government s efforts to provide more jobs for the countrys workforce, which is acknowledged to be well educated and highly skilled. Along with the license, the Lebanese government has pledged to provide full support and encouragement of this new business.



CCI Chairman brings over two decades of experience in telecommunications, including serving as CEO of three companies that he founded and continues to lead. Contact center industry veterans with over a century of combined experience in establishing and operating contact centers have been recruited to fill out the balance of the executive management team. "We have the objective of bringing new jobs to Lebanon as well as offering a state-of-the-art value proposition to our customers," said



Senior Corporate Advisor, William R Robertson, Ph.D. said "We are planning a total of five contact centers in Lebanon to be provisioned over time and look forward to working with our technology partners and the Ministry of Telecommunications as well as the American Lebanese Chamber of Commerce in this process. One of our key focus areas includes the development of online distance education for schools, government agencies, and higher learning institutions."

About Call Center International



Call Center International (CCI), headquartered in Irvine California, is a professional outsourcing services company providing telephone and Internet-based contact services for a wide variety of industry sectors on a global scale. Through its strategic partners it operates a fully redundant, high-speed telephone and global data network, and provides wide area wireless access to Internet and private networks. CCI management brings a collective century of telecom, IP, satellite, wireless, and data experience to support this new venture. To learn more about CCI, visit www.CCIntl.cc.



About inContact



inContact, Inc.(R) (NASDAQ: SAAS) provides the market leading on-demand customer contact center platform, inContact, to approximately 600 contact centers across the globe. With its roots in telecommunications and network infrastructure, inContact is unique in its offering because it combines a powerful connectivity backbone with a world-class software platform.'
        ],
        [
            'slug' => 'incontact-lebanon',
            'img' => 'blog9.jpeg',
            'date' => '09 Apr 2009',
            'title' => 'Call Center International Selects inContact for Lebanon Contact Center',
            'content' => 'Company to Use inContact ACD, eLearning and Workforce Management Solutions
SALT LAKE CITY--(Business Wire)--
inContact, Inc. (NASDAQ: SAAS) (www.inContact.com), the market leader in
on-demand contact center software and agent optimization tools, announced that
it has signed a two-year agreement for the inContact Automated Call Distributor
(ACD), eLearning and Workforce Management solutions with Call Center
International (CCI), an international contact center in Batroun, Lebanon, with
senior management offices in Beirut and world headquarters offices in Irvine,
CA, U.S.A.



In the competitive international outsourcing environment, CCI selected inContact
to set it apart from the competition. inContact has granted CCI two-year
exclusive rights to the inContact platform in Lebanon. The company plans to
build its operations to at least 200 agents.



"We wanted to find an all-in-one solution that would enable us to avoid complex
hardware provisioning issues while providing a ready-now solution to our inbound
activity needs," said Will Robertson, CCI Senior Corporate Advisor. "We felt
that inContact was the best choice for Call Center International. We were also
looking for scalability in our software, and because it is offered in a
Software-as-a-Service model, inContact will allow us to nimbly scale as we
expand."



The inContact implementation will be facilitated through inContact`s U.S.-based
offices and existing infrastructure. Jay Hanna Ajaltouni, Chairman of CCI said,
"CCI inbound calls will be routed through inContact`s redundant facilities in
the U.S. and re-routed via dedicated clear channel IP / VoIP to the center in
Lebanon. Our plan includes a series of contact centers throughout the country of
Lebanon."



"Today inContact supports contact centers in 12 countries without the need for
any hardware installation," said Paul Jarman, inContact CEO. "Through our SaaS
model, we can help CCI control the cost and quality of their operations, while
enabling them to implement quickly as their business grows."



Agent productivity is expected to be at its peak at CCI from the first day of
operations due to inContact features such as skills-based routing, universal
contact queuing, automatic call-back, inbound/outbound call blending and
database connectivity.



Not only will agent productivity be maximized through call routing, but with
inContact Workforce Management, CCI will easily be able to forecast demand,
manage workforce scheduling, analyze and optimize staffing and report real-time
adherence. inContact eLearning will allow the company to push training to its
agents during low call volumes, which creates a better-trained workforce by
utilizing down time.



The Lebanese government recently granted licenses for international contact
centers in the country, and CCI was one of only five companies to receive a
license by the Telecommunications Minister. The company`s new facility is
scheduled to be operational in June 2009 and will include a ceremony to be
attended by both corporate and government officials including U.S. diplomats in
Lebanon.



inContact Resources:



* inContact platform:
http://www.inContact.com/products-solutions/incontact-platform
* inContact Workforce Management:
http://www.inContact.com/products-solutions/inContact-workforce-management
* Three-Minute Overview: http://hooktours.com/8082158/



About inContact



inContact, Inc.® (NASDAQ: SAAS) provides the market leading on-demand customer
contact center platform, inContact, to approximately 600 contact centers across
the globe. With its roots in telecommunications and network infrastructure,
inContact is unique in its offering because it combines a powerful connectivity
backbone with a world-class software platform. Companies with contact centers of
all sizes have turned to inContact to address their contact handling needs as
well as to manage and improve their agent workforces. The inContact platform has
grown from a powerful Automated Call Distributor (ACD) with skills-based
routing, Computer Telephony Integration (CTI), and Interactive Voice Response
(IVR) with speech recognition, to include an innovative online hiring solution,
an eLearning and communications application, workforce management functionality,
and a customer feedback and survey solution. Because the inContact platform is
delivered via a Software-as-a-Service (SaaS) model, customers can realize
significant cost savings and flexibility compared to premises-based
alternatives. To learn more about inContact, visit www.inContact.com.



About Call Center International



Call Center International (CCI), headquartered in Irvine California, is a
professional outsourcing services company providing telephone and Internet-based
contact services for a wide variety of industry sectors on a global scale.
Through its strategic partners it operates a fully redundant, high-speed
telephone and global data network, and provides wide area wireless access to
Internet and private networks. CCI management brings a collective century of
telecom, IP, satellite, wireless, and data experience to support this new
venture. To learn more about CCI, visit www.CCIntl.cc.



Safe Harbor Statement: The Private Securities Litigation Reform Act of 1995
provides a safe harbor for forward-looking information made on the Company`s
behalf. All statements, other than statements of historical facts which address
the Company`s expectations of sources of capital or which express the Company`s
expectation for the future with respect to financial performance or operating
strategies, can be identified as forward-looking statements. Such statements
made by the Company are based on knowledge of the environment in which it
operates, but because of the factors previously listed, as well as other factors
beyond the control of the Company, actual results may differ materially from the
expectations expressed in the forward-looking statements'
        ],
    ];
}

// =======================
// NEWS LIST
// =======================
public function news()
{
    $blogs = $this->newsData();
    return view('pages.news', compact('blogs'));
}

// =======================
// NEWS DETAILS
// =======================
public function newsDetails($slug)
{
    $post = collect($this->newsData())->firstWhere('slug', $slug);

    abort_if(!$post, 404);

    return view('pages.news-details', compact('post'));
}

}


