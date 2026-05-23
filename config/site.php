<?php

return [
    'name' => 'ECA Professional Services',
    'domain' => 'https://ecaprofessionalservices.com',
    'tagline' => 'Accounting, Audit, Tax, and Advisory Experts for Growth-Focused Businesses',
    'contact' => [
        'phone' => '+234 800 000 0000',
        'email' => 'info@ecaprofessionalservices.com',
        'address' => 'Lagos, Nigeria',
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
                'name' => 'Tax Services',
                'summary' => 'Reduce tax risk while improving efficiency and compliance across your operations.',
                'meta' => [
                    'title' => 'Tax Services',
                    'description' => 'End-to-end tax planning, filing, advisory, and regulatory support for Nigerian businesses.',
                ],
            ],
            'audit' => [
                'name' => 'Audit Services',
                'summary' => 'Independent audit and assurance services designed to improve trust and transparency.',
                'meta' => [
                    'title' => 'Audit Services',
                    'description' => 'Independent, standards-based audit and assurance services for confident decision-making.',
                ],
            ],
            'accounting' => [
                'name' => 'Accounting Services',
                'summary' => 'Accurate, timely, and strategic financial reporting for better business control.',
                'meta' => [
                    'title' => 'Accounting Services',
                    'description' => 'Managed accounting services that improve reporting, controls, and financial visibility.',
                ],
            ],
            'payroll' => [
                'name' => 'Payroll Management',
                'summary' => 'Streamlined payroll operations with compliance at the center.',
                'meta' => [
                    'title' => 'Payroll Management',
                    'description' => 'Reliable payroll processing, statutory remittance management, and workforce reporting.',
                ],
            ],
            'bookkeeping' => [
                'name' => 'Bookkeeping Services',
                'summary' => 'Structured financial records that support smart planning and clean audits.',
                'meta' => [
                    'title' => 'Bookkeeping Services',
                    'description' => 'Reliable bookkeeping and reconciliations that keep your financial records audit-ready.',
                ],
            ],
            'compliance' => [
                'name' => 'Compliance Services',
                'summary' => 'Practical compliance support that keeps your business ahead of regulatory changes.',
                'meta' => [
                    'title' => 'Compliance Services',
                    'description' => 'Tax, statutory, and financial compliance services for stable and compliant growth.',
                ],
            ],
            'advisory' => [
                'name' => 'Financial Advisory',
                'summary' => 'Strategic advisory services for growth, restructuring, and financial performance.',
                'meta' => [
                    'title' => 'Financial Advisory',
                    'description' => 'Corporate and financial advisory support for better strategy and resilient growth.',
                ],
            ],
            'risk-management' => [
                'name' => 'Risk Management',
                'summary' => 'Risk frameworks and controls that protect value and improve resilience.',
                'meta' => [
                    'title' => 'Risk Management',
                    'description' => 'Risk assessment and control implementation services for stronger operational resilience.',
                ],
            ],
        ],
    ],
];