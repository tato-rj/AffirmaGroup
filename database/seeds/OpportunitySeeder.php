<?php

use Illuminate\Database\Seeder;
use App\{Opportunity, Field};

class OpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
Opportunity::create([
'field_id' => Field::byName('Architectural Metal & Glass')->id,
'location' => 'New York, NY',
'type' => 'Full-time',
'position' => 'Assistant Project Manager',
'responsibilities' => serialize([
'Communicating with stakeholders regarding project needs and goals.',
'Contributing to the planning and development of projects.',
'Supporting the coordination and management of projects.',
'Researching information as required.',
'Performing administrative tasks such as preparing invoices, estimates, scheduling meetings, etc.',
'Keeping track of and reporting on project progress.',
'Completing any tasks assigned by the Project Manager in an efficient and timely manner.'
]),
'qualifications' => serialize([
'Degree in business management, engineering, or a related field.',
'Previous experience in project management or a similar role.',
'Proficiency in Microsoft Office and project management software.',
'Highly organized and able to multitask.',
'Strong attention to detail and problem-solving skills.',
'Excellent communication skills, both verbal and written.',
'Able to work independently and as part of a team.'
]),
'description' => 'A leading Architectural Metal & Glass Subcontractor is looking for a talented and efficient Assistant Project Manager to contribute and support the planning and execution of projects. The Assistant Project Manager\'s responsibilities include monitoring project progress, following up with clients on the completion or delay of project phases, scheduling meetings, and maintaining project documents and reports.

To be successful as an Assistant Project Manager you should be able to perform any tasks assigned by the project manager in an efficient and timely manner, maintain oversight of all project activities, identify any issues, and ensure these are resolved promptly.

This is a key role and offers extensive career development and progression as well as the opportunity to work for a renowned subcontractor. There are also very attractive benefits and bonus packages with a very competitive salary on offer.'
]);

Opportunity::create([
'field_id' => Field::byName('Architectural Metal & Glass')->id,
'location' => 'New York, NY',
'type' => 'Full-time',
'position' => 'Design Engineer',
'responsibilities' => serialize([
'Research and draft shop drawings.',
'Develop test prototypes.',
'Identify solutions to improve production efficiency.',
'Use design software to develop models and drawings of new products.',
'Maintain existing engineering records and designs.',
'Assess all engineering prototypes to determine issues or risks.',
'Estimate cost limits and budgets for new designs.',
'Supervise the manufacturing process of all designs.',
'Coordinate with other engineers, management, and the design department.'
]),
'qualifications' => serialize([
'Bachelor’s degree in design engineering, engineering, architecture, product design, or relevant field.',
'A minimum of 3 years’ experience in a similar role preferably at an Architectural Metal & Glass company.',
'Excellent written and verbal communication skills.',
'Accurate and strong attention to detail.',
'Proficient in MS Office and popular design software.',
'Ability to multitask and manage time effectively.'
]),
'description' => 'A leading Architectural Metal & Glass Subcontractor is looking for a talented and detail-oriented Design Engineer to join their team. As the Design Engineer, you will be responsible for carrying out a variety of engineering duties including designing, researching, and prototyping solutions.

The chosen Engineer will collaborate with the design and construction teams on various design projects, using in-depth knowledge of the latest design trends and engineering software to lead the way. In addition to being a good communicator, all candidates should be creative thinkers with excellent problem-solving skills.

This is a key role and offers extensive career development and progression as well as the opportunity to work for a renowned subcontractor. There are also very attractive benefits and bonus packages with a very competitive salary on offer.'
]);

Opportunity::create([
'field_id' => Field::byName('Architectural Metal & Glass')->id,
'location' => 'New York, NY',
'type' => 'Full-time',
'position' => 'Estimator',
'responsibilities' => serialize([
'Prepares work to be accomplished by gathering information and requirements; setting priorities.',
'Prepares construction budget by studying architectural plans; updating specifications; identifying and projecting costs for each scope.',
'Evaluates offers to purchase by costing changes, additions, and site requirements.',
'Obtains bids from vendors and subcontractors by specifying materials; identifying qualified subcontractors; negotiating price.',
'Maintains cost keys and price masters by updating information.',
'Resolves cost discrepancies by collecting and analyzing information.',
'Prepares special reports by collecting, analyzing, and summarizing information.',
'Maintains quality service by following organization standards.',
'Maintains continuity among corporate, division, and local work teams by documenting and communicating actions, irregularities, and continuing needs.',
'Contributes to team effort by accomplishing related results as needed.'

]),
'qualifications' => serialize([
'Analyzing information, developing budgets, vendor relationships, decision making, teamwork, documentation skills, quality focus.',
'2/3 years industry-relevant experience in Architectural Metal and Glass industry, or Interior Construction.',
'Self-motivated with the ability to manage a varied workload and work to a demanding schedule.',
'Strong knowledge of interior construction, vendors, and their specification.',
'Highly software proficient.'

]),
'description' => 'A leading Architectural Metal & Glass Subcontractor is looking for a talented and efficient Estimator to contribute and support the planning and bidding of projects. To be successful as an Estimator you should be able to prepare construction budgets, evaluate project costs, identify any issues, and ensure any aspect of the project is priced accordingly. 

Expected to have a wide range of knowledge with ANY of the following; architectural glass, interior glass, interior glazing, ornamental metals, steel, storefronts, and glass canopies.

This is a key role and offers extensive career development and progression as well as the opportunity to work for a renowned subcontractor. There are also very attractive benefits and bonus packages with a very competitive salary on offer.'
]);

Opportunity::create([
'field_id' => Field::byName('Architectural Metal & Glass')->id,
'location' => 'New York, NY',
'type' => 'Full-time',
'position' => 'Project Manager',
'responsibilities' => serialize([
'Coordinate internal resources and third parties/vendors for the flawless execution of multiple projects.',
'Ensure that all projects are delivered on-time, within scope and within budget.',
'Assist in the definition of project scope and objectives, involving all relevant internal stakeholders and ensuring technical feasibility.',
'Ensure resource availability and allocation.',
'Develop a detailed project plan to monitor and track progress.',
'Manage changes to the project scope, project schedule, and project costs using appropriate verification techniques.',
'Measure performance using appropriate project management tools and techniques.',
'Manage the relationship with the client and relevant stakeholders.',
'Meet with clients to take detailed ordering briefs and clarify specific requirements of each project.',
'Develop comprehensive project plans to be shared with clients as well as other staff members.'
]),
'qualifications' => serialize([
'Degree in business management, engineering, or a related field.',
'Previous experience in project management or a similar role.',
'Run multiple projects at the same time, must have at least worked on projects valued at $2m-$40m.',
'Should have previously worked on Commercial or Residential mid/high-rise projects based in America preferably New York.',
'Must have good managerial skills as you will be expected to run a whole project from start to finish.',
'Strong attention to detail and problem-solving skills.',
'Excellent communication skills, both verbal and written.'
]),
'description' => 'A leading Architectural Metal & Glass Subcontractor is looking for a talented and efficient Project Manager to contribute and support the planning and execution of projects. To be successful as a Project Manager you should be able to maintain oversight of all project activities, identify any issues, and ensure these are resolved promptly. 

Expected to have a wide range of knowledge with ANY of the following; architectural glass, interior glass, interior glazing, ornamental metals, steel, storefronts, and glass canopies.

This is a key role and offers extensive career development and progression as well as the opportunity to work for a renowned subcontractor. There are also very attractive benefits and bonus packages with a very competitive salary on offer.'
]);

Opportunity::create([
'field_id' => Field::byName('Accounting')->id,
'location' => 'New York, NY',
'type' => 'Full-time',
'position' => 'Senior Accountant',
'responsibilities' => serialize([
'Participate in month-end close procedures, including the preparation of reconciliations and schedules required to support the internal and external reporting process, as well as external auditors.',
'Supporting the team on month-end close procedures.',
'Prepare and record monthly transactions to support the G/L close.',
'Identify and explain fluctuations in monthly financial information and provide the requested information to divisional controllers.',
'Support the financial reporting processes for internal and external reporting.',
'Provide accounting and financial support to management as needed.',
'Ensure that receivables are collected promptly.',
'Streamlining AR functions by maintaining/coding applicable customer discounts and supporting communication on discrepancies.',
'Prepare accounts receivable/payable reports, analyzing the data, and recognizing the trends.',
'Positive contributor to the team by supporting and executing projects as needed.'

]),
'qualifications' => serialize([
'B.S. or above degree in Accounting.',
'2+ years of accounting experience.',
'Advanced Microsoft Excel skills.',
'ERP experience preferred.',
'Detail-oriented with the ability to multitask without sacrificing accuracy.',
'Ability to learn new processes quickly.',
'Excellent time management, analytical and organizational skill.'

]),
'description' => 'You are hands-on, detailed-oriented, collaborative, and passionate about accounting. You understand the importance of getting the numbers right on time, every time. You’re proactive in finding solutions to technical accounting challenges, and you know how and when to consult with others. You seek out opportunities to help others on your team. You enjoy opportunities to work with partners across the business and around the world to achieve a timely and accurate close for the month, quarter, and year.'
]);

Opportunity::create([
'field_id' => Field::byName('Retail')->id,
'location' => 'Projects based within the US',
'type' => 'Full-time',
'position' => 'Site Superintendent',
'responsibilities' => serialize([
'Ensure all required materials, equipment, and inspections occur to support the project schedule.', 
'Responsible for site safety.', 
'Ensure the overall jobsite is safe for workers and visitors as well as manage compliance with established company safety policies.', 
'Work with the project teams to budget, forecast, and manage field personnel as well as management of labor, equipment, materials, tools, and other cost considerations.', 
'Prepare work plans and develop temporary facilities for the project.', 
'Understand, review, and manage project plans, specifications, and manufacturer\'s data and execute project based upon said documentation.', 
'Review construction documents for completeness and constructability.', 
'Manage the overall project and 3-week look ahead schedules, including creating the master schedule and updating it on a weekly basis.', 
'Generate RFI\'s (Requests for Information) as required to ensure completeness of the project documents and identifying and clarifying any discrepancies.', 
'Review submittals for compliance with project manual and plans, manufacturer\'s recommendations and code, or other standards applicable to the system.', 
'Conduct on-site project meetings with subcontractors and construction trades lead personnel.', 
'Manage subcontractors for all work performed on-site.',
'Management and supervision of work crews on-site including: a) Mentor and train field personnel; b) Manage foreman and their duties and ensure all have resources and information to perform their tasks effectively and efficiently; c) Provide performance evaluations of field personnel; d) Manage the overall safety of the project and ensure all personnel have resources to perform their work safely.',
'Other duties could include: a) Work with the project team to maintain relationships with owners, visitors, subcontractors and suppliers; b) Manage site work and logistics of construction site; c) Assist with business development, bidding, proposals and obtaining new work; d) Provide feedback on processes and procedures, as the company truly believes in continuous development.',
]),
'qualifications' => serialize([
'5+ years of proven leadership or supervisory role.',
'10+ years in the construction industry of retail stores.',
'Self-motivated with the ability to manage a varied workload and work to a demanding schedule.',
'Basic computer skills with experience in MS Office and MS Project preferred.'
]),
'description' => 'A leading Retail Stores General Contractor is looking for a talented and efficient Site Superintendent to contribute and support the construction and delivery of projects. Superintendent coordinates and manages all on-site activities, as well work with project teams to deliver successful projects to owners, on time and on budget with the desired level of quality. '
]);

Opportunity::create([
'field_id' => Field::byName('Architectural Metal & Glass')->id,
'location' => 'Brooklyn, NY',
'type' => 'Full-time',
'position' => 'Warehouse Manager',
'responsibilities' => serialize([
'Audit and report inventory while making recommendations on which items to order and restock.',
'Manage warehouse associates, monitoring work and ensuring the safe use of warehouse equipment.',
'Establish warehouse practices and protocols to achieve an efficient warehouse.',
'Set warehouse and team goals in collaboration with executive management and other team leads.',
'Monitor workplace performance and lead training initiatives to improve employees.',
'Keep up-to-date on the latest federal and state safety regulations.',
'Communicate with other departments to ensure products are shipped in a timely manner.'
]),
'qualifications' => serialize([
'10+ years of experience as a Warehouse Manager in the NY area.',
'Excellent leadership skills, including the abilities to set goals, motivate and manage conflict.',
'Effective communication skills, including writing, speaking and active listening.',
'Great interpersonal skills.',
'Good project management skills, including strong decision-making, problem-solving and strategic planning abilities.',
'Exceptional time management and organization skills.',
'In-depth understanding of industry and company best practices for the warehouse.',
'Familarity with bookkeeping, inventory control practices and logistics.',
'Comfortable using inventory management software and other organizational computer applications.',
'Physical strength, stamina and the ability to walk or stand for long periods of time.'
]),
'description' => 'A leading Architectural Metal & Glass Subcontractor is looking for a talented and efficient Warehouse Manager to contribute and support the planning and bidding of projects. A good Warehouse Manager oversees operations at a warehouse or storage facility to ensure that all incoming and outgoing inventory is processed according to schedule. Their duties include preparing schedules for Warehouse Associates, training new employees on how to use machinery and monitoring compliance with safety standards.

Expected to have a wide range of knowledge with ANY of the following; architectural glass, interior glass, interior glazing, ornamental metals, steel, storefronts, and glass canopies.

This is a key role and offers extensive career development and progression as well as the opportunity to work for a renowned subcontractor. There are also very attractive benefits and bonus packages with a very competitive salary on offer.'
]);

    }
}
