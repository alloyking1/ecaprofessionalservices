<?php

return [
    'name' => 'ECA Professional Services',
    'domain' => 'https://ecaprofessionalservices.com',
    'tagline' => 'Accounting, Audit, Tax, and Advisory Experts for Growth-Focused Businesses',
    'contact' => [
        'phone' => '+234 803 309 0352',
        'email' => 'info@ecaprofessionalservices.com',
        'address' => 'Port Harcourt, Rivers State, Nigeria',
        'hours' => 'Mon - Fri, 8:00 AM - 5:00 PM',
    ],
    'stats' => [
        ['label' => 'Years Experience', 'value' => 18, 'suffix' => '+'],
        ['label' => 'Clients Served', 'value' => 350, 'suffix' => '+'],
        ['label' => 'Projects Completed', 'value' => 1200, 'suffix' => '+'],
        ['label' => 'Success Rate', 'value' => 98, 'suffix' => '%'],
    ],
    'industries' => [
        'SMEs',
        'Startups',
        'Manufacturing',
        'Healthcare',
        'Retail',
        'Financial Services',
    ],
    'teamPreview' => [
        [
            'name' => 'Ezinne Anyanwu',
            'role' => 'Managing Partner',
            'focus' => 'Audit, Risk, and Corporate Governance',
        ],
        [
            'name' => 'David Ojo',
            'role' => 'Director, Tax Advisory',
            'focus' => 'Tax Structuring and Compliance Strategy',
        ],
        [
            'name' => 'Mariam Yusuf',
            'role' => 'Head, Business Advisory',
            'focus' => 'Finance Transformation and Performance Improvement',
        ],
    ],
    'insights' => [
        [
            'title' => 'Tax Compliance Tips for Nigerian Businesses in 2026',
            'category' => 'Tax',
            'summary' => 'A practical guide to improving filing discipline, documentation standards, and compliance confidence.',
        ],
        [
            'title' => 'How Finance Teams Can Build Better Forecasting Systems',
            'category' => 'Advisory',
            'summary' => 'Learn how to improve budgeting accuracy and scenario planning for growth-focused decisions.',
        ],
        [
            'title' => 'Audit Preparation Playbook for Growing Companies',
            'category' => 'Audit',
            'summary' => 'A step-by-step framework for internal readiness, control checks, and efficient audit support.',
        ],
    ],
    'faq' => [
        [
            'question' => 'How do I get started with ECA Professional Services?',
            'answer' => 'Book a consultation. We assess your business needs, identify priority gaps, and recommend a right-sized engagement plan.',
        ],
        [
            'question' => 'Can you support both startups and established businesses?',
            'answer' => 'Yes. We tailor accounting, audit, tax, and advisory support to your growth stage and operational complexity.',
        ],
        [
            'question' => 'Do you provide monthly reporting and ongoing advisory?',
            'answer' => 'Yes. We provide recurring reporting, compliance support, and strategic finance guidance to leadership teams.',
        ],
    ],
    'about' => [
        'story' => 'ECA Professional Services was founded to close the gap between technical financial compliance and practical business growth strategy. We combine rigorous accounting standards with real-world advisory support to help organizations make confident decisions.',
        'mission' => 'To empower Nigerian businesses with dependable accounting, audit, tax, and advisory solutions that improve performance and strengthen trust.',
        'vision' => 'To be the most trusted growth-focused financial advisory partner for ambitious businesses across Africa.',
        'values' => [
            ['title' => 'Integrity', 'description' => 'We uphold transparency, ethics, and accountability in every engagement.'],
            ['title' => 'Excellence', 'description' => 'We deliver high-quality work products grounded in professional standards.'],
            ['title' => 'Partnership', 'description' => 'We work as an extension of your team with shared ownership of outcomes.'],
            ['title' => 'Innovation', 'description' => 'We combine financial expertise with modern tools and adaptive thinking.'],
        ],
    ],
    'process' => [
        ['step' => 'Consultation', 'description' => 'Understand goals, risks, timelines, and current financial realities.'],
        ['step' => 'Analysis', 'description' => 'Review data, controls, and compliance posture to identify key priorities.'],
        ['step' => 'Execution', 'description' => 'Implement practical accounting, tax, audit, or advisory actions.'],
        ['step' => 'Reporting', 'description' => 'Provide clear reports, insights, and next-step recommendations.'],
    ],
    'navigation' => [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About Us', 'route' => 'about'],
        ['label' => 'Services', 'route' => 'services.index'],
        ['label' => 'Careers', 'route' => 'careers'],
        ['label' => 'Blog / Insights', 'route' => 'blog'],
        ['label' => 'FAQ', 'route' => 'faq'],
        ['label' => 'Contact', 'route' => 'contact'],
    ],
    'meta' => [
        'defaults' => [
            'title' => 'ECA Professional Services',
            'description' => 'A modern Nigerian accounting and business consulting firm delivering tax, audit, and financial advisory excellence.',
        ],
        'pages' => [
            'home' => [
                'title' => 'Professional Accounting, Audit & Tax Solutions for Businesses in Nigeria',
                'description' => 'Helping businesses grow through reliable accounting, auditing, tax advisory, and financial consulting services.',
            ],
            'about' => [
                'title' => 'About ECA Professional Services',
                'description' => 'Learn about our mission, leadership, and commitment to financial excellence for Nigerian businesses.',
            ],
            'services' => [
                'title' => 'Professional Services for Business Growth',
                'description' => 'Explore accounting, tax, audit, payroll, compliance, and corporate advisory services.',
            ],
            'careers' => [
                'title' => 'Careers at ECA Professional Services',
                'description' => 'Join a high-performing team shaping financial confidence for ambitious businesses.',
            ],
            'blog' => [
                'title' => 'Insights and Resources',
                'description' => 'Stay informed with practical accounting, tax, and financial planning insights.',
            ],
            'faq' => [
                'title' => 'Frequently Asked Questions',
                'description' => 'Answers to common questions about tax filing, audits, pricing, and consultations.',
            ],
            'contact' => [
                'title' => 'Contact ECA Professional Services',
                'description' => 'Book a consultation or get in touch with our team for tailored support.',
            ],
        ],
    ],
    'services' => [
        'overview' => [
            ['name' => 'Tax Services', 'route' => 'services.tax', 'icon' => 'calculator'],
            ['name' => 'Audit Services', 'route' => 'services.audit', 'icon' => 'shield-check'],
            ['name' => 'Accounting Services', 'route' => 'services.accounting', 'icon' => 'chart'],
            ['name' => 'Financial Advisory', 'route' => 'services.advisory', 'icon' => 'briefcase'],
            ['name' => 'Business Registration', 'route' => 'services.compliance', 'icon' => 'briefcase'],
            ['name' => 'Payroll Management', 'route' => 'services.payroll', 'icon' => 'calculator'],
            ['name' => 'Compliance Services', 'route' => 'services.compliance', 'icon' => 'shield-check'],
            ['name' => 'Bookkeeping Services', 'route' => 'services.bookkeeping', 'icon' => 'chart'],
            ['name' => 'Corporate Consulting', 'route' => 'services.advisory', 'icon' => 'briefcase'],
            ['name' => 'Risk Management', 'route' => 'services.risk-management', 'icon' => 'shield-check'],
        ],
        'detail' => [
            'tax' => [
                'slug' => 'tax',
                'name' => 'Tax Services',
                'summary' => 'Reduce tax risk while improving efficiency and compliance across your operations.',
                'heroImage' => 'https://images.unsplash.com/photo-1626266061368-46a8f578ddd6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'overview' => 'Our tax team supports businesses with planning, compliance, and strategic structuring to reduce exposure while preserving growth opportunities. We help you align statutory obligations with operational realities and long-term objectives.',
                'benefits' => [
                    'Improved tax efficiency and reduced compliance risk.',
                    'Timely filing support across key tax obligations.',
                    'Advisory guidance for transactions and restructuring.',
                ],
                'industries' => ['SMEs', 'Startups', 'Manufacturing', 'Retail'],
                'testimonials' => [
                    ['quote' => 'Their tax planning support helped us optimize obligations without compromising compliance.', 'name' => 'Chidi E.', 'role' => 'CFO', 'company' => 'Nexus Retail'],
                    ['quote' => 'Fast, clear, and dependable. Filing cycles are now smooth and predictable.', 'name' => 'Amina B.', 'role' => 'Finance Manager', 'company' => 'PrimeCare Clinics'],
                ],
                'faq' => [
                    ['question' => 'Do you support monthly tax compliance?', 'answer' => 'Yes. We support recurring filing schedules, reconciliations, and documentation readiness.'],
                    ['question' => 'Can you advise on complex tax structuring?', 'answer' => 'Yes. We provide strategic advisory support for growth, restructuring, and transaction-related tax decisions.'],
                ],
                'related' => ['services.audit', 'services.compliance', 'services.accounting'],
                'meta' => [
                    'title' => 'Tax Services',
                    'description' => 'End-to-end tax planning, filing, advisory, and regulatory support for Nigerian businesses.',
                ],
            ],
            'audit' => [
                'slug' => 'audit',
                'name' => 'Audit Services',
                'summary' => 'Independent audit and assurance services designed to improve trust and transparency.',
                'heroImage' => 'https://images.unsplash.com/photo-1707157284454-553ef0a4ed0d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'overview' => 'We deliver independent audit and assurance services with rigorous methodology, sector context, and practical reporting to support stakeholder confidence and governance quality.',
                'benefits' => [
                    'Enhanced credibility with investors and stakeholders.',
                    'Improved internal controls and reporting discipline.',
                    'Actionable recommendations beyond compliance checks.',
                ],
                'industries' => ['Financial Services', 'Healthcare', 'Manufacturing', 'SMEs'],
                'testimonials' => [
                    ['quote' => 'The audit process was efficient and insightful. Their recommendations improved our control environment.', 'name' => 'Samuel O.', 'role' => 'CEO', 'company' => 'Helix Manufacturing'],
                    ['quote' => 'Professional, structured, and transparent throughout the engagement.', 'name' => 'Ifeoma N.', 'role' => 'Board Chair', 'company' => 'Axis Microfinance'],
                ],
                'faq' => [
                    ['question' => 'How long does an audit engagement typically take?', 'answer' => 'Duration depends on scope and documentation readiness. We define timeline and milestones during planning.'],
                    ['question' => 'Do you support pre-audit readiness?', 'answer' => 'Yes. We assist with readiness checks, control reviews, and documentation preparation.'],
                ],
                'related' => ['services.risk-management', 'services.accounting', 'services.compliance'],
                'meta' => [
                    'title' => 'Audit Services',
                    'description' => 'Independent, standards-based audit and assurance services for confident decision-making.',
                ],
            ],
            'accounting' => [
                'slug' => 'accounting',
                'name' => 'Accounting Services',
                'summary' => 'Accurate, timely, and strategic financial reporting for better business control.',
                'heroImage' => 'https://images.unsplash.com/photo-1564939558297-fc396f18e5c7?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'overview' => 'Our accounting services provide reliable bookkeeping, month-end reporting, and management insights that strengthen operational control and strategic decision-making.',
                'benefits' => [
                    'Accurate monthly financial statements and dashboards.',
                    'Better visibility into profitability and cash flow.',
                    'Scalable accounting support for growth-stage businesses.',
                ],
                'industries' => ['SMEs', 'Startups', 'Retail', 'Healthcare'],
                'testimonials' => [
                    ['quote' => 'Our reporting turnaround improved dramatically within the first quarter.', 'name' => 'Blessing T.', 'role' => 'Founder', 'company' => 'Luma Health'],
                    ['quote' => 'They gave us the structure we needed to scale confidently.', 'name' => 'Abdul R.', 'role' => 'COO', 'company' => 'Mercury Logistics'],
                ],
                'faq' => [
                    ['question' => 'Can you manage full outsourced accounting?', 'answer' => 'Yes. We can manage end-to-end accounting operations or support your internal team.'],
                    ['question' => 'Do you support management reporting?', 'answer' => 'Yes. We provide tailored reporting packs for leadership and board-level reviews.'],
                ],
                'related' => ['services.bookkeeping', 'services.payroll', 'services.advisory'],
                'meta' => [
                    'title' => 'Accounting Services',
                    'description' => 'Managed accounting services that improve reporting, controls, and financial visibility.',
                ],
            ],
            'payroll' => [
                'slug' => 'payroll',
                'name' => 'Payroll Management',
                'summary' => 'Streamlined payroll operations with compliance at the center.',
                'heroImage' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=1600&q=80',
                'overview' => 'We help businesses manage payroll processing, statutory remittances, and workforce reporting with accuracy, confidentiality, and compliance discipline.',
                'benefits' => [
                    'Accurate payroll processing and timely disbursement.',
                    'Reduced statutory remittance errors.',
                    'Clear records for workforce and regulatory reporting.',
                ],
                'industries' => ['Manufacturing', 'Healthcare', 'Retail', 'Financial Services'],
                'testimonials' => [
                    ['quote' => 'Payroll errors dropped significantly after moving to ECA support.', 'name' => 'Ada K.', 'role' => 'HR Lead', 'company' => 'Nova Healthcare'],
                    ['quote' => 'Reliable, discreet, and always on schedule.', 'name' => 'Femi A.', 'role' => 'Operations Manager', 'company' => 'Brisk Retail'],
                ],
                'faq' => [
                    ['question' => 'Do you handle statutory remittances?', 'answer' => 'Yes. We support compliant remittance workflows and record management.'],
                    ['question' => 'Can payroll integrate with our accounting reports?', 'answer' => 'Yes. We align payroll outputs with your monthly reporting structures.'],
                ],
                'related' => ['services.accounting', 'services.compliance', 'services.bookkeeping'],
                'meta' => [
                    'title' => 'Payroll Management',
                    'description' => 'Reliable payroll processing, statutory remittance management, and workforce reporting.',
                ],
            ],
            'bookkeeping' => [
                'slug' => 'bookkeeping',
                'name' => 'Bookkeeping Services',
                'summary' => 'Structured financial records that support smart planning and clean audits.',
                'heroImage' => 'https://images.unsplash.com/photo-1707157284454-553ef0a4ed0d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'overview' => 'We maintain accurate day-to-day records, reconciliations, and ledger structures that keep your finances organized and audit-ready.',
                'benefits' => [
                    'Reliable transaction records and reconciliations.',
                    'Reduced month-end closing stress.',
                    'Cleaner audit trails and better financial control.',
                ],
                'industries' => ['SMEs', 'Startups', 'Retail', 'Healthcare'],
                'testimonials' => [
                    ['quote' => 'Our books are now consistently clean and easy to review.', 'name' => 'Ruth M.', 'role' => 'Founder', 'company' => 'Oakline Foods'],
                    ['quote' => 'The bookkeeping structure improved our decision-making speed.', 'name' => 'Kunle D.', 'role' => 'Finance Lead', 'company' => 'UrbanChain'],
                ],
                'faq' => [
                    ['question' => 'Do you support historical clean-up?', 'answer' => 'Yes. We can clean, reconcile, and restructure prior periods where needed.'],
                    ['question' => 'Can this scale as we grow?', 'answer' => 'Yes. Our bookkeeping frameworks are designed to scale with transaction volume.'],
                ],
                'related' => ['services.accounting', 'services.payroll', 'services.audit'],
                'meta' => [
                    'title' => 'Bookkeeping Services',
                    'description' => 'Reliable bookkeeping and reconciliations that keep your financial records audit-ready.',
                ],
            ],
            'compliance' => [
                'slug' => 'compliance',
                'name' => 'Compliance Services',
                'summary' => 'Practical compliance support that keeps your business ahead of regulatory changes.',
                'heroImage' => 'https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'overview' => 'We help businesses stay current with tax, statutory, and financial reporting obligations through practical workflows and ongoing advisory support.',
                'benefits' => [
                    'Lower risk of penalties and late filings.',
                    'Clear compliance calendar and accountability.',
                    'Improved confidence with regulators and partners.',
                ],
                'industries' => ['Financial Services', 'Manufacturing', 'SMEs', 'Healthcare'],
                'testimonials' => [
                    ['quote' => 'Their compliance framework gave us structure and peace of mind.', 'name' => 'Nkechi U.', 'role' => 'Director', 'company' => 'Trinity Foods'],
                    ['quote' => 'We moved from reactive filings to proactive compliance management.', 'name' => 'Hassan S.', 'role' => 'COO', 'company' => 'Bluenet Systems'],
                ],
                'faq' => [
                    ['question' => 'Can you manage compliance across multiple entities?', 'answer' => 'Yes. We support multi-entity compliance planning and reporting workflows.'],
                    ['question' => 'Do you provide periodic compliance reviews?', 'answer' => 'Yes. We conduct periodic checks and issue recommendations for risk reduction.'],
                ],
                'related' => ['services.tax', 'services.audit', 'services.risk-management'],
                'meta' => [
                    'title' => 'Compliance Services',
                    'description' => 'Tax, statutory, and financial compliance services for stable and compliant growth.',
                ],
            ],
            'advisory' => [
                'slug' => 'advisory',
                'name' => 'Financial Advisory',
                'summary' => 'Strategic advisory services for growth, restructuring, and financial performance.',
                'heroImage' => 'https://images.unsplash.com/photo-1521791055366-0d553872125f?auto=format&fit=crop&w=1600&q=80',
                'overview' => 'Our advisory team works with leadership to improve strategy execution, financial performance, and decision quality across key business priorities.',
                'benefits' => [
                    'Sharper strategic decisions backed by financial insight.',
                    'Better performance tracking and planning discipline.',
                    'Support through growth, restructuring, and transformation.',
                ],
                'industries' => ['Startups', 'SMEs', 'Financial Services', 'Manufacturing'],
                'testimonials' => [
                    ['quote' => 'Their advisory support helped us restructure operations with clarity.', 'name' => 'Tosin P.', 'role' => 'CEO', 'company' => 'Northbridge Ventures'],
                    ['quote' => 'A strong strategic partner for complex business decisions.', 'name' => 'Musa J.', 'role' => 'Founder', 'company' => 'Axis Agro'],
                ],
                'faq' => [
                    ['question' => 'Do you support strategy implementation, not just planning?', 'answer' => 'Yes. We work with teams to translate strategy into measurable execution plans.'],
                    ['question' => 'Can advisory be combined with accounting support?', 'answer' => 'Yes. We often combine both to improve insight quality and decision outcomes.'],
                ],
                'related' => ['services.accounting', 'services.risk-management', 'services.tax'],
                'meta' => [
                    'title' => 'Financial Advisory',
                    'description' => 'Corporate and financial advisory support for better strategy and resilient growth.',
                ],
            ],
            'risk-management' => [
                'slug' => 'risk-management',
                'name' => 'Risk Management',
                'summary' => 'Risk frameworks and controls that protect value and improve resilience.',
                'heroImage' => 'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=1600&q=80',
                'overview' => 'We help businesses identify, assess, and manage operational and financial risks through practical control frameworks and ongoing monitoring support.',
                'benefits' => [
                    'Improved resilience to operational disruptions.',
                    'Clearer risk visibility for leadership and boards.',
                    'Better internal controls and accountability.',
                ],
                'industries' => ['Financial Services', 'Healthcare', 'Manufacturing', 'SMEs'],
                'testimonials' => [
                    ['quote' => 'Their risk framework improved our board-level oversight significantly.', 'name' => 'Lekan A.', 'role' => 'Board Secretary', 'company' => 'Delta Capital'],
                    ['quote' => 'Clear, practical, and aligned to our operating realities.', 'name' => 'Peace O.', 'role' => 'Chief Risk Officer', 'company' => 'Careway Group'],
                ],
                'faq' => [
                    ['question' => 'Do you support risk assessments for growing businesses?', 'answer' => 'Yes. We tailor assessments to business size, structure, and sector risks.'],
                    ['question' => 'Can you help implement control improvements?', 'answer' => 'Yes. We support both design and implementation of practical control measures.'],
                ],
                'related' => ['services.audit', 'services.compliance', 'services.advisory'],
                'meta' => [
                    'title' => 'Risk Management',
                    'description' => 'Risk assessment and control implementation services for stronger operational resilience.',
                ],
            ],
        ],
    ],
];