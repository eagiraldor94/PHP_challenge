<?php
require_once __DIR__ . '/../app/bootstrap.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('tickers', function ($table) {
       $table->increments('id');
       $table->string('ticker')->unique();
       $table->string('stock_name');
       $table->timestamps();
   });

Capsule::table('tickers')->insert([[
'ticker' => 'A','stock_name' => 'AGILENT TECHNOLOGIES INC'],
[
'ticker' => 'AA','stock_name' => 'ALCOA CORP'],
[
'ticker' => 'AAA','stock_name' => 'AAF FIRST PRIORITY CLO BOND'],
[
'ticker' => 'AAAU','stock_name' => 'GOLDMAN SACHS PHYSICAL GOLD'],
[
'ticker' => 'AAC','stock_name' => 'ARES ACQUISITION CORP-A'],
[
'ticker' => 'AAC=','stock_name' => 'ARES ACQUISITION CORP'],
[
'ticker' => 'AACG','stock_name' => 'ATA CREATIVITY GLOBAL - ADR'],
[
'ticker' => 'AACIU','stock_name' => 'ARMADA ACQUISITION CORP I'],
[
'ticker' => 'AADI','stock_name' => 'AADI BIOSCIENCE INC'],
[
'ticker' => 'AADR','stock_name' => 'ADVISORSHARES DORSEY WRIGHT'],
[
'ticker' => 'AAIC','stock_name' => 'ARLINGTON ASSET INVESTMENT-A'],
[
'ticker' => 'AAL','stock_name' => 'AMERICAN AIRLINES GROUP INC'],
[
'ticker' => 'AAMC','stock_name' => 'ALTISOURCE ASSET MANAGEMENT'],
[
'ticker' => 'AAME','stock_name' => 'ATLANTIC AMERICAN CORP'],
[
'ticker' => 'AAN','stock_name' => 'AARON\'S CO INC/THE'],
[
'ticker' => 'AAOI','stock_name' => 'APPLIED OPTOELECTRONICS INC'],
[
'ticker' => 'AAON','stock_name' => 'AAON INC'],
[
'ticker' => 'AAP','stock_name' => 'ADVANCE AUTO PARTS INC'],
[
'ticker' => 'AAPL','stock_name' => 'APPLE INC'],
[
'ticker' => 'AAQC','stock_name' => 'ACCELERATE ACQUISITION COR-A'],
[
'ticker' => 'AAQC=','stock_name' => 'ACCELERATE ACQUISITION CORP'],
[
'ticker' => 'AAT','stock_name' => 'AMERICAN ASSETS TRUST INC'],
[
'ticker' => 'AATC','stock_name' => 'AUTOSCOPE TECHNOLOGIES CORP'],
[
'ticker' => 'AAU','stock_name' => 'ALMADEN MINERALS LTD - B'],
[
'ticker' => 'AAWW','stock_name' => 'ATLAS AIR WORLDWIDE HOLDINGS'],
[
'ticker' => 'AAXJ','stock_name' => 'ISHARES MSCI ALL COUNTRY ASI'],
[
'ticker' => 'AB','stock_name' => 'ALLIANCEBERNSTEIN HOLDING LP'],
[
'ticker' => 'ABB','stock_name' => 'ABB LTD-SPON ADR'],
[
'ticker' => 'ABBV','stock_name' => 'ABBVIE INC'],
[
'ticker' => 'ABC','stock_name' => 'AMERISOURCEBERGEN CORP'],
[
'ticker' => 'ABCB','stock_name' => 'AMERIS BANCORP'],
[
'ticker' => 'ABCL','stock_name' => 'ABCELLERA BIOLOGICS INC'],
[
'ticker' => 'ABCM','stock_name' => 'ABCAM PLC-SPON ADR'],
[
'ticker' => 'ABEO','stock_name' => 'ABEONA THERAPEUTICS INC'],
[
'ticker' => 'ABEQ','stock_name' => 'ABSOLUTE CORE STRATEGY ETF'],
[
'ticker' => 'ABEV','stock_name' => 'AMBEV SA-ADR'],
[
'ticker' => 'ABG','stock_name' => 'ASBURY AUTOMOTIVE GROUP'],
[
'ticker' => 'ABGI','stock_name' => 'ABG ACQUISITION CORP I - A'],
[
'ticker' => 'ABIO','stock_name' => 'ARCA BIOPHARMA INC'],
[
'ticker' => 'ABM','stock_name' => 'ABM INDUSTRIES INC'],
[
'ticker' => 'ABMD','stock_name' => 'ABIOMED INC'],
[
'ticker' => 'ABNB','stock_name' => 'AIRBNB INC-CLASS A'],
[
'ticker' => 'ABOS','stock_name' => 'ACUMEN PHARMACEUTICALS INC'],
[
'ticker' => 'ABR','stock_name' => 'ARBOR REALTY TRUST INC'],
[
'ticker' => 'ABSI','stock_name' => 'ABSCI CORP'],
[
'ticker' => 'ABST','stock_name' => 'ABSOLUTE SOFTWARE CORPORATIO'],
[
'ticker' => 'ABT','stock_name' => 'ABBOTT LABORATORIES'],
[
'ticker' => 'ABTX','stock_name' => 'ALLEGIANCE BANCSHARES INC'],
[
'ticker' => 'ABUS','stock_name' => 'ARBUTUS BIOPHARMA CORP'],
[
'ticker' => 'ABVC','stock_name' => 'ABVC BIOPHARMA INC'],
[
'ticker' => 'AC','stock_name' => 'ASSOCIATED CAPITAL GROUP - A'],
[
'ticker' => 'ACA','stock_name' => 'ARCOSA INC'],
[
'ticker' => 'ACAD','stock_name' => 'ACADIA PHARMACEUTICALS INC'],
[
'ticker' => 'ACAH','stock_name' => 'ATLANTIC COASTAL ACQUISITI-A'],
[
'ticker' => 'ACAHU','stock_name' => 'ATLANTIC COASTAL ACQUISITION'],
[
'ticker' => 'ACAQ=','stock_name' => 'ATHENA CONSUMER ACQU CORP'],
[
'ticker' => 'ACB','stock_name' => 'AURORA CANNABIS INC'],
[
'ticker' => 'ACBA','stock_name' => 'ACE GLOBAL BUSINESS ACQUISIT'],
[
'ticker' => 'ACBAU','stock_name' => 'ACE GLOBAL BUSINESS ACQUISIT'],
[
'ticker' => 'ACBI','stock_name' => 'ATLANTIC CAPITAL BANCSHARES'],
[
'ticker' => 'ACC','stock_name' => 'AMERICAN CAMPUS COMMUNITIES'],
[
'ticker' => 'ACCD','stock_name' => 'ACCOLADE INC'],
[
'ticker' => 'ACCO','stock_name' => 'ACCO BRANDS CORP'],
[
'ticker' => 'ACEL','stock_name' => 'ACCEL ENTERTAINMENT INC'],
[
'ticker' => 'ACER','stock_name' => 'ACER THERAPEUTICS INC'],
[
'ticker' => 'ACES','stock_name' => 'ALPS CLEAN ENERGY ETF'],
[
'ticker' => 'ACET','stock_name' => 'ADICET BIO INC'],
[
'ticker' => 'ACEV','stock_name' => 'ACE CONVERGENCE ACQU-CLASS A'],
[
'ticker' => 'ACEVU','stock_name' => 'ACE CONVERGENCE ACQUISITION'],
[
'ticker' => 'ACGL','stock_name' => 'ARCH CAPITAL GROUP LTD'],
[
'ticker' => 'ACH','stock_name' => 'ALUMINUM CORP OF CHINA-ADR'],
[
'ticker' => 'ACHC','stock_name' => 'ACADIA HEALTHCARE CO INC'],
[
'ticker' => 'ACHL','stock_name' => 'ACHILLES THERAPEUTICS PL-ADR'],
[
'ticker' => 'ACHR','stock_name' => 'ARCHER AVIATION INC-A'],
[
'ticker' => 'ACHV','stock_name' => 'ACHIEVE LIFE SCIENCES INC'],
[
'ticker' => 'ACI','stock_name' => 'ALBERTSONS COS INC - CLASS A'],
[
'ticker' => 'ACII','stock_name' => 'ATLAS CREST INVESTMENT COR-A'],
[
'ticker' => 'ACII=','stock_name' => 'ATLAS CREST INVESTMENT CORP'],
[
'ticker' => 'ACIO','stock_name' => 'APTUS COLLARED INC OPP ETF'],
[
'ticker' => 'ACIU','stock_name' => 'AC IMMUNE SA'],
[
'ticker' => 'ACIW','stock_name' => 'ACI WORLDWIDE INC'],
[
'ticker' => 'ACKIT','stock_name' => 'ACKRELL SPAC PARTNERS-SUBUNI'],
[
'ticker' => 'ACKIU','stock_name' => 'ACKRELL SPAC PARTNERS I CO'],
[
'ticker' => 'ACLS','stock_name' => 'AXCELIS TECHNOLOGIES INC'],
[
'ticker' => 'ACM','stock_name' => 'AECOM'],
[
'ticker' => 'ACMR','stock_name' => 'ACM RESEARCH INC-CLASS A'],
[
'ticker' => 'ACN','stock_name' => 'ACCENTURE PLC-CL A'],
[
'ticker' => 'ACNB','stock_name' => 'ACNB CORP'],
[
'ticker' => 'ACOR','stock_name' => 'ACORDA THERAPEUTICS INC'],
[
'ticker' => 'ACP','stock_name' => 'ABERDEEN INCOME CREDIT STRAT'],
[
'ticker' => 'ACQR','stock_name' => 'INDEPENDENCE HDS CORP-CL A'],
[
'ticker' => 'ACQRU','stock_name' => 'INDEPENDENCE HOLDINGS CORP'],
[
'ticker' => 'ACR','stock_name' => 'ACRES COMMERCIAL REALTY CORP'],
[
'ticker' => 'ACRE','stock_name' => 'ARES COMMERCIAL REAL ESTATE'],
[
'ticker' => 'ACRO','stock_name' => 'ACROPOLIS INFRASTRUCTURE - A'],
[
'ticker' => 'ACRO=','stock_name' => 'ACROPOLIS INFRASTRUCTURE ACQ'],
[
'ticker' => 'ACRS','stock_name' => 'ACLARIS THERAPEUTICS INC'],
[
'ticker' => 'ACRX','stock_name' => 'ACELRX PHARMACEUTICALS INC'],
[
'ticker' => 'ACSI','stock_name' => 'AMERICAN CUSTOMER SATISFACTI'],
[
'ticker' => 'ACST','stock_name' => 'ACASTI PHARMA INC'],
[
'ticker' => 'ACT','stock_name' => 'ENACT HOLDINGS INC'],
[
'ticker' => 'ACTD','stock_name' => 'ARCLIGHT CLEAN TRANSITION -A'],
[
'ticker' => 'ACTDU','stock_name' => 'ARCLIGHT CLEAN TRANSITION II'],
[
'ticker' => 'ACTG','stock_name' => 'ACACIA RESEARCH CORP'],
[
'ticker' => 'ACTV','stock_name' => 'LEADERSHARES ACTIVIST LEADER'],
[
'ticker' => 'ACU','stock_name' => 'ACME UNITED CORP'],
[
'ticker' => 'ACV','stock_name' => 'VIRTUS ALLIANZGI DIV & INC'],
[
'ticker' => 'ACVA','stock_name' => 'ACV AUCTIONS INC-A'],
[
'ticker' => 'ACVF','stock_name' => 'AMERICAN CONSERVATIVE VALUES'],
[
'ticker' => 'ACWF','stock_name' => 'ISHARES MSCI GLOBAL MULTIFAC'],
[
'ticker' => 'ACWI','stock_name' => 'ISHARES MSCI ACWI ETF'],
[
'ticker' => 'ACWV','stock_name' => 'ISHARES MSCI GLOBAL MIN VOL'],
[
'ticker' => 'ACWX','stock_name' => 'ISHARES MSCI ACWI EX US ETF'],
[
'ticker' => 'ACXP','stock_name' => 'ACURX PHARMACEUTICALS INC'],
[
'ticker' => 'ACY','stock_name' => 'AEROCENTURY CORP'],
[
'ticker' => 'ADAG','stock_name' => 'ADAGENE INC-ADR'],
[
'ticker' => 'ADALU','stock_name' => 'ANTHEMIS DIGITAL ACQUISITION'],
[
'ticker' => 'ADAP','stock_name' => 'ADAPTIMMUNE THERAPEUTICS-ADR'],
[
'ticker' => 'ADBE','stock_name' => 'ADOBE INC'],
[
'ticker' => 'ADC','stock_name' => 'AGREE REALTY CORP'],
[
'ticker' => 'ADCT','stock_name' => 'ADC THERAPEUTICS SA'],
[
'ticker' => 'ADER','stock_name' => '26 CAPITAL ACQUISITION COR-A'],
[
'ticker' => 'ADERU','stock_name' => '26 CAPITAL ACQUISITION CORP'],
[
'ticker' => 'ADES','stock_name' => 'ADVANCED EMISSIONS SOLUTIONS'],
[
'ticker' => 'ADEX','stock_name' => 'ADIT EDTECH ACQUISITION'],
[
'ticker' => 'ADEX=','stock_name' => 'ADIT EDTECH ACQUISITION CORP'],
[
'ticker' => 'ADF','stock_name' => 'ALDEL FINANCIAL INC -CLASS A'],
[
'ticker' => 'ADF=','stock_name' => 'ALDEL FINANCIAL INC'],
[
'ticker' => 'ADFI','stock_name' => 'ANFIELD DYNAMIC FIXED INCOME'],
[
'ticker' => 'ADGI','stock_name' => 'ADAGIO THERAPEUTICS INC'],
[
'ticker' => 'ADI','stock_name' => 'ANALOG DEVICES INC'],
[
'ticker' => 'ADIL','stock_name' => 'ADIAL PHARMACEUTICALS INC'],
[
'ticker' => 'ADIV','stock_name' => 'SMARTETFS APAC DVD BUILDER'],
[
'ticker' => 'ADM','stock_name' => 'ARCHER-DANIELS-MIDLAND CO'],
[
'ticker' => 'ADMA','stock_name' => 'ADMA BIOLOGICS INC'],
[
'ticker' => 'ADME','stock_name' => 'APTUS DRAWDOWN MANAGED EQUIT'],
[
'ticker' => 'ADMP','stock_name' => 'ADAMIS PHARMACEUTICALS CORP'],
[
'ticker' => 'ADMS','stock_name' => 'ADAMAS PHARMACEUTICALS INC'],
[
'ticker' => 'ADN','stock_name' => 'ADVENT TECHNOLOGIES HOLDINGS'],
[
'ticker' => 'ADNT','stock_name' => 'ADIENT PLC'],
[
'ticker' => 'ADOC','stock_name' => 'EDOC ACQUISITION CORP-CL A'],
[
'ticker' => 'ADOCR','stock_name' => 'DOC ACQUISITION CORP-RIGHTS'],
[
'ticker' => 'ADP','stock_name' => 'AUTOMATIC DATA PROCESSING'],
[
'ticker' => 'ADPT','stock_name' => 'ADAPTIVE BIOTECHNOLOGIES'],
[
'ticker' => 'ADRA','stock_name' => 'ADARA ACQUISITION CORP-CL A'],
[
'ticker' => 'ADRA=','stock_name' => 'ADARA ACQUISITION CORP'],
[
'ticker' => 'ADRE','stock_name' => 'INVESCO BLDRS EMERGING MARKE'],
[
'ticker' => 'ADS','stock_name' => 'ALLIANCE DATA SYSTEMS CORP'],
[
'ticker' => 'ADS#','stock_name' => 'ALLIANCE DATA SYSTEMS CO-W/I'],
[
'ticker' => 'ADSK','stock_name' => 'AUTODESK INC'],
[
'ticker' => 'ADT','stock_name' => 'ADT INC'],
[
'ticker' => 'ADTN','stock_name' => 'ADTRAN INC'],
[
'ticker' => 'ADTX','stock_name' => 'ADITXT INC'],
[
'ticker' => 'ADUS','stock_name' => 'ADDUS HOMECARE CORP'],
[
'ticker' => 'ADV','stock_name' => 'ADVANTAGE SOLUTIONS INC'],
[
'ticker' => 'ADVM','stock_name' => 'ADVERUM BIOTECHNOLOGIES INC'],
[
'ticker' => 'ADX','stock_name' => 'ADAMS DIVERSIFIED EQUITY'],
[
'ticker' => 'ADXN','stock_name' => 'ADDEX THERAPEUTICS LTD'],
[
'ticker' => 'ADXS','stock_name' => 'ADVAXIS INC'],
[
'ticker' => 'AE','stock_name' => 'ADAMS RESOURCES & ENERGY INC'],
[
'ticker' => 'AEAC','stock_name' => 'AUTHENTIC EQUITY ACQUISITI-A'],
[
'ticker' => 'AEACU','stock_name' => 'AUTHENTIC EQUITY ACQUISITION'],
[
'ticker' => 'AEAEU','stock_name' => 'ALTENERGY ACQUISITION CORP'],
[
'ticker' => 'AEE','stock_name' => 'AMEREN CORPORATION'],
[
'ticker' => 'AEF','stock_name' => 'ABERDEEN EM MRKT EQTY INC'],
[
'ticker' => 'AEG','stock_name' => 'AEGON N.V.-NY REG SHR'],
[
'ticker' => 'AEHAU','stock_name' => 'AESTHER HEALTHCARE ACQUISITI'],
[
'ticker' => 'AEHL','stock_name' => 'ANTELOPE ENTERPRISE HOLDINGS'],
[
'ticker' => 'AEHR','stock_name' => 'AEHR TEST SYSTEMS'],
[
'ticker' => 'AEI','stock_name' => 'ALSET EHOME INTERNATIONAL IN'],
[
'ticker' => 'AEIS','stock_name' => 'ADVANCED ENERGY INDUSTRIES'],
[
'ticker' => 'AEL','stock_name' => 'AMERICAN EQUITY INVT LIFE HL'],
[
'ticker' => 'AEM','stock_name' => 'AGNICO EAGLE MINES LTD'],
[
'ticker' => 'AEMB','stock_name' => 'AMERICAN CENT EMERG MARK BND'],
[
'ticker' => 'AEMD','stock_name' => 'AETHLON MEDICAL INC'],
[
'ticker' => 'AENZ','stock_name' => 'AENZA SAA-SPON ADR'],
[
'ticker' => 'AEO','stock_name' => 'AMERICAN EAGLE OUTFITTERS'],
[
'ticker' => 'AEON','stock_name' => 'AEON BIOPHARMA INC'],
[
'ticker' => 'AEP','stock_name' => 'AMERICAN ELECTRIC POWER'],
[
'ticker' => 'AER','stock_name' => 'AERCAP HOLDINGS NV'],
[
'ticker' => 'AERI','stock_name' => 'AERIE PHARMACEUTICALS INC'],
[
'ticker' => 'AES','stock_name' => 'AES CORP'],
[
'ticker' => 'AESE','stock_name' => 'ALLIED ESPORTS ENTERTAINMENT'],
[
'ticker' => 'AESR','stock_name' => 'ANFIELD US EQUITY SECTOR ROT'],
[
'ticker' => 'AEVA','stock_name' => 'AEVA TECHNOLOGIES INC'],
[
'ticker' => 'AEY','stock_name' => 'ADDVANTAGE TECHNOLOGIES GRP'],
[
'ticker' => 'AEYE','stock_name' => 'AUDIOEYE INC'],
[
'ticker' => 'AEZS','stock_name' => 'AETERNA ZENTARIS INC'],
[
'ticker' => 'AFAQ','stock_name' => 'AF ACQUISITION CORP-CLASS A'],
[
'ticker' => 'AFAQU','stock_name' => 'AF ACQUISITION CORP'],
[
'ticker' => 'AFB','stock_name' => 'ALLIANCE NATIONAL MUNI INC'],
[
'ticker' => 'AFBI','stock_name' => 'AFFINITY BANCSHARES INC'],
[
'ticker' => 'AFCG','stock_name' => 'AFC GAMMA INC'],
[
'ticker' => 'AFG','stock_name' => 'AMERICAN FINANCIAL GROUP INC'],
[
'ticker' => 'AFI','stock_name' => 'ARMSTRONG FLOORING INC'],
[
'ticker' => 'AFIB','stock_name' => 'ACUTUS MEDICAL INC'],
[
'ticker' => 'AFIF','stock_name' => 'ANFIELD UNIVERSAL FIXED INCO'],
[
'ticker' => 'AFIN','stock_name' => 'AMERICAN FINANCE TRUST INC'],
[
'ticker' => 'AFK','stock_name' => 'VANECK AFRICA INDEX ETF'],
[
'ticker' => 'AFL','stock_name' => 'AFLAC INC'],
[
'ticker' => 'AFLG','stock_name' => 'FIRST TRUST ACTIVE FACTOR LA'],
[
'ticker' => 'AFMC','stock_name' => 'FIRST TRUST ACTIVE FACTOR MI'],
[
'ticker' => 'AFMD','stock_name' => 'AFFIMED NV'],
[
'ticker' => 'AFRM','stock_name' => 'AFFIRM HOLDINGS INC'],
[
'ticker' => 'AFSM','stock_name' => 'FIRST TRUST ACTIVE FACTOR SM'],
[
'ticker' => 'AFT','stock_name' => 'APOLLO SENIOR FLOATING RATE'],
[
'ticker' => 'AFTR','stock_name' => 'AFTERNEXT HEALTHTECH ACQUI-A'],
[
'ticker' => 'AFTR=','stock_name' => 'AFTERNEXT HEALTHTECH ACQUISI'],
[
'ticker' => 'AFTY','stock_name' => 'PACER CSOP FTSE CHINA A50 ET'],
[
'ticker' => 'AFYA','stock_name' => 'AFYA LTD-CLASS A'],
[
'ticker' => 'AG','stock_name' => 'FIRST MAJESTIC SILVER CORP'],
[
'ticker' => 'AGAC','stock_name' => 'AFRICAN GOLD ACQUISITION C-A'],
[
'ticker' => 'AGAC=','stock_name' => 'AFRICAN GOLD ACQUISITION COR'],
[
'ticker' => 'AGBA','stock_name' => 'AGBA ACQUISITION LTD'],
[
'ticker' => 'AGBAR','stock_name' => 'AGBA ACQUISITION LTD-RIGHTS'],
[
'ticker' => 'AGBAU','stock_name' => 'AGBA ACQUISITION LTD'],
[
'ticker' => 'AGC','stock_name' => 'ALTIMETER GROWTH CORP-CL A'],
[
'ticker' => 'AGCB','stock_name' => 'ALTIMETER GROWTH CORP 2-A'],
[
'ticker' => 'AGCO','stock_name' => 'AGCO CORP'],
[
'ticker' => 'AGCUU','stock_name' => 'ALTIMETER GROWTH CORP'],
[
'ticker' => 'AGD','stock_name' => 'ABERDEEN GLBL DYN DIVID'],
[
'ticker' => 'AGE','stock_name' => 'AGEX THERAPEUTICS INC'],
[
'ticker' => 'AGEN','stock_name' => 'AGENUS INC'],
[
'ticker' => 'AGFS','stock_name' => 'AGROFRESH SOLUTIONS INC'],
[
'ticker' => 'AGFY','stock_name' => 'AGRIFY CORP'],
[
'ticker' => 'AGG','stock_name' => 'ISHARES CORE U.S. AGGREGATE'],
[
'ticker' => 'AGGR','stock_name' => 'AGILE GROWTH CORP-A'],
[
'ticker' => 'AGGRU','stock_name' => 'AGILE GROWTH CORP'],
[
'ticker' => 'AGGY','stock_name' => 'WISDOMTREE YIELD ENHANCED US'],
[
'ticker' => 'AGI','stock_name' => 'ALAMOS GOLD INC-CLASS A'],
[
'ticker' => 'AGIL','stock_name' => 'AGILETHOUGHT INC'],
[
'ticker' => 'AGIO','stock_name' => 'AGIOS PHARMACEUTICALS INC'],
[
'ticker' => 'AGL','stock_name' => 'AGILON HEALTH INC'],
[
'ticker' => 'AGLE','stock_name' => 'AEGLEA BIOTHERAPEUTICS INC'],
[
'ticker' => 'AGM','stock_name' => 'FEDERAL AGRIC MTG CORP-CL C'],
[
'ticker' => 'AGM.A','stock_name' => 'FEDERAL AGRIC MTG CORP-CL A'],
[
'ticker' => 'AGMH','stock_name' => 'AGM GROUP HOLDINGS INC'],
[
'ticker' => 'AGNC','stock_name' => 'AGNC INVESTMENT CORP'],
[
'ticker' => 'AGNG','stock_name' => 'GLB X AGING POPULATION ETF'],
[
'ticker' => 'AGO','stock_name' => 'ASSURED GUARANTY LTD'],
[
'ticker' => 'AGOV','stock_name' => 'GAVEKAL ASIA PACIFIC GOVERNM'],
[
'ticker' => 'AGOX','stock_name' => 'ADAPTIVE ALPHA OPPORTUNITIES'],
[
'ticker' => 'AGQ','stock_name' => 'PROSHARES ULTRA SILVER'],
[
'ticker' => 'AGR','stock_name' => 'AVANGRID INC'],
[
'ticker' => 'AGRI','stock_name' => 'AGRIFORCE GROWING SYSTEMS LT'],
[
'ticker' => 'AGRO','stock_name' => 'ADECOAGRO SA'],
[
'ticker' => 'AGRX','stock_name' => 'AGILE THERAPEUTICS INC'],
[
'ticker' => 'AGS','stock_name' => 'PLAYAGS INC'],
[
'ticker' => 'AGT','stock_name' => 'ISHARES ARGENTINA'],
[
'ticker' => 'AGTC','stock_name' => 'APPLIED GENETIC TECHNOLOGIES'],
[
'ticker' => 'AGTI','stock_name' => 'AGILITI INC'],
[
'ticker' => 'AGX','stock_name' => 'ARGAN INC'],
[
'ticker' => 'AGYS','stock_name' => 'AGILYSYS INC'],
[
'ticker' => 'AGZ','stock_name' => 'ISHARES AGENCY BOND ETF'],
[
'ticker' => 'AGZD','stock_name' => 'WISDOMTREE TRUST WISDOMTREE'],
[
'ticker' => 'AHCO','stock_name' => 'ADAPTHEALTH CORP'],
[
'ticker' => 'AHH','stock_name' => 'ARMADA HOFFLER PROPERTIES IN'],
[
'ticker' => 'AHPA','stock_name' => 'AVISTA PUBLIC ACQUIS-CLASS A'],
[
'ticker' => 'AHPAU','stock_name' => 'AVISTA PUBLIC ACQUISITION CO'],
[
'ticker' => 'AHPI','stock_name' => 'ALLIED HEALTHCARE PRODUCTS'],
[
'ticker' => 'AHT','stock_name' => 'ASHFORD HOSPITALITY TRUST'],
[
'ticker' => 'AI','stock_name' => 'C3.AI INC-A'],
[
'ticker' => 'AIA','stock_name' => 'ISHARES ASIA 50 ETF'],
[
'ticker' => 'AIEQ','stock_name' => 'AI POWERED EQUITY ETF'],
[
'ticker' => 'AIF','stock_name' => 'APOLLO TACTICAL INCOME FUND'],
[
'ticker' => 'AIG','stock_name' => 'AMERICAN INTERNATIONAL GROUP'],
[
'ticker' => 'AIH','stock_name' => 'AESTHETIC MEDICAL INTERN-ADR'],
[
'ticker' => 'AIHS','stock_name' => 'SENMIAO TECHNOLOGY LTD'],
[
'ticker' => 'AIIQ','stock_name' => 'AI POWERED INTERNATIONAL EQU'],
[
'ticker' => 'AIKI','stock_name' => 'AIKIDO PHARMA INC'],
[
'ticker' => 'AIM','stock_name' => 'AIM IMMUNOTECH INC'],
[
'ticker' => 'AIMC','stock_name' => 'ALTRA INDUSTRIAL MOTION CORP'],
[
'ticker' => 'AIN','stock_name' => 'ALBANY INTL CORP-CL A'],
[
'ticker' => 'AINC','stock_name' => 'ASHFORD INC'],
[
'ticker' => 'AINV','stock_name' => 'APOLLO INVESTMENT CORP'],
[
'ticker' => 'AIO','stock_name' => 'VIRTUS ALLIANZGI ART INTEL'],
[
'ticker' => 'AIP','stock_name' => 'ARTERIS INC'],
[
'ticker' => 'AIQ','stock_name' => 'GLOBAL X ART INTEL & TECH'],
[
'ticker' => 'AIR','stock_name' => 'AAR CORP'],
[
'ticker' => 'AIRC','stock_name' => 'APARTMENT INCOME REIT CO'],
[
'ticker' => 'AIRG','stock_name' => 'AIRGAIN INC'],
[
'ticker' => 'AIRI','stock_name' => 'AIR INDUSTRIES GROUP'],
[
'ticker' => 'AIRR','stock_name' => 'FIRST TRUST RBA AMERICAN IND'],
[
'ticker' => 'AIRS','stock_name' => 'AIRSCULPT TECHNOLOGIES INC'],
[
'ticker' => 'AIRT','stock_name' => 'AIR T INC'],
[
'ticker' => 'AIT','stock_name' => 'APPLIED INDUSTRIAL TECH INC'],
[
'ticker' => 'AIV','stock_name' => 'APARTMENT INVT & MGMT CO -A'],
[
'ticker' => 'AIZ','stock_name' => 'ASSURANT INC'],
[
'ticker' => 'AJG','stock_name' => 'ARTHUR J GALLAGHER & CO'],
[
'ticker' => 'AJRD','stock_name' => 'AEROJET ROCKETDYNE HOLDINGS'],
[
'ticker' => 'AJX','stock_name' => 'GREAT AJAX CORP'],
[
'ticker' => 'AKA','stock_name' => 'AKA BRANDS HOLDING CORP'],
[
'ticker' => 'AKAM','stock_name' => 'AKAMAI TECHNOLOGIES INC'],
[
'ticker' => 'AKBA','stock_name' => 'AKEBIA THERAPEUTICS INC'],
[
'ticker' => 'AKIC','stock_name' => 'SPORTS VENTURES ACQUISITIO-A'],
[
'ticker' => 'AKICU','stock_name' => 'SPORTS VENTURES ACQUISITION'],
[
'ticker' => 'AKO.A','stock_name' => 'EMBOTELLADORA ANDINA-ADR A'],
[
'ticker' => 'AKO.B','stock_name' => 'EMBOTELLADORA ANDINA-ADR B'],
[
'ticker' => 'AKR','stock_name' => 'ACADIA REALTY TRUST'],
[
'ticker' => 'AKRO','stock_name' => 'AKERO THERAPEUTICS INC'],
[
'ticker' => 'AKTS','stock_name' => 'AKOUSTIS TECHNOLOGIES INC'],
[
'ticker' => 'AKTX','stock_name' => 'AKARI THERAPEUTICS PLC-ADR'],
[
'ticker' => 'AKU','stock_name' => 'AKUMIN INC'],
[
'ticker' => 'AKUS','stock_name' => 'AKOUOS INC'],
[
'ticker' => 'AKYA','stock_name' => 'AKOYA BIOSCIENCES INC'],
[
'ticker' => 'AL','stock_name' => 'AIR LEASE CORP'],
[
'ticker' => 'ALAC','stock_name' => 'ALBERTON ACQUISITION CORP'],
[
'ticker' => 'ALACR','stock_name' => 'ALBERTON ACQUISITION CO-RTS'],
[
'ticker' => 'ALACU','stock_name' => 'ALBERTON ACQUISITION CORP'],
[
'ticker' => 'ALB','stock_name' => 'ALBEMARLE CORP'],
[
'ticker' => 'ALBO','stock_name' => 'ALBIREO PHARMA INC'],
[
'ticker' => 'ALC','stock_name' => 'ALCON INC'],
[
'ticker' => 'ALCC','stock_name' => 'ALTC ACQUISITION CORP-CL A'],
[
'ticker' => 'ALCO','stock_name' => 'ALICO INC'],
[
'ticker' => 'ALDX','stock_name' => 'ALDEYRA THERAPEUTICS INC'],
[
'ticker' => 'ALE','stock_name' => 'ALLETE INC'],
[
'ticker' => 'ALEC','stock_name' => 'ALECTOR INC'],
[
'ticker' => 'ALEX','stock_name' => 'ALEXANDER & BALDWIN INC'],
[
'ticker' => 'ALF','stock_name' => 'ALFI INC'],
[
'ticker' => 'ALFA','stock_name' => 'ALPHACLONE ALTERNATIVE ALPHA'],
[
'ticker' => 'ALG','stock_name' => 'ALAMO GROUP INC'],
[
'ticker' => 'ALGM','stock_name' => 'ALLEGRO MICROSYSTEMS INC'],
[
'ticker' => 'ALGN','stock_name' => 'ALIGN TECHNOLOGY INC'],
[
'ticker' => 'ALGS','stock_name' => 'ALIGOS THERAPEUTICS INC'],
[
'ticker' => 'ALGT','stock_name' => 'ALLEGIANT TRAVEL CO'],
[
'ticker' => 'ALHC','stock_name' => 'ALIGNMENT HEALTHCARE INC'],
[
'ticker' => 'ALIM','stock_name' => 'ALIMERA SCIENCES INC'],
[
'ticker' => 'ALIT','stock_name' => 'ALIGHT INC - CLASS A'],
[
'ticker' => 'ALJJ','stock_name' => 'ALJ REGIONAL HOLDINGS INC'],
[
'ticker' => 'ALK','stock_name' => 'ALASKA AIR GROUP INC'],
[
'ticker' => 'ALKS','stock_name' => 'ALKERMES PLC'],
[
'ticker' => 'ALKT','stock_name' => 'ALKAMI TECHNOLOGY INC'],
[
'ticker' => 'ALL','stock_name' => 'ALLSTATE CORP'],
[
'ticker' => 'ALLE','stock_name' => 'ALLEGION PLC'],
[
'ticker' => 'ALLK','stock_name' => 'ALLAKOS INC'],
[
'ticker' => 'ALLO','stock_name' => 'ALLOGENE THERAPEUTICS INC'],
[
'ticker' => 'ALLT','stock_name' => 'ALLOT LTD'],
[
'ticker' => 'ALLY','stock_name' => 'ALLY FINANCIAL INC'],
[
'ticker' => 'ALNA','stock_name' => 'ALLENA PHARMACEUTICALS INC'],
[
'ticker' => 'ALNY','stock_name' => 'ALNYLAM PHARMACEUTICALS INC'],
[
'ticker' => 'ALOT','stock_name' => 'ASTRONOVA INC'],
[
'ticker' => 'ALPA','stock_name' => 'ALPHA HEALTHCARE ACQUISITI-A'],
[
'ticker' => 'ALPAU','stock_name' => 'ALPHA HEALTHCARE ACQUISITION'],
[
'ticker' => 'ALPN','stock_name' => 'ALPINE IMMUNE SCIENCES INC'],
[
'ticker' => 'ALPP','stock_name' => 'ALPINE 4 HOLDINGS INC'],
[
'ticker' => 'ALRM','stock_name' => 'ALARM.COM HOLDINGS INC'],
[
'ticker' => 'ALRN','stock_name' => 'AILERON THERAPEUTICS INC'],
[
'ticker' => 'ALRS','stock_name' => 'ALERUS FINANCIAL CORP'],
[
'ticker' => 'ALSN','stock_name' => 'ALLISON TRANSMISSION HOLDING'],
[
'ticker' => 'ALT','stock_name' => 'ALTIMMUNE INC'],
[
'ticker' => 'ALTG','stock_name' => 'ALTA EQUIPMENT GROUP INC'],
[
'ticker' => 'ALTL','stock_name' => 'PACER LUNT LARGE CAP ALTERNA'],
[
'ticker' => 'ALTM','stock_name' => 'ALTUS MIDSTREAM CO -A'],
[
'ticker' => 'ALTO','stock_name' => 'ALTO INGREDIENTS INC'],
[
'ticker' => 'ALTR','stock_name' => 'ALTAIR ENGINEERING INC - A'],
[
'ticker' => 'ALTS','stock_name' => 'PRSHR MRNGSTR ALT SOL ETF'],
[
'ticker' => 'ALTU','stock_name' => 'ALTITUDE ACQUISITION CORP-A'],
[
'ticker' => 'ALTUU','stock_name' => 'ALTITUDE ACQUISITION CORP'],
[
'ticker' => 'ALTY','stock_name' => 'GLOBAL X ALTERNATIVE INCOME'],
[
'ticker' => 'ALV','stock_name' => 'AUTOLIV INC'],
[
'ticker' => 'ALVR','stock_name' => 'ALLOVIR INC'],
[
'ticker' => 'ALX','stock_name' => 'ALEXANDER\'S INC'],
[
'ticker' => 'ALXO','stock_name' => 'ALX ONCOLOGY HOLDINGS INC'],
[
'ticker' => 'ALYA','stock_name' => 'ALITHYA GROUP INC-CLASS A'],
[
'ticker' => 'ALZN','stock_name' => 'ALZAMEND NEURO INC'],
[
'ticker' => 'AM','stock_name' => 'ANTERO MIDSTREAM CORP'],
[
'ticker' => 'AMAL','stock_name' => 'AMALGAMATED FINANCIAL CORP'],
[
'ticker' => 'AMAM','stock_name' => 'AMBRX BIOPHARMA INC-ADR'],
[
'ticker' => 'AMAO','stock_name' => 'AMERICAN ACQUISITION OP-CL A'],
[
'ticker' => 'AMAOU','stock_name' => 'AMERICAN ACQUISITION OPPORTU'],
[
'ticker' => 'AMAT','stock_name' => 'APPLIED MATERIALS INC'],
[
'ticker' => 'AMBA','stock_name' => 'AMBARELLA INC'],
[
'ticker' => 'AMBC','stock_name' => 'AMBAC FINANCIAL GROUP INC'],
[
'ticker' => 'AMBO','stock_name' => 'AMBOW EDUCATION HOLDING-ADR'],
[
'ticker' => 'AMBP','stock_name' => 'ARDAGH METAL PACKAGING SA'],
[
'ticker' => 'AMC','stock_name' => 'AMC ENTERTAINMENT HLDS-CL A'],
[
'ticker' => 'AMCI','stock_name' => 'AMCI ACQUISITION CORP II-A'],
[
'ticker' => 'AMCIU','stock_name' => 'AMCI ACQUISITION CORP II'],
[
'ticker' => 'AMCR','stock_name' => 'AMCOR PLC'],
[
'ticker' => 'AMCX','stock_name' => 'AMC NETWORKS INC-A'],
[
'ticker' => 'AMD','stock_name' => 'ADVANCED MICRO DEVICES'],
[
'ticker' => 'AME','stock_name' => 'AMETEK INC'],
[
'ticker' => 'AMED','stock_name' => 'AMEDISYS INC'],
[
'ticker' => 'AMEH','stock_name' => 'APOLLO MEDICAL HOLDINGS INC'],
[
'ticker' => 'AMER','stock_name' => 'EMLES MADE IN AMERICA ETF'],
[
'ticker' => 'AMG','stock_name' => 'AFFILIATED MANAGERS GROUP'],
[
'ticker' => 'AMGN','stock_name' => 'AMGEN INC'],
[
'ticker' => 'AMH','stock_name' => 'AMERICAN HOMES 4 RENT- A'],
[
'ticker' => 'AMJ','stock_name' => 'JPMORGAN ALERIAN MLP INDEX'],
[
'ticker' => 'AMK','stock_name' => 'ASSETMARK FINANCIAL HOLDINGS'],
[
'ticker' => 'AMKR','stock_name' => 'AMKOR TECHNOLOGY INC'],
[
'ticker' => 'AMLP','stock_name' => 'ALERIAN MLP ETF'],
[
'ticker' => 'AMN','stock_name' => 'AMN HEALTHCARE SERVICES INC'],
[
'ticker' => 'AMNA','stock_name' => 'ETRACS ALERIAN MIDSTREAM ENE'],
[
'ticker' => 'AMNB','stock_name' => 'AMER NATL BNKSHS/DANVILLE VA'],
[
'ticker' => 'AMND','stock_name' => 'ETRACS ALERIAN MIDST H/DV EN'],
[
'ticker' => 'AMOM','stock_name' => 'QRAFT AI-ENH US LRG CAP MTM'],
[
'ticker' => 'AMOT','stock_name' => 'ALLIED MOTION TECHNOLOGIES'],
[
'ticker' => 'AMOV','stock_name' => 'AMERICA MOVIL-ADR SERIES A'],
[
'ticker' => 'AMP','stock_name' => 'AMERIPRISE FINANCIAL INC'],
[
'ticker' => 'AMPE','stock_name' => 'AMPIO PHARMACEUTICALS INC'],
[
'ticker' => 'AMPG','stock_name' => 'AMPLITECH GROUP INC'],
[
'ticker' => 'AMPH','stock_name' => 'AMPHASTAR PHARMACEUTICALS IN'],
[
'ticker' => 'AMPI','stock_name' => 'ADVANCED MERGER PARTNERS I-A'],
[
'ticker' => 'AMPI=','stock_name' => 'ADVANCED MERGER PARTNERS INC'],
[
'ticker' => 'AMPL','stock_name' => 'AMPLITUDE INC-CLASS A'],
[
'ticker' => 'AMPY','stock_name' => 'AMPLIFY ENERGY CORP'],
[
'ticker' => 'AMR','stock_name' => 'ALPHA METALLURGICAL RESOURCE'],
[
'ticker' => 'AMRC','stock_name' => 'AMERESCO INC-CL A'],
[
'ticker' => 'AMRK','stock_name' => 'A-MARK PRECIOUS METALS INC'],
[
'ticker' => 'AMRN','stock_name' => 'AMARIN CORP PLC -ADR'],
[
'ticker' => 'AMRS','stock_name' => 'AMYRIS INC'],
[
'ticker' => 'AMRX','stock_name' => 'AMNEAL PHARMACEUTICALS INC'],
[
'ticker' => 'AMS','stock_name' => 'AMERICAN SHARED HOSPITAL SER'],
[
'ticker' => 'AMSC','stock_name' => 'AMERICAN SUPERCONDUCTOR CORP'],
[
'ticker' => 'AMSF','stock_name' => 'AMERISAFE INC'],
[
'ticker' => 'AMST','stock_name' => 'AMESITE INC'],
[
'ticker' => 'AMSWA','stock_name' => 'AMERICAN SOFTWARE INC-CL A'],
[
'ticker' => 'AMT','stock_name' => 'AMERICAN TOWER CORP'],
[
'ticker' => 'AMTB','stock_name' => 'AMERANT BANCORP INC'],
[
'ticker' => 'AMTBB','stock_name' => 'AMERANT BANCORP INC - B'],
[
'ticker' => 'AMTI','stock_name' => 'APPLIED MOLECULAR TRANSPORT'],
[
'ticker' => 'AMTR','stock_name' => 'ETRACS ALERIAN MDSTR ENER TR'],
[
'ticker' => 'AMTX','stock_name' => 'AEMETIS INC'],
[
'ticker' => 'AMUB','stock_name' => 'ETRACS ALERIAN MLP IND SER B'],
[
'ticker' => 'AMWD','stock_name' => 'AMERICAN WOODMARK CORP'],
[
'ticker' => 'AMWL','stock_name' => 'AMERICAN WELL CORP-CLASS A'],
[
'ticker' => 'AMX','stock_name' => 'AMERICA MOVIL-SPN ADR CL L'],
[
'ticker' => 'AMYT','stock_name' => 'AMRYT PHARMA PLC - SPNR ADR'],
[
'ticker' => 'AMZA','stock_name' => 'INFRACAP MLP ETF'],
[
'ticker' => 'AMZN','stock_name' => 'AMAZON.COM INC'],
[
'ticker' => 'AN','stock_name' => 'AUTONATION INC'],
[
'ticker' => 'ANAB','stock_name' => 'ANAPTYSBIO INC'],
[
'ticker' => 'ANAC','stock_name' => 'ARCTOS NORTHSTAR ACQUISIT-A'],
[
'ticker' => 'ANAC=','stock_name' => 'ARCTOS NORTHSTAR ACQUISITION'],
[
'ticker' => 'ANAT','stock_name' => 'AMERICAN NATIONAL GROUP INC'],
[
'ticker' => 'ANDE','stock_name' => 'ANDERSONS INC/THE'],
[
'ticker' => 'ANEB','stock_name' => 'ANEBULO PHARMACEUTICALS INC'],
[
'ticker' => 'ANET','stock_name' => 'ARISTA NETWORKS INC'],
[
'ticker' => 'ANEW','stock_name' => 'PROSHARES MSCI TRANSFORM CHG'],
[
'ticker' => 'ANF','stock_name' => 'ABERCROMBIE & FITCH CO-CL A'],
[
'ticker' => 'ANGI','stock_name' => 'ANGI INC'],
[
'ticker' => 'ANGL','stock_name' => 'VANECK FALLEN ANGEL HIGH YLD'],
[
'ticker' => 'ANGN','stock_name' => 'ANGION BIOMEDICA CORP'],
[
'ticker' => 'ANGO','stock_name' => 'ANGIODYNAMICS INC'],
[
'ticker' => 'ANIK','stock_name' => 'ANIKA THERAPEUTICS INC'],
[
'ticker' => 'ANIP','stock_name' => 'ANI PHARMACEUTICALS INC'],
[
'ticker' => 'ANIX','stock_name' => 'ANIXA BIOSCIENCES INC'],
[
'ticker' => 'ANNX','stock_name' => 'ANNEXON INC'],
[
'ticker' => 'ANPC','stock_name' => 'ANPAC BIO-MEDICAL SCIENC-ADR'],
[
'ticker' => 'ANSS','stock_name' => 'ANSYS INC'],
[
'ticker' => 'ANTE','stock_name' => 'AIRNET TECHNOLOGY INC-ADR'],
[
'ticker' => 'ANTM','stock_name' => 'ANTHEM INC'],
[
'ticker' => 'ANVS','stock_name' => 'ANNOVIS BIO'],
[
'ticker' => 'ANY','stock_name' => 'SPHERE 3D CORP'],
[
'ticker' => 'ANZU','stock_name' => 'ANZU SPECIAL ACQUISITION -A'],
[
'ticker' => 'ANZUU','stock_name' => 'ANZU SPECIAL ACQUISITION COR'],
[
'ticker' => 'AOA','stock_name' => 'ISHARES CORE AGGRESSIVE ALLO'],
[
'ticker' => 'AOD','stock_name' => 'ABERDEEN TTL DYN DIVID'],
[
'ticker' => 'AOK','stock_name' => 'ISHARES CORE CONSERVATIVE AL'],
[
'ticker' => 'AOM','stock_name' => 'ISHARES CORE MODERATE ALLOCA'],
[
'ticker' => 'AOMR','stock_name' => 'ANGEL OAK MORTGAGE INC'],
[
'ticker' => 'AON','stock_name' => 'AON PLC-CLASS A'],
[
'ticker' => 'AOR','stock_name' => 'ISHARES CORE GROWTH ALLOCATI'],
[
'ticker' => 'AOS','stock_name' => 'SMITH (A.O.) CORP'],
[
'ticker' => 'AOSL','stock_name' => 'ALPHA & OMEGA SEMICONDUCTOR'],
[
'ticker' => 'AOUT','stock_name' => 'AMERICAN OUTDOOR BRANDS INC'],
[
'ticker' => 'AP','stock_name' => 'AMPCO-PITTSBURGH CORP'],
[
'ticker' => 'APA','stock_name' => 'APA CORP'],
[
'ticker' => 'APAC','stock_name' => 'STONEBRIDGE ACQUISITION CORP'],
[
'ticker' => 'APACU','stock_name' => 'STONEBRIDGE ACQUISITION CORP'],
[
'ticker' => 'APAM','stock_name' => 'ARTISAN PARTNERS ASSET MA -A'],
[
'ticker' => 'APD','stock_name' => 'AIR PRODUCTS & CHEMICALS INC'],
[
'ticker' => 'APDN','stock_name' => 'APPLIED DNA SCIENCES INC'],
[
'ticker' => 'APEI','stock_name' => 'AMERICAN PUBLIC EDUCATION'],
[
'ticker' => 'APEN','stock_name' => 'APOLLO ENDOSURGERY INC'],
[
'ticker' => 'APG','stock_name' => 'API GROUP CORP'],
[
'ticker' => 'APGB','stock_name' => 'APOLLO STRATEGIC GROWTH-CL A'],
[
'ticker' => 'APGB=','stock_name' => 'APOLLO STRATEGIC GROWTH CAPI'],
[
'ticker' => 'APH','stock_name' => 'AMPHENOL CORP-CL A'],
[
'ticker' => 'API','stock_name' => 'AGORA INC-ADR'],
[
'ticker' => 'APLE','stock_name' => 'APPLE HOSPITALITY REIT INC'],
[
'ticker' => 'APLS','stock_name' => 'APELLIS PHARMACEUTICALS INC'],
[
'ticker' => 'APLT','stock_name' => 'APPLIED THERAPEUTICS INC'],
[
'ticker' => 'APM','stock_name' => 'APTORUM GROUP LTD-CLASS A'],
[
'ticker' => 'APMI','stock_name' => 'AXONPRIME INFRASTRUCTURE-A'],
[
'ticker' => 'APMIU','stock_name' => 'AXON INFRASTRUCTURE ACQUISI'],
[
'ticker' => 'APO','stock_name' => 'APOLLO GLOBAL MANAGEMENT INC'],
[
'ticker' => 'APOG','stock_name' => 'APOGEE ENTERPRISES INC'],
[
'ticker' => 'APP','stock_name' => 'APPLOVIN CORP-CLASS A'],
[
'ticker' => 'APPF','stock_name' => 'APPFOLIO INC - A'],
[
'ticker' => 'APPH','stock_name' => 'APPHARVEST INC'],
[
'ticker' => 'APPN','stock_name' => 'APPIAN CORP'],
[
'ticker' => 'APPS','stock_name' => 'DIGITAL TURBINE INC'],
[
'ticker' => 'APR','stock_name' => 'APRIA INC'],
[
'ticker' => 'APRE','stock_name' => 'APREA THERAPEUTICS INC'],
[
'ticker' => 'APRN','stock_name' => 'BLUE APRON HOLDINGS INC-A'],
[
'ticker' => 'APRZ','stock_name' => 'TRUESHARES STR OUTCOME APRIL'],
[
'ticker' => 'APSG','stock_name' => 'APOLLO STRATEGIC GROWTH-CL A'],
[
'ticker' => 'APSG=','stock_name' => 'APOLLO STRATEGIC GROWTH CAPI'],
[
'ticker' => 'APT','stock_name' => 'ALPHA PRO TECH LTD'],
[
'ticker' => 'APTM','stock_name' => 'ALPHA PARTNERS TECHNOLOGY-A'],
[
'ticker' => 'APTMU','stock_name' => 'ALPHA PARTNERS TECHNOLOGY ME'],
[
'ticker' => 'APTO','stock_name' => 'APTOSE BIOSCIENCES INC'],
[
'ticker' => 'APTS','stock_name' => 'PREFERRED APARTMENT COMMUNIT'],
[
'ticker' => 'APTV','stock_name' => 'APTIV PLC'],
[
'ticker' => 'APTX','stock_name' => 'APTINYX INC'],
[
'ticker' => 'APVO','stock_name' => 'APTEVO THERAPEUTICS INC'],
[
'ticker' => 'APWC','stock_name' => 'ASIA PACIFIC WIRE & CABLE'],
[
'ticker' => 'APXH','stock_name' => 'APEX HEALTHCARE ETF'],
[
'ticker' => 'APYX','stock_name' => 'APYX MEDICAL CORP'],
[
'ticker' => 'AQB','stock_name' => 'AQUABOUNTY TECHNOLOGIES'],
[
'ticker' => 'AQMS','stock_name' => 'AQUA METALS INC'],
[
'ticker' => 'AQN','stock_name' => 'ALGONQUIN POWER & UTILITIES'],
[
'ticker' => 'AQST','stock_name' => 'AQUESTIVE THERAPEUTICS INC'],
[
'ticker' => 'AQUA','stock_name' => 'EVOQUA WATER TECHNOLOGIES CO'],
[
'ticker' => 'AQWA','stock_name' => 'GLOBAL X CLEAN WATER ETF'],
[
'ticker' => 'AR','stock_name' => 'ANTERO RESOURCES CORP'],
[
'ticker' => 'ARAV','stock_name' => 'ARAVIVE INC'],
[
'ticker' => 'ARAY','stock_name' => 'ACCURAY INC'],
[
'ticker' => 'ARB','stock_name' => 'ALTSHARES MERGER ARBITRAGE'],
[
'ticker' => 'ARBE','stock_name' => 'ARBE ROBOTICS LTD'],
[
'ticker' => 'ARBG','stock_name' => 'AEQUI ACQUISITION CORP-CL A'],
[
'ticker' => 'ARBGU','stock_name' => 'AEQUI ACQUISITION CORP'],
[
'ticker' => 'ARBK','stock_name' => 'ARGO BLOCKCHAIN PLC'],
[
'ticker' => 'ARC','stock_name' => 'ARC DOCUMENT SOLUTIONS INC'],
[
'ticker' => 'ARCB','stock_name' => 'ARCBEST CORP'],
[
'ticker' => 'ARCC','stock_name' => 'ARES CAPITAL CORP'],
[
'ticker' => 'ARCE','stock_name' => 'ARCO PLATFORM LTD - CLASS A'],
[
'ticker' => 'ARCH','stock_name' => 'ARCH RESOURCES INC'],
[
'ticker' => 'ARCKU','stock_name' => 'ARBOR RAPHA CAPITAL BIOHOLDI'],
[
'ticker' => 'ARCM','stock_name' => 'ARROW RESERVE CAP MANAG ETF'],
[
'ticker' => 'ARCO','stock_name' => 'ARCOS DORADOS HOLDINGS INC-A'],
[
'ticker' => 'ARCT','stock_name' => 'ARCTURUS THERAPEUTICS HOLDIN'],
[
'ticker' => 'ARDC','stock_name' => 'ARES DYNAMIC CREDIT ALLOCATI'],
[
'ticker' => 'ARDS','stock_name' => 'ARIDIS PHARMACEUTICALS INC'],
[
'ticker' => 'ARDX','stock_name' => 'ARDELYX INC'],
[
'ticker' => 'ARE','stock_name' => 'ALEXANDRIA REAL ESTATE EQUIT'],
[
'ticker' => 'AREC','stock_name' => 'AMERICAN RESOURCES CORP'],
[
'ticker' => 'ARES','stock_name' => 'ARES MANAGEMENT CORP - A'],
[
'ticker' => 'ARGO','stock_name' => 'ARGO GROUP INTERNATIONAL'],
[
'ticker' => 'ARGT','stock_name' => 'GLOBAL X MSCI ARGENTINA ETF'],
[
'ticker' => 'ARGUU','stock_name' => 'ARGUS CAPITAL CORP'],
[
'ticker' => 'ARGX','stock_name' => 'ARGENX SE - ADR'],
[
'ticker' => 'ARHS','stock_name' => 'ARHAUS INC'],
[
'ticker' => 'ARI','stock_name' => 'APOLLO COMMERCIAL REAL ESTAT'],
[
'ticker' => 'ARIS','stock_name' => 'ARIS WATER SOLUTION INC-A'],
[
'ticker' => 'ARKF','stock_name' => 'ARK FINTECH INNOVATION ETF'],
[
'ticker' => 'ARKG','stock_name' => 'ARK GENOMIC REVOLUTION ETF'],
[
'ticker' => 'ARKK','stock_name' => 'ARK INNOVATION ETF'],
[
'ticker' => 'ARKO','stock_name' => 'ARKO CORP'],
[
'ticker' => 'ARKQ','stock_name' => 'ARK AUTONOMOUS TECH & ROBOT'],
[
'ticker' => 'ARKR','stock_name' => 'ARK RESTAURANTS CORP'],
[
'ticker' => 'ARKW','stock_name' => 'ARK NEXT GENERATION INTERNET'],
[
'ticker' => 'ARKX','stock_name' => 'ARK SPACE EXPLORATION & INNO'],
[
'ticker' => 'ARL','stock_name' => 'AMERICAN REALTY INVESTORS IN'],
[
'ticker' => 'ARLO','stock_name' => 'ARLO TECHNOLOGIES INC'],
[
'ticker' => 'ARLP','stock_name' => 'ALLIANCE RESOURCE PARTNERS'],
[
'ticker' => 'ARMK','stock_name' => 'ARAMARK'],
[
'ticker' => 'ARMP','stock_name' => 'ARMATA PHARMACEUTICALS INC'],
[
'ticker' => 'ARMR','stock_name' => 'ARMOR US EQUITY INDEX ETF'],
[
'ticker' => 'ARNA','stock_name' => 'ARENA PHARMACEUTICALS INC'],
[
'ticker' => 'ARNC','stock_name' => 'ARCONIC CORP'],
[
'ticker' => 'AROC','stock_name' => 'ARCHROCK INC'],
[
'ticker' => 'AROW','stock_name' => 'ARROW FINANCIAL CORP'],
[
'ticker' => 'ARQQ','stock_name' => 'ARQIT QUANTUM INC'],
[
'ticker' => 'ARQT','stock_name' => 'ARCUTIS BIOTHERAPEUTICS INC'],
[
'ticker' => 'ARR','stock_name' => 'ARMOUR RESIDENTIAL REIT INC'],
[
'ticker' => 'ARRW','stock_name' => 'ARROWROOT ACQUISITION CORP-A'],
[
'ticker' => 'ARRWU','stock_name' => 'ARROWROOT ACQUISITION CORP'],
[
'ticker' => 'ARRY','stock_name' => 'ARRAY TECHNOLOGIES INC'],
[
'ticker' => 'ARTA','stock_name' => 'ARTISAN ACQUISITION CORP-A'],
[
'ticker' => 'ARTAU','stock_name' => 'ARTISAN ACQUISITION CORP'],
[
'ticker' => 'ARTEU','stock_name' => 'ARTEMIS STRATEGIC INVESTMENT'],
[
'ticker' => 'ARTL','stock_name' => 'ARTELO BIOSCIENCES INC'],
[
'ticker' => 'ARTNA','stock_name' => 'ARTESIAN RESOURCES CORP-CL A'],
[
'ticker' => 'ARTW','stock_name' => 'ART\'S-WAY MANUFACTURING CO'],
[
'ticker' => 'ARVL','stock_name' => 'ARRIVAL SA'],
[
'ticker' => 'ARVN','stock_name' => 'ARVINAS INC'],
[
'ticker' => 'ARW','stock_name' => 'ARROW ELECTRONICS INC'],
[
'ticker' => 'ARWR','stock_name' => 'ARROWHEAD PHARMACEUTICALS IN'],
[
'ticker' => 'ARYD','stock_name' => 'ARYA SCIENCES ACQUISITION-A'],
[
'ticker' => 'ARYE','stock_name' => 'ARYA SCIENCES ACQUISITION -A'],
[
'ticker' => 'ASA','stock_name' => 'ASA GOLD AND PRECIOUS METALS'],
[
'ticker' => 'ASAI','stock_name' => 'SENDAS DISTRIBUIDORA SA'],
[
'ticker' => 'ASAN','stock_name' => 'ASANA INC - CL A'],
[
'ticker' => 'ASAQ','stock_name' => 'ATLANTIC AVENUE ACQUISI-CL A'],
[
'ticker' => 'ASAQ=','stock_name' => 'ATLANTIC AVENUE ACQUISITION'],
[
'ticker' => 'ASAX','stock_name' => 'ASTREA ACQUISITION CORP-CL A'],
[
'ticker' => 'ASAXU','stock_name' => 'ASTREA ACQUISITION CORP'],
[
'ticker' => 'ASB','stock_name' => 'ASSOCIATED BANC-CORP'],
[
'ticker' => 'ASC','stock_name' => 'ARDMORE SHIPPING CORP'],
[
'ticker' => 'ASEA','stock_name' => 'GLOBAL X FTSE SOUTHEAST ASIA'],
[
'ticker' => 'ASET','stock_name' => 'FLEXSHARES REAL ASSETS FUND'],
[
'ticker' => 'ASG','stock_name' => 'LIBERTY ALL-STAR GROWTH FD'],
[
'ticker' => 'ASGI','stock_name' => 'ABERDEEN STNDRD GLBL INFRA'],
[
'ticker' => 'ASGN','stock_name' => 'ASGN INC'],
[
'ticker' => 'ASH','stock_name' => 'ASHLAND GLOBAL HOLDINGS INC'],
[
'ticker' => 'ASHR','stock_name' => 'XTRACKERS HARVEST CSI 300 CH'],
[
'ticker' => 'ASHS','stock_name' => 'XTRACKERS HARVEST CSI 500 CH'],
[
'ticker' => 'ASHX','stock_name' => 'XTRACKERS MSCI CHINA A INCLU'],
[
'ticker' => 'ASIX','stock_name' => 'ADVANSIX INC'],
[
'ticker' => 'ASLE','stock_name' => 'AERSALE CORP'],
[
'ticker' => 'ASLN','stock_name' => 'ASLAN PHARMACEUTICALS LT-ADR'],
[
'ticker' => 'ASM','stock_name' => 'AVINO SILVER & GOLD MINES'],
[
'ticker' => 'ASMB','stock_name' => 'ASSEMBLY BIOSCIENCES INC'],
[
'ticker' => 'ASML','stock_name' => 'ASML HOLDING NV-NY REG SHS'],
[
'ticker' => 'ASND','stock_name' => 'ASCENDIS PHARMA A/S - ADR'],
[
'ticker' => 'ASO','stock_name' => 'ACADEMY SPORTS & OUTDOORS IN'],
[
'ticker' => 'ASPA','stock_name' => 'ABRI SPAC I INC'],
[
'ticker' => 'ASPAU','stock_name' => 'ABRI SPAC I INC'],
[
'ticker' => 'ASPC','stock_name' => 'ALPHA CAPITAL ACQUISITION-A'],
[
'ticker' => 'ASPCU','stock_name' => 'ALPHA CAPITAL ACQUISITION CO'],
[
'ticker' => 'ASPN','stock_name' => 'ASPEN AEROGELS INC'],
[
'ticker' => 'ASPS','stock_name' => 'ALTISOURCE PORTFOLIO SOL'],
[
'ticker' => 'ASPU','stock_name' => 'ASPEN GROUP INC'],
[
'ticker' => 'ASPY','stock_name' => 'ASYMSHARES ASYMMETRIC S&P 50'],
[
'ticker' => 'ASR','stock_name' => 'GRUPO AEROPORTUARIO SUR-ADR'],
[
'ticker' => 'ASRT','stock_name' => 'ASSERTIO HOLDINGS INC'],
[
'ticker' => 'ASRV','stock_name' => 'AMERISERV FINANCIAL INC'],
[
'ticker' => 'ASTC','stock_name' => 'ASTROTECH CORP'],
[
'ticker' => 'ASTE','stock_name' => 'ASTEC INDUSTRIES INC'],
[
'ticker' => 'ASTL','stock_name' => 'ALGOMA STEEL GROUP INC'],
[
'ticker' => 'ASTR','stock_name' => 'ASTRA SPACE INC'],
[
'ticker' => 'ASTS','stock_name' => 'AST SPACEMOBILE INC'],
[
'ticker' => 'ASUR','stock_name' => 'ASURE SOFTWARE INC'],
[
'ticker' => 'ASX','stock_name' => 'ASE TECHNOLOGY HOLDING -ADR'],
[
'ticker' => 'ASXC','stock_name' => 'ASENSUS SURGICAL INC'],
[
'ticker' => 'ASYS','stock_name' => 'AMTECH SYSTEMS INC'],
[
'ticker' => 'ASZ','stock_name' => 'AUSTERLITZ ACQUISITION COR-A'],
[
'ticker' => 'ASZ=','stock_name' => 'AUSTERLITZ ACQUISITION CORP'],
[
'ticker' => 'ATA','stock_name' => 'AMERICAS TECHNOLOGY ACQUISIT'],
[
'ticker' => 'ATA=','stock_name' => 'AMERICAS TECHNOLOGY ACQUISIT'],
[
'ticker' => 'ATAI','stock_name' => 'ATAI LIFE SCIENCES NV'],
[
'ticker' => 'ATAQ','stock_name' => 'ALTIMAR ACQUISITION CORP-A'],
[
'ticker' => 'ATAQ=','stock_name' => 'ALTIMAR ACQUISITION CORP III'],
[
'ticker' => 'ATAX','stock_name' => 'AMERICA FIRST MULTIFAMILY IN'],
[
'ticker' => 'ATC','stock_name' => 'ATOTECH LTD'],
[
'ticker' => 'ATCO','stock_name' => 'ATLAS CORP'],
[
'ticker' => 'ATCX','stock_name' => 'ATLAS TECHNICAL CONSULTANTS'],
[
'ticker' => 'ATEC','stock_name' => 'ALPHATEC HOLDINGS INC'],
[
'ticker' => 'ATEN','stock_name' => 'A10 NETWORKS INC'],
[
'ticker' => 'ATER','stock_name' => 'ATERIAN INC'],
[
'ticker' => 'ATEX','stock_name' => 'ANTERIX INC'],
[
'ticker' => 'ATFV','stock_name' => 'ALGER 35 ETF'],
[
'ticker' => 'ATGE','stock_name' => 'ADTALEM GLOBAL EDUCATION INC'],
[
'ticker' => 'ATH','stock_name' => 'ATHENE HOLDING LTD-CLASS A'],
[
'ticker' => 'ATHA','stock_name' => 'ATHIRA PHARMA INC'],
[
'ticker' => 'ATHE','stock_name' => 'ALTERITY THERAPEUTICS-ADR'],
[
'ticker' => 'ATHM','stock_name' => 'AUTOHOME INC-ADR'],
[
'ticker' => 'ATHN','stock_name' => 'ATHENA TECHNOLOGY ACQUISIT-A'],
[
'ticker' => 'ATHN=','stock_name' => 'ATHENA TECHNOLOGY ACQUISITIO'],
[
'ticker' => 'ATHX','stock_name' => 'ATHERSYS INC'],
[
'ticker' => 'ATI','stock_name' => 'ALLEGHENY TECHNOLOGIES INC'],
[
'ticker' => 'ATIF','stock_name' => 'ATIF HOLDINGS LTD'],
[
'ticker' => 'ATIP','stock_name' => 'ATI PHYSICAL THERAPY INC'],
[
'ticker' => 'ATKR','stock_name' => 'ATKORE INC'],
[
'ticker' => 'ATLC','stock_name' => 'ATLANTICUS HOLDINGS CORP'],
[
'ticker' => 'ATLO','stock_name' => 'AMES NATIONAL CORP'],
[
'ticker' => 'ATMP','stock_name' => 'IPATH SELECT MLP ETN'],
[
'ticker' => 'ATMR','stock_name' => 'ALTIMAR ACQUISITION CORP -A'],
[
'ticker' => 'ATMR=','stock_name' => 'ALTIMAR ACQUISITION CORP II'],
[
'ticker' => 'ATNF','stock_name' => '180 LIFE SCIENCES CORP'],
[
'ticker' => 'ATNI','stock_name' => 'ATN INTERNATIONAL INC'],
[
'ticker' => 'ATNM','stock_name' => 'ACTINIUM PHARMACEUTICALS INC'],
[
'ticker' => 'ATNX','stock_name' => 'ATHENEX INC'],
[
'ticker' => 'ATO','stock_name' => 'ATMOS ENERGY CORP'],
[
'ticker' => 'ATOM','stock_name' => 'ATOMERA INC'],
[
'ticker' => 'ATOS','stock_name' => 'ATOSSA THERAPEUTICS INC'],
[
'ticker' => 'ATR','stock_name' => 'APTARGROUP INC'],
[
'ticker' => 'ATRA','stock_name' => 'ATARA BIOTHERAPEUTICS INC'],
[
'ticker' => 'ATRC','stock_name' => 'ATRICURE INC'],
[
'ticker' => 'ATRI','stock_name' => 'ATRION CORPORATION'],
[
'ticker' => 'ATRO','stock_name' => 'ASTRONICS CORP'],
[
'ticker' => 'ATRS','stock_name' => 'ANTARES PHARMA INC'],
[
'ticker' => 'ATSG','stock_name' => 'AIR TRANSPORT SERVICES GROUP'],
[
'ticker' => 'ATSPT','stock_name' => 'ARCHIMEDES TECH SPAC-SUBUNIT'],
[
'ticker' => 'ATSPU','stock_name' => 'ARCHIMEDES TECH SPAC PARTNER'],
[
'ticker' => 'ATTO','stock_name' => 'ATENTO SA'],
[
'ticker' => 'ATUS','stock_name' => 'ALTICE USA INC- A'],
[
'ticker' => 'ATVC','stock_name' => 'TRIBE CAPITAL GROWTH CORP-A'],
[
'ticker' => 'ATVCU','stock_name' => 'TRIBE CAPITAL GROWTH CORP I'],
[
'ticker' => 'ATVI','stock_name' => 'ACTIVISION BLIZZARD INC'],
[
'ticker' => 'ATXI','stock_name' => 'AVENUE THERAPEUTICS INC'],
[
'ticker' => 'ATXS','stock_name' => 'ASTRIA THERAPEUTICS INC'],
[
'ticker' => 'ATY','stock_name' => 'ACUITYADS HOLDING INC'],
[
'ticker' => 'AU','stock_name' => 'ANGLOGOLD ASHANTI-SPON ADR'],
[
'ticker' => 'AUB','stock_name' => 'ATLANTIC UNION BANKSHARES CO'],
[
'ticker' => 'AUBN','stock_name' => 'AUBURN NATL BANCORPORATION'],
[
'ticker' => 'AUD','stock_name' => 'AUDACY INC'],
[
'ticker' => 'AUDC','stock_name' => 'AUDIOCODES LTD'],
[
'ticker' => 'AUGX','stock_name' => 'AUGMEDIX INC'],
[
'ticker' => 'AUGZ','stock_name' => 'TRUESHARES STRUC OUT AUG ETF'],
[
'ticker' => 'AUID','stock_name' => 'IPSIDY INC'],
[
'ticker' => 'AUMN','stock_name' => 'GOLDEN MINERALS CO'],
[
'ticker' => 'AUPH','stock_name' => 'AURINIA PHARMACEUTICALS INC'],
[
'ticker' => 'AUR','stock_name' => 'REINVENT TECHNOLOGY PAR-A'],
[
'ticker' => 'AURA','stock_name' => 'AURA BIOSCIENCES INC'],
[
'ticker' => 'AURC','stock_name' => 'AURORA ACQUISITION CORP-A'],
[
'ticker' => 'AURCU','stock_name' => 'AURORA ACQUISITION CORP'],
[
'ticker' => 'AUS','stock_name' => 'AUSTERLITZ ACQUISITION COR-A'],
[
'ticker' => 'AUS=','stock_name' => 'AUSTERLITZ ACQUISITION CORP'],
[
'ticker' => 'AUSF','stock_name' => 'GLOBAL X ADAPTIVE US FACTOR'],
[
'ticker' => 'AUTL','stock_name' => 'AUTOLUS THERAPEUTICS PLC'],
[
'ticker' => 'AUTO','stock_name' => 'AUTOWEB INC'],
[
'ticker' => 'AUUD','stock_name' => 'AUDDIA INC'],
[
'ticker' => 'AUVI','stock_name' => 'APPLIED UV INC'],
[
'ticker' => 'AUY','stock_name' => 'YAMANA GOLD INC'],
[
'ticker' => 'AVA','stock_name' => 'AVISTA CORP'],
[
'ticker' => 'AVACU','stock_name' => 'AVALON ACQUISITION INC'],
[
'ticker' => 'AVAH','stock_name' => 'AVEANNA HEALTHCARE HOLDINGS'],
[
'ticker' => 'AVAL','stock_name' => 'GRUPO AVAL ACCIONES Y VALORE'],
[
'ticker' => 'AVAN','stock_name' => 'AVANTI ACQUISITION CORP-A'],
[
'ticker' => 'AVAN=','stock_name' => 'AVANTI ACQUISITION CORP'],
[
'ticker' => 'AVAV','stock_name' => 'AEROVIRONMENT INC'],
[
'ticker' => 'AVB','stock_name' => 'AVALONBAY COMMUNITIES INC'],
[
'ticker' => 'AVCO','stock_name' => 'AVALON GLOBOCARE CORP'],
[
'ticker' => 'AVCT','stock_name' => 'AMERICAN VIRTUAL CLOUD TECHN'],
[
'ticker' => 'AVD','stock_name' => 'AMERICAN VANGUARD CORP'],
[
'ticker' => 'AVDE','stock_name' => 'AVANTIS INTERNATIONAL EQUITY'],
[
'ticker' => 'AVDG','stock_name' => 'AVDR US LARGECAP ESG ETF'],
[
'ticker' => 'AVDL','stock_name' => 'AVADEL PHARMACEUTICALS-ADR'],
[
'ticker' => 'AVDR','stock_name' => 'AVDR US LARGECAP LEADING ETF'],
[
'ticker' => 'AVDV','stock_name' => 'AVANTIS INTL S/C VALUE ETF'],
[
'ticker' => 'AVDX','stock_name' => 'AVIDXCHANGE HOLDINGS INC'],
[
'ticker' => 'AVEM','stock_name' => 'AVANTIS EMERGING MARKETS EQ'],
[
'ticker' => 'AVEO','stock_name' => 'AVEO PHARMACEUTICALS INC'],
[
'ticker' => 'AVES','stock_name' => 'AVANTIS EMERGING MARKETS VAL'],
[
'ticker' => 'AVGO','stock_name' => 'BROADCOM INC'],
[
'ticker' => 'AVGR','stock_name' => 'AVINGER INC'],
[
'ticker' => 'AVHIU','stock_name' => 'ACHARI VENTURES HOLDINGS COR'],
[
'ticker' => 'AVID','stock_name' => 'AVID TECHNOLOGY INC'],
[
'ticker' => 'AVIG','stock_name' => 'AVANTIS CORE FIXED INCOME'],
[
'ticker' => 'AVIR','stock_name' => 'ATEA PHARMACEUTICALS INC'],
[
'ticker' => 'AVIV','stock_name' => 'AVANTIS INT LRG CAP VAL ETF'],
[
'ticker' => 'AVK','stock_name' => 'ADVENT CONVERT & INCOME'],
[
'ticker' => 'AVLR','stock_name' => 'AVALARA INC'],
[
'ticker' => 'AVLV','stock_name' => 'AVANTIS US LARGE CAP VALUE'],
[
'ticker' => 'AVMU','stock_name' => 'AVANTIS CORE MUNICIPAL FIXED'],
[
'ticker' => 'AVNS','stock_name' => 'AVANOS MEDICAL INC'],
[
'ticker' => 'AVNT','stock_name' => 'AVIENT CORP'],
[
'ticker' => 'AVNW','stock_name' => 'AVIAT NETWORKS INC'],
[
'ticker' => 'AVO','stock_name' => 'MISSION PRODUCE INC'],
[
'ticker' => 'AVPT','stock_name' => 'AVEPOINT INC'],
[
'ticker' => 'AVRE','stock_name' => 'AVANTIS REAL ESTATE ETF'],
[
'ticker' => 'AVRO','stock_name' => 'AVROBIO INC'],
[
'ticker' => 'AVSF','stock_name' => 'AVANTIS SHORT-TERM FIXED INC'],
[
'ticker' => 'AVT','stock_name' => 'AVNET INC'],
[
'ticker' => 'AVTE','stock_name' => 'AEROVATE THERAPEUTICS INC'],
[
'ticker' => 'AVTR','stock_name' => 'AVANTOR INC'],
[
'ticker' => 'AVTX','stock_name' => 'AVALO THERAPEUTICS INC'],
[
'ticker' => 'AVUS','stock_name' => 'AVANTIS U.S. EQUITY ETF'],
[
'ticker' => 'AVUV','stock_name' => 'AVANTIS US SMALL CAP VALUE'],
[
'ticker' => 'AVXL','stock_name' => 'ANAVEX LIFE SCIENCES CORP'],
[
'ticker' => 'AVY','stock_name' => 'AVERY DENNISON CORP'],
[
'ticker' => 'AVYA','stock_name' => 'AVAYA HOLDINGS CORP'],
[
'ticker' => 'AWAY','stock_name' => 'ETFMG TRAVEL TECH ETF'],
[
'ticker' => 'AWF','stock_name' => 'ALLIANCEBERNSTEIN GL HI INC'],
[
'ticker' => 'AWH','stock_name' => 'ASPIRA WOMEN\'S HEALTH INC'],
[
'ticker' => 'AWI','stock_name' => 'ARMSTRONG WORLD INDUSTRIES'],
[
'ticker' => 'AWK','stock_name' => 'AMERICAN WATER WORKS CO INC'],
[
'ticker' => 'AWP','stock_name' => 'ABERDEEN GLBL PREM PROP'],
[
'ticker' => 'AWR','stock_name' => 'AMERICAN STATES WATER CO'],
[
'ticker' => 'AWRE','stock_name' => 'AWARE INC/MASS'],
[
'ticker' => 'AWTM','stock_name' => 'AWARE ULTRA SHORT DURATION'],
[
'ticker' => 'AWX','stock_name' => 'AVALON HOLDINGS CORP-A'],
[
'ticker' => 'AWYX','stock_name' => 'ETFMG 2X DAILY TRAVEL TECH E'],
[
'ticker' => 'AX','stock_name' => 'AXOS FINANCIAL INC'],
[
'ticker' => 'AXDX','stock_name' => 'ACCELERATE DIAGNOSTICS INC'],
[
'ticker' => 'AXGN','stock_name' => 'AXOGEN INC'],
[
'ticker' => 'AXH=','stock_name' => 'INDUSTRIAL HUMAN CAPITAL INC'],
[
'ticker' => 'AXL','stock_name' => 'AMERICAN AXLE & MFG HOLDINGS'],
[
'ticker' => 'AXLA','stock_name' => 'AXCELLA HEALTH INC'],
[
'ticker' => 'AXNX','stock_name' => 'AXONICS INC'],
[
'ticker' => 'AXON','stock_name' => 'AXON ENTERPRISE INC'],
[
'ticker' => 'AXP','stock_name' => 'AMERICAN EXPRESS CO'],
[
'ticker' => 'AXR','stock_name' => 'AMREP CORP'],
[
'ticker' => 'AXS','stock_name' => 'AXIS CAPITAL HOLDINGS LTD'],
[
'ticker' => 'AXSM','stock_name' => 'AXSOME THERAPEUTICS INC'],
[
'ticker' => 'AXTA','stock_name' => 'AXALTA COATING SYSTEMS LTD'],
[
'ticker' => 'AXTI','stock_name' => 'AXT INC'],
[
'ticker' => 'AXU','stock_name' => 'ALEXCO RESOURCE CORP'],
[
'ticker' => 'AY','stock_name' => 'ATLANTICA SUSTAINABLE INFRAS'],
[
'ticker' => 'AYI','stock_name' => 'ACUITY BRANDS INC'],
[
'ticker' => 'AYLA','stock_name' => 'AYALA PHARMACEUTICALS INC'],
[
'ticker' => 'AYRO','stock_name' => 'AYRO INC'],
[
'ticker' => 'AYTU','stock_name' => 'AYTU BIOPHARMA INC'],
[
'ticker' => 'AYX','stock_name' => 'ALTERYX INC - CLASS A'],
[
'ticker' => 'AZAA','stock_name' => 'ALLIANZIM US LG CAP BUFFER10'],
[
'ticker' => 'AZAJ','stock_name' => 'ALLIANZ US LRG CAP BUFF10 JA'],
[
'ticker' => 'AZAL','stock_name' => 'ALLIANZIM US LRG CAP BU10 JU'],
[
'ticker' => 'AZAO','stock_name' => 'ALLIANZIM US LARGE CAP BUFFE'],
[
'ticker' => 'AZBA','stock_name' => 'ALLIANZIM US LG CAP BUFFER20'],
[
'ticker' => 'AZBJ','stock_name' => 'ALLIANZIM US LRG CAP BUFF20'],
[
'ticker' => 'AZBL','stock_name' => 'ALLIANZIM US LRG CAP BU 20 J'],
[
'ticker' => 'AZBO','stock_name' => 'ALLIANZIM US LARGE CAP BUFFE'],
[
'ticker' => 'AZEK','stock_name' => 'AZEK CO INC/THE'],
[
'ticker' => 'AZN','stock_name' => 'ASTRAZENECA PLC-SPONS ADR'],
[
'ticker' => 'AZO','stock_name' => 'AUTOZONE INC'],
[
'ticker' => 'AZPN','stock_name' => 'ASPEN TECHNOLOGY INC'],
[
'ticker' => 'AZRE','stock_name' => 'AZURE POWER GLOBAL LTD'],
[
'ticker' => 'AZUL','stock_name' => 'AZUL SA-ADR'],
[
'ticker' => 'AZYO','stock_name' => 'AZIYO BIOLOGICS INC-CLASS A'],
[
'ticker' => 'AZZ','stock_name' => 'AZZ INC'],
[
'ticker' => 'B','stock_name' => 'BARNES GROUP INC'],
[
'ticker' => 'BA','stock_name' => 'BOEING CO/THE'],
[
'ticker' => 'BAB','stock_name' => 'INVESCO TAXABLE MUNICIPAL BO'],
[
'ticker' => 'BABA','stock_name' => 'ALIBABA GROUP HOLDING-SP ADR'],
[
'ticker' => 'BAC','stock_name' => 'BANK OF AMERICA CORP'],
[
'ticker' => 'BACA=','stock_name' => 'BERENSON ACQUISITION CORP I'],
[
'ticker' => 'BAH','stock_name' => 'BOOZ ALLEN HAMILTON HOLDINGS'],
[
'ticker' => 'BAK','stock_name' => 'BRASKEM SA-SPON ADR'],
[
'ticker' => 'BAL','stock_name' => 'IPATHR SERIES B BLOOMBERG CO'],
[
'ticker' => 'BALT','stock_name' => 'INN DEFINED WEALTH SHIELD'],
[
'ticker' => 'BALY','stock_name' => 'BALLY\'S CORP'],
[
'ticker' => 'BAM','stock_name' => 'BROOKFIELD ASSET MANAGE-CL A'],
[
'ticker' => 'BAMR','stock_name' => 'BROOKFIELD ASSET MANAGEMEN-A'],
[
'ticker' => 'BANC','stock_name' => 'BANC OF CALIFORNIA INC'],
[
'ticker' => 'BAND','stock_name' => 'BANDWIDTH INC-CLASS A'],
[
'ticker' => 'BANF','stock_name' => 'BANCFIRST CORP'],
[
'ticker' => 'BANR','stock_name' => 'BANNER CORPORATION'],
[
'ticker' => 'BANX','stock_name' => 'STONECASTLE FINANCIAL CORP'],
[
'ticker' => 'BAOS','stock_name' => 'BAOSHENG MEDIA GROUP HOLDING'],
[
'ticker' => 'BAP','stock_name' => 'CREDICORP LTD'],
[
'ticker' => 'BAPR','stock_name' => 'INNOVATOR U.S. EQUITY BUFFER'],
[
'ticker' => 'BAR','stock_name' => 'GRANITESHARES GOLD TRUST'],
[
'ticker' => 'BARK','stock_name' => 'ORIGINAL BARK CO/THE'],
[
'ticker' => 'BASE','stock_name' => 'COUCHBASE INC'],
[
'ticker' => 'BATL','stock_name' => 'BATTALION OIL CORP'],
[
'ticker' => 'BATRA','stock_name' => 'LIBERTY MEDIA CORP-BRAVES A'],
[
'ticker' => 'BATRK','stock_name' => 'LIBERTY MEDIA CORP-BRAVES C'],
[
'ticker' => 'BATT','stock_name' => 'AMPLIFY LITHIUM BATTERY TECH'],
[
'ticker' => 'BAUG','stock_name' => 'INNOVATOR U.S. EQUITY BUFFER'],
[
'ticker' => 'BAX','stock_name' => 'BAXTER INTERNATIONAL INC'],
[
'ticker' => 'BB','stock_name' => 'BLACKBERRY LTD'],
[
'ticker' => 'BBAR','stock_name' => 'BBVA ARGENTINA SA-ADR'],
[
'ticker' => 'BBAX','stock_name' => 'JPM BTABLDRS DEV ASIA X-JPN'],
[
'ticker' => 'BBBY','stock_name' => 'BED BATH & BEYOND INC'],
[
'ticker' => 'BBC','stock_name' => 'VIRTUS LIFESCI BIOTECH CLINI'],
[
'ticker' => 'BBCA','stock_name' => 'JPMORGAN BETABUILDERS CANADA'],
[
'ticker' => 'BBCP','stock_name' => 'CONCRETE PUMPING HOLDINGS IN'],
[
'ticker' => 'BBD','stock_name' => 'BANCO BRADESCO-ADR'],
[
'ticker' => 'BBDC','stock_name' => 'BARINGS BDC INC'],
[
'ticker' => 'BBDO','stock_name' => 'BANCO BRADESCO-ADR'],
[
'ticker' => 'BBEU','stock_name' => 'JPMORGAN BETABUILDERS EUROPE'],
[
'ticker' => 'BBGI','stock_name' => 'BEASLEY BROADCAST GRP INC -A'],
[
'ticker' => 'BBH','stock_name' => 'VANECK BIOTECH ETF'],
[
'ticker' => 'BBI','stock_name' => 'BRICKELL BIOTECH INC'],
[
'ticker' => 'BBIG','stock_name' => 'VINCO VENTURES INC'],
[
'ticker' => 'BBIN','stock_name' => 'JPM BETABUILDERS INTL EQTY'],
[
'ticker' => 'BBIO','stock_name' => 'BRIDGEBIO PHARMA INC'],
[
'ticker' => 'BBJP','stock_name' => 'JPMORGAN BETABUILDERS JAPAN'],
[
'ticker' => 'BBL','stock_name' => 'BHP GROUP PLC-ADR'],
[
'ticker' => 'BBLG','stock_name' => 'BONE BIOLOGICS CORP'],
[
'ticker' => 'BBLN','stock_name' => 'BABYLON HOLDINGS LTD- CL A'],
[
'ticker' => 'BBMC','stock_name' => 'JPM BETABUILDERS US MID CAP'],
[
'ticker' => 'BBN','stock_name' => 'BLACKROCK TAXABLE MUNICIPAL'],
[
'ticker' => 'BBP','stock_name' => 'VIRTUS LIFESCI BIOTECH PRODU'],
[
'ticker' => 'BBQ','stock_name' => 'BBQ HOLDINGS INC'],
[
'ticker' => 'BBRE','stock_name' => 'JPM BETABLDRS MSCI US REIT'],
[
'ticker' => 'BBSA','stock_name' => 'JPMORGAN BETABUILDERS 1-5 YR'],
[
'ticker' => 'BBSC','stock_name' => 'JPMORGAN BETABUILDERS US SC'],
[
'ticker' => 'BBSI','stock_name' => 'BARRETT BUSINESS SVCS INC'],
[
'ticker' => 'BBU','stock_name' => 'BROOKFIELD BUSINESS PT-UNIT'],
[
'ticker' => 'BBUS','stock_name' => 'JPMORGAN BETABUILDERS US EQU'],
[
'ticker' => 'BBVA','stock_name' => 'BANCO BILBAO VIZCAYA-SP ADR'],
[
'ticker' => 'BBW','stock_name' => 'BUILD-A-BEAR WORKSHOP INC'],
[
'ticker' => 'BBWI','stock_name' => 'BATH & BODY WORKS INC'],
[
'ticker' => 'BBY','stock_name' => 'BEST BUY CO INC'],
[
'ticker' => 'BC','stock_name' => 'BRUNSWICK CORP'],
[
'ticker' => 'BCAB','stock_name' => 'BIOATLA INC'],
[
'ticker' => 'BCAC','stock_name' => 'BROOKLINE CAPITAL ACQUISITIO'],
[
'ticker' => 'BCACU','stock_name' => 'BROOKLINE CAPITAL ACQUISITIO'],
[
'ticker' => 'BCAT','stock_name' => 'BLACKROCK CAPITAL ALLOCATION'],
[
'ticker' => 'BCBP','stock_name' => 'BCB BANCORP INC'],
[
'ticker' => 'BCC','stock_name' => 'BOISE CASCADE CO'],
[
'ticker' => 'BCD','stock_name' => 'ABRDN BLOOMBERG ALL COMMODIT'],
[
'ticker' => 'BCDA','stock_name' => 'BIOCARDIA INC'],
[
'ticker' => 'BCE','stock_name' => 'BCE INC'],
[
'ticker' => 'BCEL','stock_name' => 'ATRECA INC - A'],
[
'ticker' => 'BCH','stock_name' => 'BANCO DE CHILE-ADR'],
[
'ticker' => 'BCI','stock_name' => 'ABRDN BLOOMBERG ALL COMMODIT'],
[
'ticker' => 'BCIM','stock_name' => 'ABRDN BLOOMBERG INDUSTRIAL M'],
[
'ticker' => 'BCLI','stock_name' => 'BRAINSTORM CELL THERAPEUTICS'],
[
'ticker' => 'BCM','stock_name' => 'IPATH PURE BETA BROAD CMDTY'],
[
'ticker' => 'BCML','stock_name' => 'BAYCOM CORP'],
[
'ticker' => 'BCO','stock_name' => 'BRINK\'S CO/THE'],
[
'ticker' => 'BCOR','stock_name' => 'BLUCORA INC'],
[
'ticker' => 'BCOV','stock_name' => 'BRIGHTCOVE'],
[
'ticker' => 'BCOW','stock_name' => '1895 BANCORP OF WISCONSIN IN'],
[
'ticker' => 'BCPC','stock_name' => 'BALCHEM CORP'],
[
'ticker' => 'BCRX','stock_name' => 'BIOCRYST PHARMACEUTICALS INC'],
[
'ticker' => 'BCS','stock_name' => 'BARCLAYS PLC-SPONS ADR'],
[
'ticker' => 'BCSF','stock_name' => 'BAIN CAPITAL SPECIALTY FINAN'],
[
'ticker' => 'BCTX','stock_name' => 'BRIACELL THERAPEUTICS CORP'],
[
'ticker' => 'BCV','stock_name' => 'BANCROFT FUND LTD'],
[
'ticker' => 'BCX','stock_name' => 'BLACKROCK RESOURCES & COMMOD'],
[
'ticker' => 'BCYC','stock_name' => 'BICYCLE THERAPEUTICS PLC-ADR'],
[
'ticker' => 'BDC','stock_name' => 'BELDEN INC'],
[
'ticker' => 'BDCX','stock_name' => 'ETRACS QUARTERLY PAY 1.5X LE'],
[
'ticker' => 'BDCZ','stock_name' => 'ETRACS MVIS BUSINESS DEVELOP'],
[
'ticker' => 'BDEC','stock_name' => 'INNOVATOR U.S. EQUITY BUFFER'],
[
'ticker' => 'BDJ','stock_name' => 'BLACKROCK ENHANCED EQTY DVD'],
[
'ticker' => 'BDL','stock_name' => 'FLANIGAN\'S ENTERPRISES INC'],
[
'ticker' => 'BDN','stock_name' => 'BRANDYWINE REALTY TRUST'],
[
'ticker' => 'BDR','stock_name' => 'BLONDER TONGUE LABORATORIES'],
[
'ticker' => 'BDRY','stock_name' => 'BREAKWAVE DRY BULK SHIPPING'],
[
'ticker' => 'BDSI','stock_name' => 'BIODELIVERY SCIENCES INTL'],
[
'ticker' => 'BDSX','stock_name' => 'BIODESIX INC'],
[
'ticker' => 'BDTX','stock_name' => 'BLACK DIAMOND THERAPEUTICS I'],
[
'ticker' => 'BDX','stock_name' => 'BECTON DICKINSON AND CO'],
[
'ticker' => 'BE','stock_name' => 'BLOOM ENERGY CORP- A'],
[
'ticker' => 'BEAM','stock_name' => 'BEAM THERAPEUTICS INC'],
[
'ticker' => 'BEAT','stock_name' => 'HEARTBEAM INC'],
[
'ticker' => 'BECN','stock_name' => 'BEACON ROOFING SUPPLY INC'],
[
'ticker' => 'BECO','stock_name' => 'BLACKROCK FUTURE CLIMATE AND'],
[
'ticker' => 'BEDU','stock_name' => 'BRIGHT SCHOLAR EDUCATION-ADR'],
[
'ticker' => 'BEDZ','stock_name' => 'ADVISORSHARES HOTEL ETF'],
[
'ticker' => 'BEEM','stock_name' => 'BEAM GLOBAL'],
[
'ticker' => 'BEKE','stock_name' => 'KE HOLDINGS INC-ADR'],
[
'ticker' => 'BELFA','stock_name' => 'BEL FUSE INC-CL A'],
[
'ticker' => 'BELFB','stock_name' => 'BEL FUSE INC-CL B'],
[
'ticker' => 'BEN','stock_name' => 'FRANKLIN RESOURCES INC'],
[
'ticker' => 'BENE','stock_name' => 'BENESSERE CAPITAL ACQUI-CL A'],
[
'ticker' => 'BENER','stock_name' => 'BENESSERE CAPITAL ACQUI-RGT'],
[
'ticker' => 'BENEU','stock_name' => 'BENESSERE CAPITAL ACQUISITIO'],
[
'ticker' => 'BEP','stock_name' => 'BROOKFIELD RENEWABLE PARTNER'],
[
'ticker' => 'BEPC','stock_name' => 'BROOKFIELD RENEWABLE COR-A'],
[
'ticker' => 'BERY','stock_name' => 'BERRY GLOBAL GROUP INC'],
[
'ticker' => 'BERZ','stock_name' => 'MICROSECTORS FANG & INN -3X'],
[
'ticker' => 'BEST','stock_name' => 'BEST INC - ADR'],
[
'ticker' => 'BETZ','stock_name' => 'ROUNDHILL SPORTS BET & IGAM'],
[
'ticker' => 'BF.A','stock_name' => 'BROWN-FORMAN CORP-CLASS A'],
[
'ticker' => 'BF.B','stock_name' => 'BROWN-FORMAN CORP-CLASS B'],
[
'ticker' => 'BFAM','stock_name' => 'BRIGHT HORIZONS FAMILY SOLUT'],
[
'ticker' => 'BFC','stock_name' => 'BANK FIRST CORP'],
[
'ticker' => 'BFEB','stock_name' => 'INNOVATOR U.S. EQUITY BUFFER'],
[
'ticker' => 'BFI','stock_name' => 'BURGERFI INTERNATIONAL INC'],
[
'ticker' => 'BFIN','stock_name' => 'BANKFINANCIAL CORP'],
[
'ticker' => 'BFIT','stock_name' => 'GLB X HEALTH & WELLNESS ETF'],
[
'ticker' => 'BFK','stock_name' => 'BLACKROCK MUNICIPAL INC TRST'],
[
'ticker' => 'BFLY','stock_name' => 'BUTTERFLY NETWORK INC'],
[
'ticker' => 'BFOR','stock_name' => 'BARRON\'S 400 ETF'],
[
'ticker' => 'BFRA','stock_name' => 'BIOFRONTERA AG'],
[
'ticker' => 'BFRI','stock_name' => 'BIOFRONTERA INC'],
[
'ticker' => 'BFS','stock_name' => 'SAUL CENTERS INC'],
[
'ticker' => 'BFST','stock_name' => 'BUSINESS FIRST BANCSHARES'],
[
'ticker' => 'BFTR','stock_name' => 'BLACKROCK FUTURE INNOVATORS'],
[
'ticker' => 'BFZ','stock_name' => 'BLACKROCK CALIFOR MUNI IN TR'],
[
'ticker' => 'BG','stock_name' => 'BUNGE LTD'],
[
'ticker' => 'BGB','stock_name' => 'BLACKSTONE STRATEGIC CREDIT'],
[
'ticker' => 'BGCP','stock_name' => 'BGC PARTNERS INC-CL A'],
[
'ticker' => 'BGFV','stock_name' => 'BIG 5 SPORTING GOODS CORP'],
[
'ticker' => 'BGH','stock_name' => 'BARINGS GL SH DUR HI YLD'],
[
'ticker' => 'BGI','stock_name' => 'BIRKS GROUP INC'],
[
'ticker' => 'BGIO','stock_name' => 'BLACKROCK 2022 GLOBAL INCOME'],
[
'ticker' => 'BGLD','stock_name' => 'FT CBOE VEST GOLD STR QRT B'],
[
'ticker' => 'BGNE','stock_name' => 'BEIGENE LTD-ADR'],
[
'ticker' => 'BGR','stock_name' => 'BLACKROCK ENRGY & RES'],
[
'ticker' => 'BGRN','stock_name' => 'ISHARES GLOBAL GREEN BOND ET'],
[
'ticker' => 'BGRY','stock_name' => 'BERKSHIRE GREY INC'],
[
'ticker' => 'BGS','stock_name' => 'B&G FOODS INC'],
[
'ticker' => 'BGSF','stock_name' => 'BGSF INC'],
[
'ticker' => 'BGSX','stock_name' => 'BUILD ACQUISITION CORP-A'],
[
'ticker' => 'BGSX=','stock_name' => 'BUILD ACQUISITION CORP'],
[
'ticker' => 'BGT','stock_name' => 'BLACKROCK FLT RT INC'],
[
'ticker' => 'BGX','stock_name' => 'BLACKSTONE LONG-SHORT CREDIT'],
[
'ticker' => 'BGY','stock_name' => 'BLACKROCK ENHANCED INTERNATI'],
[
'ticker' => 'BH','stock_name' => 'BIGLARI HOLDINGS INC-B'],
[
'ticker' => 'BH.A','stock_name' => 'BIGLARI HOLDINGS INC-A'],
[
'ticker' => 'BHACU','stock_name' => 'CRIXUS BH3 ACQUISITION CO'],
[
'ticker' => 'BHAT','stock_name' => 'BLUE HAT INTERACTIVE ENTERTA'],
[
'ticker' => 'BHB','stock_name' => 'BAR HARBOR BANKSHARES'],
[
'ticker' => 'BHC','stock_name' => 'BAUSCH HEALTH COS INC'],
[
'ticker' => 'BHE','stock_name' => 'BENCHMARK ELECTRONICS INC'],
[
'ticker' => 'BHF','stock_name' => 'BRIGHTHOUSE FINANCIAL INC'],
[
'ticker' => 'BHG','stock_name' => 'BRIGHT HEALTH GROUP INC'],
[
'ticker' => 'BHIL','stock_name' => 'BENSON HILL INC'],
[
'ticker' => 'BHK','stock_name' => 'BLACKROCK CORE BOND TRUST'],
[
'ticker' => 'BHLB','stock_name' => 'BERKSHIRE HILLS BANCORP INC'],
[
'ticker' => 'BHP','stock_name' => 'BHP GROUP LTD-SPON ADR'],
[
'ticker' => 'BHR','stock_name' => 'BRAEMAR HOTELS & RESORTS INC'],
[
'ticker' => 'BHSE','stock_name' => 'BULL HORN HOLDINGS CORP'],
[
'ticker' => 'BHSEU','stock_name' => 'BULL HORN HOLDINGS CORP'],
[
'ticker' => 'BHTG','stock_name' => 'BIOHITECH GLOBAL INC'],
[
'ticker' => 'BHV','stock_name' => 'BLACKROCK VIRGINIA MUNI BOND'],
[
'ticker' => 'BHVN','stock_name' => 'BIOHAVEN PHARMACEUTICAL HOLD'],
[
'ticker' => 'BIB','stock_name' => 'PROSHARES ULTRA NASD BIOTECH'],
[
'ticker' => 'BIBL','stock_name' => 'INSPIRE 100 ETF'],
[
'ticker' => 'BICK','stock_name' => 'FIRST TRUST BICK INDEX FUND'],
[
'ticker' => 'BIDS','stock_name' => 'AMPLIFY DIGITAL & ONLINE TRA'],
[
'ticker' => 'BIDU','stock_name' => 'BAIDU INC - SPON ADR'],
[
'ticker' => 'BIF','stock_name' => 'BOULDER GROWTH & INCOME FUND'],
[
'ticker' => 'BIG','stock_name' => 'BIG LOTS INC'],
[
'ticker' => 'BIGC','stock_name' => 'BIGCOMMERCE HOLDINGS-SER 1'],
[
'ticker' => 'BIGY','stock_name' => 'DEFIANCE NEXT GEN BIG DATA'],
[
'ticker' => 'BIGZ','stock_name' => 'BLACKROCK INNOV & GROW TR'],
[
'ticker' => 'BIIB','stock_name' => 'BIOGEN INC'],
[
'ticker' => 'BIL','stock_name' => 'SPDR BLOOMBERG 1-3 MONTH T-B'],
[
'ticker' => 'BILI','stock_name' => 'BILIBILI INC-SPONSORED ADR'],
[
'ticker' => 'BILL','stock_name' => 'BILL.COM HOLDINGS INC'],
[
'ticker' => 'BILS','stock_name' => 'SPDR BLOOMBERG 3-12 MONTH T-'],
[
'ticker' => 'BIMI','stock_name' => 'BIMI INTERNATIONAL MEDICAL I'],
[
'ticker' => 'BIO','stock_name' => 'BIO-RAD LABORATORIES-A'],
[
'ticker' => 'BIO.B','stock_name' => 'BIO-RAD LABORATORIES -CL B'],
[
'ticker' => 'BIOC','stock_name' => 'BIOCEPT INC'],
[
'ticker' => 'BIOL','stock_name' => 'BIOLASE INC'],
[
'ticker' => 'BIOT','stock_name' => 'BIOTECH ACQUISITION CO-CL A'],
[
'ticker' => 'BIOTU','stock_name' => 'BIOTECH ACQUISITION CO'],
[
'ticker' => 'BIOX','stock_name' => 'BIOCERES CROP SOLUTIONS CORP'],
[
'ticker' => 'BIP','stock_name' => 'BROOKFIELD INFRASTRUCTURE PA'],
[
'ticker' => 'BIPC','stock_name' => 'BROOKFIELD INFRASTRUCTURE-A'],
[
'ticker' => 'BIRD','stock_name' => 'ALLBIRDS INC-CL A'],
[
'ticker' => 'BIS','stock_name' => 'PROSHARES ULTRASHORT NAS BIO'],
[
'ticker' => 'BIT','stock_name' => 'BLACKROCK MULTI-SECTOR INCOM'],
[
'ticker' => 'BITE','stock_name' => 'BITE ACQUISITION CORP'],
[
'ticker' => 'BITE=','stock_name' => 'BITE ACQUISITION CORP'],
[
'ticker' => 'BITF','stock_name' => 'BITFARMS LTD/CANADA'],
[
'ticker' => 'BITO','stock_name' => 'PROSHARES BITCOIN STRATEGY E'],
[
'ticker' => 'BITQ','stock_name' => 'BITWISE CRYPTO IND INNOV ETF'],
[
'ticker' => 'BIV','stock_name' => 'VANGUARD INTERMEDIATE-TERM B'],
[
'ticker' => 'BIVI','stock_name' => 'BIOVIE INC'],
[
'ticker' => 'BIZD','stock_name' => 'VANECK BDC INCOME ETF'],
[
'ticker' => 'BJ','stock_name' => 'BJ\'S WHOLESALE CLUB HOLDINGS'],
[
'ticker' => 'BJAN','stock_name' => 'INNOVATOR U.S. EQUITY BUFFER'],
[
'ticker' => 'BJK','stock_name' => 'VANECK GAMING ETF'],
[
'ticker' => 'BJRI','stock_name' => 'BJ\'S RESTAURANTS INC'],
[
'ticker' => 'BJUL','stock_name' => 'INNOVATOR U.S. EQUITY BUFFER'],
[
'ticker' => 'BJUN','stock_name' => 'INNOVATOR U.S. EQUITY BUFFER'],
[
'ticker' => 'BK','stock_name' => 'BANK OF NEW YORK MELLON CORP'],
[
'ticker' => 'BKAG','stock_name' => 'BNY MELLON CORE BOND ETF'],
[
'ticker' => 'BKCC','stock_name' => 'BLACKROCK CAPITAL INVESTMENT'],
[
'ticker' => 'BKCH','stock_name' => 'GLOBAL X BLOCKCHAIN ETF'],
[
'ticker' => 'BKD','stock_name' => 'BROOKDALE SENIOR LIVING INC'],
[
'ticker' => 'BKE','stock_name' => 'BUCKLE INC/THE'],
[
'ticker' => 'BKEM','stock_name' => 'BNY MELLON EMERGING MARKETS'],
[
'ticker' => 'BKEP','stock_name' => 'BLUEKNIGHT ENERGY PARTNERS L'],
[
'ticker' => 'BKF','stock_name' => 'ISHARES MSCI BRIC ETF'],
[
'ticker' => 'BKH','stock_name' => 'BLACK HILLS CORP'],
[
'ticker' => 'BKHY','stock_name' => 'BNY MELLON HIGH YIELD BETA E'],
[
'ticker' => 'BKI','stock_name' => 'BLACK KNIGHT INC'],
[
'ticker' => 'BKIE','stock_name' => 'BNY MELLON INTERNATIONAL EQU'],
[
'ticker' => 'BKKT','stock_name' => 'BAKKT HOLDINGS INC'],
[
'ticker' => 'BKLC','stock_name' => 'BNY MELLON US LARGE CAP CORE'],
[
'ticker' => 'BKLN','stock_name' => 'INVESCO SENIOR LOAN ETF'],
[
'ticker' => 'BKMC','stock_name' => 'BNY MELLON US MID CAP CORE E'],
[
'ticker' => 'BKN','stock_name' => 'BLACKROCK INVT QUALITY MUNI'],
[
'ticker' => 'BKNG','stock_name' => 'BOOKING HOLDINGS INC'],
[
'ticker' => 'BKR','stock_name' => 'BAKER HUGHES CO'],
[
'ticker' => 'BKSB','stock_name' => 'BNY MELLON SHORT DURATION CO'],
[
'ticker' => 'BKSC','stock_name' => 'BANK OF SOUTH CAROLINA CORP'],
[
'ticker' => 'BKSE','stock_name' => 'BNY MELLON US SMALL CAP CORE'],
[
'ticker' => 'BKSY','stock_name' => 'BLACKSKY TECHNOLOGY INC'],
[
'ticker' => 'BKT','stock_name' => 'BLACKROCK INCOME TRUST'],
[
'ticker' => 'BKTI','stock_name' => 'BK TECHNOLOGIES CORP'],
[
'ticker' => 'BKU','stock_name' => 'BANKUNITED INC'],
[
'ticker' => 'BKUI','stock_name' => 'BNY MELLON ULTRA SHORT INCOM'],
[
'ticker' => 'BKYI','stock_name' => 'BIO-KEY INTERNATIONAL INC'],
[
'ticker' => 'BL','stock_name' => 'BLACKLINE INC'],
[
'ticker' => 'BLBD','stock_name' => 'BLUE BIRD CORP'],
[
'ticker' => 'BLCM','stock_name' => 'BELLICUM PHARMACEUTICALS INC'],
[
'ticker' => 'BLCN','stock_name' => 'SIREN NEXGEN ECONOMY ETF'],
[
'ticker' => 'BLCT','stock_name' => 'BLUECITY HOLDINGS LTD-ADR'],
[
'ticker' => 'BLD','stock_name' => 'TOPBUILD CORP'],
[
'ticker' => 'BLDE','stock_name' => 'BLADE AIR MOBILITY INC'],
[
'ticker' => 'BLDG','stock_name' => 'CAMBRIA GLOBAL REAL ESTATE'],
[
'ticker' => 'BLDP','stock_name' => 'BALLARD POWER SYSTEMS INC'],
[
'ticker' => 'BLDR','stock_name' => 'BUILDERS FIRSTSOURCE INC'],
[
'ticker' => 'BLE','stock_name' => 'BLACKROCK MUN INC TRUST II'],
[
'ticker' => 'BLES','stock_name' => 'INSPIRE GLOBAL HOPE ETF'],
[
'ticker' => 'BLFS','stock_name' => 'BIOLIFE SOLUTIONS INC'],
[
'ticker' => 'BLFY','stock_name' => 'BLUE FOUNDRY BANCORP'],
[
'ticker' => 'BLHY','stock_name' => 'VIRTUS NEWFLEET HIGH YIELD B'],
[
'ticker' => 'BLI','stock_name' => 'BERKELEY LIGHTS INC'],
[
'ticker' => 'BLIN','stock_name' => 'BRIDGELINE DIGITAL INC'],
[
'ticker' => 'BLK','stock_name' => 'BLACKROCK INC'],
[
'ticker' => 'BLKB','stock_name' => 'BLACKBAUD INC'],
[
'ticker' => 'BLKC','stock_name' => 'INVESCO ALERIAN GALAXY BLOCK'],
[
'ticker' => 'BLL','stock_name' => 'BALL CORP'],
[
'ticker' => 'BLMN','stock_name' => 'BLOOMIN\' BRANDS INC'],
[
'ticker' => 'BLND','stock_name' => 'BLEND LABS INC-A'],
[
'ticker' => 'BLNG','stock_name' => 'BELONG ACQUISITION CORP-A'],
[
'ticker' => 'BLNGU','stock_name' => 'BELONG ACQUISITION CORP'],
[
'ticker' => 'BLNK','stock_name' => 'BLINK CHARGING CO'],
[
'ticker' => 'BLOK','stock_name' => 'AMPLIFY TRANSFOR DATA SHARIN'],
[
'ticker' => 'BLPH','stock_name' => 'BELLEROPHON THERAPEUTICS INC'],
[
'ticker' => 'BLRX','stock_name' => 'BIOLINERX LTD-SPONS ADR'],
[
'ticker' => 'BLSA','stock_name' => 'BCLS ACQUISITION CORP- CL A'],
[
'ticker' => 'BLTS','stock_name' => 'BRIGHT LIGHTS ACQUISITI-CL A'],
[
'ticker' => 'BLTSU','stock_name' => 'BRIGHT LIGHTS ACQUISITION C'],
[
'ticker' => 'BLU','stock_name' => 'BELLUS HEALTH INC'],
[
'ticker' => 'BLUA','stock_name' => 'BLUERIVER ACQUISITION CORP-A'],
[
'ticker' => 'BLUA=','stock_name' => 'BLUERIVER ACQUISITION CORP'],
[
'ticker' => 'BLUE','stock_name' => 'BLUEBIRD BIO INC'],
[
'ticker' => 'BLV','stock_name' => 'VANGUARD LONG-TERM BOND ETF'],
[
'ticker' => 'BLW','stock_name' => 'BLACKROCK LTD DURATION INC'],
[
'ticker' => 'BLX','stock_name' => 'BANCO LATINOAMERICANO COME-E'],
[
'ticker' => 'BMA','stock_name' => 'BANCO MACRO SA-ADR'],
[
'ticker' => 'BMAC=','stock_name' => 'BLACK MOUNTAIN ACQ CORP'],
[
'ticker' => 'BMAQ','stock_name' => 'BLOCKCHAIN MOON ACQUISITION'],
[
'ticker' => 'BMAQR','stock_name' => 'BLOCKCHAIN MOON ACQ-RTS'],
[
'ticker' => 'BMAQU','stock_name' => 'BLOCKCHAIN MOON ACQUISITION'],
[
'ticker' => 'BMAR','stock_name' => 'INNOVATOR U.S. EQUITY BUFFER'],
[
'ticker' => 'BMAY','stock_name' => 'INNOVATOR U.S. EQUITY BUFFER'],
[
'ticker' => 'BMBL','stock_name' => 'BUMBLE INC-A'],
[
'ticker' => 'BME','stock_name' => 'BLACKROCK HEALTH SCIENCES'],
[
'ticker' => 'BMEA','stock_name' => 'BIOMEA FUSION INC'],
[
'ticker' => 'BMED','stock_name' => 'BLACKROCK FUTURE HEALTH ETF'],
[
'ticker' => 'BMEZ','stock_name' => 'BLACKROCK HEALTH SCI TR II'],
[
'ticker' => 'BMI','stock_name' => 'BADGER METER INC'],
[
'ticker' => 'BMO','stock_name' => 'BANK OF MONTREAL'],
[
'ticker' => 'BMRA','stock_name' => 'BIOMERICA INC'],
[
'ticker' => 'BMRC','stock_name' => 'BANK OF MARIN BANCORP/CA'],
[
'ticker' => 'BMRN','stock_name' => 'BIOMARIN PHARMACEUTICAL INC'],
[
'ticker' => 'BMTC','stock_name' => 'BRYN MAWR BANK CORP'],
[
'ticker' => 'BMTX','stock_name' => 'BM TECHNOLOGIES INC'],
[
'ticker' => 'BMY','stock_name' => 'BRISTOL-MYERS SQUIBB CO'],
[
'ticker' => 'BND','stock_name' => 'VANGUARD TOTAL BOND MARKET'],
[
'ticker' => 'BNDC','stock_name' => 'FLEXSHARES CORE SELECT BOND'],
[
'ticker' => 'BNDD','stock_name' => 'QUADRATIC DEFLATION ETF'],
[
'ticker' => 'BNDW','stock_name' => 'VANGUARD TOTAL WORLD BOND ET'],
[
'ticker' => 'BNDX','stock_name' => 'VANGUARD TOTAL INTL BOND ETF'],
[
'ticker' => 'BNE','stock_name' => 'BLUE HORIZON BNE ETF'],
[
'ticker' => 'BNED','stock_name' => 'BARNES & NOBLE EDUCATION INC'],
[
'ticker' => 'BNFT','stock_name' => 'BENEFITFOCUS INC'],
[
'ticker' => 'BNGO','stock_name' => 'BIONANO GENOMICS INC'],
[
'ticker' => 'BNIX','stock_name' => 'BANNIX ACQUISITION CORP'],
[
'ticker' => 'BNIXR','stock_name' => 'BANNIX ACQUISITION CORP-RTS'],
[
'ticker' => 'BNKD','stock_name' => 'MICROSECTORS US BIG BANK -3X'],
[
'ticker' => 'BNKU','stock_name' => 'MICROSECTORS US BIG BANKS 3X'],
[
'ticker' => 'BNL','stock_name' => 'BROADSTONE NET LEASE INC'],
[
'ticker' => 'BNNR','stock_name' => 'BANNER ACQUISITION CORP'],
[
'ticker' => 'BNNRU','stock_name' => 'BANNER ACQUISITION CORP'],
[
'ticker' => 'BNO','stock_name' => 'UNITED STATES BRENT OIL FUND'],
[
'ticker' => 'BNOV','stock_name' => 'INNOVATOR U.S. EQUITY BUFFER'],
[
'ticker' => 'BNR','stock_name' => 'BURNING ROCK BIOTECH LTD-ADR'],
[
'ticker' => 'BNS','stock_name' => 'BANK OF NOVA SCOTIA'],
[
'ticker' => 'BNSO','stock_name' => 'BONSO ELECTRONICS INTL INC'],
[
'ticker' => 'BNTC','stock_name' => 'BENITEC BIOPHARMA INC'],
[
'ticker' => 'BNTX','stock_name' => 'BIONTECH SE-ADR'],
[
'ticker' => 'BNY','stock_name' => 'BLACKROCK NEW YORK MUNI INC'],
[
'ticker' => 'BOAC','stock_name' => 'BLUESCAPE OPPORTUNITIES AC-A'],
[
'ticker' => 'BOAC=','stock_name' => 'BLUESCAPE OPPORTUNITIES ACQ'],
[
'ticker' => 'BOAS','stock_name' => 'BOA ACQUISITION CORP-A'],
[
'ticker' => 'BOAS=','stock_name' => 'BOA ACQUISITION CORP'],
[
'ticker' => 'BOAT','stock_name' => 'SONICSHARES GLOBAL SHIPPING'],
[
'ticker' => 'BOB','stock_name' => 'MERLYN AI BEST OF BREED CORE'],
[
'ticker' => 'BOCT','stock_name' => 'INNOVATOR U.S. EQUITY BUFFER'],
[
'ticker' => 'BODY','stock_name' => 'BEACHBODY CO INC/THE'],
[
'ticker' => 'BOE','stock_name' => 'BLACKROCK ENHANCED GLOBAL DI'],
[
'ticker' => 'BOH','stock_name' => 'BANK OF HAWAII CORP'],
[
'ticker' => 'BOIL','stock_name' => 'PROSHARES ULTRA BLOOMBERG NA'],
[
'ticker' => 'BOKF','stock_name' => 'BOK FINANCIAL CORPORATION'],
[
'ticker' => 'BOLT','stock_name' => 'BOLT BIOTHERAPEUTICS INC'],
[
'ticker' => 'BOMN','stock_name' => 'BOSTON OMAHA CORP-CL A'],
[
'ticker' => 'BON','stock_name' => 'BON NATURAL LIFE LTD'],
[
'ticker' => 'BOND','stock_name' => 'PIMCO ACTIVE BOND EXCHANGE-T'],
[
'ticker' => 'BOOM','stock_name' => 'DMC GLOBAL INC'],
[
'ticker' => 'BOOT','stock_name' => 'BOOT BARN HOLDINGS INC'],
[
'ticker' => 'BORR','stock_name' => 'BORR DRILLING LTD'],
[
'ticker' => 'BOSC','stock_name' => 'BOS BETTER ON-LINE SOLUTIONS'],
[
'ticker' => 'BOSS','stock_name' => 'GLOBAL X FOUNDER-RUN COMPANI'],
[
'ticker' => 'BOTJ','stock_name' => 'BANK OF THE JAMES FINANCIAL'],
[
'ticker' => 'BOTZ','stock_name' => 'GLOBAL X ROBOTICS & ARTIFICI'],
[
'ticker' => 'BOUT','stock_name' => 'INNOVATOR IBD BREAKOUT OPPS'],
[
'ticker' => 'BOX','stock_name' => 'BOX INC - CLASS A'],
[
'ticker' => 'BOXL','stock_name' => 'BOXLIGHT CORP - CLASS A'],
[
'ticker' => 'BP','stock_name' => 'BP PLC-SPONS ADR'],
[
'ticker' => 'BPMC','stock_name' => 'BLUEPRINT MEDICINES CORP'],
[
'ticker' => 'BPMP','stock_name' => 'BP MIDSTREAM PARTNERS LP'],
[
'ticker' => 'BPOP','stock_name' => 'POPULAR INC'],
[
'ticker' => 'BPRN','stock_name' => 'THE BANK OF PRINCETON'],
[
'ticker' => 'BPT','stock_name' => 'BP PRUDHOE BAY ROYALTY TRUST'],
[
'ticker' => 'BPTH','stock_name' => 'BIO-PATH HOLDINGS INC'],
[
'ticker' => 'BPTS','stock_name' => 'BIOPHYTIS SA-ADR'],
[
'ticker' => 'BQ','stock_name' => 'BOQII HOLDING LTD'],
[
'ticker' => 'BR','stock_name' => 'BROADRIDGE FINANCIAL SOLUTIO'],
[
'ticker' => 'BRAG','stock_name' => 'BRAGG GAMING GROUP INC'],
[
'ticker' => 'BRBR','stock_name' => 'BELLRING BRANDS INC-CLASS A'],
[
'ticker' => 'BRBS','stock_name' => 'BLUE RIDGE BANKSHARES INC'],
[
'ticker' => 'BRC','stock_name' => 'BRADY CORPORATION - CL A'],
[
'ticker' => 'BRCN','stock_name' => 'BURCON NUTRASCIENCE CORP'],
[
'ticker' => 'BRDG','stock_name' => 'BRIDGE INVESTMENT GRP HDS-A'],
[
'ticker' => 'BRDS','stock_name' => 'BIRD GLOBAL INC-CLASS A'],
[
'ticker' => 'BREZ','stock_name' => 'BREEZE HOLDINGS ACQUISITION'],
[
'ticker' => 'BREZR','stock_name' => 'BREEZE HOLDINGS ACQ- RIGHTS'],
[
'ticker' => 'BRF','stock_name' => 'VANECK BRAZIL SMALL-CAP ETF'],
[
'ticker' => 'BRFS','stock_name' => 'BRF SA-ADR'],
[
'ticker' => 'BRG','stock_name' => 'BLUEROCK RESIDENTIAL GROWTH'],
[
'ticker' => 'BRID','stock_name' => 'BRIDGFORD FOODS CORP'],
[
'ticker' => 'BRIV','stock_name' => 'B RILEY PRINCIPAL 250 MERG-A'],
[
'ticker' => 'BRIVU','stock_name' => 'B RILEY PRINCIPAL 250 MERGER'],
[
'ticker' => 'BRK.B','stock_name' => 'BERKSHIRE HATHAWAY INC-CL B'],
[
'ticker' => 'BRKL','stock_name' => 'BROOKLINE BANCORP INC'],
[
'ticker' => 'BRKR','stock_name' => 'BRUKER CORP'],
[
'ticker' => 'BRKS','stock_name' => 'BROOKS AUTOMATION INC'],
[
'ticker' => 'BRLI','stock_name' => 'BRILLIANT ACQUISITION CORP'],
[
'ticker' => 'BRLIR','stock_name' => 'BRILLIANT ACQUISITION - RTS'],
[
'ticker' => 'BRLIU','stock_name' => 'BRILLIANT ACQUISITION CORP'],
[
'ticker' => 'BRLT','stock_name' => 'BRILLIANT EARTH GROUP INC-A'],
[
'ticker' => 'BRMK','stock_name' => 'BROADMARK REALTY CAPITAL INC'],
[
'ticker' => 'BRN','stock_name' => 'BARNWELL INDUSTRIES INC'],
[
'ticker' => 'BRO','stock_name' => 'BROWN & BROWN INC'],
[
'ticker' => 'BROG','stock_name' => 'BROOGE ENERGY LTD'],
[
'ticker' => 'BROS','stock_name' => 'DUTCH BROS INC-CLASS A'],
[
'ticker' => 'BRP','stock_name' => 'BRP GROUP INC-A'],
[
'ticker' => 'BRPM','stock_name' => 'B RILEY PRINCIPAL 150 MERG-A'],
[
'ticker' => 'BRPMU','stock_name' => 'B RILEY PRINCIPAL 150 MERGER'],
[
'ticker' => 'BRQS','stock_name' => 'BORQS TECHNOLOGIES INC'],
[
'ticker' => 'BRSP','stock_name' => 'BRIGHTSPIRE CAPITAL INC'],
[
'ticker' => 'BRT','stock_name' => 'BRT APARTMENTS CORP'],
[
'ticker' => 'BRW','stock_name' => 'SABA CAPITAL INCOME & OPPORT'],
[
'ticker' => 'BRX','stock_name' => 'BRIXMOR PROPERTY GROUP INC'],
[
'ticker' => 'BRY','stock_name' => 'BERRY CORP'],
[
'ticker' => 'BRZU','stock_name' => 'DIREXION DAILY MSCI BRAZIL B'],
[
'ticker' => 'BSAC','stock_name' => 'BANCO SANTANDER-CHILE-ADR'],
[
'ticker' => 'BSAE','stock_name' => 'INVESCO 2021 USD EM MKT DEBT'],
[
'ticker' => 'BSAQ','stock_name' => 'BLACK SPADE ACQUISITION CO-A'],
[
'ticker' => 'BSAQ=','stock_name' => 'BLACK SPADE ACQUISITION CO'],
[
'ticker' => 'BSBE','stock_name' => 'INVESCO 2022 USD EM MKT DEBT'],
[
'ticker' => 'BSBK','stock_name' => 'BOGOTA FINANCIAL CORP'],
[
'ticker' => 'BSBR','stock_name' => 'BANCO SANTANDER BRASIL-ADS'],
[
'ticker' => 'BSCE','stock_name' => 'INVESCO 2023 USD EM MKT DEBT'],
[
'ticker' => 'BSCL','stock_name' => 'INVESCO BULLETSHARES 2021 CO'],
[
'ticker' => 'BSCM','stock_name' => 'INVESCO BULLETSHARES 2022 CO'],
[
'ticker' => 'BSCN','stock_name' => 'INVESCO BULLETSHARES 2023 CO'],
[
'ticker' => 'BSCO','stock_name' => 'INVESCO BULLETSHARES 2024 CO'],
[
'ticker' => 'BSCP','stock_name' => 'INVESCO BULLETSHARES 2025 CO'],
[
'ticker' => 'BSCQ','stock_name' => 'INVESCO BULLETSHARES 2026 CO'],
[
'ticker' => 'BSCR','stock_name' => 'INVESCO BULLETSHARES 2027 CO'],
[
'ticker' => 'BSCS','stock_name' => 'INVESCO BULLETSHARES 2028'],
[
'ticker' => 'BSCT','stock_name' => 'INVESCO BULLETSHARES 2029 CO'],
[
'ticker' => 'BSCU','stock_name' => 'INVESCO BULLETSHARES 2030 CB'],
[
'ticker' => 'BSCV','stock_name' => 'INVESCO BULLETSHARES 2031 CR'],
[
'ticker' => 'BSDE','stock_name' => 'INVESCO 2024 USD EM MKT DEBT'],
[
'ticker' => 'BSEA','stock_name' => 'ETFMG BREAKWAVE SEA DECARB T'],
[
'ticker' => 'BSEP','stock_name' => 'INNOVATOR U.S. EQUITY BUFFER'],
[
'ticker' => 'BSET','stock_name' => 'BASSETT FURNITURE INDS'],
[
'ticker' => 'BSFC','stock_name' => 'BLUE STAR FOODS CORP'],
[
'ticker' => 'BSGA','stock_name' => 'BLUE SAFARI GROUP ACQUISIT-A'],
[
'ticker' => 'BSGAR','stock_name' => 'BLUE SAFARI GROUP ACQUIS-RTS'],
[
'ticker' => 'BSGAU','stock_name' => 'BLUE SAFARI GROUP ACQUISITIO'],
[
'ticker' => 'BSGM','stock_name' => 'BIOSIG TECHNOLOGIES INC'],
[
'ticker' => 'BSIG','stock_name' => 'BRIGHTSPHERE INVESTMENT GROU'],
[
'ticker' => 'BSJL','stock_name' => 'INVESCO BULLETSHARES 2021 HI'],
[
'ticker' => 'BSJM','stock_name' => 'INVESCO BULLETSHARES 2022 HI'],
[
'ticker' => 'BSJN','stock_name' => 'INVESCO BULLETSHARES 2023 HI'],
[
'ticker' => 'BSJO','stock_name' => 'INVESCO BULLETSHARES 2024 HI'],
[
'ticker' => 'BSJP','stock_name' => 'INVESCO BULLETSHARES 2025 HI'],
[
'ticker' => 'BSJQ','stock_name' => 'INVESCO BULLETSHARES 2026 HI'],
[
'ticker' => 'BSJR','stock_name' => 'INVESCO BULLETSHARES 2027 HI'],
[
'ticker' => 'BSJS','stock_name' => 'INVESCO BULLETSHARE 2028 HYC'],
[
'ticker' => 'BSJT','stock_name' => 'INVESCO 2029 HIGH YIELD CORP'],
[
'ticker' => 'BSKY','stock_name' => 'BIG SKY GROWTH PARTNERS IN-A'],
[
'ticker' => 'BSKYU','stock_name' => 'BIG SKY GROWTH PARTNERS INC'],
[
'ticker' => 'BSL','stock_name' => 'BLACKSTONE SENIOR FLOATING R'],
[
'ticker' => 'BSM','stock_name' => 'BLACK STONE MINERALS LP'],
[
'ticker' => 'BSML','stock_name' => 'INVESCO BULLETSHARES 2021 MU'],
[
'ticker' => 'BSMM','stock_name' => 'INVESCO BULLETSHARES 2022 MU'],
[
'ticker' => 'BSMN','stock_name' => 'INVESCO BULLETSHARES 2023 MU'],
[
'ticker' => 'BSMO','stock_name' => 'INVESCO BULLETSHARES 2024 MU'],
[
'ticker' => 'BSMP','stock_name' => 'INVESCO BULLETSHARES 2025 MU'],
[
'ticker' => 'BSMQ','stock_name' => 'INVESCO BULLETSHARES 2026 MU'],
[
'ticker' => 'BSMR','stock_name' => 'INVESCO BULLETSHARES 2027 MU'],
[
'ticker' => 'BSMS','stock_name' => 'INVESCO BULLETSHARES 2028 MU'],
[
'ticker' => 'BSMT','stock_name' => 'INVESCO BULLETSHARES 2029 MU'],
[
'ticker' => 'BSMU','stock_name' => 'INVESCO BULLETSHARES 2030 MU'],
[
'ticker' => 'BSMV','stock_name' => 'INVESCO BLTSHRS 2031 MUNI'],
[
'ticker' => 'BSMX','stock_name' => 'BANCO SANTANDER MEXICO -ADR'],
[
'ticker' => 'BSN','stock_name' => 'BROADSTONE ACQUISITION COR-A'],
[
'ticker' => 'BSN=','stock_name' => 'BROADSTONE ACQUISITION CORP'],
[
'ticker' => 'BSQR','stock_name' => 'BSQUARE CORP'],
[
'ticker' => 'BSRR','stock_name' => 'SIERRA BANCORP'],
[
'ticker' => 'BST','stock_name' => 'BLACKROCK SCIENCE & TECH TR'],
[
'ticker' => 'BSTZ','stock_name' => 'BLACKROCK SCIENCE & TECH II'],
[
'ticker' => 'BSV','stock_name' => 'VANGUARD SHORT-TERM BOND ETF'],
[
'ticker' => 'BSVN','stock_name' => 'BANK7 CORP'],
[
'ticker' => 'BSX','stock_name' => 'BOSTON SCIENTIFIC CORP'],
[
'ticker' => 'BSY','stock_name' => 'BENTLEY SYSTEMS INC-CLASS B'],
[
'ticker' => 'BTA','stock_name' => 'BLACKROCK LNG-TM MUN ADV TST'],
[
'ticker' => 'BTAI','stock_name' => 'BIOXCEL THERAPEUTICS INC'],
[
'ticker' => 'BTAL','stock_name' => 'AGFIQ US MARKET NEUTRAL ANTI'],
[
'ticker' => 'BTAQ','stock_name' => 'BURGUNDY TECHNOLOGY ACQUIS-A'],
[
'ticker' => 'BTAQU','stock_name' => 'BURGUNDY TECHNOLOGY ACQUISIT'],
[
'ticker' => 'BTB','stock_name' => 'BIT BROTHER LTD'],
[
'ticker' => 'BTBT','stock_name' => 'BIT DIGITAL INC'],
[
'ticker' => 'BTCM','stock_name' => 'BIT MINING LTD - SPON ADR'],
[
'ticker' => 'BTCR','stock_name' => 'VOLT CRYPTO INDUS REV TECH'],
[
'ticker' => 'BTCS','stock_name' => 'BTCS INC'],
[
'ticker' => 'BTCY','stock_name' => 'BIOTRICITY INC'],
[
'ticker' => 'BTEC','stock_name' => 'PRINCIPAL HEALTHCARE INNOVAT'],
[
'ticker' => 'BTEK','stock_name' => 'BLACKROCK FUTURE TECH ETF'],
[
'ticker' => 'BTF','stock_name' => 'VALKYRIE BITCOIN STRATEGY'],
[
'ticker' => 'BTG','stock_name' => 'B2GOLD CORP'],
[
'ticker' => 'BTI','stock_name' => 'BRITISH AMERICAN TOB-SP ADR'],
[
'ticker' => 'BTN','stock_name' => 'BALLANTYNE STRONG INC'],
[
'ticker' => 'BTNB','stock_name' => 'BRIDGETOWN 2 HOLDINGS LTD-A'],
[
'ticker' => 'BTO','stock_name' => 'JOHN HANCOCK FINANCIAL OPPOR'],
[
'ticker' => 'BTRS','stock_name' => 'BTRS HOLDINGS INC'],
[
'ticker' => 'BTT','stock_name' => 'BLACKROCK MUNICIPAL 2030 TAR'],
[
'ticker' => 'BTTR','stock_name' => 'BETTER CHOICE CO INC'],
[
'ticker' => 'BTTX','stock_name' => 'BETTER THERAPEUTICS INC'],
[
'ticker' => 'BTU','stock_name' => 'PEABODY ENERGY CORP'],
[
'ticker' => 'BTWN','stock_name' => 'BRIDGETOWN HOLDINGS LTD-CL A'],
[
'ticker' => 'BTWNU','stock_name' => 'BRIDGETOWN HOLDINGS LTD'],
[
'ticker' => 'BTX','stock_name' => 'BROOKLYN IMMUNOTHERAPEUTICS'],
[
'ticker' => 'BTZ','stock_name' => 'BLACKROCK CREDIT ALLOCATION'],
[
'ticker' => 'BUD','stock_name' => 'ANHEUSER-BUSCH INBEV-SPN ADR'],
[
'ticker' => 'BUDX','stock_name' => 'CANNABIS GROWTH ETF'],
[
'ticker' => 'BUFD','stock_name' => 'FT CBOE VEST FUND DEEP BUFF'],
[
'ticker' => 'BUFF','stock_name' => 'INNOVATOR LADDERED FUND OF U'],
[
'ticker' => 'BUFG','stock_name' => 'FT CBOE VEST BUFF ALLOC GROW'],
[
'ticker' => 'BUFR','stock_name' => 'FT CBOE VEST FUND OF BUFFER'],
[
'ticker' => 'BUFT','stock_name' => 'FT CBOE VEST BUFF ALLOC DEF'],
[
'ticker' => 'BUG','stock_name' => 'GLOBAL X CYBERSECURITY ETF'],
[
'ticker' => 'BUI','stock_name' => 'BLCKRCK UTIL INFRA & PWR OPP'],
[
'ticker' => 'BUL','stock_name' => 'PACER US CASH COWS GROWTH'],
[
'ticker' => 'BULZ','stock_name' => 'MICROSECTORS FANG&INN 3X LEV'],
[
'ticker' => 'BUR','stock_name' => 'BURFORD CAPITAL LTD'],
[
'ticker' => 'BURL','stock_name' => 'BURLINGTON STORES INC'],
[
'ticker' => 'BUSE','stock_name' => 'FIRST BUSEY CORP'],
[
'ticker' => 'BUYZ','stock_name' => 'FRANKLIN DISRUPTIVE COMMERCE'],
[
'ticker' => 'BUZZ','stock_name' => 'VANECK SOCIAL SENTIMENT ETF'],
[
'ticker' => 'BV','stock_name' => 'BRIGHTVIEW HOLDINGS INC'],
[
'ticker' => 'BVH','stock_name' => 'BLUEGREEN VACATIONS HOLDING'],
[
'ticker' => 'BVN','stock_name' => 'CIA DE MINAS BUENAVENTUR-ADR'],
[
'ticker' => 'BVS','stock_name' => 'BIOVENTUS INC - A'],
[
'ticker' => 'BVXV','stock_name' => 'BIONDVAX PHARMACEUTICALS-ADR'],
[
'ticker' => 'BW','stock_name' => 'BABCOCK & WILCOX ENTERPR'],
[
'ticker' => 'BWA','stock_name' => 'BORGWARNER INC'],
[
'ticker' => 'BWAC','stock_name' => 'BETTER WORLD ACQUISITION COR'],
[
'ticker' => 'BWACU','stock_name' => 'BETTER WORLD ACQUISITION COR'],
[
'ticker' => 'BWAY','stock_name' => 'BRAINSWAY LTD-ADR'],
[
'ticker' => 'BWB','stock_name' => 'BRIDGEWATER BANCSHARES INC'],
[
'ticker' => 'BWC','stock_name' => 'BLUE WHALE ACQUISITION COR-A'],
[
'ticker' => 'BWCAU','stock_name' => 'BLUE WHALE ACQUISITION CORP'],
[
'ticker' => 'BWEN','stock_name' => 'BROADWIND INC'],
[
'ticker' => 'BWFG','stock_name' => 'BANKWELL FINANCIAL GROUP INC'],
[
'ticker' => 'BWG','stock_name' => 'BRANDYWINEGLOBAL GLOBAL INCO'],
[
'ticker' => 'BWMN','stock_name' => 'BOWMAN CONSULTING GROUP LTD'],
[
'ticker' => 'BWMX','stock_name' => 'BETTERWARE DE MEXICO SAB DE'],
[
'ticker' => 'BWX','stock_name' => 'SPDR BLOOMBERG INTERNATIONAL'],
[
'ticker' => 'BWXT','stock_name' => 'BWX TECHNOLOGIES INC'],
[
'ticker' => 'BWZ','stock_name' => 'SPDR BLOOMBERG SHORT TERM IN'],
[
'ticker' => 'BX','stock_name' => 'BLACKSTONE INC'],
[
'ticker' => 'BXC','stock_name' => 'BLUELINX HOLDINGS INC'],
[
'ticker' => 'BXMT','stock_name' => 'BLACKSTONE MORTGAGE TRU-CL A'],
[
'ticker' => 'BXMX','stock_name' => 'NUVEEN S&P500 BUY-WRT INC FD'],
[
'ticker' => 'BXP','stock_name' => 'BOSTON PROPERTIES INC'],
[
'ticker' => 'BXRX','stock_name' => 'BAUDAX BIO INC'],
[
'ticker' => 'BXSL','stock_name' => 'BLACKSTONE SECURED LENDING F'],
[
'ticker' => 'BY','stock_name' => 'BYLINE BANCORP INC'],
[
'ticker' => 'BYD','stock_name' => 'BOYD GAMING CORP'],
[
'ticker' => 'BYFC','stock_name' => 'BROADWAY FINANCIAL CORP/DE'],
[
'ticker' => 'BYLD','stock_name' => 'ISHARES YIELD OPTIMIZED BOND'],
[
'ticker' => 'BYM','stock_name' => 'BLACKROCK MUNICIPAL INCOME Q'],
[
'ticker' => 'BYND','stock_name' => 'BEYOND MEAT INC'],
[
'ticker' => 'BYRN','stock_name' => 'BYRNA TECHNOLOGIES INC'],
[
'ticker' => 'BYSI','stock_name' => 'BEYONDSPRING INC'],
[
'ticker' => 'BYTE','stock_name' => 'ROUNDHILL IO DIGITAL INFRA'],
[
'ticker' => 'BYTS','stock_name' => 'BYTE ACQUISITION CORP - A'],
[
'ticker' => 'BYTSU','stock_name' => 'BYTE ACQUISITION CORP'],
[
'ticker' => 'BZ','stock_name' => 'KANZHUN LTD'],
[
'ticker' => 'BZH','stock_name' => 'BEAZER HOMES USA INC'],
[
'ticker' => 'BZQ','stock_name' => 'PROSHARES ULTRASHORT MSCI BR'],
[
'ticker' => 'BZUN','stock_name' => 'BAOZUN INC-SPN ADR'],
[
'ticker' => 'C','stock_name' => 'CITIGROUP INC'],
[
'ticker' => 'CAAP','stock_name' => 'CORP AMERICA AIRPORTS SA'],
[
'ticker' => 'CAAS','stock_name' => 'CHINA AUTOMOTIVE SYSTEMS INC'],
[
'ticker' => 'CABA','stock_name' => 'CABALETTA BIO INC'],
[
'ticker' => 'CABO','stock_name' => 'CABLE ONE INC'],
[
'ticker' => 'CAC','stock_name' => 'CAMDEN NATIONAL CORP'],
[
'ticker' => 'CACC','stock_name' => 'CREDIT ACCEPTANCE CORP'],
[
'ticker' => 'CACG','stock_name' => 'CLEARBRIDGE ALL CAP GROWTH E'],
[
'ticker' => 'CACI','stock_name' => 'CACI INTERNATIONAL INC -CL A'],
[
'ticker' => 'CADE','stock_name' => 'CADENCE BANK'],
[
'ticker' => 'CADL','stock_name' => 'CANDEL THERAPEUTICS INC'],
[
'ticker' => 'CAE','stock_name' => 'CAE INC'],
[
'ticker' => 'CAF','stock_name' => 'MORGAN STANLEY CHINA A SHARE'],
[
'ticker' => 'CAG','stock_name' => 'CONAGRA BRANDS INC'],
[
'ticker' => 'CAH','stock_name' => 'CARDINAL HEALTH INC'],
[
'ticker' => 'CAI','stock_name' => 'CAI INTERNATIONAL INC'],
[
'ticker' => 'CAJ','stock_name' => 'CANON INC-SPONS ADR'],
[
'ticker' => 'CAKE','stock_name' => 'CHEESECAKE FACTORY INC/THE'],
[
'ticker' => 'CAL','stock_name' => 'CALERES INC'],
[
'ticker' => 'CALA','stock_name' => 'CALITHERA BIOSCIENCES INC'],
[
'ticker' => 'CALB','stock_name' => 'CALIFORNIA BANCORP INC'],
[
'ticker' => 'CALF','stock_name' => 'PACER US SMALL CAP CASH COWS'],
[
'ticker' => 'CALM','stock_name' => 'CAL-MAINE FOODS INC'],
[
'ticker' => 'CALT','stock_name' => 'CALLIDITAS THERAPEUTICS-ADR'],
[
'ticker' => 'CALX','stock_name' => 'CALIX INC'],
[
'ticker' => 'CAMP','stock_name' => 'CALAMP CORP'],
[
'ticker' => 'CAMT','stock_name' => 'CAMTEK LTD'],
[
'ticker' => 'CAN','stock_name' => 'CANAAN INC'],
[
'ticker' => 'CANE','stock_name' => 'TEUCRIUM SUGAR FUND'],
[
'ticker' => 'CANF','stock_name' => 'CAN FITE BIOPHARMA LTD-ADR'],
[
'ticker' => 'CANG','stock_name' => 'CANGO INC/KY - ADR'],
[
'ticker' => 'CANO','stock_name' => 'CANO HEALTH INC'],
[
'ticker' => 'CAPE','stock_name' => 'IPATH SHILLER CAPE ETN'],
[
'ticker' => 'CAPL','stock_name' => 'CROSSAMERICA PARTNERS LP'],
[
'ticker' => 'CAPR','stock_name' => 'CAPRICOR THERAPEUTICS INC'],
[
'ticker' => 'CAR','stock_name' => 'AVIS BUDGET GROUP INC'],
[
'ticker' => 'CARA','stock_name' => 'CARA THERAPEUTICS INC'],
[
'ticker' => 'CARE','stock_name' => 'CARTER BANKSHARES INC'],
[
'ticker' => 'CARG','stock_name' => 'CARGURUS INC'],
[
'ticker' => 'CARR','stock_name' => 'CARRIER GLOBAL CORP'],
[
'ticker' => 'CARS','stock_name' => 'CARS.COM INC'],
[
'ticker' => 'CARV','stock_name' => 'CARVER BANCORP INC'],
[
'ticker' => 'CARZ','stock_name' => 'FIRST TRUST NASDAQ GLOBAL AU'],
[
'ticker' => 'CAS','stock_name' => 'CASCADE ACQUISITION COR-CL A'],
[
'ticker' => 'CAS=','stock_name' => 'CASCADE ACQUISITION CORP'],
[
'ticker' => 'CASA','stock_name' => 'CASA SYSTEMS INC'],
[
'ticker' => 'CASH','stock_name' => 'META FINANCIAL GROUP INC'],
[
'ticker' => 'CASI','stock_name' => 'CASI PHARMACEUTICALS INC'],
[
'ticker' => 'CASS','stock_name' => 'CASS INFORMATION SYSTEMS INC'],
[
'ticker' => 'CASY','stock_name' => 'CASEY\'S GENERAL STORES INC'],
[
'ticker' => 'CAT','stock_name' => 'CATERPILLAR INC'],
[
'ticker' => 'CATC','stock_name' => 'CAMBRIDGE BANCORP'],
[
'ticker' => 'CATH','stock_name' => 'GLOBAL X S&P 500 CA VAL ETF'],
[
'ticker' => 'CATO','stock_name' => 'CATO CORP-CLASS A'],
[
'ticker' => 'CATY','stock_name' => 'CATHAY GENERAL BANCORP'],
[
'ticker' => 'CB','stock_name' => 'CHUBB LTD'],
[
'ticker' => 'CBAH','stock_name' => 'CBRE ACQUISITION HOLDINGS-A'],
[
'ticker' => 'CBAH=','stock_name' => 'CBRE ACQUISITION HOLDINGS IN'],
[
'ticker' => 'CBAN','stock_name' => 'COLONY BANKCORP'],
[
'ticker' => 'CBAT','stock_name' => 'CBAK ENERGY TECHNOLOGY INC'],
[
'ticker' => 'CBAY','stock_name' => 'CYMABAY THERAPEUTICS INC'],
[
'ticker' => 'CBD','stock_name' => 'CIA BRASILEIRA DE DIS- ADR'],
[
'ticker' => 'CBFV','stock_name' => 'CB FINANCIAL SERVICES INC'],
[
'ticker' => 'CBH','stock_name' => 'VIRTUS ALLIANZGI CVRT 2024'],
[
'ticker' => 'CBIO','stock_name' => 'CATALYST BIOSCIENCES INC'],
[
'ticker' => 'CBL','stock_name' => 'CBL & ASSOCIATES PROPERTIES'],
[
'ticker' => 'CBLS','stock_name' => 'CHANGEBRIDGE CAPITAL LONG/SH'],
[
'ticker' => 'CBNK','stock_name' => 'CAPITAL BANCORP INC/MD'],
[
'ticker' => 'CBOE','stock_name' => 'CBOE GLOBAL MARKETS INC'],
[
'ticker' => 'CBON','stock_name' => 'VANECK CHINA BOND ETF'],
[
'ticker' => 'CBRE','stock_name' => 'CBRE GROUP INC - A'],
[
'ticker' => 'CBRL','stock_name' => 'CRACKER BARREL OLD COUNTRY'],
[
'ticker' => 'CBSE','stock_name' => 'CHANGEBRIDGE CAPITAL SUST EQ'],
[
'ticker' => 'CBSH','stock_name' => 'COMMERCE BANCSHARES INC'],
[
'ticker' => 'CBT','stock_name' => 'CABOT CORP'],
[
'ticker' => 'CBTG','stock_name' => 'CABOT GROWTH ETF'],
[
'ticker' => 'CBTX','stock_name' => 'CBTX INC'],
[
'ticker' => 'CBU','stock_name' => 'COMMUNITY BANK SYSTEM INC'],
[
'ticker' => 'CBZ','stock_name' => 'CBIZ INC'],
[
'ticker' => 'CC','stock_name' => 'CHEMOURS CO/THE'],
[
'ticker' => 'CCAC','stock_name' => 'CITIC CAPITAL ACQUISITION-A'],
[
'ticker' => 'CCAC=','stock_name' => 'CITIC CAPITAL ACQUISITION'],
[
'ticker' => 'CCAI','stock_name' => 'CASCADIA ACQUISITION CO-CL A'],
[
'ticker' => 'CCAIU','stock_name' => 'CASCADIA ACQUISITION CORP'],
[
'ticker' => 'CCAP','stock_name' => 'CRESCENT CAPITAL BDC INC'],
[
'ticker' => 'CCB','stock_name' => 'COASTAL FINANCIAL CORP/WA'],
[
'ticker' => 'CCBG','stock_name' => 'CAPITAL CITY BANK GROUP INC'],
[
'ticker' => 'CCCC','stock_name' => 'C4 THERAPEUTICS INC'],
[
'ticker' => 'CCCS','stock_name' => 'CCC INTELLIGENT SOLUTIONS HO'],
[
'ticker' => 'CCD','stock_name' => 'CALAMOS DYNAMIC CONVERTIBLE'],
[
'ticker' => 'CCEL','stock_name' => 'CRYO-CELL INTL INC'],
[
'ticker' => 'CCEP','stock_name' => 'COCA-COLA EUROPACIFIC PARTNE'],
[
'ticker' => 'CCF','stock_name' => 'CHASE CORP'],
[
'ticker' => 'CCI','stock_name' => 'CROWN CASTLE INTL CORP'],
[
'ticker' => 'CCJ','stock_name' => 'CAMECO CORP'],
[
'ticker' => 'CCK','stock_name' => 'CROWN HOLDINGS INC'],
[
'ticker' => 'CCL','stock_name' => 'CARNIVAL CORP'],
[
'ticker' => 'CCLP','stock_name' => 'CSI COMPRESSCO LP'],
[
'ticker' => 'CCM','stock_name' => 'CONCORD MEDICAL - SPON ADR'],
[
'ticker' => 'CCMP','stock_name' => 'CMC MATERIALS INC'],
[
'ticker' => 'CCNC','stock_name' => 'CODE CHAIN NEW CONTINENT LTD'],
[
'ticker' => 'CCNE','stock_name' => 'CNB FINANCIAL CORP/PA'],
[
'ticker' => 'CCO','stock_name' => 'CLEAR CHANNEL OUTDOOR HOLDIN'],
[
'ticker' => 'CCOI','stock_name' => 'COGENT COMMUNICATIONS HOLDIN'],
[
'ticker' => 'CCOR','stock_name' => 'CORE ALTERNATIVE ETF'],
[
'ticker' => 'CCRN','stock_name' => 'CROSS COUNTRY HEALTHCARE INC'],
[
'ticker' => 'CCRV','stock_name' => 'ISHARES COMM CURVE CARRY STR'],
[
'ticker' => 'CCS','stock_name' => 'CENTURY COMMUNITIES INC'],
[
'ticker' => 'CCSI','stock_name' => 'CONSENSUS CLOUD SOLUTION'],
[
'ticker' => 'CCTSU','stock_name' => 'CACTUS ACQUISITION CORP 1 LT'],
[
'ticker' => 'CCU','stock_name' => 'CIA CERVECERIAS UNI-SPON ADR'],
[
'ticker' => 'CCV','stock_name' => 'CHURCHILL CAPITAL CORP V-A'],
[
'ticker' => 'CCV=','stock_name' => 'CHURCHILL CAPITAL CORP V'],
[
'ticker' => 'CCVI','stock_name' => 'CHURCHILL CAPITAL CORP VI-A'],
[
'ticker' => 'CCVI=','stock_name' => 'CHURCHILL CAPITAL CORP VI'],
[
'ticker' => 'CCXI','stock_name' => 'CHEMOCENTRYX INC'],
[
'ticker' => 'CD','stock_name' => 'CHINDATA GROUP HOLDINGS-ADR'],
[
'ticker' => 'CDAK','stock_name' => 'CODIAK BIOSCIENCES INC'],
[
'ticker' => 'CDAQU','stock_name' => 'COMPASS DIGITAL ACQUISITION'],
[
'ticker' => 'CDAY','stock_name' => 'CERIDIAN HCM HOLDING INC'],
[
'ticker' => 'CDC','stock_name' => 'VICTORYSHARES US EQ INCOME E'],
[
'ticker' => 'CDE','stock_name' => 'COEUR MINING INC'],
[
'ticker' => 'CDEV','stock_name' => 'CENTENNIAL RESOURCE DEVELO-A'],
[
'ticker' => 'CDK','stock_name' => 'CDK GLOBAL INC'],
[
'ticker' => 'CDL','stock_name' => 'VICTORYSHARES US LARGE CAP H'],
[
'ticker' => 'CDLA','stock_name' => 'CANDELA MEDICAL INC'],
[
'ticker' => 'CDLX','stock_name' => 'CARDLYTICS INC'],
[
'ticker' => 'CDMO','stock_name' => 'AVID BIOSERVICES INC'],
[
'ticker' => 'CDNA','stock_name' => 'CAREDX INC'],
[
'ticker' => 'CDNS','stock_name' => 'CADENCE DESIGN SYS INC'],
[
'ticker' => 'CDOR','stock_name' => 'CONDOR HOSPITALITY TRUST INC'],
[
'ticker' => 'CDR','stock_name' => 'CEDAR REALTY TRUST INC'],
[
'ticker' => 'CDRE','stock_name' => 'CADRE HOLDING INC'],
[
'ticker' => 'CDTX','stock_name' => 'CIDARA THERAPEUTICS INC'],
[
'ticker' => 'CDW','stock_name' => 'CDW CORP/DE'],
[
'ticker' => 'CDXC','stock_name' => 'CHROMADEX CORP'],
[
'ticker' => 'CDXS','stock_name' => 'CODEXIS INC'],
[
'ticker' => 'CDZI','stock_name' => 'CADIZ INC'],
[
'ticker' => 'CE','stock_name' => 'CELANESE CORP'],
[
'ticker' => 'CEA','stock_name' => 'CHINA EASTERN AIRLINES-ADS'],
[
'ticker' => 'CECE','stock_name' => 'CECO ENVIRONMENTAL CORP'],
[
'ticker' => 'CEE','stock_name' => 'CENTRAL AND EASTERN EUROPE F'],
[
'ticker' => 'CEF','stock_name' => 'SPROTT PHYSICAL GOLD AND SIL'],
[
'ticker' => 'CEFA','stock_name' => 'GLOBAL X S&P CATH VAL DEVEL'],
[
'ticker' => 'CEFD','stock_name' => 'ETRACS 150% CL END FUND ETN'],
[
'ticker' => 'CEFS','stock_name' => 'SABA CLOSED END FUNDS ETF'],
[
'ticker' => 'CEI','stock_name' => 'CAMBER ENERGY INC'],
[
'ticker' => 'CEIX','stock_name' => 'CONSOL ENERGY INC'],
[
'ticker' => 'CELC','stock_name' => 'CELCUITY INC'],
[
'ticker' => 'CELH','stock_name' => 'CELSIUS HOLDINGS INC'],
[
'ticker' => 'CELP','stock_name' => 'CYPRESS ENVIRONMENTAL PARTNE'],
[
'ticker' => 'CELU','stock_name' => 'CELULARITY INC'],
[
'ticker' => 'CEM','stock_name' => 'CLEARBRIDGE MLP & MIDSTREAM'],
[
'ticker' => 'CEMB','stock_name' => 'ISHARES JP MORGAN EM CORPORA'],
[
'ticker' => 'CEMI','stock_name' => 'CHEMBIO DIAGNOSTICS INC'],
[
'ticker' => 'CEN','stock_name' => 'CENTER COAST BROOKFIELD MLP'],
[
'ticker' => 'CENQ','stock_name' => 'CENAQ ENERGY CORP-CLASS A'],
[
'ticker' => 'CENQU','stock_name' => 'CENAQ ENERGY CORP'],
[
'ticker' => 'CENT','stock_name' => 'CENTRAL GARDEN & PET CO'],
[
'ticker' => 'CENTA','stock_name' => 'CENTRAL GARDEN AND PET CO-A'],
[
'ticker' => 'CENX','stock_name' => 'CENTURY ALUMINUM COMPANY'],
[
'ticker' => 'CEPU','stock_name' => 'CENTRAL PUERTO-SPONSORED ADR'],
[
'ticker' => 'CEQP','stock_name' => 'CRESTWOOD EQUITY PARTNERS LP'],
[
'ticker' => 'CERE','stock_name' => 'CEREVEL THERAPEUTICS HOLDING'],
[
'ticker' => 'CERN','stock_name' => 'CERNER CORP'],
[
'ticker' => 'CERS','stock_name' => 'CERUS CORP'],
[
'ticker' => 'CERT','stock_name' => 'CERTARA INC'],
[
'ticker' => 'CET','stock_name' => 'CENTRAL SECURITIES CORP'],
[
'ticker' => 'CETX','stock_name' => 'CEMTREX INC'],
[
'ticker' => 'CEV','stock_name' => 'EATON VANCE CA MUNI INC TRST'],
[
'ticker' => 'CEVA','stock_name' => 'CEVA INC'],
[
'ticker' => 'CEW','stock_name' => 'WISDOMTREE EMERGING CURRENCY'],
[
'ticker' => 'CEY','stock_name' => 'VICTORYSHARES EMERGING MARKE'],
[
'ticker' => 'CF','stock_name' => 'CF INDUSTRIES HOLDINGS INC'],
[
'ticker' => 'CFA','stock_name' => 'VICTORYSHARES US 500 VOLATIL'],
[
'ticker' => 'CFB','stock_name' => 'CROSSFIRST BANKSHARES INC'],
[
'ticker' => 'CFBK','stock_name' => 'CF BANKSHARES INC'],
[
'ticker' => 'CFCV','stock_name' => 'CLEARBRIDGE FOCUS VALUE ESG'],
[
'ticker' => 'CFFE','stock_name' => 'CF ACQUISITION CORP VIII-A'],
[
'ticker' => 'CFFEU','stock_name' => 'CF ACQUISITION CORP VIII'],
[
'ticker' => 'CFFI','stock_name' => 'C & F FINANCIAL CORP'],
[
'ticker' => 'CFFN','stock_name' => 'CAPITOL FEDERAL FINANCIAL IN'],
[
'ticker' => 'CFFVU','stock_name' => 'CF ACQUISITION CORP V'],
[
'ticker' => 'CFG','stock_name' => 'CITIZENS FINANCIAL GROUP'],
[
'ticker' => 'CFIV','stock_name' => 'CF ACQUISITION CORP IV-CL A'],
[
'ticker' => 'CFIVU','stock_name' => 'CF ACQUISITION CORP IV'],
[
'ticker' => 'CFLT','stock_name' => 'CONFLUENT INC-CLASS A'],
[
'ticker' => 'CFMS','stock_name' => 'CONFORMIS INC'],
[
'ticker' => 'CFO','stock_name' => 'VICTORYSHARES US 500 ENHANCE'],
[
'ticker' => 'CFR','stock_name' => 'CULLEN/FROST BANKERS INC'],
[
'ticker' => 'CFRX','stock_name' => 'CONTRAFECT CORP'],
[
'ticker' => 'CFV','stock_name' => 'CF ACQUISITION CORP V-A'],
[
'ticker' => 'CFVI','stock_name' => 'CF ACQUISITION CORP VI-CLS A'],
[
'ticker' => 'CFVIU','stock_name' => 'CF ACQUISITION CORP VI'],
[
'ticker' => 'CFX','stock_name' => 'COLFAX CORP'],
[
'ticker' => 'CG','stock_name' => 'CARLYLE GROUP INC/THE'],
[
'ticker' => 'CGA','stock_name' => 'CHINA GREEN AGRICULTURE INC'],
[
'ticker' => 'CGAU','stock_name' => 'CENTERRA GOLD INC'],
[
'ticker' => 'CGBD','stock_name' => 'TCG BDC INC'],
[
'ticker' => 'CGC','stock_name' => 'CANOPY GROWTH CORP'],
[
'ticker' => 'CGEM','stock_name' => 'CULLINAN ONCOLOGY INC'],
[
'ticker' => 'CGEN','stock_name' => 'COMPUGEN LTD'],
[
'ticker' => 'CGNT','stock_name' => 'COGNYTE SOFTWARE LTD'],
[
'ticker' => 'CGNX','stock_name' => 'COGNEX CORP'],
[
'ticker' => 'CGO','stock_name' => 'CALAMOS GLOBAL TOTAL RETURN'],
[
'ticker' => 'CGRN','stock_name' => 'CAPSTONE GREEN ENERGY CORP'],
[
'ticker' => 'CGTX','stock_name' => 'COGNITION THERAPEUTICS INC'],
[
'ticker' => 'CGW','stock_name' => 'INVESCO S&P GLOBAL WATER IND'],
[
'ticker' => 'CHAA','stock_name' => 'CATCHA INVESTMENT CORP-A'],
[
'ticker' => 'CHAA=','stock_name' => 'CATCHA INVESTMENT CORP'],
[
'ticker' => 'CHAD','stock_name' => 'DRX DLY CHINA A-SHR BEAR 1X'],
[
'ticker' => 'CHAU','stock_name' => 'DRX DLY CHINA A-SHR BULL 2X'],
[
'ticker' => 'CHB','stock_name' => 'GLOBAL X CHINA BIOTECH INNOV'],
[
'ticker' => 'CHCI','stock_name' => 'COMSTOCK HOLDING COMPANIES'],
[
'ticker' => 'CHCO','stock_name' => 'CITY HOLDING CO'],
[
'ticker' => 'CHCT','stock_name' => 'COMMUNITY HEALTHCARE TRUST I'],
[
'ticker' => 'CHD','stock_name' => 'CHURCH & DWIGHT CO INC'],
[
'ticker' => 'CHDN','stock_name' => 'CHURCHILL DOWNS INC'],
[
'ticker' => 'CHE','stock_name' => 'CHEMED CORP'],
[
'ticker' => 'CHEF','stock_name' => 'CHEFS\' WAREHOUSE INC/THE'],
[
'ticker' => 'CHEK','stock_name' => 'CHECK CAP LTD'],
[
'ticker' => 'CHGG','stock_name' => 'CHEGG INC'],
[
'ticker' => 'CHGX','stock_name' => 'CHANGE FINANCE US LARGE CAP'],
[
'ticker' => 'CHH','stock_name' => 'CHOICE HOTELS INTL INC'],
[
'ticker' => 'CHI','stock_name' => 'CALAMOS CONVERTIBLE OPP&INC'],
[
'ticker' => 'CHIC','stock_name' => 'GLOBAL X MSCI CHINA COMMUNIC'],
[
'ticker' => 'CHIE','stock_name' => 'GLOBAL X MSCI CHINA ENERGY E'],
[
'ticker' => 'CHIH','stock_name' => 'GLOBAL X MSCI CHINA HEALTH'],
[
'ticker' => 'CHII','stock_name' => 'GLOBAL X MSCI CHINA INDUSTRI'],
[
'ticker' => 'CHIK','stock_name' => 'GLOBAL X MSCI CHINA INFO ETF'],
[
'ticker' => 'CHIM','stock_name' => 'GLOBAL X MSCI CHINA MATERIAL'],
[
'ticker' => 'CHIQ','stock_name' => 'GLOBAL X MSCI CHINA CONSUMER'],
[
'ticker' => 'CHIR','stock_name' => 'GBL X MSCI CHINA REAL ESTATE'],
[
'ticker' => 'CHIS','stock_name' => 'GBL X MSCI CHINA CONSUMER ST'],
[
'ticker' => 'CHIU','stock_name' => 'GLOBAL X MSCI CHINA UTIL ETF'],
[
'ticker' => 'CHIX','stock_name' => 'GLOBAL X MSCI CHINA FINANCIA'],
[
'ticker' => 'CHK','stock_name' => 'CHESAPEAKE ENERGY CORP'],
[
'ticker' => 'CHKP','stock_name' => 'CHECK POINT SOFTWARE TECH'],
[
'ticker' => 'CHLD','stock_name' => 'LIFEGOAL CHILDREN INVESTMENT'],
[
'ticker' => 'CHMG','stock_name' => 'CHEMUNG FINANCIAL CORP'],
[
'ticker' => 'CHMI','stock_name' => 'CHERRY HILL MORTGAGE INVESTM'],
[
'ticker' => 'CHN','stock_name' => 'CHINA FUND INC'],
[
'ticker' => 'CHNA','stock_name' => 'LONCAR CHINA BIOPHARMA ETF'],
[
'ticker' => 'CHNG','stock_name' => 'CHANGE HEALTHCARE INC'],
[
'ticker' => 'CHNR','stock_name' => 'CHINA NATURAL RESOURCES INC'],
[
'ticker' => 'CHPM','stock_name' => 'CHP MERGER CORP-CLASS A'],
[
'ticker' => 'CHPMU','stock_name' => 'CHP MERGER CORP'],
[
'ticker' => 'CHPT','stock_name' => 'CHARGEPOINT HOLDINGS INC'],
[
'ticker' => 'CHRA','stock_name' => 'CHARAH SOLUTIONS INC'],
[
'ticker' => 'CHRS','stock_name' => 'COHERUS BIOSCIENCES INC'],
[
'ticker' => 'CHRW','stock_name' => 'C.H. ROBINSON WORLDWIDE INC'],
[
'ticker' => 'CHS','stock_name' => 'CHICO\'S FAS INC'],
[
'ticker' => 'CHT','stock_name' => 'CHUNGHWA TELECOM LT-SPON ADR'],
[
'ticker' => 'CHTR','stock_name' => 'CHARTER COMMUNICATIONS INC-A'],
[
'ticker' => 'CHUY','stock_name' => 'CHUY\'S HOLDINGS INC'],
[
'ticker' => 'CHW','stock_name' => 'CALAMOS GLOBAL DYNAMIC INCOM'],
[
'ticker' => 'CHWA','stock_name' => 'CHW ACQUISITION CORP'],
[
'ticker' => 'CHWAU','stock_name' => 'CHW ACQUISITION CORP'],
[
'ticker' => 'CHWY','stock_name' => 'CHEWY INC - CLASS A'],
[
'ticker' => 'CHX','stock_name' => 'CHAMPIONX CORP'],
[
'ticker' => 'CHY','stock_name' => 'CALAMOS CVT AND HIGH INCOME'],
[
'ticker' => 'CI','stock_name' => 'CIGNA CORP'],
[
'ticker' => 'CIA','stock_name' => 'CITIZENS INC'],
[
'ticker' => 'CIB','stock_name' => 'BANCOLOMBIA S.A.-SPONS ADR'],
[
'ticker' => 'CIBR','stock_name' => 'FIRST TRUST NASDAQ CYBERSECU'],
[
'ticker' => 'CID','stock_name' => 'VICTORYSHARES INTERNATIONAL'],
[
'ticker' => 'CIDM','stock_name' => 'CINEDIGM CORP - A'],
[
'ticker' => 'CIEN','stock_name' => 'CIENA CORP'],
[
'ticker' => 'CIF','stock_name' => 'MFS INTERMEDIATE HIGH INC FN'],
[
'ticker' => 'CIFR','stock_name' => 'CIPHER MINING INC'],
[
'ticker' => 'CIG','stock_name' => 'CIA ENERGETICA DE-SPON ADR'],
[
'ticker' => 'CIG.C','stock_name' => 'CIA ENERGETICA DE-SPON ADR'],
[
'ticker' => 'CIGI','stock_name' => 'COLLIERS INTERNATIONAL GROUP'],
[
'ticker' => 'CIH','stock_name' => 'CHINA INDEX HDS-ADR'],
[
'ticker' => 'CII','stock_name' => 'BLACKROCK ENH CAP AND INC'],
[
'ticker' => 'CIIGU','stock_name' => 'CIIG CAPITAL PARTNERS II INC'],
[
'ticker' => 'CIK','stock_name' => 'CREDIT SUISSE ASSET MGMT INC'],
[
'ticker' => 'CIL','stock_name' => 'VICTORYSHARES INTERNATIONAL'],
[
'ticker' => 'CIM','stock_name' => 'CHIMERA INVESTMENT CORP'],
[
'ticker' => 'CINF','stock_name' => 'CINCINNATI FINANCIAL CORP'],
[
'ticker' => 'CING','stock_name' => 'CINGULATE INC'],
[
'ticker' => 'CINR','stock_name' => 'CINER RESOURCES LP'],
[
'ticker' => 'CIO','stock_name' => 'CITY OFFICE REIT INC'],
[
'ticker' => 'CION','stock_name' => 'CION INVESTMENT CORP'],
[
'ticker' => 'CIR','stock_name' => 'CIRCOR INTERNATIONAL INC'],
[
'ticker' => 'CIT','stock_name' => 'CIT GROUP INC'],
[
'ticker' => 'CIVB','stock_name' => 'CIVISTA BANCSHARES INC'],
[
'ticker' => 'CIVI','stock_name' => 'CIVITAS RESOURCES INC'],
[
'ticker' => 'CIX','stock_name' => 'COMPX INTERNATIONAL INC'],
[
'ticker' => 'CIXX','stock_name' => 'CI FINANCIAL CORP'],
[
'ticker' => 'CIZ','stock_name' => 'VICTORYSHARES DEVELOPED ENHA'],
[
'ticker' => 'CIZN','stock_name' => 'CITIZENS HOLDING COMPANY'],
[
'ticker' => 'CJJD','stock_name' => 'CHINA JO-JO DRUGSTORES HOLDI'],
[
'ticker' => 'CKPT','stock_name' => 'CHECKPOINT THERAPEUTICS INC'],
[
'ticker' => 'CKX','stock_name' => 'CKX LANDS INC'],
[
'ticker' => 'CL','stock_name' => 'COLGATE-PALMOLIVE CO'],
[
'ticker' => 'CLAA','stock_name' => 'COLONNADE ACQUISITION CORP-A'],
[
'ticker' => 'CLAA=','stock_name' => 'COLONNADE ACQUISITION CORP I'],
[
'ticker' => 'CLAQ','stock_name' => 'CLEANTECH ACQUISITION CORP'],
[
'ticker' => 'CLAQR','stock_name' => 'CLEANTECH ACQUISITION CO-RTS'],
[
'ticker' => 'CLAQU','stock_name' => 'CLEANTECH ACQUISITION CORP'],
[
'ticker' => 'CLAR','stock_name' => 'CLARUS CORP'],
[
'ticker' => 'CLAS','stock_name' => 'CLASS ACCELERATION CORP-A'],
[
'ticker' => 'CLAS=','stock_name' => 'CLASS ACCELERATION CORP'],
[
'ticker' => 'CLAY','stock_name' => 'CHAVANT CAPITAL ACQ CORP'],
[
'ticker' => 'CLAYU','stock_name' => 'CHAVANT CAPITAL ACQ CORP'],
[
'ticker' => 'CLB','stock_name' => 'CORE LABORATORIES N.V.'],
[
'ticker' => 'CLBK','stock_name' => 'COLUMBIA FINANCIAL INC'],
[
'ticker' => 'CLBR','stock_name' => 'COLOMBIER ACQUISITION CORP-A'],
[
'ticker' => 'CLBR=','stock_name' => 'COLOMBIER ACQUISITION CORP'],
[
'ticker' => 'CLBS','stock_name' => 'CALADRIUS BIOSCIENCES INC'],
[
'ticker' => 'CLBT','stock_name' => 'CELLEBRITE DI LTD'],
[
'ticker' => 'CLDL','stock_name' => 'DIREXION DAILY CLOUD BULL 2X'],
[
'ticker' => 'CLDS','stock_name' => 'DIREXION DAILY CLOUD BEAR 2X'],
[
'ticker' => 'CLDT','stock_name' => 'CHATHAM LODGING TRUST'],
[
'ticker' => 'CLDX','stock_name' => 'CELLDEX THERAPEUTICS INC'],
[
'ticker' => 'CLEU','stock_name' => 'CHINA LIBERAL EDUCATION HOLD'],
[
'ticker' => 'CLF','stock_name' => 'CLEVELAND-CLIFFS INC'],
[
'ticker' => 'CLFD','stock_name' => 'CLEARFIELD INC'],
[
'ticker' => 'CLGN','stock_name' => 'COLLPLANT BIOTECHNOLOGIES LT'],
[
'ticker' => 'CLH','stock_name' => 'CLEAN HARBORS INC'],
[
'ticker' => 'CLI','stock_name' => 'MACK-CALI REALTY CORP'],
[
'ticker' => 'CLIM','stock_name' => 'CLIMATE REAL IMPACT SOLUTI-A'],
[
'ticker' => 'CLIM=','stock_name' => 'CLIMATE REAL IMPACT SOLUTION'],
[
'ticker' => 'CLIR','stock_name' => 'CLEARSIGN TECHNOLOGIES CORP'],
[
'ticker' => 'CLIX','stock_name' => 'PROSHARES LONG ONLINE/SHORT'],
[
'ticker' => 'CLLS','stock_name' => 'CELLECTIS - ADR'],
[
'ticker' => 'CLM','stock_name' => 'CORNERSTONE STRATEGIC VALUE'],
[
'ticker' => 'CLMA','stock_name' => 'ICLIMA GLOBAL DECARBON ENABL'],
[
'ticker' => 'CLMT','stock_name' => 'CALUMET SPECIALTY PRODUCTS'],
[
'ticker' => 'CLNE','stock_name' => 'CLEAN ENERGY FUELS CORP'],
[
'ticker' => 'CLNN','stock_name' => 'CLENE INC'],
[
'ticker' => 'CLNR','stock_name' => 'IQ CLEANER TRANSPORT ETF'],
[
'ticker' => 'CLOE','stock_name' => 'CLOVER LEAF CAPITAL CORP -A'],
[
'ticker' => 'CLOER','stock_name' => 'CLOVER LEAF CAPITAL CORP-RTS'],
[
'ticker' => 'CLOEU','stock_name' => 'CLOVER LEAF CAPITAL CORP'],
[
'ticker' => 'CLOU','stock_name' => 'GLOBAL X CLOUD COMPUTING ETF'],
[
'ticker' => 'CLOV','stock_name' => 'CLOVER HEALTH INVESTMENTS CO'],
[
'ticker' => 'CLPR','stock_name' => 'CLIPPER REALTY INC'],
[
'ticker' => 'CLPS','stock_name' => 'CLPS INC'],
[
'ticker' => 'CLPT','stock_name' => 'CLEARPOINT NEURO INC'],
[
'ticker' => 'CLR','stock_name' => 'CONTINENTAL RESOURCES INC/OK'],
[
'ticker' => 'CLRB','stock_name' => 'CELLECTAR BIOSCIENCES INC'],
[
'ticker' => 'CLRG','stock_name' => 'IQ CHAIKIN US LARGE CAP ETF'],
[
'ticker' => 'CLRM','stock_name' => 'CLARIM ACQUISITION CORP-CL A'],
[
'ticker' => 'CLRMU','stock_name' => 'CLARIM ACQUISITION CORP'],
[
'ticker' => 'CLRO','stock_name' => 'CLEARONE INC'],
[
'ticker' => 'CLS','stock_name' => 'CELESTICA INC'],
[
'ticker' => 'CLSA','stock_name' => 'CABANA TARGET LEADING SECTOR'],
[
'ticker' => 'CLSC','stock_name' => 'CABANA TARGET LEADING SECTOR'],
[
'ticker' => 'CLSD','stock_name' => 'CLEARSIDE BIOMEDICAL INC'],
[
'ticker' => 'CLSK','stock_name' => 'CLEANSPARK INC'],
[
'ticker' => 'CLSM','stock_name' => 'CABANA TARGET LEADING SECTOR'],
[
'ticker' => 'CLSN','stock_name' => 'CELSION CORP'],
[
'ticker' => 'CLST','stock_name' => 'CATALYST BANCORP INC'],
[
'ticker' => 'CLTL','stock_name' => 'INVESCO TREASURY COLLATERAL'],
[
'ticker' => 'CLVR','stock_name' => 'CLEVER LEAVES HOLDINGS INC'],
[
'ticker' => 'CLVS','stock_name' => 'CLOVIS ONCOLOGY INC'],
[
'ticker' => 'CLVT','stock_name' => 'CLARIVATE PLC'],
[
'ticker' => 'CLW','stock_name' => 'CLEARWATER PAPER CORP'],
[
'ticker' => 'CLWT','stock_name' => 'EURO TECH HOLDINGS CO LTD'],
[
'ticker' => 'CLX','stock_name' => 'CLOROX COMPANY'],
[
'ticker' => 'CLXT','stock_name' => 'CALYXT INC'],
[
'ticker' => 'CM','stock_name' => 'CAN IMPERIAL BK OF COMMERCE'],
[
'ticker' => 'CMA','stock_name' => 'COMERICA INC'],
[
'ticker' => 'CMAX','stock_name' => 'CAREMAX INC'],
[
'ticker' => 'CMBM','stock_name' => 'CAMBIUM NETWORKS CORP'],
[
'ticker' => 'CMBS','stock_name' => 'ISHARES CMBS ETF'],
[
'ticker' => 'CMC','stock_name' => 'COMMERCIAL METALS CO'],
[
'ticker' => 'CMCL','stock_name' => 'CALEDONIA MINING CORP PLC'],
[
'ticker' => 'CMCM','stock_name' => 'CHEETAH MOBILE INC - ADR'],
[
'ticker' => 'CMCO','stock_name' => 'COLUMBUS MCKINNON CORP/NY'],
[
'ticker' => 'CMCSA','stock_name' => 'COMCAST CORP-CLASS A'],
[
'ticker' => 'CMCT','stock_name' => 'CIM COMMERCIAL TRUST CORP'],
[
'ticker' => 'CMDY','stock_name' => 'ISHARES BLOOMBERG ROLL SELEC'],
[
'ticker' => 'CME','stock_name' => 'CME GROUP INC'],
[
'ticker' => 'CMF','stock_name' => 'ISHARES CALIFORNIA MUNI BOND'],
[
'ticker' => 'CMG','stock_name' => 'CHIPOTLE MEXICAN GRILL INC'],
[
'ticker' => 'CMI','stock_name' => 'CUMMINS INC'],
[
'ticker' => 'CMLS','stock_name' => 'CUMULUS MEDIA INC-CL A'],
[
'ticker' => 'CMLT','stock_name' => 'CM LIFE SCIENCES III INC-A'],
[
'ticker' => 'CMLTU','stock_name' => 'CM LIFE SCIENCES III INC'],
[
'ticker' => 'CMMB','stock_name' => 'CHEMOMAB THERAPEUTICS LTD'],
[
'ticker' => 'CMP','stock_name' => 'COMPASS MINERALS INTERNATION'],
[
'ticker' => 'CMPI','stock_name' => 'CHECKMATE PHARMACEUTICALS IN'],
[
'ticker' => 'CMPR','stock_name' => 'CIMPRESS PLC'],
[
'ticker' => 'CMPS','stock_name' => 'COMPASS PATHWAYS PLC'],
[
'ticker' => 'CMPX','stock_name' => 'COMPASS THERAPEUTICS INC'],
[
'ticker' => 'CMRE','stock_name' => 'COSTAMARE INC'],
[
'ticker' => 'CMRX','stock_name' => 'CHIMERIX INC'],
[
'ticker' => 'CMS','stock_name' => 'CMS ENERGY CORP'],
[
'ticker' => 'CMT','stock_name' => 'CORE MOLDING TECHNOLOGIES IN'],
[
'ticker' => 'CMTG','stock_name' => 'CLAROS MORTGAGE TRUST INC'],
[
'ticker' => 'CMTL','stock_name' => 'COMTECH TELECOMMUNICATIONS'],
[
'ticker' => 'CMU','stock_name' => 'MFS HIGH YIELD MUNICIPAL TRU'],
[
'ticker' => 'CN','stock_name' => 'XTRACKERS MSCI ALL CHINA EQU'],
[
'ticker' => 'CNA','stock_name' => 'CNA FINANCIAL CORP'],
[
'ticker' => 'CNBKA','stock_name' => 'CENTURY BANCORP INC -CL A'],
[
'ticker' => 'CNBS','stock_name' => 'AMPLIFY SEYMOUR CANNABIS ETF'],
[
'ticker' => 'CNC','stock_name' => 'CENTENE CORP'],
[
'ticker' => 'CNCE','stock_name' => 'CONCERT PHARMACEUTICALS INC'],
[
'ticker' => 'CNCR','stock_name' => 'LONCAR CANCER IMMUNOTHERAPY'],
[
'ticker' => 'CND','stock_name' => 'CONCORD ACQUISITION CORP -A'],
[
'ticker' => 'CND=','stock_name' => 'CONCORD ACQUISITION CORP'],
[
'ticker' => 'CNDA','stock_name' => 'CONCORD ACQUISITION CORP -A'],
[
'ticker' => 'CNDA=','stock_name' => 'CONCORD ACQUISITION CORP II'],
[
'ticker' => 'CNDB=','stock_name' => 'CONCORD ACQUISITION CORP III'],
[
'ticker' => 'CNDT','stock_name' => 'CONDUENT INC'],
[
'ticker' => 'CNET','stock_name' => 'ZW DATA ACTION TECHNOLOGIES'],
[
'ticker' => 'CNEY','stock_name' => 'CN ENERGY GROUP INC'],
[
'ticker' => 'CNF','stock_name' => 'CNFINANCE HOLDINGS LTD'],
[
'ticker' => 'CNFR','stock_name' => 'CONIFER HOLDINGS INC'],
[
'ticker' => 'CNHI','stock_name' => 'CNH INDUSTRIAL NV'],
[
'ticker' => 'CNI','stock_name' => 'CANADIAN NATL RAILWAY CO'],
[
'ticker' => 'CNK','stock_name' => 'CINEMARK HOLDINGS INC'],
[
'ticker' => 'CNM','stock_name' => 'CORE & MAIN INC-CLASS A'],
[
'ticker' => 'CNMD','stock_name' => 'CONMED CORP'],
[
'ticker' => 'CNNB','stock_name' => 'CINCINNATI BANCORP INC'],
[
'ticker' => 'CNNE','stock_name' => 'CANNAE HOLDINGS INC'],
[
'ticker' => 'CNO','stock_name' => 'CNO FINANCIAL GROUP INC'],
[
'ticker' => 'CNOB','stock_name' => 'CONNECTONE BANCORP INC'],
[
'ticker' => 'CNP','stock_name' => 'CENTERPOINT ENERGY INC'],
[
'ticker' => 'CNQ','stock_name' => 'CANADIAN NATURAL RESOURCES'],
[
'ticker' => 'CNR','stock_name' => 'CORNERSTONE BUILDING BRANDS'],
[
'ticker' => 'CNRG','stock_name' => 'SPDR S&P KENSHO CLEAN POWER'],
[
'ticker' => 'CNS','stock_name' => 'COHEN & STEERS INC'],
[
'ticker' => 'CNSL','stock_name' => 'CONSOLIDATED COMMUNICATIONS'],
[
'ticker' => 'CNSP','stock_name' => 'CNS PHARMACEUTICALS INC'],
[
'ticker' => 'CNTA','stock_name' => 'CENTESSA PHARMACEUTICALS-ADR'],
[
'ticker' => 'CNTB','stock_name' => 'CONNECT BIOPHARMA HOLDINGS L'],
[
'ticker' => 'CNTG','stock_name' => 'CENTOGENE NV'],
[
'ticker' => 'CNTQ','stock_name' => 'CHARDAN NEXTECH ACQUISITION'],
[
'ticker' => 'CNTQU','stock_name' => 'CHARDAN NEXTECH ACQUISITION'],
[
'ticker' => 'CNTX','stock_name' => 'CONTEXT THERAPEUTICS INC'],
[
'ticker' => 'CNTY','stock_name' => 'CENTURY CASINOS INC'],
[
'ticker' => 'CNVY','stock_name' => 'CONVEY HOLDING PARENT INC'],
[
'ticker' => 'CNX','stock_name' => 'CNX RESOURCES CORP'],
[
'ticker' => 'CNXC','stock_name' => 'CONCENTRIX CORP'],
[
'ticker' => 'CNXN','stock_name' => 'PC CONNECTION INC'],
[
'ticker' => 'CNXT','stock_name' => 'VANECK CAMC SME-CHINEXT'],
[
'ticker' => 'CNYA','stock_name' => 'ISHARES MSCI CHINA A ETF'],
[
'ticker' => 'CO','stock_name' => 'GLOBAL CORD BLOOD CORP'],
[
'ticker' => 'COCO','stock_name' => 'VITA COCO CO INC/THE'],
[
'ticker' => 'COCP','stock_name' => 'COCRYSTAL PHARMA INC'],
[
'ticker' => 'CODA','stock_name' => 'CODA OCTOPUS GROUP INC'],
[
'ticker' => 'CODI','stock_name' => 'COMPASS DIVERSIFIED HOLDINGS'],
[
'ticker' => 'CODX','stock_name' => 'CO-DIAGNOSTICS INC'],
[
'ticker' => 'COE','stock_name' => 'CHINA ONLINE EDUCATION-ADR'],
[
'ticker' => 'COF','stock_name' => 'CAPITAL ONE FINANCIAL CORP'],
[
'ticker' => 'COFS','stock_name' => 'CHOICEONE FINANCIAL SVCS INC'],
[
'ticker' => 'COGT','stock_name' => 'COGENT BIOSCIENCES INC'],
[
'ticker' => 'COHN','stock_name' => 'COHEN & CO INC'],
[
'ticker' => 'COHR','stock_name' => 'COHERENT INC'],
[
'ticker' => 'COHU','stock_name' => 'COHU INC'],
[
'ticker' => 'COIN','stock_name' => 'COINBASE GLOBAL INC -CLASS A'],
[
'ticker' => 'COKE','stock_name' => 'COCA-COLA CONSOLIDATED INC'],
[
'ticker' => 'COLB','stock_name' => 'COLUMBIA BANKING SYSTEM INC'],
[
'ticker' => 'COLD','stock_name' => 'AMERICOLD REALTY TRUST'],
[
'ticker' => 'COLI','stock_name' => 'COLICITY INC-A'],
[
'ticker' => 'COLIU','stock_name' => 'COLICITY INC'],
[
'ticker' => 'COLL','stock_name' => 'COLLEGIUM PHARMACEUTICAL INC'],
[
'ticker' => 'COLM','stock_name' => 'COLUMBIA SPORTSWEAR CO'],
[
'ticker' => 'COM','stock_name' => 'DIREXION AUSPICE BRD CMDTY'],
[
'ticker' => 'COMB','stock_name' => 'GRANITESHARES BCOM BROAD STR'],
[
'ticker' => 'COMM','stock_name' => 'COMMSCOPE HOLDING CO INC'],
[
'ticker' => 'COMP','stock_name' => 'COMPASS INC - CLASS A'],
[
'ticker' => 'COMS','stock_name' => 'COMSOVEREIGN HOLDING CORP'],
[
'ticker' => 'COMT','stock_name' => 'ISHARES GSCI COMMODITY DYNAM'],
[
'ticker' => 'CONE','stock_name' => 'CYRUSONE INC'],
[
'ticker' => 'CONN','stock_name' => 'CONN\'S INC'],
[
'ticker' => 'CONX','stock_name' => 'CONX CORP-CLASS A SHARES'],
[
'ticker' => 'CONXU','stock_name' => 'CONX CORP'],
[
'ticker' => 'COO','stock_name' => 'COOPER COS INC/THE'],
[
'ticker' => 'COOK','stock_name' => 'TRAEGER INC'],
[
'ticker' => 'COOL','stock_name' => 'CORNER GROWTH ACQUISITION-A'],
[
'ticker' => 'COOLU','stock_name' => 'CORNER GROWTH ACQUISITION CO'],
[
'ticker' => 'COOP','stock_name' => 'MR COOPER GROUP INC'],
[
'ticker' => 'COP','stock_name' => 'CONOCOPHILLIPS'],
[
'ticker' => 'COPX','stock_name' => 'GLOBAL X COPPER MINERS ETF'],
[
'ticker' => 'COR','stock_name' => 'CORESITE REALTY CORP'],
[
'ticker' => 'CORN','stock_name' => 'TEUCRIUM CORN FUND'],
[
'ticker' => 'CORP','stock_name' => 'PIMCO INV GRADE CORP BD ETF'],
[
'ticker' => 'CORR','stock_name' => 'CORENERGY INFRASTRUCTURE TRU'],
[
'ticker' => 'CORS','stock_name' => 'CORSAIR PARTNERING CORP -A'],
[
'ticker' => 'CORS=','stock_name' => 'CORSAIR PARTNERING CORP'],
[
'ticker' => 'CORT','stock_name' => 'CORCEPT THERAPEUTICS INC'],
[
'ticker' => 'COST','stock_name' => 'COSTCO WHOLESALE CORP'],
[
'ticker' => 'COTY','stock_name' => 'COTY INC-CL A'],
[
'ticker' => 'COUP','stock_name' => 'COUPA SOFTWARE INC'],
[
'ticker' => 'COUR','stock_name' => 'COURSERA INC'],
[
'ticker' => 'COVA','stock_name' => 'CRESCENT COVE ACQUISITION-A'],
[
'ticker' => 'COVAU','stock_name' => 'COVA ACQUISITION CORP'],
[
'ticker' => 'COW','stock_name' => 'IPATH SERIES B BLOOMBERG LIV'],
[
'ticker' => 'COWN','stock_name' => 'COWEN INC - A'],
[
'ticker' => 'COWZ','stock_name' => 'PACER US CASH COWS 100 ETF'],
[
'ticker' => 'CP','stock_name' => 'CANADIAN PACIFIC RAILWAY LTD'],
[
'ticker' => 'CPA','stock_name' => 'COPA HOLDINGS SA-CLASS A'],
[
'ticker' => 'CPAA','stock_name' => 'CONYERS PARK III ACQUISITI-A'],
[
'ticker' => 'CPAAU','stock_name' => 'CONYERS PARK III ACQUISITION'],
[
'ticker' => 'CPAC','stock_name' => 'CEMENTOS PACASMAYO SAA - ADR'],
[
'ticker' => 'CPAR','stock_name' => 'CATALYST PARTNERS ACQ-A'],
[
'ticker' => 'CPARU','stock_name' => 'CATALYST PARTNERS ACQUISITIO'],
[
'ticker' => 'CPB','stock_name' => 'CAMPBELL SOUP CO'],
[
'ticker' => 'CPE','stock_name' => 'CALLON PETROLEUM CO'],
[
'ticker' => 'CPER','stock_name' => 'UNITED STATES COPPER INDEX'],
[
'ticker' => 'CPF','stock_name' => 'CENTRAL PACIFIC FINANCIAL CO'],
[
'ticker' => 'CPG','stock_name' => 'CRESCENT POINT ENERGY CORP'],
[
'ticker' => 'CPHC','stock_name' => 'CANTERBURY PARK HOLDING CORP'],
[
'ticker' => 'CPHI','stock_name' => 'CHINA PHARMA HOLDINGS INC'],
[
'ticker' => 'CPI','stock_name' => 'IQ REAL RETURN ETF'],
[
'ticker' => 'CPIX','stock_name' => 'CUMBERLAND PHARMACEUTICALS'],
[
'ticker' => 'CPK','stock_name' => 'CHESAPEAKE UTILITIES CORP'],
[
'ticker' => 'CPLG','stock_name' => 'COREPOINT LODGING INC'],
[
'ticker' => 'CPLP','stock_name' => 'CAPITAL PRODUCT PARTNERS LP'],
[
'ticker' => 'CPNG','stock_name' => 'COUPANG INC'],
[
'ticker' => 'CPOP','stock_name' => 'POP CULTURE GROUP CO LTD-A'],
[
'ticker' => 'CPRI','stock_name' => 'CAPRI HOLDINGS LTD'],
[
'ticker' => 'CPRT','stock_name' => 'COPART INC'],
[
'ticker' => 'CPRX','stock_name' => 'CATALYST PHARMACEUTICALS INC'],
[
'ticker' => 'CPS','stock_name' => 'COOPER-STANDARD HOLDING'],
[
'ticker' => 'CPSH','stock_name' => 'CPS TECHNOLOGIES CORP'],
[
'ticker' => 'CPSI','stock_name' => 'COMPUTER PROGRAMS & SYSTEMS'],
[
'ticker' => 'CPSR','stock_name' => 'CAPSTAR SPECIAL PURPOSE AC-A'],
[
'ticker' => 'CPSR=','stock_name' => 'CAPSTAR SPECIAL PURPOSE ACQU'],
[
'ticker' => 'CPSS','stock_name' => 'CONSUMER PORTFOLIO SERVICES'],
[
'ticker' => 'CPT','stock_name' => 'CAMDEN PROPERTY TRUST'],
[
'ticker' => 'CPTK','stock_name' => 'CROWN PROPTECH ACQUISITION-A'],
[
'ticker' => 'CPTK=','stock_name' => 'CROWN PROPTECH ACQUISITIONS'],
[
'ticker' => 'CPUH','stock_name' => 'COMPUTE HEALTH ACQUISITION-A'],
[
'ticker' => 'CPUH=','stock_name' => 'COMPUTE HEALTH ACQUISITION C'],
[
'ticker' => 'CPZ','stock_name' => 'CALAMOS LNG/SHRT EQ & DYN'],
[
'ticker' => 'CQP','stock_name' => 'CHENIERE ENERGY PARTNERS LP'],
[
'ticker' => 'CQQQ','stock_name' => 'INVESCO CHINA TECHNOLOGY ETF'],
[
'ticker' => 'CR','stock_name' => 'CRANE CO'],
[
'ticker' => 'CRAI','stock_name' => 'CRA INTERNATIONAL INC'],
[
'ticker' => 'CRAK','stock_name' => 'VANECK OIL REFINERS ETF'],
[
'ticker' => 'CRBN','stock_name' => 'ISHARES MSCI ACWI LOW CARBON'],
[
'ticker' => 'CRBP','stock_name' => 'CORBUS PHARMACEUTICALS HOLDI'],
[
'ticker' => 'CRBU','stock_name' => 'CARIBOU BIOSCIENCES INC'],
[
'ticker' => 'CRC','stock_name' => 'CALIFORNIA RESOURCES CORP'],
[
'ticker' => 'CRCT','stock_name' => 'CRICUT INC - CLASS A'],
[
'ticker' => 'CRD.A','stock_name' => 'CRAWFORD & COMPANY -CL A'],
[
'ticker' => 'CRD.B','stock_name' => 'CRAWFORD & CO  -CL B'],
[
'ticker' => 'CRDF','stock_name' => 'CARDIFF ONCOLOGY INC'],
[
'ticker' => 'CRDL','stock_name' => 'CARDIOL THERAPEUTICS INC-A'],
[
'ticker' => 'CREG','stock_name' => 'CHINA RECYCLING ENERGY CORP'],
[
'ticker' => 'CRESY','stock_name' => 'CRESUD S.A.-SPONS ADR'],
[
'ticker' => 'CREX','stock_name' => 'CREATIVE REALITIES INC'],
[
'ticker' => 'CRF','stock_name' => 'CORNERSTONE TOTAL RETURN FND'],
[
'ticker' => 'CRH','stock_name' => 'CRH PLC-SPONSORED ADR'],
[
'ticker' => 'CRHC','stock_name' => 'COHN ROBBINS HOLDINGS-CL A'],
[
'ticker' => 'CRHC=','stock_name' => 'COHN ROBBINS HOLDINGS CORP'],
[
'ticker' => 'CRI','stock_name' => 'CARTER\'S INC'],
[
'ticker' => 'CRIS','stock_name' => 'CURIS INC'],
[
'ticker' => 'CRK','stock_name' => 'COMSTOCK RESOURCES INC'],
[
'ticker' => 'CRKN','stock_name' => 'CROWN ELECTROKINETICS CORP'],
[
'ticker' => 'CRL','stock_name' => 'CHARLES RIVER LABORATORIES'],
[
'ticker' => 'CRM','stock_name' => 'SALESFORCE.COM INC'],
[
'ticker' => 'CRMD','stock_name' => 'CORMEDIX INC'],
[
'ticker' => 'CRMT','stock_name' => 'AMERICA\'S CAR-MART INC'],
[
'ticker' => 'CRNC','stock_name' => 'CERENCE INC'],
[
'ticker' => 'CRNT','stock_name' => 'CERAGON NETWORKS LTD'],
[
'ticker' => 'CRNX','stock_name' => 'CRINETICS PHARMACEUTICALS IN'],
[
'ticker' => 'CROC','stock_name' => 'PROSHARES ULTRASHORT AUD'],
[
'ticker' => 'CRON','stock_name' => 'CRONOS GROUP INC'],
[
'ticker' => 'CROX','stock_name' => 'CROCS INC'],
[
'ticker' => 'CRPT','stock_name' => 'FT SKYBR CRYPT & DIG ECON'],
[
'ticker' => 'CRS','stock_name' => 'CARPENTER TECHNOLOGY'],
[
'ticker' => 'CRSP','stock_name' => 'CRISPR THERAPEUTICS AG'],
[
'ticker' => 'CRSR','stock_name' => 'CORSAIR GAMING INC'],
[
'ticker' => 'CRT','stock_name' => 'CROSS TIMBERS ROYALTY TRUST'],
[
'ticker' => 'CRTD','stock_name' => 'CREATD INC'],
[
'ticker' => 'CRTO','stock_name' => 'CRITEO SA-SPON ADR'],
[
'ticker' => 'CRTX','stock_name' => 'CORTEXYME INC'],
[
'ticker' => 'CRU','stock_name' => 'CRUCIBLE ACQUISITION CORP-A'],
[
'ticker' => 'CRU=','stock_name' => 'CRUCIBLE ACQUISITION CORP'],
[
'ticker' => 'CRUS','stock_name' => 'CIRRUS LOGIC INC'],
[
'ticker' => 'CRUZ','stock_name' => 'DEFIANCE HOTEL  AIRLINE  CRU'],
[
'ticker' => 'CRVL','stock_name' => 'CORVEL CORP'],
[
'ticker' => 'CRVS','stock_name' => 'CORVUS PHARMACEUTICALS INC'],
[
'ticker' => 'CRWD','stock_name' => 'CROWDSTRIKE HOLDINGS INC - A'],
[
'ticker' => 'CRWS','stock_name' => 'CROWN CRAFTS INC'],
[
'ticker' => 'CRXT','stock_name' => 'CLARUS THERAPEUTICS HOLDINGS'],
[
'ticker' => 'CRY','stock_name' => 'CRYOLIFE INC'],
[
'ticker' => 'CRZN','stock_name' => 'CORAZON CAPITAL V838 MONOC-A'],
[
'ticker' => 'CRZNU','stock_name' => 'CORAZON CAPITAL V838 MONOCER'],
[
'ticker' => 'CS','stock_name' => 'CREDIT SUISSE GROUP-SPON ADR'],
[
'ticker' => 'CSA','stock_name' => 'VICTORYSHARES US SMALL CAP V'],
[
'ticker' => 'CSAN','stock_name' => 'COSAN SA -ADR'],
[
'ticker' => 'CSB','stock_name' => 'VICTORYSHARES US SMALL CAP H'],
[
'ticker' => 'CSBR','stock_name' => 'CHAMPIONS ONCOLOGY INC'],
[
'ticker' => 'CSCO','stock_name' => 'CISCO SYSTEMS INC'],
[
'ticker' => 'CSCW','stock_name' => 'COLOR STAR TECHNOLOGY CO LTD'],
[
'ticker' => 'CSD','stock_name' => 'INVESCO S&P SPIN-OFF ETF'],
[
'ticker' => 'CSF','stock_name' => 'VICTORYSHARES US DISCOVERY E'],
[
'ticker' => 'CSGP','stock_name' => 'COSTAR GROUP INC'],
[
'ticker' => 'CSGS','stock_name' => 'CSG SYSTEMS INTL INC'],
[
'ticker' => 'CSII','stock_name' => 'CARDIOVASCULAR SYSTEMS INC'],
[
'ticker' => 'CSIQ','stock_name' => 'CANADIAN SOLAR INC'],
[
'ticker' => 'CSL','stock_name' => 'CARLISLE COS INC'],
[
'ticker' => 'CSLT','stock_name' => 'CASTLIGHT HEALTH INC-B'],
[
'ticker' => 'CSM','stock_name' => 'PROSHARES LARGE CAP CORE PLU'],
[
'ticker' => 'CSML','stock_name' => 'IQ CHAIKIN SMALL CAP ETF'],
[
'ticker' => 'CSPI','stock_name' => 'CSP INC'],
[
'ticker' => 'CSPR','stock_name' => 'CASPER SLEEP INC'],
[
'ticker' => 'CSQ','stock_name' => 'CALAMOS STRAT TOT RETURN FD'],
[
'ticker' => 'CSR','stock_name' => 'CENTERSPACE'],
[
'ticker' => 'CSSE','stock_name' => 'CHICKEN SOUP FOR THE SOUL EN'],
[
'ticker' => 'CSTA','stock_name' => 'CONSTELLATION ACQUISITION-A'],
[
'ticker' => 'CSTA=','stock_name' => 'CONSTELLATION ACQUISITION CO'],
[
'ticker' => 'CSTE','stock_name' => 'CAESARSTONE LTD'],
[
'ticker' => 'CSTL','stock_name' => 'CASTLE BIOSCIENCES INC'],
[
'ticker' => 'CSTM','stock_name' => 'CONSTELLIUM SE'],
[
'ticker' => 'CSTR','stock_name' => 'CAPSTAR FINANCIAL HOLDINGS I'],
[
'ticker' => 'CSU','stock_name' => 'CAPITAL SENIOR LIVING CORP'],
[
'ticker' => 'CSV','stock_name' => 'CARRIAGE SERVICES INC'],
[
'ticker' => 'CSWC','stock_name' => 'CAPITAL SOUTHWEST CORP'],
[
'ticker' => 'CSWI','stock_name' => 'CSW INDUSTRIALS INC'],
[
'ticker' => 'CSX','stock_name' => 'CSX CORP'],
[
'ticker' => 'CTAQ','stock_name' => 'CARNEY TECHNOLOGY ACQU- CL A'],
[
'ticker' => 'CTAQU','stock_name' => 'CARNEY TECHNOLOGY ACQUISITIO'],
[
'ticker' => 'CTAS','stock_name' => 'CINTAS CORP'],
[
'ticker' => 'CTBI','stock_name' => 'COMMUNITY TRUST BANCORP INC'],
[
'ticker' => 'CTEC','stock_name' => 'GLOBAL X CLEANTECH ETF'],
[
'ticker' => 'CTEK','stock_name' => 'CYNERGISTEK INC/DE'],
[
'ticker' => 'CTEX','stock_name' => 'PROSHARES S&P KENSHO CLEANTC'],
[
'ticker' => 'CTG','stock_name' => 'COMPUTER TASK GROUP INC'],
[
'ticker' => 'CTHR','stock_name' => 'CHARLES & COLVARD LTD'],
[
'ticker' => 'CTIB','stock_name' => 'YUNHONG CTI LTD'],
[
'ticker' => 'CTIC','stock_name' => 'CTI BIOPHARMA CORP'],
[
'ticker' => 'CTK','stock_name' => 'COOTEK CAYMAN INC-ADR'],
[
'ticker' => 'CTKB','stock_name' => 'CYTEK BIOSCIENCES INC'],
[
'ticker' => 'CTLP','stock_name' => 'CANTALOUPE INC'],
[
'ticker' => 'CTLT','stock_name' => 'CATALENT INC'],
[
'ticker' => 'CTMX','stock_name' => 'CYTOMX THERAPEUTICS INC'],
[
'ticker' => 'CTO','stock_name' => 'CTO REALTY GROWTH INC'],
[
'ticker' => 'CTOS','stock_name' => 'CUSTOM TRUCK ONE SOURCE INC'],
[
'ticker' => 'CTR','stock_name' => 'CLEARBRIDGE MLP & MIDSTREAM'],
[
'ticker' => 'CTRA','stock_name' => 'COTERRA ENERGY INC'],
[
'ticker' => 'CTRE','stock_name' => 'CARETRUST REIT INC'],
[
'ticker' => 'CTRM','stock_name' => 'CASTOR MARITIME INC'],
[
'ticker' => 'CTRN','stock_name' => 'CITI TRENDS INC'],
[
'ticker' => 'CTS','stock_name' => 'CTS CORP'],
[
'ticker' => 'CTSH','stock_name' => 'COGNIZANT TECH SOLUTIONS-A'],
[
'ticker' => 'CTSO','stock_name' => 'CYTOSORBENTS CORP'],
[
'ticker' => 'CTT','stock_name' => 'CATCHMARK TIMBER TRUST INC-A'],
[
'ticker' => 'CTVA','stock_name' => 'CORTEVA INC'],
[
'ticker' => 'CTXR','stock_name' => 'CITIUS PHARMACEUTICALS INC'],
[
'ticker' => 'CTXS','stock_name' => 'CITRIX SYSTEMS INC'],
[
'ticker' => 'CUBA','stock_name' => 'HERZFELD CARIBBEAN BASIN'],
[
'ticker' => 'CUBE','stock_name' => 'CUBESMART'],
[
'ticker' => 'CUBI','stock_name' => 'CUSTOMERS BANCORP INC'],
[
'ticker' => 'CUBS','stock_name' => 'ASIAN GROWTH CUBS ETF'],
[
'ticker' => 'CUE','stock_name' => 'CUE BIOPHARMA INC'],
[
'ticker' => 'CUEN','stock_name' => 'CUENTAS INC'],
[
'ticker' => 'CUK','stock_name' => 'CARNIVAL PLC-ADR'],
[
'ticker' => 'CULL','stock_name' => 'CULLMAN BANCORP INC/MD'],
[
'ticker' => 'CULP','stock_name' => 'CULP INC'],
[
'ticker' => 'CURE','stock_name' => 'DRX DLY HEALTHCARE BULL 3X'],
[
'ticker' => 'CURI','stock_name' => 'CURIOSITYSTREAM INC'],
[
'ticker' => 'CURO','stock_name' => 'CURO GROUP HOLDINGS CORP'],
[
'ticker' => 'CURV','stock_name' => 'TORRID HOLDINGS INC'],
[
'ticker' => 'CUT','stock_name' => 'INVESCO MSCI GLOBAL TIMBER E'],
[
'ticker' => 'CUTR','stock_name' => 'CUTERA INC'],
[
'ticker' => 'CUZ','stock_name' => 'COUSINS PROPERTIES INC'],
[
'ticker' => 'CVA','stock_name' => 'COVANTA HOLDING CORP'],
[
'ticker' => 'CVAC','stock_name' => 'CUREVAC NV'],
[
'ticker' => 'CVBF','stock_name' => 'CVB FINANCIAL CORP'],
[
'ticker' => 'CVCO','stock_name' => 'CAVCO INDUSTRIES INC'],
[
'ticker' => 'CVCY','stock_name' => 'CENTRAL VALLEY COMM BANCORP'],
[
'ticker' => 'CVE','stock_name' => 'CENOVUS ENERGY INC'],
[
'ticker' => 'CVEO','stock_name' => 'CIVEO CORP'],
[
'ticker' => 'CVET','stock_name' => 'COVETRUS INC'],
[
'ticker' => 'CVGI','stock_name' => 'COMMERCIAL VEHICLE GROUP INC'],
[
'ticker' => 'CVGW','stock_name' => 'CALAVO GROWERS INC'],
[
'ticker' => 'CVI','stock_name' => 'CVR ENERGY INC'],
[
'ticker' => 'CVII','stock_name' => 'CHURCHILL CAPITAL CORP VII-A'],
[
'ticker' => 'CVII=','stock_name' => 'CHURCHILL CAPITAL CORP VII'],
[
'ticker' => 'CVLG','stock_name' => 'COVENANT LOGISTICS GROUP INC'],
[
'ticker' => 'CVLT','stock_name' => 'COMMVAULT SYSTEMS INC'],
[
'ticker' => 'CVLY','stock_name' => 'CODORUS VALLEY BANCORP INC'],
[
'ticker' => 'CVM','stock_name' => 'CEL-SCI CORP'],
[
'ticker' => 'CVNA','stock_name' => 'CARVANA CO'],
[
'ticker' => 'CVR','stock_name' => 'CHICAGO RIVET & MACHINE CO'],
[
'ticker' => 'CVRX','stock_name' => 'CVRX INC'],
[
'ticker' => 'CVS','stock_name' => 'CVS HEALTH CORP'],
[
'ticker' => 'CVU','stock_name' => 'CPI AEROSTRUCTURES INC'],
[
'ticker' => 'CVV','stock_name' => 'CVD EQUIPMENT CORP'],
[
'ticker' => 'CVX','stock_name' => 'CHEVRON CORP'],
[
'ticker' => 'CVY','stock_name' => 'INVESCO ZACKS MULTI-ASSET IN'],
[
'ticker' => 'CW','stock_name' => 'CURTISS-WRIGHT CORP'],
[
'ticker' => 'CWAN','stock_name' => 'CLEARWATER ANALYTICS HDS-A'],
[
'ticker' => 'CWB','stock_name' => 'SPDR BLOOMBERG CONVERTIBLE S'],
[
'ticker' => 'CWBC','stock_name' => 'COMMUNITY WEST BANCSHARES'],
[
'ticker' => 'CWBR','stock_name' => 'COHBAR INC'],
[
'ticker' => 'CWCO','stock_name' => 'CONSOLIDATED WATER CO-ORD SH'],
[
'ticker' => 'CWEB','stock_name' => 'DRX DLY CHINA INT BULL 2X'],
[
'ticker' => 'CWEN','stock_name' => 'CLEARWAY ENERGY INC-C'],
[
'ticker' => 'CWEN.A','stock_name' => 'CLEARWAY ENERGY INC-A'],
[
'ticker' => 'CWH','stock_name' => 'CAMPING WORLD HOLDINGS INC-A'],
[
'ticker' => 'CWI','stock_name' => 'SPDR MSCI ACWI EX-US'],
[
'ticker' => 'CWK','stock_name' => 'CUSHMAN & WAKEFIELD PLC'],
[
'ticker' => 'CWS','stock_name' => 'ADVISORSHARES EQUITY FOCUSED'],
[
'ticker' => 'CWST','stock_name' => 'CASELLA WASTE SYSTEMS INC-A'],
[
'ticker' => 'CWT','stock_name' => 'CALIFORNIA WATER SERVICE GRP'],
[
'ticker' => 'CX','stock_name' => 'CEMEX SAB-SPONS ADR PART CER'],
[
'ticker' => 'CXDO','stock_name' => 'CREXENDO INC'],
[
'ticker' => 'CXE','stock_name' => 'MFS HIGH INCOME MUNICIPAL TR'],
[
'ticker' => 'CXH','stock_name' => 'MFS INVESTMENT GRADE MUNICIP'],
[
'ticker' => 'CXM','stock_name' => 'SPRINKLR INC-A'],
[
'ticker' => 'CXP','stock_name' => 'COLUMBIA PROPERTY TRUST INC'],
[
'ticker' => 'CXSE','stock_name' => 'WISDOMTREE CHINA EX-ST OW'],
[
'ticker' => 'CXW','stock_name' => 'CORECIVIC INC'],
[
'ticker' => 'CYA','stock_name' => 'SIMPLIFY TAIL RISK STRATEGY'],
[
'ticker' => 'CYAD','stock_name' => 'CELYAD ONCOLOGY-SPON ADR'],
[
'ticker' => 'CYAN','stock_name' => 'CYANOTECH CORP'],
[
'ticker' => 'CYB','stock_name' => 'WISDOMTREE CHINESE YUAN STRA'],
[
'ticker' => 'CYBE','stock_name' => 'CYBEROPTICS CORP'],
[
'ticker' => 'CYBN','stock_name' => 'CYBIN INC'],
[
'ticker' => 'CYBR','stock_name' => 'CYBERARK SOFTWARE LTD/ISRAEL'],
[
'ticker' => 'CYCC','stock_name' => 'CYCLACEL PHARMACEUTICALS INC'],
[
'ticker' => 'CYCN','stock_name' => 'CYCLERION THERAPEUTICS INC'],
[
'ticker' => 'CYD','stock_name' => 'CHINA YUCHAI INTL LTD'],
[
'ticker' => 'CYH','stock_name' => 'COMMUNITY HEALTH SYSTEMS INC'],
[
'ticker' => 'CYN','stock_name' => 'CYNGN INC'],
[
'ticker' => 'CYRN','stock_name' => 'CYREN LTD'],
[
'ticker' => 'CYRX','stock_name' => 'CRYOPORT INC'],
[
'ticker' => 'CYT','stock_name' => 'CYTEIR THERAPEUTICS INC'],
[
'ticker' => 'CYTH','stock_name' => 'CYCLO THERAPEUTICS INC'],
[
'ticker' => 'CYTK','stock_name' => 'CYTOKINETICS INC'],
[
'ticker' => 'CYTO','stock_name' => 'ALTAMIRA THERAPEUTICS LTD'],
[
'ticker' => 'CYXT','stock_name' => 'CYXTERA TECHNOLOGIES INC'],
[
'ticker' => 'CZA','stock_name' => 'INVESCO ZACKS MID-CAP ETF'],
[
'ticker' => 'CZNC','stock_name' => 'CITIZENS & NORTHERN CORP'],
[
'ticker' => 'CZOO','stock_name' => 'CAZOO GROUP LTD'],
[
'ticker' => 'CZR','stock_name' => 'CAESARS ENTERTAINMENT INC'],
[
'ticker' => 'CZWI','stock_name' => 'CITIZENS COMMUNITY BANCORP I'],
[
'ticker' => 'D','stock_name' => 'DOMINION ENERGY INC'],
[
'ticker' => 'DAC','stock_name' => 'DANAOS CORP'],
[
'ticker' => 'DADA','stock_name' => 'DADA NEXUS LTD-ADR'],
[
'ticker' => 'DAIO','stock_name' => 'DATA I/O CORP'],
[
'ticker' => 'DAKT','stock_name' => 'DAKTRONICS INC'],
[
'ticker' => 'DAL','stock_name' => 'DELTA AIR LINES INC'],
[
'ticker' => 'DALI','stock_name' => 'FIRST TRUST DORSEYWRIGHT DAL'],
[
'ticker' => 'DALN','stock_name' => 'DALLASNEWS CORP'],
[
'ticker' => 'DALS','stock_name' => 'DA32 LIFE SCIENCE TECH ACQ-A'],
[
'ticker' => 'DALT','stock_name' => 'ANFIELD CAP DIVERSIFIED ALT'],
[
'ticker' => 'DAN','stock_name' => 'DANA INC'],
[
'ticker' => 'DAO','stock_name' => 'YOUDAO INC - ADR'],
[
'ticker' => 'DAPP','stock_name' => 'VANECK DIGITAL TRANSFORMATIO'],
[
'ticker' => 'DAPR','stock_name' => 'FT CB US EQ DEEP BUFF APR'],
[
'ticker' => 'DAR','stock_name' => 'DARLING INGREDIENTS INC'],
[
'ticker' => 'DARE','stock_name' => 'DARE BIOSCIENCE INC'],
[
'ticker' => 'DASH','stock_name' => 'DOORDASH INC - A'],
[
'ticker' => 'DAT','stock_name' => 'PROSHARES BIG DATA REFINERS'],
[
'ticker' => 'DATS','stock_name' => 'DATCHAT INC'],
[
'ticker' => 'DAUG','stock_name' => 'FT CBOE US EQUITY DEEP BUFFE'],
[
'ticker' => 'DAVA','stock_name' => 'ENDAVA PLC- SPON ADR'],
[
'ticker' => 'DAWN','stock_name' => 'DAY ONE BIOPHARMACEUTICALS I'],
[
'ticker' => 'DAX','stock_name' => 'GLOBAL X DAX GERMANY ETF'],
[
'ticker' => 'DB','stock_name' => 'DEUTSCHE BANK AG-REGISTERED'],
[
'ticker' => 'DBA','stock_name' => 'INVESCO DB AGRICULTURE FUND'],
[
'ticker' => 'DBAW','stock_name' => 'XTRACKERS MSCI ALL WORLD EX'],
[
'ticker' => 'DBB','stock_name' => 'INVESCO DB BASE METALS FUND'],
[
'ticker' => 'DBC','stock_name' => 'INVESCO DB COMMODITY INDEX T'],
[
'ticker' => 'DBD','stock_name' => 'DIEBOLD NIXDORF INC'],
[
'ticker' => 'DBDR','stock_name' => 'ROMAN DBDR TECH ACQUISITI-A'],
[
'ticker' => 'DBDRU','stock_name' => 'ROMAN DBDR TECH ACQUISITION'],
[
'ticker' => 'DBE','stock_name' => 'INVESCO DB ENERGY FUND'],
[
'ticker' => 'DBEF','stock_name' => 'XTRACKERS MSCI EAFE HEDGED E'],
[
'ticker' => 'DBEH','stock_name' => 'IM DBI HEDGE STRATEGY ETF'],
[
'ticker' => 'DBEM','stock_name' => 'XTRACKERS MSCI EMERGING MARK'],
[
'ticker' => 'DBEU','stock_name' => 'XTRACKERS MSCI EUROPE HEDGED'],
[
'ticker' => 'DBEZ','stock_name' => 'XTRACKERS MSCI EUROZONE HEDG'],
[
'ticker' => 'DBGI','stock_name' => 'DIGITAL BRANDS GROUP INC'],
[
'ticker' => 'DBGR','stock_name' => 'XTRACKERS MSCI GERMANY HEDGE'],
[
'ticker' => 'DBI','stock_name' => 'DESIGNER BRANDS INC-CLASS A'],
[
'ticker' => 'DBJA','stock_name' => 'INNOVATOR DBL STACK 9 BUFF-J'],
[
'ticker' => 'DBJP','stock_name' => 'XTRACKERS MSCI JAPAN HEDGED'],
[
'ticker' => 'DBL','stock_name' => 'DOUBLELINE OPPORT CREDIT'],
[
'ticker' => 'DBLV','stock_name' => 'ADVISORSHARES DOUBLELINE VAL'],
[
'ticker' => 'DBMF','stock_name' => 'IM DBI MANAGED FUTURES ETF'],
[
'ticker' => 'DBO','stock_name' => 'INVESCO DB OIL FUND'],
[
'ticker' => 'DBOC','stock_name' => 'INNOV DBL STACKER 9 BUFF OCT'],
[
'ticker' => 'DBP','stock_name' => 'INVESCO DB PRECIOUS METALS F'],
[
'ticker' => 'DBRG','stock_name' => 'DIGITALBRIDGE GROUP INC'],
[
'ticker' => 'DBS','stock_name' => 'INVESCO DB SILVER FUND'],
[
'ticker' => 'DBTX','stock_name' => 'DECIBEL THERAPEUTICS INC'],
[
'ticker' => 'DBV','stock_name' => 'INVESCO DB G10 CURRENCY HARV'],
[
'ticker' => 'DBVT','stock_name' => 'DBV TECHNOLOGIES SA-SPON ADR'],
[
'ticker' => 'DBX','stock_name' => 'DROPBOX INC-CLASS A'],
[
'ticker' => 'DCBO','stock_name' => 'DOCEBO INC'],
[
'ticker' => 'DCF','stock_name' => 'BNY MELLON ALCENTRA GLOBAL C'],
[
'ticker' => 'DCI','stock_name' => 'DONALDSON CO INC'],
[
'ticker' => 'DCO','stock_name' => 'DUCOMMUN INC'],
[
'ticker' => 'DCOM','stock_name' => 'DIME COMMUNITY BANCSHARES IN'],
[
'ticker' => 'DCP','stock_name' => 'DCP MIDSTREAM LP'],
[
'ticker' => 'DCPH','stock_name' => 'DECIPHERA PHARMACEUTICALS IN'],
[
'ticker' => 'DCRC','stock_name' => 'DECARBONIZATION PLUS ACQUI-A'],
[
'ticker' => 'DCRCU','stock_name' => 'DECARBONIZATION PLUS ACQUISI'],
[
'ticker' => 'DCRD','stock_name' => 'DECARBONIZATION PLUS ACQUI-A'],
[
'ticker' => 'DCRDU','stock_name' => 'DECARBONIZATION PLUS ACQUISI'],
[
'ticker' => 'DCRN','stock_name' => 'DECARBONIZATION PLUS ACQUI-A'],
[
'ticker' => 'DCRNU','stock_name' => 'DECARBONIZATION PLUS ACQUISI'],
[
'ticker' => 'DCT','stock_name' => 'DUCK CREEK TECHNOLOGIES INC'],
[
'ticker' => 'DCTH','stock_name' => 'DELCATH SYSTEMS INC'],
[
'ticker' => 'DD','stock_name' => 'DUPONT DE NEMOURS INC'],
[
'ticker' => 'DDD','stock_name' => '3D SYSTEMS CORP'],
[
'ticker' => 'DDEC','stock_name' => 'FT CBOE VEST US DEEP BUF DEC'],
[
'ticker' => 'DDF','stock_name' => 'DELAWARE INV DIVIDEND & INC'],
[
'ticker' => 'DDG','stock_name' => 'PROSHARES SHORT OIL & GAS'],
[
'ticker' => 'DDI','stock_name' => 'DOUBLEDOWN INTERACTIVE -ADR'],
[
'ticker' => 'DDIV','stock_name' => 'FIRST TRUST DORSEY WRIGHT MO'],
[
'ticker' => 'DDL','stock_name' => 'DINGDONG CAYMAN LTD -SPN ADR'],
[
'ticker' => 'DDLS','stock_name' => 'WISDOMTREE DY CUR HDG SCP EQ'],
[
'ticker' => 'DDM','stock_name' => 'PROSHARES ULTRA DOW30'],
[
'ticker' => 'DDMX','stock_name' => 'DD3 ACQUISITION CORP II-A'],
[
'ticker' => 'DDMXU','stock_name' => 'DD3 ACQUISITION CORP II'],
[
'ticker' => 'DDOG','stock_name' => 'DATADOG INC - CLASS A'],
[
'ticker' => 'DDS','stock_name' => 'DILLARDS INC-CL A'],
[
'ticker' => 'DDWM','stock_name' => 'WISDOMTREE DY CUR HDG INTL'],
[
'ticker' => 'DE','stock_name' => 'DEERE & CO'],
[
'ticker' => 'DEA','stock_name' => 'EASTERLY GOVERNMENT PROPERTI'],
[
'ticker' => 'DECK','stock_name' => 'DECKERS OUTDOOR CORP'],
[
'ticker' => 'DECZ','stock_name' => 'TRUESHARES STRUC OUT DEC ETF'],
[
'ticker' => 'DEED','stock_name' => 'FIRST TRUST TCW SEC PLUS ETF'],
[
'ticker' => 'DEEF','stock_name' => 'XTRACK FTSE DEV EX US MULTI'],
[
'ticker' => 'DEEP','stock_name' => 'ROUNDHILL ACQUIRERS DEEP VAL'],
[
'ticker' => 'DEF','stock_name' => 'INVESCO DEFENSIVE EQUITY ETF'],
[
'ticker' => 'DEI','stock_name' => 'DOUGLAS EMMETT INC'],
[
'ticker' => 'DELL','stock_name' => 'DELL TECHNOLOGIES -C'],
[
'ticker' => 'DEM','stock_name' => 'WISDOMTREE EMERGING MARKETS'],
[
'ticker' => 'DEMZ','stock_name' => 'DEMOCRATIC LARGE CAP CORE'],
[
'ticker' => 'DEN','stock_name' => 'DENBURY INC'],
[
'ticker' => 'DENN','stock_name' => 'DENNY\'S CORP'],
[
'ticker' => 'DEO','stock_name' => 'DIAGEO PLC-SPONSORED ADR'],
[
'ticker' => 'DES','stock_name' => 'WISDOMTREE US SMALLCAP DIVID'],
[
'ticker' => 'DESP','stock_name' => 'DESPEGAR.COM CORP'],
[
'ticker' => 'DEUS','stock_name' => 'XTRACKERS RUSSELL US MULTI'],
[
'ticker' => 'DEW','stock_name' => 'WISDOMTREE GLOBAL HIGH DIVID'],
[
'ticker' => 'DEX','stock_name' => 'DELAWARE ENHANCED GLOBAL DIV'],
[
'ticker' => 'DFAC','stock_name' => 'DIMENSIONAL US CORE EQUITY 2'],
[
'ticker' => 'DFAE','stock_name' => 'DIMENSIONAL EMERGING CORE EQ'],
[
'ticker' => 'DFAI','stock_name' => 'DIMENSIONAL INTERNATIONAL CO'],
[
'ticker' => 'DFAS','stock_name' => 'DIMENSIONAL US SMALL CAP ETF'],
[
'ticker' => 'DFAT','stock_name' => 'DIMENSIONAL US TARGET VALUE'],
[
'ticker' => 'DFAU','stock_name' => 'DIMENSIONAL US CORE EQUITY M'],
[
'ticker' => 'DFAX','stock_name' => 'DIMENSIONAL WORLD EX US CORE'],
[
'ticker' => 'DFE','stock_name' => 'WISDOMTREE EUR S/C DIVIDEND'],
[
'ticker' => 'DFEB','stock_name' => 'FT CBOE VEST US EQY DEEP BUF'],
[
'ticker' => 'DFEN','stock_name' => 'DRX DLY AERO & DEF BULL 3X'],
[
'ticker' => 'DFFN','stock_name' => 'DIFFUSION PHARMACEUTICALS IN'],
[
'ticker' => 'DFH','stock_name' => 'DREAM FINDERS HOMES INC - A'],
[
'ticker' => 'DFHY','stock_name' => 'TRIMTABS DON FORLINES TAC HY'],
[
'ticker' => 'DFIN','stock_name' => 'DONNELLEY FINANCIAL SOLUTION'],
[
'ticker' => 'DFIV','stock_name' => 'DIMENSIONAL INTERNATIONAL VA'],
[
'ticker' => 'DFJ','stock_name' => 'WISDOMTREE JPN S/C DVD FUND'],
[
'ticker' => 'DFND','stock_name' => 'SIREN DIVCON DIVIDEND DEFEND'],
[
'ticker' => 'DFNL','stock_name' => 'DAVIS SELECT FINANCIAL ETF'],
[
'ticker' => 'DFNV','stock_name' => 'TRIMTABS DON FL RISK MAN INN'],
[
'ticker' => 'DFP','stock_name' => 'FLAHERTY & CRUMRINE DYNAMIC'],
[
'ticker' => 'DFPH','stock_name' => 'DFP HEALTHCARE ACQUISIT-CL A'],
[
'ticker' => 'DFPHU','stock_name' => 'DFP HEALTHCARE ACQUISITIONS'],
[
'ticker' => 'DFS','stock_name' => 'DISCOVER FINANCIAL SERVICES'],
[
'ticker' => 'DFUS','stock_name' => 'DIMENSIONAL US EQUITY ETF'],
[
'ticker' => 'DG','stock_name' => 'DOLLAR GENERAL CORP'],
[
'ticker' => 'DGICA','stock_name' => 'DONEGAL GROUP INC-CL A'],
[
'ticker' => 'DGICB','stock_name' => 'DONEGAL GROUP INC-B'],
[
'ticker' => 'DGII','stock_name' => 'DIGI INTERNATIONAL INC'],
[
'ticker' => 'DGL','stock_name' => 'INVESCO DB GOLD FUND'],
[
'ticker' => 'DGLY','stock_name' => 'DIGITAL ALLY INC'],
[
'ticker' => 'DGNS','stock_name' => 'DRAGONEER GROWTH OPPORT-CL A'],
[
'ticker' => 'DGNU','stock_name' => 'DRAGONEER GROWTH OPP III-A'],
[
'ticker' => 'DGP','stock_name' => 'DB GOLD DOUBLE LONG ETN'],
[
'ticker' => 'DGRE','stock_name' => 'WISDOMTREE EMERGING MARKETS'],
[
'ticker' => 'DGRO','stock_name' => 'ISHARES CORE DIVIDEND GROWTH'],
[
'ticker' => 'DGRS','stock_name' => 'WISDOMTREE U.S. SMALLCAP QUA'],
[
'ticker' => 'DGRW','stock_name' => 'WISDOMTREE U.S. QUALITY DIVI'],
[
'ticker' => 'DGS','stock_name' => 'WISDOMTREE EM SMALL CAP'],
[
'ticker' => 'DGT','stock_name' => 'SPDR GLOBAL DOW ETF'],
[
'ticker' => 'DGX','stock_name' => 'QUEST DIAGNOSTICS INC'],
[
'ticker' => 'DGZ','stock_name' => 'DB GOLD SHORT ETN'],
[
'ticker' => 'DH','stock_name' => 'DEFINITIVE HEALTHCARE CORP'],
[
'ticker' => 'DHACU','stock_name' => 'DIGITAL HEALTH ACQUISITION C'],
[
'ticker' => 'DHBC','stock_name' => 'DHB CAPITAL CORP-CL A'],
[
'ticker' => 'DHBCU','stock_name' => 'DHB CAPITAL CORP'],
[
'ticker' => 'DHC','stock_name' => 'DIVERSIFIED HEALTHCARE TRUST'],
[
'ticker' => 'DHCA','stock_name' => 'DHC ACQUISITION CORP-A'],
[
'ticker' => 'DHCAU','stock_name' => 'DHC ACQUISITION CORP'],
[
'ticker' => 'DHF','stock_name' => 'BNYM HIGH YIELD STRAT'],
[
'ticker' => 'DHHC','stock_name' => 'DIAMONDHEAD HOLDINGS CORP-A'],
[
'ticker' => 'DHHCU','stock_name' => 'DIAMONDHEAD HOLDINGS CORP'],
[
'ticker' => 'DHI','stock_name' => 'DR HORTON INC'],
[
'ticker' => 'DHIL','stock_name' => 'DIAMOND HILL INVESTMENT GRP'],
[
'ticker' => 'DHR','stock_name' => 'DANAHER CORP'],
[
'ticker' => 'DHS','stock_name' => 'WISDOMTREE US HIGH DIVIDEND'],
[
'ticker' => 'DHT','stock_name' => 'DHT HOLDINGS INC'],
[
'ticker' => 'DHX','stock_name' => 'DHI GROUP INC'],
[
'ticker' => 'DHY','stock_name' => 'CREDIT SUISSE HIGH YIELD BD'],
[
'ticker' => 'DIA','stock_name' => 'SPDR DJIA TRUST'],
[
'ticker' => 'DIAL','stock_name' => 'COLUMBIA DIVERSIFIED ETF'],
[
'ticker' => 'DIAX','stock_name' => 'NUVEEN DOW30 DYN OVERWRT FD'],
[
'ticker' => 'DIBS','stock_name' => '1STDIBS.COM INC'],
[
'ticker' => 'DICE','stock_name' => 'DICE THERAPEUTICS INC'],
[
'ticker' => 'DIDI','stock_name' => 'DIDI GLOBAL INC'],
[
'ticker' => 'DIG','stock_name' => 'PROSHARES ULTRA OIL & GAS'],
[
'ticker' => 'DILA','stock_name' => 'DILA CAPITAL ACQUISITION - A'],
[
'ticker' => 'DILAU','stock_name' => 'DILA CAPITAL ACQUISITION COR'],
[
'ticker' => 'DIM','stock_name' => 'WISDOMTREE INTL M/C DVD FUND'],
[
'ticker' => 'DIN','stock_name' => 'DINE BRANDS GLOBAL INC'],
[
'ticker' => 'DINT','stock_name' => 'DAVIS SELECT INTERNATIONAL'],
[
'ticker' => 'DIOD','stock_name' => 'DIODES INC'],
[
'ticker' => 'DIS','stock_name' => 'WALT DISNEY CO/THE'],
[
'ticker' => 'DISA','stock_name' => 'DISRUPTIVE ACQUISITION COR-A'],
[
'ticker' => 'DISAU','stock_name' => 'DISRUPTIVE ACQUISITION CORP'],
[
'ticker' => 'DISCA','stock_name' => 'DISCOVERY INC - A'],
[
'ticker' => 'DISCB','stock_name' => 'DISCOVERY INC-B'],
[
'ticker' => 'DISCK','stock_name' => 'DISCOVERY INC-C'],
[
'ticker' => 'DISH','stock_name' => 'DISH NETWORK CORP-A'],
[
'ticker' => 'DIT','stock_name' => 'AMCON DISTRIBUTING CO'],
[
'ticker' => 'DIV','stock_name' => 'GLOBAL X SUPERDIVIDEND USE'],
[
'ticker' => 'DIVA','stock_name' => 'AGFIQ HEDGED DIVIDEND INCOME'],
[
'ticker' => 'DIVB','stock_name' => 'ISHARES US DVD AND BUYBACK'],
[
'ticker' => 'DIVO','stock_name' => 'AMPLIFY CWP ENHANCED DIVIDEN'],
[
'ticker' => 'DIVS','stock_name' => 'SMARTETFS DIVIDEND BUILDER'],
[
'ticker' => 'DIVZ','stock_name' => 'TRUESHARES LOW VOLATILITY EQ'],
[
'ticker' => 'DJAN','stock_name' => 'FT CBOE VEST US EQ DEEP JAN'],
[
'ticker' => 'DJCB','stock_name' => 'ETRACS BLOOMBERG CMD INX-S/B'],
[
'ticker' => 'DJCO','stock_name' => 'DAILY JOURNAL CORP'],
[
'ticker' => 'DJD','stock_name' => 'INVESCO DOW JONES INDUSTRIAL'],
[
'ticker' => 'DJP','stock_name' => 'IPATH BLOOMBERG COMMODITY IN'],
[
'ticker' => 'DJUL','stock_name' => 'FT CBOE VEST US EQ DEEP BUF'],
[
'ticker' => 'DJUN','stock_name' => 'FT CBOE VEST U.S. EQUITY DEE'],
[
'ticker' => 'DK','stock_name' => 'DELEK US HOLDINGS INC'],
[
'ticker' => 'DKDCA','stock_name' => 'DATA KNIGHTS ACQUISITION C-A'],
[
'ticker' => 'DKDCU','stock_name' => 'DATA KNIGHTS ACQUISITION COR'],
[
'ticker' => 'DKL','stock_name' => 'DELEK LOGISTICS PARTNERS LP'],
[
'ticker' => 'DKNG','stock_name' => 'DRAFTKINGS INC - CL A'],
[
'ticker' => 'DKS','stock_name' => 'DICK\'S SPORTING GOODS INC'],
[
'ticker' => 'DLA','stock_name' => 'DELTA APPAREL INC'],
[
'ticker' => 'DLB','stock_name' => 'DOLBY LABORATORIES INC-CL A'],
[
'ticker' => 'DLCA','stock_name' => 'DEEP LAKE CAPITAL ACQUIS-CLA'],
[
'ticker' => 'DLCAU','stock_name' => 'DEEP LAKE CAPITAL ACQUISITIO'],
[
'ticker' => 'DLHC','stock_name' => 'DLH HOLDINGS CORP'],
[
'ticker' => 'DLN','stock_name' => 'WISDOMTREE US LARGECAP DIVID'],
[
'ticker' => 'DLNG','stock_name' => 'DYNAGAS LNG PARTNERS LP'],
[
'ticker' => 'DLO','stock_name' => 'DLOCAL LTD'],
[
'ticker' => 'DLPN','stock_name' => 'DOLPHIN ENTERTAINMENT INC'],
[
'ticker' => 'DLR','stock_name' => 'DIGITAL REALTY TRUST INC'],
[
'ticker' => 'DLS','stock_name' => 'WISDOMTREE INTL S/C DVD FUND'],
[
'ticker' => 'DLTH','stock_name' => 'DULUTH HOLDINGS INC - CL B'],
[
'ticker' => 'DLTR','stock_name' => 'DOLLAR TREE INC'],
[
'ticker' => 'DLX','stock_name' => 'DELUXE CORP'],
[
'ticker' => 'DLY','stock_name' => 'DOUBLELINE YIELD OPPORT'],
[
'ticker' => 'DM','stock_name' => 'DESKTOP METAL INC-A'],
[
'ticker' => 'DMAC','stock_name' => 'DIAMEDICA THERAPEUTICS INC'],
[
'ticker' => 'DMAQU','stock_name' => 'DEEP MEDICINE ACQUISITION CO'],
[
'ticker' => 'DMAR','stock_name' => 'FT CBOE VST US EQY DP BUF-MR'],
[
'ticker' => 'DMAY','stock_name' => 'FT CBOE VEST US EQY D BU-MAY'],
[
'ticker' => 'DMB','stock_name' => 'BNYM MUNI BND INFRA'],
[
'ticker' => 'DMCY','stock_name' => 'DEMOCRACY INTERNATIONAL FUND'],
[
'ticker' => 'DMDV','stock_name' => 'AAM S&P DEVELOPED MARKETS HI'],
[
'ticker' => 'DMF','stock_name' => 'BNYM MUNICIPAL INCOME'],
[
'ticker' => 'DMLP','stock_name' => 'DORCHESTER MINERALS LP'],
[
'ticker' => 'DMO','stock_name' => 'WESTERN ASSET MORTGAGE OPPOR'],
[
'ticker' => 'DMRC','stock_name' => 'DIGIMARC CORP'],
[
'ticker' => 'DMRE','stock_name' => 'DELTASHARES EM MGD RISK ETF'],
[
'ticker' => 'DMRI','stock_name' => 'DELTASHARES S&P INT MGD RISK'],
[
'ticker' => 'DMRL','stock_name' => 'DELTASHARES S&P 500 MGD RISK'],
[
'ticker' => 'DMRM','stock_name' => 'DELTASHARES S&P 400 MGD RISK'],
[
'ticker' => 'DMRS','stock_name' => 'DELTASHARES S&P 600 MGD RISK'],
[
'ticker' => 'DMS','stock_name' => 'DIGITAL MEDIA SOLUTIONS-A'],
[
'ticker' => 'DMTK','stock_name' => 'DERMTECH INC'],
[
'ticker' => 'DMXF','stock_name' => 'ISHARES ESG ADVANC MSCI EAFE'],
[
'ticker' => 'DMYQ','stock_name' => 'DMY TECHNOLOGY GROUP IV-A'],
[
'ticker' => 'DMYQ=','stock_name' => 'DMY TECHNOLOGY GROUP INC IV'],
[
'ticker' => 'DMYS=','stock_name' => 'DMY TECHNOLOGY GROUP INC VI'],
[
'ticker' => 'DNA','stock_name' => 'GINKGO BIOWORKS HOLDINGS INC'],
[
'ticker' => 'DNAA','stock_name' => 'SOCIAL CAPITAL SUVRETTA HO-A'],
[
'ticker' => 'DNAB','stock_name' => 'SOCIAL CAPITAL SUVRETTA HO-A'],
[
'ticker' => 'DNAC','stock_name' => 'SOCIAL CAPITAL SUVRETTA HO-A'],
[
'ticker' => 'DNAD','stock_name' => 'SOCIAL CAPITAL SUVRETTA HO-A'],
[
'ticker' => 'DNAY','stock_name' => 'CODEX DNA INC'],
[
'ticker' => 'DNB','stock_name' => 'DUN & BRADSTREET HOLDINGS IN'],
[
'ticker' => 'DNL','stock_name' => 'WISDOMTREE GLOBAL EX-US QUAL'],
[
'ticker' => 'DNLI','stock_name' => 'DENALI THERAPEUTICS INC'],
[
'ticker' => 'DNMR','stock_name' => 'DANIMER SCIENTIFIC INC'],
[
'ticker' => 'DNN','stock_name' => 'DENISON MINES CORP'],
[
'ticker' => 'DNOV','stock_name' => 'FT CBOE VEST US EQUITY DEEP'],
[
'ticker' => 'DNOW','stock_name' => 'NOW INC'],
[
'ticker' => 'DNP','stock_name' => 'DNP SELECT INCOME FUND INC'],
[
'ticker' => 'DNUT','stock_name' => 'KRISPY KREME INC'],
[
'ticker' => 'DNZ','stock_name' => 'D AND Z MEDIA ACQUISITION-A'],
[
'ticker' => 'DNZ=','stock_name' => 'D AND Z MEDIA ACQUISITION CO'],
[
'ticker' => 'DOC','stock_name' => 'PHYSICIANS REALTY TRUST'],
[
'ticker' => 'DOCN','stock_name' => 'DIGITALOCEAN HOLDINGS INC'],
[
'ticker' => 'DOCS','stock_name' => 'DOXIMITY INC-CLASS A'],
[
'ticker' => 'DOCT','stock_name' => 'FT CBOE VEST US DEEP BUF OCT'],
[
'ticker' => 'DOCU','stock_name' => 'DOCUSIGN INC'],
[
'ticker' => 'DOG','stock_name' => 'PROSHARES SHORT DOW30'],
[
'ticker' => 'DOGZ','stock_name' => 'DOGNESS INTERNATIONAL CORP-A'],
[
'ticker' => 'DOL','stock_name' => 'WISDOMTREE INTL L/C DVD FUND'],
[
'ticker' => 'DOLE','stock_name' => 'DOLE PLC'],
[
'ticker' => 'DOMA','stock_name' => 'DOMA HOLDINGS INC'],
[
'ticker' => 'DOMO','stock_name' => 'DOMO INC - CLASS B'],
[
'ticker' => 'DON','stock_name' => 'WISDOMTREE US MIDCAP DIVIDEN'],
[
'ticker' => 'DOO','stock_name' => 'WISDOMTREE INTL DVD EX-FIN'],
[
'ticker' => 'DOOO','stock_name' => 'BRP INC/CA- SUB VOTING'],
[
'ticker' => 'DOOR','stock_name' => 'MASONITE INTERNATIONAL CORP'],
[
'ticker' => 'DORM','stock_name' => 'DORMAN PRODUCTS INC'],
[
'ticker' => 'DOV','stock_name' => 'DOVER CORP'],
[
'ticker' => 'DOW','stock_name' => 'DOW INC'],
[
'ticker' => 'DOX','stock_name' => 'AMDOCS LTD'],
[
'ticker' => 'DOYU','stock_name' => 'DOUYU INTERNATIONAL HOLD-ADR'],
[
'ticker' => 'DOZR','stock_name' => 'DIREX DAILY US INFRA BULL 2X'],
[
'ticker' => 'DPG','stock_name' => 'DUFF & PHELPS UTILITY & INC'],
[
'ticker' => 'DPRO','stock_name' => 'DRAGANFLY INC'],
[
'ticker' => 'DPST','stock_name' => 'DRX DLY REG BANK BULL 3X'],
[
'ticker' => 'DPW','stock_name' => 'AULT GLOBAL HOLDINGS INC'],
[
'ticker' => 'DPZ','stock_name' => 'DOMINO\'S PIZZA INC'],
[
'ticker' => 'DQ','stock_name' => 'DAQO NEW ENERGY CORP-ADR'],
[
'ticker' => 'DRAY','stock_name' => 'MACONDRAY CAPITAL AC-CLASS A'],
[
'ticker' => 'DRAYU','stock_name' => 'MACONDRAY CAPITAL ACQUISITIO'],
[
'ticker' => 'DRD','stock_name' => 'DRDGOLD LTD-SPONSORED ADR'],
[
'ticker' => 'DRE','stock_name' => 'DUKE REALTY CORP'],
[
'ticker' => 'DRH','stock_name' => 'DIAMONDROCK HOSPITALITY CO'],
[
'ticker' => 'DRI','stock_name' => 'DARDEN RESTAURANTS INC'],
[
'ticker' => 'DRIO','stock_name' => 'DARIOHEALTH CORP'],
[
'ticker' => 'DRIP','stock_name' => 'DIREXION DAILY S&P OIL & GAS'],
[
'ticker' => 'DRIV','stock_name' => 'GLOBAL X AUTONOMOUS&ELEC-ETF'],
[
'ticker' => 'DRMA','stock_name' => 'DERMATA THERAPEUTICS INC'],
[
'ticker' => 'DRN','stock_name' => 'DRX DLY REAL ESTATE BULL 3X'],
[
'ticker' => 'DRNA','stock_name' => 'DICERNA PHARMACEUTICALS INC'],
[
'ticker' => 'DRQ','stock_name' => 'DRIL-QUIP INC'],
[
'ticker' => 'DRRX','stock_name' => 'DURECT CORPORATION'],
[
'ticker' => 'DRSK','stock_name' => 'APTUS DEFINED RISK ETF'],
[
'ticker' => 'DRTT','stock_name' => 'DIRTT ENVIRONMENTAL SOLUTION'],
[
'ticker' => 'DRV','stock_name' => 'DRX DLY REAL ESTATE BEAR 3X'],
[
'ticker' => 'DRVN','stock_name' => 'DRIVEN BRANDS HOLDINGS INC'],
[
'ticker' => 'DRW','stock_name' => 'WISDOMTREE GLOBAL EX-US REAL'],
[
'ticker' => 'DS','stock_name' => 'DRIVE SHACK INC'],
[
'ticker' => 'DSAC','stock_name' => 'DUDDELL STREET ACQUISITION-A'],
[
'ticker' => 'DSACU','stock_name' => 'DUDDELL STREET ACQUISITION C'],
[
'ticker' => 'DSAQ=','stock_name' => 'DIRECT SELLING ACQUISITION C'],
[
'ticker' => 'DSCF','stock_name' => 'DISCIPLINE FUND ETF'],
[
'ticker' => 'DSEP','stock_name' => 'FT CBOE VEST US DEEP BUF SEP'],
[
'ticker' => 'DSEY','stock_name' => 'DIVERSEY HOLDINGS LTD'],
[
'ticker' => 'DSGN','stock_name' => 'DESIGN THERAPEUTICS INC'],
[
'ticker' => 'DSGX','stock_name' => 'DESCARTES SYSTEMS GRP/THE'],
[
'ticker' => 'DSI','stock_name' => 'ISHARES MSCI KLD 400 SOCIAL'],
[
'ticker' => 'DSJA','stock_name' => 'INNOVATOR DOUBLE STACKER-JAN'],
[
'ticker' => 'DSKE','stock_name' => 'DASEKE INC'],
[
'ticker' => 'DSL','stock_name' => 'DOUBLELINE INCOME SOLUTIONS'],
[
'ticker' => 'DSM','stock_name' => 'BNYM STRAT MUNI BND'],
[
'ticker' => 'DSOC','stock_name' => 'INNOVATOR DOUBLE STACKER OCT'],
[
'ticker' => 'DSP','stock_name' => 'VIANT TECHNOLOGY INC-A'],
[
'ticker' => 'DSPC','stock_name' => 'THE DE-SPAC ETF'],
[
'ticker' => 'DSPG','stock_name' => 'DSP GROUP INC'],
[
'ticker' => 'DSS','stock_name' => 'DSS INC'],
[
'ticker' => 'DSTL','stock_name' => 'DISTILLATE US FUNDAMENTAL ST'],
[
'ticker' => 'DSTX','stock_name' => 'DISTILLATE INTERNATIONAL FUN'],
[
'ticker' => 'DSU','stock_name' => 'BLACKROCK DEBT STRATEGIES FD'],
[
'ticker' => 'DSWL','stock_name' => 'DESWELL INDUSTRIES INC'],
[
'ticker' => 'DSX','stock_name' => 'DIANA SHIPPING INC'],
[
'ticker' => 'DT','stock_name' => 'DYNATRACE INC'],
[
'ticker' => 'DTC','stock_name' => 'SOLO BRANDS INC - CLASS A'],
[
'ticker' => 'DTD','stock_name' => 'WISDOMTREE US TOTAL DIVIDEND'],
[
'ticker' => 'DTE','stock_name' => 'DTE ENERGY COMPANY'],
[
'ticker' => 'DTEA','stock_name' => 'DAVIDSTEA INC'],
[
'ticker' => 'DTEC','stock_name' => 'ALPS DISRUPTIVE TECHNOLOGIES'],
[
'ticker' => 'DTF','stock_name' => 'DTF TAX-FREE INCOME INC'],
[
'ticker' => 'DTH','stock_name' => 'WISDOMTREE INTERNATIONAL HIG'],
[
'ticker' => 'DTIL','stock_name' => 'PRECISION BIOSCIENCES INC'],
[
'ticker' => 'DTM','stock_name' => 'DT MIDSTREAM INC'],
[
'ticker' => 'DTN','stock_name' => 'WISDOMTREE US DIVIDEND EX-FI'],
[
'ticker' => 'DTOC','stock_name' => 'DIGITAL TRANSFORMATION OPP-A'],
[
'ticker' => 'DTOCU','stock_name' => 'DIGITAL TRANSFORMATION OPPOR'],
[
'ticker' => 'DTOX','stock_name' => 'AMPLIFY CLEANER LIVING ETF'],
[
'ticker' => 'DTRT','stock_name' => 'DTRT HEALTH ACQ CORP-A'],
[
'ticker' => 'DTRTU','stock_name' => 'DTRT HEALTH ACQUISITION CORP'],
[
'ticker' => 'DTSS','stock_name' => 'DATASEA INC'],
[
'ticker' => 'DTST','stock_name' => 'DATA STORAGE CORP'],
[
'ticker' => 'DUDE','stock_name' => 'MERLYN AI SECTORSURFER MOMEN'],
[
'ticker' => 'DUG','stock_name' => 'PROSHARES ULTRASHORT OIL&GAS'],
[
'ticker' => 'DUK','stock_name' => 'DUKE ENERGY CORP'],
[
'ticker' => 'DUNE','stock_name' => 'DUNE ACQUISITION CORP-CL A'],
[
'ticker' => 'DUNEU','stock_name' => 'DUNE ACQUISITION CORP'],
[
'ticker' => 'DUO','stock_name' => 'FANGDD NETWORK GROUP LTD-ADR'],
[
'ticker' => 'DUOL','stock_name' => 'DUOLINGO'],
[
'ticker' => 'DUOT','stock_name' => 'DUOS TECHNOLOGIES GROUP INC'],
[
'ticker' => 'DURA','stock_name' => 'VANECK MSTAR DURABLE DVD ETF'],
[
'ticker' => 'DUSA','stock_name' => 'DAVIS SELECT US EQUITY ETF'],
[
'ticker' => 'DUSL','stock_name' => 'DRX DLY INDUSTRIALS BULL 3X'],
[
'ticker' => 'DUST','stock_name' => 'DIREXION DAILY GOLD MINERS I'],
[
'ticker' => 'DV','stock_name' => 'DOUBLEVERIFY HOLDINGS INC'],
[
'ticker' => 'DVA','stock_name' => 'DAVITA INC'],
[
'ticker' => 'DVAX','stock_name' => 'DYNAVAX TECHNOLOGIES CORP'],
[
'ticker' => 'DVD','stock_name' => 'DOVER MOTORSPORTS INC'],
[
'ticker' => 'DVLU','stock_name' => 'FIRST TRUST DRSY WRIGHT MOME'],
[
'ticker' => 'DVN','stock_name' => 'DEVON ENERGY CORP'],
[
'ticker' => 'DVOL','stock_name' => 'FIRST TRUST DW MOMTM & LOW'],
[
'ticker' => 'DVY','stock_name' => 'ISHARES SELECT DIVIDEND ETF'],
[
'ticker' => 'DVYA','stock_name' => 'ISHARES ASIA/PACIFIC DIVIDEN'],
[
'ticker' => 'DVYE','stock_name' => 'ISHARES EMERGING MARKETS DIV'],
[
'ticker' => 'DWAC','stock_name' => 'DIGITAL WORLD ACQUISITION-A'],
[
'ticker' => 'DWACU','stock_name' => 'DIGITAL WORLD ACQUISITION CO'],
[
'ticker' => 'DWAS','stock_name' => 'INVESCO DWA SMALLCAP MOMENT'],
[
'ticker' => 'DWAT','stock_name' => 'ARROW DWA TACTICAL ETF'],
[
'ticker' => 'DWAW','stock_name' => 'ADVISORSHARES D/W FSM CAP'],
[
'ticker' => 'DWCR','stock_name' => 'ARROW DWA COUNTRY ROTATION E'],
[
'ticker' => 'DWEQ','stock_name' => 'ADVISORSHARES D/W ALPH EQ WT'],
[
'ticker' => 'DWIN','stock_name' => 'DELWINDS INSURANCE - CLASS A'],
[
'ticker' => 'DWIN=','stock_name' => 'DELWINDS INSURANCE ACQUISITI'],
[
'ticker' => 'DWLD','stock_name' => 'DAVIS SELECT WORLDWIDE ETF'],
[
'ticker' => 'DWM','stock_name' => 'WISDOMTREE INTERNATIONAL EQU'],
[
'ticker' => 'DWMC','stock_name' => 'ADVISORSHARES DORSEY MC ETF'],
[
'ticker' => 'DWMF','stock_name' => 'WISDOMTREE INTERNATIONAL MUL'],
[
'ticker' => 'DWPP','stock_name' => 'FIRST TRUST DORSEY WRIGHT PE'],
[
'ticker' => 'DWSH','stock_name' => 'ADVISORSHARES DORSEY WS ETF'],
[
'ticker' => 'DWSN','stock_name' => 'DAWSON GEOPHYSICAL CO'],
[
'ticker' => 'DWUS','stock_name' => 'ADVISORSHARES D/W FSM CORE'],
[
'ticker' => 'DWX','stock_name' => 'SPDR S&P INTER DVD ETF'],
[
'ticker' => 'DX','stock_name' => 'DYNEX CAPITAL INC'],
[
'ticker' => 'DXC','stock_name' => 'DXC TECHNOLOGY CO'],
[
'ticker' => 'DXCM','stock_name' => 'DEXCOM INC'],
[
'ticker' => 'DXD','stock_name' => 'PROSHARES ULTRASHORT DOW30'],
[
'ticker' => 'DXF','stock_name' => 'DUNXIN FINANCIAL HOLDING-ADR'],
[
'ticker' => 'DXGE','stock_name' => 'WISDOMTREE GERMANY HEDGED EQ'],
[
'ticker' => 'DXJ','stock_name' => 'WISDOMTREE JAPAN HEDGED EQ'],
[
'ticker' => 'DXJS','stock_name' => 'WISDOMTREE JAPAN HEDGED SMAL'],
[
'ticker' => 'DXLG','stock_name' => 'DESTINATION XL GROUP INC'],
[
'ticker' => 'DXPE','stock_name' => 'DXP ENTERPRISES INC'],
[
'ticker' => 'DXR','stock_name' => 'DAXOR CORP'],
[
'ticker' => 'DXYN','stock_name' => 'DIXIE GROUP INC'],
[
'ticker' => 'DY','stock_name' => 'DYCOM INDUSTRIES INC'],
[
'ticker' => 'DYAI','stock_name' => 'DYADIC INTERNATIONAL INC'],
[
'ticker' => 'DYFN','stock_name' => 'ANGEL OAK DYN FIN STRAT INC'],
[
'ticker' => 'DYHG','stock_name' => 'DIREXION DYNAMIC HEDGE ETF'],
[
'ticker' => 'DYLD','stock_name' => 'LEADERSHARES DYNAMIC YIELD E'],
[
'ticker' => 'DYN','stock_name' => 'DYNE THERAPEUTICS INC'],
[
'ticker' => 'DYNF','stock_name' => 'BLACKROCK US EQY FCTR ROTATE'],
[
'ticker' => 'DYNS','stock_name' => 'DYNAMICS SPECIAL PURPOSE C-A'],
[
'ticker' => 'DYNT','stock_name' => 'DYNATRONICS CORP'],
[
'ticker' => 'DZSI','stock_name' => 'DZS INC'],
[
'ticker' => 'DZZ','stock_name' => 'DB GOLD DOUBLE SHORT ETN'],
[
'ticker' => 'E','stock_name' => 'ENI SPA-SPONSORED ADR'],
[
'ticker' => 'EA','stock_name' => 'ELECTRONIC ARTS INC'],
[
'ticker' => 'EAC','stock_name' => 'EDIFY ACQUISITION CORP-CL A'],
[
'ticker' => 'EACPU','stock_name' => 'EDIFY ACQUISITION CORP'],
[
'ticker' => 'EAD','stock_name' => 'WELLS FARGO INCOME OPPORTUNI'],
[
'ticker' => 'EAF','stock_name' => 'GRAFTECH INTERNATIONAL LTD'],
[
'ticker' => 'EAGG','stock_name' => 'ISHARES ESG AWARE US AGGREGA'],
[
'ticker' => 'EAOA','stock_name' => 'ISHARES ESG AWARE AGGR ALLOC'],
[
'ticker' => 'EAOK','stock_name' => 'ISHARES ESG AWARE CONS ALLOC'],
[
'ticker' => 'EAOM','stock_name' => 'ISHARES ESG AWARE MOD ALLOC'],
[
'ticker' => 'EAOR','stock_name' => 'ISHARES ESG AWARE GROW ALLOC'],
[
'ticker' => 'EAPR','stock_name' => 'INNOVATOR EMERGING MARKETS P'],
[
'ticker' => 'EAR','stock_name' => 'EARGO INC'],
[
'ticker' => 'EARN','stock_name' => 'ELLINGTON RESIDENTIAL MORTGA'],
[
'ticker' => 'EASG','stock_name' => 'XTRACKERS MSCI EAFE ESG LDRS'],
[
'ticker' => 'EAST','stock_name' => 'EASTSIDE DISTILLING INC'],
[
'ticker' => 'EAT','stock_name' => 'BRINKER INTERNATIONAL INC'],
[
'ticker' => 'EATZ','stock_name' => 'ADVISORSHARES RESTAURANT ETF'],
[
'ticker' => 'EB','stock_name' => 'EVENTBRITE INC-CLASS A'],
[
'ticker' => 'EBAC','stock_name' => 'EUROPEAN BIOTECH ACQUISITI-A'],
[
'ticker' => 'EBACU','stock_name' => 'EUROPEAN BIOTECH ACQUISITION'],
[
'ticker' => 'EBAY','stock_name' => 'EBAY INC'],
[
'ticker' => 'EBC','stock_name' => 'EASTERN BANKSHARES INC'],
[
'ticker' => 'EBET','stock_name' => 'ESPORTS TECHNOLOGIES INC'],
[
'ticker' => 'EBF','stock_name' => 'ENNIS INC'],
[
'ticker' => 'EBIX','stock_name' => 'EBIX INC'],
[
'ticker' => 'EBIZ','stock_name' => 'GLOBAL X E-COMMERCE ETF'],
[
'ticker' => 'EBLU','stock_name' => 'ECOFIN GLOBAL WATER ESG FUND'],
[
'ticker' => 'EBMT','stock_name' => 'EAGLE BANCORP MONTANA INC'],
[
'ticker' => 'EBND','stock_name' => 'SPDR BLOOMBERG EMERGING MARK'],
[
'ticker' => 'EBON','stock_name' => 'EBANG INTERNATIONAL HLDGS-A'],
[
'ticker' => 'EBR','stock_name' => 'CENTRAIS ELETRICAS BR-SP ADR'],
[
'ticker' => 'EBR.B','stock_name' => 'CENTRAIS ELEC BRAS-ADR PREF'],
[
'ticker' => 'EBS','stock_name' => 'EMERGENT BIOSOLUTIONS INC'],
[
'ticker' => 'EBSB','stock_name' => 'MERIDIAN BANCORP INC'],
[
'ticker' => 'EBTC','stock_name' => 'ENTERPRISE BANCORP INC'],
[
'ticker' => 'EC','stock_name' => 'ECOPETROL SA-SPONSORED ADR'],
[
'ticker' => 'ECAT','stock_name' => 'BLACKROCK ESG CAPITAL ALLOC'],
[
'ticker' => 'ECC','stock_name' => 'EAGLE POINT CREDIT CO INC'],
[
'ticker' => 'ECF','stock_name' => 'ELLSWORTH GROWTH AND INCOME'],
[
'ticker' => 'ECH','stock_name' => 'ISHARES MSCI CHILE ETF'],
[
'ticker' => 'ECHO','stock_name' => 'ECHO GLOBAL LOGISTICS INC'],
[
'ticker' => 'ECL','stock_name' => 'ECOLAB INC'],
[
'ticker' => 'ECLN','stock_name' => 'FIRST TRUST EIP CARBON IMPAC'],
[
'ticker' => 'ECNS','stock_name' => 'ISHARES MSCI CHINA SMALL-CAP'],
[
'ticker' => 'ECOL','stock_name' => 'US ECOLOGY INC'],
[
'ticker' => 'ECOM','stock_name' => 'CHANNELADVISOR CORP'],
[
'ticker' => 'ECON','stock_name' => 'COLUMBIA EMERGING MARKETS CO'],
[
'ticker' => 'ECOR','stock_name' => 'ELECTROCORE INC'],
[
'ticker' => 'ECOW','stock_name' => 'PACER EMERGING MARKETS CASH'],
[
'ticker' => 'ECOZ','stock_name' => 'TRUESHARES ESG ACTIVE OPPORT'],
[
'ticker' => 'ECPG','stock_name' => 'ENCORE CAPITAL GROUP INC'],
[
'ticker' => 'ECVT','stock_name' => 'ECOVYST INC'],
[
'ticker' => 'ED','stock_name' => 'CONSOLIDATED EDISON INC'],
[
'ticker' => 'EDAP','stock_name' => 'EDAP TMS SA -ADR'],
[
'ticker' => 'EDC','stock_name' => 'DIREXION DLY EMG MKT BULL 3X'],
[
'ticker' => 'EDD','stock_name' => 'MORGAN STANLEY EMERGING MARK'],
[
'ticker' => 'EDEN','stock_name' => 'ISHARES MSCI DENMARK ETF'],
[
'ticker' => 'EDF','stock_name' => 'STONE HARBOR EMER MKT INC'],
[
'ticker' => 'EDI','stock_name' => 'STONE HARBOR EM MKT TOTL INC'],
[
'ticker' => 'EDIT','stock_name' => 'EDITAS MEDICINE INC'],
[
'ticker' => 'EDIV','stock_name' => 'SPDR S&P EMERGING MARKETS DI'],
[
'ticker' => 'EDN','stock_name' => 'EMP DISTRIB Y COMERC NOR-ADR'],
[
'ticker' => 'EDNCU','stock_name' => 'ENDURANCE ACQUISITION CORP'],
[
'ticker' => 'EDOC','stock_name' => 'GL X TELEMEDICINE DIG HEALTH'],
[
'ticker' => 'EDOG','stock_name' => 'ALPS EMERGING SECTOR DIVIDEN'],
[
'ticker' => 'EDOW','stock_name' => 'FIRST TRUST DOW 30 EQL WGHT'],
[
'ticker' => 'EDR','stock_name' => 'ENDEAVOR GROUP HOLD-CLASS A'],
[
'ticker' => 'EDRY','stock_name' => 'EURODRY LTD'],
[
'ticker' => 'EDSA','stock_name' => 'EDESA BIOTECH INC'],
[
'ticker' => 'EDTK','stock_name' => 'SKILLFUL CRAFTSMAN EDUCATION'],
[
'ticker' => 'EDTX','stock_name' => 'EDTECHX HOLDINGS II-CLASS A'],
[
'ticker' => 'EDTXU','stock_name' => 'EDTECHX HOLDINGS ACQUISITION'],
[
'ticker' => 'EDU','stock_name' => 'NEW ORIENTAL EDUCATIO-SP ADR'],
[
'ticker' => 'EDUC','stock_name' => 'EDUCATIONAL DEVELOPMENT CORP'],
[
'ticker' => 'EDUT','stock_name' => 'GLOBAL X EDUCATION ETF'],
[
'ticker' => 'EDV','stock_name' => 'VANGUARD EXTENDED DUR TREAS'],
[
'ticker' => 'EDZ','stock_name' => 'DIREXION DLY EMG MKT BEAR 3X'],
[
'ticker' => 'EEA','stock_name' => 'EUROPEAN EQUITY FUND INC/THE'],
[
'ticker' => 'EEFT','stock_name' => 'EURONET WORLDWIDE INC'],
[
'ticker' => 'EEH','stock_name' => 'ELEMENTS SPECTRUM ETN'],
[
'ticker' => 'EEIQ','stock_name' => 'ELITE EDUCATION GROUP INTERN'],
[
'ticker' => 'EELV','stock_name' => 'INVESCO S&P EMERGING MARKETS'],
[
'ticker' => 'EEM','stock_name' => 'ISHARES MSCI EMERGING MARKET'],
[
'ticker' => 'EEMA','stock_name' => 'ISHARES MSCI EMERG MRKT ASIA'],
[
'ticker' => 'EEMD','stock_name' => 'AAM S&P EM HIGH DIV VAL ETF'],
[
'ticker' => 'EEMO','stock_name' => 'INVESCO S&P EMERGING MARKETS'],
[
'ticker' => 'EEMS','stock_name' => 'ISHARES MSCI EMERGING MKT SM'],
[
'ticker' => 'EEMV','stock_name' => 'ISHARES MSCI EMG MKT MIN VOL'],
[
'ticker' => 'EEMX','stock_name' => 'SPDR MSCI EM FSL FL RSV FREE'],
[
'ticker' => 'EERN','stock_name' => 'DriveWealth Power Saver ETF'],
[
'ticker' => 'EES','stock_name' => 'WISDOMTREE US SMALLCAP FUND'],
[
'ticker' => 'EET','stock_name' => 'PROSHARES ULT MSCI EMER MKTS'],
[
'ticker' => 'EEV','stock_name' => 'PROSHARES ULTSHRT MSCI EM'],
[
'ticker' => 'EEX','stock_name' => 'EMERALD HOLDING INC'],
[
'ticker' => 'EFA','stock_name' => 'ISHARES MSCI EAFE ETF'],
[
'ticker' => 'EFAD','stock_name' => 'PROSHARES EAFE DVD GROWERS'],
[
'ticker' => 'EFAS','stock_name' => 'GLOBAL X MSCI SUPERDIVIDEND'],
[
'ticker' => 'EFAV','stock_name' => 'ISHARES MSCI EAFE MIN VOL FA'],
[
'ticker' => 'EFAX','stock_name' => 'SPDR MSCI EAFA FOSSIL FUEL'],
[
'ticker' => 'EFC','stock_name' => 'ELLINGTON FINANCIAL INC'],
[
'ticker' => 'EFG','stock_name' => 'ISHARES MSCI EAFE GROWTH ETF'],
[
'ticker' => 'EFIV','stock_name' => 'SPDR S&P 500 ESG ETF'],
[
'ticker' => 'EFIX','stock_name' => 'FT TCW EMERGING MARKETS DEBT'],
[
'ticker' => 'EFL','stock_name' => 'EATON VANCE FLOATING-RATE 20'],
[
'ticker' => 'EFNL','stock_name' => 'ISHARES MSCI FINLAND ETF'],
[
'ticker' => 'EFO','stock_name' => 'PROSHARES ULTRA MSCI EAFE'],
[
'ticker' => 'EFOI','stock_name' => 'ENERGY FOCUS INC'],
[
'ticker' => 'EFR','stock_name' => 'EATON VANCE SR FLTG RATE TR'],
[
'ticker' => 'EFSC','stock_name' => 'ENTERPRISE FINANCIAL SERVICE'],
[
'ticker' => 'EFT','stock_name' => 'EATON VANCE FLOAT RT INC TR'],
[
'ticker' => 'EFTR','stock_name' => 'EFFECTOR THERAPEUTICS INC'],
[
'ticker' => 'EFU','stock_name' => 'PROSHARES ULTSHRT MSCI EAFE'],
[
'ticker' => 'EFV','stock_name' => 'ISHARES MSCI EAFE VALUE ETF'],
[
'ticker' => 'EFX','stock_name' => 'EQUIFAX INC'],
[
'ticker' => 'EFZ','stock_name' => 'PROSHARES SHORT MSCI EAFE'],
[
'ticker' => 'EGAN','stock_name' => 'EGAIN CORP'],
[
'ticker' => 'EGBN','stock_name' => 'EAGLE BANCORP INC'],
[
'ticker' => 'EGF','stock_name' => 'BLACKROCK ENHANCED GOVT FUND'],
[
'ticker' => 'EGGF','stock_name' => 'EG ACQUISITION CORP-A'],
[
'ticker' => 'EGGF=','stock_name' => 'EG ACQUISITION CORP'],
[
'ticker' => 'EGHT','stock_name' => '8X8 INC'],
[
'ticker' => 'EGIS','stock_name' => '2NDVOTE SOCIETY DEFENDED ETF'],
[
'ticker' => 'EGLE','stock_name' => 'EAGLE BULK SHIPPING INC'],
[
'ticker' => 'EGLX','stock_name' => 'ENTHUSIAST GAMING HOLDINGS I'],
[
'ticker' => 'EGO','stock_name' => 'ELDORADO GOLD CORP'],
[
'ticker' => 'EGP','stock_name' => 'EASTGROUP PROPERTIES INC'],
[
'ticker' => 'EGPT','stock_name' => 'VANECK EGYPT INDEX ETF'],
[
'ticker' => 'EGRX','stock_name' => 'EAGLE PHARMACEUTICALS INC'],
[
'ticker' => 'EGY','stock_name' => 'VAALCO ENERGY INC'],
[
'ticker' => 'EH','stock_name' => 'EHANG HOLDINGS LTD-SPS ADR'],
[
'ticker' => 'EHC','stock_name' => 'ENCOMPASS HEALTH CORP'],
[
'ticker' => 'EHI','stock_name' => 'WESTERN ASSET GLOBAL HIGH IN'],
[
'ticker' => 'EHTH','stock_name' => 'EHEALTH INC'],
[
'ticker' => 'EIC','stock_name' => 'EAGLE POINT INCOME CO INC'],
[
'ticker' => 'EIDO','stock_name' => 'ISHARES MSCI INDONESIA ETF'],
[
'ticker' => 'EIG','stock_name' => 'EMPLOYERS HOLDINGS INC'],
[
'ticker' => 'EIGR','stock_name' => 'EIGER BIOPHARMACEUTICALS INC'],
[
'ticker' => 'EIM','stock_name' => 'EATON VANCE MUNICIPAL BOND F'],
[
'ticker' => 'EINC','stock_name' => 'VANECK ENERGY INCOME ETF'],
[
'ticker' => 'EIRL','stock_name' => 'ISHARES MSCI IRELAND ETF'],
[
'ticker' => 'EIS','stock_name' => 'ISHARES MSCI ISRAEL ETF'],
[
'ticker' => 'EIX','stock_name' => 'EDISON INTERNATIONAL'],
[
'ticker' => 'EJAN','stock_name' => 'INNOVATOR EMERGING MARKETS P'],
[
'ticker' => 'EJFA','stock_name' => 'EJF ACQUISITION CORP-A'],
[
'ticker' => 'EJFAU','stock_name' => 'EJF ACQUISITION CORP'],
[
'ticker' => 'EJH','stock_name' => 'E-HOME HOUSEHOLD SERVICE'],
[
'ticker' => 'EJUL','stock_name' => 'INNOVATOR EMERGING MARKETS P'],
[
'ticker' => 'EKAR','stock_name' => 'CAPITAL LINK NEXTGEN VEHICLE'],
[
'ticker' => 'EKSO','stock_name' => 'EKSO BIONICS HOLDINGS INC'],
[
'ticker' => 'EL','stock_name' => 'ESTEE LAUDER COMPANIES-CL A'],
[
'ticker' => 'ELA','stock_name' => 'ENVELA CORP'],
[
'ticker' => 'ELAN','stock_name' => 'ELANCO ANIMAL HEALTH INC'],
[
'ticker' => 'ELD','stock_name' => 'WISDOMTREE EMRG MKTS DEBT'],
[
'ticker' => 'ELDN','stock_name' => 'ELEDON PHARMACEUTICALS INC'],
[
'ticker' => 'ELEV','stock_name' => 'ELEVATION ONCOLOGY INC'],
[
'ticker' => 'ELF','stock_name' => 'ELF BEAUTY INC'],
[
'ticker' => 'ELLO','stock_name' => 'ELLOMAY CAPITAL LTD'],
[
'ticker' => 'ELMD','stock_name' => 'ELECTROMED INC'],
[
'ticker' => 'ELMS','stock_name' => 'ELECTRIC LAST MILE SOLUTIONS'],
[
'ticker' => 'ELOX','stock_name' => 'ELOXX PHARMACEUTICALS INC'],
[
'ticker' => 'ELP','stock_name' => 'CIA PARANAENSE ENER-SP ADR'],
[
'ticker' => 'ELS','stock_name' => 'EQUITY LIFESTYLE PROPERTIES'],
[
'ticker' => 'ELSE','stock_name' => 'ELECTRO-SENSORS INC'],
[
'ticker' => 'ELTK','stock_name' => 'ELTEK LTD'],
[
'ticker' => 'ELVT','stock_name' => 'ELEVATE CREDIT INC'],
[
'ticker' => 'ELY','stock_name' => 'CALLAWAY GOLF COMPANY'],
[
'ticker' => 'ELYM','stock_name' => 'ELIEM THERAPEUTICS INC'],
[
'ticker' => 'ELYS','stock_name' => 'ELYS GAME TECHNOLOGY CORP'],
[
'ticker' => 'EM','stock_name' => 'SMART SHARE GLOBAL LTD - ADR'],
[
'ticker' => 'EMAN','stock_name' => 'EMAGIN CORPORATION'],
[
'ticker' => 'EMB','stock_name' => 'ISHARES JP MORGAN USD EMERGI'],
[
'ticker' => 'EMBD','stock_name' => 'GLOBAL X EMERGING MARKETS BD'],
[
'ticker' => 'EMBH','stock_name' => 'ISHARES INT RATE HDG EM BOND'],
[
'ticker' => 'EMCB','stock_name' => 'WISDOMTREE EM CORP BOND'],
[
'ticker' => 'EMCF','stock_name' => 'EMCLAIRE FINANCIAL CORP'],
[
'ticker' => 'EMCR','stock_name' => 'XTRACKERS EMERG MARK CARB RE'],
[
'ticker' => 'EMD','stock_name' => 'WESTERN ASSET EMRG MRKT DBT'],
[
'ticker' => 'EMDV','stock_name' => 'PROSHARES MSCI EMERGING MARK'],
[
'ticker' => 'EME','stock_name' => 'EMCOR GROUP INC'],
[
'ticker' => 'EMF','stock_name' => 'TEMPLETON EMERGING MKTS FND'],
[
'ticker' => 'EMFM','stock_name' => 'GLOBAL X MSCI NEXT EMERGING'],
[
'ticker' => 'EMGF','stock_name' => 'ISHARES MSCI EMERGING MARKET'],
[
'ticker' => 'EMHC','stock_name' => 'SPDR BLOOMBERG EMERGING MARK'],
[
'ticker' => 'EMHY','stock_name' => 'ISHARES J.P. MORGAN EM HIGH'],
[
'ticker' => 'EMIF','stock_name' => 'ISHARES EMERGING MARKETS INF'],
[
'ticker' => 'EMKR','stock_name' => 'EMCORE CORP'],
[
'ticker' => 'EML','stock_name' => 'EASTERN CO/THE'],
[
'ticker' => 'EMLC','stock_name' => 'VANECK JPM EM LOCAL CURR BND'],
[
'ticker' => 'EMLP','stock_name' => 'FIRST TRUST NORTH AMERICAN E'],
[
'ticker' => 'EMMF','stock_name' => 'WISDOMTREE EMERGING MARKETS'],
[
'ticker' => 'EMN','stock_name' => 'EASTMAN CHEMICAL CO'],
[
'ticker' => 'EMNT','stock_name' => 'PIMCO ENHCD ST M-ACTIVE ESG'],
[
'ticker' => 'EMO','stock_name' => 'CLEARBRIDGE ENERGY MIDSTREAM'],
[
'ticker' => 'EMQQ','stock_name' => 'EMERGING MRKTS INTERNET & EC'],
[
'ticker' => 'EMR','stock_name' => 'EMERSON ELECTRIC CO'],
[
'ticker' => 'EMSG','stock_name' => 'XTRACKERS MSCI EMERGING MARK'],
[
'ticker' => 'EMSH','stock_name' => 'PROSHARES SHORT TERM USD EME'],
[
'ticker' => 'EMTL','stock_name' => 'SPDR DL EM FX IN ETF'],
[
'ticker' => 'EMTY','stock_name' => 'PROSHARES DECLINE OF THE RET'],
[
'ticker' => 'EMX','stock_name' => 'EMX ROYALTY CORP'],
[
'ticker' => 'EMXC','stock_name' => 'ISHARES MSCI EMR MRK EX CHNA'],
[
'ticker' => 'EMXF','stock_name' => 'ISHARES ESG ADV MSCI EM ETF'],
[
'ticker' => 'ENB','stock_name' => 'ENBRIDGE INC'],
[
'ticker' => 'ENBL','stock_name' => 'ENABLE MIDSTREAM PARTNERS LP'],
[
'ticker' => 'ENDP','stock_name' => 'ENDO INTERNATIONAL PLC'],
[
'ticker' => 'ENERU','stock_name' => 'ACCRETION ACQUISITION CORP'],
[
'ticker' => 'ENFA','stock_name' => '890 5TH AVENUE PARTNERS-CL A'],
[
'ticker' => 'ENFAU','stock_name' => '890 5TH AVENUE PARTNERS INC'],
[
'ticker' => 'ENFN','stock_name' => 'ENFUSION INC - CLASS A'],
[
'ticker' => 'ENFR','stock_name' => 'ALERIAN ENERGY INFRASTRUCTUR'],
[
'ticker' => 'ENG','stock_name' => 'ENGLOBAL CORP'],
[
'ticker' => 'ENIA','stock_name' => 'ENEL AMERICAS SA-ADR'],
[
'ticker' => 'ENIC','stock_name' => 'ENEL CHILE SA-ADR'],
[
'ticker' => 'ENJY','stock_name' => 'ENJOY TECHNOLOGY INC'],
[
'ticker' => 'ENLC','stock_name' => 'ENLINK MIDSTREAM LLC'],
[
'ticker' => 'ENLV','stock_name' => 'ENLIVEX THERAPEUTICS LTD'],
[
'ticker' => 'ENNV','stock_name' => 'ECP ENVIRONMENTAL GROWTH O-A'],
[
'ticker' => 'ENNVU','stock_name' => 'ECP ENVIRONMENTAL GROWTH OPP'],
[
'ticker' => 'ENOB','stock_name' => 'ENOCHIAN BIOSCIENCES INC'],
[
'ticker' => 'ENOR','stock_name' => 'ISHARES MSCI NORWAY ETF'],
[
'ticker' => 'ENPC','stock_name' => 'EXECUTIVE NETWORK PARTNER-A'],
[
'ticker' => 'ENPC=','stock_name' => 'EXECUTIVE NETWORK PARTNERING'],
[
'ticker' => 'ENPH','stock_name' => 'ENPHASE ENERGY INC'],
[
'ticker' => 'ENR','stock_name' => 'ENERGIZER HOLDINGS INC'],
[
'ticker' => 'ENS','stock_name' => 'ENERSYS'],
[
'ticker' => 'ENSC','stock_name' => 'ENSYSCE BIOSCIENCES INC'],
[
'ticker' => 'ENSG','stock_name' => 'ENSIGN GROUP INC/THE'],
[
'ticker' => 'ENSV','stock_name' => 'ENSERVCO CORP'],
[
'ticker' => 'ENTA','stock_name' => 'ENANTA PHARMACEUTICALS INC'],
[
'ticker' => 'ENTFU','stock_name' => 'ENTERPRISE 4.0 TECHNOLOGY AC'],
[
'ticker' => 'ENTG','stock_name' => 'ENTEGRIS INC'],
[
'ticker' => 'ENTR','stock_name' => 'ERSHARES ENTREPRENEURS ETF'],
[
'ticker' => 'ENTX','stock_name' => 'ENTERA BIO LTD'],
[
'ticker' => 'ENV','stock_name' => 'ENVESTNET INC'],
[
'ticker' => 'ENVA','stock_name' => 'ENOVA INTERNATIONAL INC'],
[
'ticker' => 'ENVB','stock_name' => 'ENVERIC BIOSCIENCES INC'],
[
'ticker' => 'ENVI','stock_name' => 'ENVIRONMENTAL IMPACT ACQUI-A'],
[
'ticker' => 'ENVIU','stock_name' => 'ENVIRONMENTAL IMPACT ACQUISI'],
[
'ticker' => 'ENVX','stock_name' => 'ENOVIX CORP'],
[
'ticker' => 'ENX','stock_name' => 'EATON VANCE NEW YORK MUNICIP'],
[
'ticker' => 'ENZ','stock_name' => 'ENZO BIOCHEM INC'],
[
'ticker' => 'ENZL','stock_name' => 'ISHARES MSCI NEW ZEALAND ETF'],
[
'ticker' => 'EOCT','stock_name' => 'INNOVATOR EMER MKT PWR BUFF'],
[
'ticker' => 'EOCW','stock_name' => 'ELLIOTT OPPORTUNITY II COR-A'],
[
'ticker' => 'EOCW=','stock_name' => 'ELLIOTT OPPORTUNITY II CORP'],
[
'ticker' => 'EOD','stock_name' => 'WELLS FARGO GLOBAL DIVIDEND'],
[
'ticker' => 'EOG','stock_name' => 'EOG RESOURCES INC'],
[
'ticker' => 'EOI','stock_name' => 'EATON VANCE ENHANCED EQ INCM'],
[
'ticker' => 'EOLS','stock_name' => 'EVOLUS INC'],
[
'ticker' => 'EOPS','stock_name' => 'EMLES ALPHA OPPORTUNITIES'],
[
'ticker' => 'EOS','stock_name' => 'EATON VANCE ENH EQT INC II'],
[
'ticker' => 'EOSE','stock_name' => 'EOS ENERGY ENTERPRISES INC'],
[
'ticker' => 'EOT','stock_name' => 'EATON VANCE NATIONAL MUNICIP'],
[
'ticker' => 'EPAC','stock_name' => 'ENERPAC TOOL GROUP CORP'],
[
'ticker' => 'EPAM','stock_name' => 'EPAM SYSTEMS INC'],
[
'ticker' => 'EPAY','stock_name' => 'BOTTOMLINE TECHNOLOGIES (DE)'],
[
'ticker' => 'EPC','stock_name' => 'EDGEWELL PERSONAL CARE CO'],
[
'ticker' => 'EPD','stock_name' => 'ENTERPRISE PRODUCTS PARTNERS'],
[
'ticker' => 'EPHE','stock_name' => 'ISHARES MSCI PHILIPPINES ETF'],
[
'ticker' => 'EPHY','stock_name' => 'EPIPHANY TECHNOLOGY ACQ-CL A'],
[
'ticker' => 'EPHYU','stock_name' => 'EPIPHANY TECHNOLOGY ACQUISIT'],
[
'ticker' => 'EPI','stock_name' => 'WISDOMTREE INDIA EARNINGS'],
[
'ticker' => 'EPIX','stock_name' => 'ESSA PHARMA INC'],
[
'ticker' => 'EPM','stock_name' => 'EVOLUTION PETROLEUM CORP'],
[
'ticker' => 'EPOL','stock_name' => 'ISHARES MSCI POLAND ETF'],
[
'ticker' => 'EPP','stock_name' => 'ISHARES MSCI PACIFIC EX JAPA'],
[
'ticker' => 'EPR','stock_name' => 'EPR PROPERTIES'],
[
'ticker' => 'EPRE','stock_name' => 'FIRST TRUST TCW ESG PREMIER'],
[
'ticker' => 'EPRF','stock_name' => 'INNOVAT S&P INVEST GRD PREF'],
[
'ticker' => 'EPRT','stock_name' => 'ESSENTIAL PROPERTIES REALTY'],
[
'ticker' => 'EPS','stock_name' => 'WISDOMTREE US LARGE CAP FUND'],
[
'ticker' => 'EPSN','stock_name' => 'EPSILON ENERGY LTD'],
[
'ticker' => 'EPU','stock_name' => 'ISHARES MSCI PERU ETF'],
[
'ticker' => 'EPV','stock_name' => 'PROSHARES ULTRASHORT FTSE EU'],
[
'ticker' => 'EPWR','stock_name' => 'EMPOWERMENT & INCLUSION-CL A'],
[
'ticker' => 'EPWR=','stock_name' => 'EMPOWERMENT & INCLUSION CAPI'],
[
'ticker' => 'EPZM','stock_name' => 'EPIZYME INC'],
[
'ticker' => 'EQ','stock_name' => 'EQUILLIUM INC'],
[
'ticker' => 'EQAL','stock_name' => 'INVESCO RUSSELL 1000 EQUAL W'],
[
'ticker' => 'EQBK','stock_name' => 'EQUITY BANCSHARES INC - CL A'],
[
'ticker' => 'EQC','stock_name' => 'EQUITY COMMONWEALTH'],
[
'ticker' => 'EQD','stock_name' => 'EQUITY DISTRIBUTION ACQUIS-A'],
[
'ticker' => 'EQD=','stock_name' => 'EQUITY DISTRIBUTION ACQUISIT'],
[
'ticker' => 'EQH','stock_name' => 'EQUITABLE HOLDINGS INC'],
[
'ticker' => 'EQHA','stock_name' => 'EQ HEALTH ACQUISITION CORP-A'],
[
'ticker' => 'EQHA=','stock_name' => 'EQ HEALTH ACQUISITION CORP'],
[
'ticker' => 'EQIX','stock_name' => 'EQUINIX INC'],
[
'ticker' => 'EQL','stock_name' => 'ALPS EQUAL SECTOR WEIGHT ETF'],
[
'ticker' => 'EQNR','stock_name' => 'EQUINOR ASA-SPON ADR'],
[
'ticker' => 'EQOP','stock_name' => 'NATIXIS US EQUITY OPPORT ETF'],
[
'ticker' => 'EQOS','stock_name' => 'EQONEX LTD'],
[
'ticker' => 'EQR','stock_name' => 'EQUITY RESIDENTIAL'],
[
'ticker' => 'EQRR','stock_name' => 'PROSHRS EQTY RISING RATE ETF'],
[
'ticker' => 'EQS','stock_name' => 'EQUUS TOTAL RETURN INC'],
[
'ticker' => 'EQT','stock_name' => 'EQT CORP'],
[
'ticker' => 'EQUL','stock_name' => 'IQ ENGENDER EQUALITY ETF'],
[
'ticker' => 'EQWL','stock_name' => 'INVESCO S&P 100 EQUAL WEIGHT'],
[
'ticker' => 'EQX','stock_name' => 'EQUINOX GOLD CORP'],
[
'ticker' => 'ERAS','stock_name' => 'ERASCA INC'],
[
'ticker' => 'ERC','stock_name' => 'WELLS FARGO MULTI-SECTOR INC'],
[
'ticker' => 'ERES','stock_name' => 'EAST RESOURCES ACQUISITION-A'],
[
'ticker' => 'ERESU','stock_name' => 'EAST RESOURCES ACQUISITION C'],
[
'ticker' => 'ERF','stock_name' => 'ENERPLUS CORP'],
[
'ticker' => 'ERH','stock_name' => 'WELLS FARGO UTILITIES AND HI'],
[
'ticker' => 'ERIC','stock_name' => 'ERICSSON (LM) TEL-SP ADR'],
[
'ticker' => 'ERIE','stock_name' => 'ERIE INDEMNITY COMPANY-CL A'],
[
'ticker' => 'ERII','stock_name' => 'ENERGY RECOVERY INC'],
[
'ticker' => 'ERJ','stock_name' => 'EMBRAER SA-SPON ADR'],
[
'ticker' => 'ERM','stock_name' => 'EQUITYCOMPASS RISK MNGR ETF'],
[
'ticker' => 'ERO','stock_name' => 'ERO COPPER CORP'],
[
'ticker' => 'ERSX','stock_name' => 'ERSHARES NEXTGEN ENTREPRENEU'],
[
'ticker' => 'ERTH','stock_name' => 'INVESCO MSCI SUSTAINABLE FUT'],
[
'ticker' => 'ERUS','stock_name' => 'ISHARES MSCI RUSSIA ETF'],
[
'ticker' => 'ERX','stock_name' => 'DIREXION DAILY ENERGY BULL 2'],
[
'ticker' => 'ERY','stock_name' => 'DIREXION DAILY ENERGY BEAR 2'],
[
'ticker' => 'ERYP','stock_name' => 'ERYTECH PHARMA - SPON ADR'],
[
'ticker' => 'ES','stock_name' => 'EVERSOURCE ENERGY'],
[
'ticker' => 'ESACU','stock_name' => 'ESGEN ACQUISITION CORP'],
[
'ticker' => 'ESBA','stock_name' => 'EMPIRE STATE REALTY OP LP-ES'],
[
'ticker' => 'ESBK','stock_name' => 'ELMIRA SAVINGS BANK'],
[
'ticker' => 'ESCA','stock_name' => 'ESCALADE INC'],
[
'ticker' => 'ESCR','stock_name' => 'XTRACKERS BBG US IG CORP ESG'],
[
'ticker' => 'ESE','stock_name' => 'ESCO TECHNOLOGIES INC'],
[
'ticker' => 'ESEA','stock_name' => 'EUROSEAS LTD'],
[
'ticker' => 'ESEB','stock_name' => 'X-TRACKERS J.P. MORGAN ESG E'],
[
'ticker' => 'ESG','stock_name' => 'FLEXSHARES STOXX US ESG SELE'],
[
'ticker' => 'ESGA','stock_name' => 'AMERICAN CENTURY SUSTAINABLE'],
[
'ticker' => 'ESGB','stock_name' => 'IQ MACKAY ESG CORE PLUS BOND'],
[
'ticker' => 'ESGC','stock_name' => 'EROS STX GLOBAL CORP'],
[
'ticker' => 'ESGD','stock_name' => 'ISHARES TRUST ISHARES ESG AW'],
[
'ticker' => 'ESGE','stock_name' => 'ISHARES INC ISHARES ESG AWAR'],
[
'ticker' => 'ESGG','stock_name' => 'FLEXSHARES STOXX GLOBAL ESG'],
[
'ticker' => 'ESGN','stock_name' => 'COLUMBIA SUSTAIN INTL EQ ETF'],
[
'ticker' => 'ESGR','stock_name' => 'ENSTAR GROUP LTD'],
[
'ticker' => 'ESGS','stock_name' => 'COLUMBIA SUSTAIN US EQ I ETF'],
[
'ticker' => 'ESGU','stock_name' => 'ISHARES ESG AWARE MSCI USA'],
[
'ticker' => 'ESGV','stock_name' => 'VANGUARD ESG US STOCK ETF'],
[
'ticker' => 'ESGY','stock_name' => 'AMERICAN CENT SUST GROWTH'],
[
'ticker' => 'ESHY','stock_name' => 'X-TRACKERS J.P. MORGAN ESG U'],
[
'ticker' => 'ESI','stock_name' => 'ELEMENT SOLUTIONS INC'],
[
'ticker' => 'ESLT','stock_name' => 'ELBIT SYSTEMS LTD'],
[
'ticker' => 'ESM','stock_name' => 'ESM ACQUISITION CORP-A'],
[
'ticker' => 'ESM=','stock_name' => 'ESM ACQUISITION CORP'],
[
'ticker' => 'ESML','stock_name' => 'ISHARES ESG AWARE MSCI USA S'],
[
'ticker' => 'ESMT','stock_name' => 'ENGAGESMART INC'],
[
'ticker' => 'ESMV','stock_name' => 'ISHARES ESG MSCI USA MIN VOL'],
[
'ticker' => 'ESNT','stock_name' => 'ESSENT GROUP LTD'],
[
'ticker' => 'ESP','stock_name' => 'ESPEY MFG & ELECTRONICS CORP'],
[
'ticker' => 'ESPO','stock_name' => 'VANECK VIDEOGAMING ESPORTS'],
[
'ticker' => 'ESPR','stock_name' => 'ESPERION THERAPEUTICS INC'],
[
'ticker' => 'ESQ','stock_name' => 'ESQUIRE FINANCIAL HOLDINGS I'],
[
'ticker' => 'ESRT','stock_name' => 'EMPIRE STATE REALTY TRUST-A'],
[
'ticker' => 'ESS','stock_name' => 'ESSEX PROPERTY TRUST INC'],
[
'ticker' => 'ESSA','stock_name' => 'ESSA BANCORP INC'],
[
'ticker' => 'ESSC','stock_name' => 'EAST STONE ACQUISITION CORP'],
[
'ticker' => 'ESSCR','stock_name' => 'EAST STONE ACQUISITION-RIGHT'],
[
'ticker' => 'ESSCU','stock_name' => 'EAST STONE ACQUISITION -UNIT'],
[
'ticker' => 'ESTA','stock_name' => 'ESTABLISHMENT LABS HOLDINGS'],
[
'ticker' => 'ESTC','stock_name' => 'ELASTIC NV'],
[
'ticker' => 'ESTE','stock_name' => 'EARTHSTONE ENERGY INC - A'],
[
'ticker' => 'ESUS','stock_name' => 'ESTRACS 2X LEV MSCI US ESG'],
[
'ticker' => 'ESXB','stock_name' => 'COMMUNITY BANKERS TRUST CORP'],
[
'ticker' => 'ET','stock_name' => 'ENERGY TRANSFER LP'],
[
'ticker' => 'ETAC','stock_name' => 'E.MERGE TECHNOLOGY ACQUISI-A'],
[
'ticker' => 'ETACU','stock_name' => 'E.MERGE TECHNOLOGY ACQUISITI'],
[
'ticker' => 'ETB','stock_name' => 'EATON VANCE T/M BUY-WR IN'],
[
'ticker' => 'ETD','stock_name' => 'ETHAN ALLEN INTERIORS INC'],
[
'ticker' => 'ETG','stock_name' => 'EATON VANCE T/A GL DVD INCM'],
[
'ticker' => 'ETHO','stock_name' => 'ETHO CLIMATE LEADERSHIP ETF'],
[
'ticker' => 'ETJ','stock_name' => 'EATON VANCE RISK-MANAGED DIV'],
[
'ticker' => 'ETN','stock_name' => 'EATON CORP PLC'],
[
'ticker' => 'ETNB','stock_name' => '89BIO INC'],
[
'ticker' => 'ETO','stock_name' => 'EATON VANCE TAX ADV GL DVD O'],
[
'ticker' => 'ETON','stock_name' => 'ETON PHARMACEUTICALS INC'],
[
'ticker' => 'ETR','stock_name' => 'ENTERGY CORP'],
[
'ticker' => 'ETRN','stock_name' => 'EQUITRANS MIDSTREAM CORP'],
[
'ticker' => 'ETSY','stock_name' => 'ETSY INC'],
[
'ticker' => 'ETTX','stock_name' => 'ENTASIS THERAPEUTICS HOLDING'],
[
'ticker' => 'ETV','stock_name' => 'EATON VANCE T/M BUY-WRITE OP'],
[
'ticker' => 'ETW','stock_name' => 'EATON VANCE TAX MAN GLBL BR'],
[
'ticker' => 'ETWO','stock_name' => 'E2OPEN PARENT HOLDINGS INC'],
[
'ticker' => 'ETX','stock_name' => 'EATON VANCE MUNI INC 2028 TM'],
[
'ticker' => 'ETY','stock_name' => 'EATON VANCE TAX-MANAGED DIVE'],
[
'ticker' => 'EUCG','stock_name' => 'EUCLID CAPITAL GROWTH ETF'],
[
'ticker' => 'EUCR','stock_name' => 'EUCRATES BIOMEDICAL ACQUISIT'],
[
'ticker' => 'EUCRU','stock_name' => 'EUCRATES BIOMEDICAL ACQUISIT'],
[
'ticker' => 'EUDG','stock_name' => 'WISDOMTREE EUROPE QUALITY DI'],
[
'ticker' => 'EUDV','stock_name' => 'PROSHARES MSCI EUROPE DIVIDE'],
[
'ticker' => 'EUFN','stock_name' => 'ISHARES MSCI EUROPE FINANCIA'],
[
'ticker' => 'EUFX','stock_name' => 'PROSHARES SHORT EURO ETF'],
[
'ticker' => 'EUM','stock_name' => 'PROSHARES SHORT MSCI EMR MKT'],
[
'ticker' => 'EUO','stock_name' => 'PROSHARES ULTRASHORT EURO'],
[
'ticker' => 'EURL','stock_name' => 'DRX DLY FTSE EUROPE BULL 3X'],
[
'ticker' => 'EURN','stock_name' => 'EURONAV NV'],
[
'ticker' => 'EURZ','stock_name' => 'XTRACKERS EUROZONE EQUITY ET'],
[
'ticker' => 'EUSA','stock_name' => 'ISHARES MSCI USA EQUAL WEIGH'],
[
'ticker' => 'EUSB','stock_name' => 'ISHARES ESG ADV TOT USD BOND'],
[
'ticker' => 'EUSC','stock_name' => 'WISDOMTREE EUROPE HEDG SM EQ'],
[
'ticker' => 'EUSG','stock_name' => 'EUROPEAN SUSTAINABLE GROW-A'],
[
'ticker' => 'EUSGU','stock_name' => 'EUROPEAN SUSTAINABLE GROWTH'],
[
'ticker' => 'EVA','stock_name' => 'ENVIVA PARTNERS LP'],
[
'ticker' => 'EVAX','stock_name' => 'EVAXION BIOTECH A/S'],
[
'ticker' => 'EVBG','stock_name' => 'EVERBRIDGE INC'],
[
'ticker' => 'EVBN','stock_name' => 'EVANS BANCORP INC'],
[
'ticker' => 'EVC','stock_name' => 'ENTRAVISION COMMUNICATIONS-A'],
[
'ticker' => 'EVCM','stock_name' => 'EVERCOMMERCE INC'],
[
'ticker' => 'EVER','stock_name' => 'EVERQUOTE INC - CLASS A'],
[
'ticker' => 'EVF','stock_name' => 'EATON VANCE SENIOR INCOME TR'],
[
'ticker' => 'EVFM','stock_name' => 'EVOFEM BIOSCIENCES INC'],
[
'ticker' => 'EVG','stock_name' => 'EATON VANCE SHORT DUR DIV IN'],
[
'ticker' => 'EVGBC','stock_name' => 'EATON VANCE GBL INC BLDR NS'],
[
'ticker' => 'EVGN','stock_name' => 'EVOGENE LTD'],
[
'ticker' => 'EVGO','stock_name' => 'EVGO INC'],
[
'ticker' => 'EVH','stock_name' => 'EVOLENT HEALTH INC - A'],
[
'ticker' => 'EVI','stock_name' => 'EVI INDUSTRIES INC'],
[
'ticker' => 'EVK','stock_name' => 'EVER-GLORY INTERNATIONAL GRO'],
[
'ticker' => 'EVLMC','stock_name' => 'EATON VANCE TABS 5-15 LDR MU'],
[
'ticker' => 'EVLO','stock_name' => 'EVELO BIOSCIENCES INC'],
[
'ticker' => 'EVLV','stock_name' => 'EVOLV TECHNOLOGIES HOLDINGS'],
[
'ticker' => 'EVM','stock_name' => 'EATON VANCE CAL MUNI BOND'],
[
'ticker' => 'EVN','stock_name' => 'EATON VANCE MUNICIPAL INCOME'],
[
'ticker' => 'EVNT','stock_name' => 'ALTSHARES EVENT-DRIVEN ETF'],
[
'ticker' => 'EVO','stock_name' => 'EVOTEC SE - SPON ADR'],
[
'ticker' => 'EVOJ','stock_name' => 'EVO ACQUISITION CORP-A'],
[
'ticker' => 'EVOJU','stock_name' => 'EVO ACQUISITION CORP'],
[
'ticker' => 'EVOK','stock_name' => 'EVOKE PHARMA INC'],
[
'ticker' => 'EVOL','stock_name' => 'EVOLVING SYSTEMS INC'],
[
'ticker' => 'EVOP','stock_name' => 'EVO PAYMENTS INC-CLASS A'],
[
'ticker' => 'EVR','stock_name' => 'EVERCORE INC - A'],
[
'ticker' => 'EVRG','stock_name' => 'EVERGY INC'],
[
'ticker' => 'EVRI','stock_name' => 'EVERI HOLDINGS INC'],
[
'ticker' => 'EVSTC','stock_name' => 'EATON VANCE STOCK NEXTSHARES'],
[
'ticker' => 'EVT','stock_name' => 'EATON VANCE TAX-ADV DVD INC'],
[
'ticker' => 'EVTC','stock_name' => 'EVERTEC INC'],
[
'ticker' => 'EVV','stock_name' => 'EATON VANCE LTD DURATION FND'],
[
'ticker' => 'EVX','stock_name' => 'VANECK ENVIRONMENTAL SERVICE'],
[
'ticker' => 'EW','stock_name' => 'EDWARDS LIFESCIENCES CORP'],
[
'ticker' => 'EWA','stock_name' => 'ISHARES MSCI AUSTRALIA ETF'],
[
'ticker' => 'EWBC','stock_name' => 'EAST WEST BANCORP INC'],
[
'ticker' => 'EWC','stock_name' => 'ISHARES MSCI CANADA ETF'],
[
'ticker' => 'EWCO','stock_name' => 'INVESCO S&P 500 EQUAL WEIG C'],
[
'ticker' => 'EWCZ','stock_name' => 'EUROPEAN WAX CENTER INC-A'],
[
'ticker' => 'EWD','stock_name' => 'ISHARES MSCI SWEDEN ETF'],
[
'ticker' => 'EWEB','stock_name' => 'GLOBAL X EM INTERNET & ECOMM'],
[
'ticker' => 'EWG','stock_name' => 'ISHARES MSCI GERMANY ETF'],
[
'ticker' => 'EWGS','stock_name' => 'ISHARES MSCI GERMANY SMALL-C'],
[
'ticker' => 'EWH','stock_name' => 'ISHARES MSCI HONG KONG ETF'],
[
'ticker' => 'EWI','stock_name' => 'ISHARES MSCI ITALY ETF'],
[
'ticker' => 'EWJ','stock_name' => 'ISHARES MSCI JAPAN ETF'],
[
'ticker' => 'EWJE','stock_name' => 'ISHARES MSCI JAPAN EQL WGHT'],
[
'ticker' => 'EWJV','stock_name' => 'ISHARES MSCI JAPAN VALUE ETF'],
[
'ticker' => 'EWK','stock_name' => 'ISHARES MSCI BELGIUM ETF'],
[
'ticker' => 'EWL','stock_name' => 'ISHARES MSCI SWITZERLAND ETF'],
[
'ticker' => 'EWM','stock_name' => 'ISHARES MSCI MALAYSIA ETF'],
[
'ticker' => 'EWMC','stock_name' => 'INVESCO S&P MIDCAP 400 EQUAL'],
[
'ticker' => 'EWN','stock_name' => 'ISHARES MSCI NETHERLANDS ETF'],
[
'ticker' => 'EWO','stock_name' => 'ISHARES MSCI AUSTRIA ETF'],
[
'ticker' => 'EWP','stock_name' => 'ISHARES MSCI SPAIN ETF'],
[
'ticker' => 'EWQ','stock_name' => 'ISHARES MSCI FRANCE ETF'],
[
'ticker' => 'EWRE','stock_name' => 'INVESCO S&P 500 EQUAL WEIGHT'],
[
'ticker' => 'EWS','stock_name' => 'ISHARES MSCI SINGAPORE ETF'],
[
'ticker' => 'EWSC','stock_name' => 'INVESCO S&P SMALLCAP 600 EQU'],
[
'ticker' => 'EWT','stock_name' => 'ISHARES MSCI TAIWAN ETF'],
[
'ticker' => 'EWTX','stock_name' => 'EDGEWISE THERAPEUTICS INC'],
[
'ticker' => 'EWU','stock_name' => 'ISHARES MSCI UNITED KINGDOM'],
[
'ticker' => 'EWUS','stock_name' => 'ISHARES MSCI UNITED KINGDOM'],
[
'ticker' => 'EWV','stock_name' => 'PROSHARES ULTSHRT MSCI JAPAN'],
[
'ticker' => 'EWW','stock_name' => 'ISHARES MSCI MEXICO ETF'],
[
'ticker' => 'EWX','stock_name' => 'SPDR S&P EMERGING MKTS SMALL'],
[
'ticker' => 'EWY','stock_name' => 'ISHARES MSCI SOUTH KOREA ETF'],
[
'ticker' => 'EWZ','stock_name' => 'ISHARES MSCI BRAZIL ETF'],
[
'ticker' => 'EWZS','stock_name' => 'ISHARES MSCI BRAZIL SMALL-CA'],
[
'ticker' => 'EXAI','stock_name' => 'EXSCIENTIA PLC'],
[
'ticker' => 'EXAS','stock_name' => 'EXACT SCIENCES CORP'],
[
'ticker' => 'EXC','stock_name' => 'EXELON CORP'],
[
'ticker' => 'EXD','stock_name' => 'EATON VANCE TAX-MGD B/W STR'],
[
'ticker' => 'EXEL','stock_name' => 'EXELIXIS INC'],
[
'ticker' => 'EXG','stock_name' => 'EATON VANCE TAX-MANAGED GLOB'],
[
'ticker' => 'EXI','stock_name' => 'ISHARES GLOBAL INDUSTRIALS E'],
[
'ticker' => 'EXK','stock_name' => 'ENDEAVOUR SILVER CORP'],
[
'ticker' => 'EXLS','stock_name' => 'EXLSERVICE HOLDINGS INC'],
[
'ticker' => 'EXN','stock_name' => 'EXCELLON RESOURCES INC'],
[
'ticker' => 'EXP','stock_name' => 'EAGLE MATERIALS INC'],
[
'ticker' => 'EXPD','stock_name' => 'EXPEDITORS INTL WASH INC'],
[
'ticker' => 'EXPE','stock_name' => 'EXPEDIA GROUP INC'],
[
'ticker' => 'EXPI','stock_name' => 'EXP WORLD HOLDINGS INC'],
[
'ticker' => 'EXPO','stock_name' => 'EXPONENT INC'],
[
'ticker' => 'EXPR','stock_name' => 'EXPRESS INC'],
[
'ticker' => 'EXR','stock_name' => 'EXTRA SPACE STORAGE INC'],
[
'ticker' => 'EXTN','stock_name' => 'EXTERRAN CORP'],
[
'ticker' => 'EXTR','stock_name' => 'EXTREME NETWORKS INC'],
[
'ticker' => 'EYE','stock_name' => 'NATIONAL VISION HOLDINGS INC'],
[
'ticker' => 'EYEG','stock_name' => 'EYEGATE PHARMACEUTICALS'],
[
'ticker' => 'EYEN','stock_name' => 'EYENOVIA INC'],
[
'ticker' => 'EYES','stock_name' => 'SECOND SIGHT MEDICAL PRODUCT'],
[
'ticker' => 'EYLD','stock_name' => 'CAMBRIA EMERG SHRHLDR YIELD'],
[
'ticker' => 'EYPT','stock_name' => 'EYEPOINT PHARMACEUTICALS INC'],
[
'ticker' => 'EZA','stock_name' => 'ISHARES MSCI SOUTH AFRICA ET'],
[
'ticker' => 'EZFL','stock_name' => 'EZFILL HOLDINGS INC'],
[
'ticker' => 'EZGO','stock_name' => 'EZGO TECHNOLOGIES LTD'],
[
'ticker' => 'EZJ','stock_name' => 'PROSHARES ULTRA MSCI JAPAN'],
[
'ticker' => 'EZM','stock_name' => 'WISDOMTREE US MIDCAP FUND'],
[
'ticker' => 'EZPW','stock_name' => 'EZCORP INC-CL A'],
[
'ticker' => 'EZU','stock_name' => 'ISHARES MSCI EUROZONE ETF'],
[
'ticker' => 'F','stock_name' => 'FORD MOTOR CO'],
[
'ticker' => 'FA','stock_name' => 'FIRST ADVANTAGE CORP'],
[
'ticker' => 'FAAR','stock_name' => 'FIRST TRUST ALT ABS RET ETF'],
[
'ticker' => 'FAB','stock_name' => 'FIRST TRUST MULTI CAP VALUE'],
[
'ticker' => 'FACA','stock_name' => 'FIGURE ACQUISITION CORP I -A'],
[
'ticker' => 'FACA=','stock_name' => 'FIGURE ACQUISITION CORP I'],
[
'ticker' => 'FACT','stock_name' => 'FREEDOM ACQUISITION I CORP-A'],
[
'ticker' => 'FACT=','stock_name' => 'FREEDOM ACQUISITION I CORP'],
[
'ticker' => 'FAD','stock_name' => 'FIRST TRUST MULTI CAP GROWTH'],
[
'ticker' => 'FAF','stock_name' => 'FIRST AMERICAN FINANCIAL'],
[
'ticker' => 'FAIL','stock_name' => 'CAMBRIA GLOBAL TAIL RISK ETF'],
[
'ticker' => 'FALN','stock_name' => 'ISHARES FALLEN ANGELS ETF'],
[
'ticker' => 'FAM','stock_name' => 'FIRST TRUST ABERDEEN GLOBAL'],
[
'ticker' => 'FAMI','stock_name' => 'FARMMI INC'],
[
'ticker' => 'FAN','stock_name' => 'FIRST TRUST GLOBAL WIND ENER'],
[
'ticker' => 'FANG','stock_name' => 'DIAMONDBACK ENERGY INC'],
[
'ticker' => 'FANH','stock_name' => 'FANHUA INC-SPONSORED ADR'],
[
'ticker' => 'FAPR','stock_name' => 'FT CBOE VEST US EQ BUFF APR'],
[
'ticker' => 'FARM','stock_name' => 'FARMER BROS CO'],
[
'ticker' => 'FARO','stock_name' => 'FARO TECHNOLOGIES INC'],
[
'ticker' => 'FAS','stock_name' => 'DIREXION DAILY FIN BULL 3X'],
[
'ticker' => 'FAST','stock_name' => 'FASTENAL CO'],
[
'ticker' => 'FAT','stock_name' => 'FAT BRANDS INC-CL A'],
[
'ticker' => 'FATBB','stock_name' => 'FAT BRANDS INC-CL B'],
[
'ticker' => 'FATE','stock_name' => 'FATE THERAPEUTICS INC'],
[
'ticker' => 'FATPU','stock_name' => 'FAT PROJECTS ACQUISITION COR'],
[
'ticker' => 'FATT','stock_name' => 'FAT TAIL RISK ETF'],
[
'ticker' => 'FAUG','stock_name' => 'FT CBOE VEST US EQUITY BUFF'],
[
'ticker' => 'FAX','stock_name' => 'ABERDEEN ASIA-PAC INCOME FD'],
[
'ticker' => 'FAZ','stock_name' => 'DIREXION DAILY FIN BEAR 3X'],
[
'ticker' => 'FB','stock_name' => 'META PLATFORMS INC'],
[
'ticker' => 'FBC','stock_name' => 'FLAGSTAR BANCORP INC'],
[
'ticker' => 'FBCG','stock_name' => 'FIDELITY BLUE CHIP GROWTH'],
[
'ticker' => 'FBCV','stock_name' => 'FIDELITY BLUE CHIP VALUE ETF'],
[
'ticker' => 'FBGX','stock_name' => 'FI ENHANCED LARGE CAP GROWTH'],
[
'ticker' => 'FBHS','stock_name' => 'FORTUNE BRANDS HOME & SECURI'],
[
'ticker' => 'FBIO','stock_name' => 'FORTRESS BIOTECH INC'],
[
'ticker' => 'FBIZ','stock_name' => 'FIRST BUSINESS FINANCIAL SER'],
[
'ticker' => 'FBK','stock_name' => 'FB FINANCIAL CORP'],
[
'ticker' => 'FBMS','stock_name' => 'FIRST BANCSHARES INC/MS'],
[
'ticker' => 'FBNC','stock_name' => 'FIRST BANCORP/NC'],
[
'ticker' => 'FBND','stock_name' => 'FIDELITY TOTAL BOND ETF'],
[
'ticker' => 'FBP','stock_name' => 'FIRST BANCORP PUERTO RICO'],
[
'ticker' => 'FBRT','stock_name' => 'FRANKLIN BSP REALTY TRUST IN'],
[
'ticker' => 'FBRX','stock_name' => 'FORTE BIOSCIENCES INC'],
[
'ticker' => 'FBT','stock_name' => 'FIRST TRUST NYSE ARCA BIOTEC'],
[
'ticker' => 'FBZ','stock_name' => 'FIRST TRUST BRAZIL'],
[
'ticker' => 'FC','stock_name' => 'FRANKLIN COVEY CO'],
[
'ticker' => 'FCA','stock_name' => 'FIRST TRUST CHINA'],
[
'ticker' => 'FCAL','stock_name' => 'FIRST TRUST CALIFORNIA MUNIC'],
[
'ticker' => 'FCAP','stock_name' => 'FIRST CAPITAL INC'],
[
'ticker' => 'FCAX','stock_name' => 'FORTRESS CAPITAL ACQUISITI-A'],
[
'ticker' => 'FCAX=','stock_name' => 'FORTRESS CAPITAL ACQUISITION'],
[
'ticker' => 'FCBC','stock_name' => 'FIRST COMMUNITY BANKSHARES'],
[
'ticker' => 'FCCO','stock_name' => 'FIRST COMMUNITY CORP'],
[
'ticker' => 'FCCY','stock_name' => '1ST CONSTITUTION BANCORP'],
[
'ticker' => 'FCEF','stock_name' => 'FIRST TRUST CEF INCOME OPP'],
[
'ticker' => 'FCEL','stock_name' => 'FUELCELL ENERGY INC'],
[
'ticker' => 'FCF','stock_name' => 'FIRST COMMONWEALTH FINL CORP'],
[
'ticker' => 'FCFS','stock_name' => 'FIRSTCASH INC'],
[
'ticker' => 'FCG','stock_name' => 'FIRST TRUST NATURAL GAS ETF'],
[
'ticker' => 'FCLD','stock_name' => 'FIDELITY CLOUD COMPUTING ETF'],
[
'ticker' => 'FCN','stock_name' => 'FTI CONSULTING INC'],
[
'ticker' => 'FCNCA','stock_name' => 'FIRST CITIZENS BCSHS  -CL A'],
[
'ticker' => 'FCO','stock_name' => 'ABERDEEN GLOBAL INCOME FUND'],
[
'ticker' => 'FCOM','stock_name' => 'FIDELITY MSCI COMMUNICATION'],
[
'ticker' => 'FCOR','stock_name' => 'FIDELITY CORPORATE BOND ETF'],
[
'ticker' => 'FCPI','stock_name' => 'FIDELITY STOCKS FOR INFL ETF'],
[
'ticker' => 'FCPT','stock_name' => 'FOUR CORNERS PROPERTY TRUST'],
[
'ticker' => 'FCRD','stock_name' => 'FIRST EAGLE ALTERNATIVE CAPI'],
[
'ticker' => 'FCT','stock_name' => 'FIRST TRUST SENIOR FLOATING'],
[
'ticker' => 'FCTR','stock_name' => 'FIRST TRUST LUNT US FACTOR'],
[
'ticker' => 'FCUV','stock_name' => 'FOCUS UNIVERSAL INC'],
[
'ticker' => 'FCVT','stock_name' => 'FIRST TRUST SSI STRATEGI ETF'],
[
'ticker' => 'FCX','stock_name' => 'FREEPORT-MCMORAN INC'],
[
'ticker' => 'FDBC','stock_name' => 'FIDELITY D&D BANCORP INC'],
[
'ticker' => 'FDD','stock_name' => 'FIRST TRUST STOXX EUROPE'],
[
'ticker' => 'FDEC','stock_name' => 'FT CBOE VEST US EQ BUFF DEC'],
[
'ticker' => 'FDEM','stock_name' => 'FIDELITY EMERG MARKETS MULTI'],
[
'ticker' => 'FDEU','stock_name' => 'FIRST TR DYN EUR EQTY INC'],
[
'ticker' => 'FDEV','stock_name' => 'FIDELITY INTERNATIONAL MULTI'],
[
'ticker' => 'FDG','stock_name' => 'AMERICAN CENTURY FOCUSED DYN'],
[
'ticker' => 'FDHT','stock_name' => 'FIDELITY DIGITAL HEALTH ETF'],
[
'ticker' => 'FDHY','stock_name' => 'FIDELITY HI YIELD FACTOR ETF'],
[
'ticker' => 'FDIS','stock_name' => 'FIDELITY CON DISCRET ETF'],
[
'ticker' => 'FDIV','stock_name' => 'FIRST TRUST STRATEGIC INCOME'],
[
'ticker' => 'FDL','stock_name' => 'FIRST TRUST MORN DVD LEAD IN'],
[
'ticker' => 'FDLO','stock_name' => 'FIDELITY LOW VOLATILITY FACT'],
[
'ticker' => 'FDM','stock_name' => 'FIRST TRUST DOW J SELECT MIC'],
[
'ticker' => 'FDMO','stock_name' => 'FIDELITY MOMENTUM FACTOR ETF'],
[
'ticker' => 'FDMT','stock_name' => '4D MOLECULAR THERAPEUTICS IN'],
[
'ticker' => 'FDN','stock_name' => 'FIRST TRUST DJ INTERNET IND'],
[
'ticker' => 'FDNI','stock_name' => 'FIRST TRUST DOW JONES INTL'],
[
'ticker' => 'FDP','stock_name' => 'FRESH DEL MONTE PRODUCE INC'],
[
'ticker' => 'FDRR','stock_name' => 'FIDELITY DIV ETF RISE RATES'],
[
'ticker' => 'FDRV','stock_name' => 'FIDELITY ELETRIC VEHICLES AN'],
[
'ticker' => 'FDS','stock_name' => 'FACTSET RESEARCH SYSTEMS INC'],
[
'ticker' => 'FDT','stock_name' => 'FIRST TRUST DEVELP MKT EX-US'],
[
'ticker' => 'FDTS','stock_name' => 'FIRST TRUST DEVELOPED MARKET'],
[
'ticker' => 'FDUS','stock_name' => 'FIDUS INVESTMENT CORP'],
[
'ticker' => 'FDVV','stock_name' => 'FIDELITY HIGH DIVIDEND ETF'],
[
'ticker' => 'FDWM','stock_name' => 'FIDELITY WOMENS LEADERSHIP'],
[
'ticker' => 'FDX','stock_name' => 'FEDEX CORP'],
[
'ticker' => 'FE','stock_name' => 'FIRSTENERGY CORP'],
[
'ticker' => 'FEBZ','stock_name' => 'TrueShares Structured Outcom'],
[
'ticker' => 'FEDL','stock_name' => 'ETRACS 2X LEVERAGED IFED'],
[
'ticker' => 'FEDM','stock_name' => 'FLEXSHARES ESG & CLIMATE US'],
[
'ticker' => 'FEDU','stock_name' => 'FOUR SEASONS EDUCATION CAYMA'],
[
'ticker' => 'FEDX','stock_name' => 'EMLES FEDERAL CONTRACTORS'],
[
'ticker' => 'FEHY','stock_name' => 'FLEXSHARES ESG H/Y CORP CORE'],
[
'ticker' => 'FEI','stock_name' => 'FIRST TRUST MLP AND ENERGY I'],
[
'ticker' => 'FEIG','stock_name' => 'FLEXSHARES ESG IG CORP CORE'],
[
'ticker' => 'FEIM','stock_name' => 'FREQUENCY ELECTRONICS INC'],
[
'ticker' => 'FELE','stock_name' => 'FRANKLIN ELECTRIC CO INC'],
[
'ticker' => 'FEM','stock_name' => 'FIRST TRUST EMERGING MARKETS'],
[
'ticker' => 'FEMB','stock_name' => 'FIRST TRUST EMERGING MARKETS'],
[
'ticker' => 'FEMS','stock_name' => 'FIRST TRUST EMERGING MARKETS'],
[
'ticker' => 'FEMY','stock_name' => 'FEMASYS INC'],
[
'ticker' => 'FEN','stock_name' => 'FIRST TR ENRGY INC & GRW'],
[
'ticker' => 'FENC','stock_name' => 'FENNEC PHARMACEUTICALS INC'],
[
'ticker' => 'FENG','stock_name' => 'PHOENIX NEW MEDIA LTD -ADR'],
[
'ticker' => 'FENY','stock_name' => 'FIDELITY MSCI ENERGY ETF'],
[
'ticker' => 'FEO','stock_name' => 'FIRST TRUST ABERDEEN EMG OPP'],
[
'ticker' => 'FEP','stock_name' => 'FIRST TRUST EUROPE'],
[
'ticker' => 'FERG','stock_name' => 'FERGUSON PLC'],
[
'ticker' => 'FET','stock_name' => 'FORUM ENERGY TECHNOLOGIES IN'],
[
'ticker' => 'FEUL','stock_name' => 'CREDIT SUISSE FI ENHANCED EU'],
[
'ticker' => 'FEUS','stock_name' => 'FLEXSHARES ESG & CLIMATE US'],
[
'ticker' => 'FEUZ','stock_name' => 'FIRST TRUST EUROZONE ALPHADE'],
[
'ticker' => 'FEVR','stock_name' => 'INSPIRE FAITHWARD LARCAP MOM'],
[
'ticker' => 'FEX','stock_name' => 'FIRST TRUST LARGE CAP CORE A'],
[
'ticker' => 'FEXDU','stock_name' => 'FINTECH ECOSYSTEM DEVELOPMEN'],
[
'ticker' => 'FEZ','stock_name' => 'SPDR EURO STOXX 50 ETF'],
[
'ticker' => 'FF','stock_name' => 'FUTUREFUEL CORP'],
[
'ticker' => 'FFA','stock_name' => 'FIRST TRUST ENH EQUITY INC'],
[
'ticker' => 'FFBC','stock_name' => 'FIRST FINANCIAL BANCORP'],
[
'ticker' => 'FFBW','stock_name' => 'FFBW INC'],
[
'ticker' => 'FFC','stock_name' => 'FLAHERTY & CRUMRINE PREFERRE'],
[
'ticker' => 'FFEB','stock_name' => 'FT CBOE VEST US EQY BUFF-FEB'],
[
'ticker' => 'FFHG','stock_name' => 'FORMULA FOLIOS HEDGED GROWTH'],
[
'ticker' => 'FFHL','stock_name' => 'FUWEI FILMS HOLDINGS CO LTD'],
[
'ticker' => 'FFIC','stock_name' => 'FLUSHING FINANCIAL CORP'],
[
'ticker' => 'FFIE','stock_name' => 'FARADAY FUTURE INTELLIGENT E'],
[
'ticker' => 'FFIN','stock_name' => 'FIRST FINL BANKSHARES INC'],
[
'ticker' => 'FFIU','stock_name' => 'UVA UNCONSTRAINED MEDIUM-TER'],
[
'ticker' => 'FFIV','stock_name' => 'F5 NETWORKS INC'],
[
'ticker' => 'FFND','stock_name' => 'The Future Fund Active ETF'],
[
'ticker' => 'FFNW','stock_name' => 'FIRST FINANCIAL NORTHWEST'],
[
'ticker' => 'FFR','stock_name' => 'FT FTSE EPRA/NAREIT REAL EST'],
[
'ticker' => 'FFSG','stock_name' => 'FORMULAFOLIOS SMART GROWTH'],
[
'ticker' => 'FFTG','stock_name' => 'FORMULAFOLIOS TACTICAL GROWT'],
[
'ticker' => 'FFTI','stock_name' => 'FORMULAFOLIOS TACTICAL INCOM'],
[
'ticker' => 'FFTY','stock_name' => 'INNOVATOR IBD 50 ETF'],
[
'ticker' => 'FFWM','stock_name' => 'FIRST FOUNDATION INC'],
[
'ticker' => 'FGB','stock_name' => 'FIRST TRUST SPECIALTY FINANC'],
[
'ticker' => 'FGBI','stock_name' => 'FIRST GUARANTY BANCSHARES IN'],
[
'ticker' => 'FGD','stock_name' => 'FIRST TRUST DJ GL SEL DVD'],
[
'ticker' => 'FGEN','stock_name' => 'FIBROGEN INC'],
[
'ticker' => 'FGF','stock_name' => 'FG FINANCIAL GROUP INC'],
[
'ticker' => 'FGM','stock_name' => 'FIRST TRUST GERMANY'],
[
'ticker' => 'FGRO','stock_name' => 'FIDELITY GROWTH OPPORTUNITIE'],
[
'ticker' => 'FHB','stock_name' => 'FIRST HAWAIIAN INC'],
[
'ticker' => 'FHI','stock_name' => 'FEDERATED HERMES INC'],
[
'ticker' => 'FHLC','stock_name' => 'FIDELITY HEALTH CARE ETF'],
[
'ticker' => 'FHLTU','stock_name' => 'FUTURE HEALTH ESG CORP'],
[
'ticker' => 'FHN','stock_name' => 'FIRST HORIZON CORP'],
[
'ticker' => 'FHS','stock_name' => 'FIRST HIGH-SCHOOL EDUCAT-ADR'],
[
'ticker' => 'FHTX','stock_name' => 'FOGHORN THERAPEUTICS INC'],
[
'ticker' => 'FIACU','stock_name' => 'FOCUS IMPACT ACQUISITION COR'],
[
'ticker' => 'FIBK','stock_name' => 'FIRST INTERSTATE BANCSYS-A'],
[
'ticker' => 'FIBR','stock_name' => 'ISHARES U.S. FIXED INCOME BA'],
[
'ticker' => 'FICO','stock_name' => 'FAIR ISAAC CORP'],
[
'ticker' => 'FICS','stock_name' => 'FT INTERNATIONAL DEV CAP STR'],
[
'ticker' => 'FICV','stock_name' => 'FRONTIER INVESTMENT CORP -A'],
[
'ticker' => 'FICVU','stock_name' => 'FRONTIER INVESTMENT CORP'],
[
'ticker' => 'FID','stock_name' => 'FIRST TRUST S&P INTERNATIONA'],
[
'ticker' => 'FIDI','stock_name' => 'FIDELITY INTL HIGH DIV ETF'],
[
'ticker' => 'FIDU','stock_name' => 'FIDELITY INDUSTRIALS ETF'],
[
'ticker' => 'FIEE','stock_name' => 'UBS FI ENHANCED EUR 50 ETN'],
[
'ticker' => 'FIF','stock_name' => 'FIRST TRUST ENERGY INFRASTRU'],
[
'ticker' => 'FIGB','stock_name' => 'FIDELITY INV GRADE BOND ETF'],
[
'ticker' => 'FIGS','stock_name' => 'FIGS INC-CLASS A'],
[
'ticker' => 'FIHD','stock_name' => 'UBS FI ENH GL HI YLD ETN'],
[
'ticker' => 'FILL','stock_name' => 'ISHARES MSCI GLOBAL ENERGY P'],
[
'ticker' => 'FINM','stock_name' => 'MARLIN TECHNOLOGY CORP-A'],
[
'ticker' => 'FINMU','stock_name' => 'MARLIN TECHNOLOGY CORP'],
[
'ticker' => 'FINS','stock_name' => 'ANGEL OAK FINANC STRAT INC'],
[
'ticker' => 'FINV','stock_name' => 'FINVOLUTION GROUP-ADR'],
[
'ticker' => 'FINX','stock_name' => 'GLOBAL X FINTECH ETF'],
[
'ticker' => 'FIS','stock_name' => 'FIDELITY NATIONAL INFO SERV'],
[
'ticker' => 'FISI','stock_name' => 'FINANCIAL INSTITUTIONS INC'],
[
'ticker' => 'FISK','stock_name' => 'EMPIRE STATE REALTY OP -S250'],
[
'ticker' => 'FISR','stock_name' => 'SPDR SSGA F/I SECTOR ROTATE'],
[
'ticker' => 'FISV','stock_name' => 'FISERV INC'],
[
'ticker' => 'FITB','stock_name' => 'FIFTH THIRD BANCORP'],
[
'ticker' => 'FITE','stock_name' => 'SPDR S&P KENSHO FUTURE SECUR'],
[
'ticker' => 'FIV','stock_name' => 'FIRST TRUST SENIOR FLOATING'],
[
'ticker' => 'FIVA','stock_name' => 'FIDELITY INTL VAL FACTOR ETF'],
[
'ticker' => 'FIVE','stock_name' => 'FIVE BELOW'],
[
'ticker' => 'FIVG','stock_name' => 'DEFIANCE NEXT GEN CONN ETF'],
[
'ticker' => 'FIVN','stock_name' => 'FIVE9 INC'],
[
'ticker' => 'FIW','stock_name' => 'FIRST TRUST WATER ETF'],
[
'ticker' => 'FIX','stock_name' => 'COMFORT SYSTEMS USA INC'],
[
'ticker' => 'FIXD','stock_name' => 'FIRST TRUST TCW OPP FIXED IN'],
[
'ticker' => 'FIXX','stock_name' => 'HOMOLOGY MEDICINES INC'],
[
'ticker' => 'FIZZ','stock_name' => 'NATIONAL BEVERAGE CORP'],
[
'ticker' => 'FJAN','stock_name' => 'FT CBOE VEST US EQ BUFF JAN'],
[
'ticker' => 'FJP','stock_name' => 'FIRST TRUST JAPAN'],
[
'ticker' => 'FJUL','stock_name' => 'FT CBOE VEST US EQ BUFF JUL'],
[
'ticker' => 'FJUN','stock_name' => 'FT CBOE VEST U.S. EQUITY BUF'],
[
'ticker' => 'FKU','stock_name' => 'FIRST TRUST UNITED KINGDOM'],
[
'ticker' => 'FKWL','stock_name' => 'FRANKLIN WIRELESS CORP'],
[
'ticker' => 'FL','stock_name' => 'FOOT LOCKER INC'],
[
'ticker' => 'FLAC','stock_name' => 'FRAZIER LIFESCIENCES ACQUI-A'],
[
'ticker' => 'FLACU','stock_name' => 'FRAZIER LIFESCIENCES ACQUIS'],
[
'ticker' => 'FLAG','stock_name' => 'FIRST LIGHT ACQUISITION GR-A'],
[
'ticker' => 'FLAG=','stock_name' => 'FIRST LIGHT ACQUISITION GROU'],
[
'ticker' => 'FLAU','stock_name' => 'FRANKLIN FTSE AUSTRALIA ETF'],
[
'ticker' => 'FLAX','stock_name' => 'FRANKLIN FTSE ASIA EX JAPAN'],
[
'ticker' => 'FLBL','stock_name' => 'FRANKLIN LIBERTY SENIOR LOAN'],
[
'ticker' => 'FLBR','stock_name' => 'FRANKLIN FTSE BRAZIL ETF'],
[
'ticker' => 'FLC','stock_name' => 'FLAH & CRUM TTL RTRN FND'],
[
'ticker' => 'FLCA','stock_name' => 'FRANKLIN FTSE CANADA ETF'],
[
'ticker' => 'FLCB','stock_name' => 'FRANKLIN LIBERTY US CORE BND'],
[
'ticker' => 'FLCH','stock_name' => 'FRANKLIN FTSE CHINA ETF'],
[
'ticker' => 'FLCO','stock_name' => 'FRANKLIN LIBERTY IG CORP ETF'],
[
'ticker' => 'FLDM','stock_name' => 'FLUIDIGM CORP'],
[
'ticker' => 'FLDR','stock_name' => 'FIDELITY LOW DURATION ETF'],
[
'ticker' => 'FLEE','stock_name' => 'FRANKLIN FTSE EUROPE ETF'],
[
'ticker' => 'FLEH','stock_name' => 'FRANKLIN FTSE EUROPE HEDGED'],
[
'ticker' => 'FLEX','stock_name' => 'FLEX LTD'],
[
'ticker' => 'FLFR','stock_name' => 'FRANKLIN FTSE FRANCE ETF'],
[
'ticker' => 'FLGB','stock_name' => 'FRANKLIN FTSE UNITED KINGDOM'],
[
'ticker' => 'FLGC','stock_name' => 'FLORA GROWTH CORP'],
[
'ticker' => 'FLGE','stock_name' => 'FI LARGE CAP GROWTH ENHANCED'],
[
'ticker' => 'FLGR','stock_name' => 'FRANKLIN FTSE GERMANY ETF'],
[
'ticker' => 'FLGT','stock_name' => 'FULGENT GENETICS INC'],
[
'ticker' => 'FLGV','stock_name' => 'FRANKLIN LIBERTY US TR B ETF'],
[
'ticker' => 'FLHK','stock_name' => 'FRANKLIN FTSE HONG KONG ETF'],
[
'ticker' => 'FLHY','stock_name' => 'FRANKLIN LIBERTY HIGH YIELD'],
[
'ticker' => 'FLIA','stock_name' => 'FRANKLIN LIBERTY INTL AGG BO'],
[
'ticker' => 'FLIC','stock_name' => 'FIRST OF LONG ISLAND CORP'],
[
'ticker' => 'FLIN','stock_name' => 'FRANKLIN FTSE INDIA ETF'],
[
'ticker' => 'FLIY','stock_name' => 'FRANKLIN FTSE ITALY ETF'],
[
'ticker' => 'FLJH','stock_name' => 'FRANKLIN FTSE JPN HEDGED ETF'],
[
'ticker' => 'FLJP','stock_name' => 'FRANKLIN FTSE JAPAN ETF'],
[
'ticker' => 'FLKR','stock_name' => 'FRANKLIN FTSE SOUTH KOREA'],
[
'ticker' => 'FLL','stock_name' => 'FULL HOUSE RESORTS INC'],
[
'ticker' => 'FLLA','stock_name' => 'FRANKLIN FTSE LATIN AMERICA'],
[
'ticker' => 'FLLV','stock_name' => 'FRANKLIN LIBERTY US LOW VOL'],
[
'ticker' => 'FLM','stock_name' => 'FIRST TRUST GLOBAL ENGINEERI'],
[
'ticker' => 'FLMB','stock_name' => 'FRANKLIN LIBERTY FEDERAL TAX'],
[
'ticker' => 'FLME','stock_name' => 'FLAME ACQUISITION CORP -CL A'],
[
'ticker' => 'FLME=','stock_name' => 'FLAME ACQUISITION CORP'],
[
'ticker' => 'FLMI','stock_name' => 'FRANKLIN LIBERTY FEDERAL INT'],
[
'ticker' => 'FLMN','stock_name' => 'FALCON MINERALS CORP'],
[
'ticker' => 'FLMX','stock_name' => 'FRANKLIN FTSE MEXICO ETF'],
[
'ticker' => 'FLN','stock_name' => 'FIRST TRUST LATIN AMERICA'],
[
'ticker' => 'FLNC','stock_name' => 'FLUENCE ENERGY INC'],
[
'ticker' => 'FLNG','stock_name' => 'FLEX LNG LTD'],
[
'ticker' => 'FLNT','stock_name' => 'FLUENT INC'],
[
'ticker' => 'FLO','stock_name' => 'FLOWERS FOODS INC'],
[
'ticker' => 'FLOT','stock_name' => 'ISHARES FLOATING RATE BOND E'],
[
'ticker' => 'FLOW','stock_name' => 'SPX FLOW INC'],
[
'ticker' => 'FLQD','stock_name' => 'FRANKLIN LIBERTYQ GLOBAL DIV'],
[
'ticker' => 'FLQE','stock_name' => 'FRANKLIN LIBERTYQ EMERGING'],
[
'ticker' => 'FLQG','stock_name' => 'FRANKLIN LIBERTYQ GLOBAL EQ'],
[
'ticker' => 'FLQH','stock_name' => 'FRANKLIN LIBERTYQ INT EQ HED'],
[
'ticker' => 'FLQL','stock_name' => 'FRANKLIN LIBERTYQ US EQUITY'],
[
'ticker' => 'FLQM','stock_name' => 'FRANKLIN LIBERTYQ MID CAP EQ'],
[
'ticker' => 'FLQS','stock_name' => 'FRANKLIN LIBERTYQ SMALL CAP'],
[
'ticker' => 'FLR','stock_name' => 'FLUOR CORP'],
[
'ticker' => 'FLRG','stock_name' => 'FIDELITY US MULTIFACTOR ETF'],
[
'ticker' => 'FLRN','stock_name' => 'SPDR BLOOMBERG INVESTMENT GR'],
[
'ticker' => 'FLRT','stock_name' => 'PACER PACIFIC ASSET FLOATING'],
[
'ticker' => 'FLRU','stock_name' => 'FRANKLIN FTSE RUSSIA ETF'],
[
'ticker' => 'FLS','stock_name' => 'FLOWSERVE CORP'],
[
'ticker' => 'FLSA','stock_name' => 'FRANKLIN FTSE SAUDI ARABIA'],
[
'ticker' => 'FLSP','stock_name' => 'FRANKLIN LIBERTY SYSTEMATIC'],
[
'ticker' => 'FLSW','stock_name' => 'FRANKLIN FTSE SWITZERLAND'],
[
'ticker' => 'FLT','stock_name' => 'FLEETCOR TECHNOLOGIES INC'],
[
'ticker' => 'FLTB','stock_name' => 'FIDELITY LTD TERM BOND ETF'],
[
'ticker' => 'FLTR','stock_name' => 'V/E INV GR FLOATING RATE ETF'],
[
'ticker' => 'FLTW','stock_name' => 'FRANKLIN FTSE TAIWAN ETF'],
[
'ticker' => 'FLUD','stock_name' => 'FRANKLIN LIBERTY UL SHT BOND'],
[
'ticker' => 'FLUX','stock_name' => 'FLUX POWER HOLDINGS INC'],
[
'ticker' => 'FLV','stock_name' => 'AMERICAN CENTURY FOCUSED LAR'],
[
'ticker' => 'FLWS','stock_name' => '1-800-FLOWERS.COM INC-CL A'],
[
'ticker' => 'FLXN','stock_name' => 'FLEXION THERAPEUTICS INC'],
[
'ticker' => 'FLXS','stock_name' => 'FLEXSTEEL INDS'],
[
'ticker' => 'FLYA=','stock_name' => 'SOAR TECHNOLOGY ACQUISITION'],
[
'ticker' => 'FLYT','stock_name' => 'DIREXION FLIGHT TO SAFETY ST'],
[
'ticker' => 'FLYW','stock_name' => 'FLYWIRE CORP-VOTING'],
[
'ticker' => 'FLZA','stock_name' => 'FRANKLIN FTSE SOUTH AFRICA'],
[
'ticker' => 'FM','stock_name' => 'ISHR MSCI FRONT & SEL EM ETF'],
[
'ticker' => 'FMAC','stock_name' => 'FIRSTMARK HORIZON ACQUISIT-A'],
[
'ticker' => 'FMAC=','stock_name' => 'FIRSTMARK HORIZON ACQUISITIO'],
[
'ticker' => 'FMAG','stock_name' => 'FIDELITY MAGELLAN ETF'],
[
'ticker' => 'FMAO','stock_name' => 'FARMERS & MERCHANTS BANCO/OH'],
[
'ticker' => 'FMAR','stock_name' => 'FT CBOE VEST US EQTY BUF-MAR'],
[
'ticker' => 'FMAT','stock_name' => 'FIDELITY MATERIALS ETF'],
[
'ticker' => 'FMAY','stock_name' => 'FT CBOE VEST US EQY BUFF-MAY'],
[
'ticker' => 'FMB','stock_name' => 'FIRST TRUST MANAGED MUNICIPA'],
[
'ticker' => 'FMBH','stock_name' => 'FIRST MID BANCSHARES INC'],
[
'ticker' => 'FMBI','stock_name' => 'FIRST MIDWEST BANCORP INC/IL'],
[
'ticker' => 'FMC','stock_name' => 'FMC CORP'],
[
'ticker' => 'FMF','stock_name' => 'FIRST TRUST MANAGED FUTURES'],
[
'ticker' => 'FMHI','stock_name' => 'FIRST TRUST MUNICIPAL HIGH I'],
[
'ticker' => 'FMIL','stock_name' => 'FIDELITY NEW MILLENNIUM ETF'],
[
'ticker' => 'FMIV','stock_name' => 'FORUM MERGER IV CORP-A'],
[
'ticker' => 'FMIVU','stock_name' => 'FORUM MERGER IV CORP'],
[
'ticker' => 'FMN','stock_name' => 'FEDERATED HERMES PREMIER MUN'],
[
'ticker' => 'FMNB','stock_name' => 'FARMERS NATL BANC CORP'],
[
'ticker' => 'FMNY','stock_name' => 'FIRST TRUST NY MUNI HIGH INC'],
[
'ticker' => 'FMO','stock_name' => 'FIDUCIARY/CLAYM ENRGY INFRA'],
[
'ticker' => 'FMQQ','stock_name' => 'FMQQ NXT FRNT & ECOMM ETF'],
[
'ticker' => 'FMS','stock_name' => 'FRESENIUS MEDICAL CARE-ADR'],
[
'ticker' => 'FMTX','stock_name' => 'FORMA THERAPEUTICS HOLDINGS'],
[
'ticker' => 'FMX','stock_name' => 'FOMENTO ECONOMICO MEX-SP ADR'],
[
'ticker' => 'FMY','stock_name' => 'FIRST TRUST MORTGAGE INCOME'],
[
'ticker' => 'FN','stock_name' => 'FABRINET'],
[
'ticker' => 'FNA','stock_name' => 'PARAGON 28 INC'],
[
'ticker' => 'FNB','stock_name' => 'FNB CORP'],
[
'ticker' => 'FNCB','stock_name' => 'FNCB BANCORP INC'],
[
'ticker' => 'FNCH','stock_name' => 'FINCH THERAPEUTICS GROUP INC'],
[
'ticker' => 'FNCL','stock_name' => 'FIDELITY FINANCIALS ETF'],
[
'ticker' => 'FND','stock_name' => 'FLOOR & DECOR HOLDINGS INC-A'],
[
'ticker' => 'FNDA','stock_name' => 'SCHWAB FUNDAMENTAL SMALL CAP'],
[
'ticker' => 'FNDB','stock_name' => 'SCHWAB FUNDAMENTAL BROAD MKT'],
[
'ticker' => 'FNDC','stock_name' => 'SCHWAB FUNDAMENTAL INTL S/C'],
[
'ticker' => 'FNDE','stock_name' => 'SCHWAB FUNDAMENTAL EM L/C'],
[
'ticker' => 'FNDF','stock_name' => 'SCHWAB FUNDAMENTAL INTL L/C'],
[
'ticker' => 'FNDX','stock_name' => 'SCHWAB FUNDAMENTAL LARGE CAP'],
[
'ticker' => 'FNF','stock_name' => 'FIDELITY NATIONAL FINANCIAL'],
[
'ticker' => 'FNGD','stock_name' => 'MICROSECTORS FANG+ INDEX -3X'],
[
'ticker' => 'FNGG','stock_name' => 'DIR DAY SL LRG FANGS BULL 2X'],
[
'ticker' => 'FNGO','stock_name' => 'MICROSECTORS FANG INDEX 2X L'],
[
'ticker' => 'FNGS','stock_name' => 'MICROSECTORS FANG+ ETNS'],
[
'ticker' => 'FNGU','stock_name' => 'MICROSECTORS FANG+ INDEX 3X'],
[
'ticker' => 'FNGZ','stock_name' => 'MICROSECTORS FANG INDEX 2X I'],
[
'ticker' => 'FNHC','stock_name' => 'FEDNAT HOLDING CO'],
[
'ticker' => 'FNI','stock_name' => 'FIRST TRUST CHINDIA ETF'],
[
'ticker' => 'FNK','stock_name' => 'FIRST TRUST MID CAP VALUE'],
[
'ticker' => 'FNKO','stock_name' => 'FUNKO INC-CLASS A'],
[
'ticker' => 'FNLC','stock_name' => 'FIRST BANCORP INC/ME'],
[
'ticker' => 'FNOV','stock_name' => 'FT CBOE VEST US EQUITY BUFF'],
[
'ticker' => 'FNV','stock_name' => 'FRANCO-NEVADA CORP'],
[
'ticker' => 'FNVTU','stock_name' => 'FINNOVATE ACQUISITION CORP'],
[
'ticker' => 'FNWB','stock_name' => 'FIRST NORTHWEST BANCORP'],
[
'ticker' => 'FNWD','stock_name' => 'FINWARD BANCORP'],
[
'ticker' => 'FNX','stock_name' => 'FIRST TRUST MID CAP CORE ALP'],
[
'ticker' => 'FNY','stock_name' => 'FIRST TRUST MID CAP GROWTH'],
[
'ticker' => 'FOA','stock_name' => 'FINANCE OF AMERICA COS INC-A'],
[
'ticker' => 'FOCS','stock_name' => 'FOCUS FINANCIAL PARTNERS-A'],
[
'ticker' => 'FOCT','stock_name' => 'FT CBOE VEST US EQ BUFF OCT'],
[
'ticker' => 'FOE','stock_name' => 'FERRO CORP'],
[
'ticker' => 'FOF','stock_name' => 'COHEN & STEERS CLOSED-END OP'],
[
'ticker' => 'FOLD','stock_name' => 'AMICUS THERAPEUTICS INC'],
[
'ticker' => 'FOMO','stock_name' => 'FOMO ETF'],
[
'ticker' => 'FONR','stock_name' => 'FONAR CORP'],
[
'ticker' => 'FOR','stock_name' => 'FORESTAR GROUP INC'],
[
'ticker' => 'FORA','stock_name' => 'FORIAN INC'],
[
'ticker' => 'FORD','stock_name' => 'FORWARD INDUSTRIES INC'],
[
'ticker' => 'FORE','stock_name' => 'FORESIGHT ACQUISITION CORP-A'],
[
'ticker' => 'FOREU','stock_name' => 'FORESIGHT ACQUISITION CORP'],
[
'ticker' => 'FORG','stock_name' => 'FORGEROCK INC-A'],
[
'ticker' => 'FORH','stock_name' => 'FORMIDABLE ETF'],
[
'ticker' => 'FORM','stock_name' => 'FORMFACTOR INC'],
[
'ticker' => 'FORR','stock_name' => 'FORRESTER RESEARCH INC'],
[
'ticker' => 'FORTY','stock_name' => 'FORMULA SYSTEMS 1985-SP ADR'],
[
'ticker' => 'FOSL','stock_name' => 'FOSSIL GROUP INC'],
[
'ticker' => 'FOUNU','stock_name' => 'FOUNDER SPAC'],
[
'ticker' => 'FOUR','stock_name' => 'SHIFT4 PAYMENTS INC-CLASS A'],
[
'ticker' => 'FOVL','stock_name' => 'ISHARES FOCUSED VALUE FACTOR'],
[
'ticker' => 'FOX','stock_name' => 'FOX CORP - CLASS B'],
[
'ticker' => 'FOXA','stock_name' => 'FOX CORP - CLASS A'],
[
'ticker' => 'FOXF','stock_name' => 'FOX FACTORY HOLDING CORP'],
[
'ticker' => 'FOXW','stock_name' => 'FOXWAYNE ENTERPRISES ACQ- A'],
[
'ticker' => 'FOXWU','stock_name' => 'FOXWAYNE ENTERPRISES ACQUISI'],
[
'ticker' => 'FPA','stock_name' => 'FIRST TRUST ASIA PAC EX-JAPN'],
[
'ticker' => 'FPAC','stock_name' => 'FAR PEAK ACQUISITION CORP-A'],
[
'ticker' => 'FPAC=','stock_name' => 'FAR PEAK ACQUISITION CORP'],
[
'ticker' => 'FPAY','stock_name' => 'FLEXSHOPPER INC'],
[
'ticker' => 'FPE','stock_name' => 'FT-PREFERRED SECUR & INC ETF'],
[
'ticker' => 'FPEI','stock_name' => 'FIRST TRUST INSTITUTIONAL PR'],
[
'ticker' => 'FPF','stock_name' => 'FIRST TRUST INTERMEDIATE DUR'],
[
'ticker' => 'FPFD','stock_name' => 'FIDELITY PREFERRED SEC INC'],
[
'ticker' => 'FPH','stock_name' => 'FIVE POINT HOLDINGS LLC-CL A'],
[
'ticker' => 'FPI','stock_name' => 'FARMLAND PARTNERS INC'],
[
'ticker' => 'FPL','stock_name' => 'FIRST TRUST NEW OPPORTUNITIE'],
[
'ticker' => 'FPRO','stock_name' => 'FIDELITY REAL ESTATE INVEST'],
[
'ticker' => 'FPX','stock_name' => 'FIRST TRUST US EQUITY OPPORT'],
[
'ticker' => 'FPXE','stock_name' => 'FIRST TRUST IPOX EUROPE EQUI'],
[
'ticker' => 'FPXI','stock_name' => 'FIRST TRUST INTERNATIONAL EQ'],
[
'ticker' => 'FQAL','stock_name' => 'FIDELITY QUALITY FACTOR ETF'],
[
'ticker' => 'FR','stock_name' => 'FIRST INDUSTRIAL REALTY TR'],
[
'ticker' => 'FRA','stock_name' => 'BLACKROCK FLOAT RT INCOME ST'],
[
'ticker' => 'FRAF','stock_name' => 'FRANKLIN FINANCIAL SERVICES'],
[
'ticker' => 'FRBA','stock_name' => 'FIRST BANK/HAMILTON NJ'],
[
'ticker' => 'FRBK','stock_name' => 'REPUBLIC FIRST BANCORP INC'],
[
'ticker' => 'FRC','stock_name' => 'FIRST REPUBLIC BANK/CA'],
[
'ticker' => 'FRD','stock_name' => 'FRIEDMAN INDUSTRIES'],
[
'ticker' => 'FRDM','stock_name' => 'FREEDOM 100 EMEGING MRKT ETF'],
[
'ticker' => 'FREE','stock_name' => 'WHOLE EARTH BRANDS INC'],
[
'ticker' => 'FREL','stock_name' => 'FIDELITY REAL ESTATE ETF'],
[
'ticker' => 'FREQ','stock_name' => 'FREQUENCY THERAPEUTICS INC'],
[
'ticker' => 'FREY','stock_name' => 'FREYR BATTERY SA'],
[
'ticker' => 'FRG','stock_name' => 'FRANCHISE GROUP INC'],
[
'ticker' => 'FRGI','stock_name' => 'FIESTA RESTAURANT GROUP'],
[
'ticker' => 'FRHC','stock_name' => 'FREEDOM HOLDING CORP/NV'],
[
'ticker' => 'FRI','stock_name' => 'FIRST TRUST S&P REIT INDEX F'],
[
'ticker' => 'FRLAU','stock_name' => 'FORTUNE RISE ACQUISITION COR'],
[
'ticker' => 'FRLG','stock_name' => 'LARGE CAP GROWTH INDEX-LINKE'],
[
'ticker' => 'FRLN','stock_name' => 'FREELINE THERAPEUTICS HOLDIN'],
[
'ticker' => 'FRME','stock_name' => 'FIRST MERCHANTS CORP'],
[
'ticker' => 'FRNW','stock_name' => 'FIDELITY CLEAN ENERGY ETF'],
[
'ticker' => 'FRO','stock_name' => 'FRONTLINE LTD'],
[
'ticker' => 'FROG','stock_name' => 'JFROG LTD'],
[
'ticker' => 'FRON','stock_name' => 'FRONTIER ACQUISITION CORP-A'],
[
'ticker' => 'FRONU','stock_name' => 'FRONTIER ACQUISITION CORP'],
[
'ticker' => 'FRPH','stock_name' => 'FRP HOLDINGS INC'],
[
'ticker' => 'FRPT','stock_name' => 'FRESHPET INC'],
[
'ticker' => 'FRSG','stock_name' => 'FIRST RESERVE SUSTAINABLE-A'],
[
'ticker' => 'FRSGU','stock_name' => 'FIRST RESERVE SUSTAINABLE'],
[
'ticker' => 'FRSH','stock_name' => 'FRESHWORKS INC-CL A'],
[
'ticker' => 'FRST','stock_name' => 'PRIMIS FINANCIAL CORP'],
[
'ticker' => 'FRSX','stock_name' => 'FORESIGHT AUTONOMOUS-SP ADR'],
[
'ticker' => 'FRT','stock_name' => 'FEDERAL REALTY INVS TRUST'],
[
'ticker' => 'FRTA','stock_name' => 'FORTERRA INC'],
[
'ticker' => 'FRTY','stock_name' => 'ALGER MID CAP 40 ETF'],
[
'ticker' => 'FRW','stock_name' => 'PWP FORWARD ACQUISITION CO-A'],
[
'ticker' => 'FRWAU','stock_name' => 'PWP FORWARD ACQUISITION CORP'],
[
'ticker' => 'FRXB','stock_name' => 'FOREST ROAD ACQUISITION CO-A'],
[
'ticker' => 'FRXB=','stock_name' => 'FOREST ROAD ACQUISITION CORP'],
[
'ticker' => 'FSBC','stock_name' => 'FIVE STAR BANCORP'],
[
'ticker' => 'FSBW','stock_name' => 'FS BANCORP INC'],
[
'ticker' => 'FSD','stock_name' => 'FIRST TRUST HIGH INCOME LONG'],
[
'ticker' => 'FSEA','stock_name' => 'FIRST SEACOAST BANCORP'],
[
'ticker' => 'FSEC','stock_name' => 'FIDELITY INV GRADE SECURIT'],
[
'ticker' => 'FSEP','stock_name' => 'FT CBOE VEST US EQ BUFF SEP'],
[
'ticker' => 'FSFG','stock_name' => 'FIRST SAVINGS FINANCIAL GRP'],
[
'ticker' => 'FSI','stock_name' => 'FLEXIBLE SOLUTIONS INTL INC'],
[
'ticker' => 'FSII','stock_name' => 'FS DEVELOPMENT CORP II-A'],
[
'ticker' => 'FSK','stock_name' => 'FS KKR CAPITAL CORP'],
[
'ticker' => 'FSLR','stock_name' => 'FIRST SOLAR INC'],
[
'ticker' => 'FSLY','stock_name' => 'FASTLY INC - CLASS A'],
[
'ticker' => 'FSM','stock_name' => 'FORTUNA SILVER MINES INC'],
[
'ticker' => 'FSMB','stock_name' => 'FIRST TRUST SHORT DUR MANAG'],
[
'ticker' => 'FSMD','stock_name' => 'FIDELITY SMALL-MID MULTIFACT'],
[
'ticker' => 'FSMO','stock_name' => 'FIDELITY SMALL-MID CAP OPP'],
[
'ticker' => 'FSNB','stock_name' => 'FUSION ACQUISITION CORP II-A'],
[
'ticker' => 'FSNB=','stock_name' => 'FUSION ACQUISITION CORP II'],
[
'ticker' => 'FSP','stock_name' => 'FRANKLIN STREET PROPERTIES C'],
[
'ticker' => 'FSR','stock_name' => 'FISKER INC'],
[
'ticker' => 'FSRX','stock_name' => 'FINSERV ACQUISITION CORP-A'],
[
'ticker' => 'FSRXU','stock_name' => 'FINSERV ACQUISITION CORP II'],
[
'ticker' => 'FSS','stock_name' => 'FEDERAL SIGNAL CORP'],
[
'ticker' => 'FSSI','stock_name' => 'FORTISTAR SUSTAINABLE SOLU-A'],
[
'ticker' => 'FSSIU','stock_name' => 'FORTISTAR SUSTAINABLE SOLUTI'],
[
'ticker' => 'FSST','stock_name' => 'FIDELITY SUSTAIN US EQUITY'],
[
'ticker' => 'FST','stock_name' => 'FAST ACQUISITION CORP-CL A'],
[
'ticker' => 'FST=','stock_name' => 'FAST ACQUISITION CORP'],
[
'ticker' => 'FSTA','stock_name' => 'FIDELITY CON STAPLES ETF'],
[
'ticker' => 'FSTR','stock_name' => 'FOSTER (LB) CO-A'],
[
'ticker' => 'FSTX','stock_name' => 'F-STAR THERAPEUTICS INC'],
[
'ticker' => 'FSV','stock_name' => 'FIRSTSERVICE CORP'],
[
'ticker' => 'FSZ','stock_name' => 'FIRST TRUST SWITZERLAND'],
[
'ticker' => 'FT','stock_name' => 'FRANKLIN UNIVERSAL TRUST'],
[
'ticker' => 'FTA','stock_name' => 'FIRST TRUST L C VAL ALP'],
[
'ticker' => 'FTAA','stock_name' => 'FTAC ATHENA ACQUISITION CO-A'],
[
'ticker' => 'FTAAU','stock_name' => 'FTAC ATHENA ACQUISITION CORP'],
[
'ticker' => 'FTAG','stock_name' => 'FIRST TRUST INDXX GLOBAL AGR'],
[
'ticker' => 'FTAI','stock_name' => 'FORTRESS TRANSPORTATION & IN'],
[
'ticker' => 'FTC','stock_name' => 'FIRST TRUST LARGE CAP GROWTH'],
[
'ticker' => 'FTCH','stock_name' => 'FARFETCH LTD-CLASS A'],
[
'ticker' => 'FTCI','stock_name' => 'FTC SOLAR INC'],
[
'ticker' => 'FTCS','stock_name' => 'FIRST TRUST CAPITAL STRENGTH'],
[
'ticker' => 'FTCV','stock_name' => 'FINTECH ACQUISITION CORP V-A'],
[
'ticker' => 'FTCVU','stock_name' => 'FINTECH ACQUISITION CORP V'],
[
'ticker' => 'FTDR','stock_name' => 'FRONTDOOR INC'],
[
'ticker' => 'FTEC','stock_name' => 'FIDELITY MSCI INFO TECH ETF'],
[
'ticker' => 'FTEK','stock_name' => 'FUEL TECH INC'],
[
'ticker' => 'FTEV','stock_name' => 'FINTECH EVOLUTION ACQUISIT-A'],
[
'ticker' => 'FTEV=','stock_name' => 'FINTECH EVOLUTION ACQUISITIO'],
[
'ticker' => 'FTF','stock_name' => 'FRANKLIN LTD DUR INC TR'],
[
'ticker' => 'FTFT','stock_name' => 'FUTURE FINTECH GROUP INC'],
[
'ticker' => 'FTGC','stock_name' => 'FIRST TRUST GLOBAL TACTICAL'],
[
'ticker' => 'FTHI','stock_name' => 'FTHI/FIRST TRUST EXCHANGE-TR'],
[
'ticker' => 'FTHM','stock_name' => 'FATHOM HOLDINGS INC'],
[
'ticker' => 'FTHY','stock_name' => 'FIRST TRUST HIGH YLD OPPORT'],
[
'ticker' => 'FTI','stock_name' => 'TECHNIPFMC PLC'],
[
'ticker' => 'FTK','stock_name' => 'FLOTEK INDUSTRIES INC'],
[
'ticker' => 'FTLB','stock_name' => 'FIRST TRUST EXCHANGE-TRADED'],
[
'ticker' => 'FTLS','stock_name' => 'FIRST TRUST LONG/SHORT EQTY'],
[
'ticker' => 'FTNT','stock_name' => 'FORTINET INC'],
[
'ticker' => 'FTPA','stock_name' => 'FTAC PARNASSUS ACQUISITION-A'],
[
'ticker' => 'FTPAU','stock_name' => 'FTAC PARNASSUS ACQUISITION C'],
[
'ticker' => 'FTRI','stock_name' => 'FIRST TRUST INDXX GLOBAL NAT'],
[
'ticker' => 'FTRP','stock_name' => 'FIELD TRIP HEALTH LTD'],
[
'ticker' => 'FTS','stock_name' => 'FORTIS INC'],
[
'ticker' => 'FTSD','stock_name' => 'FRANKLIN LIBERTY SHORT DURAT'],
[
'ticker' => 'FTSI','stock_name' => 'FTS INTERNATIONAL INC-CL A'],
[
'ticker' => 'FTSL','stock_name' => 'FIRST TRUST SENIOR LOAN ETF'],
[
'ticker' => 'FTSM','stock_name' => 'FIRST TRUST ENH SHORT MAT FD'],
[
'ticker' => 'FTV','stock_name' => 'FORTIVE CORP'],
[
'ticker' => 'FTVI','stock_name' => 'FINTECH ACQUISITION CORP -A'],
[
'ticker' => 'FTVIU','stock_name' => 'FINTECH ACQUISITION CORP VI'],
[
'ticker' => 'FTXD','stock_name' => 'FIRST TRUST NASDAQ RETAIL ET'],
[
'ticker' => 'FTXG','stock_name' => 'FIRST TRUST NASDAQ FOOD & BE'],
[
'ticker' => 'FTXH','stock_name' => 'FIRST TRUST NASDAQ PHARMACEU'],
[
'ticker' => 'FTXL','stock_name' => 'FIRST TRUST NASDAQ SEMICONDU'],
[
'ticker' => 'FTXN','stock_name' => 'FIRST TRUST NASDAQ OIL & GAS'],
[
'ticker' => 'FTXO','stock_name' => 'FIRST TRUST NASDAQ BANK ETF'],
[
'ticker' => 'FTXR','stock_name' => 'FIRST TRUST NASDAQ TRANSPORT'],
[
'ticker' => 'FUBO','stock_name' => 'FUBOTV INC'],
[
'ticker' => 'FUE','stock_name' => 'ELEMENTS ICE EXTRA BIOFUELS'],
[
'ticker' => 'FUL','stock_name' => 'H.B. FULLER CO.'],
[
'ticker' => 'FULC','stock_name' => 'FULCRUM THERAPEUTICS INC'],
[
'ticker' => 'FULT','stock_name' => 'FULTON FINANCIAL CORP'],
[
'ticker' => 'FUMB','stock_name' => 'FIRST TRUST ULTRA SHORT DUR'],
[
'ticker' => 'FUN','stock_name' => 'CEDAR FAIR LP'],
[
'ticker' => 'FUNC','stock_name' => 'FIRST UNITED CORP'],
[
'ticker' => 'FUND','stock_name' => 'SPROTT FOCUS TRUST INC'],
[
'ticker' => 'FUNL','stock_name' => 'CORNERCAP FUNDAMETRICS L-CAP'],
[
'ticker' => 'FURY','stock_name' => 'FURY GOLD MINES LTD'],
[
'ticker' => 'FUSB','stock_name' => 'FIRST US BANCSHARES INC'],
[
'ticker' => 'FUSN','stock_name' => 'FUSION PHARMACEUTICALS INC'],
[
'ticker' => 'FUT','stock_name' => 'PROSHARES MANAGED FUTURES ST'],
[
'ticker' => 'FUTU','stock_name' => 'FUTU HOLDINGS LTD-ADR'],
[
'ticker' => 'FUTY','stock_name' => 'FIDELITY US UTILITIES ETF'],
[
'ticker' => 'FUV','stock_name' => 'ARCIMOTO INC'],
[
'ticker' => 'FV','stock_name' => 'FIRST TRUST DW FOCUS 5 FUND'],
[
'ticker' => 'FVAL','stock_name' => 'FIDELITY VALUE FACTOR ETF'],
[
'ticker' => 'FVAM','stock_name' => '5:01 ACQUISITION CORP- CL A'],
[
'ticker' => 'FVC','stock_name' => 'FIRST TRUST DORSEY WRIGHT DY'],
[
'ticker' => 'FVCB','stock_name' => 'FVCBANKCORP INC'],
[
'ticker' => 'FVD','stock_name' => 'FIRST TRUST VALUE LINE DVD'],
[
'ticker' => 'FVE','stock_name' => 'FIVE STAR SENIOR LIVING INC'],
[
'ticker' => 'FVIV','stock_name' => 'FORTRESS VALUE ACQUIS IV-A'],
[
'ticker' => 'FVIV=','stock_name' => 'FORTRESS VALUE ACQUISITIN IV'],
[
'ticker' => 'FVRR','stock_name' => 'FIVERR INTERNATIONAL LTD'],
[
'ticker' => 'FVT','stock_name' => 'FORTRESS VALUE ACQUISITION-A'],
[
'ticker' => 'FVT=','stock_name' => 'FORTRESS VALUE ACQUISITION'],
[
'ticker' => 'FWAC','stock_name' => 'FIFTH WALL ACQUISITION COR-A'],
[
'ticker' => 'FWBI','stock_name' => 'FIRST WAVE BIOPHARMA'],
[
'ticker' => 'FWONA','stock_name' => 'LIBERTY MEDIA CORP-LIBERTY-A'],
[
'ticker' => 'FWONK','stock_name' => 'LIBERTY MEDIA CORP-LIBERTY-C'],
[
'ticker' => 'FWP','stock_name' => 'FORWARD PHARMA A/S-ADR'],
[
'ticker' => 'FWRD','stock_name' => 'FORWARD AIR CORP'],
[
'ticker' => 'FWRG','stock_name' => 'FIRST WATCH RESTAURANT GROUP'],
[
'ticker' => 'FXA','stock_name' => 'INVESCO CURRENCYSHARES AUSTR'],
[
'ticker' => 'FXB','stock_name' => 'INVESCO CURRENCYSHARES BRITI'],
[
'ticker' => 'FXC','stock_name' => 'INVESCO CURRENCYSHARES CANAD'],
[
'ticker' => 'FXD','stock_name' => 'FIRST TRUST CONSUMER DISCRET'],
[
'ticker' => 'FXE','stock_name' => 'INVESCO CURRENCYSHARES EURO'],
[
'ticker' => 'FXF','stock_name' => 'INVESCO CURRENCYSHARES SWISS'],
[
'ticker' => 'FXG','stock_name' => 'FIRST TRUST CONSUMER STAPLES'],
[
'ticker' => 'FXH','stock_name' => 'FIRST TRUST HEALTH CARE ALPH'],
[
'ticker' => 'FXI','stock_name' => 'ISHARES CHINA LARGE-CAP ETF'],
[
'ticker' => 'FXL','stock_name' => 'FIRST TRUST TECHNOLOGY ALPHA'],
[
'ticker' => 'FXLV','stock_name' => 'F45 TRAINING HOLDINGS INC'],
[
'ticker' => 'FXN','stock_name' => 'FIRST TRUST ENERGY ALPHADEX'],
[
'ticker' => 'FXNC','stock_name' => 'FIRST NATIONAL CORP/VA'],
[
'ticker' => 'FXO','stock_name' => 'FIRST TRUST FINANCIAL ALPHAD'],
[
'ticker' => 'FXP','stock_name' => 'PROSHARES ULTRASHORT FTSE CH'],
[
'ticker' => 'FXR','stock_name' => 'FIRST TRUST INDST/PRODUCERS'],
[
'ticker' => 'FXU','stock_name' => 'FIRST TRUST UTILITIES ALPHAD'],
[
'ticker' => 'FXY','stock_name' => 'INVESCO CURRENCYSHARES JAPAN'],
[
'ticker' => 'FXZ','stock_name' => 'FIRST TRUST MATERIALS ALPHAD'],
[
'ticker' => 'FYBR','stock_name' => 'FRONTIER COMMUNICATIONS PARE'],
[
'ticker' => 'FYC','stock_name' => 'FIRST TRUST SMALL CAP GROWTH'],
[
'ticker' => 'FYLD','stock_name' => 'CAMBRIA FOREIGN SHAREHOLDER'],
[
'ticker' => 'FYT','stock_name' => 'FIRST TRUST SMALL CAP VAL'],
[
'ticker' => 'FYX','stock_name' => 'FIRST TRUST SMALL CAP CORE A'],
[
'ticker' => 'FZT','stock_name' => 'FAST ACQUISITION CORP II-A'],
[
'ticker' => 'FZT=','stock_name' => 'FAST ACQUISITION CORP II'],
[
'ticker' => 'G','stock_name' => 'GENPACT LTD'],
[
'ticker' => 'GAA','stock_name' => 'CAMBRIA GLOBAL ASSET ALLOCAT'],
[
'ticker' => 'GAB','stock_name' => 'GABELLI EQUITY TRUST'],
[
'ticker' => 'GABC','stock_name' => 'GERMAN AMERICAN BANCORP'],
[
'ticker' => 'GACQ','stock_name' => 'GLOBAL CONSUMER ACQUISITION'],
[
'ticker' => 'GACQU','stock_name' => 'GLOBAL CONSUMER ACQUISITION'],
[
'ticker' => 'GAIA','stock_name' => 'GAIA INC'],
[
'ticker' => 'GAIN','stock_name' => 'GLADSTONE INVESTMENT CORP'],
[
'ticker' => 'GAL','stock_name' => 'SPDR SSGA GLOBAL ALLOCATION'],
[
'ticker' => 'GALT','stock_name' => 'GALECTIN THERAPEUTICS INC'],
[
'ticker' => 'GAM','stock_name' => 'GENERAL AMERICAN INVESTORS'],
[
'ticker' => 'GAMB','stock_name' => 'GAMBLING.COM GROUP LTD'],
[
'ticker' => 'GAMC','stock_name' => 'GOLDEN ARROW MERGER CORP-A'],
[
'ticker' => 'GAMCU','stock_name' => 'GOLDEN ARROW MERGER CORP'],
[
'ticker' => 'GAME','stock_name' => 'ENGINE GAMING AND MEDIA INC'],
[
'ticker' => 'GAMR','stock_name' => 'WEDBUSH ETFMG VIDEO GAME TEC'],
[
'ticker' => 'GAN','stock_name' => 'GAN LTD'],
[
'ticker' => 'GANX','stock_name' => 'GAIN THERAPEUTICS INC'],
[
'ticker' => 'GAPA','stock_name' => 'G&P ACQUISITION CORP-CL A'],
[
'ticker' => 'GAPA=','stock_name' => 'G&P ACQUISITION CORP'],
[
'ticker' => 'GASS','stock_name' => 'STEALTHGAS INC'],
[
'ticker' => 'GATEU','stock_name' => 'MARBLEGATE ACQUISITION CORP'],
[
'ticker' => 'GATO','stock_name' => 'GATOS SILVER INC'],
[
'ticker' => 'GATX','stock_name' => 'GATX CORP'],
[
'ticker' => 'GAU','stock_name' => 'GALIANO GOLD INC'],
[
'ticker' => 'GAZ','stock_name' => 'IPATH SER B BBG NAT GAS TR'],
[
'ticker' => 'GB','stock_name' => 'GLOBAL BLUE GROUP HOLDING AG'],
[
'ticker' => 'GBAB','stock_name' => 'GUGGENHEIM TAXABLE MUNICIPAL'],
[
'ticker' => 'GBCI','stock_name' => 'GLACIER BANCORP INC'],
[
'ticker' => 'GBDC','stock_name' => 'GOLUB CAPITAL BDC INC'],
[
'ticker' => 'GBDV','stock_name' => 'GLOBAL BETA SMART INCOME ETF'],
[
'ticker' => 'GBF','stock_name' => 'ISHARES GOVERNMENT/CREDIT BO'],
[
'ticker' => 'GBGR','stock_name' => 'GLOBAL BETA RISING STARS ETF'],
[
'ticker' => 'GBIL','stock_name' => 'GOLDMAN SACHS ACCESS TREASUR'],
[
'ticker' => 'GBIO','stock_name' => 'GENERATION BIO CO'],
[
'ticker' => 'GBL','stock_name' => 'GAMCO INVESTORS INC-A'],
[
'ticker' => 'GBLD','stock_name' => 'INVESCO MSCI BUILDING ETF'],
[
'ticker' => 'GBLI','stock_name' => 'GLOBAL INDEMNITY GROUP LLC-A'],
[
'ticker' => 'GBLO','stock_name' => 'GLOBAL BETA LOW BETA ETF'],
[
'ticker' => 'GBNH','stock_name' => 'GREENBROOK TMS INC'],
[
'ticker' => 'GBNY','stock_name' => 'GENERATIONS BANCORP NY INC'],
[
'ticker' => 'GBOX','stock_name' => 'GREENBOX POS'],
[
'ticker' => 'GBR','stock_name' => 'NEW CONCEPT ENERGY INC'],
[
'ticker' => 'GBRG','stock_name' => 'GOLDENBRIDGE ACQUISITION LTD'],
[
'ticker' => 'GBRGR','stock_name' => 'GOLDENBRIDGE ACQUISITION-RTS'],
[
'ticker' => 'GBRGU','stock_name' => 'GOLDENBRIDGE ACQUISITION LTD'],
[
'ticker' => 'GBS','stock_name' => 'GBS INC'],
[
'ticker' => 'GBT','stock_name' => 'GLOBAL BLOOD THERAPEUTICS IN'],
[
'ticker' => 'GBUG','stock_name' => 'PACER IPATH GOLD ETNS'],
[
'ticker' => 'GBX','stock_name' => 'GREENBRIER COMPANIES INC'],
[
'ticker' => 'GCAC','stock_name' => 'GROWTH CAPITAL ACQUISITION-A'],
[
'ticker' => 'GCACU','stock_name' => 'GROWTH CAPITAL ACQUISITION C'],
[
'ticker' => 'GCBC','stock_name' => 'GREENE COUNTY BANCORP INC'],
[
'ticker' => 'GCC','stock_name' => 'WISDOMTREE ENHANCED COMMODIT'],
[
'ticker' => 'GCI','stock_name' => 'GANNETT CO INC'],
[
'ticker' => 'GCMG','stock_name' => 'GCM GROSVENOR INC - CLASS A'],
[
'ticker' => 'GCO','stock_name' => 'GENESCO INC'],
[
'ticker' => 'GCOR','stock_name' => 'GOLDMAN SACHS ACCESS US AGG'],
[
'ticker' => 'GCOW','stock_name' => 'PACER GLOBAL CASH COWS DIVID'],
[
'ticker' => 'GCP','stock_name' => 'GCP APPLIED TECHNOLOGIES'],
[
'ticker' => 'GCV','stock_name' => 'GABELLI CONV AND INCOME SEC'],
[
'ticker' => 'GD','stock_name' => 'GENERAL DYNAMICS CORP'],
[
'ticker' => 'GDDY','stock_name' => 'GODADDY INC - CLASS A'],
[
'ticker' => 'GDEN','stock_name' => 'GOLDEN ENTERTAINMENT INC'],
[
'ticker' => 'GDEV','stock_name' => 'NEXTERS INC'],
[
'ticker' => 'GDL','stock_name' => 'GDL FUND/THE'],
[
'ticker' => 'GDMA','stock_name' => 'GADSDEN DYNAMIC MULTI-ASSET'],
[
'ticker' => 'GDO','stock_name' => 'WESTERN ASSET GL CORP DEF OP'],
[
'ticker' => 'GDOT','stock_name' => 'GREEN DOT CORP-CLASS A'],
[
'ticker' => 'GDP','stock_name' => 'GOODRICH PETROLEUM CORP'],
[
'ticker' => 'GDRX','stock_name' => 'GOODRX HOLDINGS INC-CLASS A'],
[
'ticker' => 'GDS','stock_name' => 'GDS HOLDINGS LTD - ADR'],
[
'ticker' => 'GDV','stock_name' => 'GABELLI DIVIDEND & INCOME TR'],
[
'ticker' => 'GDX','stock_name' => 'VANECK GOLD MINERS ETF'],
[
'ticker' => 'GDXD','stock_name' => 'MICROSECTORS GOLD MINERS -3X'],
[
'ticker' => 'GDXJ','stock_name' => 'VANECK JUNIOR GOLD MINERS'],
[
'ticker' => 'GDXU','stock_name' => 'MICROSECTORS GOLD MINERS 3X'],
[
'ticker' => 'GDYN','stock_name' => 'GRID DYNAMICS HOLDINGS INC'],
[
'ticker' => 'GE','stock_name' => 'GENERAL ELECTRIC CO'],
[
'ticker' => 'GECC','stock_name' => 'GREAT ELM CAPITAL CORP'],
[
'ticker' => 'GEF','stock_name' => 'GREIF INC-CL A'],
[
'ticker' => 'GEF.B','stock_name' => 'GREIF INC-CL B'],
[
'ticker' => 'GEG','stock_name' => 'GREAT ELM GROUP INC'],
[
'ticker' => 'GEL','stock_name' => 'GENESIS ENERGY L.P.'],
[
'ticker' => 'GEM','stock_name' => 'GOLDMAN SACHS ACTIVEBETA EM'],
[
'ticker' => 'GENC','stock_name' => 'GENCOR INDUSTRIES INC'],
[
'ticker' => 'GENE','stock_name' => 'GENETIC TECH LTD-SP ADR'],
[
'ticker' => 'GENI','stock_name' => 'GENIUS SPORTS LTD'],
[
'ticker' => 'GENY','stock_name' => 'PRINCIPAL MILLENNIALS ETF'],
[
'ticker' => 'GEO','stock_name' => 'GEO GROUP INC/THE'],
[
'ticker' => 'GEOS','stock_name' => 'GEOSPACE TECHNOLOGIES CORP'],
[
'ticker' => 'GER','stock_name' => 'GOLDMAN SACHS MLP & ENERGY R'],
[
'ticker' => 'GERM','stock_name' => 'ETFMG TRTMNT TESTING ADV ETF'],
[
'ticker' => 'GERN','stock_name' => 'GERON CORP'],
[
'ticker' => 'GES','stock_name' => 'GUESS? INC'],
[
'ticker' => 'GET','stock_name' => 'GETNET ADQUIRENCIA E SERVISO'],
[
'ticker' => 'GEVO','stock_name' => 'GEVO INC'],
[
'ticker' => 'GF','stock_name' => 'NEW GERMANY FUND'],
[
'ticker' => 'GFAI','stock_name' => 'GUARDFORCE AI CO LTD'],
[
'ticker' => 'GFED','stock_name' => 'GUARANTY FEDERAL BNCSHS INC'],
[
'ticker' => 'GFF','stock_name' => 'GRIFFON CORP'],
[
'ticker' => 'GFI','stock_name' => 'GOLD FIELDS LTD-SPONS ADR'],
[
'ticker' => 'GFL','stock_name' => 'GFL ENVIRONMENTAL INC-SUB VT'],
[
'ticker' => 'GFOR','stock_name' => 'GRAF ACQUISITION CORP IV'],
[
'ticker' => 'GFOR=','stock_name' => 'GRAF ACQUISITION CORP IV'],
[
'ticker' => 'GFS','stock_name' => 'GLOBALFOUNDRIES INC'],
[
'ticker' => 'GFX','stock_name' => 'GOLDEN FALCON ACQUISITI-CL A'],
[
'ticker' => 'GFX=','stock_name' => 'GOLDEN FALCON ACQUISITION CO'],
[
'ticker' => 'GGAL','stock_name' => 'GRUPO FINANCIERO GALICIA-ADR'],
[
'ticker' => 'GGB','stock_name' => 'GERDAU SA -SPON ADR'],
[
'ticker' => 'GGG','stock_name' => 'GRACO INC'],
[
'ticker' => 'GGGV','stock_name' => 'G3 VRM ACQUISITION CORP-CL A'],
[
'ticker' => 'GGGVR','stock_name' => 'G3 VRM ACQUISITION CORP-RTS'],
[
'ticker' => 'GGGVU','stock_name' => 'G3 VRM ACQUISITION CORP'],
[
'ticker' => 'GGMC','stock_name' => 'GLENFARNE MERGER CORP-A'],
[
'ticker' => 'GGMCU','stock_name' => 'GLENFARNE MERGER CORP'],
[
'ticker' => 'GGN','stock_name' => 'GAMCO GLOBAL GOLD NATURAL RE'],
[
'ticker' => 'GGPI','stock_name' => 'GORES GUGGENHEIM INC -CL A'],
[
'ticker' => 'GGPIU','stock_name' => 'GORES GUGGENHEIM INC'],
[
'ticker' => 'GGRW','stock_name' => 'GABELLI GLOBAL GROWTH ETF'],
[
'ticker' => 'GGT','stock_name' => 'GABELLI MULTIMEDIA TRUST INC'],
[
'ticker' => 'GGZ','stock_name' => 'GABELLI GLOBAL SMALL & M'],
[
'ticker' => 'GH','stock_name' => 'GUARDANT HEALTH INC'],
[
'ticker' => 'GHAC','stock_name' => 'GAMING & HOSPITALITY ACQUI-A'],
[
'ticker' => 'GHACU','stock_name' => 'GAMING & HOSPITALITY ACQUISI'],
[
'ticker' => 'GHC','stock_name' => 'GRAHAM HOLDINGS CO-CLASS B'],
[
'ticker' => 'GHG','stock_name' => 'GREENTREE HOSPITALITY GR-ADR'],
[
'ticker' => 'GHL','stock_name' => 'GREENHILL & CO INC'],
[
'ticker' => 'GHLD','stock_name' => 'GUILD HOLDINGS CO - CLASS A'],
[
'ticker' => 'GHM','stock_name' => 'GRAHAM CORP'],
[
'ticker' => 'GHRS','stock_name' => 'GH RESEARCH PLC'],
[
'ticker' => 'GHSI','stock_name' => 'GUARDION HEALTH SCIENCES INC'],
[
'ticker' => 'GHY','stock_name' => 'PGIM GLOBAL HIGH YIELD FUND'],
[
'ticker' => 'GHYB','stock_name' => 'GOLDMAN SACHS ACCESS HY CORP'],
[
'ticker' => 'GHYG','stock_name' => 'ISHARES US&INTL HIGH YIELD C'],
[
'ticker' => 'GIA','stock_name' => 'GIGCAPITAL5 INC'],
[
'ticker' => 'GIA=','stock_name' => 'GIGCAPITAL5 INC'],
[
'ticker' => 'GIACU','stock_name' => 'GESHER I ACQUISITION CORP'],
[
'ticker' => 'GIB','stock_name' => 'CGI INC'],
[
'ticker' => 'GIC','stock_name' => 'GLOBAL INDUSTRIAL CO'],
[
'ticker' => 'GIFI','stock_name' => 'GULF ISLAND FABRICATION INC'],
[
'ticker' => 'GIG','stock_name' => 'GIGCAPITAL4 INC'],
[
'ticker' => 'GIGB','stock_name' => 'GOLDMAN SACHS INV GRD CORP'],
[
'ticker' => 'GIGE','stock_name' => 'SOFI GIG ECONOMY ETF'],
[
'ticker' => 'GIGGU','stock_name' => 'GIGCAPITAL4 INC'],
[
'ticker' => 'GIGM','stock_name' => 'GIGAMEDIA LTD'],
[
'ticker' => 'GII','stock_name' => 'SPDR S&P GLOBAL INFRASTRUCTU'],
[
'ticker' => 'GIII','stock_name' => 'G-III APPAREL GROUP LTD'],
[
'ticker' => 'GIIX','stock_name' => 'GORES HOLDINGS VIII INC-CL A'],
[
'ticker' => 'GIIXU','stock_name' => 'GORES HOLDINGS VIII INC'],
[
'ticker' => 'GIL','stock_name' => 'GILDAN ACTIVEWEAR INC'],
[
'ticker' => 'GILD','stock_name' => 'GILEAD SCIENCES INC'],
[
'ticker' => 'GILT','stock_name' => 'GILAT SATELLITE NETWORKS LTD'],
[
'ticker' => 'GIM','stock_name' => 'TEMPLETON GLOBAL INCOME FUND'],
[
'ticker' => 'GINN','stock_name' => 'GOLDMAN SACHS INNOVATE EQTY'],
[
'ticker' => 'GIPR','stock_name' => 'GENERATION INCOME PROPERTIES'],
[
'ticker' => 'GIS','stock_name' => 'GENERAL MILLS INC'],
[
'ticker' => 'GIW','stock_name' => 'GIGINTERNATIONAL1 INC'],
[
'ticker' => 'GIWWU','stock_name' => 'GIGINTERNATIONAL1 INC'],
[
'ticker' => 'GK','stock_name' => 'ADVISORSHARES GERBER KAWASAK'],
[
'ticker' => 'GKOS','stock_name' => 'GLAUKOS CORP'],
[
'ticker' => 'GL','stock_name' => 'GLOBE LIFE INC'],
[
'ticker' => 'GLAD','stock_name' => 'GLADSTONE CAPITAL CORP'],
[
'ticker' => 'GLAQ','stock_name' => 'GLOBIS ACQUISITION CORP'],
[
'ticker' => 'GLAQU','stock_name' => 'GLOBIS ACQUISITION CORP'],
[
'ticker' => 'GLBE','stock_name' => 'GLOBAL-E ONLINE LTD'],
[
'ticker' => 'GLBL','stock_name' => 'CARTESIAN GROWTH CORP-A'],
[
'ticker' => 'GLBLU','stock_name' => 'CARTESIAN GROWTH CORP'],
[
'ticker' => 'GLBS','stock_name' => 'GLOBUS MARITIME LIMITED'],
[
'ticker' => 'GLBZ','stock_name' => 'GLEN BURNIE BANCORP'],
[
'ticker' => 'GLCN','stock_name' => 'VANECK CHINA GROWTH LEADERS'],
[
'ticker' => 'GLD','stock_name' => 'SPDR GOLD SHARES'],
[
'ticker' => 'GLDB','stock_name' => 'STRATEGY SHARES GLD HDG BOND'],
[
'ticker' => 'GLDD','stock_name' => 'GREAT LAKES DREDGE & DOCK CO'],
[
'ticker' => 'GLDG','stock_name' => 'GOLDMINING INC'],
[
'ticker' => 'GLDI','stock_name' => 'X-LINKS GOLD SHRS COVRD CALL'],
[
'ticker' => 'GLDM','stock_name' => 'SPDR GOLD MINISHARES TRUST'],
[
'ticker' => 'GLDX','stock_name' => 'USCF GOLD STRATEGY PLUS INCO'],
[
'ticker' => 'GLEE','stock_name' => 'GLADSTONE ACQUISITION CORP-A'],
[
'ticker' => 'GLEEU','stock_name' => 'GLADSTONE ACQUISITION CORP'],
[
'ticker' => 'GLG','stock_name' => 'TD HOLDINGS INC'],
[
'ticker' => 'GLHA','stock_name' => 'GLASS HOUSES ACQUISITION COR'],
[
'ticker' => 'GLHAU','stock_name' => 'GLASS HOUSES ACQUISITION COR'],
[
'ticker' => 'GLIF','stock_name' => 'AGFIQ GLOBAL INFRASTRUCTURE'],
[
'ticker' => 'GLIN','stock_name' => 'VANECK INDIA GROWTH LEADERS'],
[
'ticker' => 'GLL','stock_name' => 'PROSHARES ULTRASHORT GOLD'],
[
'ticker' => 'GLMD','stock_name' => 'GALMED PHARMACEUTICALS LTD'],
[
'ticker' => 'GLNG','stock_name' => 'GOLAR LNG LTD'],
[
'ticker' => 'GLO','stock_name' => 'CLOUGH GLBL OPPORTUNITIES FD'],
[
'ticker' => 'GLOB','stock_name' => 'GLOBANT SA'],
[
'ticker' => 'GLOP','stock_name' => 'GASLOG PARTNERS LP'],
[
'ticker' => 'GLP','stock_name' => 'GLOBAL PARTNERS LP'],
[
'ticker' => 'GLPG','stock_name' => 'GALAPAGOS NV-SPON ADR'],
[
'ticker' => 'GLPI','stock_name' => 'GAMING AND LEISURE PROPERTIE'],
[
'ticker' => 'GLQ','stock_name' => 'CLOUGH GLOBAL EQUITY FUND'],
[
'ticker' => 'GLRE','stock_name' => 'GREENLIGHT CAPITAL RE LTD-A'],
[
'ticker' => 'GLRY','stock_name' => 'INSPIRE FAITHWARD MIDCAP MOM'],
[
'ticker' => 'GLSI','stock_name' => 'GREENWICH LIFESCIENCES INC'],
[
'ticker' => 'GLSPT','stock_name' => 'GLOBAL SPAC PARTNERS CO-SUB'],
[
'ticker' => 'GLSPU','stock_name' => 'GLOBAL SPAC PARTNERS CO'],
[
'ticker' => 'GLT','stock_name' => 'GLATFELTER CORP'],
[
'ticker' => 'GLTA','stock_name' => 'GALATA ACQUISITION CORP - A'],
[
'ticker' => 'GLTA=','stock_name' => 'GALATA ACQUISITION CORP'],
[
'ticker' => 'GLTO','stock_name' => 'GALECTO INC'],
[
'ticker' => 'GLTR','stock_name' => 'ABERDEEN STANDARD PHYSICAL P'],
[
'ticker' => 'GLU','stock_name' => 'GABELLI GLOBAL UTIL & INCOME'],
[
'ticker' => 'GLUE','stock_name' => 'MONTE ROSA THERAPEUTICS INC'],
[
'ticker' => 'GLV','stock_name' => 'CLOUGH GLOBAL DIVIDEND AND I'],
[
'ticker' => 'GLW','stock_name' => 'CORNING INC'],
[
'ticker' => 'GLYC','stock_name' => 'GLYCOMIMETICS INC'],
[
'ticker' => 'GM','stock_name' => 'GENERAL MOTORS CO'],
[
'ticker' => 'GMAB','stock_name' => 'GENMAB A/S -SP ADR'],
[
'ticker' => 'GMBL','stock_name' => 'ESPORTS ENTERTAINMENT GROUP'],
[
'ticker' => 'GMBT','stock_name' => 'QUEEN\'S GAMBIT GROWTH -CL A'],
[
'ticker' => 'GMBTU','stock_name' => 'QUEEN\'S GAMBIT GROWTH CAPITA'],
[
'ticker' => 'GMDA','stock_name' => 'GAMIDA CELL LTD'],
[
'ticker' => 'GME','stock_name' => 'GAMESTOP CORP-CLASS A'],
[
'ticker' => 'GMED','stock_name' => 'GLOBUS MEDICAL INC - A'],
[
'ticker' => 'GMF','stock_name' => 'SPDR S&P EMERGING ASIA PACIF'],
[
'ticker' => 'GMII','stock_name' => 'GORES METROPOULOS II INC-A'],
[
'ticker' => 'GMIIU','stock_name' => 'GORES METROPOULOS II INC'],
[
'ticker' => 'GMOM','stock_name' => 'CAMBRIA GLOBAL MOMENTUM ETF'],
[
'ticker' => 'GMRE','stock_name' => 'GLOBAL MEDICAL REIT INC'],
[
'ticker' => 'GMS','stock_name' => 'GMS INC'],
[
'ticker' => 'GMTX','stock_name' => 'GEMINI THERAPEUTICS INC'],
[
'ticker' => 'GMVD','stock_name' => 'G MEDICAL INNOVATION HOLDING'],
[
'ticker' => 'GNAC','stock_name' => 'GROUP NINE ACQUISITION -CL A'],
[
'ticker' => 'GNACU','stock_name' => 'GROUP NINE ACQUISITION CORP'],
[
'ticker' => 'GNAF','stock_name' => 'MICROSECTORS FANG INDEX INVE'],
[
'ticker' => 'GNCA','stock_name' => 'GENOCEA BIOSCIENCES INC'],
[
'ticker' => 'GNE','stock_name' => 'GENIE ENERGY LTD-B'],
[
'ticker' => 'GNFT','stock_name' => 'GENFIT-ADR'],
[
'ticker' => 'GNK','stock_name' => 'GENCO SHIPPING & TRADING LTD'],
[
'ticker' => 'GNL','stock_name' => 'GLOBAL NET LEASE INC'],
[
'ticker' => 'GNLN','stock_name' => 'GREENLANE HOLDINGS INC - A'],
[
'ticker' => 'GNMA','stock_name' => 'ISHARES GNMA BOND ETF'],
[
'ticker' => 'GNOG','stock_name' => 'GOLDEN NUGGET ONLINE GAMING'],
[
'ticker' => 'GNOM','stock_name' => 'GLOBAL X GENOMICS & BIOTECHN'],
[
'ticker' => 'GNPX','stock_name' => 'GENPREX INC'],
[
'ticker' => 'GNR','stock_name' => 'SPDR S&P GL NAT RESOURCES'],
[
'ticker' => 'GNRC','stock_name' => 'GENERAC HOLDINGS INC'],
[
'ticker' => 'GNSS','stock_name' => 'GENASYS INC'],
[
'ticker' => 'GNT','stock_name' => 'GAMCO NATURAL RESOURCES GOLD'],
[
'ticker' => 'GNTX','stock_name' => 'GENTEX CORP'],
[
'ticker' => 'GNTY','stock_name' => 'GUARANTY BANCSHARES INC'],
[
'ticker' => 'GNUS','stock_name' => 'GENIUS BRANDS INTERNATIONAL'],
[
'ticker' => 'GNW','stock_name' => 'GENWORTH FINANCIAL INC-CL A'],
[
'ticker' => 'GO','stock_name' => 'GROCERY OUTLET HOLDING CORP'],
[
'ticker' => 'GOAC','stock_name' => 'GO ACQUISITION CORP-CLASS A'],
[
'ticker' => 'GOAC=','stock_name' => 'GO ACQUISITION CORP'],
[
'ticker' => 'GOAT','stock_name' => 'VANECK MSTAR GL WIDE MOAT'],
[
'ticker' => 'GOAU','stock_name' => 'US GLB GLD & METAL MNRS ETF'],
[
'ticker' => 'GOBI','stock_name' => 'GOBI ACQUISITION CORP-A'],
[
'ticker' => 'GOCO','stock_name' => 'GOHEALTH INC-CLASS A'],
[
'ticker' => 'GOED','stock_name' => '1847 GOEDEKER INC'],
[
'ticker' => 'GOEV','stock_name' => 'CANOO INC'],
[
'ticker' => 'GOEX','stock_name' => 'GLOBAL X GOLD EXPLORERS ETF'],
[
'ticker' => 'GOF','stock_name' => 'GUGGENHEIM STRATEGIC OPPORTU'],
[
'ticker' => 'GOGL','stock_name' => 'GOLDEN OCEAN GROUP LTD'],
[
'ticker' => 'GOGN=','stock_name' => 'GOGREEN INVESTMENTS CORP'],
[
'ticker' => 'GOGO','stock_name' => 'GOGO INC'],
[
'ticker' => 'GOL','stock_name' => 'GOL LINHAS AEREAS INTEL-ADR'],
[
'ticker' => 'GOLD','stock_name' => 'BARRICK GOLD CORP'],
[
'ticker' => 'GOLF','stock_name' => 'ACUSHNET HOLDINGS CORP'],
[
'ticker' => 'GOOD','stock_name' => 'GLADSTONE COMMERCIAL CORP'],
[
'ticker' => 'GOOG','stock_name' => 'ALPHABET INC-CL C'],
[
'ticker' => 'GOOGL','stock_name' => 'ALPHABET INC-CL A'],
[
'ticker' => 'GOOS','stock_name' => 'CANADA GOOSE HOLDINGS INC'],
[
'ticker' => 'GORO','stock_name' => 'GOLD RESOURCE CORP'],
[
'ticker' => 'GOSS','stock_name' => 'GOSSAMER BIO INC'],
[
'ticker' => 'GOTU','stock_name' => 'GAOTU TECHEDU INC'],
[
'ticker' => 'GOVT','stock_name' => 'ISHARES US TREASURY BOND ETF'],
[
'ticker' => 'GOVX','stock_name' => 'GEOVAX LABS INC'],
[
'ticker' => 'GOVZ','stock_name' => 'ISHARES 25+ YR TREAS STRIPS'],
[
'ticker' => 'GP','stock_name' => 'GREENPOWER MOTOR CO INC'],
[
'ticker' => 'GPAC','stock_name' => 'GLOBAL PARTNER ACQUISITION-A'],
[
'ticker' => 'GPACU','stock_name' => 'GLOBAL PARTNER ACQUISITION C'],
[
'ticker' => 'GPC','stock_name' => 'GENUINE PARTS CO'],
[
'ticker' => 'GPCO','stock_name' => 'GOLDEN PATH ACQUISITION CORP'],
[
'ticker' => 'GPCOR','stock_name' => 'GOLDEN PATH ACQUISITION-RTS'],
[
'ticker' => 'GPCOU','stock_name' => 'GOLDEN PATH ACQUISITION CORP'],
[
'ticker' => 'GPI','stock_name' => 'GROUP 1 AUTOMOTIVE INC'],
[
'ticker' => 'GPK','stock_name' => 'GRAPHIC PACKAGING HOLDING CO'],
[
'ticker' => 'GPL','stock_name' => 'GREAT PANTHER MINING LTD'],
[
'ticker' => 'GPMT','stock_name' => 'GRANITE POINT MORTGAGE TRUST'],
[
'ticker' => 'GPN','stock_name' => 'GLOBAL PAYMENTS INC'],
[
'ticker' => 'GPOR','stock_name' => 'GULFPORT ENERGY CORP'],
[
'ticker' => 'GPP','stock_name' => 'GREEN PLAINS PARTNERS LP'],
[
'ticker' => 'GPRE','stock_name' => 'GREEN PLAINS INC'],
[
'ticker' => 'GPRK','stock_name' => 'GEOPARK LTD'],
[
'ticker' => 'GPRO','stock_name' => 'GOPRO INC-CLASS A'],
[
'ticker' => 'GPS','stock_name' => 'GAP INC/THE'],
[
'ticker' => 'GQRE','stock_name' => 'FLEXSHARES GLOBAL QUALITY RE'],
[
'ticker' => 'GRAY','stock_name' => 'GRAYBUG VISION INC'],
[
'ticker' => 'GRBK','stock_name' => 'GREEN BRICK PARTNERS INC'],
[
'ticker' => 'GRC','stock_name' => 'GORMAN-RUPP CO'],
[
'ticker' => 'GRCL','stock_name' => 'GRACELL BIOTECHNOLOGIES-ADR'],
[
'ticker' => 'GRCY','stock_name' => 'GREENCITY ACQUISITION CORP'],
[
'ticker' => 'GRCYU','stock_name' => 'GREENCITY ACQUISITION CORP'],
[
'ticker' => 'GREE','stock_name' => 'GREENIDGE GENERATION HOLDING'],
[
'ticker' => 'GREK','stock_name' => 'GLOBAL X MSCI GREECE ETF'],
[
'ticker' => 'GRES','stock_name' => 'IQ GLOBAL RESOURCES ETF'],
[
'ticker' => 'GRF','stock_name' => 'EAGLE CAPITAL GROWTH FUND'],
[
'ticker' => 'GRFS','stock_name' => 'GRIFOLS SA-ADR'],
[
'ticker' => 'GRID','stock_name' => 'FIRST TRST NASD CL EDG SGIIF'],
[
'ticker' => 'GRIL','stock_name' => 'MUSCLE MAKER INC'],
[
'ticker' => 'GRIN','stock_name' => 'GRINDROD SHIPPING HOLDINGS L'],
[
'ticker' => 'GRMN','stock_name' => 'GARMIN LTD'],
[
'ticker' => 'GRN','stock_name' => 'IPATH SERIES B CARBON ETN'],
[
'ticker' => 'GRNB','stock_name' => 'VANECK GREEN BOND ETF'],
[
'ticker' => 'GRNQ','stock_name' => 'GREENPRO CAPITAL CORP'],
[
'ticker' => 'GROM','stock_name' => 'GROM SOCIAL ENTERPRISES INC'],
[
'ticker' => 'GROW','stock_name' => 'U.S. GLOBAL INVESTORS INC-A'],
[
'ticker' => 'GROY','stock_name' => 'GOLD ROYALTY CORP'],
[
'ticker' => 'GRP=','stock_name' => 'GRANITE REAL ESTATE INVESTME'],
[
'ticker' => 'GRPH','stock_name' => 'GRAPHITE BIO INC'],
[
'ticker' => 'GRPN','stock_name' => 'GROUPON INC'],
[
'ticker' => 'GRTS','stock_name' => 'GRITSTONE BIO INC'],
[
'ticker' => 'GRTX','stock_name' => 'GALERA THERAPEUTICS INC'],
[
'ticker' => 'GRU','stock_name' => 'ELEMENTS ICE EXTRA GRAINS TO'],
[
'ticker' => 'GRUB','stock_name' => 'JUST EAT TAKEAWAY-SPONS ADR'],
[
'ticker' => 'GRVI','stock_name' => 'GROVE INC'],
[
'ticker' => 'GRVY','stock_name' => 'GRAVITY CO LTD-SPONSORED ADR'],
[
'ticker' => 'GRWG','stock_name' => 'GROWGENERATION CORP'],
[
'ticker' => 'GRX','stock_name' => 'GABELLI HEALTHCARE&WELLNESS'],
[
'ticker' => 'GS','stock_name' => 'GOLDMAN SACHS GROUP INC'],
[
'ticker' => 'GSAQ','stock_name' => 'GLOBAL SYNERGY ACQUISITION-A'],
[
'ticker' => 'GSAQU','stock_name' => 'GLOBAL SYNERGY ACQUISITION C'],
[
'ticker' => 'GSAT','stock_name' => 'GLOBALSTAR INC'],
[
'ticker' => 'GSBC','stock_name' => 'GREAT SOUTHERN BANCORP INC'],
[
'ticker' => 'GSBD','stock_name' => 'GOLDMAN SACHS BDC INC'],
[
'ticker' => 'GSEE','stock_name' => 'GOLDMAN SACHS MARKETBETA EME'],
[
'ticker' => 'GSEU','stock_name' => 'GOLDMAN ACTIVEBTA EUR EQ ETF'],
[
'ticker' => 'GSEV','stock_name' => 'GORES HOLDINGS VII INC-A'],
[
'ticker' => 'GSEVU','stock_name' => 'GORES HOLDINGS VII INC'],
[
'ticker' => 'GSEW','stock_name' => 'GOLDMAN SACHS EQL WGHT LARGE'],
[
'ticker' => 'GSFP','stock_name' => 'GS FUTURE PLANET EQUITY ETF'],
[
'ticker' => 'GSG','stock_name' => 'ISHARES S&P GSCI COMMODITY I'],
[
'ticker' => 'GSHD','stock_name' => 'GOOSEHEAD INSURANCE INC -A'],
[
'ticker' => 'GSID','stock_name' => 'GOLDMAN SACHS MARKETBETA INT'],
[
'ticker' => 'GSIE','stock_name' => 'GOLDMAN SACHS ACTIVEBETA INT'],
[
'ticker' => 'GSIG','stock_name' => 'GOLDMAN SACHS ACCESS INVESTM'],
[
'ticker' => 'GSIT','stock_name' => 'GSI TECHNOLOGY INC'],
[
'ticker' => 'GSJY','stock_name' => 'GOLDMAN ACTIVEBETA JP EQ ETF'],
[
'ticker' => 'GSK','stock_name' => 'GLAXOSMITHKLINE PLC-SPON ADR'],
[
'ticker' => 'GSKY','stock_name' => 'GREENSKY INC-CLASS A'],
[
'ticker' => 'GSL','stock_name' => 'GLOBAL SHIP LEASE INC-CL A'],
[
'ticker' => 'GSLC','stock_name' => 'GOLDMAN ACTIVEBETA US LC ETF'],
[
'ticker' => 'GSM','stock_name' => 'FERROGLOBE PLC'],
[
'ticker' => 'GSMG','stock_name' => 'GLORY STAR NEW MEDIA GROUP H'],
[
'ticker' => 'GSP','stock_name' => 'IPATH GSCI TOTAL RETURN INDX'],
[
'ticker' => 'GSPY','stock_name' => 'GOTHAM ENHANCED 500 ETF'],
[
'ticker' => 'GSQB','stock_name' => 'G SQUARED ASCEND II INC -A'],
[
'ticker' => 'GSQB=','stock_name' => 'G SQUARED ASCEND II INC'],
[
'ticker' => 'GSQD','stock_name' => 'G SQUARED ASCEND I INC-CL A'],
[
'ticker' => 'GSQD=','stock_name' => 'G SQUARED ASCEND I INC'],
[
'ticker' => 'GSS','stock_name' => 'GOLDEN STAR RESOURCES LTD'],
[
'ticker' => 'GSSC','stock_name' => 'GOLDMAN SACHS ACTIVEBETA US'],
[
'ticker' => 'GSST','stock_name' => 'GOLDMAN SACHS ACCESS U/SHORT'],
[
'ticker' => 'GSUS','stock_name' => 'GOLDMAN SACHS MARKETBETA US'],
[
'ticker' => 'GSV','stock_name' => 'GOLD STANDARD VENTURES CORP'],
[
'ticker' => 'GSY','stock_name' => 'INVESCO ULTRA SHORT DURATION'],
[
'ticker' => 'GT','stock_name' => 'GOODYEAR TIRE & RUBBER CO'],
[
'ticker' => 'GTACU','stock_name' => 'GLOBAL TECHNOLOGY ACQUISITIO'],
[
'ticker' => 'GTBP','stock_name' => 'GT BIOPHARMA INC'],
[
'ticker' => 'GTE','stock_name' => 'GRAN TIERRA ENERGY INC'],
[
'ticker' => 'GTEC','stock_name' => 'GREENLAND TECHNOLOGIES HOLDI'],
[
'ticker' => 'GTEK','stock_name' => 'GS FUTURE TECH LEADERS EQ'],
[
'ticker' => 'GTES','stock_name' => 'GATES INDUSTRIAL CORP PLC'],
[
'ticker' => 'GTH','stock_name' => 'GENETRON HOLDINGS LTD-ADR'],
[
'ticker' => 'GTHX','stock_name' => 'G1 THERAPEUTICS INC'],
[
'ticker' => 'GTIM','stock_name' => 'GOOD TIMES RESTAURANTS INC'],
[
'ticker' => 'GTIP','stock_name' => 'GOLDMAN SACHS ACCESS INFLATI'],
[
'ticker' => 'GTLB','stock_name' => 'GITLAB INC-CL A'],
[
'ticker' => 'GTLS','stock_name' => 'CHART INDUSTRIES INC'],
[
'ticker' => 'GTN','stock_name' => 'GRAY TELEVISION INC'],
[
'ticker' => 'GTN.A','stock_name' => 'GRAY TELEVISION INC-A'],
[
'ticker' => 'GTO','stock_name' => 'INVESCO TOTAL RETURN BOND ET'],
[
'ticker' => 'GTPA','stock_name' => 'GORES TECHNOLOGY PARTNERS-A'],
[
'ticker' => 'GTPAU','stock_name' => 'GORES TECHNOLOGY PARTNERS IN'],
[
'ticker' => 'GTPB','stock_name' => 'GORES TECHNOLOGY PRTNR II-A'],
[
'ticker' => 'GTPBU','stock_name' => 'GORES TECHNOLOGY PARTNERS II'],
[
'ticker' => 'GTR','stock_name' => 'WISDOMTREE TARGET RANGE FUND'],
[
'ticker' => 'GTS','stock_name' => 'TRIPLE-S MANAGEMENT CORP'],
[
'ticker' => 'GTX','stock_name' => 'GARRETT MOTION INC'],
[
'ticker' => 'GTY','stock_name' => 'GETTY REALTY CORP'],
[
'ticker' => 'GTYH','stock_name' => 'GTY TECHNOLOGY HOLDINGS INC'],
[
'ticker' => 'GUNR','stock_name' => 'FLEXSHARES GLOBAL UPSTREAM N'],
[
'ticker' => 'GURE','stock_name' => 'GULF RESOURCES INC'],
[
'ticker' => 'GURU','stock_name' => 'GLOBAL X GURU INDEX ETF'],
[
'ticker' => 'GUSH','stock_name' => 'DIREXION DAILY S&P OIL & GAS'],
[
'ticker' => 'GUT','stock_name' => 'GABELLI UTILITY TRUST'],
[
'ticker' => 'GVA','stock_name' => 'GRANITE CONSTRUCTION INC'],
[
'ticker' => 'GVAL','stock_name' => 'CAMBRIA GLOBAL VALUE ETF'],
[
'ticker' => 'GVI','stock_name' => 'ISHARES INTERMEDIATE GOVERNM'],
[
'ticker' => 'GVIP','stock_name' => 'GOLD SACHS HEDGE IND VIP ETF'],
[
'ticker' => 'GVP','stock_name' => 'GSE SYSTEMS INC'],
[
'ticker' => 'GWB','stock_name' => 'GREAT WESTERN BANCORP INC'],
[
'ticker' => 'GWGH','stock_name' => 'GWG HOLDINGS INC'],
[
'ticker' => 'GWH','stock_name' => 'ESS TECH INC'],
[
'ticker' => 'GWII','stock_name' => 'GOOD WORKS II ACQUISITION CO'],
[
'ticker' => 'GWRE','stock_name' => 'GUIDEWIRE SOFTWARE INC'],
[
'ticker' => 'GWRS','stock_name' => 'GLOBAL WATER RESOURCES INC'],
[
'ticker' => 'GWW','stock_name' => 'WW GRAINGER INC'],
[
'ticker' => 'GWX','stock_name' => 'SPDR S&P INTL SMALL CAP'],
[
'ticker' => 'GXC','stock_name' => 'SPDR S&P CHINA ETF'],
[
'ticker' => 'GXG','stock_name' => 'GLOBAL X MSCI COLOMBIA ETF'],
[
'ticker' => 'GXII','stock_name' => 'GX ACQUISITION CORP II-A'],
[
'ticker' => 'GXIIU','stock_name' => 'GX ACQUISITION CORP II'],
[
'ticker' => 'GXO','stock_name' => 'GXO LOGISTICS INC'],
[
'ticker' => 'GXTG','stock_name' => 'GLOBAL X THEMATIC GROWTH ETF'],
[
'ticker' => 'GYLD','stock_name' => 'ARROW DOW JONES GLOBAL YIELD'],
[
'ticker' => 'GYRO','stock_name' => 'GYRODYNE LLC'],
[
'ticker' => 'H','stock_name' => 'HYATT HOTELS CORP - CL A'],
[
'ticker' => 'HA','stock_name' => 'HAWAIIAN HOLDINGS INC'],
[
'ticker' => 'HAAC','stock_name' => 'HEALTH ASSURANCE ACQUISIT-A'],
[
'ticker' => 'HAACU','stock_name' => 'HEALTH ASSURANCE ACQUISITION'],
[
'ticker' => 'HACK','stock_name' => 'ETFMG PRIME CYBER SECURITY E'],
[
'ticker' => 'HAE','stock_name' => 'HAEMONETICS CORP/MASS'],
[
'ticker' => 'HAFC','stock_name' => 'HANMI FINANCIAL CORPORATION'],
[
'ticker' => 'HAIL','stock_name' => 'SPDR S&P KENSHO SMART MOBILI'],
[
'ticker' => 'HAIN','stock_name' => 'HAIN CELESTIAL GROUP INC'],
[
'ticker' => 'HAL','stock_name' => 'HALLIBURTON CO'],
[
'ticker' => 'HALL','stock_name' => 'HALLMARK FINL SERVICES INC'],
[
'ticker' => 'HALO','stock_name' => 'HALOZYME THERAPEUTICS INC'],
[
'ticker' => 'HAP','stock_name' => 'VANECK NATURAL RESOURCES ETF'],
[
'ticker' => 'HAPP','stock_name' => 'HAPPINESS BIOTECH GROUP LTD'],
[
'ticker' => 'HARP','stock_name' => 'HARPOON THERAPEUTICS INC'],
[
'ticker' => 'HART','stock_name' => 'IQ HEALTHY HEARTS ETF'],
[
'ticker' => 'HAS','stock_name' => 'HASBRO INC'],
[
'ticker' => 'HASI','stock_name' => 'HANNON ARMSTRONG SUSTAINABLE'],
[
'ticker' => 'HAUZ','stock_name' => 'XTRACKERS INTL REAL ESTATE'],
[
'ticker' => 'HAWX','stock_name' => 'ISHARES CUR HDG MSCI ACWI-X'],
[
'ticker' => 'HAYN','stock_name' => 'HAYNES INTERNATIONAL INC'],
[
'ticker' => 'HAYW','stock_name' => 'HAYWARD HOLDINGS INC'],
[
'ticker' => 'HBAN','stock_name' => 'HUNTINGTON BANCSHARES INC'],
[
'ticker' => 'HBB','stock_name' => 'HAMILTON BEACH BRAND-A'],
[
'ticker' => 'HBCP','stock_name' => 'HOME BANCORP INC'],
[
'ticker' => 'HBI','stock_name' => 'HANESBRANDS INC'],
[
'ticker' => 'HBIO','stock_name' => 'HARVARD BIOSCIENCE INC'],
[
'ticker' => 'HBM','stock_name' => 'HUDBAY MINERALS INC'],
[
'ticker' => 'HBMD','stock_name' => 'HOWARD BANCORP INC'],
[
'ticker' => 'HBNC','stock_name' => 'HORIZON BANCORP INC/IN'],
[
'ticker' => 'HBP','stock_name' => 'HUTTIG BUILDING PRODUCTS INC'],
[
'ticker' => 'HBT','stock_name' => 'HBT FINANCIAL INC/DE'],
[
'ticker' => 'HCA','stock_name' => 'HCA HEALTHCARE INC'],
[
'ticker' => 'HCAQ','stock_name' => 'HEALTHCOR CATALIO ACQUISIT-A'],
[
'ticker' => 'HCAR','stock_name' => 'HEALTHCARE SERVICES ACQUI-A'],
[
'ticker' => 'HCARU','stock_name' => 'HEALTHCARE SERVICES ACQUISIT'],
[
'ticker' => 'HCAT','stock_name' => 'HEALTH CATALYST INC'],
[
'ticker' => 'HCC','stock_name' => 'WARRIOR MET COAL INC'],
[
'ticker' => 'HCCC','stock_name' => 'HEALTHCARE CAPITAL CORP-CL A'],
[
'ticker' => 'HCCCU','stock_name' => 'HEALTHCARE CAPITAL CORP'],
[
'ticker' => 'HCCI','stock_name' => 'HERITAGE-CRYSTAL CLEAN INC'],
[
'ticker' => 'HCDI','stock_name' => 'HARBOR CUSTOM DEVELOPMENT'],
[
'ticker' => 'HCI','stock_name' => 'HCI GROUP INC'],
[
'ticker' => 'HCIC','stock_name' => 'HENNESSY CAPITAL INVESTMEN-A'],
[
'ticker' => 'HCICU','stock_name' => 'HENNESSY CAPITAL INVESTMENT'],
[
'ticker' => 'HCII','stock_name' => 'HUDSON EXECUTIVE INVESTMENT'],
[
'ticker' => 'HCIIU','stock_name' => 'HUDSON EXECUTIVE INVESTMENT'],
[
'ticker' => 'HCKT','stock_name' => 'HACKETT GROUP INC/THE'],
[
'ticker' => 'HCM','stock_name' => 'HUTCHMED CHINA-ADR'],
[
'ticker' => 'HCNE','stock_name' => 'JAWS HURRICANE ACQUISITION-A'],
[
'ticker' => 'HCNEU','stock_name' => 'JAWS HURRICANE ACQUISITON CO'],
[
'ticker' => 'HCOM','stock_name' => 'HARTFORD SCHRODERS COMMODITY'],
[
'ticker' => 'HCRB','stock_name' => 'HARTFORD CORE BOND ETF'],
[
'ticker' => 'HCSG','stock_name' => 'HEALTHCARE SERVICES GROUP'],
[
'ticker' => 'HCTI','stock_name' => 'HEALTHCARE TRIANGLE INC'],
[
'ticker' => 'HCVIU','stock_name' => 'HENNESSY CAPITAL INVESTMENT'],
[
'ticker' => 'HCWB','stock_name' => 'HCW BIOLOGICS INC'],
[
'ticker' => 'HD','stock_name' => 'HOME DEPOT INC'],
[
'ticker' => 'HDAW','stock_name' => 'XTRACKERS MSCI ALL WORLD EX'],
[
'ticker' => 'HDB','stock_name' => 'HDFC BANK LTD-ADR'],
[
'ticker' => 'HDEF','stock_name' => 'XTRACKERS MSCI EAFE HIGH DIV'],
[
'ticker' => 'HDG','stock_name' => 'PROSHARES HEDGE REPLICAT ETF'],
[
'ticker' => 'HDGE','stock_name' => 'ADVISORSHARES RANGER EQ BEAR'],
[
'ticker' => 'HDIV','stock_name' => 'QRAFT AI-ENHANCED US HIGH DI'],
[
'ticker' => 'HDLB','stock_name' => 'ETRACS 2X HI DIV L-VOL ETN-B'],
[
'ticker' => 'HDMV','stock_name' => 'FT HORIZON MGD VOL D INT ETF'],
[
'ticker' => 'HDRO','stock_name' => 'DEFIANCE NEXT GEN H2 ETF'],
[
'ticker' => 'HDSN','stock_name' => 'HUDSON TECHNOLOGIES INC'],
[
'ticker' => 'HDV','stock_name' => 'ISHARES CORE HIGH DIVIDEND E'],
[
'ticker' => 'HE','stock_name' => 'HAWAIIAN ELECTRIC INDS'],
[
'ticker' => 'HEAR','stock_name' => 'TURTLE BEACH CORP'],
[
'ticker' => 'HEDJ','stock_name' => 'WISDOMTREE EUROPE HEDGED EQU'],
[
'ticker' => 'HEEM','stock_name' => 'ISHARES CRNCY HEDGD MSCI EM'],
[
'ticker' => 'HEES','stock_name' => 'H&E EQUIPMENT SERVICES INC'],
[
'ticker' => 'HEET','stock_name' => 'HARTFORD SCHRODERS ESG US EQ'],
[
'ticker' => 'HEFA','stock_name' => 'ISHA CURR HEDGED MSCI EAFE'],
[
'ticker' => 'HEGD','stock_name' => 'SWAN HEDGED EQUITY US LG CAP'],
[
'ticker' => 'HEI','stock_name' => 'HEICO CORP'],
[
'ticker' => 'HEI.A','stock_name' => 'HEICO CORP-CLASS A'],
[
'ticker' => 'HELE','stock_name' => 'HELEN OF TROY LTD'],
[
'ticker' => 'HELX','stock_name' => 'FRANKLIN GENOMIC ADVANCEMENT'],
[
'ticker' => 'HEP','stock_name' => 'HOLLY ENERGY PARTNERS LP'],
[
'ticker' => 'HEPA','stock_name' => 'HEPION PHARMACEUTICALS INC'],
[
'ticker' => 'HEPS','stock_name' => 'D-MARKET ELECTRONIC SERV-ADR'],
[
'ticker' => 'HEQ','stock_name' => 'JOHN HANCOCK HEDGED EQUITY &'],
[
'ticker' => 'HEQT','stock_name' => 'SIMPLIFY HEDGED EQUITY ETF'],
[
'ticker' => 'HERA','stock_name' => 'FTAC HERA ACQUISITION CORP-A'],
[
'ticker' => 'HERAU','stock_name' => 'FTAC HERA ACQUISITION CORP'],
[
'ticker' => 'HERD','stock_name' => 'PACER CASH COWS FUND OF FUND'],
[
'ticker' => 'HERO','stock_name' => 'GLOBAL X VIDEO GAMES& ESPORT'],
[
'ticker' => 'HES','stock_name' => 'HESS CORP'],
[
'ticker' => 'HESM','stock_name' => 'HESS MIDSTREAM LP - CLASS A'],
[
'ticker' => 'HEWC','stock_name' => 'ISHARES CURR HDG MSCI CANADA'],
[
'ticker' => 'HEWG','stock_name' => 'ISHA HEDGED MSCI GERMANY'],
[
'ticker' => 'HEWJ','stock_name' => 'ISHA CURR HEDGED MSCI JAPAN'],
[
'ticker' => 'HEWU','stock_name' => 'ISHARES CURR HEDGED MSCI UK'],
[
'ticker' => 'HEXO','stock_name' => 'HEXO CORP'],
[
'ticker' => 'HEZU','stock_name' => 'ISHARES CURRENCY HEDGED MSCI'],
[
'ticker' => 'HFBL','stock_name' => 'HOME FEDERAL BANCORP INC/LA'],
[
'ticker' => 'HFC','stock_name' => 'HOLLYFRONTIER CORP'],
[
'ticker' => 'HFFG','stock_name' => 'HF FOODS GROUP INC'],
[
'ticker' => 'HFRO','stock_name' => 'HIGHLAND INCOME FUND'],
[
'ticker' => 'HFWA','stock_name' => 'HERITAGE FINANCIAL CORP'],
[
'ticker' => 'HFXI','stock_name' => 'IQ 50PCT HEDGED FTSE INT ETF'],
[
'ticker' => 'HGBL','stock_name' => 'HERITAGE GLOBAL INC'],
[
'ticker' => 'HGEN','stock_name' => 'HUMANIGEN INC'],
[
'ticker' => 'HGLB','stock_name' => 'HIGHLAND GLOBAL ALLOCATION'],
[
'ticker' => 'HGSH','stock_name' => 'CHINA HGS REAL ESTATE INC'],
[
'ticker' => 'HGV','stock_name' => 'HILTON GRAND VACATIONS INC'],
[
'ticker' => 'HHC','stock_name' => 'HOWARD HUGHES CORP/THE'],
[
'ticker' => 'HHGCU','stock_name' => 'HHG CAPITAL CORP'],
[
'ticker' => 'HHH','stock_name' => 'ETFMG REAL ESTATE TECH ETF'],
[
'ticker' => 'HHLA','stock_name' => 'HH&L ACQUISITION CO -CLASS A'],
[
'ticker' => 'HHLA=','stock_name' => 'HH&L ACQUISITION CORP'],
[
'ticker' => 'HHR','stock_name' => 'HEADHUNTER GROUP PLC-ADR'],
[
'ticker' => 'HI','stock_name' => 'HILLENBRAND INC'],
[
'ticker' => 'HIBB','stock_name' => 'HIBBETT INC'],
[
'ticker' => 'HIBL','stock_name' => 'DIREXION DAILY S&P 500 HIGH'],
[
'ticker' => 'HIBS','stock_name' => 'DIREXION DAILY S&P 500 HIGH'],
[
'ticker' => 'HIE','stock_name' => 'MILLER/HOWARD HIGH INCOME EQ'],
[
'ticker' => 'HIFS','stock_name' => 'HINGHAM INSTITUTION FOR SVGS'],
[
'ticker' => 'HIG','stock_name' => 'HARTFORD FINANCIAL SVCS GRP'],
[
'ticker' => 'HIGA','stock_name' => 'HIG ACQUISITION CORP-CLASS A'],
[
'ticker' => 'HIGA=','stock_name' => 'HIG ACQUISITION CORP'],
[
'ticker' => 'HIHO','stock_name' => 'HIGHWAY HOLDINGS LTD'],
[
'ticker' => 'HII','stock_name' => 'HUNTINGTON INGALLS INDUSTRIE'],
[
'ticker' => 'HIII','stock_name' => 'HUDSON EXECUTIVE INVESTMEN-A'],
[
'ticker' => 'HIIIU','stock_name' => 'HUDSON EXECUTIV INV CORP III'],
[
'ticker' => 'HIL','stock_name' => 'HILL INTERNATIONAL INC'],
[
'ticker' => 'HIMS','stock_name' => 'HIMS & HERS HEALTH INC'],
[
'ticker' => 'HIMX','stock_name' => 'HIMAX TECHNOLOGIES INC-ADR'],
[
'ticker' => 'HIO','stock_name' => 'WESTERN ASSET HI INC OPPORT'],
[
'ticker' => 'HIPO','stock_name' => 'HIPPO HOLDINGS INC'],
[
'ticker' => 'HIPS','stock_name' => 'GRANITESHARES HIPS US HIGH I'],
[
'ticker' => 'HITI','stock_name' => 'HIGH TIDE INC'],
[
'ticker' => 'HIVE','stock_name' => 'HIVE BLOCKCHAIN TECHNOLOGIES'],
[
'ticker' => 'HIW','stock_name' => 'HIGHWOODS PROPERTIES INC'],
[
'ticker' => 'HIX','stock_name' => 'WESTERN ASSET HIGH INC II'],
[
'ticker' => 'HJEN','stock_name' => 'DIREXION HYDROGEN ETF'],
[
'ticker' => 'HJPX','stock_name' => 'ISHARES CUR HEDG JPX-NIK 400'],
[
'ticker' => 'HKIB','stock_name' => 'AMTD INTERNATIONAL INC -ADR'],
[
'ticker' => 'HKND','stock_name' => 'HUMANKIND US STOCK ETF'],
[
'ticker' => 'HL','stock_name' => 'HECLA MINING CO'],
[
'ticker' => 'HLAH','stock_name' => 'HAMILTON LANE ALL-CLASS A'],
[
'ticker' => 'HLAHU','stock_name' => 'HAMILTON LANE ALLIANCE HOLDI'],
[
'ticker' => 'HLAL','stock_name' => 'WAHED FTSE USA SHARIAH ETF'],
[
'ticker' => 'HLBZ','stock_name' => 'HELBIZ INC'],
[
'ticker' => 'HLF','stock_name' => 'HERBALIFE NUTRITION LTD'],
[
'ticker' => 'HLG','stock_name' => 'HAILIANG EDUCATION GROUP-ADR'],
[
'ticker' => 'HLGE','stock_name' => 'HARTFORD LONGEVITY ECONOMY E'],
[
'ticker' => 'HLI','stock_name' => 'HOULIHAN LOKEY INC'],
[
'ticker' => 'HLIO','stock_name' => 'HELIOS TECHNOLOGIES INC'],
[
'ticker' => 'HLIT','stock_name' => 'HARMONIC INC'],
[
'ticker' => 'HLLY','stock_name' => 'HOLLEY INC'],
[
'ticker' => 'HLMN','stock_name' => 'HILLMAN SOLUTIONS CORP'],
[
'ticker' => 'HLNE','stock_name' => 'HAMILTON LANE INC-CLASS A'],
[
'ticker' => 'HLT','stock_name' => 'HILTON WORLDWIDE HOLDINGS IN'],
[
'ticker' => 'HLTH','stock_name' => 'CUE HEALTH INC'],
[
'ticker' => 'HLX','stock_name' => 'HELIX ENERGY SOLUTIONS GROUP'],
[
'ticker' => 'HLXA','stock_name' => 'HELIX ACQUISITION CORP-A'],
[
'ticker' => 'HMC','stock_name' => 'HONDA MOTOR CO LTD-SPONS ADR'],
[
'ticker' => 'HMCO','stock_name' => 'HUMANCO ACQUISITION COR-CL A'],
[
'ticker' => 'HMCOU','stock_name' => 'HUMANCO ACQUISITION CORP'],
[
'ticker' => 'HMG','stock_name' => 'HMG COURTLAND PROPERTIES'],
[
'ticker' => 'HMHC','stock_name' => 'HOUGHTON MIFFLIN HARCOURT CO'],
[
'ticker' => 'HMLP','stock_name' => 'HOEGH LNG PARTNERS LP'],
[
'ticker' => 'HMN','stock_name' => 'HORACE MANN EDUCATORS'],
[
'ticker' => 'HMNF','stock_name' => 'HMN FINANCIAL INC'],
[
'ticker' => 'HMOP','stock_name' => 'HARTFORD MUNI OPPORTUNITY ET'],
[
'ticker' => 'HMPT','stock_name' => 'HOME POINT CAPITAL INC'],
[
'ticker' => 'HMST','stock_name' => 'HOMESTREET INC'],
[
'ticker' => 'HMTV','stock_name' => 'HEMISPHERE MEDIA GROUP INC'],
[
'ticker' => 'HMY','stock_name' => 'HARMONY GOLD MNG-SPON ADR'],
[
'ticker' => 'HNDL','stock_name' => 'NASDAQ 7 HANDL INDEX ETF'],
[
'ticker' => 'HNGR','stock_name' => 'HANGER INC'],
[
'ticker' => 'HNI','stock_name' => 'HNI CORP'],
[
'ticker' => 'HNNA','stock_name' => 'HENNESSY ADVISORS INC'],
[
'ticker' => 'HNP','stock_name' => 'HUANENG POWER INTL-SPONS ADR'],
[
'ticker' => 'HNRG','stock_name' => 'HALLADOR ENERGY CO'],
[
'ticker' => 'HNST','stock_name' => 'HONEST CO INC/THE'],
[
'ticker' => 'HNW','stock_name' => 'PIONEER DIVERSIFIED HIGH INC'],
[
'ticker' => 'HOFT','stock_name' => 'HOOKER FURNISHINGS CORP'],
[
'ticker' => 'HOFV','stock_name' => 'HALL OF FAME RESORT & ENTERT'],
[
'ticker' => 'HOG','stock_name' => 'HARLEY-DAVIDSON INC'],
[
'ticker' => 'HOLD','stock_name' => 'ADVISORSHARES NORTH SQUARE M'],
[
'ticker' => 'HOLI','stock_name' => 'HOLLYSYS AUTOMATION TECHNOLO'],
[
'ticker' => 'HOLX','stock_name' => 'HOLOGIC INC'],
[
'ticker' => 'HOM','stock_name' => 'LIFEGOAL HOME DOWN PAYMENT I'],
[
'ticker' => 'HOMB','stock_name' => 'HOME BANCSHARES INC'],
[
'ticker' => 'HOMZ','stock_name' => 'HOYA CAPITAL HOUSING ETF'],
[
'ticker' => 'HON','stock_name' => 'HONEYWELL INTERNATIONAL INC'],
[
'ticker' => 'HONE','stock_name' => 'HARBORONE BANCORP INC'],
[
'ticker' => 'HOOD','stock_name' => 'ROBINHOOD MARKETS INC - A'],
[
'ticker' => 'HOOK','stock_name' => 'HOOKIPA PHARMA INC'],
[
'ticker' => 'HOPE','stock_name' => 'HOPE BANCORP INC'],
[
'ticker' => 'HOTH','stock_name' => 'HOTH THERAPEUTICS INC'],
[
'ticker' => 'HOV','stock_name' => 'HOVNANIAN ENTERPRISES-A'],
[
'ticker' => 'HOWL','stock_name' => 'WEREWOLF THERAPEUTICS INC'],
[
'ticker' => 'HP','stock_name' => 'HELMERICH & PAYNE'],
[
'ticker' => 'HPE','stock_name' => 'HEWLETT PACKARD ENTERPRISE'],
[
'ticker' => 'HPF','stock_name' => 'JOHN HANCOCK PFD INCOME II'],
[
'ticker' => 'HPI','stock_name' => 'JOHN HANCOCK PFD INCOME FD'],
[
'ticker' => 'HPK','stock_name' => 'HIGHPEAK ENERGY INC'],
[
'ticker' => 'HPLTU','stock_name' => 'HOME PLATE ACQUISITION CORP'],
[
'ticker' => 'HPP','stock_name' => 'HUDSON PACIFIC PROPERTIES IN'],
[
'ticker' => 'HPQ','stock_name' => 'HP INC'],
[
'ticker' => 'HPS','stock_name' => 'JOHN HANCOCK PFD INCOME III'],
[
'ticker' => 'HPX','stock_name' => 'HPX CORP-A'],
[
'ticker' => 'HPX=','stock_name' => 'HPX CORP'],
[
'ticker' => 'HQH','stock_name' => 'TEKLA HEALTHCARE INVESTORS'],
[
'ticker' => 'HQI','stock_name' => 'HIREQUEST INC'],
[
'ticker' => 'HQL','stock_name' => 'TEKLA LIFE SCIENCES INVESTOR'],
[
'ticker' => 'HQY','stock_name' => 'HEALTHEQUITY INC'],
[
'ticker' => 'HR','stock_name' => 'HEALTHCARE REALTY TRUST INC'],
[
'ticker' => 'HRB','stock_name' => 'H&R BLOCK INC'],
[
'ticker' => 'HRC','stock_name' => 'HILL-ROM HOLDINGS INC'],
[
'ticker' => 'HRI','stock_name' => 'HERC HOLDINGS INC'],
[
'ticker' => 'HRL','stock_name' => 'HORMEL FOODS CORP'],
[
'ticker' => 'HRMY','stock_name' => 'HARMONY BIOSCIENCES HOLDINGS'],
[
'ticker' => 'HROW','stock_name' => 'HARROW HEALTH INC'],
[
'ticker' => 'HRT','stock_name' => 'HIRERIGHT HOLDINGS CORP'],
[
'ticker' => 'HRTG','stock_name' => 'HERITAGE INSURANCE HOLDINGS'],
[
'ticker' => 'HRTX','stock_name' => 'HERON THERAPEUTICS INC'],
[
'ticker' => 'HRZN','stock_name' => 'HORIZON TECHNOLOGY FINANCE C'],
[
'ticker' => 'HSAQ','stock_name' => 'HEALTH SCIENCES ACQUISITIONS'],
[
'ticker' => 'HSBC','stock_name' => 'HSBC HOLDINGS PLC-SPONS ADR'],
[
'ticker' => 'HSC','stock_name' => 'HARSCO CORP'],
[
'ticker' => 'HSCZ','stock_name' => 'ISHARES CUR HDG MSCI EAFE SM'],
[
'ticker' => 'HSDT','stock_name' => 'HELIUS MEDICAL TECHNOLOGIES'],
[
'ticker' => 'HSIC','stock_name' => 'HENRY SCHEIN INC'],
[
'ticker' => 'HSII','stock_name' => 'HEIDRICK & STRUGGLES INTL'],
[
'ticker' => 'HSKA','stock_name' => 'HESKA CORP'],
[
'ticker' => 'HSMV','stock_name' => 'FIRST TRUST HORIZON MANAGED'],
[
'ticker' => 'HSON','stock_name' => 'HUDSON GLOBAL INC'],
[
'ticker' => 'HSRT','stock_name' => 'HARTFORD SHORT DURATION ETF'],
[
'ticker' => 'HST','stock_name' => 'HOST HOTELS & RESORTS INC'],
[
'ticker' => 'HSTM','stock_name' => 'HEALTHSTREAM INC'],
[
'ticker' => 'HSTO','stock_name' => 'HISTOGEN INC'],
[
'ticker' => 'HSUN','stock_name' => 'HARTFORD SUSTAINABLE INC ETF'],
[
'ticker' => 'HSY','stock_name' => 'HERSHEY CO/THE'],
[
'ticker' => 'HT','stock_name' => 'HERSHA HOSPITALITY TRUST'],
[
'ticker' => 'HTA','stock_name' => 'HEALTHCARE TRUST OF AME-CL A'],
[
'ticker' => 'HTAB','stock_name' => 'HARTFORD SCHRODERS TAX AWARE'],
[
'ticker' => 'HTBI','stock_name' => 'HOMETRUST BANCSHARES INC'],
[
'ticker' => 'HTBK','stock_name' => 'HERITAGE COMMERCE CORP'],
[
'ticker' => 'HTBX','stock_name' => 'HEAT BIOLOGICS INC'],
[
'ticker' => 'HTD','stock_name' => 'JOHN HANCOCK T/A DVD INCOME'],
[
'ticker' => 'HTEC','stock_name' => 'ROBO GLOBAL HEALTHCARE TECH'],
[
'ticker' => 'HTGC','stock_name' => 'HERCULES CAPITAL INC'],
[
'ticker' => 'HTGM','stock_name' => 'HTG MOLECULAR DIAGNOSTICS'],
[
'ticker' => 'HTH','stock_name' => 'HILLTOP HOLDINGS INC'],
[
'ticker' => 'HTHT','stock_name' => 'HUAZHU GROUP LTD-ADR'],
[
'ticker' => 'HTLD','stock_name' => 'HEARTLAND EXPRESS INC'],
[
'ticker' => 'HTLF','stock_name' => 'HEARTLAND FINANCIAL USA INC'],
[
'ticker' => 'HTOO','stock_name' => 'FUSION FUEL GREEN PLC-A'],
[
'ticker' => 'HTPA','stock_name' => 'HIGHLAND TRANSCEND PART-CL A'],
[
'ticker' => 'HTPA=','stock_name' => 'HIGHLAND TRANSCEND PARTNERS'],
[
'ticker' => 'HTRB','stock_name' => 'HARTFORD TOTAL RTRN BOND ETF'],
[
'ticker' => 'HTUS','stock_name' => 'HULL TACTICAL US ETF'],
[
'ticker' => 'HTY','stock_name' => 'JOHN HANCOCK TAX-ADVANTAGED'],
[
'ticker' => 'HUBB','stock_name' => 'HUBBELL INC'],
[
'ticker' => 'HUBG','stock_name' => 'HUB GROUP INC-CL A'],
[
'ticker' => 'HUBS','stock_name' => 'HUBSPOT INC'],
[
'ticker' => 'HUDI','stock_name' => 'HUADI INTERNATIONAL GROUP CO'],
[
'ticker' => 'HUGE','stock_name' => 'FSD PHARMA INC-CLASS B'],
[
'ticker' => 'HUGS','stock_name' => 'USHG ACQUISITION CORP-A'],
[
'ticker' => 'HUGS=','stock_name' => 'USHG ACQUISITION CORP'],
[
'ticker' => 'HUIZ','stock_name' => 'HUIZE HOLDING LTD-ADR'],
[
'ticker' => 'HUM','stock_name' => 'HUMANA INC'],
[
'ticker' => 'HUMA','stock_name' => 'HUMACYTE INC'],
[
'ticker' => 'HUN','stock_name' => 'HUNTSMAN CORP'],
[
'ticker' => 'HURC','stock_name' => 'HURCO COMPANIES INC'],
[
'ticker' => 'HURN','stock_name' => 'HURON CONSULTING GROUP INC'],
[
'ticker' => 'HUSA','stock_name' => 'HOUSTON AMERICAN ENERGY CORP'],
[
'ticker' => 'HUSN','stock_name' => 'HUDSON CAPITAL INC'],
[
'ticker' => 'HUSV','stock_name' => 'FT HORIZON MNGD VOL DOM ETF'],
[
'ticker' => 'HUT','stock_name' => 'HUT 8 MINING CORP'],
[
'ticker' => 'HUYA','stock_name' => 'HUYA INC-ADR'],
[
'ticker' => 'HVAL','stock_name' => 'ALPS HILLMAN ACTIVE VALUE ET'],
[
'ticker' => 'HVBC','stock_name' => 'HV BANCORP INC'],
[
'ticker' => 'HVT','stock_name' => 'HAVERTY FURNITURE'],
[
'ticker' => 'HVT.A','stock_name' => 'HAVERTY FURNITURE COS-CL A'],
[
'ticker' => 'HWBK','stock_name' => 'HAWTHORN BANCSHARES INC'],
[
'ticker' => 'HWC','stock_name' => 'HANCOCK WHITNEY CORP'],
[
'ticker' => 'HWEL','stock_name' => 'HEALTHWELL ACQUISITION COR-A'],
[
'ticker' => 'HWELU','stock_name' => 'HEALTHWELL ACQUISITION CORP'],
[
'ticker' => 'HWKN','stock_name' => 'HAWKINS INC'],
[
'ticker' => 'HWKZ=','stock_name' => 'HAWKS ACQUISITION CORP'],
[
'ticker' => 'HWM','stock_name' => 'HOWMET AEROSPACE INC'],
[
'ticker' => 'HX','stock_name' => 'XIAOBAI MAIMAI INC'],
[
'ticker' => 'HXL','stock_name' => 'HEXCEL CORP'],
[
'ticker' => 'HY','stock_name' => 'HYSTER-YALE MATERIALS'],
[
'ticker' => 'HYAC','stock_name' => 'HAYMAKER ACQUISITION CORP-A'],
[
'ticker' => 'HYACU','stock_name' => 'HAYMAKER ACQUISITION CORP'],
[
'ticker' => 'HYB','stock_name' => 'NEW AMERICA HIGH INCOME FUND'],
[
'ticker' => 'HYBB','stock_name' => 'ISHARES BB RATED CORP BOND'],
[
'ticker' => 'HYD','stock_name' => 'VANECK HIGH YIELD MUNI ETF'],
[
'ticker' => 'HYDB','stock_name' => 'ISHARES HIGH YIELD BOND FACT'],
[
'ticker' => 'HYDR','stock_name' => 'GLOBAL X HYDROGEN ETF'],
[
'ticker' => 'HYDW','stock_name' => 'XTRS LOW BETA HI YIELD ETF'],
[
'ticker' => 'HYEM','stock_name' => 'VANECK EMRG MKTS HI YLD'],
[
'ticker' => 'HYFM','stock_name' => 'HYDROFARM HOLDINGS GROUP INC'],
[
'ticker' => 'HYG','stock_name' => 'ISHARES IBOXX HIGH YLD CORP'],
[
'ticker' => 'HYGH','stock_name' => 'ISHARES INT RATE HEDG HY ETF'],
[
'ticker' => 'HYGV','stock_name' => 'FLEXSHARES HIGH YIELD VALUE'],
[
'ticker' => 'HYHG','stock_name' => 'PROSHARES HIGH YIELD INTERES'],
[
'ticker' => 'HYI','stock_name' => 'WESTERN ASSET HIGH YIELD DEF'],
[
'ticker' => 'HYIN','stock_name' => 'WisdomTree Alternative Incom'],
[
'ticker' => 'HYLB','stock_name' => 'XTRACKERS USD HIGH YIELD COR'],
[
'ticker' => 'HYLD','stock_name' => 'HIGH YIELD ETF'],
[
'ticker' => 'HYLN','stock_name' => 'HYLIION HOLDINGS CORP'],
[
'ticker' => 'HYLS','stock_name' => 'FT TACTICAL HIGH YIELD ETF'],
[
'ticker' => 'HYLV','stock_name' => 'IQ S&P HY LOW VOL BOND ETF'],
[
'ticker' => 'HYMB','stock_name' => 'SPDR NUVEEN BLOOMBERG HIGH Y'],
[
'ticker' => 'HYMC','stock_name' => 'HYCROFT MINING HOLDING CORP'],
[
'ticker' => 'HYMU','stock_name' => 'BLACKROCK HIGH YIELD MUNI IN'],
[
'ticker' => 'HYRE','stock_name' => 'HYRECAR INC'],
[
'ticker' => 'HYS','stock_name' => 'PIMCO 0-5 YEAR H/Y CORP BOND'],
[
'ticker' => 'HYT','stock_name' => 'BLACKROCK CORP HI YLD'],
[
'ticker' => 'HYTR','stock_name' => 'CP HIGH YIELD TREND ETF'],
[
'ticker' => 'HYUP','stock_name' => 'XTRS HI BETA HI YIELD ETF'],
[
'ticker' => 'HYW','stock_name' => 'HYWIN HOLDINGS LTD'],
[
'ticker' => 'HYXF','stock_name' => 'ISHARES ESG ADV HIGH YIELD'],
[
'ticker' => 'HYXU','stock_name' => 'ISHARES INTERNATIONAL HIGH Y'],
[
'ticker' => 'HYZD','stock_name' => 'WISDOMTREE INTEREST RATE HED'],
[
'ticker' => 'HYZN','stock_name' => 'HYZON MOTORS INC'],
[
'ticker' => 'HZN','stock_name' => 'HORIZON GLOBAL CORP'],
[
'ticker' => 'HZNP','stock_name' => 'HORIZON THERAPEUTICS PLC'],
[
'ticker' => 'HZO','stock_name' => 'MARINEMAX INC'],
[
'ticker' => 'HZON','stock_name' => 'HORIZON ACQUIS CORP II -CL A'],
[
'ticker' => 'HZON=','stock_name' => 'HORIZON ACQUISITION CORP II'],
[
'ticker' => 'IAA','stock_name' => 'IAA INC'],
[
'ticker' => 'IAC','stock_name' => 'IAC/INTERACTIVECORP'],
[
'ticker' => 'IACB','stock_name' => 'ION ACQUISITION CORP 2 LTD-A'],
[
'ticker' => 'IACB=','stock_name' => 'ION ACQUISITION CORP 2 LTD'],
[
'ticker' => 'IACC','stock_name' => 'ION ACQUISITION CORP 3 LTD-A'],
[
'ticker' => 'IAE','stock_name' => 'VOYA ASIA PAC HI DVD EQ INC'],
[
'ticker' => 'IAF','stock_name' => 'ABERDEEN AUSTRALIA EQUITY FD'],
[
'ticker' => 'IAG','stock_name' => 'IAMGOLD CORP'],
[
'ticker' => 'IAGG','stock_name' => 'ISHARES INTL AGGREGATE BOND'],
[
'ticker' => 'IAI','stock_name' => 'ISHARES U.S. BROKER-DEALERS'],
[
'ticker' => 'IAK','stock_name' => 'ISHARES U.S. INSURANCE ETF'],
[
'ticker' => 'IAPR','stock_name' => 'INNOVATOR INTERNATIONAL DEVE'],
[
'ticker' => 'IART','stock_name' => 'INTEGRA LIFESCIENCES HOLDING'],
[
'ticker' => 'IAS','stock_name' => 'INTEGRAL AD SCIENCE HOLDING'],
[
'ticker' => 'IAT','stock_name' => 'ISHARES US REGIONAL BANKS ET'],
[
'ticker' => 'IAU','stock_name' => 'ISHARES GOLD TRUST'],
[
'ticker' => 'IAUF','stock_name' => 'ISHARES GOLD STRATEGY ETF'],
[
'ticker' => 'IAUM','stock_name' => 'ISHARES GOLD TRUST MICRO'],
[
'ticker' => 'IBA','stock_name' => 'INDUSTRIAS BACHOCO SAB SP AD'],
[
'ticker' => 'IBB','stock_name' => 'ISHARES BIOTECHNOLOGY ETF'],
[
'ticker' => 'IBBJ','stock_name' => 'DEFIANCE NASDAQ JR BIOTECH'],
[
'ticker' => 'IBBQ','stock_name' => 'INVESCO NASDAQ BIOTECH ETF'],
[
'ticker' => 'IBCE','stock_name' => 'ISHARES IBONDS MAR 2023 TERM'],
[
'ticker' => 'IBCP','stock_name' => 'INDEPENDENT BANK CORP - MICH'],
[
'ticker' => 'IBD','stock_name' => 'INSPIRE CORPORATE BOND IMPAC'],
[
'ticker' => 'IBDD','stock_name' => 'ISHARES IBONDS MAR 2023 TERM'],
[
'ticker' => 'IBDM','stock_name' => 'ISHARES IBONDS DEC 2021 TERM'],
[
'ticker' => 'IBDN','stock_name' => 'ISHARES IBONDS DEC 2022 TERM'],
[
'ticker' => 'IBDO','stock_name' => 'ISHARES IBONDS DEC 2023 TERM'],
[
'ticker' => 'IBDP','stock_name' => 'ISHARES IBONDS DEC 2024 TERM'],
[
'ticker' => 'IBDQ','stock_name' => 'ISHARES IBONDS DEC 2025 TERM'],
[
'ticker' => 'IBDR','stock_name' => 'ISHARES IBONDS DEC 2026 TERM'],
[
'ticker' => 'IBDS','stock_name' => 'ISHRS IBNDS DEC 27 CORP ETF'],
[
'ticker' => 'IBDT','stock_name' => 'ISHARES IBONDS DEC 2028 ETF'],
[
'ticker' => 'IBDU','stock_name' => 'ISHARES IBONDS DEC 2029 TERM'],
[
'ticker' => 'IBDV','stock_name' => 'ISHARES IBONDS DEC 2030 CORP'],
[
'ticker' => 'IBDW','stock_name' => 'ISHARES IBONDS DEC 2031 CORP'],
[
'ticker' => 'IBER','stock_name' => 'IBERE PHARMACEUTICALS-A'],
[
'ticker' => 'IBER=','stock_name' => 'IBERE PHARMACEUTICALS'],
[
'ticker' => 'IBEX','stock_name' => 'IBEX LTD'],
[
'ticker' => 'IBHA','stock_name' => 'ISHARES IBONDS 2021 H/Y INC'],
[
'ticker' => 'IBHB','stock_name' => 'ISHARES IBONDS 2022 H/Y INC'],
[
'ticker' => 'IBHC','stock_name' => 'ISHARES IBONDS 2023 H/Y INC'],
[
'ticker' => 'IBHD','stock_name' => 'ISHARES IBONDS 2024 H/Y INC'],
[
'ticker' => 'IBHE','stock_name' => 'ISHARES IBONDS 2025 H/Y INC'],
[
'ticker' => 'IBHF','stock_name' => 'ISHARES IBOND 2026 HY & INC'],
[
'ticker' => 'IBHG','stock_name' => 'ISHARES IBONDS 2027 HY INC'],
[
'ticker' => 'IBIO','stock_name' => 'IBIO INC'],
[
'ticker' => 'IBKR','stock_name' => 'INTERACTIVE BROKERS GRO-CL A'],
[
'ticker' => 'IBM','stock_name' => 'INTL BUSINESS MACHINES CORP'],
[
'ticker' => 'IBMJ','stock_name' => 'ISHARES IBONDS DEC 2021 TERM'],
[
'ticker' => 'IBMK','stock_name' => 'ISHARES IBONDS DEC 2022 TERM'],
[
'ticker' => 'IBML','stock_name' => 'ISHARES DEC 2023 MUNI BD ETF'],
[
'ticker' => 'IBMM','stock_name' => 'ISHARES IBONDS DEC 2024 TERM'],
[
'ticker' => 'IBMN','stock_name' => 'ISHARES IBONDS DEC 2025 TERM'],
[
'ticker' => 'IBMO','stock_name' => 'ISHARES IBONDS DEC 2026 TERM'],
[
'ticker' => 'IBMP','stock_name' => 'ISHARES IBONDS DEC 2027 TERM'],
[
'ticker' => 'IBMQ','stock_name' => 'ISHARES IBONDS DEC 2028 MUNI'],
[
'ticker' => 'IBN','stock_name' => 'ICICI BANK LTD-SPON ADR'],
[
'ticker' => 'IBND','stock_name' => 'SPDR BLOOMBERG INTERNATIONAL'],
[
'ticker' => 'IBOC','stock_name' => 'INTERNATIONAL BANCSHARES CRP'],
[
'ticker' => 'IBP','stock_name' => 'INSTALLED BUILDING PRODUCTS'],
[
'ticker' => 'IBRX','stock_name' => 'IMMUNITYBIO INC'],
[
'ticker' => 'IBTA','stock_name' => 'ISHARES IBONDS DEC 2021 TERM'],
[
'ticker' => 'IBTB','stock_name' => 'ISHARES IBONDS DEC 2022 TERM'],
[
'ticker' => 'IBTD','stock_name' => 'ISHARES IBONDS DEC 2023 TERM'],
[
'ticker' => 'IBTE','stock_name' => 'ISHARES IBONDS DEC 2024 TERM'],
[
'ticker' => 'IBTF','stock_name' => 'ISHARES IBONDS DEC 2025 TERM'],
[
'ticker' => 'IBTG','stock_name' => 'ISHARES IBONDS DEC 2026 TERM'],
[
'ticker' => 'IBTH','stock_name' => 'ISHARES IBONDS DEC 2027 TERM'],
[
'ticker' => 'IBTI','stock_name' => 'ISHARES IBONDS DEC 2028 TERM'],
[
'ticker' => 'IBTJ','stock_name' => 'ISHARES IBONDS DEC 2029 TERM'],
[
'ticker' => 'IBTK','stock_name' => 'ISHARES IBONDS DEC 2030 TREA'],
[
'ticker' => 'IBTL','stock_name' => 'ISHARES IBONDS DEC 2031 TERM'],
[
'ticker' => 'IBTX','stock_name' => 'INDEPENDENT BANK GROUP INC'],
[
'ticker' => 'IBUY','stock_name' => 'AMPLIFY ONLINE RETAIL ETF'],
[
'ticker' => 'ICAD','stock_name' => 'ICAD INC'],
[
'ticker' => 'ICBK','stock_name' => 'COUNTY BANCORP INC'],
[
'ticker' => 'ICCC','stock_name' => 'IMMUCELL CORP'],
[
'ticker' => 'ICCH','stock_name' => 'ICC HOLDINGS INC'],
[
'ticker' => 'ICCM','stock_name' => 'ICECURE MEDICAL LTD'],
[
'ticker' => 'ICD','stock_name' => 'INDEPENDENCE CONTRACT DRILLI'],
[
'ticker' => 'ICE','stock_name' => 'INTERCONTINENTAL EXCHANGE IN'],
[
'ticker' => 'ICF','stock_name' => 'ISHARES COHEN & STEERS REIT'],
[
'ticker' => 'ICFI','stock_name' => 'ICF INTERNATIONAL INC'],
[
'ticker' => 'ICHR','stock_name' => 'ICHOR HOLDINGS LTD'],
[
'ticker' => 'ICL','stock_name' => 'ICL GROUP LTD'],
[
'ticker' => 'ICLK','stock_name' => 'ICLICK INTERACTIVE ASIA-ADR'],
[
'ticker' => 'ICLN','stock_name' => 'ISHARES GLOBAL CLEAN ENERGY'],
[
'ticker' => 'ICLR','stock_name' => 'ICON PLC'],
[
'ticker' => 'ICMB','stock_name' => 'INVESTCORP CREDIT MANAGEMENT'],
[
'ticker' => 'ICNC=','stock_name' => 'ICONIC SPORTS ACQUISITION CO'],
[
'ticker' => 'ICOL','stock_name' => 'ISHARES MSCI COLOMBIA ETF'],
[
'ticker' => 'ICOW','stock_name' => 'PACER DEVELOPED MARKETS INTE'],
[
'ticker' => 'ICPT','stock_name' => 'INTERCEPT PHARMACEUTICALS IN'],
[
'ticker' => 'ICSH','stock_name' => 'BLACKROCK ULTRA SHORT-TERM B'],
[
'ticker' => 'ICUI','stock_name' => 'ICU MEDICAL INC'],
[
'ticker' => 'ICVT','stock_name' => 'ISHARES CONVERTIBLE BOND ETF'],
[
'ticker' => 'ICVX','stock_name' => 'ICOSAVAX INC'],
[
'ticker' => 'ID','stock_name' => 'PARTS ID INC'],
[
'ticker' => 'IDA','stock_name' => 'IDACORP INC'],
[
'ticker' => 'IDAT','stock_name' => 'ISHARES CLOUD & 5G TECH ETF'],
[
'ticker' => 'IDBA','stock_name' => 'IDEX BIOMETRICS ASA -ADR'],
[
'ticker' => 'IDCC','stock_name' => 'INTERDIGITAL INC'],
[
'ticker' => 'IDE','stock_name' => 'VOYA INFRASTRUCTURE INDUSTRI'],
[
'ticker' => 'IDEV','stock_name' => 'ISHARES CORE MSCI DEV MKTS'],
[
'ticker' => 'IDEX','stock_name' => 'IDEANOMICS INC'],
[
'ticker' => 'IDHD','stock_name' => 'INVESCO S&P INTERNATIONAL DE'],
[
'ticker' => 'IDHQ','stock_name' => 'INVESCO S&P INTERNATIONAL DE'],
[
'ticker' => 'IDIV','stock_name' => 'METAURUS US EQUITY CUMULATIV'],
[
'ticker' => 'IDLB','stock_name' => 'INVESCO FTSE INTERNATIONAL L'],
[
'ticker' => 'IDLV','stock_name' => 'INVESCO S&P INTERNATIONAL DE'],
[
'ticker' => 'IDME','stock_name' => 'INTERNATIONAL DRAWDOWN MANAG'],
[
'ticker' => 'IDMO','stock_name' => 'INVESCO S&P INTERNATIONAL DE'],
[
'ticker' => 'IDN','stock_name' => 'INTELLICHECK INC'],
[
'ticker' => 'IDNA','stock_name' => 'ISHARES GEN-IMMUNOLOGY HLTH'],
[
'ticker' => 'IDOG','stock_name' => 'ALPS INTERNATIONAL SECTOR DI'],
[
'ticker' => 'IDRA','stock_name' => 'IDERA PHARMACEUTICALS INC'],
[
'ticker' => 'IDRV','stock_name' => 'ISHARES SELF-DRIVING EV&TECH'],
[
'ticker' => 'IDT','stock_name' => 'IDT CORP-CLASS B'],
[
'ticker' => 'IDU','stock_name' => 'ISHARES US UTILITIES ETF'],
[
'ticker' => 'IDV','stock_name' => 'ISHARES INTERNATIONAL SELECT'],
[
'ticker' => 'IDW','stock_name' => 'IDW MEDIA HOLDINGS INC-B'],
[
'ticker' => 'IDX','stock_name' => 'VANECK INDONESIA INDEX ETF'],
[
'ticker' => 'IDXX','stock_name' => 'IDEXX LABORATORIES INC'],
[
'ticker' => 'IDYA','stock_name' => 'IDEAYA BIOSCIENCES INC'],
[
'ticker' => 'IEA','stock_name' => 'INFRASTRUCTURE AND ENERGY AL'],
[
'ticker' => 'IECS','stock_name' => 'ISHARES EVOLVED US CONSUMER'],
[
'ticker' => 'IEDI','stock_name' => 'ISHARES EVOLVED US DISCRETIO'],
[
'ticker' => 'IEF','stock_name' => 'ISHARES 7-10 YEAR TREASURY B'],
[
'ticker' => 'IEFA','stock_name' => 'ISHARES CORE MSCI EAFE ETF'],
[
'ticker' => 'IEFN','stock_name' => 'ISHARES EVOLVED US FINANCIAL'],
[
'ticker' => 'IEHS','stock_name' => 'ISHARES EVOLVED US HEALTHCAR'],
[
'ticker' => 'IEI','stock_name' => 'ISHARES 3-7 YEAR TREASURY BO'],
[
'ticker' => 'IEIH','stock_name' => 'ISHARES EVOLVED US INNOVATIV'],
[
'ticker' => 'IEME','stock_name' => 'ISHARES EVOLVED US MEDIA AND'],
[
'ticker' => 'IEMG','stock_name' => 'ISHARES CORE MSCI EMERGING'],
[
'ticker' => 'IEO','stock_name' => 'ISHARES U.S. OIL & GAS EXPLO'],
[
'ticker' => 'IEP','stock_name' => 'ICAHN ENTERPRISES LP'],
[
'ticker' => 'IESC','stock_name' => 'IES HOLDINGS INC'],
[
'ticker' => 'IETC','stock_name' => 'ISHARES EVOLVED US TECHNOLOG'],
[
'ticker' => 'IEUR','stock_name' => 'ISHARES CORE MSCI EUROPE'],
[
'ticker' => 'IEUS','stock_name' => 'ISHARES MSCI EUROPE SMALL-CA'],
[
'ticker' => 'IEV','stock_name' => 'ISHARES EUROPE ETF'],
[
'ticker' => 'IEX','stock_name' => 'IDEX CORP'],
[
'ticker' => 'IEZ','stock_name' => 'ISHARES U.S. OIL EQUIPMENT &'],
[
'ticker' => 'IFBD','stock_name' => 'INFOBIRD CO LTD'],
[
'ticker' => 'IFED','stock_name' => 'ETRACS IFED INDEX ETN'],
[
'ticker' => 'IFF','stock_name' => 'INTL FLAVORS & FRAGRANCES'],
[
'ticker' => 'IFGL','stock_name' => 'ISHARES INTERNATIONAL DEVELO'],
[
'ticker' => 'IFIT','stock_name' => 'IFIT HEALTH & FITNESS INC-A'],
[
'ticker' => 'IFMK','stock_name' => 'IFRESH INC'],
[
'ticker' => 'IFN','stock_name' => 'INDIA FUND INC'],
[
'ticker' => 'IFRA','stock_name' => 'ISHARES US INFRASTRUCTURE'],
[
'ticker' => 'IFRX','stock_name' => 'INFLARX NV'],
[
'ticker' => 'IFS','stock_name' => 'INTERCORP FINANCIAL SERVICES'],
[
'ticker' => 'IFV','stock_name' => 'FIRST TRUST DW FOCUS 5 INTL'],
[
'ticker' => 'IG','stock_name' => 'PRINCIPAL INVESTMENT GRADE'],
[
'ticker' => 'IGA','stock_name' => 'VOYA GLOBAL ADVANTAGE AND PR'],
[
'ticker' => 'IGAC','stock_name' => 'IG ACQUISITION CORP-CLASS A'],
[
'ticker' => 'IGACU','stock_name' => 'IG ACQUISITION CORP'],
[
'ticker' => 'IGBH','stock_name' => 'ISHARES INTEREST RATE HEDGED'],
[
'ticker' => 'IGC','stock_name' => 'INDIA GLOBALIZATION CAPITAL'],
[
'ticker' => 'IGD','stock_name' => 'VOYA GLBL EQTY DVD & PRM OPP'],
[
'ticker' => 'IGE','stock_name' => 'ISHARES NORTH AMERICAN NATUR'],
[
'ticker' => 'IGEB','stock_name' => 'ISHARES INVESTMENT GRADE BON'],
[
'ticker' => 'IGF','stock_name' => 'ISHARES GLOBAL INFRASTRUCTUR'],
[
'ticker' => 'IGHG','stock_name' => 'PROSHARES IG HEDGED'],
[
'ticker' => 'IGI','stock_name' => 'WESTERN ASSET INV GRA DEF OP'],
[
'ticker' => 'IGIB','stock_name' => 'ISHARES 5-10Y INV GRADE CORP'],
[
'ticker' => 'IGIC','stock_name' => 'INTERNATIONAL GENERAL INSURA'],
[
'ticker' => 'IGLB','stock_name' => 'ISHARES 10+ YEAR INV GR CORP'],
[
'ticker' => 'IGLD','stock_name' => 'FT CBOE VEST GOLD STRATEGY T'],
[
'ticker' => 'IGM','stock_name' => 'ISHARES EXPANDED TECH SECTOR'],
[
'ticker' => 'IGMS','stock_name' => 'IGM BIOSCIENCES INC'],
[
'ticker' => 'IGN','stock_name' => 'ISHARES NORTH AMERICAN TECH-'],
[
'ticker' => 'IGNY','stock_name' => 'IGNYTE ACQUISITION CORP'],
[
'ticker' => 'IGNYU','stock_name' => 'IGNYTE ACQUISITION CORP'],
[
'ticker' => 'IGOV','stock_name' => 'ISHARES INTERNATIONAL TREASU'],
[
'ticker' => 'IGR','stock_name' => 'CBRE GLOBAL REAL ESTATE INCO'],
[
'ticker' => 'IGRO','stock_name' => 'ISHARES INTL DIV GROWTH ETF'],
[
'ticker' => 'IGSB','stock_name' => 'ISHARES 1-5Y INV GRADE CORP'],
[
'ticker' => 'IGT','stock_name' => 'INTERNATIONAL GAME TECHNOLOG'],
[
'ticker' => 'IGV','stock_name' => 'ISHARES EXPANDED TECH-SOFTWA'],
[
'ticker' => 'IH','stock_name' => 'IHUMAN INC'],
[
'ticker' => 'IHAK','stock_name' => 'ISHARES CYBERSECURITY & TECH'],
[
'ticker' => 'IHC','stock_name' => 'INDEPENDENCE HOLDING CO'],
[
'ticker' => 'IHD','stock_name' => 'VOYA EMRG MRKTS HI INC DVD'],
[
'ticker' => 'IHDG','stock_name' => 'WISDOMTREE INTERNATIONAL HED'],
[
'ticker' => 'IHE','stock_name' => 'ISHARES US PHARMACEUTICALS E'],
[
'ticker' => 'IHF','stock_name' => 'ISHARES U.S. HEALTHCARE PROV'],
[
'ticker' => 'IHG','stock_name' => 'INTERCONTINENTAL HOTELS-ADR'],
[
'ticker' => 'IHI','stock_name' => 'ISHARES U.S. MEDICAL DEVICES'],
[
'ticker' => 'IHIT','stock_name' => 'INVESCO HI INC 2023 TRGT TRM'],
[
'ticker' => 'IHRT','stock_name' => 'IHEARTMEDIA INC - CLASS A'],
[
'ticker' => 'IHS','stock_name' => 'IHS HOLDING LTD'],
[
'ticker' => 'IHT','stock_name' => 'INNSUITES HOSPITALITY TRUST'],
[
'ticker' => 'IHTA','stock_name' => 'INVESCO HI INC 2024 TRGT TRM'],
[
'ticker' => 'IHY','stock_name' => 'VANECK INT HIGH YIELD BOND'],
[
'ticker' => 'IHYF','stock_name' => 'INVESCO HIGH YIELD BOND FACT'],
[
'ticker' => 'IIAC','stock_name' => 'INVESTINDUSTRIAL ACQ-CLASS A'],
[
'ticker' => 'IIAC=','stock_name' => 'INVESTINDUSTRIAL ACQUISITION'],
[
'ticker' => 'IIF','stock_name' => 'MORGAN STANLEY INDIA INVEST'],
[
'ticker' => 'IIGD','stock_name' => 'INVESCO INV GRADE DEFENSIVE'],
[
'ticker' => 'IIGV','stock_name' => 'INVESCO INVEST GRADE VALUE'],
[
'ticker' => 'III','stock_name' => 'INFORMATION SERVICES GROUP'],
[
'ticker' => 'IIII','stock_name' => 'INSU ACQUISITION CORP III-A'],
[
'ticker' => 'IIIIU','stock_name' => 'INSU ACQUISITION CORP III'],
[
'ticker' => 'IIIN','stock_name' => 'INSTEEL INDUSTRIES INC'],
[
'ticker' => 'IIIV','stock_name' => 'I3 VERTICALS INC-CLASS A'],
[
'ticker' => 'IIM','stock_name' => 'INVESCO VALUE MUNICIPAL INCO'],
[
'ticker' => 'IIN','stock_name' => 'INTRICON CORP'],
[
'ticker' => 'IINN','stock_name' => 'INSPIRA TECHNOLOGIES OXY BHN'],
[
'ticker' => 'IIPR','stock_name' => 'INNOVATIVE INDUSTRIAL PROPER'],
[
'ticker' => 'IIVI','stock_name' => 'II-VI INC'],
[
'ticker' => 'IJAN','stock_name' => 'INNOVATOR INTERNATIONAL DEVE'],
[
'ticker' => 'IJH','stock_name' => 'ISHARES CORE S&P MIDCAP ETF'],
[
'ticker' => 'IJJ','stock_name' => 'ISHARES S&P MID-CAP 400 VALU'],
[
'ticker' => 'IJK','stock_name' => 'ISHARES S&P MID-CAP 400 GROW'],
[
'ticker' => 'IJR','stock_name' => 'ISHARES CORE S&P SMALL-CAP E'],
[
'ticker' => 'IJS','stock_name' => 'ISHARES S&P SMALL-CAP 600 VA'],
[
'ticker' => 'IJT','stock_name' => 'ISHARES S&P SMALL-CAP 600 GR'],
[
'ticker' => 'IJUL','stock_name' => 'INNOVATOR INTERNATIONAL DEVE'],
[
'ticker' => 'IKNA','stock_name' => 'IKENA ONCOLOGY INC'],
[
'ticker' => 'IKNX','stock_name' => 'IKONICS CORP'],
[
'ticker' => 'IKT','stock_name' => 'INHIBIKASE THERAPEUTICS INC'],
[
'ticker' => 'ILCB','stock_name' => 'ISHARES MORNINGSTAR U.S. EQU'],
[
'ticker' => 'ILCG','stock_name' => 'ISHARES MORNINGSTAR GROWTH E'],
[
'ticker' => 'ILCV','stock_name' => 'ISHARES MORNINGSTAR VALUE ET'],
[
'ticker' => 'ILDR','stock_name' => 'FIRST TRUST INNOVATION LEADE'],
[
'ticker' => 'ILF','stock_name' => 'ISHARES LATIN AMERICA 40 ETF'],
[
'ticker' => 'ILMN','stock_name' => 'ILLUMINA INC'],
[
'ticker' => 'ILPT','stock_name' => 'INDUSTRIAL LOGISTICS PROPERT'],
[
'ticker' => 'ILTB','stock_name' => 'ISHARES CORE 10+ YEAR USD BO'],
[
'ticker' => 'IMAB','stock_name' => 'I-MAB-SPONSORED ADR'],
[
'ticker' => 'IMAC','stock_name' => 'IMAC HOLDINGS INC'],
[
'ticker' => 'IMAQ','stock_name' => 'INTERNATIONAL MEDIA ACQ-A'],
[
'ticker' => 'IMAQR','stock_name' => 'INTERNATIONAL MEDIA ACQ-RTS'],
[
'ticker' => 'IMAQU','stock_name' => 'INTERNATIONAL MEDIA ACQUISIT'],
[
'ticker' => 'IMAX','stock_name' => 'IMAX CORP'],
[
'ticker' => 'IMBI','stock_name' => 'IMEDIA BRANDS INC'],
[
'ticker' => 'IMCB','stock_name' => 'ISHARES MORNINGSTAR MID-CAP'],
[
'ticker' => 'IMCC','stock_name' => 'IM CANNABIS CORP'],
[
'ticker' => 'IMCG','stock_name' => 'ISHARES MORNINGSTAR MID-CAP'],
[
'ticker' => 'IMCR','stock_name' => 'IMMUNOCORE HOLDINGS PLC-ADR'],
[
'ticker' => 'IMCV','stock_name' => 'ISHARES MORNINGSTAR MID-CAP'],
[
'ticker' => 'IMFL','stock_name' => 'INVESCO INT DVLP DYN MULTI'],
[
'ticker' => 'IMGN','stock_name' => 'IMMUNOGEN INC'],
[
'ticker' => 'IMGO','stock_name' => 'IMAGO BIOSCIENCES INC'],
[
'ticker' => 'IMH','stock_name' => 'IMPAC MORTGAGE HOLDINGS INC'],
[
'ticker' => 'IMKTA','stock_name' => 'INGLES MARKETS INC-CLASS A'],
[
'ticker' => 'IMLP','stock_name' => 'IPATH S&P MLP ETN'],
[
'ticker' => 'IMMP','stock_name' => 'IMMUTEP LTD-SP ADR'],
[
'ticker' => 'IMMR','stock_name' => 'IMMERSION CORPORATION'],
[
'ticker' => 'IMNM','stock_name' => 'IMMUNOME INC'],
[
'ticker' => 'IMO','stock_name' => 'IMPERIAL OIL LTD'],
[
'ticker' => 'IMOM','stock_name' => 'ALPHA INTL QUANT MOM ETF'],
[
'ticker' => 'IMOS','stock_name' => 'CHIPMOS TECHNOLOGIES INC-ADR'],
[
'ticker' => 'IMPL','stock_name' => 'IMPEL NEUROPHARMA INC'],
[
'ticker' => 'IMPX','stock_name' => 'AEA-BRIDGES IMPACT CORP-CL A'],
[
'ticker' => 'IMPX=','stock_name' => 'AEA-BRIDGES IMPACT CORP'],
[
'ticker' => 'IMRA','stock_name' => 'IMARA INC'],
[
'ticker' => 'IMRN','stock_name' => 'IMMURON LTD-SPON ADR'],
[
'ticker' => 'IMRX','stock_name' => 'IMMUNEERING CORP - CLASS A'],
[
'ticker' => 'IMTB','stock_name' => 'ISHARES CORE 5-10 YEAR USD'],
[
'ticker' => 'IMTE','stock_name' => 'INTEGRATED MEDIA TECHNOLOGY'],
[
'ticker' => 'IMTM','stock_name' => 'ISHARES MSCI INTL MOMENTUM F'],
[
'ticker' => 'IMTX','stock_name' => 'IMMATICS NV'],
[
'ticker' => 'IMUX','stock_name' => 'IMMUNIC INC'],
[
'ticker' => 'IMV','stock_name' => 'IMV INC'],
[
'ticker' => 'IMVT','stock_name' => 'IMMUNOVANT INC'],
[
'ticker' => 'IMXI','stock_name' => 'INTERNATIONAL MONEY EXPRESS'],
[
'ticker' => 'INAB','stock_name' => 'IN8BIO INC'],
[
'ticker' => 'INAQ','stock_name' => 'INSIGHT ACQUISITION CORP-A'],
[
'ticker' => 'INAQ=','stock_name' => 'INSIGHT ACQUISITION CORP'],
[
'ticker' => 'INBK','stock_name' => 'FIRST INTERNET BANCORP'],
[
'ticker' => 'INBX','stock_name' => 'INHIBRX INC'],
[
'ticker' => 'INCO','stock_name' => 'COLUMBIA INDIA CONSUMER ETF'],
[
'ticker' => 'INCR','stock_name' => 'INTERCURE LTD'],
[
'ticker' => 'INCY','stock_name' => 'INCYTE CORP'],
[
'ticker' => 'INDA','stock_name' => 'ISHARES MSCI INDIA ETF'],
[
'ticker' => 'INDB','stock_name' => 'INDEPENDENT BANK CORP/MA'],
[
'ticker' => 'INDF','stock_name' => 'NIFTY INDIA FINANCIALS ETF'],
[
'ticker' => 'INDI','stock_name' => 'INDIE SEMICONDUCTOR INC-A'],
[
'ticker' => 'INDL','stock_name' => 'DIREXION DAILY MSCI INDIA BU'],
[
'ticker' => 'INDO','stock_name' => 'INDONESIA ENERGY CORP LTD'],
[
'ticker' => 'INDP','stock_name' => 'INDAPTUS THERAPEUTICS INC'],
[
'ticker' => 'INDS','stock_name' => 'PACER BENCHMARK INDUSTRIAL'],
[
'ticker' => 'INDT','stock_name' => 'INDUS REALTY TRUST INC'],
[
'ticker' => 'INDY','stock_name' => 'ISHARES INDIA 50 ETF'],
[
'ticker' => 'INFA','stock_name' => 'INFORMATICA INC - CLASS A'],
[
'ticker' => 'INFI','stock_name' => 'INFINITY PHARMACEUTICALS INC'],
[
'ticker' => 'INFL','stock_name' => 'HORIZON KINETICS INFL BENEF'],
[
'ticker' => 'INFN','stock_name' => 'INFINERA CORP'],
[
'ticker' => 'INFO','stock_name' => 'IHS MARKIT LTD'],
[
'ticker' => 'INFR','stock_name' => 'LEGG MASON GLOBAL INFRASTR'],
[
'ticker' => 'INFU','stock_name' => 'INFUSYSTEM HOLDINGS INC'],
[
'ticker' => 'INFY','stock_name' => 'INFOSYS LTD-SP ADR'],
[
'ticker' => 'ING','stock_name' => 'ING GROEP N.V.-SPONSORED ADR'],
[
'ticker' => 'INGN','stock_name' => 'INOGEN INC'],
[
'ticker' => 'INGR','stock_name' => 'INGREDION INC'],
[
'ticker' => 'INKA','stock_name' => 'KLUDEIN I ACQUISITION CORP-A'],
[
'ticker' => 'INKAU','stock_name' => 'KLUDEIN I ACQUISITION CORP'],
[
'ticker' => 'INKM','stock_name' => 'SPDR SSGA INCOME ALLOCATION'],
[
'ticker' => 'INKT','stock_name' => 'MINK THERAPEUTICS INC'],
[
'ticker' => 'INM','stock_name' => 'INMED PHARMACEUTICALS INC'],
[
'ticker' => 'INMB','stock_name' => 'INMUNE BIO INC'],
[
'ticker' => 'INMD','stock_name' => 'INMODE LTD'],
[
'ticker' => 'INMU','stock_name' => 'BLACKROCK INTER MUNI INC BND'],
[
'ticker' => 'INN','stock_name' => 'SUMMIT HOTEL PROPERTIES INC'],
[
'ticker' => 'INNV','stock_name' => 'INNOVAGE HOLDING CORP'],
[
'ticker' => 'INO','stock_name' => 'INOVIO PHARMACEUTICALS INC'],
[
'ticker' => 'INOD','stock_name' => 'INNODATA INC'],
[
'ticker' => 'INOV','stock_name' => 'INOVALON HOLDINGS INC - A'],
[
'ticker' => 'INPX','stock_name' => 'INPIXON'],
[
'ticker' => 'INS','stock_name' => 'INTELLIGENT SYSTEMS CORP'],
[
'ticker' => 'INSE','stock_name' => 'INSPIRED ENTERTAINMENT INC'],
[
'ticker' => 'INSG','stock_name' => 'INSEEGO CORP'],
[
'ticker' => 'INSI','stock_name' => 'INSIGHT SELECT INCOME FUND'],
[
'ticker' => 'INSM','stock_name' => 'INSMED INC'],
[
'ticker' => 'INSP','stock_name' => 'INSPIRE MEDICAL SYSTEMS INC'],
[
'ticker' => 'INST','stock_name' => 'INSTRUCTURE HOLDINGS INC'],
[
'ticker' => 'INSW','stock_name' => 'INTERNATIONAL SEAWAYS INC'],
[
'ticker' => 'INT','stock_name' => 'WORLD FUEL SERVICES CORP'],
[
'ticker' => 'INTA','stock_name' => 'INTAPP INC'],
[
'ticker' => 'INTC','stock_name' => 'INTEL CORP'],
[
'ticker' => 'INTEU','stock_name' => 'INTEGRAL ACQUISITION CORP 1'],
[
'ticker' => 'INTF','stock_name' => 'ISHARES MSCI INTERNATIONAL M'],
[
'ticker' => 'INTG','stock_name' => 'INTERGROUP CORP'],
[
'ticker' => 'INTT','stock_name' => 'INTEST CORP'],
[
'ticker' => 'INTU','stock_name' => 'INTUIT INC'],
[
'ticker' => 'INTZ','stock_name' => 'INTRUSION INC'],
[
'ticker' => 'INUV','stock_name' => 'INUVO INC'],
[
'ticker' => 'INVA','stock_name' => 'INNOVIVA INC'],
[
'ticker' => 'INVE','stock_name' => 'IDENTIV INC'],
[
'ticker' => 'INVH','stock_name' => 'INVITATION HOMES INC'],
[
'ticker' => 'INVO','stock_name' => 'INVO BIOSCIENCE INC'],
[
'ticker' => 'INVZ','stock_name' => 'INNOVIZ TECHNOLOGIES LTD'],
[
'ticker' => 'INZY','stock_name' => 'INOZYME PHARMA INC'],
[
'ticker' => 'IO','stock_name' => 'ION GEOPHYSICAL CORP'],
[
'ticker' => 'IOACU','stock_name' => 'INNOVATIVE INTERNATIONAL ACQ'],
[
'ticker' => 'IOBT','stock_name' => 'IO BIOTECH INC'],
[
'ticker' => 'IOCT','stock_name' => 'INNOVATOR INT DEV POWER BUFF'],
[
'ticker' => 'IONM','stock_name' => 'ASSURE HOLDINGS CORP'],
[
'ticker' => 'IONQ','stock_name' => 'IONQ INC'],
[
'ticker' => 'IONS','stock_name' => 'IONIS PHARMACEUTICALS INC'],
[
'ticker' => 'IOO','stock_name' => 'ISHARES GLOBAL 100 ETF'],
[
'ticker' => 'IOR','stock_name' => 'INCOME OPP REALTY INVESTORS'],
[
'ticker' => 'IOSP','stock_name' => 'INNOSPEC INC'],
[
'ticker' => 'IOVA','stock_name' => 'IOVANCE BIOTHERAPEUTICS INC'],
[
'ticker' => 'IP','stock_name' => 'INTERNATIONAL PAPER CO'],
[
'ticker' => 'IPA','stock_name' => 'IMMUNOPRECISE ANTIBODIES LTD'],
[
'ticker' => 'IPAC','stock_name' => 'ISHARES CORE MSCI PACIFIC ET'],
[
'ticker' => 'IPAR','stock_name' => 'INTER PARFUMS INC'],
[
'ticker' => 'IPAXU','stock_name' => 'INFLECTION POINT ACQUISITION'],
[
'ticker' => 'IPAY','stock_name' => 'ETFMG PRIME MOBILE PAYMENTS'],
[
'ticker' => 'IPDN','stock_name' => 'PROFESSIONAL DIVERSITY NETWO'],
[
'ticker' => 'IPG','stock_name' => 'INTERPUBLIC GROUP OF COS INC'],
[
'ticker' => 'IPGP','stock_name' => 'IPG PHOTONICS CORP'],
[
'ticker' => 'IPHA','stock_name' => 'INNATE PHARMA SA-SPONS ADR'],
[
'ticker' => 'IPI','stock_name' => 'INTREPID POTASH INC'],
[
'ticker' => 'IPKW','stock_name' => 'INVESCO INTERNATIONAL BUYBAC'],
[
'ticker' => 'IPO','stock_name' => 'RENAISSANCE IPO ETF'],
[
'ticker' => 'IPOD','stock_name' => 'SOCIAL CAPITAL HEDOSOPH- A'],
[
'ticker' => 'IPOD=','stock_name' => 'SOCIAL CAPITAL HEDOSOPHIA HO'],
[
'ticker' => 'IPOF','stock_name' => 'SOCIAL CAPITAL HEDOSOPH VI-A'],
[
'ticker' => 'IPOF=','stock_name' => 'SOCIAL CAPITAL HEDOSOPHIA HO'],
[
'ticker' => 'IPOS','stock_name' => 'RENAISSANCE INTL IPO ETF'],
[
'ticker' => 'IPSC','stock_name' => 'CENTURY THERAPEUTICS INC'],
[
'ticker' => 'IPVA','stock_name' => 'INTERPRIVATE II ACQU-CLASS A'],
[
'ticker' => 'IPVA=','stock_name' => 'INTERPRIVATE II ACQUISITION'],
[
'ticker' => 'IPVF','stock_name' => 'INTERPRIVATE III FINANCIAL-A'],
[
'ticker' => 'IPVF=','stock_name' => 'INTERPRIVATE III FINANCIAL'],
[
'ticker' => 'IPVI','stock_name' => 'INTERPRIVATE IV INFRATECH-A'],
[
'ticker' => 'IPVIU','stock_name' => 'INTERPRIVATE IV INFRATECH'],
[
'ticker' => 'IPW','stock_name' => 'IPOWER INC'],
[
'ticker' => 'IPWR','stock_name' => 'IDEAL POWER INC'],
[
'ticker' => 'IQ','stock_name' => 'IQIYI INC-ADR'],
[
'ticker' => 'IQDE','stock_name' => 'FLEXSHARES-INT QUAL DVD DEFE'],
[
'ticker' => 'IQDF','stock_name' => 'FLEXSHARES-INT QUAL DVD INDE'],
[
'ticker' => 'IQDG','stock_name' => 'WISDOMTREE INTL QLTY DVD GRW'],
[
'ticker' => 'IQDY','stock_name' => 'FLEXSHARES INT QUAL DVD DYN'],
[
'ticker' => 'IQI','stock_name' => 'INVESCO QUALITY MUNI INC TR'],
[
'ticker' => 'IQIN','stock_name' => 'IQ 500 INTERNATIONAL ETF'],
[
'ticker' => 'IQLT','stock_name' => 'ISHARES MSCI INTERNATIONAL Q'],
[
'ticker' => 'IQM','stock_name' => 'FRANKLIN INTELLIGENT MACHINE'],
[
'ticker' => 'IQMDU','stock_name' => 'INTELLIGENT MEDICINE ACQUISI'],
[
'ticker' => 'IQSI','stock_name' => 'IQ CANDRIAM ESG INTERNATIONA'],
[
'ticker' => 'IQSU','stock_name' => 'IQ CANDRIAM ESG US EQUITY ET'],
[
'ticker' => 'IQV','stock_name' => 'IQVIA HOLDINGS INC'],
[
'ticker' => 'IR','stock_name' => 'INGERSOLL-RAND INC'],
[
'ticker' => 'IRBO','stock_name' => 'ISHARES ROBOTICS & ARTIFICIA'],
[
'ticker' => 'IRBT','stock_name' => 'IROBOT CORP'],
[
'ticker' => 'IRCP','stock_name' => 'IRSA PROPIEDADES COMERCI-ADR'],
[
'ticker' => 'IRDM','stock_name' => 'IRIDIUM COMMUNICATIONS INC'],
[
'ticker' => 'IRIX','stock_name' => 'IRIDEX CORP'],
[
'ticker' => 'IRL','stock_name' => 'NEW IRELAND FUND INC'],
[
'ticker' => 'IRM','stock_name' => 'IRON MOUNTAIN INC'],
[
'ticker' => 'IRMD','stock_name' => 'IRADIMED CORP'],
[
'ticker' => 'IRNT','stock_name' => 'IRONNET INC'],
[
'ticker' => 'IROQ','stock_name' => 'IF BANCORP INC'],
[
'ticker' => 'IRS','stock_name' => 'IRSA -SP ADR'],
[
'ticker' => 'IRT','stock_name' => 'INDEPENDENCE REALTY TRUST IN'],
[
'ticker' => 'IRTC','stock_name' => 'IRHYTHM TECHNOLOGIES INC'],
[
'ticker' => 'IRWD','stock_name' => 'IRONWOOD PHARMACEUTICALS INC'],
[
'ticker' => 'IS','stock_name' => 'IRONSOURCE LTD-A'],
[
'ticker' => 'ISAA','stock_name' => 'IRON SPARK I INC-A'],
[
'ticker' => 'ISBC','stock_name' => 'INVESTORS BANCORP INC'],
[
'ticker' => 'ISCB','stock_name' => 'ISHARES MORNINGSTAR SMALL-CA'],
[
'ticker' => 'ISCF','stock_name' => 'ISHARES MSCI INTERNATIONAL S'],
[
'ticker' => 'ISCG','stock_name' => 'ISHARES MORNINGSTAR SMALL-CA'],
[
'ticker' => 'ISCV','stock_name' => 'ISHARES MORNINGSTAR SMALL-CA'],
[
'ticker' => 'ISD','stock_name' => 'PGIM HIGH YIELD BOND FUND'],
[
'ticker' => 'ISDR','stock_name' => 'ISSUER DIRECT CORP'],
[
'ticker' => 'ISDX','stock_name' => 'INVESCO RAFI STRATEGIC DEVE'],
[
'ticker' => 'ISEE','stock_name' => 'IVERIC BIO INC'],
[
'ticker' => 'ISEM','stock_name' => 'INVESCO RAFI STRATEGIC EMERG'],
[
'ticker' => 'ISHG','stock_name' => 'ISHARES -3 YEAR INTERNATIONA'],
[
'ticker' => 'ISIG','stock_name' => 'INSIGNIA SYSTEMS INC'],
[
'ticker' => 'ISLE','stock_name' => 'ISLEWORTH HEALTHCARE ACQUISI'],
[
'ticker' => 'ISMD','stock_name' => 'INSPIRE SMALL/MID CAP IMPACT'],
[
'ticker' => 'ISO','stock_name' => 'ISOPLEXIS CORP'],
[
'ticker' => 'ISOS','stock_name' => 'ISOS ACQUISITION CORP-A'],
[
'ticker' => 'ISOS=','stock_name' => 'ISOS ACQUISITION CORP'],
[
'ticker' => 'ISPC','stock_name' => 'ISPECIMEN INC'],
[
'ticker' => 'ISR','stock_name' => 'ISORAY INC'],
[
'ticker' => 'ISRA','stock_name' => 'VANECK ISRAEL ETF'],
[
'ticker' => 'ISRG','stock_name' => 'INTUITIVE SURGICAL INC'],
[
'ticker' => 'ISSC','stock_name' => 'INNOVATIVE SOLUTIONS & SUPP'],
[
'ticker' => 'ISTB','stock_name' => 'ISHARES CORE 1-5 YEAR USD BO'],
[
'ticker' => 'ISTR','stock_name' => 'INVESTAR HOLDING CORP'],
[
'ticker' => 'ISUN','stock_name' => 'ISUN INC'],
[
'ticker' => 'ISVL','stock_name' => 'ISHARES INTERNATIONAL DEVELO'],
[
'ticker' => 'ISWN','stock_name' => 'AMPLIFY INTERNATIONAL BLACKS'],
[
'ticker' => 'ISZE','stock_name' => 'ISHARES MSCI INTERNATIONAL S'],
[
'ticker' => 'IT','stock_name' => 'GARTNER INC'],
[
'ticker' => 'ITA','stock_name' => 'ISHARES U.S. AEROSPACE & DEF'],
[
'ticker' => 'ITAN','stock_name' => 'SPARKLINE INTANGIBLE VAL ETF'],
[
'ticker' => 'ITB','stock_name' => 'ISHARES U.S. HOME CONSTRUCTI'],
[
'ticker' => 'ITCB','stock_name' => 'ITAU CORPBANCA'],
[
'ticker' => 'ITCI','stock_name' => 'INTRA-CELLULAR THERAPIES INC'],
[
'ticker' => 'ITEQ','stock_name' => 'BLUESTAR ISRAEL TECHNOLOGY E'],
[
'ticker' => 'ITGR','stock_name' => 'INTEGER HOLDINGS CORP'],
[
'ticker' => 'ITHX','stock_name' => 'ITHAX ACQUISITION CORP-A'],
[
'ticker' => 'ITHXU','stock_name' => 'ITHAX ACQUISITION CORP'],
[
'ticker' => 'ITI','stock_name' => 'ITERIS INC'],
[
'ticker' => 'ITIC','stock_name' => 'INVESTORS TITLE CO'],
[
'ticker' => 'ITM','stock_name' => 'VANECK INTERMEDIATE MUNI ETF'],
[
'ticker' => 'ITMR','stock_name' => 'ITAMAR MEDICAL LTD-SPON ADR'],
[
'ticker' => 'ITOS','stock_name' => 'ITEOS THERAPEUTICS INC'],
[
'ticker' => 'ITOT','stock_name' => 'ISHARES CORE S&P TOTAL U.S.'],
[
'ticker' => 'ITP','stock_name' => 'IT TECH PACKAGING INC'],
[
'ticker' => 'ITQ','stock_name' => 'ITIQUIRA ACQUISITION CORP-A'],
[
'ticker' => 'ITQRU','stock_name' => 'ITIQUIRA ACQUISITION CORP'],
[
'ticker' => 'ITRG','stock_name' => 'INTEGRA RESOURCES CORP'],
[
'ticker' => 'ITRI','stock_name' => 'ITRON INC'],
[
'ticker' => 'ITRM','stock_name' => 'ITERUM THERAPEUTICS PLC'],
[
'ticker' => 'ITRN','stock_name' => 'ITURAN LOCATION AND CONTROL'],
[
'ticker' => 'ITT','stock_name' => 'ITT INC'],
[
'ticker' => 'ITUB','stock_name' => 'ITAU UNIBANCO H-SPON PRF ADR'],
[
'ticker' => 'ITW','stock_name' => 'ILLINOIS TOOL WORKS'],
[
'ticker' => 'IUS','stock_name' => 'INVESCO RAFI STRATEGIC US ET'],
[
'ticker' => 'IUSB','stock_name' => 'ISHARES CORE TOTAL BOND ETF'],
[
'ticker' => 'IUSG','stock_name' => 'ISHARES CORE S&P U.S. GROWTH'],
[
'ticker' => 'IUSS','stock_name' => 'INVESCO RAFI STRATEGIC US SM'],
[
'ticker' => 'IUSV','stock_name' => 'ISHARES CORE S&P U.S. VALUE'],
[
'ticker' => 'IVA','stock_name' => 'INVENTIVA SA - ADR'],
[
'ticker' => 'IVAC','stock_name' => 'INTEVAC INC'],
[
'ticker' => 'IVAL','stock_name' => 'ALPHA ARCHI INTL QT VLU ETF'],
[
'ticker' => 'IVAN','stock_name' => 'IVANHOE CAPITAL ACQUISIT-A'],
[
'ticker' => 'IVAN=','stock_name' => 'IVANHOE CAPITAL ACQUISITION'],
[
'ticker' => 'IVC','stock_name' => 'INVACARE CORP'],
[
'ticker' => 'IVDG','stock_name' => 'INVESCO FOCUSED DISCOVERY GR'],
[
'ticker' => 'IVE','stock_name' => 'ISHARES S&P 500 VALUE ETF'],
[
'ticker' => 'IVES','stock_name' => 'WEDBUSH ETFMG GLOBAL CLOUD T'],
[
'ticker' => 'IVH','stock_name' => 'DELAWARE IVY HIGH INC OPP'],
[
'ticker' => 'IVLC','stock_name' => 'INVESCO US LARGE CAP CORE ES'],
[
'ticker' => 'IVLU','stock_name' => 'ISHARES MSCI INTERNATIONAL V'],
[
'ticker' => 'IVOG','stock_name' => 'VANGUARD S&P MID-CAP 400 GRO'],
[
'ticker' => 'IVOL','stock_name' => 'QUADRATIC INT RTE VOL INFL H'],
[
'ticker' => 'IVOO','stock_name' => 'VANGUARD S&P MID-CAP 400 ETF'],
[
'ticker' => 'IVOV','stock_name' => 'VANGUARD S&P MID-CAP 400 VAL'],
[
'ticker' => 'IVR','stock_name' => 'INVESCO MORTGAGE CAPITAL'],
[
'ticker' => 'IVRA','stock_name' => 'INVESCO REAL ASSETS ESG ETF'],
[
'ticker' => 'IVSG','stock_name' => 'INVESCO SELECT GROWTH ETF'],
[
'ticker' => 'IVT','stock_name' => 'INVENTRUST PROPERTIES CORP'],
[
'ticker' => 'IVV','stock_name' => 'ISHARES CORE S&P 500 ETF'],
[
'ticker' => 'IVW','stock_name' => 'ISHARES S&P 500 GROWTH ETF'],
[
'ticker' => 'IVZ','stock_name' => 'INVESCO LTD'],
[
'ticker' => 'IWB','stock_name' => 'ISHARES RUSSELL 1000 ETF'],
[
'ticker' => 'IWC','stock_name' => 'ISHARES MICRO-CAP ETF'],
[
'ticker' => 'IWD','stock_name' => 'ISHARES RUSSELL 1000 VALUE E'],
[
'ticker' => 'IWDL','stock_name' => 'ETRACS 2X VALUE FACTR TR'],
[
'ticker' => 'IWF','stock_name' => 'ISHARES RUSSELL 1000 GROWTH'],
[
'ticker' => 'IWFH','stock_name' => 'ISHARES VIRTUAL WORK & LIFE'],
[
'ticker' => 'IWFL','stock_name' => 'ETRACS 2X GROWTH FACTR TR'],
[
'ticker' => 'IWL','stock_name' => 'ISHARES RUSSELL TOP 200 ETF'],
[
'ticker' => 'IWM','stock_name' => 'ISHARES RUSSELL 2000 ETF'],
[
'ticker' => 'IWML','stock_name' => 'ETRACS 2X SIZE FACTR TR'],
[
'ticker' => 'IWN','stock_name' => 'ISHARES RUSSELL 2000 VALUE E'],
[
'ticker' => 'IWO','stock_name' => 'ISHARES RUSSELL 2000 GROWTH'],
[
'ticker' => 'IWP','stock_name' => 'ISHARES RUSSELL MID-CAP GROW'],
[
'ticker' => 'IWR','stock_name' => 'ISHARES RUSSELL MID-CAP ETF'],
[
'ticker' => 'IWS','stock_name' => 'ISHARES RUSSELL MID-CAP VALU'],
[
'ticker' => 'IWV','stock_name' => 'ISHARES RUSSELL 3000 ETF'],
[
'ticker' => 'IWX','stock_name' => 'ISHARES RUSSELL TOP 200 VALU'],
[
'ticker' => 'IWY','stock_name' => 'ISHARES RUSSELL TOP 200 GROW'],
[
'ticker' => 'IX','stock_name' => 'ORIX  - SPONSORED ADR'],
[
'ticker' => 'IXAQU','stock_name' => 'IX ACQUISITION CORP'],
[
'ticker' => 'IXC','stock_name' => 'ISHARES GLOBAL ENERGY ETF'],
[
'ticker' => 'IXG','stock_name' => 'ISHARES GLOBAL FINANCIALS ET'],
[
'ticker' => 'IXJ','stock_name' => 'ISHARES GLOBAL HEALTHCARE ET'],
[
'ticker' => 'IXN','stock_name' => 'ISHARES GLOBAL TECH ETF'],
[
'ticker' => 'IXP','stock_name' => 'ISHARES GLOBAL COMM SERVICES'],
[
'ticker' => 'IXSE','stock_name' => 'WISDOMTREE INDIA EX-STATE FD'],
[
'ticker' => 'IXUS','stock_name' => 'ISHARES CORE INTL STOCK ETF'],
[
'ticker' => 'IYC','stock_name' => 'ISHARES US CONSUMER DISCRETI'],
[
'ticker' => 'IYE','stock_name' => 'ISHARES U.S. ENERGY ETF'],
[
'ticker' => 'IYF','stock_name' => 'ISHARES US FINANCIALS ETF'],
[
'ticker' => 'IYG','stock_name' => 'ISHARES U.S. FINANCIAL SERVI'],
[
'ticker' => 'IYH','stock_name' => 'ISHARES U.S. HEALTHCARE ETF'],
[
'ticker' => 'IYJ','stock_name' => 'ISHARES U.S. INDUSTRIALS ETF'],
[
'ticker' => 'IYK','stock_name' => 'ISHARES US CONSUMER STAPLES'],
[
'ticker' => 'IYLD','stock_name' => 'ISHARES MORNINGSTAR MULTI-AS'],
[
'ticker' => 'IYM','stock_name' => 'ISHARES U.S. BASIC MATERIALS'],
[
'ticker' => 'IYR','stock_name' => 'ISHARES US REAL ESTATE ETF'],
[
'ticker' => 'IYT','stock_name' => 'ISHARES US TRANSPORTATION ET'],
[
'ticker' => 'IYW','stock_name' => 'ISHARES USTECHNOLOGY ETF'],
[
'ticker' => 'IYY','stock_name' => 'ISHARES DOW JONES U.S. ETF'],
[
'ticker' => 'IYZ','stock_name' => 'ISHARES US TELECOMMUNICATION'],
[
'ticker' => 'IZEA','stock_name' => 'IZEA WORLDWIDE INC'],
[
'ticker' => 'IZRL','stock_name' => 'ARK ISRAEL INNOVATIVE TECHNO'],
[
'ticker' => 'J','stock_name' => 'JACOBS ENGINEERING GROUP INC'],
[
'ticker' => 'JAAA','stock_name' => 'JANUS HENDERSON AAA CLO ETF'],
[
'ticker' => 'JACK','stock_name' => 'JACK IN THE BOX INC'],
[
'ticker' => 'JAGG','stock_name' => 'JPM US AGG BOND ETF'],
[
'ticker' => 'JAGX','stock_name' => 'JAGUAR HEALTH INC'],
[
'ticker' => 'JAKK','stock_name' => 'JAKKS PACIFIC INC'],
[
'ticker' => 'JAMF','stock_name' => 'JAMF HOLDING CORP'],
[
'ticker' => 'JAN','stock_name' => 'JANONE INC'],
[
'ticker' => 'JANX','stock_name' => 'JANUX THERAPEUTICS INC'],
[
'ticker' => 'JANZ','stock_name' => 'TRUESHARES STRUCT OUTC JAN'],
[
'ticker' => 'JAQC','stock_name' => 'JUPITER ACQUISITION CORP-A'],
[
'ticker' => 'JAQCU','stock_name' => 'JUPITER ACQUISITION CORP'],
[
'ticker' => 'JATT','stock_name' => 'JATT ACQUISITION CORP - A'],
[
'ticker' => 'JATT=','stock_name' => 'JATT ACQUISITION CORP'],
[
'ticker' => 'JAVA','stock_name' => 'JPMORGAN ACTIVE VALUE ETF'],
[
'ticker' => 'JAZZ','stock_name' => 'JAZZ PHARMACEUTICALS PLC'],
[
'ticker' => 'JBGS','stock_name' => 'JBG SMITH PROPERTIES'],
[
'ticker' => 'JBHT','stock_name' => 'HUNT (JB) TRANSPRT SVCS INC'],
[
'ticker' => 'JBI','stock_name' => 'JANUS INTERNATIONAL GROUP IN'],
[
'ticker' => 'JBL','stock_name' => 'JABIL INC'],
[
'ticker' => 'JBLU','stock_name' => 'JETBLUE AIRWAYS CORP'],
[
'ticker' => 'JBSS','stock_name' => 'JOHN B. SANFILIPPO & SON INC'],
[
'ticker' => 'JBT','stock_name' => 'JOHN BEAN TECHNOLOGIES CORP'],
[
'ticker' => 'JCE','stock_name' => 'NUVEEN CORE EQU ALPHA FD'],
[
'ticker' => 'JCI','stock_name' => 'JOHNSON CONTROLS INTERNATION'],
[
'ticker' => 'JCIC','stock_name' => 'JACK CREEK INVESTMENT C-CL A'],
[
'ticker' => 'JCICU','stock_name' => 'JACK CREEK INVESTMENT CORP'],
[
'ticker' => 'JCO','stock_name' => 'NUVEEN CREDIT OPP 2022 TARGE'],
[
'ticker' => 'JCPB','stock_name' => 'JPMORGAN CORE PLUS BOND ETF'],
[
'ticker' => 'JCS','stock_name' => 'COMMUNICATIONS SYSTEMS INC'],
[
'ticker' => 'JCTCF','stock_name' => 'JEWETT-CAMERON TRADING LTD'],
[
'ticker' => 'JCTR','stock_name' => 'JPMORGAN CARBON TRANSITION'],
[
'ticker' => 'JD','stock_name' => 'JD.COM INC-ADR'],
[
'ticker' => 'JDD','stock_name' => 'NUVEEN DIVER DIV AND INC FD'],
[
'ticker' => 'JDIV','stock_name' => 'JPMORGAN US DIVIDEND ETF'],
[
'ticker' => 'JDST','stock_name' => 'DIREXION DAILY JUNIOR GOLD M'],
[
'ticker' => 'JEF','stock_name' => 'JEFFERIES FINANCIAL GROUP IN'],
[
'ticker' => 'JELD','stock_name' => 'JELD-WEN HOLDING INC'],
[
'ticker' => 'JEMA','stock_name' => 'JPMORGAN ACTIVEBUILDERS EMER'],
[
'ticker' => 'JEMD','stock_name' => 'NUVEEN EMERGING MARKETS DEBT'],
[
'ticker' => 'JEPI','stock_name' => 'JPMORGAN EQUITY PREMIUM INCO'],
[
'ticker' => 'JEQ','stock_name' => 'ABERDEEN JAPAN EQUITY FUND I'],
[
'ticker' => 'JETS','stock_name' => 'US GLOBAL JETS ETF'],
[
'ticker' => 'JFIN','stock_name' => 'JIAYIN GROUP INC-ADR'],
[
'ticker' => 'JFR','stock_name' => 'NUVEEN FLOAT RATE INC FD'],
[
'ticker' => 'JFU','stock_name' => '9F INC - ADR'],
[
'ticker' => 'JFWD','stock_name' => 'JACOB FORWARD ETF'],
[
'ticker' => 'JG','stock_name' => 'AURORA MOBILE LTD-ADR'],
[
'ticker' => 'JGH','stock_name' => 'NUVEEN GLOBAL H-I FD'],
[
'ticker' => 'JGLD','stock_name' => 'AMPLIFY PURE JR GOLD MINERS'],
[
'ticker' => 'JHAA','stock_name' => 'NUVEEN CORPORATE INCOME 2023'],
[
'ticker' => 'JHCB','stock_name' => 'JOHN HANCOCK CORPORATE BOND'],
[
'ticker' => 'JHCS','stock_name' => 'JOHN HANCOCK MULTI MEDIA COM'],
[
'ticker' => 'JHEM','stock_name' => 'JOHN HANCOCK MULTI EM MRK ET'],
[
'ticker' => 'JHG','stock_name' => 'JANUS HENDERSON GROUP PLC'],
[
'ticker' => 'JHI','stock_name' => 'JOHN HANCOCK INVEST TRUST'],
[
'ticker' => 'JHMA','stock_name' => 'JOHN HANCOCK MULT FACT MATER'],
[
'ticker' => 'JHMB','stock_name' => 'JOHN HANCOCK MORTGAGE-BACKED'],
[
'ticker' => 'JHMC','stock_name' => 'JOHN HANCOCK MULT FACT CONSU'],
[
'ticker' => 'JHMD','stock_name' => 'JOHN HANCOCK MF DEV INTL ETF'],
[
'ticker' => 'JHME','stock_name' => 'JOHN HANCOCK MULT FACT ENRGY'],
[
'ticker' => 'JHMF','stock_name' => 'JOHN HANCOCK MULTI FACT FIN'],
[
'ticker' => 'JHMH','stock_name' => 'JOHN HANCOCK MULT FACT HEALT'],
[
'ticker' => 'JHMI','stock_name' => 'JOHN HANCOCK MULT FACT INDUS'],
[
'ticker' => 'JHML','stock_name' => 'JOHN HANCOCK MULTI FACT LRG'],
[
'ticker' => 'JHMM','stock_name' => 'JOHN HANCOCK MULTI FACT MID'],
[
'ticker' => 'JHMS','stock_name' => 'JOHN HANCOCK MULT FACT CONS'],
[
'ticker' => 'JHMT','stock_name' => 'JOHN HANCOCK MULTI FACT TECH'],
[
'ticker' => 'JHMU','stock_name' => 'JOHN HANCOCK MULT FACT UTIL'],
[
'ticker' => 'JHS','stock_name' => 'JOHN HANCOCK INCOME SECS TR'],
[
'ticker' => 'JHSC','stock_name' => 'JOHN HANCOCK MULTI SMALL CAP'],
[
'ticker' => 'JHX','stock_name' => 'JAMES HARDIE IND PLC-SP ADR'],
[
'ticker' => 'JIB','stock_name' => 'JANUS HENDERSON SUST IMP C/B'],
[
'ticker' => 'JIDA','stock_name' => 'JPMORGAN ACTBUILD INT EQUITY'],
[
'ticker' => 'JIG','stock_name' => 'JPMORGAN INTERNATIONAL GROWT'],
[
'ticker' => 'JIGB','stock_name' => 'JPM CORP BOND RES EHD ETF'],
[
'ticker' => 'JILL','stock_name' => 'J. JILL INC'],
[
'ticker' => 'JJA','stock_name' => 'IPATH SERIES B BLOOMBERG AGR'],
[
'ticker' => 'JJC','stock_name' => 'IPATH SERIES B BLOOMBERG COP'],
[
'ticker' => 'JJE','stock_name' => 'IPATH SERIES B BLOOMBERG ENE'],
[
'ticker' => 'JJG','stock_name' => 'IPATH SERIES B BLOOMBERG GRA'],
[
'ticker' => 'JJM','stock_name' => 'IPATH SER B BLOOMBERG INDUST'],
[
'ticker' => 'JJN','stock_name' => 'IPATH SERIES B BLOOMBERG NIC'],
[
'ticker' => 'JJP','stock_name' => 'IPATH SERIES B BBG PRECIOUS'],
[
'ticker' => 'JJS','stock_name' => 'IPATH SERIES B BBG SOFTS SUB'],
[
'ticker' => 'JJSF','stock_name' => 'J & J SNACK FOODS CORP'],
[
'ticker' => 'JJT','stock_name' => 'IPATH SERIES B BBG TIN SUBIN'],
[
'ticker' => 'JJU','stock_name' => 'IPATH SERIES B BLOOMBERG ALU'],
[
'ticker' => 'JKHY','stock_name' => 'JACK HENRY & ASSOCIATES INC'],
[
'ticker' => 'JKS','stock_name' => 'JINKOSOLAR HOLDING CO-ADR'],
[
'ticker' => 'JLL','stock_name' => 'JONES LANG LASALLE INC'],
[
'ticker' => 'JLS','stock_name' => 'NUVEEN MORTGAGE & INCOME'],
[
'ticker' => 'JMACU','stock_name' => 'MAXPRO CAPITAL ACQUISITION C'],
[
'ticker' => 'JMBS','stock_name' => 'JANUS HENDERSON MORTG BACKED'],
[
'ticker' => 'JMIA','stock_name' => 'JUMIA TECHNOLOGIES AG-ADR'],
[
'ticker' => 'JMIN','stock_name' => 'JPMORGAN US MIN VOLATILITY'],
[
'ticker' => 'JMM','stock_name' => 'NUVEEN MULTI-MKT INC FD'],
[
'ticker' => 'JMOM','stock_name' => 'JPMORGAN US MOMENTUM FACTOR'],
[
'ticker' => 'JMP','stock_name' => 'JMP GROUP LLC'],
[
'ticker' => 'JMST','stock_name' => 'JPM ULTRA-SHORT MUNI INCOME'],
[
'ticker' => 'JMUB','stock_name' => 'JPMORGAN MUNICIPAL ETF'],
[
'ticker' => 'JNCE','stock_name' => 'JOUNCE THERAPEUTICS INC'],
[
'ticker' => 'JNJ','stock_name' => 'JOHNSON & JOHNSON'],
[
'ticker' => 'JNK','stock_name' => 'SPDR BLOOMBERG HIGH YIELD BO'],
[
'ticker' => 'JNPR','stock_name' => 'JUNIPER NETWORKS INC'],
[
'ticker' => 'JNUG','stock_name' => 'DIREXION DAILY JUNIOR GOLD M'],
[
'ticker' => 'JO','stock_name' => 'IPATH SERIES B BLOOMBERG COF'],
[
'ticker' => 'JOAN','stock_name' => 'JOANN INC'],
[
'ticker' => 'JOB','stock_name' => 'GEE GROUP INC'],
[
'ticker' => 'JOBS','stock_name' => '51JOB INC-ADR'],
[
'ticker' => 'JOBY','stock_name' => 'JOBY AVIATION INC'],
[
'ticker' => 'JOE','stock_name' => 'ST JOE CO/THE'],
[
'ticker' => 'JOET','stock_name' => 'VIRTUS TERRANOVA US QUAL MOM'],
[
'ticker' => 'JOF','stock_name' => 'JAPAN SMALLER CAPITALIZATION'],
[
'ticker' => 'JOFF','stock_name' => 'JOFF FINTECH ACQ CORP-A'],
[
'ticker' => 'JOFFU','stock_name' => 'JOFF FINTECH ACQUISITION COR'],
[
'ticker' => 'JOJO','stock_name' => 'ATAC CREDIT ROTATION ETF'],
[
'ticker' => 'JOUT','stock_name' => 'JOHNSON OUTDOORS INC-A'],
[
'ticker' => 'JOYY','stock_name' => 'INFUSIVE COMPOUNDING GLB EQY'],
[
'ticker' => 'JP','stock_name' => 'JUPAI HOLDINGS LTD-ADR'],
[
'ticker' => 'JPC','stock_name' => 'NUVEEN PREFERRED & INCOME OP'],
[
'ticker' => 'JPEM','stock_name' => 'JPM DIVERSIFIED RET EM EQUIT'],
[
'ticker' => 'JPHY','stock_name' => 'JPM HY RESEARCH ENHANCED'],
[
'ticker' => 'JPI','stock_name' => 'NUVEEN PFD AND INC TERM FD'],
[
'ticker' => 'JPIB','stock_name' => 'JPMORGAN INTL BND ETF'],
[
'ticker' => 'JPIE','stock_name' => 'JPMORGAN INCOME ETF'],
[
'ticker' => 'JPIN','stock_name' => 'JPM DIVERSIFIED RET INTL EQ'],
[
'ticker' => 'JPM','stock_name' => 'JPMORGAN CHASE & CO'],
[
'ticker' => 'JPMB','stock_name' => 'JPMORGAN USD EMERGING MARKET'],
[
'ticker' => 'JPME','stock_name' => 'JPM DIVER RET US MC EQUITY'],
[
'ticker' => 'JPN','stock_name' => 'XTRACKERS JAPAN JPX-NIKKEI 4'],
[
'ticker' => 'JPS','stock_name' => 'NUVEEN PREFERRED & INCOME SE'],
[
'ticker' => 'JPSE','stock_name' => 'JPM DIVERSIFIED RT SMALL CAP'],
[
'ticker' => 'JPST','stock_name' => 'JPMORGAN ULTRA-SHORT INCOME'],
[
'ticker' => 'JPT','stock_name' => 'NUVEEN PREFERRED INCOME 2022'],
[
'ticker' => 'JPUS','stock_name' => 'JPMORGAN DIV RET US EQ ETF'],
[
'ticker' => 'JPXN','stock_name' => 'ISHARES JPX-NIKKEI 400 ETF'],
[
'ticker' => 'JQC','stock_name' => 'NUVEEN CREDIT STRAT INCM'],
[
'ticker' => 'JQUA','stock_name' => 'JPMORGAN US QUALITY FACTOR'],
[
'ticker' => 'JRE','stock_name' => 'JANUS HENDERSON US REAL EST'],
[
'ticker' => 'JRI','stock_name' => 'NUVEEN RL ASST INC & GRW'],
[
'ticker' => 'JRJC','stock_name' => 'CHINA FINANCE ONLINE CO-ADR'],
[
'ticker' => 'JRNY','stock_name' => 'ALPS GLOBAL TRAVEL BENEF ETF'],
[
'ticker' => 'JRO','stock_name' => 'NUVEEN FLT RATE INC OPP FD'],
[
'ticker' => 'JRS','stock_name' => 'NUVEEN REAL EST INC FD'],
[
'ticker' => 'JRSH','stock_name' => 'JERASH HOLDINGS US INC'],
[
'ticker' => 'JRVR','stock_name' => 'JAMES RIVER GROUP HOLDINGS L'],
[
'ticker' => 'JSCP','stock_name' => 'JPMORGAN SHORT DURATION CORE'],
[
'ticker' => 'JSD','stock_name' => 'NUVEEN SHT DUR CRED OPP FD'],
[
'ticker' => 'JSMD','stock_name' => 'JANUS SMALL MID CAP GR ALP'],
[
'ticker' => 'JSML','stock_name' => 'JANUS DETROIT STREET TRUST J'],
[
'ticker' => 'JSPR','stock_name' => 'JASPER THERAPEUTICS INC'],
[
'ticker' => 'JSTC','stock_name' => 'ADASINA SOCIAL JUSTICE GLB'],
[
'ticker' => 'JT','stock_name' => 'JIANPU TECHNOLOGY INC-SP ADR'],
[
'ticker' => 'JTA','stock_name' => 'NUVEEN TX-ADV TOT RET STR FD'],
[
'ticker' => 'JTD','stock_name' => 'NUVEEN TAX-ADV DIV GRWTH FD'],
[
'ticker' => 'JUGG','stock_name' => 'JAWS JUGGERNAUT ACQUISITIO-A'],
[
'ticker' => 'JUGGU','stock_name' => 'JAWS JUGGERNAUT ACQUISITION'],
[
'ticker' => 'JULZ','stock_name' => 'TRUESHARES STRUCT OUTCOME JU'],
[
'ticker' => 'JUN=','stock_name' => 'JUNIPER II CORP'],
[
'ticker' => 'JUNZ','stock_name' => 'TRUESHARES STRUCTURED OUTCOM'],
[
'ticker' => 'JUPW','stock_name' => 'JUPITER WELLNESS INC'],
[
'ticker' => 'JUSA','stock_name' => 'JPM ACTBUILD US LRG CAP EQ'],
[
'ticker' => 'JUST','stock_name' => 'GOLDMAN SACHS JUST US LRG'],
[
'ticker' => 'JVA','stock_name' => 'COFFEE HOLDING CO INC'],
[
'ticker' => 'JVAL','stock_name' => 'JPMORGAN US VALUE FACTOR ETF'],
[
'ticker' => 'JW.A','stock_name' => 'WILEY (JOHN) & SONS-CLASS A'],
[
'ticker' => 'JW.B','stock_name' => 'WILEY (JOHN) & SONS-CL B'],
[
'ticker' => 'JWEL','stock_name' => 'JOWELL GLOBAL LTD'],
[
'ticker' => 'JWN','stock_name' => 'NORDSTROM INC'],
[
'ticker' => 'JWSM','stock_name' => 'JAWS MUSTANG ACQUISITION C-A'],
[
'ticker' => 'JWSM=','stock_name' => 'JAWS MUSTANG ACQUISITION COR'],
[
'ticker' => 'JXI','stock_name' => 'ISHARES GLOBAL UTILITIES ETF'],
[
'ticker' => 'JXN','stock_name' => 'JACKSON FINANCIAL INC-A'],
[
'ticker' => 'JYAC','stock_name' => 'JIYA ACQUISITION CORP -CL A'],
[
'ticker' => 'JYNT','stock_name' => 'JOINT CORP/THE'],
[
'ticker' => 'JZRO','stock_name' => 'JANUS HENDERSON NET ZERO'],
[
'ticker' => 'JZXN','stock_name' => 'JIUZI HOLDINGS INC'],
[
'ticker' => 'K','stock_name' => 'KELLOGG CO'],
[
'ticker' => 'KAHC','stock_name' => 'KKR ACQUISITION HOLDINGS I-A'],
[
'ticker' => 'KAHC=','stock_name' => 'KKR ACQUISITION HOLDINGS I C'],
[
'ticker' => 'KAI','stock_name' => 'KADANT INC'],
[
'ticker' => 'KAII','stock_name' => 'KISMET ACQUISITION TWO-CL A'],
[
'ticker' => 'KAIIU','stock_name' => 'KISMET ACQUISITION TWO CORP'],
[
'ticker' => 'KAIR','stock_name' => 'KAIROS ACQUISITION CORP-A'],
[
'ticker' => 'KAIRU','stock_name' => 'KAIROS ACQUISITION CORP'],
[
'ticker' => 'KALA','stock_name' => 'KALA PHARMACEUTICALS INC'],
[
'ticker' => 'KALL','stock_name' => 'KRANESHARES MSCI ALL CHINA I'],
[
'ticker' => 'KALU','stock_name' => 'KAISER ALUMINUM CORP'],
[
'ticker' => 'KALV','stock_name' => 'KALVISTA PHARMACEUTICALS INC'],
[
'ticker' => 'KAMN','stock_name' => 'KAMAN CORP'],
[
'ticker' => 'KAPR','stock_name' => 'INNOVATOR U.S. SMALL CAP POW'],
[
'ticker' => 'KAR','stock_name' => 'KAR AUCTION SERVICES INC'],
[
'ticker' => 'KARO','stock_name' => 'KAROOOOO LTD'],
[
'ticker' => 'KARS','stock_name' => 'KRANESHARES ELECTRIC VEHICLE'],
[
'ticker' => 'KAVL','stock_name' => 'KAIVAL BRANDS INNOVATIONS GR'],
[
'ticker' => 'KB','stock_name' => 'KB FINANCIAL GROUP INC-ADR'],
[
'ticker' => 'KBA','stock_name' => 'KRANESH BOSERA MSCI CHINA A'],
[
'ticker' => 'KBAL','stock_name' => 'KIMBALL INTERNATIONAL-B'],
[
'ticker' => 'KBE','stock_name' => 'SPDR S&P BANK ETF'],
[
'ticker' => 'KBH','stock_name' => 'KB HOME'],
[
'ticker' => 'KBND','stock_name' => 'KRANESHARES BLOOMBERG CHINA'],
[
'ticker' => 'KBNT','stock_name' => 'KUBIENT INC'],
[
'ticker' => 'KBR','stock_name' => 'KBR INC'],
[
'ticker' => 'KBUY','stock_name' => 'KRANESHARES CICC CHINA CONS'],
[
'ticker' => 'KBWB','stock_name' => 'INVESCO KBW BANK ETF'],
[
'ticker' => 'KBWD','stock_name' => 'INVESCO KBW HIGH DIVIDEND YI'],
[
'ticker' => 'KBWP','stock_name' => 'INVESCO KBW PROPERTY & CASUA'],
[
'ticker' => 'KBWR','stock_name' => 'INVESCO KBW REGIONAL BANKING'],
[
'ticker' => 'KBWY','stock_name' => 'INVESCO KBW PREMIUM YIELD EQ'],
[
'ticker' => 'KC','stock_name' => 'KINGSOFT CLOUD HOLDINGS-ADR'],
[
'ticker' => 'KCCA','stock_name' => 'KRANESHARES CA CARBON ALLOW'],
[
'ticker' => 'KCE','stock_name' => 'SPDR S&P CAPITAL MARKETS ETF'],
[
'ticker' => 'KCGI','stock_name' => 'KENSINGTON CAPITAL ACQ-A'],
[
'ticker' => 'KCGI=','stock_name' => 'KENSINGTON CAPITAL ACQUISITI'],
[
'ticker' => 'KD','stock_name' => 'KYNDRYL HOLDINGS INC-W/I'],
[
'ticker' => 'KDFI','stock_name' => 'KFA DYNAMIC FIXED INCOME ETF'],
[
'ticker' => 'KDMN','stock_name' => 'KADMON HOLDINGS INC'],
[
'ticker' => 'KDNY','stock_name' => 'CHINOOK THERAPEUTICS INC'],
[
'ticker' => 'KDP','stock_name' => 'KEURIG DR PEPPER INC'],
[
'ticker' => 'KE','stock_name' => 'KIMBALL ELECTRONICS INC'],
[
'ticker' => 'KEJI','stock_name' => 'GLB X CHINA INNOVATION ETF'],
[
'ticker' => 'KELYA','stock_name' => 'KELLY SERVICES INC -A'],
[
'ticker' => 'KELYB','stock_name' => 'KELLY SERVICES INC -CL B'],
[
'ticker' => 'KEMQ','stock_name' => 'KRANESHARES EMERGING MARKETS'],
[
'ticker' => 'KEMX','stock_name' => 'KRANESHARES MSCI E-MKT EX-CH'],
[
'ticker' => 'KEN','stock_name' => 'KENON HOLDINGS LTD'],
[
'ticker' => 'KEP','stock_name' => 'KOREA ELEC POWER CORP-SP ADR'],
[
'ticker' => 'KEQU','stock_name' => 'KEWAUNEE SCIENTIFIC CP'],
[
'ticker' => 'KERN','stock_name' => 'AKERNA CORP'],
[
'ticker' => 'KESG','stock_name' => 'KRANESHARES MSCI CHINA ESG'],
[
'ticker' => 'KEUA','stock_name' => 'KRANESHARES EUROPEAN CARBON'],
[
'ticker' => 'KEX','stock_name' => 'KIRBY CORP'],
[
'ticker' => 'KEY','stock_name' => 'KEYCORP'],
[
'ticker' => 'KEYS','stock_name' => 'KEYSIGHT TECHNOLOGIES IN'],
[
'ticker' => 'KF','stock_name' => 'KOREA FUND INC'],
[
'ticker' => 'KFFB','stock_name' => 'KENTUCKY FIRST FEDERAL BANCO'],
[
'ticker' => 'KFRC','stock_name' => 'KFORCE INC'],
[
'ticker' => 'KFS','stock_name' => 'KINGSWAY FINANCIAL SERVICES'],
[
'ticker' => 'KFVG','stock_name' => 'KRANESHARES CICC CHINA 5G'],
[
'ticker' => 'KFY','stock_name' => 'KORN FERRY'],
[
'ticker' => 'KFYP','stock_name' => 'KRANESHARES CICC CHINA LEADE'],
[
'ticker' => 'KGC','stock_name' => 'KINROSS GOLD CORP'],
[
'ticker' => 'KGRN','stock_name' => 'KRANESHARES MSCI CHINA CLEAN'],
[
'ticker' => 'KGRO','stock_name' => 'KRANESHARES CHINA INNOVATION'],
[
'ticker' => 'KHC','stock_name' => 'KRAFT HEINZ CO/THE'],
[
'ticker' => 'KHYB','stock_name' => 'KRANESHARES APAC HIGH YIELD'],
[
'ticker' => 'KIDS','stock_name' => 'ORTHOPEDIATRICS CORP'],
[
'ticker' => 'KIE','stock_name' => 'SPDR S&P INSURANCE ETF'],
[
'ticker' => 'KIII','stock_name' => 'KISMET ACQUISITION THREE - A'],
[
'ticker' => 'KIIIU','stock_name' => 'KISMET ACQUISITION THREE COR'],
[
'ticker' => 'KIM','stock_name' => 'KIMCO REALTY CORP'],
[
'ticker' => 'KINS','stock_name' => 'KINGSTONE COS INC'],
[
'ticker' => 'KINZ','stock_name' => 'KINS TECHNOLOGY GROUP INC-A'],
[
'ticker' => 'KINZU','stock_name' => 'KINS TECHNOLOGY GROUP INC'],
[
'ticker' => 'KIO','stock_name' => 'KKR INCOME OPPORTUNITIES'],
[
'ticker' => 'KIQ','stock_name' => 'KELSO TECHNOLOGIES INC'],
[
'ticker' => 'KIRK','stock_name' => 'KIRKLAND\'S INC'],
[
'ticker' => 'KJAN','stock_name' => 'INNOVATOR U.S. SMALL CAP POW'],
[
'ticker' => 'KJUL','stock_name' => 'INNOVATOR U.S. SMALL CAP POW'],
[
'ticker' => 'KKR','stock_name' => 'KKR & CO INC'],
[
'ticker' => 'KL','stock_name' => 'KIRKLAND LAKE GOLD LTD'],
[
'ticker' => 'KLAC','stock_name' => 'KLA CORP'],
[
'ticker' => 'KLAQ','stock_name' => 'KL ACQUISITION CORP/MO-CLS A'],
[
'ticker' => 'KLAQU','stock_name' => 'KL ACQUISITION CORP'],
[
'ticker' => 'KLCD','stock_name' => 'KFA LRG CAP QUAL DIV NDX ETF'],
[
'ticker' => 'KLDO','stock_name' => 'KALEIDO BIOSCIENCES INC'],
[
'ticker' => 'KLDW','stock_name' => 'KNOWLEDGE LEADERS DEVELOPED'],
[
'ticker' => 'KLIC','stock_name' => 'KULICKE & SOFFA INDUSTRIES'],
[
'ticker' => 'KLNE','stock_name' => 'DIREXION DAILY GLOBAL CLEAN'],
[
'ticker' => 'KLR','stock_name' => 'KALEYRA INC'],
[
'ticker' => 'KLTR','stock_name' => 'KALTURA INC'],
[
'ticker' => 'KLXE','stock_name' => 'KLX ENERGY SERVICES HOLDING'],
[
'ticker' => 'KMB','stock_name' => 'KIMBERLY-CLARK CORP'],
[
'ticker' => 'KMDA','stock_name' => 'KAMADA LTD'],
[
'ticker' => 'KMED','stock_name' => 'KRANESHARES EMERGING MARKETS'],
[
'ticker' => 'KMF','stock_name' => 'KAYNE ANDERSON NEXTGEN ENERG'],
[
'ticker' => 'KMI','stock_name' => 'KINDER MORGAN INC'],
[
'ticker' => 'KMLM','stock_name' => 'KFA MOUNT LUCAS INDEX ST ETF'],
[
'ticker' => 'KMPH','stock_name' => 'KEMPHARM INC'],
[
'ticker' => 'KMPR','stock_name' => 'KEMPER CORP'],
[
'ticker' => 'KMT','stock_name' => 'KENNAMETAL INC'],
[
'ticker' => 'KMX','stock_name' => 'CARMAX INC'],
[
'ticker' => 'KN','stock_name' => 'KNOWLES CORP'],
[
'ticker' => 'KNBE','stock_name' => 'KNOWBE4 INC-A'],
[
'ticker' => 'KNDI','stock_name' => 'KANDI TECHNOLOGIES GROUP INC'],
[
'ticker' => 'KNG','stock_name' => 'FT CBOE VEST S&P 500 DIVIDEN'],
[
'ticker' => 'KNGS','stock_name' => 'UPHOLDINGS COMPOUND KINGS ET'],
[
'ticker' => 'KNOP','stock_name' => 'KNOT OFFSHORE PARTNERS LP'],
[
'ticker' => 'KNSA','stock_name' => 'KINIKSA PHARMACEUTICALS-A'],
[
'ticker' => 'KNSL','stock_name' => 'KINSALE CAPITAL GROUP INC'],
[
'ticker' => 'KNTE','stock_name' => 'KINNATE BIOPHARMA INC'],
[
'ticker' => 'KNX','stock_name' => 'KNIGHT-SWIFT TRANSPORTATION'],
[
'ticker' => 'KO','stock_name' => 'COCA-COLA CO/THE'],
[
'ticker' => 'KOCG','stock_name' => 'FIS KNIGHTS OF COL GLO BELIE'],
[
'ticker' => 'KOCT','stock_name' => 'INNOVATOR U.S. SMALL CAP POW'],
[
'ticker' => 'KOD','stock_name' => 'KODIAK SCIENCES INC'],
[
'ticker' => 'KODK','stock_name' => 'EASTMAN KODAK CO'],
[
'ticker' => 'KOF','stock_name' => 'COCA-COLA FEMSA SAB-SP ADR'],
[
'ticker' => 'KOIN','stock_name' => 'CAPITAL LINK NEXTGEN PROTOCO'],
[
'ticker' => 'KOKU','stock_name' => 'XTRACKERS MSCI KOKUSAI EQTY'],
[
'ticker' => 'KOLD','stock_name' => 'PROSHARES ULTRASHORT BLOOMBE'],
[
'ticker' => 'KOMP','stock_name' => 'SPDR S&P KENSHO NEW ECONOMIE'],
[
'ticker' => 'KONG','stock_name' => 'FORMIDABLE FORTRESS ETF'],
[
'ticker' => 'KOP','stock_name' => 'KOPPERS HOLDINGS INC'],
[
'ticker' => 'KOPN','stock_name' => 'KOPIN CORP'],
[
'ticker' => 'KOR','stock_name' => 'CORVUS GOLD INC'],
[
'ticker' => 'KORE','stock_name' => 'KORE GROUP HOLDINGS INC'],
[
'ticker' => 'KORP','stock_name' => 'AMERICAN CENTURY DIVERSIFIED'],
[
'ticker' => 'KORU','stock_name' => 'DIREXION DLY S KOREA BULL 3X'],
[
'ticker' => 'KOS','stock_name' => 'KOSMOS ENERGY LTD'],
[
'ticker' => 'KOSS','stock_name' => 'KOSS CORP'],
[
'ticker' => 'KPLT','stock_name' => 'KATAPULT HOLDINGS INC'],
[
'ticker' => 'KPTI','stock_name' => 'KARYOPHARM THERAPEUTICS INC'],
[
'ticker' => 'KR','stock_name' => 'KROGER CO'],
[
'ticker' => 'KRA','stock_name' => 'KRATON CORP'],
[
'ticker' => 'KRBN','stock_name' => 'KRANESHARES GLOBAL CARBON ET'],
[
'ticker' => 'KRBP','stock_name' => 'KIROMIC BIOPHARMA INC'],
[
'ticker' => 'KRC','stock_name' => 'KILROY REALTY CORP'],
[
'ticker' => 'KRE','stock_name' => 'SPDR S&P REGIONAL BANKING'],
[
'ticker' => 'KREF','stock_name' => 'KKR REAL ESTATE FINANCE TRUS'],
[
'ticker' => 'KRG','stock_name' => 'KITE REALTY GROUP TRUST'],
[
'ticker' => 'KRKR','stock_name' => '36KR HOLDINGS INC'],
[
'ticker' => 'KRMA','stock_name' => 'GLOBAL X CONSCIOUS COMPANIES'],
[
'ticker' => 'KRMD','stock_name' => 'REPRO MEDSYSTEMS INC'],
[
'ticker' => 'KRNL','stock_name' => 'KERNEL GROUP HOLDINGS INC-A'],
[
'ticker' => 'KRNLU','stock_name' => 'KERNEL GROUP HOLDINGS INC'],
[
'ticker' => 'KRNT','stock_name' => 'KORNIT DIGITAL LTD'],
[
'ticker' => 'KRNY','stock_name' => 'KEARNY FINANCIAL CORP/MD'],
[
'ticker' => 'KRO','stock_name' => 'KRONOS WORLDWIDE INC'],
[
'ticker' => 'KRON','stock_name' => 'KRONOS BIO INC'],
[
'ticker' => 'KROP','stock_name' => 'GLOBAL X AGTECH & FOOD INNOV'],
[
'ticker' => 'KROS','stock_name' => 'KEROS THERAPEUTICS INC'],
[
'ticker' => 'KRP','stock_name' => 'KIMBELL ROYALTY PARTNERS LP'],
[
'ticker' => 'KRT','stock_name' => 'KARAT PACKAGING INC'],
[
'ticker' => 'KRTX','stock_name' => 'KARUNA THERAPEUTICS INC'],
[
'ticker' => 'KRUS','stock_name' => 'KURA SUSHI USA INC-CLASS A'],
[
'ticker' => 'KRYS','stock_name' => 'KRYSTAL BIOTECH INC'],
[
'ticker' => 'KSA','stock_name' => 'ISHARES MSCI SAUDI ARABIA ET'],
[
'ticker' => 'KSCD','stock_name' => 'KFA SML CAP QUAL DIV NDX ETF'],
[
'ticker' => 'KSI','stock_name' => 'KADEM SUSTAINABLE IMPAC-CL A'],
[
'ticker' => 'KSICU','stock_name' => 'KADEM SUSTAINABLE IMPACT COR'],
[
'ticker' => 'KSM','stock_name' => 'DWS STRATEGIC MUNICIPAL INCO'],
[
'ticker' => 'KSPN','stock_name' => 'KASPIEN HOLDINGS INC'],
[
'ticker' => 'KSS','stock_name' => 'KOHLS CORP'],
[
'ticker' => 'KSTR','stock_name' => 'KRANESHARES SSE STAR MKT 50'],
[
'ticker' => 'KSU','stock_name' => 'KANSAS CITY SOUTHERN'],
[
'ticker' => 'KT','stock_name' => 'KT CORP-SP ADR'],
[
'ticker' => 'KTB','stock_name' => 'KONTOOR BRANDS INC'],
[
'ticker' => 'KTCC','stock_name' => 'KEY TRONIC CORP'],
[
'ticker' => 'KTEC','stock_name' => 'KRANESHARES HANG SENG TECH'],
[
'ticker' => 'KTF','stock_name' => 'DWS MUNICIPAL INCOME TRUST'],
[
'ticker' => 'KTOS','stock_name' => 'KRATOS DEFENSE & SECURITY'],
[
'ticker' => 'KTRA','stock_name' => 'KINTARA THERAPEUTICS INC'],
[
'ticker' => 'KTTA','stock_name' => 'PASITHEA THERAPEUTICS CORP'],
[
'ticker' => 'KUKE','stock_name' => 'KUKE MUSIC HOLDING LTD-ADR'],
[
'ticker' => 'KULR','stock_name' => 'KULR TECHNOLOGY GROUP INC'],
[
'ticker' => 'KURA','stock_name' => 'KURA ONCOLOGY INC'],
[
'ticker' => 'KURE','stock_name' => 'KRANESHARES MSCI ALL CHINA H'],
[
'ticker' => 'KVHI','stock_name' => 'KVH INDUSTRIES INC'],
[
'ticker' => 'KVLE','stock_name' => 'KFA VALUE LINE DYNAMIC CORE'],
[
'ticker' => 'KVSA','stock_name' => 'KHOSLA VENTURES ACQUISITION'],
[
'ticker' => 'KVSB','stock_name' => 'KHOSLA VENTURES ACQUISITIO-A'],
[
'ticker' => 'KVSC','stock_name' => 'KHOSLA VENTURES ACQUISITIO-A'],
[
'ticker' => 'KW','stock_name' => 'KENNEDY-WILSON HOLDINGS INC'],
[
'ticker' => 'KWAC','stock_name' => 'KINGSWOOD ACQUISITION CORP-A'],
[
'ticker' => 'KWAC=','stock_name' => 'KINGSWOOD ACQUISITION CORP'],
[
'ticker' => 'KWEB','stock_name' => 'KRANESHARES CSI CHINA INTERN'],
[
'ticker' => 'KWR','stock_name' => 'QUAKER HOUGHTON'],
[
'ticker' => 'KWT','stock_name' => 'ISHARES MSCI KUWAIT ETF'],
[
'ticker' => 'KXI','stock_name' => 'ISHARES GLOBAL CONSUMER STAP'],
[
'ticker' => 'KXIN','stock_name' => 'KAIXIN AUTO HOLDINGS'],
[
'ticker' => 'KYMR','stock_name' => 'KYMERA THERAPEUTICS INC'],
[
'ticker' => 'KYN','stock_name' => 'KAYNE ANDERSON ENERGY INFRAS'],
[
'ticker' => 'KZIA','stock_name' => 'KAZIA THERAPEUTICS-SPON ADR'],
[
'ticker' => 'KZR','stock_name' => 'KEZAR LIFE SCIENCES INC'],
[
'ticker' => 'L','stock_name' => 'LOEWS CORP'],
[
'ticker' => 'LAAA','stock_name' => 'LAKESHORE ACQUISITION I CO-A'],
[
'ticker' => 'LAAAU','stock_name' => 'LAKESHORE ACQUISITION I CORP'],
[
'ticker' => 'LABD','stock_name' => 'DRX DLY S&P BIOTECH BEAR 3X'],
[
'ticker' => 'LABP','stock_name' => 'LANDOS BIOPHARMA INC'],
[
'ticker' => 'LABU','stock_name' => 'DRX DLY S&P BIOTECH BULL 3X'],
[
'ticker' => 'LAC','stock_name' => 'LITHIUM AMERICAS CORP'],
[
'ticker' => 'LAD','stock_name' => 'LITHIA MOTORS INC'],
[
'ticker' => 'LADR','stock_name' => 'LADDER CAPITAL CORP-REIT'],
[
'ticker' => 'LAIX','stock_name' => 'LAIX INC - ADR'],
[
'ticker' => 'LAKE','stock_name' => 'LAKELAND INDUSTRIES INC'],
[
'ticker' => 'LAMR','stock_name' => 'LAMAR ADVERTISING CO-A'],
[
'ticker' => 'LANC','stock_name' => 'LANCASTER COLONY CORP'],
[
'ticker' => 'LAND','stock_name' => 'GLADSTONE LAND CORP'],
[
'ticker' => 'LARK','stock_name' => 'LANDMARK BANCORP INC'],
[
'ticker' => 'LASR','stock_name' => 'NLIGHT INC'],
[
'ticker' => 'LAUR','stock_name' => 'LAUREATE EDUCATION INC-A'],
[
'ticker' => 'LAW','stock_name' => 'CS DISCO INC'],
[
'ticker' => 'LAWS','stock_name' => 'LAWSON PRODUCTS INC'],
[
'ticker' => 'LAZ','stock_name' => 'LAZARD LTD-CL A'],
[
'ticker' => 'LAZR','stock_name' => 'LUMINAR TECHNOLOGIES INC'],
[
'ticker' => 'LAZY','stock_name' => 'LAZYDAYS HOLDINGS INC'],
[
'ticker' => 'LBAI','stock_name' => 'LAKELAND BANCORP INC'],
[
'ticker' => 'LBAY','stock_name' => 'LEATHERBACK LONG/SHORT ALT Y'],
[
'ticker' => 'LBC','stock_name' => 'LUTHER BURBANK CORP'],
[
'ticker' => 'LBJ','stock_name' => 'DIREXION DAILY LATIN AMERICA'],
[
'ticker' => 'LBPH','stock_name' => 'LONGBOARD PHARMACEUTICALS IN'],
[
'ticker' => 'LBPS','stock_name' => '4D PHARMA PLC-ADR'],
[
'ticker' => 'LBRDA','stock_name' => 'LIBERTY BROADBAND-A'],
[
'ticker' => 'LBRDK','stock_name' => 'LIBERTY BROADBAND-C'],
[
'ticker' => 'LBRT','stock_name' => 'LIBERTY OILFIELD SERVICES -A'],
[
'ticker' => 'LBTYA','stock_name' => 'LIBERTY GLOBAL PLC-A'],
[
'ticker' => 'LBTYB','stock_name' => 'LIBERTY GLOBAL PLC-B'],
[
'ticker' => 'LBTYK','stock_name' => 'LIBERTY GLOBAL PLC- C'],
[
'ticker' => 'LC','stock_name' => 'LENDINGCLUB CORP'],
[
'ticker' => 'LCA','stock_name' => 'LANDCADIA HOLDINGS IV INC-A'],
[
'ticker' => 'LCAA','stock_name' => 'L CATTERTON ASIA ACQ-CLASS A'],
[
'ticker' => 'LCAAU','stock_name' => 'L CATTERTON ASIA ACQUISITION'],
[
'ticker' => 'LCAHU','stock_name' => 'LANDCADIA HOLDINGS IV INC'],
[
'ticker' => 'LCAP','stock_name' => 'LIONHEART ACQUISITION CORP-A'],
[
'ticker' => 'LCAPU','stock_name' => 'LIONHEART ACQUISITION CORP'],
[
'ticker' => 'LCG','stock_name' => 'STERLING CAPITAL FOCUS EQUIT'],
[
'ticker' => 'LCI','stock_name' => 'LANNETT CO INC'],
[
'ticker' => 'LCID','stock_name' => 'LUCID GROUP INC'],
[
'ticker' => 'LCII','stock_name' => 'LCI INDUSTRIES'],
[
'ticker' => 'LCNB','stock_name' => 'LCNB CORPORATION'],
[
'ticker' => 'LCR','stock_name' => 'LEUTHOLD CORE ETF'],
[
'ticker' => 'LCTD','stock_name' => 'BLACKROCK WRLD X US CARBON'],
[
'ticker' => 'LCTU','stock_name' => 'BLACKROCK US CARBON TR READ'],
[
'ticker' => 'LCTX','stock_name' => 'LINEAGE CELL THERAPEUTICS IN'],
[
'ticker' => 'LCUT','stock_name' => 'LIFETIME BRANDS INC'],
[
'ticker' => 'LCW=','stock_name' => 'LEARN CW INVESTMENT CORP'],
[
'ticker' => 'LD','stock_name' => 'IPATH BLOOMBERG LEAD SUBINDE'],
[
'ticker' => 'LDEM','stock_name' => 'ISHARES ESG MSCI EM LEADERS'],
[
'ticker' => 'LDHA','stock_name' => 'LDH GROWTH CORP I-CLASS A'],
[
'ticker' => 'LDHAU','stock_name' => 'LDH GROWTH CORP I'],
[
'ticker' => 'LDI','stock_name' => 'LOANDEPOT INC -CLASS A'],
[
'ticker' => 'LDOS','stock_name' => 'LEIDOS HOLDINGS INC'],
[
'ticker' => 'LDP','stock_name' => 'COHEN & STEERS LIMITED DURAT'],
[
'ticker' => 'LDSF','stock_name' => 'FIRST TR LOW DURATION ST-ETF'],
[
'ticker' => 'LDUR','stock_name' => 'PIMCO ENHANCED LOW DURATION'],
[
'ticker' => 'LE','stock_name' => 'LANDS\' END INC'],
[
'ticker' => 'LEA','stock_name' => 'LEAR CORP'],
[
'ticker' => 'LEAD','stock_name' => 'SIREN DIVCON LEADERS DIVIDEN'],
[
'ticker' => 'LEAP','stock_name' => 'RIBBIT LEAP LTD - CLASS A'],
[
'ticker' => 'LEAP=','stock_name' => 'RIBBIT LEAP LTD'],
[
'ticker' => 'LECO','stock_name' => 'LINCOLN ELECTRIC HOLDINGS'],
[
'ticker' => 'LEDS','stock_name' => 'SEMILEDS CORP/TW'],
[
'ticker' => 'LEE','stock_name' => 'LEE ENTERPRISES'],
[
'ticker' => 'LEG','stock_name' => 'LEGGETT & PLATT INC'],
[
'ticker' => 'LEGA','stock_name' => 'LEAD EDGE GROWTH OPPORTUNI-A'],
[
'ticker' => 'LEGAU','stock_name' => 'LEAD EDGE GROWTH OPPORTUNITI'],
[
'ticker' => 'LEGH','stock_name' => 'LEGACY HOUSING CORP'],
[
'ticker' => 'LEGN','stock_name' => 'LEGEND BIOTECH CORP-ADR'],
[
'ticker' => 'LEGR','stock_name' => 'FIRST TRUST INDXX INNOVATIVE'],
[
'ticker' => 'LEJU','stock_name' => 'LEJU HOLDINGS LTD-ADR'],
[
'ticker' => 'LEMB','stock_name' => 'ISHARES JP MORGAN EM LOCAL C'],
[
'ticker' => 'LEN','stock_name' => 'LENNAR CORP-A'],
[
'ticker' => 'LEN.B','stock_name' => 'LENNAR CORP - B SHS'],
[
'ticker' => 'LEO','stock_name' => 'BNYM STRAT MUNI'],
[
'ticker' => 'LESL','stock_name' => 'LESLIE\'S INC'],
[
'ticker' => 'LEU','stock_name' => 'CENTRUS ENERGY CORP-CLASS A'],
[
'ticker' => 'LEV','stock_name' => 'LION ELECTRIC CO/THE'],
[
'ticker' => 'LEVI','stock_name' => 'LEVI STRAUSS & CO- CLASS A'],
[
'ticker' => 'LEVL','stock_name' => 'LEVEL ONE BANCORP INC'],
[
'ticker' => 'LEXI','stock_name' => 'ALEXIS PRACTICAL TACTICAL ET'],
[
'ticker' => 'LEXX','stock_name' => 'LEXARIA BIOSCIENCE CORP'],
[
'ticker' => 'LFC','stock_name' => 'CHINA LIFE INSURANCE CO-ADR'],
[
'ticker' => 'LFEQ','stock_name' => 'VANECK LONG/FLAT TREND ETF'],
[
'ticker' => 'LFG','stock_name' => 'ARCHAEA ENERGY INC'],
[
'ticker' => 'LFMD','stock_name' => 'LIFEMD INC'],
[
'ticker' => 'LFST','stock_name' => 'LIFESTANCE HEALTH GROUP INC'],
[
'ticker' => 'LFT','stock_name' => 'LUMENT FINANCE TRUST INC'],
[
'ticker' => 'LFTR','stock_name' => 'LEFTERIS ACQUISITION CORP -A'],
[
'ticker' => 'LFTRU','stock_name' => 'LEFTERIS ACQUISITION CORP'],
[
'ticker' => 'LFUS','stock_name' => 'LITTELFUSE INC'],
[
'ticker' => 'LFVN','stock_name' => 'LIFEVANTAGE CORP'],
[
'ticker' => 'LGAC','stock_name' => 'LAZARD GROWTH ACQUISITION CO'],
[
'ticker' => 'LGACU','stock_name' => 'LAZARD GROWTH ACQUISITION CO'],
[
'ticker' => 'LGBT','stock_name' => 'LGBTQ+ ESG100 ETF'],
[
'ticker' => 'LGF.A','stock_name' => 'LIONS GATE ENTERTAINMENT-A'],
[
'ticker' => 'LGF.B','stock_name' => 'LIONS GATE ENTERTAINMENT-B'],
[
'ticker' => 'LGH','stock_name' => 'HCM DEFENDER 500 INDEX ETF'],
[
'ticker' => 'LGHL','stock_name' => 'LION GROUP HOLDING LTD-S ADR'],
[
'ticker' => 'LGI','stock_name' => 'LAZARD GLOBAL TOT RT & INC'],
[
'ticker' => 'LGIH','stock_name' => 'LGI HOMES INC'],
[
'ticker' => 'LGL','stock_name' => 'LGL GROUP INC/THE'],
[
'ticker' => 'LGLV','stock_name' => 'SPDR SSGA US LARGE CAP LOW V'],
[
'ticker' => 'LGND','stock_name' => 'LIGAND PHARMACEUTICALS'],
[
'ticker' => 'LGO','stock_name' => 'LARGO RESOURCES LTD'],
[
'ticker' => 'LGOV','stock_name' => 'FIRST TR LONG DURATION O-ETF'],
[
'ticker' => 'LGSTU','stock_name' => 'SEMPER PARATUS ACQUISITION C'],
[
'ticker' => 'LGV','stock_name' => 'LONGVIEW ACQUISITION CORP -A'],
[
'ticker' => 'LGV=','stock_name' => 'LONGVIEW ACQUISITION CORP II'],
[
'ticker' => 'LGVN','stock_name' => 'LONGEVERON INC'],
[
'ticker' => 'LH','stock_name' => 'LABORATORY CRP OF AMER HLDGS'],
[
'ticker' => 'LHAA','stock_name' => 'LERER HIPPEAU ACQUISITION-A'],
[
'ticker' => 'LHC','stock_name' => 'LEO HOLDINGS CORP II-CLASS A'],
[
'ticker' => 'LHC=','stock_name' => 'LEO HOLDINGS CORP II'],
[
'ticker' => 'LHCG','stock_name' => 'LHC GROUP INC'],
[
'ticker' => 'LHDX','stock_name' => 'LUCIRA HEALTH INC'],
[
'ticker' => 'LHX','stock_name' => 'L3HARRIS TECHNOLOGIES INC'],
[
'ticker' => 'LI','stock_name' => 'LI AUTO INC - ADR'],
[
'ticker' => 'LIAN','stock_name' => 'LIANBIO-ADR'],
[
'ticker' => 'LIBYU','stock_name' => 'LIBERTY RESOURCES ACQUISITIO'],
[
'ticker' => 'LICY','stock_name' => 'LI-CYCLE HOLDINGS CORP'],
[
'ticker' => 'LIDR','stock_name' => 'AEYE INC'],
[
'ticker' => 'LIFE','stock_name' => 'ATYR PHARMA INC'],
[
'ticker' => 'LII','stock_name' => 'LENNOX INTERNATIONAL INC'],
[
'ticker' => 'LIII','stock_name' => 'LEO HOLDINGS III CORP-A'],
[
'ticker' => 'LIII=','stock_name' => 'LEO HOLDINGS III CORP'],
[
'ticker' => 'LILA','stock_name' => 'LIBERTY LATIN AMERIC-CL A'],
[
'ticker' => 'LILAK','stock_name' => 'LIBERTY LATIN AMERIC-CL C'],
[
'ticker' => 'LILM','stock_name' => 'LILIUM NV'],
[
'ticker' => 'LIN','stock_name' => 'LINDE PLC'],
[
'ticker' => 'LINC','stock_name' => 'LINCOLN EDUCATIONAL SERVICES'],
[
'ticker' => 'LIND','stock_name' => 'LINDBLAD EXPEDITIONS HOLDING'],
[
'ticker' => 'LINK','stock_name' => 'INTERLINK ELECTRONICS INC'],
[
'ticker' => 'LIONU','stock_name' => 'LIONHEART III CORP'],
[
'ticker' => 'LIQT','stock_name' => 'LIQTECH INTERNATIONAL INC'],
[
'ticker' => 'LIT','stock_name' => 'GLOBAL X LITHIUM & BATTERY T'],
[
'ticker' => 'LITB','stock_name' => 'LIGHTINTHEBOX HOLDING-ADR'],
[
'ticker' => 'LITE','stock_name' => 'LUMENTUM HOLDINGS INC'],
[
'ticker' => 'LITT','stock_name' => 'LOGISTICS INNOVATION TECH-A'],
[
'ticker' => 'LITTU','stock_name' => 'LOGISTICS INNOVATION TECHNO'],
[
'ticker' => 'LIV','stock_name' => 'EMLES @HOME ETF'],
[
'ticker' => 'LIVE','stock_name' => 'LIVE VENTURES INC'],
[
'ticker' => 'LIVN','stock_name' => 'LIVANOVA PLC'],
[
'ticker' => 'LIXT','stock_name' => 'LIXTE BIOTECHNOLOGY HOLDINGS'],
[
'ticker' => 'LIZI','stock_name' => 'LIZHI INC'],
[
'ticker' => 'LJAQ','stock_name' => 'LIGHTJUMP ACQUISITION CORP'],
[
'ticker' => 'LJAQU','stock_name' => 'LIGHTJUMP ACQUISITION CORP'],
[
'ticker' => 'LJPC','stock_name' => 'LA JOLLA PHARMACEUTICAL CO'],
[
'ticker' => 'LKCO','stock_name' => 'LUOKUNG TECHNOLOGY CORP'],
[
'ticker' => 'LKFN','stock_name' => 'LAKELAND FINANCIAL CORP'],
[
'ticker' => 'LKOR','stock_name' => 'FLEXSHARES CREDIT-SCORED LON'],
[
'ticker' => 'LKQ','stock_name' => 'LKQ CORP'],
[
'ticker' => 'LL','stock_name' => 'LUMBER LIQUIDATORS HOLDINGS'],
[
'ticker' => 'LLL','stock_name' => 'JX LUXVENTURE LTD'],
[
'ticker' => 'LLNW','stock_name' => 'LIMELIGHT NETWORKS INC'],
[
'ticker' => 'LLY','stock_name' => 'ELI LILLY & CO'],
[
'ticker' => 'LMACA','stock_name' => 'LIBERTY MEDIA ACQUISITION -A'],
[
'ticker' => 'LMACU','stock_name' => 'LIBERTY MEDIA ACQUISITION CO'],
[
'ticker' => 'LMAO','stock_name' => 'LMF ACQUISITION OPPORTUNIT-A'],
[
'ticker' => 'LMAOU','stock_name' => 'LMF ACQUISITION OPPORTUNITIE'],
[
'ticker' => 'LMAT','stock_name' => 'LEMAITRE VASCULAR INC'],
[
'ticker' => 'LMB','stock_name' => 'LIMBACH HOLDINGS INC'],
[
'ticker' => 'LMBS','stock_name' => 'FIRST TRUST LOW DURATION OPP'],
[
'ticker' => 'LMDX','stock_name' => 'LUMIRADX LTD'],
[
'ticker' => 'LMFA','stock_name' => 'LM FUNDING AMERICA INC'],
[
'ticker' => 'LMND','stock_name' => 'LEMONADE INC'],
[
'ticker' => 'LMNL','stock_name' => 'LIMINAL BIOSCIENCES INC'],
[
'ticker' => 'LMNR','stock_name' => 'LIMONEIRA CO'],
[
'ticker' => 'LMPX','stock_name' => 'LMP AUTOMOTIVE HOLDINGS INC'],
[
'ticker' => 'LMRK','stock_name' => 'LANDMARK INFRASTRUCTURE PART'],
[
'ticker' => 'LMST','stock_name' => 'LIMESTONE BANCORP INC'],
[
'ticker' => 'LMT','stock_name' => 'LOCKHEED MARTIN CORP'],
[
'ticker' => 'LNC','stock_name' => 'LINCOLN NATIONAL CORP'],
[
'ticker' => 'LND','stock_name' => 'BRASILAGRO-CIA BRA - SPN ADR'],
[
'ticker' => 'LNDC','stock_name' => 'LANDEC CORP'],
[
'ticker' => 'LNFA','stock_name' => 'L&F ACQUISITION CORP/IL -A'],
[
'ticker' => 'LNFA=','stock_name' => 'L&F ACQUISITION CORP/IL'],
[
'ticker' => 'LNG','stock_name' => 'CHENIERE ENERGY INC'],
[
'ticker' => 'LNN','stock_name' => 'LINDSAY CORP'],
[
'ticker' => 'LNSR','stock_name' => 'LENSAR INC'],
[
'ticker' => 'LNT','stock_name' => 'ALLIANT ENERGY CORP'],
[
'ticker' => 'LNTH','stock_name' => 'LANTHEUS HOLDINGS INC'],
[
'ticker' => 'LOAN','stock_name' => 'MANHATTAN BRIDGE CAPITAL INC'],
[
'ticker' => 'LOB','stock_name' => 'LIVE OAK BANCSHARES INC'],
[
'ticker' => 'LOCC=','stock_name' => 'LIVE OAK CRESTVIEW CLIMATE A'],
[
'ticker' => 'LOCO','stock_name' => 'EL POLLO LOCO HOLDINGS INC'],
[
'ticker' => 'LODE','stock_name' => 'COMSTOCK MINING INC'],
[
'ticker' => 'LOGC','stock_name' => 'LOGICBIO THERAPEUTICS INC'],
[
'ticker' => 'LOGI','stock_name' => 'LOGITECH INTERNATIONAL-REG'],
[
'ticker' => 'LOKM','stock_name' => 'LIVE OAK MOBILITY ACQUISIT-A'],
[
'ticker' => 'LOKM=','stock_name' => 'LIVE OAK MOBILITY ACQUISITIO'],
[
'ticker' => 'LOMA','stock_name' => 'LOMA NEGRA CIA IND-SPON ADR'],
[
'ticker' => 'LOOP','stock_name' => 'LOOP INDUSTRIES INC'],
[
'ticker' => 'LOPE','stock_name' => 'GRAND CANYON EDUCATION INC'],
[
'ticker' => 'LOPP','stock_name' => 'Gabelli Love Our Planet & Pe'],
[
'ticker' => 'LOPX','stock_name' => 'DIREXION LOW PRICED STOCK ET'],
[
'ticker' => 'LORL','stock_name' => 'LORAL SPACE & COMMUNICATIONS'],
[
'ticker' => 'LOTZ','stock_name' => 'CARLOTZ INC'],
[
'ticker' => 'LOUP','stock_name' => 'INNOVATOR LOUP FRONTIER TECH'],
[
'ticker' => 'LOV','stock_name' => 'SPARK NETWORKS SE-ADR'],
[
'ticker' => 'LOVE','stock_name' => 'LOVESAC CO/THE'],
[
'ticker' => 'LOW','stock_name' => 'LOWE\'S COS INC'],
[
'ticker' => 'LOWC','stock_name' => 'SPDR MSCI ACWI LOW CARBON'],
[
'ticker' => 'LPCN','stock_name' => 'LIPOCINE INC'],
[
'ticker' => 'LPG','stock_name' => 'DORIAN LPG LTD'],
[
'ticker' => 'LPI','stock_name' => 'LAREDO PETROLEUM INC'],
[
'ticker' => 'LPL','stock_name' => 'LG DISPLAY CO LTD-ADR'],
[
'ticker' => 'LPLA','stock_name' => 'LPL FINANCIAL HOLDINGS INC'],
[
'ticker' => 'LPRO','stock_name' => 'OPEN LENDING CORP -  CL A'],
[
'ticker' => 'LPSN','stock_name' => 'LIVEPERSON INC'],
[
'ticker' => 'LPTH','stock_name' => 'LIGHTPATH TECHNOLOGIES INC-A'],
[
'ticker' => 'LPTX','stock_name' => 'LEAP THERAPEUTICS INC'],
[
'ticker' => 'LPX','stock_name' => 'LOUISIANA-PACIFIC CORP'],
[
'ticker' => 'LQD','stock_name' => 'ISHARES IBOXX INVESTMENT GRA'],
[
'ticker' => 'LQDA','stock_name' => 'LIQUIDIA CORP'],
[
'ticker' => 'LQDB','stock_name' => 'ISHARES BBB RATE CORP BOND'],
[
'ticker' => 'LQDH','stock_name' => 'ISHARES INT HEDG CORP BD ETF'],
[
'ticker' => 'LQDI','stock_name' => 'ISHARES INFLATION HEDGED COR'],
[
'ticker' => 'LQDT','stock_name' => 'LIQUIDITY SERVICES INC'],
[
'ticker' => 'LRCX','stock_name' => 'LAM RESEARCH CORP'],
[
'ticker' => 'LRFC','stock_name' => 'LOGAN RIDGE FINANCE CORP'],
[
'ticker' => 'LRGE','stock_name' => 'CLRBRDG LRG CAP GWTH ESG ETF'],
[
'ticker' => 'LRGF','stock_name' => 'ISHARES MSCI USA MULTIFACTOR'],
[
'ticker' => 'LRMR','stock_name' => 'LARIMAR THERAPEUTICS INC'],
[
'ticker' => 'LRN','stock_name' => 'STRIDE INC'],
[
'ticker' => 'LRNZ','stock_name' => 'TRUESHARES TECHNOLOGY AI & D'],
[
'ticker' => 'LSAF','stock_name' => 'LEADERSHARES ALPHAFACTOR US'],
[
'ticker' => 'LSAT','stock_name' => 'LEADERSHARES ALPHAFACT TACT'],
[
'ticker' => 'LSBK','stock_name' => 'LAKE SHORE BANCORP INC'],
[
'ticker' => 'LSCC','stock_name' => 'LATTICE SEMICONDUCTOR CORP'],
[
'ticker' => 'LSEA','stock_name' => 'LANDSEA HOMES CORP'],
[
'ticker' => 'LSF','stock_name' => 'LAIRD SUPERFOOD INC'],
[
'ticker' => 'LSI','stock_name' => 'LIFE STORAGE INC'],
[
'ticker' => 'LSLT','stock_name' => 'PACER SALT LOW TRUBETA US MA'],
[
'ticker' => 'LSPD','stock_name' => 'LIGHTSPEED COMMERCE INC'],
[
'ticker' => 'LSST','stock_name' => 'NATIXIS LOOMIS SAYLES SHRT D'],
[
'ticker' => 'LSTR','stock_name' => 'LANDSTAR SYSTEM INC'],
[
'ticker' => 'LSXMA','stock_name' => 'LIBERTY MEDIA COR-SIRIUSXM A'],
[
'ticker' => 'LSXMB','stock_name' => 'LIBERTY MEDIA COR-SIRIUSXM B'],
[
'ticker' => 'LSXMK','stock_name' => 'LIBERTY MEDIA COR-SIRIUSXM C'],
[
'ticker' => 'LTBR','stock_name' => 'LIGHTBRIDGE CORP'],
[
'ticker' => 'LTC','stock_name' => 'LTC PROPERTIES INC'],
[
'ticker' => 'LTCH','stock_name' => 'LATCH INC'],
[
'ticker' => 'LTH','stock_name' => 'LIFE TIME GROUP HOLDINGS INC'],
[
'ticker' => 'LTHM','stock_name' => 'LIVENT CORP'],
[
'ticker' => 'LTL','stock_name' => 'PROSHARES ULTRA TELECOMMUNIC'],
[
'ticker' => 'LTPZ','stock_name' => 'PIMCO 15+ YR US TIPS INDX'],
[
'ticker' => 'LTRN','stock_name' => 'LANTERN PHARMA INC'],
[
'ticker' => 'LTRPA','stock_name' => 'LIBERTY TRIPADVISOR HDG-A'],
[
'ticker' => 'LTRPB','stock_name' => 'LIBERTY TRIPADVISOR HDG-B'],
[
'ticker' => 'LTRX','stock_name' => 'LANTRONIX INC'],
[
'ticker' => 'LTRY','stock_name' => 'LOTTERY.COM'],
[
'ticker' => 'LU','stock_name' => 'LUFAX HOLDING LTD-ADR'],
[
'ticker' => 'LUB','stock_name' => 'LUBY\'S INC'],
[
'ticker' => 'LUCD','stock_name' => 'LUCID DIAGNOSTICS INC'],
[
'ticker' => 'LULU','stock_name' => 'LULULEMON ATHLETICA INC'],
[
'ticker' => 'LUMN','stock_name' => 'LUMEN TECHNOLOGIES INC'],
[
'ticker' => 'LUMO','stock_name' => 'LUMOS PHARMA INC'],
[
'ticker' => 'LUNA','stock_name' => 'LUNA INNOVATIONS INC'],
[
'ticker' => 'LUNG','stock_name' => 'PULMONX CORP'],
[
'ticker' => 'LUV','stock_name' => 'SOUTHWEST AIRLINES CO'],
[
'ticker' => 'LUXA','stock_name' => 'LUX HEALTH TECH ACQUIS-CL A'],
[
'ticker' => 'LUXAU','stock_name' => 'LUX HEALTH TECH ACQUISITION'],
[
'ticker' => 'LUXE','stock_name' => 'EMLES LUXURY GOODS ETF'],
[
'ticker' => 'LVACU','stock_name' => 'LAVA MEDTECH ACQUISITION COR'],
[
'ticker' => 'LVHD','stock_name' => 'LEGG MASON LO VOL HI DIV ETF'],
[
'ticker' => 'LVHI','stock_name' => 'LEGG MASON INTL LOW VOL DIV'],
[
'ticker' => 'LVO','stock_name' => 'LIVEONE INC'],
[
'ticker' => 'LVOL','stock_name' => 'AMERICAN CENTURY LOW VOL ETF'],
[
'ticker' => 'LVOX','stock_name' => 'LIVEVOX HOLDINGS INC'],
[
'ticker' => 'LVOXU','stock_name' => 'CRESCENT ACQUISITION CORP'],
[
'ticker' => 'LVRA','stock_name' => 'LEVERE HOLDINGS CORP-A'],
[
'ticker' => 'LVRAU','stock_name' => 'LEVERE HOLDINGS CORP'],
[
'ticker' => 'LVS','stock_name' => 'LAS VEGAS SANDS CORP'],
[
'ticker' => 'LVTX','stock_name' => 'LAVA THERAPEUTICS NV'],
[
'ticker' => 'LW','stock_name' => 'LAMB WESTON HOLDINGS INC'],
[
'ticker' => 'LWAY','stock_name' => 'LIFEWAY FOODS INC'],
[
'ticker' => 'LWLG','stock_name' => 'LIGHTWAVE LOGIC INC'],
[
'ticker' => 'LX','stock_name' => 'LEXINFINTECH HOLDINGS L-ADR'],
[
'ticker' => 'LXEH','stock_name' => 'LIXIANG EDUCATION HOLDIN-ADR'],
[
'ticker' => 'LXFR','stock_name' => 'LUXFER HOLDINGS PLC'],
[
'ticker' => 'LXP','stock_name' => 'LEXINGTON REALTY TRUST'],
[
'ticker' => 'LXRX','stock_name' => 'LEXICON PHARMACEUTICALS INC'],
[
'ticker' => 'LXU','stock_name' => 'LSB INDUSTRIES INC'],
[
'ticker' => 'LYB','stock_name' => 'LYONDELLBASELL INDU-CL A'],
[
'ticker' => 'LYEL','stock_name' => 'LYELL IMMUNOPHARMA INC'],
[
'ticker' => 'LYFE','stock_name' => '2NDVOTE LIFE NEUTRAL PLUS'],
[
'ticker' => 'LYFT','stock_name' => 'LYFT INC-A'],
[
'ticker' => 'LYG','stock_name' => 'LLOYDS BANKING GROUP PLC-ADR'],
[
'ticker' => 'LYL','stock_name' => 'DRAGON VICTORY INTERNATIONAL'],
[
'ticker' => 'LYLTV','stock_name' => 'LOYALTY VENTURES INC - W/I'],
[
'ticker' => 'LYRA','stock_name' => 'LYRA THERAPEUTICS INC'],
[
'ticker' => 'LYTS','stock_name' => 'LSI INDUSTRIES INC'],
[
'ticker' => 'LYV','stock_name' => 'LIVE NATION ENTERTAINMENT IN'],
[
'ticker' => 'LZ','stock_name' => 'LEGALZOOMCOM INC'],
[
'ticker' => 'LZB','stock_name' => 'LA-Z-BOY INC'],
[
'ticker' => 'M','stock_name' => 'MACY\'S INC'],
[
'ticker' => 'MA','stock_name' => 'MASTERCARD INC - A'],
[
'ticker' => 'MAA','stock_name' => 'MID-AMERICA APARTMENT COMM'],
[
'ticker' => 'MAAX','stock_name' => 'VANECK MUNI ALLOCATION ETF'],
[
'ticker' => 'MAC','stock_name' => 'MACERICH CO/THE'],
[
'ticker' => 'MACA','stock_name' => 'MORINGA ACQUISITION CORP -A'],
[
'ticker' => 'MACAU','stock_name' => 'MORINGA ACQUISITION CORP'],
[
'ticker' => 'MACC','stock_name' => 'MISSION ADVANCEMENT CORP-A'],
[
'ticker' => 'MACC=','stock_name' => 'MISSION ADVANCEMENT CORP'],
[
'ticker' => 'MACK','stock_name' => 'MERRIMACK PHARMACEUTICALS IN'],
[
'ticker' => 'MACQ','stock_name' => 'MCAP ACQUISITION CORP-A'],
[
'ticker' => 'MACQU','stock_name' => 'MCAP ACQUISITION CORP'],
[
'ticker' => 'MACU','stock_name' => 'MALLARD ACQUISITION CORP'],
[
'ticker' => 'MACUU','stock_name' => 'MALLARD ACQUISITION CORP'],
[
'ticker' => 'MAG','stock_name' => 'MAG SILVER CORP'],
[
'ticker' => 'MAGA','stock_name' => 'POINT BRIDGE GOP STOCK T ETF'],
[
'ticker' => 'MAIN','stock_name' => 'MAIN STREET CAPITAL CORP'],
[
'ticker' => 'MAKX','stock_name' => 'PROSHARES S&P KENSHO SMRT FA'],
[
'ticker' => 'MAMB','stock_name' => 'MONARCH AMBASSADOR INCOME ET'],
[
'ticker' => 'MAN','stock_name' => 'MANPOWERGROUP INC'],
[
'ticker' => 'MANH','stock_name' => 'MANHATTAN ASSOCIATES INC'],
[
'ticker' => 'MANT','stock_name' => 'MANTECH INTERNATIONAL CORP-A'],
[
'ticker' => 'MANU','stock_name' => 'MANCHESTER UNITED PLC-CL A'],
[
'ticker' => 'MAPS','stock_name' => 'WM TECHNOLOGY INC'],
[
'ticker' => 'MAQC','stock_name' => 'MAQUIA CAPITAL ACQUISITION-A'],
[
'ticker' => 'MAQCU','stock_name' => 'MAQUIA CAPITAL ACQUISITION'],
[
'ticker' => 'MAR','stock_name' => 'MARRIOTT INTERNATIONAL -CL A'],
[
'ticker' => 'MARA','stock_name' => 'MARATHON DIGITAL HOLDINGS IN'],
[
'ticker' => 'MARB','stock_name' => 'FIRST TRUST MERGER ARBITRAGE'],
[
'ticker' => 'MARK','stock_name' => 'REMARK HOLDINGS INC'],
[
'ticker' => 'MARPS','stock_name' => 'MARINE PETROLEUM TRUST'],
[
'ticker' => 'MARZ','stock_name' => 'TRUESHARES STRUC OUTCOME MAR'],
[
'ticker' => 'MAS','stock_name' => 'MASCO CORP'],
[
'ticker' => 'MASI','stock_name' => 'MASIMO CORP'],
[
'ticker' => 'MASS','stock_name' => '908 DEVICES INC'],
[
'ticker' => 'MAT','stock_name' => 'MATTEL INC'],
[
'ticker' => 'MATW','stock_name' => 'MATTHEWS INTL CORP-CLASS A'],
[
'ticker' => 'MATX','stock_name' => 'MATSON INC'],
[
'ticker' => 'MAV','stock_name' => 'PIONEER MUNICIPAL HIGH INCOM'],
[
'ticker' => 'MAX','stock_name' => 'MEDIAALPHA INC-CLASS A'],
[
'ticker' => 'MAXN','stock_name' => 'MAXEON SOLAR TECHNOLOGIE'],
[
'ticker' => 'MAXR','stock_name' => 'MAXAR TECHNOLOGIES INC'],
[
'ticker' => 'MAYS','stock_name' => 'MAYS (J.W.) INC'],
[
'ticker' => 'MAYZ','stock_name' => 'TS STR OUTCOME MAY ETF'],
[
'ticker' => 'MBAC','stock_name' => 'M3-BRIGADE ACQUISITION II-A'],
[
'ticker' => 'MBAC=','stock_name' => 'M3-BRIGADE ACQUISITION II CO'],
[
'ticker' => 'MBB','stock_name' => 'ISHARES MBS ETF'],
[
'ticker' => 'MBBB','stock_name' => 'VANECK MOODY\'S ANALYTICS BBB'],
[
'ticker' => 'MBCC','stock_name' => 'MONARCH BLUE CHIPS CORE ETF'],
[
'ticker' => 'MBCN','stock_name' => 'MIDDLEFIELD BANC CORP'],
[
'ticker' => 'MBI','stock_name' => 'MBIA INC'],
[
'ticker' => 'MBII','stock_name' => 'MARRONE BIO INNOVATIONS INC'],
[
'ticker' => 'MBIN','stock_name' => 'MERCHANTS BANCORP/IN'],
[
'ticker' => 'MBIO','stock_name' => 'MUSTANG BIO INC'],
[
'ticker' => 'MBND','stock_name' => 'SPDR NUVEEN MUNICIPAL BOND'],
[
'ticker' => 'MBOT','stock_name' => 'MICROBOT MEDICAL INC'],
[
'ticker' => 'MBOX','stock_name' => 'FREEDOM DAY DIVIDEND ETF'],
[
'ticker' => 'MBRX','stock_name' => 'MOLECULIN BIOTECH INC'],
[
'ticker' => 'MBSC=','stock_name' => 'M3-BRIGADE ACQUISITION III C'],
[
'ticker' => 'MBSD','stock_name' => 'FLEXSHARES DISCIPLINED DURAT'],
[
'ticker' => 'MBT','stock_name' => 'MOBILE TELESYSTEMS-SP ADR'],
[
'ticker' => 'MBTC','stock_name' => 'NOCTURNE ACQUISITION CORP'],
[
'ticker' => 'MBTCR','stock_name' => 'NOCTURNE ACQUISITION-RIGHTS'],
[
'ticker' => 'MBTCU','stock_name' => 'NOCTURNE ACQUISITION CORP'],
[
'ticker' => 'MBUU','stock_name' => 'MALIBU BOATS INC - A'],
[
'ticker' => 'MBWM','stock_name' => 'MERCANTILE BANK CORP'],
[
'ticker' => 'MC','stock_name' => 'MOELIS & CO - CLASS A'],
[
'ticker' => 'MCA','stock_name' => 'BLACKROCK MUNIYIELD CA QUALI'],
[
'ticker' => 'MCAAU','stock_name' => 'MOUNTAIN & CO I ACQUISITION'],
[
'ticker' => 'MCAE','stock_name' => 'MOUNTAIN CREST ACQUISITION C'],
[
'ticker' => 'MCAER','stock_name' => 'MOUNTAIN CREST ACQUISITI-RTS'],
[
'ticker' => 'MCAEU','stock_name' => 'MOUNTAIN CREST ACQUISITION C'],
[
'ticker' => 'MCAF','stock_name' => 'MOUNTAIN CREST ACQ CORP IV'],
[
'ticker' => 'MCAFR','stock_name' => 'MOUNTAIN CREST ACQ CORP -RTS'],
[
'ticker' => 'MCAFU','stock_name' => 'MOUNTAIN CREST ACQ CORP IV'],
[
'ticker' => 'MCB','stock_name' => 'METROPOLITAN BANK HOLDING CO'],
[
'ticker' => 'MCBC','stock_name' => 'MACATAWA BANK CORP'],
[
'ticker' => 'MCBS','stock_name' => 'METROCITY BANKSHARES INC'],
[
'ticker' => 'MCD','stock_name' => 'MCDONALD\'S CORP'],
[
'ticker' => 'MCEF','stock_name' => 'FIRST TRUST MUNICIPAL CEF IN'],
[
'ticker' => 'MCF','stock_name' => 'CONTANGO OIL & GAS'],
[
'ticker' => 'MCFE','stock_name' => 'MCAFEE CORP - CLASS A'],
[
'ticker' => 'MCFT','stock_name' => 'MASTERCRAFT BOAT HOLDINGS IN'],
[
'ticker' => 'MCG','stock_name' => 'MEMBERSHIP COLLECTIVE GRP -A'],
[
'ticker' => 'MCHI','stock_name' => 'ISHARES MSCI CHINA ETF'],
[
'ticker' => 'MCHP','stock_name' => 'MICROCHIP TECHNOLOGY INC'],
[
'ticker' => 'MCHX','stock_name' => 'MARCHEX INC-CLASS B'],
[
'ticker' => 'MCI','stock_name' => 'BARINGS CORPORATE INVESTORS'],
[
'ticker' => 'MCK','stock_name' => 'MCKESSON CORP'],
[
'ticker' => 'MCMJ','stock_name' => 'MERIDA MERGER CORP I'],
[
'ticker' => 'MCN','stock_name' => 'MADISON COVERED CALL & EQUIT'],
[
'ticker' => 'MCO','stock_name' => 'MOODY\'S CORP'],
[
'ticker' => 'MCR','stock_name' => 'MFS CHARTER INCOME TRUST'],
[
'ticker' => 'MCRB','stock_name' => 'SERES THERAPEUTICS INC'],
[
'ticker' => 'MCRI','stock_name' => 'MONARCH CASINO & RESORT INC'],
[
'ticker' => 'MCRO','stock_name' => 'IQ HEDGE MACRO TRACKER ETF'],
[
'ticker' => 'MCS','stock_name' => 'MARCUS CORPORATION'],
[
'ticker' => 'MCW','stock_name' => 'MISTER CAR WASH INC'],
[
'ticker' => 'MCY','stock_name' => 'MERCURY GENERAL CORP'],
[
'ticker' => 'MD','stock_name' => 'MEDNAX INC'],
[
'ticker' => 'MDB','stock_name' => 'MONGODB INC'],
[
'ticker' => 'MDC','stock_name' => 'MDC HOLDINGS INC'],
[
'ticker' => 'MDCP','stock_name' => 'VICTORYSHARES THB MID ESG'],
[
'ticker' => 'MDEV','stock_name' => 'FIRST TRUST INDXX MEDDEV'],
[
'ticker' => 'MDGL','stock_name' => 'MADRIGAL PHARMACEUTICALS INC'],
[
'ticker' => 'MDGS','stock_name' => 'MEDIGUS LTD - SPON ADR'],
[
'ticker' => 'MDH','stock_name' => 'MDH ACQUISITION CORP -CL A'],
[
'ticker' => 'MDH=','stock_name' => 'MDH ACQUISITION CORP'],
[
'ticker' => 'MDIA','stock_name' => 'MEDIACO HOLDING INC-CL A-WI'],
[
'ticker' => 'MDIV','stock_name' => 'FT MULTI-ASSET DIVERS INC'],
[
'ticker' => 'MDJH','stock_name' => 'MDJM LTD'],
[
'ticker' => 'MDLZ','stock_name' => 'MONDELEZ INTERNATIONAL INC-A'],
[
'ticker' => 'MDNA','stock_name' => 'MEDICENNA THERAPEUTICS CORP'],
[
'ticker' => 'MDP','stock_name' => 'MEREDITH CORP'],
[
'ticker' => 'MDRR','stock_name' => 'MEDALIST DIVERSIFIED REIT IN'],
[
'ticker' => 'MDRX','stock_name' => 'ALLSCRIPTS HEALTHCARE SOLUTI'],
[
'ticker' => 'MDT','stock_name' => 'MEDTRONIC PLC'],
[
'ticker' => 'MDU','stock_name' => 'MDU RESOURCES GROUP INC'],
[
'ticker' => 'MDVL','stock_name' => 'MEDAVAIL HOLDINGS INC'],
[
'ticker' => 'MDWD','stock_name' => 'MEDIWOUND LTD'],
[
'ticker' => 'MDWT','stock_name' => 'MIDWEST HOLDING INC'],
[
'ticker' => 'MDXG','stock_name' => 'MIMEDX GROUP INC'],
[
'ticker' => 'MDXH','stock_name' => 'MDXHEALTH SA-ADR'],
[
'ticker' => 'MDY','stock_name' => 'SPDR S&P MIDCAP 400 ETF TRST'],
[
'ticker' => 'MDYG','stock_name' => 'SPDR S&P 400 MID CAPGROWTH E'],
[
'ticker' => 'MDYV','stock_name' => 'SPDR S&P 400 MID CAP VALUE E'],
[
'ticker' => 'ME','stock_name' => '23ANDME HOLDING CO -CLASS A'],
[
'ticker' => 'MEAC','stock_name' => 'MERCURY ECOMMERCE ACQUISIT-A'],
[
'ticker' => 'MEACU','stock_name' => 'MERCURY ECOMMERCE ACQUISITIO'],
[
'ticker' => 'MEAR','stock_name' => 'BLACKROCK SHORT MATURITY MUN'],
[
'ticker' => 'MEC','stock_name' => 'MAYVILLE ENGINEERING CO INC'],
[
'ticker' => 'MED','stock_name' => 'MEDIFAST INC'],
[
'ticker' => 'MEDP','stock_name' => 'MEDPACE HOLDINGS INC'],
[
'ticker' => 'MEDS','stock_name' => 'TRXADE HEALTH INC'],
[
'ticker' => 'MEG','stock_name' => 'MONTROSE ENVIRONMENTAL GROUP'],
[
'ticker' => 'MEGI','stock_name' => 'MAINSTAY CBRE GLBL INFR MEGA'],
[
'ticker' => 'MEI','stock_name' => 'METHODE ELECTRONICS INC'],
[
'ticker' => 'MEIP','stock_name' => 'MEI PHARMA INC'],
[
'ticker' => 'MEKA','stock_name' => 'MELI KASZEK PIONEER CORP-A'],
[
'ticker' => 'MELI','stock_name' => 'MERCADOLIBRE INC'],
[
'ticker' => 'MENV','stock_name' => 'ADVISORSHARES NORTH SQUARE M'],
[
'ticker' => 'MEOA','stock_name' => 'MINORITY EQUALITY OPPORTUN-A'],
[
'ticker' => 'MEOAU','stock_name' => 'MINORITY EQUALITY OPPORTUNIT'],
[
'ticker' => 'MEOH','stock_name' => 'METHANEX CORP'],
[
'ticker' => 'MERC','stock_name' => 'MERCER INTERNATIONAL INC'],
[
'ticker' => 'MESA','stock_name' => 'MESA AIR GROUP INC'],
[
'ticker' => 'MESO','stock_name' => 'MESOBLAST LTD- SPON ADR'],
[
'ticker' => 'MET','stock_name' => 'METLIFE INC'],
[
'ticker' => 'META','stock_name' => 'ROUNDHILL BALL METAVERSE ETF'],
[
'ticker' => 'METC','stock_name' => 'RAMACO RESOURCES INC'],
[
'ticker' => 'METX','stock_name' => 'METEN HOLDING GROUP LTD'],
[
'ticker' => 'MEXX','stock_name' => 'DIREXION DLY MEXICO BULL 3X'],
[
'ticker' => 'MF','stock_name' => 'MISSFRESH LTD-ADR'],
[
'ticker' => 'MFA','stock_name' => 'MFA FINANCIAL INC'],
[
'ticker' => 'MFC','stock_name' => 'MANULIFE FINANCIAL CORP'],
[
'ticker' => 'MFD','stock_name' => 'MACQUARIE/FT GL INT/UT DV IN'],
[
'ticker' => 'MFDX','stock_name' => 'PIMCO RAFI DYNAMIC MULTI-FAC'],
[
'ticker' => 'MFEM','stock_name' => 'PIMCO RAFI DYNAMIC MULTI-FAC'],
[
'ticker' => 'MFG','stock_name' => 'MIZUHO FINANCIAL GROUP-ADR'],
[
'ticker' => 'MFGP','stock_name' => 'MICRO FOCUS INTL-SPN ADR'],
[
'ticker' => 'MFH','stock_name' => 'MERCURITY FINTECH HOLDING IN'],
[
'ticker' => 'MFIN','stock_name' => 'MEDALLION FINANCIAL CORP'],
[
'ticker' => 'MFL','stock_name' => 'BLACKROCK MUNIHOLDINGS QUALI'],
[
'ticker' => 'MFM','stock_name' => 'MFS MUNICIPAL INCOME TRUST'],
[
'ticker' => 'MFMS','stock_name' => 'MFAM SMALL-CAP GROWTH ETF'],
[
'ticker' => 'MFUL','stock_name' => 'MINDFUL CONSERVATIVE ETF'],
[
'ticker' => 'MFUS','stock_name' => 'PIMCO RAFI DYNAMIC MULTI-FAC'],
[
'ticker' => 'MFV','stock_name' => 'MFS SPECIAL VALUE TRUST'],
[
'ticker' => 'MG','stock_name' => 'MISTRAS GROUP INC'],
[
'ticker' => 'MGA','stock_name' => 'MAGNA INTERNATIONAL INC'],
[
'ticker' => 'MGC','stock_name' => 'VANGUARD MEGA CAP ETF'],
[
'ticker' => 'MGEE','stock_name' => 'MGE ENERGY INC'],
[
'ticker' => 'MGF','stock_name' => 'MFS GOVT MARKETS INC TRUST'],
[
'ticker' => 'MGI','stock_name' => 'MONEYGRAM INTERNATIONAL INC'],
[
'ticker' => 'MGIC','stock_name' => 'MAGIC SOFTWARE ENTERPRISES'],
[
'ticker' => 'MGK','stock_name' => 'VANGUARD MEGA CAP GROWTH ETF'],
[
'ticker' => 'MGLN','stock_name' => 'MAGELLAN HEALTH INC'],
[
'ticker' => 'MGM','stock_name' => 'MGM RESORTS INTERNATIONAL'],
[
'ticker' => 'MGMT','stock_name' => 'BALLAST SMALL/MID CAP ETF'],
[
'ticker' => 'MGNI','stock_name' => 'MAGNITE INC'],
[
'ticker' => 'MGNX','stock_name' => 'MACROGENICS INC'],
[
'ticker' => 'MGP','stock_name' => 'MGM GROWTH PROPERTIES LLC-A'],
[
'ticker' => 'MGPI','stock_name' => 'MGP INGREDIENTS INC'],
[
'ticker' => 'MGRC','stock_name' => 'MCGRATH RENTCORP'],
[
'ticker' => 'MGTA','stock_name' => 'MAGENTA THERAPEUTICS INC'],
[
'ticker' => 'MGTX','stock_name' => 'MEIRAGTX HOLDINGS PLC'],
[
'ticker' => 'MGU','stock_name' => 'MACQUARIE GLOBAL INFR TOT RT'],
[
'ticker' => 'MGV','stock_name' => 'VANGUARD MEGA CAP VALUE ETF'],
[
'ticker' => 'MGY','stock_name' => 'MAGNOLIA OIL & GAS CORP - A'],
[
'ticker' => 'MGYR','stock_name' => 'MAGYAR BANCORP INC'],
[
'ticker' => 'MHD','stock_name' => 'BLACKROCK MUNIHOLDINGS FUND'],
[
'ticker' => 'MHF','stock_name' => 'WESTERN ASSET MUNICIPAL HIGH'],
[
'ticker' => 'MHH','stock_name' => 'MASTECH DIGITAL INC'],
[
'ticker' => 'MHI','stock_name' => 'PIONEER MUNICIPAL HIGH INCOM'],
[
'ticker' => 'MHK','stock_name' => 'MOHAWK INDUSTRIES INC'],
[
'ticker' => 'MHLD','stock_name' => 'MAIDEN HOLDINGS LTD'],
[
'ticker' => 'MHN','stock_name' => 'BLACKROCK MUNIHOLDINGS NY QU'],
[
'ticker' => 'MHO','stock_name' => 'M/I HOMES INC'],
[
'ticker' => 'MIC','stock_name' => 'MACQUARIE INFRASTRUCTURE HOL'],
[
'ticker' => 'MICT','stock_name' => 'MICT INC'],
[
'ticker' => 'MID','stock_name' => 'AMERICAN CENTURY MID CAP GRO'],
[
'ticker' => 'MIDD','stock_name' => 'MIDDLEBY CORP'],
[
'ticker' => 'MIDE','stock_name' => 'XTRACKERS S&P MIDCAP 400 ESG'],
[
'ticker' => 'MIDF','stock_name' => 'ISHARES MSCI USA MID-CAP MUL'],
[
'ticker' => 'MIDU','stock_name' => 'DIREXION DLY MID CAP BULL 3X'],
[
'ticker' => 'MIG','stock_name' => 'VANECK MOODY\'S ANALYTICS IG'],
[
'ticker' => 'MIGI','stock_name' => 'MAWSON INFRASTRUCTURE GROUP'],
[
'ticker' => 'MILE','stock_name' => 'METROMILE INC'],
[
'ticker' => 'MILN','stock_name' => 'GLOBAL X MILLENNIAL CONSUMER'],
[
'ticker' => 'MIME','stock_name' => 'MIMECAST LTD'],
[
'ticker' => 'MIMO','stock_name' => 'AIRSPAN NETWORKS HOLDINGS IN'],
[
'ticker' => 'MIN','stock_name' => 'MFS INTERMEDIATE INC TRUST'],
[
'ticker' => 'MINC','stock_name' => 'ADVSHRS NEWFLEET MULTSEC INC'],
[
'ticker' => 'MIND','stock_name' => 'MIND TECHNOLOGY INC'],
[
'ticker' => 'MINM','stock_name' => 'MINIM INC'],
[
'ticker' => 'MINN','stock_name' => 'MAIRS & POWER MN MUNI BOND'],
[
'ticker' => 'MINO','stock_name' => 'PIMCO MUNICIPAL INCOME OPPOR'],
[
'ticker' => 'MINT','stock_name' => 'PIMCO ENHANCED SHORT MATURIT'],
[
'ticker' => 'MIO','stock_name' => 'PIONEER MUNI HIGH INC OPP'],
[
'ticker' => 'MIR','stock_name' => 'MIRION TECHNOLOGIES INC'],
[
'ticker' => 'MIRM','stock_name' => 'MIRUM PHARMACEUTICALS INC'],
[
'ticker' => 'MIRO','stock_name' => 'MIROMATRIX MEDICAL INC'],
[
'ticker' => 'MIST','stock_name' => 'MILESTONE PHARMACEUTICALS IN'],
[
'ticker' => 'MIT','stock_name' => 'MASON INDUSTRIAL TECHN-CL A'],
[
'ticker' => 'MIT=','stock_name' => 'MASON INDUSTRIAL TECHNOLOGY'],
[
'ticker' => 'MITA','stock_name' => 'COLISEUM ACQUISITION CORP-A'],
[
'ticker' => 'MITAU','stock_name' => 'COLISEUM ACQUISITION CORP'],
[
'ticker' => 'MITC','stock_name' => 'MEAT-TECH 3D LTD - ADR'],
[
'ticker' => 'MITK','stock_name' => 'MITEK SYSTEMS INC'],
[
'ticker' => 'MITO','stock_name' => 'STEALTH BIOTHERAPEUTICS CORP'],
[
'ticker' => 'MITQ','stock_name' => 'MOVING IMAGE TECHNOLOGIES IN'],
[
'ticker' => 'MITT','stock_name' => 'AG MORTGAGE INVESTMENT TRUST'],
[
'ticker' => 'MIXT','stock_name' => 'MIX TELEMATICS LTD-SP ADR'],
[
'ticker' => 'MIY','stock_name' => 'BLACKROCK MUNIYIELD MI QUALI'],
[
'ticker' => 'MJ','stock_name' => 'ETFMG ALTERNATIVE HARVEST'],
[
'ticker' => 'MJIN','stock_name' => 'ETFMG 2X DLY INV ALT HARVEST'],
[
'ticker' => 'MJJ','stock_name' => 'MICROSECTORS CANNABIS ETN'],
[
'ticker' => 'MJO','stock_name' => 'MICROSECTORS CANNABIS 2X LEV'],
[
'ticker' => 'MJUS','stock_name' => 'ETFMG U.S. ALTERNATIVE HARVE'],
[
'ticker' => 'MJXL','stock_name' => 'ETFMG 2X DAILY ALT HARVEST'],
[
'ticker' => 'MKC','stock_name' => 'MCCORMICK & CO-NON VTG SHRS'],
[
'ticker' => 'MKC.V','stock_name' => 'MCCORMICK & CO INC VTG COM'],
[
'ticker' => 'MKD','stock_name' => 'MOLECULAR DATA INC - ADR'],
[
'ticker' => 'MKFG','stock_name' => 'MARKFORGED HOLDING CORP'],
[
'ticker' => 'MKL','stock_name' => 'MARKEL CORP'],
[
'ticker' => 'MKSI','stock_name' => 'MKS INSTRUMENTS INC'],
[
'ticker' => 'MKTW','stock_name' => 'MARKETWISE INC'],
[
'ticker' => 'MKTX','stock_name' => 'MARKETAXESS HOLDINGS INC'],
[
'ticker' => 'ML','stock_name' => 'MONEYLION INC'],
[
'ticker' => 'MLAB','stock_name' => 'MESA LABORATORIES INC'],
[
'ticker' => 'MLAC','stock_name' => 'MALACCA STRAITS ACQUISI-CL A'],
[
'ticker' => 'MLACU','stock_name' => 'MALACCA STRAITS ACQUISITION'],
[
'ticker' => 'MLAIU','stock_name' => 'MCLAREN TECHNOLOGY ACQUISITI'],
[
'ticker' => 'MLCO','stock_name' => 'MELCO RESORTS & ENTERT-ADR'],
[
'ticker' => 'MLI','stock_name' => 'MUELLER INDUSTRIES INC'],
[
'ticker' => 'MLKN','stock_name' => 'MILLERKNOLL INC'],
[
'ticker' => 'MLM','stock_name' => 'MARTIN MARIETTA MATERIALS'],
[
'ticker' => 'MLN','stock_name' => 'VANECK LONG MUNI ETF'],
[
'ticker' => 'MLNK','stock_name' => 'MERIDIANLINK INC'],
[
'ticker' => 'MLP','stock_name' => 'MAUI LAND & PINEAPPLE CO'],
[
'ticker' => 'MLPA','stock_name' => 'GLOBAL X MLP ETF'],
[
'ticker' => 'MLPB','stock_name' => 'ETRACS ALERIAN INFRAST SER B'],
[
'ticker' => 'MLPO','stock_name' => 'CS S&P MLP INDEX ETN'],
[
'ticker' => 'MLPR','stock_name' => 'ETRACS 150% ALERIAN MLP ETN'],
[
'ticker' => 'MLPX','stock_name' => 'GLOBAL X MLP & ENERGY INFRAS'],
[
'ticker' => 'MLR','stock_name' => 'MILLER INDUSTRIES INC/TENN'],
[
'ticker' => 'MLSS','stock_name' => 'MILESTONE SCIENTIFIC INC'],
[
'ticker' => 'MLVF','stock_name' => 'MALVERN BANCORP INC'],
[
'ticker' => 'MMAT','stock_name' => 'META MATERIALS INC'],
[
'ticker' => 'MMC','stock_name' => 'MARSH & MCLENNAN COS'],
[
'ticker' => 'MMD','stock_name' => 'MAINSTAY MACKAY DEFINEDTERM'],
[
'ticker' => 'MMI','stock_name' => 'MARCUS & MILLICHAP INC'],
[
'ticker' => 'MMIN','stock_name' => 'IQ MACKAY MUNICIPAL INSURED'],
[
'ticker' => 'MMIT','stock_name' => 'IQ MACKAY MUNICIPAL INTERMED'],
[
'ticker' => 'MMLG','stock_name' => 'FIRST TRUST MULTI-MAN LG ETF'],
[
'ticker' => 'MMLP','stock_name' => 'MARTIN MIDSTREAM PARTNERS LP'],
[
'ticker' => 'MMM','stock_name' => '3M CO'],
[
'ticker' => 'MMMB','stock_name' => 'MAMAMANCINI\'S HOLDINGS INC'],
[
'ticker' => 'MMP','stock_name' => 'MAGELLAN MIDSTREAM PARTNERS'],
[
'ticker' => 'MMS','stock_name' => 'MAXIMUS INC'],
[
'ticker' => 'MMSC','stock_name' => 'FIRST TRUST MULTI-MANAGER SM'],
[
'ticker' => 'MMSI','stock_name' => 'MERIT MEDICAL SYSTEMS INC'],
[
'ticker' => 'MMT','stock_name' => 'MFS MULTIMARKET INC TRUST'],
[
'ticker' => 'MMTM','stock_name' => 'SPDR S&P1500 MOMENTUM TILT'],
[
'ticker' => 'MMU','stock_name' => 'WESTERN ASSET MANAGED MUNICI'],
[
'ticker' => 'MMX','stock_name' => 'MAVERIX METALS INC'],
[
'ticker' => 'MMYT','stock_name' => 'MAKEMYTRIP LTD'],
[
'ticker' => 'MN','stock_name' => 'MANNING & NAPIER INC'],
[
'ticker' => 'MNA','stock_name' => 'IQ MERGER ARBITRAGE ETF'],
[
'ticker' => 'MNDO','stock_name' => 'MIND CTI LTD'],
[
'ticker' => 'MNDT','stock_name' => 'MANDIANT INC'],
[
'ticker' => 'MNDY','stock_name' => 'MONDAY.COM LTD'],
[
'ticker' => 'MNKD','stock_name' => 'MANNKIND CORP'],
[
'ticker' => 'MNMD','stock_name' => 'MIND MEDICINE MINDMED INC'],
[
'ticker' => 'MNOV','stock_name' => 'MEDICINOVA INC'],
[
'ticker' => 'MNP','stock_name' => 'WESTERN ASSET MUNICIPAL PART'],
[
'ticker' => 'MNPR','stock_name' => 'MONOPAR THERAPEUTICS INC'],
[
'ticker' => 'MNR','stock_name' => 'MONMOUTH REAL ESTATE INV COR'],
[
'ticker' => 'MNRL','stock_name' => 'BRIGHAM MINERALS INC-CL A'],
[
'ticker' => 'MNRO','stock_name' => 'MONRO INC'],
[
'ticker' => 'MNSB','stock_name' => 'MAINSTREET BANCSHARES INC'],
[
'ticker' => 'MNSO','stock_name' => 'MINISO GROUP HOLDING LTD-ADR'],
[
'ticker' => 'MNST','stock_name' => 'MONSTER BEVERAGE CORP'],
[
'ticker' => 'MNTK','stock_name' => 'MONTAUK RENEWABLES INC'],
[
'ticker' => 'MNTS','stock_name' => 'MOMENTUS INC'],
[
'ticker' => 'MNTV','stock_name' => 'MOMENTIVE GLOBAL INC'],
[
'ticker' => 'MNTX','stock_name' => 'MANITEX INTERNATIONAL INC'],
[
'ticker' => 'MO','stock_name' => 'ALTRIA GROUP INC'],
[
'ticker' => 'MOAT','stock_name' => 'VANECK MORNINGSTAR WIDE MOAT'],
[
'ticker' => 'MOD','stock_name' => 'MODINE MANUFACTURING CO'],
[
'ticker' => 'MODN','stock_name' => 'MODEL N INC'],
[
'ticker' => 'MODV','stock_name' => 'MODIVCARE INC'],
[
'ticker' => 'MOFG','stock_name' => 'MIDWESTONE FINANCIAL GROUP I'],
[
'ticker' => 'MOG.A','stock_name' => 'MOOG INC-CLASS A'],
[
'ticker' => 'MOG.B','stock_name' => 'MOOG INC-CLASS B'],
[
'ticker' => 'MOGO','stock_name' => 'MOGO INC'],
[
'ticker' => 'MOGU','stock_name' => 'MOGU INC-ADR'],
[
'ticker' => 'MOH','stock_name' => 'MOLINA HEALTHCARE INC'],
[
'ticker' => 'MOHO','stock_name' => 'ECMOHO LTD'],
[
'ticker' => 'MOHR','stock_name' => 'MOHR GROWTH ETF'],
[
'ticker' => 'MOLN','stock_name' => 'MOLECULAR PARTNERS AG -ADR'],
[
'ticker' => 'MOMO','stock_name' => 'HELLO GROUP INC -SPN ADR'],
[
'ticker' => 'MON','stock_name' => 'MONUMENT CIRCLE ACQUI-CL A'],
[
'ticker' => 'MONCU','stock_name' => 'MONUMENT CIRCLE ACQUISITION'],
[
'ticker' => 'MOO','stock_name' => 'VANECK AGRIBUSINESS ETF'],
[
'ticker' => 'MOON','stock_name' => 'DIREXION MOONSHOT INNOVATORS'],
[
'ticker' => 'MOR','stock_name' => 'MORPHOSYS AG ADR'],
[
'ticker' => 'MORF','stock_name' => 'MORPHIC HOLDING INC'],
[
'ticker' => 'MORN','stock_name' => 'MORNINGSTAR INC'],
[
'ticker' => 'MORT','stock_name' => 'VANECK MORTGAGE REIT INCOME'],
[
'ticker' => 'MOS','stock_name' => 'MOSAIC CO/THE'],
[
'ticker' => 'MOSY','stock_name' => 'MOSYS INC'],
[
'ticker' => 'MOTE','stock_name' => 'VANECK MORNINGSTAR ESG MOAT'],
[
'ticker' => 'MOTI','stock_name' => 'VANECK MSTAR INT MOAT ETF'],
[
'ticker' => 'MOTN','stock_name' => 'MOTION ACQUISITION CORP-CL A'],
[
'ticker' => 'MOTNU','stock_name' => 'MOTION ACQUISITION CORP'],
[
'ticker' => 'MOTO','stock_name' => 'SMARTETFS SMART TRANSP/TECH'],
[
'ticker' => 'MOTS','stock_name' => 'MOTUS GI HOLDINGS INC'],
[
'ticker' => 'MOTV','stock_name' => 'MOTIVE CAPITAL CORP -CL A'],
[
'ticker' => 'MOTV=','stock_name' => 'MOTIVE CAPITAL CORP'],
[
'ticker' => 'MOV','stock_name' => 'MOVADO GROUP INC'],
[
'ticker' => 'MOVE','stock_name' => 'MOVANO INC'],
[
'ticker' => 'MOXC','stock_name' => 'MOXIAN BVI INC'],
[
'ticker' => 'MP','stock_name' => 'MP MATERIALS CORP'],
[
'ticker' => 'MPA','stock_name' => 'BLACKROCK MUNIYIELD PENNSYLV'],
[
'ticker' => 'MPAA','stock_name' => 'MOTORCAR PARTS OF AMERICA IN'],
[
'ticker' => 'MPAC','stock_name' => 'MODEL PERFORMANCE ACQUISIT-A'],
[
'ticker' => 'MPACR','stock_name' => 'MODEL PERFORMANCE ACQ-RIGHTS'],
[
'ticker' => 'MPACU','stock_name' => 'MODEL PERFORMANCE ACQUISITIO'],
[
'ticker' => 'MPB','stock_name' => 'MID PENN BANCORP INC'],
[
'ticker' => 'MPC','stock_name' => 'MARATHON PETROLEUM CORP'],
[
'ticker' => 'MPLN','stock_name' => 'MULTIPLAN CORP'],
[
'ticker' => 'MPLX','stock_name' => 'MPLX LP'],
[
'ticker' => 'MPRAU','stock_name' => 'MERCATO PARTNERS ACQUISITION'],
[
'ticker' => 'MPRO','stock_name' => 'MONARCH PROCAP ETF'],
[
'ticker' => 'MPV','stock_name' => 'BARINGS PARTICIPATION INVEST'],
[
'ticker' => 'MPW','stock_name' => 'MEDICAL PROPERTIES TRUST INC'],
[
'ticker' => 'MPWR','stock_name' => 'MONOLITHIC POWER SYSTEMS INC'],
[
'ticker' => 'MPX','stock_name' => 'MARINE PRODUCTS CORP'],
[
'ticker' => 'MQ','stock_name' => 'MARQETA INC-A'],
[
'ticker' => 'MQT','stock_name' => 'BLACKROCK MUNIYIELD QUAL II'],
[
'ticker' => 'MQY','stock_name' => 'BLACKROCK MUNIYIELD QUALITY'],
[
'ticker' => 'MRAD','stock_name' => 'SMARTETFS ADVERT & MRKT TECH'],
[
'ticker' => 'MRAI','stock_name' => 'MARPAI INC-CLASS A'],
[
'ticker' => 'MRAM','stock_name' => 'EVERSPIN TECHNOLOGIES INC'],
[
'ticker' => 'MRBK','stock_name' => 'MERIDIAN CORP'],
[
'ticker' => 'MRC','stock_name' => 'MRC GLOBAL INC'],
[
'ticker' => 'MRCC','stock_name' => 'MONROE CAPITAL CORP'],
[
'ticker' => 'MRCY','stock_name' => 'MERCURY SYSTEMS INC'],
[
'ticker' => 'MREO','stock_name' => 'MEREO BIOPHARMA GROUP PL-ADR'],
[
'ticker' => 'MRGR','stock_name' => 'PROSHARES MERGER ETF'],
[
'ticker' => 'MRIN','stock_name' => 'MARIN SOFTWARE INC'],
[
'ticker' => 'MRK','stock_name' => 'MERCK & CO. INC.'],
[
'ticker' => 'MRKR','stock_name' => 'MARKER THERAPEUTICS INC'],
[
'ticker' => 'MRLN','stock_name' => 'MARLIN BUSINESS SERVICES INC'],
[
'ticker' => 'MRM','stock_name' => 'MEDIROM HEALTHCARE TECHNOLOG'],
[
'ticker' => 'MRNA','stock_name' => 'MODERNA INC'],
[
'ticker' => 'MRNS','stock_name' => 'MARINUS PHARMACEUTICALS INC'],
[
'ticker' => 'MRO','stock_name' => 'MARATHON OIL CORP'],
[
'ticker' => 'MRSK','stock_name' => 'TOEWS AGILITY SHARES MANAGED'],
[
'ticker' => 'MRSN','stock_name' => 'MERSANA THERAPEUTICS INC'],
[
'ticker' => 'MRTN','stock_name' => 'MARTEN TRANSPORT LTD'],
[
'ticker' => 'MRTX','stock_name' => 'MIRATI THERAPEUTICS INC'],
[
'ticker' => 'MRUS','stock_name' => 'MERUS NV'],
[
'ticker' => 'MRVI','stock_name' => 'MARAVAI LIFESCIENCES HLDGS-A'],
[
'ticker' => 'MRVL','stock_name' => 'MARVELL TECHNOLOGY INC'],
[
'ticker' => 'MS','stock_name' => 'MORGAN STANLEY'],
[
'ticker' => 'MSA','stock_name' => 'MSA SAFETY INC'],
[
'ticker' => 'MSAC','stock_name' => 'MEDICUS SCIENCES ACQUISITI-A'],
[
'ticker' => 'MSB','stock_name' => 'MESABI TRUST'],
[
'ticker' => 'MSBI','stock_name' => 'MIDLAND STATES BANCORP INC'],
[
'ticker' => 'MSC','stock_name' => 'STUDIO CITY INTERNATIONA-ADR'],
[
'ticker' => 'MSCI','stock_name' => 'MSCI INC'],
[
'ticker' => 'MSD','stock_name' => 'MORGAN STANLEY EMRG MKT DEBT'],
[
'ticker' => 'MSDA','stock_name' => 'MSD ACQUISITION CORP-A'],
[
'ticker' => 'MSDAU','stock_name' => 'MSD ACQUISITION CORP'],
[
'ticker' => 'MSEX','stock_name' => 'MIDDLESEX WATER CO'],
[
'ticker' => 'MSFT','stock_name' => 'MICROSOFT CORP'],
[
'ticker' => 'MSGE','stock_name' => 'MADISON SQUARE GARDEN ENTERT'],
[
'ticker' => 'MSGM','stock_name' => 'MOTORSPORT GAMES INC-A'],
[
'ticker' => 'MSGS','stock_name' => 'MADISON SQUARE GARDEN SPORTS'],
[
'ticker' => 'MSI','stock_name' => 'MOTOROLA SOLUTIONS INC'],
[
'ticker' => 'MSM','stock_name' => 'MSC INDUSTRIAL DIRECT CO-A'],
[
'ticker' => 'MSN','stock_name' => 'EMERSON RADIO CORP'],
[
'ticker' => 'MSOS','stock_name' => 'ADVISORSHARES PURE US CANN'],
[
'ticker' => 'MSP','stock_name' => 'DATTO HOLDING CORP'],
[
'ticker' => 'MSTB','stock_name' => 'LHA MARKET STATE TACTICAL'],
[
'ticker' => 'MSTR','stock_name' => 'MICROSTRATEGY INC-CL A'],
[
'ticker' => 'MSVB','stock_name' => 'MID-SOUTHERN BANCORP INC'],
[
'ticker' => 'MSVX','stock_name' => 'LHA MARKET STATE ALPHA SEEKE'],
[
'ticker' => 'MT','stock_name' => 'ARCELORMITTAL-NY REGISTERED'],
[
'ticker' => 'MTA','stock_name' => 'METALLA ROYALTY & STREAMING'],
[
'ticker' => 'MTAC','stock_name' => 'MEDTECH ACQUISITION CORP-A'],
[
'ticker' => 'MTACU','stock_name' => 'MEDTECH ACQUISITION CORP/NY'],
[
'ticker' => 'MTAL','stock_name' => 'METALS ACQUISITION CORP-CL A'],
[
'ticker' => 'MTAL=','stock_name' => 'METALS ACQUISITION CORP'],
[
'ticker' => 'MTB','stock_name' => 'M & T BANK CORP'],
[
'ticker' => 'MTBC','stock_name' => 'CARECLOUD INC'],
[
'ticker' => 'MTC','stock_name' => 'MMTEC INC'],
[
'ticker' => 'MTCH','stock_name' => 'MATCH GROUP INC'],
[
'ticker' => 'MTCR','stock_name' => 'METACRINE INC'],
[
'ticker' => 'MTD','stock_name' => 'METTLER-TOLEDO INTERNATIONAL'],
[
'ticker' => 'MTDR','stock_name' => 'MATADOR RESOURCES CO'],
[
'ticker' => 'MTEM','stock_name' => 'MOLECULAR TEMPLATES INC'],
[
'ticker' => 'MTEX','stock_name' => 'MANNATECH INC'],
[
'ticker' => 'MTG','stock_name' => 'MGIC INVESTMENT CORP'],
[
'ticker' => 'MTGP','stock_name' => 'WISDOMTREE MTGE PLUS BOND'],
[
'ticker' => 'MTH','stock_name' => 'MERITAGE HOMES CORP'],
[
'ticker' => 'MTL','stock_name' => 'MECHEL PJSC-SPONSORED ADR'],
[
'ticker' => 'MTL-','stock_name' => 'MECHEL-PREF SPON ADR'],
[
'ticker' => 'MTLS','stock_name' => 'MATERIALISE NV-ADR'],
[
'ticker' => 'MTN','stock_name' => 'VAIL RESORTS INC'],
[
'ticker' => 'MTNB','stock_name' => 'MATINAS BIOPHARMA HOLDINGS I'],
[
'ticker' => 'MTOR','stock_name' => 'MERITOR INC'],
[
'ticker' => 'MTP','stock_name' => 'MIDATECH PHARMA PLC-ADR'],
[
'ticker' => 'MTR','stock_name' => 'MESA ROYALTY TRUST'],
[
'ticker' => 'MTRN','stock_name' => 'MATERION CORP'],
[
'ticker' => 'MTRX','stock_name' => 'MATRIX SERVICE CO'],
[
'ticker' => 'MTRYU','stock_name' => 'MONTEREY BIO ACQUISITION COR'],
[
'ticker' => 'MTSI','stock_name' => 'MACOM TECHNOLOGY SOLUTIONS H'],
[
'ticker' => 'MTTR','stock_name' => 'MATTERPORT INC'],
[
'ticker' => 'MTUL','stock_name' => 'ETRACS 2X MOMNTM FACTR TR'],
[
'ticker' => 'MTUM','stock_name' => 'ISHARES MSCI USA MOMENTUM FA'],
[
'ticker' => 'MTVR','stock_name' => 'FOUNT METAVERSE ETF'],
[
'ticker' => 'MTW','stock_name' => 'MANITOWOC COMPANY INC'],
[
'ticker' => 'MTX','stock_name' => 'MINERALS TECHNOLOGIES INC'],
[
'ticker' => 'MTZ','stock_name' => 'MASTEC INC'],
[
'ticker' => 'MU','stock_name' => 'MICRON TECHNOLOGY INC'],
[
'ticker' => 'MUA','stock_name' => 'BLACKROCK MUNIASSETS FUND'],
[
'ticker' => 'MUB','stock_name' => 'ISHARES NATIONAL MUNI BOND E'],
[
'ticker' => 'MUC','stock_name' => 'BLACKROCK MUNIHOLDINGS CA QU'],
[
'ticker' => 'MUDS','stock_name' => 'MUDRICK CAPITAL ACQUISITIO-A'],
[
'ticker' => 'MUDSU','stock_name' => 'MUDRICK CAPITAL ACQUIS II'],
[
'ticker' => 'MUE','stock_name' => 'BLACKROCK MUNIHOLDINGS QU II'],
[
'ticker' => 'MUFG','stock_name' => 'MITSUBISHI UFJ FINL-SPON ADR'],
[
'ticker' => 'MUI','stock_name' => 'BLACKROCK MUNICIPAL INCOME F'],
[
'ticker' => 'MUJ','stock_name' => 'BLACKROCK MUNIHOLDINGS NJ QU'],
[
'ticker' => 'MULN','stock_name' => 'NET ELEMENT INC'],
[
'ticker' => 'MUNI','stock_name' => 'PIMCO INTERMEDIATE MUNICIPAL'],
[
'ticker' => 'MUR','stock_name' => 'MURPHY OIL CORP'],
[
'ticker' => 'MUSA','stock_name' => 'MURPHY USA INC'],
[
'ticker' => 'MUSI','stock_name' => 'AMERICAN CENT MUTLISEC INCOM'],
[
'ticker' => 'MUST','stock_name' => 'COLUMBIA MULTI-SECTOR MUNICI'],
[
'ticker' => 'MUX','stock_name' => 'MCEWEN MINING INC'],
[
'ticker' => 'MVBF','stock_name' => 'MVB FINANCIAL CORP'],
[
'ticker' => 'MVF','stock_name' => 'BLACKROCK MUNIVEST FUND'],
[
'ticker' => 'MVIS','stock_name' => 'MICROVISION INC'],
[
'ticker' => 'MVO','stock_name' => 'MV OIL TRUST'],
[
'ticker' => 'MVP','stock_name' => 'ROUNDHILL SPRTS MEDIA APPARE'],
[
'ticker' => 'MVPS','stock_name' => 'AMPLIFY THEMATIC ALL STARS'],
[
'ticker' => 'MVRL','stock_name' => 'ETRACS 150% MORTGAG REIT ETN'],
[
'ticker' => 'MVST','stock_name' => 'MICROVAST HOLDINGS INC'],
[
'ticker' => 'MVT','stock_name' => 'BLACKROCK MUNIVEST FUND II'],
[
'ticker' => 'MVV','stock_name' => 'PROSHARES ULTRA MIDCAP400'],
[
'ticker' => 'MWA','stock_name' => 'MUELLER WATER PRODUCTS INC-A'],
[
'ticker' => 'MX','stock_name' => 'MAGNACHIP SEMICONDUCTOR CORP'],
[
'ticker' => 'MXC','stock_name' => 'MEXCO ENERGY CORP'],
[
'ticker' => 'MXCT','stock_name' => 'MAXCYTE INC'],
[
'ticker' => 'MXDU','stock_name' => 'NATIONWIDE MAXIMUM DIVERSIFI'],
[
'ticker' => 'MXE','stock_name' => 'MEXICO EQUITY AND INCOME FD'],
[
'ticker' => 'MXF','stock_name' => 'MEXICO FUND INC'],
[
'ticker' => 'MXI','stock_name' => 'ISHARES GLOBAL MATERIALS ETF'],
[
'ticker' => 'MXL','stock_name' => 'MAXLINEAR INC'],
[
'ticker' => 'MYC','stock_name' => 'BLACKROCK MUNIYIELD CALI FD'],
[
'ticker' => 'MYD','stock_name' => 'BLACKROCK MUNIYIELD FUND'],
[
'ticker' => 'MYE','stock_name' => 'MYERS INDUSTRIES INC'],
[
'ticker' => 'MYFW','stock_name' => 'FIRST WESTERN FINANCIAL INC'],
[
'ticker' => 'MYGN','stock_name' => 'MYRIAD GENETICS INC'],
[
'ticker' => 'MYI','stock_name' => 'BLACKROCK MUNIYIELD QUALITY'],
[
'ticker' => 'MYJ','stock_name' => 'BLACKROCK MUNIYIELD NJ FUND'],
[
'ticker' => 'MYMD','stock_name' => 'MYMD PHARMACEUTICALS INC'],
[
'ticker' => 'MYN','stock_name' => 'BLACKROCK MUNIYIELD NY QUALI'],
[
'ticker' => 'MYNZ','stock_name' => 'MAINZ BIOMED BV'],
[
'ticker' => 'MYO','stock_name' => 'MYOMO INC'],
[
'ticker' => 'MYOV','stock_name' => 'MYOVANT SCIENCES LTD'],
[
'ticker' => 'MYPS','stock_name' => 'PLAYSTUDIOS INC'],
[
'ticker' => 'MYRG','stock_name' => 'MYR GROUP INC/DELAWARE'],
[
'ticker' => 'MYSZ','stock_name' => 'MY SIZE INC'],
[
'ticker' => 'MYTE','stock_name' => 'MYT NETHERLANDS PARENT BV'],
[
'ticker' => 'MYY','stock_name' => 'PROSHARES SHORT MIDCAP 400'],
[
'ticker' => 'MZZ','stock_name' => 'PROSHARES ULTSHRT MIDCAP400'],
[
'ticker' => 'NAAC','stock_name' => 'NORTH ATLANTIC ACQUISITION-A'],
[
'ticker' => 'NAACU','stock_name' => 'NORTH ATLANTIC ACQUISITION C'],
[
'ticker' => 'NABL','stock_name' => 'N-ABLE INC'],
[
'ticker' => 'NAC','stock_name' => 'NUVEEN CA QUAL MUNI INC FD'],
[
'ticker' => 'NACP','stock_name' => 'IMPACT SHARES NAACP MINORITY'],
[
'ticker' => 'NAD','stock_name' => 'NUVEEN QUAL MUNI INCOME FD'],
[
'ticker' => 'NAII','stock_name' => 'NATURAL ALTERNATIVES INTL'],
[
'ticker' => 'NAIL','stock_name' => 'DRX DLY HOMEBUILDERS BULL 3X'],
[
'ticker' => 'NAK','stock_name' => 'NORTHERN DYNASTY MINERALS'],
[
'ticker' => 'NAKD','stock_name' => 'NAKED BRAND GROUP LTD'],
[
'ticker' => 'NAN','stock_name' => 'NUVEEN NY QUAL MUNI INC FD'],
[
'ticker' => 'NANR','stock_name' => 'SPDR S&P NORTH AMERICAN NATU'],
[
'ticker' => 'NAOV','stock_name' => 'NANOVIBRONIX INC'],
[
'ticker' => 'NAPA','stock_name' => 'DUCKHORN PORTFOLIO INC/THE'],
[
'ticker' => 'NAPR','stock_name' => 'INNOVATOR GROWTH 100 POWER B'],
[
'ticker' => 'NARI','stock_name' => 'INARI MEDICAL INC'],
[
'ticker' => 'NAT','stock_name' => 'NORDIC AMERICAN TANKERS LTD'],
[
'ticker' => 'NATH','stock_name' => 'NATHAN\'S FAMOUS INC'],
[
'ticker' => 'NATI','stock_name' => 'NATIONAL INSTRUMENTS CORP'],
[
'ticker' => 'NATR','stock_name' => 'NATURES SUNSHINE PRODS INC'],
[
'ticker' => 'NAUT','stock_name' => 'NAUTILUS BIOTECHNOLOGY INC'],
[
'ticker' => 'NAVB','stock_name' => 'NAVIDEA BIOPHARMACEUTICALS I'],
[
'ticker' => 'NAVI','stock_name' => 'NAVIENT CORP'],
[
'ticker' => 'NAZ','stock_name' => 'NUVEEN AZ QUAL MUNI INC FD'],
[
'ticker' => 'NBB','stock_name' => 'NUVEEN TAX MUNI INC'],
[
'ticker' => 'NBEV','stock_name' => 'NEWAGE INC'],
[
'ticker' => 'NBH','stock_name' => 'NEUBERGER BERMAN MUNICIPAL'],
[
'ticker' => 'NBHC','stock_name' => 'NATIONAL BANK HOLD-CL A'],
[
'ticker' => 'NBIX','stock_name' => 'NEUROCRINE BIOSCIENCES INC'],
[
'ticker' => 'NBN','stock_name' => 'NORTHEAST BANK'],
[
'ticker' => 'NBO','stock_name' => 'NEUBERGER BERMAN NY MUNI'],
[
'ticker' => 'NBR','stock_name' => 'NABORS INDUSTRIES LTD'],
[
'ticker' => 'NBRV','stock_name' => 'NABRIVA THERAPEUTICS PLC'],
[
'ticker' => 'NBSE','stock_name' => 'NEUBASE THERAPEUTICS INC'],
[
'ticker' => 'NBST','stock_name' => 'NEWBURY STREET ACQUISITION C'],
[
'ticker' => 'NBSTU','stock_name' => 'NEWBURY STREET ACQUISITION C'],
[
'ticker' => 'NBTB','stock_name' => 'N B T BANCORP INC'],
[
'ticker' => 'NBTX','stock_name' => 'NANOBIOTIX SA - ADR'],
[
'ticker' => 'NBW','stock_name' => 'NEUBERGER BERMAN CA MUNI'],
[
'ticker' => 'NBXG','stock_name' => 'NBRGR BRMN NEX GEN CONNECT'],
[
'ticker' => 'NBY','stock_name' => 'NOVABAY PHARMACEUTICALS INC'],
[
'ticker' => 'NC','stock_name' => 'NACCO INDUSTRIES-CL A'],
[
'ticker' => 'NCA','stock_name' => 'NUVEEN CALIFORNIA MUNICIPAL'],
[
'ticker' => 'NCACU','stock_name' => 'NEWCOURT ACQUISITION CORP'],
[
'ticker' => 'NCBS','stock_name' => 'NICOLET BANKSHARES INC'],
[
'ticker' => 'NCLH','stock_name' => 'NORWEGIAN CRUISE LINE HOLDIN'],
[
'ticker' => 'NCMI','stock_name' => 'NATIONAL CINEMEDIA INC'],
[
'ticker' => 'NCNA','stock_name' => 'NUCANA PLC-ADR'],
[
'ticker' => 'NCNO','stock_name' => 'NCINO INC'],
[
'ticker' => 'NCR','stock_name' => 'NCR CORPORATION'],
[
'ticker' => 'NCSM','stock_name' => 'NCS MULTISTAGE HOLDINGS INC'],
[
'ticker' => 'NCTY','stock_name' => 'THE9 LTD-ADR'],
[
'ticker' => 'NCV','stock_name' => 'VIRTUS ALLIANZGI CN & INC'],
[
'ticker' => 'NCZ','stock_name' => 'VIRTUS ALLIANZGI CN & INC II'],
[
'ticker' => 'NDAC','stock_name' => 'NIGHTDRAGON ACQUISITION CO-A'],
[
'ticker' => 'NDACU','stock_name' => 'NIGHTDRAGON ACQUISITION CORP'],
[
'ticker' => 'NDAQ','stock_name' => 'NASDAQ INC'],
[
'ticker' => 'NDLS','stock_name' => 'NOODLES & CO'],
[
'ticker' => 'NDMO','stock_name' => 'NUVEEN DYNAMIC MUNI OPPORT'],
[
'ticker' => 'NDP','stock_name' => 'TORTOISE ENERGY INDEPENDENCE'],
[
'ticker' => 'NDRA','stock_name' => 'ENDRA LIFE SCIENCES INC'],
[
'ticker' => 'NDSN','stock_name' => 'NORDSON CORP'],
[
'ticker' => 'NDVG','stock_name' => 'NUVEEN DIVIDEND GROWTH ETF'],
[
'ticker' => 'NE','stock_name' => 'NOBLE CORP'],
[
'ticker' => 'NEA','stock_name' => 'NUVEEN AMT-FR QLTY MUNI INC'],
[
'ticker' => 'NEAR','stock_name' => 'BLACKROCK SHORT MATURITY BON'],
[
'ticker' => 'NECB','stock_name' => 'NORTHEAST COMMUNITY BANCORP'],
[
'ticker' => 'NEE','stock_name' => 'NEXTERA ENERGY INC'],
[
'ticker' => 'NEGG','stock_name' => 'NEWEGG COMMERCE INC'],
[
'ticker' => 'NEM','stock_name' => 'NEWMONT CORP'],
[
'ticker' => 'NEN','stock_name' => 'NEW ENGLAND REALTY ASSOC-LP'],
[
'ticker' => 'NEO','stock_name' => 'NEOGENOMICS INC'],
[
'ticker' => 'NEOG','stock_name' => 'NEOGEN CORP'],
[
'ticker' => 'NEON','stock_name' => 'NEONODE INC'],
[
'ticker' => 'NEP','stock_name' => 'NEXTERA ENERGY PARTNERS LP'],
[
'ticker' => 'NEPH','stock_name' => 'NEPHROS INC'],
[
'ticker' => 'NEPT','stock_name' => 'NEPTUNE WELLNESS SOLUTIONS I'],
[
'ticker' => 'NERD','stock_name' => 'ROUNDHILL BITKRAFT ESPORTS'],
[
'ticker' => 'NERV','stock_name' => 'MINERVA NEUROSCIENCES INC'],
[
'ticker' => 'NES','stock_name' => 'NUVERRA ENVIRONMENTAL SOLUTI'],
[
'ticker' => 'NESR','stock_name' => 'NATIONAL ENERGY SERVICES REU'],
[
'ticker' => 'NET','stock_name' => 'CLOUDFLARE INC - CLASS A'],
[
'ticker' => 'NETI','stock_name' => 'ENETI INC'],
[
'ticker' => 'NETL','stock_name' => 'NETLEASE CORPORATE REAL ESTA'],
[
'ticker' => 'NEU','stock_name' => 'NEWMARKET CORP'],
[
'ticker' => 'NEV','stock_name' => 'NUVEEN ENH MUNI VALUE FD'],
[
'ticker' => 'NEW','stock_name' => 'PUXIN LTD-ADR'],
[
'ticker' => 'NEWP','stock_name' => 'NEW PACIFIC METALS CORP'],
[
'ticker' => 'NEWR','stock_name' => 'NEW RELIC INC'],
[
'ticker' => 'NEWT','stock_name' => 'NEWTEK BUSINESS SERVICES COR'],
[
'ticker' => 'NEX','stock_name' => 'NEXTIER OILFIELD SOLUTIONS I'],
[
'ticker' => 'NEXA','stock_name' => 'NEXA RESOURCES SA'],
[
'ticker' => 'NEXI','stock_name' => 'NEXIMMUNE INC'],
[
'ticker' => 'NEXT','stock_name' => 'NEXTDECADE CORP'],
[
'ticker' => 'NFBK','stock_name' => 'NORTHFIELD BANCORP INC'],
[
'ticker' => 'NFE','stock_name' => 'NEW FORTRESS ENERGY INC'],
[
'ticker' => 'NFG','stock_name' => 'NATIONAL FUEL GAS CO'],
[
'ticker' => 'NFGC','stock_name' => 'NEW FOUND GOLD CORP'],
[
'ticker' => 'NFH','stock_name' => 'NEW FRONTIER HEALTH CORP'],
[
'ticker' => 'NFJ','stock_name' => 'VIRTUS DVD INTRST & PRM STR'],
[
'ticker' => 'NFLT','stock_name' => 'VIRTUS NEWFLEET MULTI-SECTOR'],
[
'ticker' => 'NFLX','stock_name' => 'NETFLIX INC'],
[
'ticker' => 'NFRA','stock_name' => 'FLEXSHARES STOXX GLOBAL BROA'],
[
'ticker' => 'NFTY','stock_name' => 'FIRST TRUST INDIA NIFTY 50 E'],
[
'ticker' => 'NFYS=','stock_name' => 'ENPHYS ACQUISITION CORP'],
[
'ticker' => 'NG','stock_name' => 'NOVAGOLD RESOURCES INC'],
[
'ticker' => 'NGAB','stock_name' => 'NORTHERN GENESIS ACQUISITION'],
[
'ticker' => 'NGAB=','stock_name' => 'NORTHERN GENESIS ACQUISITION'],
[
'ticker' => 'NGC','stock_name' => 'NORTHERN GENESIS ACQUISITI-A'],
[
'ticker' => 'NGC=','stock_name' => 'NORTHERN GENESIS ACQUISITION'],
[
'ticker' => 'NGCA','stock_name' => 'NEXTGEN ACQUISITION CORP-A'],
[
'ticker' => 'NGCAU','stock_name' => 'NEXTGEN ACQUISITION CORP II'],
[
'ticker' => 'NGD','stock_name' => 'NEW GOLD INC'],
[
'ticker' => 'NGE','stock_name' => 'GLOBAL X MSCI NIGERIA ETF'],
[
'ticker' => 'NGG','stock_name' => 'NATIONAL GRID PLC-SP ADR'],
[
'ticker' => 'NGL','stock_name' => 'NGL ENERGY PARTNERS LP'],
[
'ticker' => 'NGM','stock_name' => 'NGM BIOPHARMACEUTICALS INC'],
[
'ticker' => 'NGMS','stock_name' => 'NEOGAMES SA'],
[
'ticker' => 'NGS','stock_name' => 'NATURAL GAS SERVICES GROUP'],
[
'ticker' => 'NGVC','stock_name' => 'NATURAL GROCERS BY VITAMIN C'],
[
'ticker' => 'NGVT','stock_name' => 'INGEVITY CORP'],
[
'ticker' => 'NH','stock_name' => 'NANTHEALTH INC'],
[
'ticker' => 'NHC','stock_name' => 'NATIONAL HEALTHCARE CORP'],
[
'ticker' => 'NHF','stock_name' => 'NEXPOINT STRATEGIC OPPORTUNI'],
[
'ticker' => 'NHI','stock_name' => 'NATL HEALTH INVESTORS INC'],
[
'ticker' => 'NHICU','stock_name' => 'NEWHOLD INVESTMENT CORP II'],
[
'ticker' => 'NHS','stock_name' => 'NEUBERGER BERMAN HIGH YIELD'],
[
'ticker' => 'NHTC','stock_name' => 'NATURAL HEALTH TRENDS CORP'],
[
'ticker' => 'NI','stock_name' => 'NISOURCE INC'],
[
'ticker' => 'NIB','stock_name' => 'IPATH BLOOMBERG COCOA SUBIND'],
[
'ticker' => 'NICE','stock_name' => 'NICE LTD - SPON ADR'],
[
'ticker' => 'NICK','stock_name' => 'NICHOLAS FINANCIAL INC'],
[
'ticker' => 'NID','stock_name' => 'NUVEEN INT DUR MUNI TERM FD'],
[
'ticker' => 'NIE','stock_name' => 'VIRTUS ALLIANZGI EQ & CONV'],
[
'ticker' => 'NIFE','stock_name' => 'DIREXION FALLEN KNIVES ETF'],
[
'ticker' => 'NIM','stock_name' => 'NUVEEN SEL MAT MUNI FD'],
[
'ticker' => 'NINE','stock_name' => 'NINE ENERGY SERVICE INC'],
[
'ticker' => 'NIO','stock_name' => 'NIO INC - ADR'],
[
'ticker' => 'NIQ','stock_name' => 'NUVEEN INT DUR QU MUN TRM FD'],
[
'ticker' => 'NISN','stock_name' => 'NISUN INTERNATIONAL ENTERPRI'],
[
'ticker' => 'NIU','stock_name' => 'NIU TECHNOLOGIES-SPONS ADR'],
[
'ticker' => 'NJAN','stock_name' => 'INNOVATOR GROWTH 100 POWER B'],
[
'ticker' => 'NJR','stock_name' => 'NEW JERSEY RESOURCES CORP'],
[
'ticker' => 'NJUL','stock_name' => 'INNOVATOR GROWTH 100 POWER B'],
[
'ticker' => 'NKE','stock_name' => 'NIKE INC -CL B'],
[
'ticker' => 'NKG','stock_name' => 'NUVEEN GA QUAL MUNI INC FD'],
[
'ticker' => 'NKLA','stock_name' => 'NIKOLA CORP'],
[
'ticker' => 'NKSH','stock_name' => 'NATIONAL BANKSHARES INC/VA'],
[
'ticker' => 'NKTR','stock_name' => 'NEKTAR THERAPEUTICS'],
[
'ticker' => 'NKTX','stock_name' => 'NKARTA INC'],
[
'ticker' => 'NKX','stock_name' => 'NUVEEN CA AMT-FR MUNI INC FD'],
[
'ticker' => 'NL','stock_name' => 'NL INDUSTRIES'],
[
'ticker' => 'NLIT','stock_name' => 'NORTHERN LIGHTS ACQUISITI-A'],
[
'ticker' => 'NLITU','stock_name' => 'NORTHERN LIGHTS ACQUISITION'],
[
'ticker' => 'NLOK','stock_name' => 'NORTONLIFELOCK INC'],
[
'ticker' => 'NLR','stock_name' => 'VANECK URANIUM + NUCLEAR ENE'],
[
'ticker' => 'NLS','stock_name' => 'NAUTILUS INC'],
[
'ticker' => 'NLSN','stock_name' => 'NIELSEN HOLDINGS PLC'],
[
'ticker' => 'NLSP','stock_name' => 'NLS PHARMACEUTICS LTD'],
[
'ticker' => 'NLTX','stock_name' => 'NEOLEUKIN THERAPEUTICS INC'],
[
'ticker' => 'NLY','stock_name' => 'ANNALY CAPITAL MANAGEMENT IN'],
[
'ticker' => 'NM','stock_name' => 'NAVIOS MARITIME HOLDINGS INC'],
[
'ticker' => 'NMCO','stock_name' => 'NUVEEN MUNICIPAL CREDIT OPP'],
[
'ticker' => 'NMFC','stock_name' => 'NEW MOUNTAIN FINANCE CORP'],
[
'ticker' => 'NMG','stock_name' => 'NOUVEAU MONDE GRAPHITE INC'],
[
'ticker' => 'NMI','stock_name' => 'NUVEEN MUNI INC FD'],
[
'ticker' => 'NMIH','stock_name' => 'NMI HOLDINGS INC-CLASS A'],
[
'ticker' => 'NML','stock_name' => 'NB MLP & ENERGY INCOME'],
[
'ticker' => 'NMM','stock_name' => 'NAVIOS MARITIME PARTNERS LP'],
[
'ticker' => 'NMMC','stock_name' => 'NORTH MOUNTAIN MERGER CORP-A'],
[
'ticker' => 'NMMCU','stock_name' => 'NORTH MOUNTAIN MERGER CORP'],
[
'ticker' => 'NMR','stock_name' => 'NOMURA HOLDINGS INC-SPON ADR'],
[
'ticker' => 'NMRD','stock_name' => 'NEMAURA MEDICAL INC'],
[
'ticker' => 'NMRK','stock_name' => 'NEWMARK GROUP INC-CLASS A'],
[
'ticker' => 'NMS','stock_name' => 'NUVEEN MN QUAL MUNI INC FD'],
[
'ticker' => 'NMT','stock_name' => 'NUVEEN MA QUAL MUNI INC FD'],
[
'ticker' => 'NMTC','stock_name' => 'NEUROONE MEDICAL TECHNOLOGIE'],
[
'ticker' => 'NMTR','stock_name' => '9 METERS BIOPHARMA INC'],
[
'ticker' => 'NMZ','stock_name' => 'NUVEEN MUNI HIGH INC OPP FD'],
[
'ticker' => 'NN','stock_name' => 'NEXTNAV INC'],
[
'ticker' => 'NNBR','stock_name' => 'NN INC'],
[
'ticker' => 'NNDM','stock_name' => 'NANO DIMENSION LTD - ADR'],
[
'ticker' => 'NNI','stock_name' => 'NELNET INC-CL A'],
[
'ticker' => 'NNN','stock_name' => 'NATIONAL RETAIL PROPERTIES'],
[
'ticker' => 'NNOX','stock_name' => 'NANO-X IMAGING LTD'],
[
'ticker' => 'NNVC','stock_name' => 'NANOVIRICIDES INC'],
[
'ticker' => 'NNY','stock_name' => 'NUVEEN NEW YORK MUNICIPAL VA'],
[
'ticker' => 'NOA','stock_name' => 'NORTH AMERICAN CONSTRUCTION'],
[
'ticker' => 'NOAC','stock_name' => 'NATURAL ORDER ACQUISITION CO'],
[
'ticker' => 'NOACU','stock_name' => 'NATURAL ORDER ACQUISITION CO'],
[
'ticker' => 'NOAH','stock_name' => 'NOAH HOLDINGS LTD-SPON ADS'],
[
'ticker' => 'NOBL','stock_name' => 'PROSHARES S&P 500 DIVIDEND A'],
[
'ticker' => 'NOC','stock_name' => 'NORTHROP GRUMMAN CORP'],
[
'ticker' => 'NOCT','stock_name' => 'INNOVATOR GROWTH-100 POWER B'],
[
'ticker' => 'NODK','stock_name' => 'NI HOLDINGS INC'],
[
'ticker' => 'NOG','stock_name' => 'NORTHERN OIL AND GAS INC'],
[
'ticker' => 'NOK','stock_name' => 'NOKIA CORP-SPON ADR'],
[
'ticker' => 'NOM','stock_name' => 'NUVEEN MO QUAL MUNI INC FD'],
[
'ticker' => 'NOMD','stock_name' => 'NOMAD FOODS LTD'],
[
'ticker' => 'NORW','stock_name' => 'GLOBAL X MSCI NORWAY ETF'],
[
'ticker' => 'NOTV','stock_name' => 'INOTIV INC'],
[
'ticker' => 'NOV','stock_name' => 'NOV INC'],
[
'ticker' => 'NOVA','stock_name' => 'SUNNOVA ENERGY INTERNATIONAL'],
[
'ticker' => 'NOVN','stock_name' => 'NOVAN INC'],
[
'ticker' => 'NOVT','stock_name' => 'NOVANTA INC'],
[
'ticker' => 'NOVV','stock_name' => 'NOVA VISION ACQUISITION'],
[
'ticker' => 'NOVVR','stock_name' => 'NOVA VISION ACQUISITION-RTS'],
[
'ticker' => 'NOVVU','stock_name' => 'NOVA VISION ACQUISITION CORP'],
[
'ticker' => 'NOVZ','stock_name' => 'TRUESHARES STRUC OUTCOME NOV'],
[
'ticker' => 'NOW','stock_name' => 'SERVICENOW INC'],
[
'ticker' => 'NP','stock_name' => 'NEENAH INC'],
[
'ticker' => 'NPABU','stock_name' => 'NEW PROVIDENCE ACQUISITION C'],
[
'ticker' => 'NPCE','stock_name' => 'NEUROPACE INC'],
[
'ticker' => 'NPCT','stock_name' => 'NUVEEN CORE PLUS IMPACT FUND'],
[
'ticker' => 'NPK','stock_name' => 'NATIONAL PRESTO INDS INC'],
[
'ticker' => 'NPO','stock_name' => 'ENPRO INDUSTRIES INC'],
[
'ticker' => 'NPTN','stock_name' => 'NEOPHOTONICS CORP'],
[
'ticker' => 'NPV','stock_name' => 'NUVEEN VA QUAL MUNI INC FD'],
[
'ticker' => 'NQP','stock_name' => 'NUVEEN PA QUAL MUNI INC FD'],
[
'ticker' => 'NR','stock_name' => 'NEWPARK RESOURCES INC'],
[
'ticker' => 'NRAC','stock_name' => 'NOBLE ROCK ACQUISITION COR-A'],
[
'ticker' => 'NRACU','stock_name' => 'NOBLE ROCK ACQUISITION CORP'],
[
'ticker' => 'NRBO','stock_name' => 'NEUROBO PHARMACEUTICALS INC'],
[
'ticker' => 'NRC','stock_name' => 'NATIONAL RESEARCH CORP'],
[
'ticker' => 'NRDS','stock_name' => 'NERDWALLET INC-CL A'],
[
'ticker' => 'NRDY','stock_name' => 'NERDY INC'],
[
'ticker' => 'NREF','stock_name' => 'NEXPOINT REAL ESTATE FINANCE'],
[
'ticker' => 'NRG','stock_name' => 'NRG ENERGY INC'],
[
'ticker' => 'NRGD','stock_name' => 'MICROSECTORS US BIG OIL -3X'],
[
'ticker' => 'NRGU','stock_name' => 'MICROSECTORS US BIG OIL 3X'],
[
'ticker' => 'NRGX','stock_name' => 'PIMCO ENRGY & TACT CRDT'],
[
'ticker' => 'NRIM','stock_name' => 'NORTHRIM BANCORP INC'],
[
'ticker' => 'NRIX','stock_name' => 'NURIX THERAPEUTICS INC'],
[
'ticker' => 'NRK','stock_name' => 'NUVEEN NY AMT-FR MUNI INC FD'],
[
'ticker' => 'NRO','stock_name' => 'NEUBERGER BERMAN REAL ESTATE'],
[
'ticker' => 'NRP','stock_name' => 'NATURAL RESOURCE PARTNERS LP'],
[
'ticker' => 'NRT','stock_name' => 'NORTH EUROPEAN OIL RTY TRUST'],
[
'ticker' => 'NRXP','stock_name' => 'NRX PHARMACEUTICALS INC'],
[
'ticker' => 'NRZ','stock_name' => 'NEW RESIDENTIAL INVESTMENT'],
[
'ticker' => 'NS','stock_name' => 'NUSTAR ENERGY LP'],
[
'ticker' => 'NSA','stock_name' => 'NATIONAL STORAGE AFFILIATES'],
[
'ticker' => 'NSC','stock_name' => 'NORFOLK SOUTHERN CORP'],
[
'ticker' => 'NSCS','stock_name' => 'NUVEEN SMALL CAP SELECT ETF'],
[
'ticker' => 'NSEC','stock_name' => 'NATIONAL SECURITY GROUP INC'],
[
'ticker' => 'NSIT','stock_name' => 'INSIGHT ENTERPRISES INC'],
[
'ticker' => 'NSL','stock_name' => 'NUVEEN SENIOR INCOME FUND'],
[
'ticker' => 'NSP','stock_name' => 'INSPERITY INC'],
[
'ticker' => 'NSPR','stock_name' => 'INSPIREMD INC'],
[
'ticker' => 'NSR','stock_name' => 'NOMAD ROYALTY CO LTD'],
[
'ticker' => 'NSSC','stock_name' => 'NAPCO SECURITY TECHNOLOGIES'],
[
'ticker' => 'NSTB','stock_name' => 'NORTHERN STAR INVESTMENT C-A'],
[
'ticker' => 'NSTB=','stock_name' => 'NORTHERN STAR INVESTMENT COR'],
[
'ticker' => 'NSTC','stock_name' => 'NORTHERN STAR INVESTMENT -A'],
[
'ticker' => 'NSTC=','stock_name' => 'NORTHERN STAR INVESTMENT III'],
[
'ticker' => 'NSTD','stock_name' => 'NORTHERN STAR INVESTMENT -A'],
[
'ticker' => 'NSTD=','stock_name' => 'NORTHERN STAR INVESTMENT COR'],
[
'ticker' => 'NSTG','stock_name' => 'NANOSTRING TECHNOLOGIES INC'],
[
'ticker' => 'NSYS','stock_name' => 'NORTECH SYSTEMS INC'],
[
'ticker' => 'NTAP','stock_name' => 'NETAPP INC'],
[
'ticker' => 'NTB','stock_name' => 'BANK OF N.T. BUTTERFIELD&SON'],
[
'ticker' => 'NTCO','stock_name' => 'NATURA &CO HOLDING-ADR'],
[
'ticker' => 'NTCT','stock_name' => 'NETSCOUT SYSTEMS INC'],
[
'ticker' => 'NTES','stock_name' => 'NETEASE INC-ADR'],
[
'ticker' => 'NTG','stock_name' => 'TORTOISE MIDSTREAM ENERGY'],
[
'ticker' => 'NTGR','stock_name' => 'NETGEAR INC'],
[
'ticker' => 'NTIC','stock_name' => 'NORTHERN TECHNOLOGIES INTL'],
[
'ticker' => 'NTIP','stock_name' => 'NETWORK-1 TECHNOLOGIES INC'],
[
'ticker' => 'NTLA','stock_name' => 'INTELLIA THERAPEUTICS INC'],
[
'ticker' => 'NTNX','stock_name' => 'NUTANIX INC - A'],
[
'ticker' => 'NTP','stock_name' => 'NAM TAI PROPERTY INC'],
[
'ticker' => 'NTR','stock_name' => 'NUTRIEN LTD'],
[
'ticker' => 'NTRA','stock_name' => 'NATERA INC'],
[
'ticker' => 'NTRB','stock_name' => 'NUTRIBAND INC'],
[
'ticker' => 'NTRS','stock_name' => 'NORTHERN TRUST CORP'],
[
'ticker' => 'NTSE','stock_name' => 'WISDOMTREE EMERGING MARKETS'],
[
'ticker' => 'NTSI','stock_name' => 'WISDOMTREE INTERNATIONAL EFF'],
[
'ticker' => 'NTST','stock_name' => 'NETSTREIT CORP'],
[
'ticker' => 'NTSX','stock_name' => 'WISDOMTREE US EFFICIENT CORE'],
[
'ticker' => 'NTUS','stock_name' => 'NATUS MEDICAL INC'],
[
'ticker' => 'NTWK','stock_name' => 'NETSOL TECHNOLOGIES INC'],
[
'ticker' => 'NTZ','stock_name' => 'NATUZZI SPA-SP ADR'],
[
'ticker' => 'NTZO','stock_name' => 'IMPACT SHARES MSCI GL CLIM'],
[
'ticker' => 'NUAG','stock_name' => 'NUVEEN ENHANCED YIELD U.S. A'],
[
'ticker' => 'NUAN','stock_name' => 'NUANCE COMMUNICATIONS INC'],
[
'ticker' => 'NUBD','stock_name' => 'NUVEEN ESG US AGGREGATE BOND'],
[
'ticker' => 'NUDM','stock_name' => 'NUVEEN ESG INTERNATIONAL DEV'],
[
'ticker' => 'NUDV','stock_name' => 'NUVEEN ESG DIVIDEND ETF'],
[
'ticker' => 'NUE','stock_name' => 'NUCOR CORP'],
[
'ticker' => 'NUEM','stock_name' => 'NUVEEN ESG EMERGING MARKETS'],
[
'ticker' => 'NUGO','stock_name' => 'NUVEEN GROWTH OPPORTUNITIES'],
[
'ticker' => 'NUGT','stock_name' => 'DIREXION DAILY GOLD MINERS I'],
[
'ticker' => 'NUHY','stock_name' => 'NUVEEN ESG HIGH YIELD CORP B'],
[
'ticker' => 'NULC','stock_name' => 'NUVEEN ESG LARGE-CAP ETF'],
[
'ticker' => 'NULG','stock_name' => 'NUVEEN ESG LARGE-CAP GROWTH'],
[
'ticker' => 'NULV','stock_name' => 'NUVEEN ESG LARGE-CAP VALUE E'],
[
'ticker' => 'NUMG','stock_name' => 'NUVEEN ESG MIDCAP GROWTH ETF'],
[
'ticker' => 'NUMV','stock_name' => 'NUVEEN ESG MID-CAP VALUE ETF'],
[
'ticker' => 'NUO','stock_name' => 'NUVEEN OH QUAL MUNI INC FD'],
[
'ticker' => 'NURE','stock_name' => 'NUVEEN SHORTTERM REIT ETF'],
[
'ticker' => 'NURO','stock_name' => 'NEUROMETRIX INC'],
[
'ticker' => 'NUS','stock_name' => 'NU SKIN ENTERPRISES INC - A'],
[
'ticker' => 'NUSA','stock_name' => 'NUVEEN ENHANCED YIELD 1-5 YE'],
[
'ticker' => 'NUSC','stock_name' => 'NUVEEN ESG SMALL-CAP ETF'],
[
'ticker' => 'NUSI','stock_name' => 'NATIONWIDE RISK-MANAGED INCO'],
[
'ticker' => 'NUV','stock_name' => 'NUVEEN MUNI VALUE FD'],
[
'ticker' => 'NUVA','stock_name' => 'NUVASIVE INC'],
[
'ticker' => 'NUVB','stock_name' => 'NUVATION BIO INC'],
[
'ticker' => 'NUVL','stock_name' => 'NUVALENT INC-A'],
[
'ticker' => 'NUW','stock_name' => 'NUVEEN AMT-FREE MUNI VAL FD'],
[
'ticker' => 'NUWE','stock_name' => 'NUWELLIS INC'],
[
'ticker' => 'NUZE','stock_name' => 'NUZEE INC'],
[
'ticker' => 'NVAX','stock_name' => 'NOVAVAX INC'],
[
'ticker' => 'NVCN','stock_name' => 'NEOVASC INC'],
[
'ticker' => 'NVCR','stock_name' => 'NOVOCURE LTD'],
[
'ticker' => 'NVDA','stock_name' => 'NVIDIA CORP'],
[
'ticker' => 'NVEC','stock_name' => 'NVE CORP'],
[
'ticker' => 'NVEE','stock_name' => 'NV5 GLOBAL INC'],
[
'ticker' => 'NVEI','stock_name' => 'NUVEI CORP-SUBORDINATE VTG'],
[
'ticker' => 'NVFY','stock_name' => 'NOVA LIFESTYLE INC'],
[
'ticker' => 'NVG','stock_name' => 'NUVEEN AMT-FR MUNI CREDIT FD'],
[
'ticker' => 'NVGS','stock_name' => 'NAVIGATOR HOLDINGS LTD'],
[
'ticker' => 'NVIV','stock_name' => 'INVIVO THERAPEUTICS HOLDINGS'],
[
'ticker' => 'NVMI','stock_name' => 'NOVA LTD'],
[
'ticker' => 'NVNO','stock_name' => 'ENVVENO MEDICAL CORP'],
[
'ticker' => 'NVO','stock_name' => 'NOVO-NORDISK A/S-SPONS ADR'],
[
'ticker' => 'NVOS','stock_name' => 'NOVO INTEGRATED SCIENCES INC'],
[
'ticker' => 'NVQ','stock_name' => 'QRAFT AI-ENH US NEXT VALUE'],
[
'ticker' => 'NVR','stock_name' => 'NVR INC'],
[
'ticker' => 'NVRO','stock_name' => 'NEVRO CORP'],
[
'ticker' => 'NVS','stock_name' => 'NOVARTIS AG-SPONSORED ADR'],
[
'ticker' => 'NVSA','stock_name' => 'NEW VISTA ACQUISITION CORP-A'],
[
'ticker' => 'NVSAU','stock_name' => 'NEW VISTA ACQUISITION CORP'],
[
'ticker' => 'NVST','stock_name' => 'ENVISTA HOLDINGS CORP'],
[
'ticker' => 'NVT','stock_name' => 'NVENT ELECTRIC PLC'],
[
'ticker' => 'NVTA','stock_name' => 'INVITAE CORP'],
[
'ticker' => 'NVTS','stock_name' => 'NAVITAS SEMICONDUCTOR CORP'],
[
'ticker' => 'NVVE','stock_name' => 'NUVVE HOLDING CORP'],
[
'ticker' => 'NWBI','stock_name' => 'NORTHWEST BANCSHARES INC'],
[
'ticker' => 'NWE','stock_name' => 'NORTHWESTERN CORP'],
[
'ticker' => 'NWFL','stock_name' => 'NORWOOD FINANCIAL CORP'],
[
'ticker' => 'NWG','stock_name' => 'NATWEST GROUP PLC -SPON ADR'],
[
'ticker' => 'NWL','stock_name' => 'NEWELL BRANDS INC'],
[
'ticker' => 'NWLG','stock_name' => 'NUVEEN WINSLOW LG CAP GR ESG'],
[
'ticker' => 'NWLI','stock_name' => 'NATIONAL WESTERN LIFE GROU-A'],
[
'ticker' => 'NWN','stock_name' => 'NORTHWEST NATURAL HOLDING CO'],
[
'ticker' => 'NWPX','stock_name' => 'NORTHWEST PIPE CO'],
[
'ticker' => 'NWS','stock_name' => 'NEWS CORP - CLASS B'],
[
'ticker' => 'NWSA','stock_name' => 'NEWS CORP - CLASS A'],
[
'ticker' => 'NX','stock_name' => 'QUANEX BUILDING PRODUCTS'],
[
'ticker' => 'NXC','stock_name' => 'NUVEEN CA SEL TX-FR INC PORT'],
[
'ticker' => 'NXE','stock_name' => 'NEXGEN ENERGY LTD'],
[
'ticker' => 'NXGN','stock_name' => 'NEXTGEN HEALTHCARE INC'],
[
'ticker' => 'NXJ','stock_name' => 'NUVEEN NJ QUAL MUNI INC FD'],
[
'ticker' => 'NXN','stock_name' => 'NUVEEN NY SEL TX-FR INC PORT'],
[
'ticker' => 'NXP','stock_name' => 'NUVEEN SEL TX-FR INC PORT'],
[
'ticker' => 'NXPI','stock_name' => 'NXP SEMICONDUCTORS NV'],
[
'ticker' => 'NXQ','stock_name' => 'NUVEEN SEL TX-FR INC PORT 2'],
[
'ticker' => 'NXR','stock_name' => 'NUVEEN SEL TX-FR INC PORT 3'],
[
'ticker' => 'NXRT','stock_name' => 'NEXPOINT RESIDENTIAL'],
[
'ticker' => 'NXST','stock_name' => 'NEXSTAR MEDIA GROUP INC-CL A'],
[
'ticker' => 'NXTC','stock_name' => 'NEXTCURE INC'],
[
'ticker' => 'NXTD','stock_name' => 'NXT-ID INC'],
[
'ticker' => 'NXTG','stock_name' => 'FIRST TRUST INDXX NEXTG ETF'],
[
'ticker' => 'NXTP','stock_name' => 'NEXTPLAY TECHNOLOGIES INC'],
[
'ticker' => 'NXU','stock_name' => 'NOVUS CAPITAL CORP II-A'],
[
'ticker' => 'NXU=','stock_name' => 'NOVUS CAPITAL CORP II'],
[
'ticker' => 'NYC','stock_name' => 'NEW YORK CITY REIT INC-A'],
[
'ticker' => 'NYCB','stock_name' => 'NEW YORK COMMUNITY BANCORP'],
[
'ticker' => 'NYF','stock_name' => 'ISHARES NEW YORK MUNI BOND E'],
[
'ticker' => 'NYMT','stock_name' => 'NEW YORK MORTGAGE TRUST INC'],
[
'ticker' => 'NYMX','stock_name' => 'NYMOX PHARMACEUTICAL CORP'],
[
'ticker' => 'NYT','stock_name' => 'NEW YORK TIMES CO-A'],
[
'ticker' => 'NYXH','stock_name' => 'NYXOAH SA'],
[
'ticker' => 'NZF','stock_name' => 'NUVEEN MUNI CREDIT INC FD'],
[
'ticker' => 'O','stock_name' => 'REALTY INCOME CORP'],
[
'ticker' => 'O#','stock_name' => 'REALTY INCOME CORP-W/I'],
[
'ticker' => 'OACB','stock_name' => 'OAKTREE ACQ CORP II - CL A'],
[
'ticker' => 'OACB=','stock_name' => 'OAKTREE ACQUISITION CORP II'],
[
'ticker' => 'OAS','stock_name' => 'OASIS PETROLEUM INC'],
[
'ticker' => 'OB','stock_name' => 'OUTBRAIN INC'],
[
'ticker' => 'OBAS','stock_name' => 'OPTIBASE LTD'],
[
'ticker' => 'OBCI','stock_name' => 'OCEAN BIO-CHEM INC'],
[
'ticker' => 'OBLG','stock_name' => 'OBLONG INC'],
[
'ticker' => 'OBND','stock_name' => 'SPDR LOOMIS SAYLES OPP BOND'],
[
'ticker' => 'OBNK','stock_name' => 'ORIGIN BANCORP INC'],
[
'ticker' => 'OBOR','stock_name' => 'KRANESHARES MSCI ONE BELT ON'],
[
'ticker' => 'OBSV','stock_name' => 'OBSEVA SA'],
[
'ticker' => 'OBT','stock_name' => 'ORANGE COUNTY BANCORP INC'],
[
'ticker' => 'OC','stock_name' => 'OWENS CORNING'],
[
'ticker' => 'OCA','stock_name' => 'OMNICHANNEL ACQUISITION-CL A'],
[
'ticker' => 'OCA=','stock_name' => 'OMNICHANNEL ACQUISITION CORP'],
[
'ticker' => 'OCAX','stock_name' => 'OCA ACQUISITION CORP-CL A'],
[
'ticker' => 'OCAXU','stock_name' => 'OCA ACQUISITION CORP'],
[
'ticker' => 'OCC','stock_name' => 'OPTICAL CABLE CORP'],
[
'ticker' => 'OCCI','stock_name' => 'OFS CREDIT CO INC'],
[
'ticker' => 'OCDX','stock_name' => 'ORTHO CLINICAL DIAGNOSTICS H'],
[
'ticker' => 'OCEN','stock_name' => 'IQ CLEAN OCEANS ETF'],
[
'ticker' => 'OCFC','stock_name' => 'OCEANFIRST FINANCIAL CORP'],
[
'ticker' => 'OCFT','stock_name' => 'ONECONNECT FINANCIAL TECHNO'],
[
'ticker' => 'OCG','stock_name' => 'ORIENTAL CULTURE HOLDING LTD'],
[
'ticker' => 'OCGN','stock_name' => 'OCUGEN INC'],
[
'ticker' => 'OCIO','stock_name' => 'CLEARSHARES OCIO ETF'],
[
'ticker' => 'OCN','stock_name' => 'OCWEN FINANCIAL CORP'],
[
'ticker' => 'OCSL','stock_name' => 'OAKTREE SPECIALTY LENDING CO'],
[
'ticker' => 'OCTZ','stock_name' => 'TRUESHARES STRUC OUTCOME OCT'],
[
'ticker' => 'OCUL','stock_name' => 'OCULAR THERAPEUTIX INC'],
[
'ticker' => 'OCUP','stock_name' => 'OCUPHIRE PHARMA INC'],
[
'ticker' => 'OCX','stock_name' => 'ONCOCYTE CORP'],
[
'ticker' => 'ODC','stock_name' => 'OIL-DRI CORP OF AMERICA'],
[
'ticker' => 'ODFL','stock_name' => 'OLD DOMINION FREIGHT LINE'],
[
'ticker' => 'ODP','stock_name' => 'ODP CORP/THE'],
[
'ticker' => 'ODT','stock_name' => 'ODONATE THERAPEUTICS INC'],
[
'ticker' => 'OEC','stock_name' => 'ORION ENGINEERED CARBONS SA'],
[
'ticker' => 'OEF','stock_name' => 'ISHARES S&P 100 ETF'],
[
'ticker' => 'OEG','stock_name' => 'ORBITAL ENERGY GROUP INC'],
[
'ticker' => 'OEPW','stock_name' => 'ONE EQUITY PARTNERS OPEN-A'],
[
'ticker' => 'OEPWU','stock_name' => 'ONE EQUITY PARTNERS OPEN WAT'],
[
'ticker' => 'OESX','stock_name' => 'ORION ENERGY SYSTEMS INC'],
[
'ticker' => 'OEUR','stock_name' => 'OSHARES EUROPE QUALITY DIVID'],
[
'ticker' => 'OFC','stock_name' => 'CORPORATE OFFICE PROPERTIES'],
[
'ticker' => 'OFED','stock_name' => 'OCONEE FEDERAL FINANCIAL COR'],
[
'ticker' => 'OFG','stock_name' => 'OFG BANCORP'],
[
'ticker' => 'OFIX','stock_name' => 'ORTHOFIX MEDICAL INC'],
[
'ticker' => 'OFLX','stock_name' => 'OMEGA FLEX INC'],
[
'ticker' => 'OFS','stock_name' => 'OFS CAPITAL CORP'],
[
'ticker' => 'OG','stock_name' => 'ONION GLOBAL LTD'],
[
'ticker' => 'OGCP','stock_name' => 'EMPIRE STATE REALTY OP-S60'],
[
'ticker' => 'OGE','stock_name' => 'OGE ENERGY CORP'],
[
'ticker' => 'OGEN','stock_name' => 'ORAGENICS INC'],
[
'ticker' => 'OGI','stock_name' => 'ORGANIGRAM HOLDINGS INC'],
[
'ticker' => 'OGIG','stock_name' => 'O\'SHARES GLOBAL INTERNET GIA'],
[
'ticker' => 'OGN','stock_name' => 'ORGANON & CO'],
[
'ticker' => 'OGS','stock_name' => 'ONE GAS INC'],
[
'ticker' => 'OHAAU','stock_name' => 'OPY ACQUISITION CORP I'],
[
'ticker' => 'OHI','stock_name' => 'OMEGA HEALTHCARE INVESTORS'],
[
'ticker' => 'OHPA','stock_name' => 'ORION ACQUISITION CORP-CL A'],
[
'ticker' => 'OHPAU','stock_name' => 'ORION ACQUISITION CORP'],
[
'ticker' => 'OI','stock_name' => 'O-I GLASS INC'],
[
'ticker' => 'OIA','stock_name' => 'INVESCO MUNICIPAL INCOME OPP'],
[
'ticker' => 'OIH','stock_name' => 'VANECK OIL SERVICES ETF'],
[
'ticker' => 'OII','stock_name' => 'OCEANEERING INTL INC'],
[
'ticker' => 'OIIM','stock_name' => 'O2MICRO INTERNATIONAL-ADR'],
[
'ticker' => 'OIL','stock_name' => 'IPATH PURE BETA CRUDE OIL'],
[
'ticker' => 'OILK','stock_name' => 'PROSHARES K-1 FREE CRUDE ETF'],
[
'ticker' => 'OIS','stock_name' => 'OIL STATES INTERNATIONAL INC'],
[
'ticker' => 'OKE','stock_name' => 'ONEOK INC'],
[
'ticker' => 'OKTA','stock_name' => 'OKTA INC'],
[
'ticker' => 'OLB','stock_name' => 'OLB GROUP INC'],
[
'ticker' => 'OLED','stock_name' => 'UNIVERSAL DISPLAY CORP'],
[
'ticker' => 'OLK','stock_name' => 'OLINK HOLDING AB - ADR'],
[
'ticker' => 'OLLI','stock_name' => 'OLLIE\'S BARGAIN OUTLET HOLDI'],
[
'ticker' => 'OLMA','stock_name' => 'OLEMA PHARMACEUTICALS INC'],
[
'ticker' => 'OLN','stock_name' => 'OLIN CORP'],
[
'ticker' => 'OLO','stock_name' => 'OLO INC - CLASS A'],
[
'ticker' => 'OLP','stock_name' => 'ONE LIBERTY PROPERTIES INC'],
[
'ticker' => 'OLPX','stock_name' => 'OLAPLEX HOLDINGS INC'],
[
'ticker' => 'OM','stock_name' => 'OUTSET MEDICAL INC'],
[
'ticker' => 'OMAB','stock_name' => 'GRUPO AEROPORTUARIO CEN-ADR'],
[
'ticker' => 'OMC','stock_name' => 'OMNICOM GROUP'],
[
'ticker' => 'OMCL','stock_name' => 'OMNICELL INC'],
[
'ticker' => 'OMEG','stock_name' => 'OMEGA ALPHA SPAC -CLASS A'],
[
'ticker' => 'OMER','stock_name' => 'OMEROS CORP'],
[
'ticker' => 'OMEX','stock_name' => 'ODYSSEY MARINE EXPLORATION'],
[
'ticker' => 'OMF','stock_name' => 'ONEMAIN HOLDINGS INC'],
[
'ticker' => 'OMFL','stock_name' => 'INVESCO RUSSELL 1000 DYN M/F'],
[
'ticker' => 'OMFS','stock_name' => 'INVESCO RSL 2000 DYN MLTFCTR'],
[
'ticker' => 'OMGA','stock_name' => 'OMEGA THERAPEUTICS INC'],
[
'ticker' => 'OMI','stock_name' => 'OWENS & MINOR INC'],
[
'ticker' => 'OMIC','stock_name' => 'SINGULAR GENOMICS SYSTEMS IN'],
[
'ticker' => 'OMP','stock_name' => 'OASIS MIDSTREAM PARTNERS LP'],
[
'ticker' => 'OMQS','stock_name' => 'OMNIQ CORP'],
[
'ticker' => 'ON','stock_name' => 'ON SEMICONDUCTOR CORP'],
[
'ticker' => 'ONB','stock_name' => 'OLD NATIONAL BANCORP'],
[
'ticker' => 'ONCR','stock_name' => 'ONCORUS INC'],
[
'ticker' => 'ONCS','stock_name' => 'ONCOSEC MEDICAL INC'],
[
'ticker' => 'ONCT','stock_name' => 'ONCTERNAL THERAPEUTICS INC'],
[
'ticker' => 'ONCY','stock_name' => 'ONCOLYTICS BIOTECH INC'],
[
'ticker' => 'OND','stock_name' => 'PROSHARES ON-DEMAND ETF'],
[
'ticker' => 'ONDS','stock_name' => 'ONDAS HOLDINGS INC'],
[
'ticker' => 'ONE','stock_name' => 'ONESMART INTERNATIONAL -ADR'],
[
'ticker' => 'ONEM','stock_name' => '1LIFE HEALTHCARE INC'],
[
'ticker' => 'ONEO','stock_name' => 'SPDR RUSSELL 1000 MOMEN FOCU'],
[
'ticker' => 'ONEQ','stock_name' => 'FIDELITY NASDAQ COMPOSITE IN'],
[
'ticker' => 'ONEV','stock_name' => 'SPDR RUSSELL LOW VOL FOCUS'],
[
'ticker' => 'ONEW','stock_name' => 'ONEWATER MARINE INC-CL A'],
[
'ticker' => 'ONEY','stock_name' => 'SPDR RUSSELL 1000 YIELD FOCU'],
[
'ticker' => 'ONL#','stock_name' => 'ORION OFFICE REIT INC-W/I'],
[
'ticker' => 'ONLN','stock_name' => 'PROSHARES ONLINE RETAIL ETF'],
[
'ticker' => 'ONOF','stock_name' => 'GLOBAL X ADAPTIVE U.S. RISK'],
[
'ticker' => 'ONON','stock_name' => 'ON HOLDING AG-CLASS A'],
[
'ticker' => 'ONTF','stock_name' => 'ON24 INC'],
[
'ticker' => 'ONTO','stock_name' => 'ONTO INNOVATION INC'],
[
'ticker' => 'ONTX','stock_name' => 'ONCONOVA THERAPEUTICS INC'],
[
'ticker' => 'ONVO','stock_name' => 'ORGANOVO HOLDINGS INC'],
[
'ticker' => 'ONYXU','stock_name' => 'ONYX ACQUISITION CO I'],
[
'ticker' => 'OOMA','stock_name' => 'OOMA INC'],
[
'ticker' => 'OOTO','stock_name' => 'DIREXION DAILY TRVL VACA 2X'],
[
'ticker' => 'OPA','stock_name' => 'MAGNUM OPUS ACQUISITION LT-A'],
[
'ticker' => 'OPA=','stock_name' => 'MAGNUM OPUS ACQUISITION LTD'],
[
'ticker' => 'OPAD','stock_name' => 'OFFERPAD SOLUTIONS INC'],
[
'ticker' => 'OPBK','stock_name' => 'OP BANCORP'],
[
'ticker' => 'OPCH','stock_name' => 'OPTION CARE HEALTH INC'],
[
'ticker' => 'OPEN','stock_name' => 'OPENDOOR TECHNOLOGIES INC'],
[
'ticker' => 'OPER','stock_name' => 'CLEARSHARES ULTRA-SHORT MATU'],
[
'ticker' => 'OPFI','stock_name' => 'OPPFI INC'],
[
'ticker' => 'OPGN','stock_name' => 'OPGEN INC'],
[
'ticker' => 'OPHC','stock_name' => 'OPTIMUMBANK HOLDINGS INC'],
[
'ticker' => 'OPI','stock_name' => 'OFFICE PROPERTIES INCOME TRU'],
[
'ticker' => 'OPK','stock_name' => 'OPKO HEALTH INC'],
[
'ticker' => 'OPNT','stock_name' => 'OPIANT PHARMACEUTICALS INC'],
[
'ticker' => 'OPOF','stock_name' => 'OLD POINT FINANCIAL CORP'],
[
'ticker' => 'OPP','stock_name' => 'RIVERNRTH/DOUBLELNE STR OPP'],
[
'ticker' => 'OPPX','stock_name' => 'CORBETT ROAD TACTICAL OPP'],
[
'ticker' => 'OPRA','stock_name' => 'OPERA LTD-ADR'],
[
'ticker' => 'OPRT','stock_name' => 'OPORTUN FINANCIAL CORP'],
[
'ticker' => 'OPRX','stock_name' => 'OPTIMIZERX CORP'],
[
'ticker' => 'OPT','stock_name' => 'OPTHEA LTD-SPON ADR'],
[
'ticker' => 'OPTN','stock_name' => 'OPTINOSE INC'],
[
'ticker' => 'OPTT','stock_name' => 'OCEAN POWER TECHNOLOGIES INC'],
[
'ticker' => 'OPY','stock_name' => 'OPPENHEIMER HOLDINGS-CL A'],
[
'ticker' => 'OR','stock_name' => 'OSISKO GOLD ROYALTIES LTD'],
[
'ticker' => 'ORA','stock_name' => 'ORMAT TECHNOLOGIES INC'],
[
'ticker' => 'ORAN','stock_name' => 'ORANGE-SPON ADR'],
[
'ticker' => 'ORC','stock_name' => 'ORCHID ISLAND CAPITAL INC'],
[
'ticker' => 'ORCC','stock_name' => 'OWL ROCK CAPITAL CORP'],
[
'ticker' => 'ORCL','stock_name' => 'ORACLE CORP'],
[
'ticker' => 'ORGN','stock_name' => 'ORIGIN MATERIALS INC'],
[
'ticker' => 'ORGO','stock_name' => 'ORGANOGENESIS HOLDINGS INC'],
[
'ticker' => 'ORGS','stock_name' => 'ORGENESIS INC'],
[
'ticker' => 'ORI','stock_name' => 'OLD REPUBLIC INTL CORP'],
[
'ticker' => 'ORIA','stock_name' => 'ORION BIOTECH OPPORTUNITI-A'],
[
'ticker' => 'ORIAU','stock_name' => 'ORION BIOTECH OPPORTUNITIES'],
[
'ticker' => 'ORIC','stock_name' => 'ORIC PHARMACEUTICALS INC'],
[
'ticker' => 'ORLA','stock_name' => 'ORLA MINING LTD'],
[
'ticker' => 'ORLY','stock_name' => 'O\'REILLY AUTOMOTIVE INC'],
[
'ticker' => 'ORMP','stock_name' => 'ORAMED PHARMACEUTICALS INC'],
[
'ticker' => 'ORN','stock_name' => 'ORION GROUP HOLDINGS INC'],
[
'ticker' => 'ORPH','stock_name' => 'ORPHAZYME A/S - ADR'],
[
'ticker' => 'ORRF','stock_name' => 'ORRSTOWN FINL SERVICES INC'],
[
'ticker' => 'ORTX','stock_name' => 'ORCHARD THERAPEUTICS PLC-ADR'],
[
'ticker' => 'OSAT','stock_name' => 'ORBSAT CORP'],
[
'ticker' => 'OSBC','stock_name' => 'OLD SECOND BANCORP INC'],
[
'ticker' => 'OSCR','stock_name' => 'OSCAR HEALTH INC - CLASS A'],
[
'ticker' => 'OSCV','stock_name' => 'OPUS SMALL CAP VALUE ETF'],
[
'ticker' => 'OSG','stock_name' => 'OVERSEAS SHIPHOLDING GROUP-A'],
[
'ticker' => 'OSH','stock_name' => 'OAK STREET HEALTH INC'],
[
'ticker' => 'OSI','stock_name' => 'OSIRIS ACQUISITION CORP-A'],
[
'ticker' => 'OSI=','stock_name' => 'OSIRIS ACQUISITION CORP'],
[
'ticker' => 'OSIS','stock_name' => 'OSI SYSTEMS INC'],
[
'ticker' => 'OSK','stock_name' => 'OSHKOSH CORP'],
[
'ticker' => 'OSMT','stock_name' => 'OSMOTICA PHARMACEUTICALS PLC'],
[
'ticker' => 'OSPN','stock_name' => 'ONESPAN INC'],
[
'ticker' => 'OSS','stock_name' => 'ONE STOP SYSTEMS INC'],
[
'ticker' => 'OSTK','stock_name' => 'OVERSTOCK.COM INC'],
[
'ticker' => 'OSTR','stock_name' => 'OYSTER ENTERPRISES-CL A'],
[
'ticker' => 'OSTRU','stock_name' => 'OYSTER ENTERPRISES ACQUISITI'],
[
'ticker' => 'OSUR','stock_name' => 'ORASURE TECHNOLOGIES INC'],
[
'ticker' => 'OSW','stock_name' => 'ONESPAWORLD HOLDINGS LTD'],
[
'ticker' => 'OTEC','stock_name' => 'OCEANTECH ACQUISITIONS- CL A'],
[
'ticker' => 'OTECU','stock_name' => 'OCEANTECH ACQUISITIONS I COR'],
[
'ticker' => 'OTEX','stock_name' => 'OPEN TEXT CORP'],
[
'ticker' => 'OTIC','stock_name' => 'OTONOMY INC'],
[
'ticker' => 'OTIS','stock_name' => 'OTIS WORLDWIDE CORP'],
[
'ticker' => 'OTLK','stock_name' => 'OUTLOOK THERAPEUTICS INC'],
[
'ticker' => 'OTLY','stock_name' => 'OATLY GROUP AB'],
[
'ticker' => 'OTMO','stock_name' => 'OTONOMO TECHNOLOGIES LTD'],
[
'ticker' => 'OTRA','stock_name' => 'OTR ACQUISITION CORP-CLASS A'],
[
'ticker' => 'OTRAU','stock_name' => 'OTR ACQUISITION CORP'],
[
'ticker' => 'OTRK','stock_name' => 'ONTRAK INC'],
[
'ticker' => 'OTTR','stock_name' => 'OTTER TAIL CORP'],
[
'ticker' => 'OUNZ','stock_name' => 'VANECK MERK GOLD TRUST'],
[
'ticker' => 'OUSA','stock_name' => 'OSHARES U.S QUALITY DIVIDEND'],
[
'ticker' => 'OUSM','stock_name' => 'OSHARES U.S. SMALL-CAP QUALI'],
[
'ticker' => 'OUST','stock_name' => 'OUSTER INC'],
[
'ticker' => 'OUT','stock_name' => 'OUTFRONT MEDIA INC'],
[
'ticker' => 'OVB','stock_name' => 'OVERLAY SHARES CORE BOND ETF'],
[
'ticker' => 'OVBC','stock_name' => 'OHIO VALLEY BANC CORP'],
[
'ticker' => 'OVF','stock_name' => 'OVERLAY SHARES FOREIGN EQUIT'],
[
'ticker' => 'OVID','stock_name' => 'OVID THERAPEUTICS INC'],
[
'ticker' => 'OVL','stock_name' => 'OVERLAY SHARES LARGE CAP EQ'],
[
'ticker' => 'OVLH','stock_name' => 'OVERLAY SHRS HDG LRG CAP EQY'],
[
'ticker' => 'OVLY','stock_name' => 'OAK VALLEY BANCORP'],
[
'ticker' => 'OVM','stock_name' => 'OVERLAY SHARES MUNICIPAL BON'],
[
'ticker' => 'OVS','stock_name' => 'OVERLAY SHARES SMALL CAP EQ'],
[
'ticker' => 'OVT','stock_name' => 'OVERLAY SHARES SHRT TERM BON'],
[
'ticker' => 'OVV','stock_name' => 'OVINTIV INC'],
[
'ticker' => 'OWL','stock_name' => 'BLUE OWL CAPITAL INC'],
[
'ticker' => 'OWLT','stock_name' => 'OWLET INC'],
[
'ticker' => 'OWNS','stock_name' => 'IMPACT SHARES AFFORDABLE HOU'],
[
'ticker' => 'OXAC','stock_name' => 'OXBRIDGE ACQUISITION CORP'],
[
'ticker' => 'OXACU','stock_name' => 'OXBRIDGE ACQUISITION CORP'],
[
'ticker' => 'OXBR','stock_name' => 'OXBRIDGE RE HOLDINGS LTD'],
[
'ticker' => 'OXLC','stock_name' => 'OXFORD LANE CAPITAL CORP'],
[
'ticker' => 'OXM','stock_name' => 'OXFORD INDUSTRIES INC'],
[
'ticker' => 'OXSQ','stock_name' => 'OXFORD SQUARE CAPITAL CORP'],
[
'ticker' => 'OXUS','stock_name' => 'OXUS ACQUISITION CORP-A'],
[
'ticker' => 'OXUSU','stock_name' => 'OXUS ACQUISITION CORP'],
[
'ticker' => 'OXY','stock_name' => 'OCCIDENTAL PETROLEUM CORP'],
[
'ticker' => 'OYST','stock_name' => 'OYSTER POINT PHARMA INC'],
[
'ticker' => 'OZ','stock_name' => 'BELPOINTE PREP LLC'],
[
'ticker' => 'OZK','stock_name' => 'BANK OZK'],
[
'ticker' => 'OZON','stock_name' => 'OZON HOLDINGS PLC - ADR'],
[
'ticker' => 'PAA','stock_name' => 'PLAINS ALL AMER PIPELINE LP'],
[
'ticker' => 'PAAS','stock_name' => 'PAN AMERICAN SILVER CORP'],
[
'ticker' => 'PAB','stock_name' => 'PGIM ACT AGGRG BOND ETF'],
[
'ticker' => 'PAC','stock_name' => 'GRUPO AEROPORTUARIO PAC-ADR'],
[
'ticker' => 'PACB','stock_name' => 'PACIFIC BIOSCIENCES OF CALIF'],
[
'ticker' => 'PACK','stock_name' => 'RANPAK HOLDINGS CORP'],
[
'ticker' => 'PACW','stock_name' => 'PACWEST BANCORP'],
[
'ticker' => 'PACX','stock_name' => 'PIONEER MERGER CORP -CLASS A'],
[
'ticker' => 'PACXU','stock_name' => 'PIONEER MERGER CORP'],
[
'ticker' => 'PAE','stock_name' => 'PAE INC'],
[
'ticker' => 'PAFO','stock_name' => 'PACIFICO ACQUISTION CORP'],
[
'ticker' => 'PAFOR','stock_name' => 'PACIFICO ACQUISITION COR-RTS'],
[
'ticker' => 'PAFOU','stock_name' => 'PACIFICO ACQUISITION CORP'],
[
'ticker' => 'PAG','stock_name' => 'PENSKE AUTOMOTIVE GROUP INC'],
[
'ticker' => 'PAGP','stock_name' => 'PLAINS GP HOLDINGS LP-CL A'],
[
'ticker' => 'PAGS','stock_name' => 'PAGSEGURO DIGITAL LTD-CL A'],
[
'ticker' => 'PAHC','stock_name' => 'PHIBRO ANIMAL HEALTH CORP-A'],
[
'ticker' => 'PAI','stock_name' => 'WESTERN ASSET INVESTMENT GRA'],
[
'ticker' => 'PAIC','stock_name' => 'PETRA ACQUISITION INC'],
[
'ticker' => 'PAICU','stock_name' => 'PETRA ACQUISITION INC'],
[
'ticker' => 'PAK','stock_name' => 'GLOBAL X MSCI PAKISTAN ETF'],
[
'ticker' => 'PALC','stock_name' => 'PACER LUNT LRG CAP MULTI-FAC'],
[
'ticker' => 'PALI','stock_name' => 'PALISADE BIO INC'],
[
'ticker' => 'PALL','stock_name' => 'ABERDEEN STANDARD PHYSICAL P'],
[
'ticker' => 'PALT','stock_name' => 'PALTALK INC'],
[
'ticker' => 'PAM','stock_name' => 'PAMPA ENERGIA SA-SPON ADR'],
[
'ticker' => 'PAMC','stock_name' => 'PACER LUNT MIDCAP MULT-FACT'],
[
'ticker' => 'PANA','stock_name' => 'PANACEA ACQUISITION CORPII-A'],
[
'ticker' => 'PANL','stock_name' => 'PANGAEA LOGISTICS SOLUTIONS'],
[
'ticker' => 'PANW','stock_name' => 'PALO ALTO NETWORKS INC'],
[
'ticker' => 'PAPR','stock_name' => 'INNOVATOR U.S. EQUITY POWER'],
[
'ticker' => 'PAQC','stock_name' => 'PROVIDENT ACQUISITION CORP-A'],
[
'ticker' => 'PAQCU','stock_name' => 'PROVIDENT ACQUISITION CORP'],
[
'ticker' => 'PAR','stock_name' => 'PAR TECHNOLOGY CORP/DEL'],
[
'ticker' => 'PARR','stock_name' => 'PAR PACIFIC HOLDINGS INC'],
[
'ticker' => 'PASG','stock_name' => 'PASSAGE BIO INC'],
[
'ticker' => 'PATH','stock_name' => 'UIPATH INC - CLASS A'],
[
'ticker' => 'PATI','stock_name' => 'PATRIOT TRANSPORTATION HOLDI'],
[
'ticker' => 'PATK','stock_name' => 'PATRICK INDUSTRIES INC'],
[
'ticker' => 'PAUG','stock_name' => 'INNOVATOR U.S. EQUITY POWER'],
[
'ticker' => 'PAVE','stock_name' => 'GLOBAL X US INFRASTRUCTURE'],
[
'ticker' => 'PAVM','stock_name' => 'PAVMED INC'],
[
'ticker' => 'PAWZ','stock_name' => 'PROSHARES PET CARE ETF'],
[
'ticker' => 'PAX','stock_name' => 'PATRIA INVESTMENTS LTD-A'],
[
'ticker' => 'PAY','stock_name' => 'PAYMENTUS HOLDINGS INC-A'],
[
'ticker' => 'PAYA','stock_name' => 'PAYA HOLDINGS INC'],
[
'ticker' => 'PAYC','stock_name' => 'PAYCOM SOFTWARE INC'],
[
'ticker' => 'PAYO','stock_name' => 'PAYONEER GLOBAL INC'],
[
'ticker' => 'PAYS','stock_name' => 'PAYSIGN INC'],
[
'ticker' => 'PAYX','stock_name' => 'PAYCHEX INC'],
[
'ticker' => 'PB','stock_name' => 'PROSPERITY BANCSHARES INC'],
[
'ticker' => 'PBA','stock_name' => 'PEMBINA PIPELINE CORP'],
[
'ticker' => 'PBAXU','stock_name' => 'PHOENIX BIOTECH ACQUISITION'],
[
'ticker' => 'PBBK','stock_name' => 'PB BANKSHARES INC'],
[
'ticker' => 'PBCT','stock_name' => 'PEOPLE\'S UNITED FINANCIAL'],
[
'ticker' => 'PBD','stock_name' => 'INVESCO GLOBAL CLEAN ENERGY'],
[
'ticker' => 'PBDM','stock_name' => 'INVESCO PUREBETA FTSE DEVELO'],
[
'ticker' => 'PBE','stock_name' => 'INVESCO DYNAMIC BIOTECHNOLOG'],
[
'ticker' => 'PBEE','stock_name' => 'INVESCO PUREBETA FTSE EMERGI'],
[
'ticker' => 'PBF','stock_name' => 'PBF ENERGY INC-CLASS A'],
[
'ticker' => 'PBFS','stock_name' => 'PIONEER BANCORP INC/NY'],
[
'ticker' => 'PBFX','stock_name' => 'PBF LOGISTICS LP'],
[
'ticker' => 'PBH','stock_name' => 'PRESTIGE CONSUMER HEALTHCARE'],
[
'ticker' => 'PBHC','stock_name' => 'PATHFINDER BANCORP INC'],
[
'ticker' => 'PBI','stock_name' => 'PITNEY BOWES INC'],
[
'ticker' => 'PBIP','stock_name' => 'PRUDENTIAL BANCORP INC'],
[
'ticker' => 'PBJ','stock_name' => 'INVESCO DYNAMIC FOOD & BEVER'],
[
'ticker' => 'PBLA','stock_name' => 'PANBELA THERAPEUTICS INC'],
[
'ticker' => 'PBND','stock_name' => 'INVESCO PUREBETA US AGGREGAT'],
[
'ticker' => 'PBP','stock_name' => 'INVESCO S&P 500 BUYWRITE ETF'],
[
'ticker' => 'PBPB','stock_name' => 'POTBELLY CORP'],
[
'ticker' => 'PBR','stock_name' => 'PETROLEO BRASILEIRO-SPON ADR'],
[
'ticker' => 'PBR.A','stock_name' => 'PETROLEO BRASIL-SP PREF  ADR'],
[
'ticker' => 'PBS','stock_name' => 'INVESCO DYNAMIC MEDIA ETF'],
[
'ticker' => 'PBSM','stock_name' => 'INVESCO PUREBETA MSCI USA SM'],
[
'ticker' => 'PBT','stock_name' => 'PERMIAN BASIN ROYALTY TRUST'],
[
'ticker' => 'PBTP','stock_name' => 'INVESCO PUREBETA 0-5 YR US T'],
[
'ticker' => 'PBTS','stock_name' => 'POWERBRIDGE TECHNOLOGIES CO'],
[
'ticker' => 'PBUG','stock_name' => 'PACER IPATH GOLD TRENDPILOT'],
[
'ticker' => 'PBUS','stock_name' => 'INVESCO PUREBETA MSCI USA ET'],
[
'ticker' => 'PBW','stock_name' => 'INVESCO WILDERHILL CLEAN ENE'],
[
'ticker' => 'PBYI','stock_name' => 'PUMA BIOTECHNOLOGY INC'],
[
'ticker' => 'PCAR','stock_name' => 'PACCAR INC'],
[
'ticker' => 'PCB','stock_name' => 'PCB BANCORP'],
[
'ticker' => 'PCCTU','stock_name' => 'PERCEPTION CAPITAL CORP II'],
[
'ticker' => 'PCEF','stock_name' => 'INVESCO CEF INCOME COMPOSITE'],
[
'ticker' => 'PCF','stock_name' => 'HIGH INCOME SECURITIES FUND'],
[
'ticker' => 'PCG','stock_name' => 'P G & E CORP'],
[
'ticker' => 'PCH','stock_name' => 'POTLATCHDELTIC CORP'],
[
'ticker' => 'PCI','stock_name' => 'PIMCO DYNAMIC CREDIT AND MOR'],
[
'ticker' => 'PCK','stock_name' => 'PIMCO CALIFORNIA MUNICIPA II'],
[
'ticker' => 'PCM','stock_name' => 'PCM FUND INC'],
[
'ticker' => 'PCN','stock_name' => 'PIMCO CORPORATE & INCOME STR'],
[
'ticker' => 'PCOM','stock_name' => 'POINTS INTERNATIONAL LTD'],
[
'ticker' => 'PCOR','stock_name' => 'PROCORE TECHNOLOGIES INC'],
[
'ticker' => 'PCPC','stock_name' => 'PERIPHAS CAPITAL PARTNR-CL A'],
[
'ticker' => 'PCPC=','stock_name' => 'PERIPHAS CAPITAL PARTNERING'],
[
'ticker' => 'PCQ','stock_name' => 'PIMCO CALIFORNIA MUNI INC FD'],
[
'ticker' => 'PCRX','stock_name' => 'PACIRA BIOSCIENCES INC'],
[
'ticker' => 'PCSA','stock_name' => 'PROCESSA PHARMACEUTICALS INC'],
[
'ticker' => 'PCSB','stock_name' => 'PCSB FINANCIAL CORP'],
[
'ticker' => 'PCT','stock_name' => 'PURECYCLE TECHNOLOGIES INC'],
[
'ticker' => 'PCTI','stock_name' => 'PCTEL INC'],
[
'ticker' => 'PCTTU','stock_name' => 'PURECYCLE TECHNOLOGIES INC'],
[
'ticker' => 'PCTY','stock_name' => 'PAYLOCITY HOLDING CORP'],
[
'ticker' => 'PCVX','stock_name' => 'VAXCYTE INC'],
[
'ticker' => 'PCXCU','stock_name' => 'PARSEC CAPITAL ACQUISITIONS'],
[
'ticker' => 'PCY','stock_name' => 'INVESCO EMERGING MARKETS SOV'],
[
'ticker' => 'PCYG','stock_name' => 'PARK CITY GROUP INC'],
[
'ticker' => 'PCYO','stock_name' => 'PURE CYCLE CORP'],
[
'ticker' => 'PD','stock_name' => 'PAGERDUTY INC'],
[
'ticker' => 'PDBC','stock_name' => 'INVESCO OPTIMUM YIELD DIVERS'],
[
'ticker' => 'PDCE','stock_name' => 'PDC ENERGY INC'],
[
'ticker' => 'PDCO','stock_name' => 'PATTERSON COS INC'],
[
'ticker' => 'PDD','stock_name' => 'PINDUODUO INC-ADR'],
[
'ticker' => 'PDEC','stock_name' => 'INNOVATOR U.S. EQUITY POWER'],
[
'ticker' => 'PDEV','stock_name' => 'PRINCIPAL INT MULTI-FACT IND'],
[
'ticker' => 'PDEX','stock_name' => 'PRO-DEX INC'],
[
'ticker' => 'PDFS','stock_name' => 'PDF SOLUTIONS INC'],
[
'ticker' => 'PDI','stock_name' => 'PIMCO DYNAMIC INCOME FUND'],
[
'ticker' => 'PDLB','stock_name' => 'PDL COMMUNITY BANCORP'],
[
'ticker' => 'PDM','stock_name' => 'PIEDMONT OFFICE REALTY TRU-A'],
[
'ticker' => 'PDN','stock_name' => 'INVESCO FTSE RAFI DEVELOPED'],
[
'ticker' => 'PDO','stock_name' => 'PIMCO DYNAMIC INCOME OPPORT'],
[
'ticker' => 'PDOT','stock_name' => 'PERIDOT ACQUISITION CORP-A'],
[
'ticker' => 'PDOT=','stock_name' => 'PERIDOT ACQUISITION CORP II'],
[
'ticker' => 'PDP','stock_name' => 'INVESCO DWA MOMENTUM ETF'],
[
'ticker' => 'PDS','stock_name' => 'PRECISION DRILLING CORP'],
[
'ticker' => 'PDSB','stock_name' => 'PDS BIOTECHNOLOGY CORP'],
[
'ticker' => 'PDT','stock_name' => 'JOHN HAN PREMIUM DIVIDEND FD'],
[
'ticker' => 'PEAK','stock_name' => 'HEALTHPEAK PROPERTIES INC'],
[
'ticker' => 'PEB','stock_name' => 'PEBBLEBROOK HOTEL TRUST'],
[
'ticker' => 'PEBK','stock_name' => 'PEOPLES BANCORP OF NC'],
[
'ticker' => 'PEBO','stock_name' => 'PEOPLES BANCORP INC'],
[
'ticker' => 'PECO','stock_name' => 'PHILLIPS EDISON & COMPANY IN'],
[
'ticker' => 'PED','stock_name' => 'PEDEVCO CORP'],
[
'ticker' => 'PEG','stock_name' => 'PUBLIC SERVICE ENTERPRISE GP'],
[
'ticker' => 'PEGA','stock_name' => 'PEGASYSTEMS INC'],
[
'ticker' => 'PEGRU','stock_name' => 'PROJECT ENERGY REIMAGINED AC'],
[
'ticker' => 'PEI','stock_name' => 'PENN REAL ESTATE INVEST TST'],
[
'ticker' => 'PEJ','stock_name' => 'INVESCO DYNAMIC LEISURE AND'],
[
'ticker' => 'PEN','stock_name' => 'PENUMBRA INC'],
[
'ticker' => 'PENN','stock_name' => 'PENN NATIONAL GAMING INC'],
[
'ticker' => 'PEO','stock_name' => 'ADAMS NATURAL RESOURCES FUND'],
[
'ticker' => 'PEP','stock_name' => 'PEPSICO INC'],
[
'ticker' => 'PEPLU','stock_name' => 'PEPPERLIME HEALTH ACQUISITIO'],
[
'ticker' => 'PERI','stock_name' => 'PERION NETWORK LTD'],
[
'ticker' => 'PESI','stock_name' => 'PERMA-FIX ENVIRONMENTAL SVCS'],
[
'ticker' => 'PETQ','stock_name' => 'PETIQ INC'],
[
'ticker' => 'PETS','stock_name' => 'PETMED EXPRESS INC'],
[
'ticker' => 'PETV','stock_name' => 'PETVIVO HOLDINGS INC'],
[
'ticker' => 'PETZ','stock_name' => 'TDH HOLDINGS INC'],
[
'ticker' => 'PEX','stock_name' => 'PROSHARES GLOBAL LISTED PRIV'],
[
'ticker' => 'PEXL','stock_name' => 'PACER US EXPORT LEADERS ETF'],
[
'ticker' => 'PEY','stock_name' => 'INVESCO HIGH YIELD EQUITY DI'],
[
'ticker' => 'PEZ','stock_name' => 'INVESCO DWA CONSUMER CYCLICA'],
[
'ticker' => 'PFBC','stock_name' => 'PREFERRED BANK/LOS ANGELES'],
[
'ticker' => 'PFC','stock_name' => 'PREMIER FINANCIAL CORP'],
[
'ticker' => 'PFD','stock_name' => 'FLAHERTY & CRUMRINE PREFERRE'],
[
'ticker' => 'PFDR','stock_name' => 'PATHFINDER ACQUISITION -CL A'],
[
'ticker' => 'PFDRU','stock_name' => 'PATHFINDER ACQUISITION CORP'],
[
'ticker' => 'PFE','stock_name' => 'PFIZER INC'],
[
'ticker' => 'PFEB','stock_name' => 'INNOVATOR U.S. EQUITY POWER'],
[
'ticker' => 'PFF','stock_name' => 'ISHARES PREFERRED & INCOME S'],
[
'ticker' => 'PFFA','stock_name' => 'VIRTUS INFRACAP US PFD ETF'],
[
'ticker' => 'PFFD','stock_name' => 'GLOBAL X US PREFERRED ETF'],
[
'ticker' => 'PFFL','stock_name' => 'ETRACS MON PAY 2XLEV PREFER'],
[
'ticker' => 'PFFR','stock_name' => 'INFRACAP REIT PREFERRED ETF'],
[
'ticker' => 'PFFV','stock_name' => 'GLOBAL X VARIABLE RATE PREF'],
[
'ticker' => 'PFG','stock_name' => 'PRINCIPAL FINANCIAL GROUP'],
[
'ticker' => 'PFGC','stock_name' => 'PERFORMANCE FOOD GROUP CO'],
[
'ticker' => 'PFHD','stock_name' => 'PROFESSIONAL HOLDING CORP-A'],
[
'ticker' => 'PFI','stock_name' => 'INVESCO DWA FINANCIAL MOMENT'],
[
'ticker' => 'PFIE','stock_name' => 'PROFIRE ENERGY INC'],
[
'ticker' => 'PFIG','stock_name' => 'INVESCO FUNDAMENTAL INVESTME'],
[
'ticker' => 'PFIN','stock_name' => 'P & F INDUSTRIES -CL A'],
[
'ticker' => 'PFIS','stock_name' => 'PEOPLES FINANCIAL SERVICES'],
[
'ticker' => 'PFIX','stock_name' => 'SIMPLIFY INTEREST RATE HEDGE'],
[
'ticker' => 'PFL','stock_name' => 'PIMCO INCOME STRATEGY FUND'],
[
'ticker' => 'PFLD','stock_name' => 'AAM LOW DUR PREF & INC SEC'],
[
'ticker' => 'PFLT','stock_name' => 'PENNANTPARK FLOATING RATE CA'],
[
'ticker' => 'PFM','stock_name' => 'INVESCO DIVIDEND ACHIEVERS E'],
[
'ticker' => 'PFMT','stock_name' => 'PERFORMANT FINANCIAL CORP'],
[
'ticker' => 'PFN','stock_name' => 'PIMCO INCOME STRATEGY FD II'],
[
'ticker' => 'PFO','stock_name' => 'FLAHERTY & CRUMRINE PREFERRE'],
[
'ticker' => 'PFS','stock_name' => 'PROVIDENT FINANCIAL SERVICES'],
[
'ticker' => 'PFSI','stock_name' => 'PENNYMAC FINANCIAL SERVICES'],
[
'ticker' => 'PFSW','stock_name' => 'PFSWEB INC'],
[
'ticker' => 'PFTA','stock_name' => 'PORTAGE FINTECH ACQUISITIO-A'],
[
'ticker' => 'PFTAU','stock_name' => 'PORTAGE FINTECH ACQUISITION'],
[
'ticker' => 'PFUT','stock_name' => 'PUTNAM SUSTAINABLE FUTURE'],
[
'ticker' => 'PFX','stock_name' => 'PHENIXFIN CORP'],
[
'ticker' => 'PFXF','stock_name' => 'VANECK PREF SEC X-FINANCIALS'],
[
'ticker' => 'PG','stock_name' => 'PROCTER & GAMBLE CO/THE'],
[
'ticker' => 'PGAL','stock_name' => 'GLOBAL X MSCI PORTUGAL ETF'],
[
'ticker' => 'PGC','stock_name' => 'PEAPACK GLADSTONE FINL CORP'],
[
'ticker' => 'PGEN','stock_name' => 'PRECIGEN INC'],
[
'ticker' => 'PGF','stock_name' => 'INVESCO FINANCIAL PREFERRED'],
[
'ticker' => 'PGHY','stock_name' => 'INVESCO GLOBAL SHORT TERM HI'],
[
'ticker' => 'PGJ','stock_name' => 'INVESCO GOLDEN DRAGON CHINA'],
[
'ticker' => 'PGM','stock_name' => 'IPATH SERIES B BBG PLATINUM'],
[
'ticker' => 'PGNY','stock_name' => 'PROGYNY INC'],
[
'ticker' => 'PGP','stock_name' => 'PIMCO GLOBAL STOCKSPLUS & IN'],
[
'ticker' => 'PGR','stock_name' => 'PROGRESSIVE CORP'],
[
'ticker' => 'PGRE','stock_name' => 'PARAMOUNT GROUP INC'],
[
'ticker' => 'PGRO','stock_name' => 'PUTNAM FOCUSED LRG CAP GROW'],
[
'ticker' => 'PGRW','stock_name' => 'PROGRESS ACQUISITION CORP-A'],
[
'ticker' => 'PGRWU','stock_name' => 'PROGRESS ACQUISITION CORP'],
[
'ticker' => 'PGSS=','stock_name' => 'PEGASUS DIGITAL MOBILITY ACQ'],
[
'ticker' => 'PGTI','stock_name' => 'PGT INNOVATIONS INC'],
[
'ticker' => 'PGX','stock_name' => 'INVESCO PREFERRED ETF'],
[
'ticker' => 'PGZ','stock_name' => 'PRINCIPAL REAL ESTATE INCOME'],
[
'ticker' => 'PH','stock_name' => 'PARKER HANNIFIN CORP'],
[
'ticker' => 'PHAR','stock_name' => 'PHARMING GROUP NV - ADR'],
[
'ticker' => 'PHAS','stock_name' => 'PHASEBIO PHARMACEUTICALS INC'],
[
'ticker' => 'PHAT','stock_name' => 'PHATHOM PHARMACEUTICALS INC'],
[
'ticker' => 'PHB','stock_name' => 'INVESCO FUNDAMENTAL HIGH YIE'],
[
'ticker' => 'PHCF','stock_name' => 'PUHUI WEALTH INVESTMENT MANA'],
[
'ticker' => 'PHD','stock_name' => 'PIONEER FLOATING RATE FUND I'],
[
'ticker' => 'PHDG','stock_name' => 'INVESCO S&P 500 DOWNSIDE HED'],
[
'ticker' => 'PHG','stock_name' => 'KONINKLIJKE PHILIPS NVR- NY'],
[
'ticker' => 'PHGE','stock_name' => 'BIOMX INC'],
[
'ticker' => 'PHGE=','stock_name' => 'BIOMX INC'],
[
'ticker' => 'PHI','stock_name' => 'PLDT INC-SPON ADR'],
[
'ticker' => 'PHIC','stock_name' => 'POPULATION HEALTH INVEST-A'],
[
'ticker' => 'PHICU','stock_name' => 'POPULATION HEALTH INVESTMENT'],
[
'ticker' => 'PHIO','stock_name' => 'PHIO PHARMACEUTICALS CORP'],
[
'ticker' => 'PHK','stock_name' => 'PIMCO HIGH INCOME FUND'],
[
'ticker' => 'PHM','stock_name' => 'PULTEGROUP INC'],
[
'ticker' => 'PHO','stock_name' => 'INVESCO WATER RESOURCES ETF'],
[
'ticker' => 'PHR','stock_name' => 'PHREESIA INC'],
[
'ticker' => 'PHT','stock_name' => 'PIONEER HIGH INCOME FUND INC'],
[
'ticker' => 'PHUN','stock_name' => 'PHUNWARE INC'],
[
'ticker' => 'PHVS','stock_name' => 'PHARVARIS NV'],
[
'ticker' => 'PHX','stock_name' => 'PHX MINERALS INC'],
[
'ticker' => 'PHYL','stock_name' => 'PGIM ACTIVE HIGH YIELD BOND'],
[
'ticker' => 'PHYS','stock_name' => 'SPROTT PHYSICAL GOLD TRUST'],
[
'ticker' => 'PHYT=','stock_name' => 'PYROPHYTE ACQUISITION CORP'],
[
'ticker' => 'PI','stock_name' => 'IMPINJ INC'],
[
'ticker' => 'PIAI','stock_name' => 'PRIME IMPACT ACQU I -CL A'],
[
'ticker' => 'PIAI=','stock_name' => 'PRIME IMPACT ACQUISITION I'],
[
'ticker' => 'PICB','stock_name' => 'INVESCO INTERNATIONAL CORPOR'],
[
'ticker' => 'PICC','stock_name' => 'PIVOTAL INVESTMENT CORPIII-A'],
[
'ticker' => 'PICC=','stock_name' => 'PIVOTAL INVESTMENT CORP III'],
[
'ticker' => 'PICK','stock_name' => 'ISHARES MSCI GLOBAL METALS &'],
[
'ticker' => 'PID','stock_name' => 'INVESCO INTERNATIONAL DIVIDE'],
[
'ticker' => 'PIE','stock_name' => 'INVESCO DWA EMERGING MARKETS'],
[
'ticker' => 'PIFI','stock_name' => 'CLEARSHARES PITON INT FI ETF'],
[
'ticker' => 'PII','stock_name' => 'POLARIS INC'],
[
'ticker' => 'PILL','stock_name' => 'DIREXION DLY PHARMA BULL 3X'],
[
'ticker' => 'PIM','stock_name' => 'PUTNAM MASTER INTER INC TST'],
[
'ticker' => 'PIN','stock_name' => 'INVESCO INDIA EXCHANGE-TRADE'],
[
'ticker' => 'PINC','stock_name' => 'PREMIER INC-CLASS A'],
[
'ticker' => 'PINE','stock_name' => 'ALPINE INCOME PROPERTY TRUST'],
[
'ticker' => 'PING','stock_name' => 'PING IDENTITY HOLDING CORP'],
[
'ticker' => 'PINK','stock_name' => 'SIMPLIFY HEALTH CARE ETF'],
[
'ticker' => 'PINS','stock_name' => 'PINTEREST INC- CLASS A'],
[
'ticker' => 'PIO','stock_name' => 'INVESCO GLOBAL WATER ETF'],
[
'ticker' => 'PIPP','stock_name' => 'PINE ISLAND ACQUISITION-CL A'],
[
'ticker' => 'PIPP=','stock_name' => 'PINE ISLAND ACQUISITION CORP'],
[
'ticker' => 'PIPR','stock_name' => 'PIPER SANDLER COS'],
[
'ticker' => 'PIRS','stock_name' => 'PIERIS PHARMACEUTICALS INC'],
[
'ticker' => 'PIXY','stock_name' => 'SHIFTPIXY INC'],
[
'ticker' => 'PIZ','stock_name' => 'INVESCO DWA DEVELOPED MARKET'],
[
'ticker' => 'PJAN','stock_name' => 'INNOVATOR U.S. EQUITY POWER'],
[
'ticker' => 'PJP','stock_name' => 'INVESCO DYNAMIC PHARMACEUTIC'],
[
'ticker' => 'PJT','stock_name' => 'PJT PARTNERS INC - A'],
[
'ticker' => 'PJUL','stock_name' => 'INNOVATOR U.S. EQUITY POWER'],
[
'ticker' => 'PJUN','stock_name' => 'INNOVATOR U.S. EQUITY POWER'],
[
'ticker' => 'PK','stock_name' => 'PARK HOTELS & RESORTS INC'],
[
'ticker' => 'PKB','stock_name' => 'INVESCO DYNAMIC BUILDING & C'],
[
'ticker' => 'PKBK','stock_name' => 'PARKE BANCORP INC'],
[
'ticker' => 'PKE','stock_name' => 'PARK AEROSPACE CORP'],
[
'ticker' => 'PKG','stock_name' => 'PACKAGING CORP OF AMERICA'],
[
'ticker' => 'PKI','stock_name' => 'PERKINELMER INC'],
[
'ticker' => 'PKO','stock_name' => 'PIMCO INCOME OPPORTUNITY FND'],
[
'ticker' => 'PKOH','stock_name' => 'PARK-OHIO HOLDINGS CORP'],
[
'ticker' => 'PKW','stock_name' => 'INVESCO BUYBACK ACHIEVERS ET'],
[
'ticker' => 'PKX','stock_name' => 'POSCO- SPON ADR'],
[
'ticker' => 'PLAB','stock_name' => 'PHOTRONICS INC'],
[
'ticker' => 'PLAG','stock_name' => 'PLANET GREEN HOLDINGS CORP'],
[
'ticker' => 'PLAN','stock_name' => 'ANAPLAN INC'],
[
'ticker' => 'PLAT','stock_name' => 'WISDOMTREE GROWTH LEADERS FU'],
[
'ticker' => 'PLAY','stock_name' => 'DAVE & BUSTER\'S ENTERTAINMEN'],
[
'ticker' => 'PLBC','stock_name' => 'PLUMAS BANCORP'],
[
'ticker' => 'PLBY','stock_name' => 'PLBY GROUP INC'],
[
'ticker' => 'PLCE','stock_name' => 'CHILDREN\'S PLACE INC/THE'],
[
'ticker' => 'PLD','stock_name' => 'PROLOGIS INC'],
[
'ticker' => 'PLDR','stock_name' => 'PUTNAM SUSTAINABLE LEADERS'],
[
'ticker' => 'PLG','stock_name' => 'PLATINUM GROUP METALS LTD'],
[
'ticker' => 'PLIN','stock_name' => 'CHINA XIANGTAI FOOD CO LTD'],
[
'ticker' => 'PLL','stock_name' => 'PIEDMONT LITHIUM INC'],
[
'ticker' => 'PLM','stock_name' => 'POLYMET MINING CORP'],
[
'ticker' => 'PLMI','stock_name' => 'PLUM ACQUISITION CORP I-A'],
[
'ticker' => 'PLMIU','stock_name' => 'PLUM ACQUISITION CORP I'],
[
'ticker' => 'PLMR','stock_name' => 'PALOMAR HOLDINGS INC'],
[
'ticker' => 'PLNT','stock_name' => 'PLANET FITNESS INC - CL A'],
[
'ticker' => 'PLOW','stock_name' => 'DOUGLAS DYNAMICS INC'],
[
'ticker' => 'PLPC','stock_name' => 'PREFORMED LINE PRODUCTS CO'],
[
'ticker' => 'PLRG','stock_name' => 'PRINCIPAL US LC ADAPT MULTI'],
[
'ticker' => 'PLRX','stock_name' => 'PLIANT THERAPEUTICS INC'],
[
'ticker' => 'PLSE','stock_name' => 'PULSE BIOSCIENCES INC'],
[
'ticker' => 'PLTK','stock_name' => 'PLAYTIKA HOLDING CORP'],
[
'ticker' => 'PLTL','stock_name' => 'PRINCIPAL US SC ADAPT MULTI'],
[
'ticker' => 'PLTM','stock_name' => 'GRANITESHARES PLATINUM TRUST'],
[
'ticker' => 'PLTR','stock_name' => 'PALANTIR TECHNOLOGIES INC-A'],
[
'ticker' => 'PLUG','stock_name' => 'PLUG POWER INC'],
[
'ticker' => 'PLUS','stock_name' => 'EPLUS INC'],
[
'ticker' => 'PLW','stock_name' => 'INVESCO 1-30 LADDERED TREASU'],
[
'ticker' => 'PLX','stock_name' => 'PROTALIX BIOTHERAPEUTICS INC'],
[
'ticker' => 'PLXP','stock_name' => 'PLX PHARMA INC'],
[
'ticker' => 'PLXS','stock_name' => 'PLEXUS CORP'],
[
'ticker' => 'PLYA','stock_name' => 'PLAYA HOTELS & RESORTS NV'],
[
'ticker' => 'PLYM','stock_name' => 'PLYMOUTH INDUSTRIAL REIT INC'],
[
'ticker' => 'PM','stock_name' => 'PHILIP MORRIS INTERNATIONAL'],
[
'ticker' => 'PMAR','stock_name' => 'INNOVATOR U.S. EQUITY POWER'],
[
'ticker' => 'PMAY','stock_name' => 'INNOVATOR U.S. EQUITY POWER'],
[
'ticker' => 'PMCB','stock_name' => 'PHARMACYTE BIOTECH INC'],
[
'ticker' => 'PMD','stock_name' => 'PSYCHEMEDICS CORP'],
[
'ticker' => 'PME','stock_name' => 'PINGTAN MARINE ENTERPRISE LT'],
[
'ticker' => 'PMF','stock_name' => 'PIMCO MUNICIPAL INCOME FUND'],
[
'ticker' => 'PMGM','stock_name' => 'PRIVETERRA ACQUISITION COR-A'],
[
'ticker' => 'PMGMU','stock_name' => 'PRIVETERRA ACQUISITION CORP'],
[
'ticker' => 'PML','stock_name' => 'PIMCO MUNICIPAL INCOME FD II'],
[
'ticker' => 'PMM','stock_name' => 'PUTNAM MANAGED MUNI INCM TRS'],
[
'ticker' => 'PMO','stock_name' => 'PUTNAM MUNI OPPORTUNITIES TR'],
[
'ticker' => 'PMT','stock_name' => 'PENNYMAC MORTGAGE INVESTMENT'],
[
'ticker' => 'PMTS','stock_name' => 'CPI CARD GROUP INC'],
[
'ticker' => 'PMVC','stock_name' => 'PMV CONSUMER ACQUISITION-A'],
[
'ticker' => 'PMVC=','stock_name' => 'PMV CONSUMER ACQUISITION COR'],
[
'ticker' => 'PMVP','stock_name' => 'PMV PHARMACEUTICALS INC'],
[
'ticker' => 'PMX','stock_name' => 'PIMCO MUNI INCOME FUND III'],
[
'ticker' => 'PNBK','stock_name' => 'PATRIOT NATIONAL BANCORP INC'],
[
'ticker' => 'PNC','stock_name' => 'PNC FINANCIAL SERVICES GROUP'],
[
'ticker' => 'PNF','stock_name' => 'PIMCO NEW YORK MUNI INC FD'],
[
'ticker' => 'PNFP','stock_name' => 'PINNACLE FINANCIAL PARTNERS'],
[
'ticker' => 'PNI','stock_name' => 'PIMCO NEW YORK MUNICIPAL II'],
[
'ticker' => 'PNM','stock_name' => 'PNM RESOURCES INC'],
[
'ticker' => 'PNNT','stock_name' => 'PENNANTPARK INVESTMENT CORP'],
[
'ticker' => 'PNOV','stock_name' => 'INNOVATOR U.S. EQUITY POWER'],
[
'ticker' => 'PNQI','stock_name' => 'INVESCO NASDAQ INTERNET ETF'],
[
'ticker' => 'PNR','stock_name' => 'PENTAIR PLC'],
[
'ticker' => 'PNRG','stock_name' => 'PRIMEENERGY RESOURCES CORP'],
[
'ticker' => 'PNT','stock_name' => 'POINT BIOPHARMA GLOBAL INC'],
[
'ticker' => 'PNTG','stock_name' => 'PENNANT GROUP INC/THE'],
[
'ticker' => 'PNTM','stock_name' => 'PONTEM CORP-CLASS A'],
[
'ticker' => 'PNTM=','stock_name' => 'PONTEM CORP'],
[
'ticker' => 'PNW','stock_name' => 'PINNACLE WEST CAPITAL'],
[
'ticker' => 'POAI','stock_name' => 'PREDICTIVE ONCOLOGY INC'],
[
'ticker' => 'POCT','stock_name' => 'INNOVATOR U.S. EQUITY POWER'],
[
'ticker' => 'PODD','stock_name' => 'INSULET CORP'],
[
'ticker' => 'POLA','stock_name' => 'POLAR POWER INC'],
[
'ticker' => 'POLY','stock_name' => 'PLANTRONICS INC'],
[
'ticker' => 'POND','stock_name' => 'ANGEL POND HOLDINGS CORP-A'],
[
'ticker' => 'POND=','stock_name' => 'ANGEL POND HOLDINGS CORP'],
[
'ticker' => 'PONO','stock_name' => 'PONO CAPITAL CORP-A'],
[
'ticker' => 'PONOU','stock_name' => 'PONO CAPITAL CORP'],
[
'ticker' => 'POOL','stock_name' => 'POOL CORP'],
[
'ticker' => 'POR','stock_name' => 'PORTLAND GENERAL ELECTRIC CO'],
[
'ticker' => 'POSH','stock_name' => 'POSHMARK INC-CLASS A'],
[
'ticker' => 'POST','stock_name' => 'POST HOLDINGS INC'],
[
'ticker' => 'POTX','stock_name' => 'GLOBAL X CANNABIS ETF'],
[
'ticker' => 'POW','stock_name' => 'POWERED BRANDS - CLASS A'],
[
'ticker' => 'POWI','stock_name' => 'POWER INTEGRATIONS INC'],
[
'ticker' => 'POWL','stock_name' => 'POWELL INDUSTRIES INC'],
[
'ticker' => 'POWRU','stock_name' => 'POWERED BRANDS'],
[
'ticker' => 'POWW','stock_name' => 'AMMO INC'],
[
'ticker' => 'PPA','stock_name' => 'INVESCO AEROSPACE & DEFENSE'],
[
'ticker' => 'PPBI','stock_name' => 'PACIFIC PREMIER BANCORP INC'],
[
'ticker' => 'PPBT','stock_name' => 'PURPLE BIOTECH LTD-ADR'],
[
'ticker' => 'PPC','stock_name' => 'PILGRIM\'S PRIDE CORP'],
[
'ticker' => 'PPD','stock_name' => 'PPD INC'],
[
'ticker' => 'PPG','stock_name' => 'PPG INDUSTRIES INC'],
[
'ticker' => 'PPGH','stock_name' => 'POEMA GLOBAL HOLDINGS CORP-A'],
[
'ticker' => 'PPGHU','stock_name' => 'POEMA GLOBAL HOLDINGS CORP'],
[
'ticker' => 'PPH','stock_name' => 'VANECK PHARMACEUTICAL ETF'],
[
'ticker' => 'PPHP','stock_name' => 'PHP VENTURES ACQUISITION -A'],
[
'ticker' => 'PPHPR','stock_name' => 'PHP VENTURES ACQUISITION-RTS'],
[
'ticker' => 'PPHPU','stock_name' => 'PHP VENTURES ACQUISITION COR'],
[
'ticker' => 'PPIH','stock_name' => 'PERMA-PIPE INTERNATIONAL HOL'],
[
'ticker' => 'PPL','stock_name' => 'PPL CORP'],
[
'ticker' => 'PPLT','stock_name' => 'ABERDEEN STANDARD PHYSICAL P'],
[
'ticker' => 'PPSI','stock_name' => 'PIONEER POWER SOLUTIONS INC'],
[
'ticker' => 'PPT','stock_name' => 'PUTNAM PREMIER INCOME TRUST'],
[
'ticker' => 'PPTA','stock_name' => 'PERPETUA RESOURCES CORP'],
[
'ticker' => 'PPTY','stock_name' => 'US DIVERSIFIED REAL ESTATE E'],
[
'ticker' => 'PQDI','stock_name' => 'PRINCIPAL SPECTRUM TAX-ADVAN'],
[
'ticker' => 'PQIN','stock_name' => 'PGIM QMA STRATEGIC ALPHA INT'],
[
'ticker' => 'PRA','stock_name' => 'PROASSURANCE CORP'],
[
'ticker' => 'PRAA','stock_name' => 'PRA GROUP INC'],
[
'ticker' => 'PRAX','stock_name' => 'PRAXIS PRECISION MEDICINES I'],
[
'ticker' => 'PRBM','stock_name' => 'PARABELLUM ACQUISITION COR-A'],
[
'ticker' => 'PRBM=','stock_name' => 'PARABELLUM ACQUISITION CORP'],
[
'ticker' => 'PRCH','stock_name' => 'PORCH GROUP INC'],
[
'ticker' => 'PRCT','stock_name' => 'PROCEPT BIOROBOTICS CORP'],
[
'ticker' => 'PRDO','stock_name' => 'PERDOCEO EDUCATION CORP'],
[
'ticker' => 'PREF','stock_name' => 'PRNCPAL SPCTRM PREF SEC ACTV'],
[
'ticker' => 'PRF','stock_name' => 'INVESCO FTSE RAFI US 1000 ET'],
[
'ticker' => 'PRFT','stock_name' => 'PERFICIENT INC'],
[
'ticker' => 'PRFX','stock_name' => 'PAINREFORM LTD'],
[
'ticker' => 'PRFZ','stock_name' => 'INVESCO FTSE RAFI US 1500 SM'],
[
'ticker' => 'PRG','stock_name' => 'PROG HOLDINGS INC'],
[
'ticker' => 'PRGO','stock_name' => 'PERRIGO CO PLC'],
[
'ticker' => 'PRGS','stock_name' => 'PROGRESS SOFTWARE CORP'],
[
'ticker' => 'PRI','stock_name' => 'PRIMERICA INC'],
[
'ticker' => 'PRIM','stock_name' => 'PRIMORIS SERVICES CORP'],
[
'ticker' => 'PRK','stock_name' => 'PARK NATIONAL CORP'],
[
'ticker' => 'PRLB','stock_name' => 'PROTO LABS INC'],
[
'ticker' => 'PRLD','stock_name' => 'PRELUDE THERAPEUTICS INC'],
[
'ticker' => 'PRMW','stock_name' => 'PRIMO WATER CORP'],
[
'ticker' => 'PRN','stock_name' => 'INVESCO DWA INDUSTRIALS MOME'],
[
'ticker' => 'PRNT','stock_name' => 'THE 3D PRINTING ETF'],
[
'ticker' => 'PRO','stock_name' => 'PROS HOLDINGS INC'],
[
'ticker' => 'PROC','stock_name' => 'PROCAPS GROUP SA'],
[
'ticker' => 'PROF','stock_name' => 'PROFOUND MEDICAL CORP'],
[
'ticker' => 'PROG','stock_name' => 'PROGENITY INC'],
[
'ticker' => 'PROV','stock_name' => 'PROVIDENT FINANCIAL HLDGS'],
[
'ticker' => 'PRPB','stock_name' => 'CC NEUBERGER PRINCIPAL-CL A'],
[
'ticker' => 'PRPB=','stock_name' => 'CC NEUBERGER PRINCIPAL HOLDI'],
[
'ticker' => 'PRPC','stock_name' => 'CC NEUBERGER PRINCIPAL HOL-A'],
[
'ticker' => 'PRPC=','stock_name' => 'CC NEUBERGER PRINCIPAL HOLDI'],
[
'ticker' => 'PRPH','stock_name' => 'PROPHASE LABS INC'],
[
'ticker' => 'PRPL','stock_name' => 'PURPLE INNOVATION INC'],
[
'ticker' => 'PRPO','stock_name' => 'PRECIPIO INC'],
[
'ticker' => 'PRQR','stock_name' => 'PROQR THERAPEUTICS NV'],
[
'ticker' => 'PRSR','stock_name' => 'PROSPECTOR CAPITAL CORP-CL A'],
[
'ticker' => 'PRSRU','stock_name' => 'PROSPECTOR CAPITAL CORP'],
[
'ticker' => 'PRT','stock_name' => 'PERMROCK ROYALTY TRUST'],
[
'ticker' => 'PRTA','stock_name' => 'PROTHENA CORP PLC'],
[
'ticker' => 'PRTC','stock_name' => 'PURETECH HEALTH PLC - ADR'],
[
'ticker' => 'PRTG','stock_name' => 'PORTAGE BIOTECH INC'],
[
'ticker' => 'PRTH','stock_name' => 'PRIORITY TECHNOLOGY HOLDINGS'],
[
'ticker' => 'PRTK','stock_name' => 'PARATEK PHARMACEUTICALS INC'],
[
'ticker' => 'PRTS','stock_name' => 'CARPARTS.COM INC'],
[
'ticker' => 'PRTY','stock_name' => 'PARTY CITY HOLDCO INC'],
[
'ticker' => 'PRU','stock_name' => 'PRUDENTIAL FINANCIAL INC'],
[
'ticker' => 'PRVA','stock_name' => 'PRIVIA HEALTH GROUP INC'],
[
'ticker' => 'PRVB','stock_name' => 'PROVENTION BIO INC'],
[
'ticker' => 'PSA','stock_name' => 'PUBLIC STORAGE'],
[
'ticker' => 'PSAG','stock_name' => 'PROPERTY SOLUTIONS ACQUISI-A'],
[
'ticker' => 'PSAGU','stock_name' => 'PROPERTY SOLUTIONS ACQUISITI'],
[
'ticker' => 'PSB','stock_name' => 'PS BUSINESS PARKS INC/MD'],
[
'ticker' => 'PSC','stock_name' => 'PRINCIPAL US SMALL-CAP MULTI'],
[
'ticker' => 'PSCC','stock_name' => 'INVESCO S&P SMALLCAP CONSUME'],
[
'ticker' => 'PSCD','stock_name' => 'INVESCO S&P SMALLCAP CONSUME'],
[
'ticker' => 'PSCE','stock_name' => 'INVESCO S&P SMALLCAP ENERGY'],
[
'ticker' => 'PSCF','stock_name' => 'INVESCO S&P SMALLCAP FINANCI'],
[
'ticker' => 'PSCH','stock_name' => 'INVESCO S&P SMALLCAP HEALTH'],
[
'ticker' => 'PSCI','stock_name' => 'INVESCO S&P SMALLCAP INDUSTR'],
[
'ticker' => 'PSCJ','stock_name' => 'PACER SWAN SOS CONSERVATIVE'],
[
'ticker' => 'PSCM','stock_name' => 'INVESCO S&P SMALLCAP MATERIA'],
[
'ticker' => 'PSCQ','stock_name' => 'PACER SWAN SOS CONS OCT ETF'],
[
'ticker' => 'PSCT','stock_name' => 'INVESCO S&P SMALLCAP INFORMA'],
[
'ticker' => 'PSCU','stock_name' => 'INVESCO S&P S C U&C SER ETF'],
[
'ticker' => 'PSCW','stock_name' => 'PACER SWAN SOS CONSERV APR'],
[
'ticker' => 'PSCX','stock_name' => 'PACER SWAN CONS DECEMBER ETF'],
[
'ticker' => 'PSEC','stock_name' => 'PROSPECT CAPITAL CORP'],
[
'ticker' => 'PSEP','stock_name' => 'INNOVATOR U.S. EQUITY POWER'],
[
'ticker' => 'PSET','stock_name' => 'PRINCIPAL QUALITY ETF'],
[
'ticker' => 'PSF','stock_name' => 'COHEN & STEERS SELECT PREFER'],
[
'ticker' => 'PSFD','stock_name' => 'PACER SWAN SOS FLEX DEC ETF'],
[
'ticker' => 'PSFE','stock_name' => 'PAYSAFE LTD'],
[
'ticker' => 'PSFF','stock_name' => 'PACER SWAN SOS FUND OF FUNDS'],
[
'ticker' => 'PSFJ','stock_name' => 'PACER SWAN SOS FLEX JULY ETF'],
[
'ticker' => 'PSFM','stock_name' => 'PACER SWAN SOS FLEX APRIL'],
[
'ticker' => 'PSFO','stock_name' => 'PACER SWAN SOS FLEX OCT ETF'],
[
'ticker' => 'PSHG','stock_name' => 'PERFORMANCE SHIPPING INC'],
[
'ticker' => 'PSI','stock_name' => 'INVESCO DYNAMIC SEMICONDUCTO'],
[
'ticker' => 'PSIL','stock_name' => 'ADVISORSHARES PSYCHEDELICS'],
[
'ticker' => 'PSJ','stock_name' => 'INVESCO DYNAMIC SOFTWARE ETF'],
[
'ticker' => 'PSK','stock_name' => 'SPDR ICE PREFERRED SECURITIE'],
[
'ticker' => 'PSL','stock_name' => 'INVESCO DWA CONSUMER STAPLES'],
[
'ticker' => 'PSLV','stock_name' => 'SPROTT PHYSICAL SILVER TRUST'],
[
'ticker' => 'PSMB','stock_name' => 'INVESCO BALANCED MULTI-ASSET'],
[
'ticker' => 'PSMC','stock_name' => 'INVESCO CONSERVATIVE MULTI-A'],
[
'ticker' => 'PSMD','stock_name' => 'PACER SWAN SOS MOD DECEM ETF'],
[
'ticker' => 'PSMG','stock_name' => 'INVESCO GROWTH MULTI-ASSET A'],
[
'ticker' => 'PSMJ','stock_name' => 'PACER SWAN SOS MODERATE JULY'],
[
'ticker' => 'PSMM','stock_name' => 'INVESCO MODERATELY CONSERVAT'],
[
'ticker' => 'PSMO','stock_name' => 'PACER SWAN SOS MOD OCT ETF'],
[
'ticker' => 'PSMR','stock_name' => 'PACER SWAN SOS MODERATE APR'],
[
'ticker' => 'PSMT','stock_name' => 'PRICESMART INC'],
[
'ticker' => 'PSN','stock_name' => 'PARSONS CORP'],
[
'ticker' => 'PSNL','stock_name' => 'PERSONALIS INC'],
[
'ticker' => 'PSO','stock_name' => 'PEARSON PLC-SPONSORED ADR'],
[
'ticker' => 'PSP','stock_name' => 'INVESCO GLOBAL LISTED PRIVAT'],
[
'ticker' => 'PSPC','stock_name' => 'POST HOLDINGS PARTNERING -A'],
[
'ticker' => 'PSPC=','stock_name' => 'POST HOLDINGS PARTNERING COR'],
[
'ticker' => 'PSQ','stock_name' => 'PROSHARES SHORT QQQ'],
[
'ticker' => 'PSR','stock_name' => 'INVESCO ACTIVE US REAL ESTAT'],
[
'ticker' => 'PST','stock_name' => 'PROSHARES ULTRASHORT 7-10 YR'],
[
'ticker' => 'PSTG','stock_name' => 'PURE STORAGE INC - CLASS A'],
[
'ticker' => 'PSTH','stock_name' => 'PERSHING SQUARE TONTINE -A'],
[
'ticker' => 'PSTI','stock_name' => 'PLURISTEM THERAPEUTICS INC'],
[
'ticker' => 'PSTL','stock_name' => 'POSTAL REALTY TRUST INC- A'],
[
'ticker' => 'PSTV','stock_name' => 'PLUS THERAPEUTICS INC'],
[
'ticker' => 'PSTX','stock_name' => 'POSEIDA THERAPEUTICS INC'],
[
'ticker' => 'PSX','stock_name' => 'PHILLIPS 66'],
[
'ticker' => 'PSXP','stock_name' => 'PHILLIPS 66 PARTNERS LP'],
[
'ticker' => 'PSY','stock_name' => 'DEFIANCE NEXT GEN ALTERED EX'],
[
'ticker' => 'PT','stock_name' => 'PINTEC TECHNOLOGY HOLDINGS L'],
[
'ticker' => 'PTA','stock_name' => 'COHEN & STEERS TAX-ADVANTAGE'],
[
'ticker' => 'PTBD','stock_name' => 'PACER TRENDPILOT US BOND ETF'],
[
'ticker' => 'PTC','stock_name' => 'PTC INC'],
[
'ticker' => 'PTCT','stock_name' => 'PTC THERAPEUTICS INC'],
[
'ticker' => 'PTE','stock_name' => 'POLARITYTE INC'],
[
'ticker' => 'PTEN','stock_name' => 'PATTERSON-UTI ENERGY INC'],
[
'ticker' => 'PTEU','stock_name' => 'PACER TRENDPILOT EUROPEAN ET'],
[
'ticker' => 'PTF','stock_name' => 'INVESCO DWA TECHNOLOGY MOMEN'],
[
'ticker' => 'PTGX','stock_name' => 'PROTAGONIST THERAPEUTICS INC'],
[
'ticker' => 'PTH','stock_name' => 'INVESCO DWA HEALTHCARE MOMEN'],
[
'ticker' => 'PTIC','stock_name' => 'PROPTECH INVESTMENT CORP-A'],
[
'ticker' => 'PTICU','stock_name' => 'PROPTECH INVESTMENT CORP II'],
[
'ticker' => 'PTIN','stock_name' => 'PACER TRENDPILOT INTL ETF'],
[
'ticker' => 'PTIX','stock_name' => 'PROTAGENIC THERAPEUTICS INC'],
[
'ticker' => 'PTLC','stock_name' => 'PACER TRENDPILOT US LARGE CA'],
[
'ticker' => 'PTLO','stock_name' => 'PORTILLO\'S INC-CL A'],
[
'ticker' => 'PTMC','stock_name' => 'PACER TRENDPILOT US MID CAP'],
[
'ticker' => 'PTMN','stock_name' => 'PORTMAN RIDGE FINANCE CORP'],
[
'ticker' => 'PTN','stock_name' => 'PALATIN TECHNOLOGIES INC'],
[
'ticker' => 'PTNQ','stock_name' => 'PACER TRENDPILOT 100 ETF'],
[
'ticker' => 'PTNR','stock_name' => 'PARTNER COMMUNICATIONS-ADR'],
[
'ticker' => 'PTOC','stock_name' => 'PINE TECHNOLOGY ACQUISI-CL A'],
[
'ticker' => 'PTOCU','stock_name' => 'PINE TECHNOLOGY ACQUISITION'],
[
'ticker' => 'PTON','stock_name' => 'PELOTON INTERACTIVE INC-A'],
[
'ticker' => 'PTPI','stock_name' => 'PETROS PHARMACEUTICALS INC'],
[
'ticker' => 'PTR','stock_name' => 'PETROCHINA CO LTD -ADR'],
[
'ticker' => 'PTRA','stock_name' => 'PROTERRA INC'],
[
'ticker' => 'PTRS','stock_name' => 'PARTNERS BANCORP'],
[
'ticker' => 'PTSI','stock_name' => 'P.A.M. TRANSPORTATION SVCS'],
[
'ticker' => 'PTVE','stock_name' => 'PACTIV EVERGREEN INC'],
[
'ticker' => 'PTY','stock_name' => 'PIMCO CORPORATE & INCOME OPP'],
[
'ticker' => 'PUBM','stock_name' => 'PUBMATIC INC-CLASS A'],
[
'ticker' => 'PUCK','stock_name' => 'GOAL ACQUISITIONS CORP'],
[
'ticker' => 'PUCKU','stock_name' => 'GOAL ACQUISITIONS CORP'],
[
'ticker' => 'PUI','stock_name' => 'INVESCO DWA UTILITIES MOMENT'],
[
'ticker' => 'PUK','stock_name' => 'PRUDENTIAL PLC-ADR'],
[
'ticker' => 'PULM','stock_name' => 'PULMATRIX INC'],
[
'ticker' => 'PULS','stock_name' => 'PGIM ULTRA SHORT BOND ETF'],
[
'ticker' => 'PUMP','stock_name' => 'PROPETRO HOLDING CORP'],
[
'ticker' => 'PUTW','stock_name' => 'WISDOMTREE CBOE S&P 500 PTWT'],
[
'ticker' => 'PUYI','stock_name' => 'PUYI INC - ADR'],
[
'ticker' => 'PV','stock_name' => 'PRIMAVERA CAPITAL ACQUISIT-A'],
[
'ticker' => 'PV=','stock_name' => 'PRIMAVERA CAPITAL ACQUISITIO'],
[
'ticker' => 'PVAL','stock_name' => 'PUTNAM FOCUSED LRG CAP VALUE'],
[
'ticker' => 'PVBC','stock_name' => 'PROVIDENT BANCORP INC'],
[
'ticker' => 'PVG','stock_name' => 'PRETIUM RESOURCES INC'],
[
'ticker' => 'PVH','stock_name' => 'PVH CORP'],
[
'ticker' => 'PVI','stock_name' => 'INVESCO VRDO TAX-FREE ETF'],
[
'ticker' => 'PVL','stock_name' => 'PERMIANVILLE ROYALTY TRUST'],
[
'ticker' => 'PW','stock_name' => 'POWER REIT'],
[
'ticker' => 'PWB','stock_name' => 'INVESCO DYNAMIC LARGE CAP GR'],
[
'ticker' => 'PWC','stock_name' => 'INVESCO DYNAMIC MARKET ETF'],
[
'ticker' => 'PWFL','stock_name' => 'POWERFLEET INC'],
[
'ticker' => 'PWOD','stock_name' => 'PENNS WOODS BANCORP INC'],
[
'ticker' => 'PWP','stock_name' => 'PERELLA WEINBERG PARTNERS'],
[
'ticker' => 'PWR','stock_name' => 'QUANTA SERVICES INC'],
[
'ticker' => 'PWS','stock_name' => 'PACER WEALTHSHIELD ETF'],
[
'ticker' => 'PWSC','stock_name' => 'POWERSCHOOL HOLDINGS INC-A'],
[
'ticker' => 'PWV','stock_name' => 'INVESCO DYNAMIC LARGE CAP VA'],
[
'ticker' => 'PWZ','stock_name' => 'INVESCO CALIFORNIA AMT-FREE'],
[
'ticker' => 'PX','stock_name' => 'P10 INC-A'],
[
'ticker' => 'PXD','stock_name' => 'PIONEER NATURAL RESOURCES CO'],
[
'ticker' => 'PXE','stock_name' => 'INVESCO DYNAMIC ENERGY EXPLO'],
[
'ticker' => 'PXF','stock_name' => 'INVESCO FTSE RAFI DEVELOPED'],
[
'ticker' => 'PXH','stock_name' => 'INVESCO FTSE RAFI EMERGING M'],
[
'ticker' => 'PXI','stock_name' => 'INVESCO DWA ENERGY MOMENTUM'],
[
'ticker' => 'PXJ','stock_name' => 'INVESCO DYNAMIC OIL & GAS SE'],
[
'ticker' => 'PXLW','stock_name' => 'PIXELWORKS INC'],
[
'ticker' => 'PXQ','stock_name' => 'INVESCO DYNAMIC NETWORKING E'],
[
'ticker' => 'PXS','stock_name' => 'PYXIS TANKERS INC'],
[
'ticker' => 'PXUS','stock_name' => 'PRINCIPAL INT ADAP MULTI'],
[
'ticker' => 'PY','stock_name' => 'PRINCIPAL VALUE ETF'],
[
'ticker' => 'PYCR','stock_name' => 'PAYCOR HCM INC'],
[
'ticker' => 'PYN','stock_name' => 'PIMCO NEW YORK MUNICIPAL III'],
[
'ticker' => 'PYPD','stock_name' => 'POLYPID LTD'],
[
'ticker' => 'PYPE','stock_name' => 'ETRACS NYSE PICKENS CORE ETN'],
[
'ticker' => 'PYPL','stock_name' => 'PAYPAL HOLDINGS INC'],
[
'ticker' => 'PYR','stock_name' => 'PYROGENESIS CANADA INC'],
[
'ticker' => 'PYXS','stock_name' => 'PYXIS ONCOLOGY INC'],
[
'ticker' => 'PYZ','stock_name' => 'INVESCO DWA BASIC MATERIALS'],
[
'ticker' => 'PZA','stock_name' => 'INVESCO NATIONAL AMT-FREE MU'],
[
'ticker' => 'PZC','stock_name' => 'PIMCO CALIFORNIA MUNICIP III'],
[
'ticker' => 'PZG','stock_name' => 'PARAMOUNT GOLD NEVADA CORP'],
[
'ticker' => 'PZN','stock_name' => 'PZENA INVESTMENT MANAGM-CL A'],
[
'ticker' => 'PZT','stock_name' => 'INVESCO NEW YORK AMT-FREE MU'],
[
'ticker' => 'PZZA','stock_name' => 'PAPA JOHN\'S INTL INC'],
[
'ticker' => 'QABA','stock_name' => 'FIRST TRUST NASDAQ ABA CBIF'],
[
'ticker' => 'QADA','stock_name' => 'QAD INC-A'],
[
'ticker' => 'QADB','stock_name' => 'QAD INC-B'],
[
'ticker' => 'QAI','stock_name' => 'IQ HEDGE MULTI-STRAT TRACKER'],
[
'ticker' => 'QARP','stock_name' => 'DBX ETF TRUST - XTRACKERS RU'],
[
'ticker' => 'QAT','stock_name' => 'ISHARES MSCI QATAR ETF'],
[
'ticker' => 'QCLN','stock_name' => 'FIRST TRUST NASDAQ CLEAN EDG'],
[
'ticker' => 'QCLR','stock_name' => 'GLOBAL X NASDAQ 100 COLLAR 9'],
[
'ticker' => 'QCOM','stock_name' => 'QUALCOMM INC'],
[
'ticker' => 'QCON','stock_name' => 'AMERICAN CENT QUAL CONVT SEC'],
[
'ticker' => 'QCRH','stock_name' => 'QCR HOLDINGS INC'],
[
'ticker' => 'QD','stock_name' => 'QUDIAN INC-SPON ADR'],
[
'ticker' => 'QDEC','stock_name' => 'FT CBOE VEST NASDAQ-100 BUFF'],
[
'ticker' => 'QDEF','stock_name' => 'FLEXSHARES QUALITY DIVIDEND'],
[
'ticker' => 'QDEL','stock_name' => 'QUIDEL CORP'],
[
'ticker' => 'QDF','stock_name' => 'FLEXSHARES QUALITY DIVIDEND'],
[
'ticker' => 'QDIV','stock_name' => 'GLOBAL X S&P 500 QLTY DIV'],
[
'ticker' => 'QDPL','stock_name' => 'PACER MET US LRG CAP DVD 400'],
[
'ticker' => 'QDYN','stock_name' => 'FLEXSHARES QUALITY DIVIDEND'],
[
'ticker' => 'QED','stock_name' => 'IQ HEDGE EVENT-DRIVEN TRACKE'],
[
'ticker' => 'QEFA','stock_name' => 'SPDR MSCI EAFE STRATEGICFACT'],
[
'ticker' => 'QEMM','stock_name' => 'SPDR MSCI EMERGING MARKETS S'],
[
'ticker' => 'QFIN','stock_name' => '360 DIGITECH INC'],
[
'ticker' => 'QFTA','stock_name' => 'QUANTUM FINTECH ACQUISITION'],
[
'ticker' => 'QFTA=','stock_name' => 'QUANTUM FINTECH ACQUISITION'],
[
'ticker' => 'QGEN','stock_name' => 'QIAGEN N.V.'],
[
'ticker' => 'QGRO','stock_name' => 'AMERICAN CENTURY STOXX US QL'],
[
'ticker' => 'QH','stock_name' => 'QUHUO LTD-ADR'],
[
'ticker' => 'QID','stock_name' => 'PROSHARES ULTRASHORT QQQ'],
[
'ticker' => 'QINT','stock_name' => 'AMERICAN CENTURY QLTY DIVER'],
[
'ticker' => 'QIPT','stock_name' => 'QUIPT HOME MEDICAL CORP'],
[
'ticker' => 'QIWI','stock_name' => 'QIWI PLC-SPONSORED ADR'],
[
'ticker' => 'QJUN','stock_name' => 'FT CBOE VEST NASDAQ-100 BUFF'],
[
'ticker' => 'QK','stock_name' => 'Q&K INTERNATIONAL GROUP-ADR'],
[
'ticker' => 'QLC','stock_name' => 'FLEXSHARES US QUALITY LG CAP'],
[
'ticker' => 'QLD','stock_name' => 'PROSHARES ULTRA QQQ'],
[
'ticker' => 'QLGN','stock_name' => 'QUALIGEN THERAPEUTICS INC'],
[
'ticker' => 'QLI','stock_name' => 'QILIAN INTERNATIONAL HOLDING'],
[
'ticker' => 'QLS','stock_name' => 'IQ HEDGE LONG/SHORT TRACKER'],
[
'ticker' => 'QLTA','stock_name' => 'ISHARES AAA - A RATED CORPOR'],
[
'ticker' => 'QLV','stock_name' => 'FLEXSHARES US QUALITY LOW VO'],
[
'ticker' => 'QLVD','stock_name' => 'FLEXSHARES DEVELOPED MARKETS'],
[
'ticker' => 'QLVE','stock_name' => 'FLEXSHARES EMERGING MARKETS'],
[
'ticker' => 'QLYS','stock_name' => 'QUALYS INC'],
[
'ticker' => 'QMAR','stock_name' => 'FT CBOE VEST NASDAQ-100 BUFF'],
[
'ticker' => 'QMCO','stock_name' => 'QUANTUM CORP'],
[
'ticker' => 'QMN','stock_name' => 'IQ HEDGE MARKET NEUT TRACK'],
[
'ticker' => 'QMOM','stock_name' => 'ALPHA US QUANT MOM ETF'],
[
'ticker' => 'QNRX','stock_name' => 'QUOIN PHARMACEUTICALS LT-ADR'],
[
'ticker' => 'QNST','stock_name' => 'QUINSTREET INC'],
[
'ticker' => 'QPFF','stock_name' => 'AMERICAN CENTURY QUAL PREF'],
[
'ticker' => 'QPT','stock_name' => 'ADVISORSHARES Q PORT BL ALLO'],
[
'ticker' => 'QPX','stock_name' => 'ADVISORSHARES Q DYN GROWTH'],
[
'ticker' => 'QQC','stock_name' => 'SIMPLIFY EXCHANGE TRADED FUN'],
[
'ticker' => 'QQD','stock_name' => 'SIMPLIFY EXCHANGE TRADED FUN'],
[
'ticker' => 'QQEW','stock_name' => 'FIRST TRUST NASDQ 100 EQ WEI'],
[
'ticker' => 'QQH','stock_name' => 'HCM DEFENDER 100 INDEX ETF'],
[
'ticker' => 'QQJG','stock_name' => 'INVESCO ESG NASDAQ NEXT GEN'],
[
'ticker' => 'QQMG','stock_name' => 'INVESCO ESG NASDAQ 100'],
[
'ticker' => 'QQQ','stock_name' => 'INVESCO QQQ TRUST SERIES 1'],
[
'ticker' => 'QQQA','stock_name' => 'PROSHARES NSDQ 100 D/W MOM'],
[
'ticker' => 'QQQE','stock_name' => 'DIREXION NASDAQ-100 EQ WEIGH'],
[
'ticker' => 'QQQJ','stock_name' => 'INVESCO NASDAQ NEXT GEN 100'],
[
'ticker' => 'QQQM','stock_name' => 'INVESCO NASDAQ 100 ETF'],
[
'ticker' => 'QQQN','stock_name' => 'VICTORYSHARES NASDAQ NEXT 50'],
[
'ticker' => 'QQQX','stock_name' => 'NUVEEN NAS100 DYN OVERWRT FD'],
[
'ticker' => 'QQXT','stock_name' => 'FIRST TRUST NASDAQ-100 EX-TE'],
[
'ticker' => 'QRFT','stock_name' => 'QRAFT AI-ENH US LRG CAP ETF'],
[
'ticker' => 'QRHC','stock_name' => 'QUEST RESOURCE HOLDING CORP'],
[
'ticker' => 'QRMI','stock_name' => 'GLOBAL X NASDAQ 100 RISK MAN'],
[
'ticker' => 'QRTEA','stock_name' => 'QURATE RETAIL INC-SERIES A'],
[
'ticker' => 'QRTEB','stock_name' => 'QURATE RETAIL GROUP INC-B'],
[
'ticker' => 'QRVO','stock_name' => 'QORVO INC'],
[
'ticker' => 'QS','stock_name' => 'QUANTUMSCAPE CORP'],
[
'ticker' => 'QSI','stock_name' => 'QUANTUM-SI INC'],
[
'ticker' => 'QSPT','stock_name' => 'FT CBOE VEST GROWTH-100 BUFF'],
[
'ticker' => 'QSR','stock_name' => 'RESTAURANT BRANDS INTERN'],
[
'ticker' => 'QSY','stock_name' => 'WISDOMTREE US QUALITY SHAREH'],
[
'ticker' => 'QTAP','stock_name' => 'INNOVATOR GRW 100 ACCL PLUS'],
[
'ticker' => 'QTEC','stock_name' => 'FIRST TRUST NASDQ 100 TECH I'],
[
'ticker' => 'QTJL','stock_name' => 'INN GROWTH ACCEL PLUS JULY'],
[
'ticker' => 'QTNT','stock_name' => 'QUOTIENT LTD'],
[
'ticker' => 'QTOC','stock_name' => 'INNOVATOR GROWTH ACCEL PL-OC'],
[
'ticker' => 'QTR','stock_name' => 'GLOBAL X NASDAQ 100 TAIL RIS'],
[
'ticker' => 'QTRX','stock_name' => 'QUANTERIX CORP'],
[
'ticker' => 'QTT','stock_name' => 'QUTOUTIAO INC-ADR'],
[
'ticker' => 'QTUM','stock_name' => 'DEFIANCE QUANTUM ETF'],
[
'ticker' => 'QTWO','stock_name' => 'Q2 HOLDINGS INC'],
[
'ticker' => 'QUAD','stock_name' => 'QUAD GRAPHICS INC'],
[
'ticker' => 'QUAL','stock_name' => 'ISHARES MSCI USA QUALITY FAC'],
[
'ticker' => 'QUBT','stock_name' => 'QUANTUM COMPUTING INC'],
[
'ticker' => 'QUIK','stock_name' => 'QUICKLOGIC CORP'],
[
'ticker' => 'QULL','stock_name' => 'ETRACS 2X QUALITY FACTR TR'],
[
'ticker' => 'QUMU','stock_name' => 'QUMU CORP'],
[
'ticker' => 'QUOT','stock_name' => 'QUOTIENT TECHNOLOGY INC'],
[
'ticker' => 'QURE','stock_name' => 'UNIQURE NV'],
[
'ticker' => 'QUS','stock_name' => 'SPDR MSCI USA STRATEGICFACTO'],
[
'ticker' => 'QVAL','stock_name' => 'ALPHA ARCH US QNT VALUE ETF'],
[
'ticker' => 'QVML','stock_name' => 'INVESCO S&P 500 QVM MULTI-FA'],
[
'ticker' => 'QVMM','stock_name' => 'INVESCO S&P MIDCAP 400 QVM M'],
[
'ticker' => 'QVMS','stock_name' => 'INVESCO S&P SMALLCAP 600 QVM'],
[
'ticker' => 'QWLD','stock_name' => 'SPDR MSCI WORLD STRATEGICFAC'],
[
'ticker' => 'QYLD','stock_name' => 'GLOBAL X NASD 100 COV CALL'],
[
'ticker' => 'QYLG','stock_name' => 'GLOBAL X NASDAQ 100 COVC GRW'],
[
'ticker' => 'R','stock_name' => 'RYDER SYSTEM INC'],
[
'ticker' => 'RA','stock_name' => 'BROOKFIELD REAL ASSETS INCOM'],
[
'ticker' => 'RAAS','stock_name' => 'CLOOPEN GROUP HOLDING LTD'],
[
'ticker' => 'RAAX','stock_name' => 'VANECK INFLATION ALLOCATION'],
[
'ticker' => 'RACB','stock_name' => 'RESEARCH ALLIANCE CORP II-A'],
[
'ticker' => 'RACE','stock_name' => 'FERRARI NV'],
[
'ticker' => 'RAD','stock_name' => 'RITE AID CORP'],
[
'ticker' => 'RADA','stock_name' => 'RADA ELECTRONIC INDS LTD'],
[
'ticker' => 'RADI','stock_name' => 'RADIUS GLOBAL INFRASTRUCTU-A'],
[
'ticker' => 'RAFE','stock_name' => 'PIMCO RAFI ESG US ETF'],
[
'ticker' => 'RAIL','stock_name' => 'FREIGHTCAR AMERICA INC'],
[
'ticker' => 'RAIN','stock_name' => 'RAIN THERAPEUTICS INC'],
[
'ticker' => 'RALS','stock_name' => 'PROSHARES RAFI LONG/SHORT'],
[
'ticker' => 'RAM','stock_name' => 'ARIES I ACQUISITION CORP -A'],
[
'ticker' => 'RAMMU','stock_name' => 'ARIES I ACQUISITION CORP'],
[
'ticker' => 'RAMP','stock_name' => 'LIVERAMP HOLDINGS INC'],
[
'ticker' => 'RAND','stock_name' => 'RAND CAPITAL CORP'],
[
'ticker' => 'RANI','stock_name' => 'RANI THERAPEUTICS HOLDINGS-A'],
[
'ticker' => 'RAPT','stock_name' => 'RAPT THERAPEUTICS INC'],
[
'ticker' => 'RARE','stock_name' => 'ULTRAGENYX PHARMACEUTICAL IN'],
[
'ticker' => 'RAVE','stock_name' => 'RAVE RESTAURANT GROUP INC'],
[
'ticker' => 'RAVI','stock_name' => 'FLEXSHARES READY ACCESS VARI'],
[
'ticker' => 'RAVN','stock_name' => 'RAVEN INDUSTRIES INC'],
[
'ticker' => 'RAYC','stock_name' => 'RAYLIANT QUANTAMENTAL CHINA'],
[
'ticker' => 'RAYS','stock_name' => 'GLOBAL X SOLAR ETF'],
[
'ticker' => 'RBA','stock_name' => 'RITCHIE BROS AUCTIONEERS'],
[
'ticker' => 'RBAC','stock_name' => 'REDBALL ACQUISITION CORP - A'],
[
'ticker' => 'RBAC=','stock_name' => 'REDBALL ACQUISITION CORP'],
[
'ticker' => 'RBB','stock_name' => 'RBB BANCORP'],
[
'ticker' => 'RBBN','stock_name' => 'RIBBON COMMUNICATIONS INC'],
[
'ticker' => 'RBCAA','stock_name' => 'REPUBLIC BANCORP INC-CLASS A'],
[
'ticker' => 'RBCN','stock_name' => 'RUBICON TECHNOLOGY INC'],
[
'ticker' => 'RBIN','stock_name' => 'NATIONWIDE RISK-BASED INTL E'],
[
'ticker' => 'RBKB','stock_name' => 'RHINEBECK BANCORP INC'],
[
'ticker' => 'RBLX','stock_name' => 'ROBLOX CORP -CLASS A'],
[
'ticker' => 'RBNC','stock_name' => 'RELIANT BANCORP INC'],
[
'ticker' => 'RBND','stock_name' => 'SPDR BLOOMBERG CORP ESG SELT'],
[
'ticker' => 'RBOT','stock_name' => 'VICARIOUS SURGICAL INC'],
[
'ticker' => 'RBUS','stock_name' => 'NATIONWIDE RISK-BASED US EQ'],
[
'ticker' => 'RC','stock_name' => 'READY CAPITAL CORP'],
[
'ticker' => 'RCAT','stock_name' => 'RED CAT HOLDINGS INC'],
[
'ticker' => 'RCD','stock_name' => 'INVESCO S&P 500 EQUAL WEIGHT'],
[
'ticker' => 'RCEL','stock_name' => 'AVITA MEDICAL INC'],
[
'ticker' => 'RCG','stock_name' => 'RENN FUND INC'],
[
'ticker' => 'RCHG','stock_name' => 'RECHARGE ACQUISITION CORP-A'],
[
'ticker' => 'RCHGU','stock_name' => 'RECHARGE ACQUISITION CORP'],
[
'ticker' => 'RCI','stock_name' => 'ROGERS COMMUNICATIONS INC-B'],
[
'ticker' => 'RCII','stock_name' => 'RENT-A-CENTER INC'],
[
'ticker' => 'RCKT','stock_name' => 'ROCKET PHARMACEUTICALS INC'],
[
'ticker' => 'RCKY','stock_name' => 'ROCKY BRANDS INC'],
[
'ticker' => 'RCL','stock_name' => 'ROYAL CARIBBEAN CRUISES LTD'],
[
'ticker' => 'RCLF','stock_name' => 'ROSECLIFF ACQUISITION CORP-A'],
[
'ticker' => 'RCLFU','stock_name' => 'ROSECLIFF ACQUISITION CORP I'],
[
'ticker' => 'RCM','stock_name' => 'R1 RCM INC'],
[
'ticker' => 'RCMT','stock_name' => 'RCM TECHNOLOGIES INC'],
[
'ticker' => 'RCON','stock_name' => 'RECON TECHNOLOGY LTD-CLASS A'],
[
'ticker' => 'RCOR','stock_name' => 'RENOVACOR INC'],
[
'ticker' => 'RCRT','stock_name' => 'RECRUITER.COM GROUP INC'],
[
'ticker' => 'RCS','stock_name' => 'PIMCO STRATEGIC INCOME FUND'],
[
'ticker' => 'RCUS','stock_name' => 'ARCUS BIOSCIENCES INC'],
[
'ticker' => 'RDBX','stock_name' => 'REDBOX ENTERTAINMENT INC'],
[
'ticker' => 'RDCM','stock_name' => 'RADCOM LTD'],
[
'ticker' => 'RDFI','stock_name' => 'RAREVIEW DYNAMIC FIXED INCOM'],
[
'ticker' => 'RDFN','stock_name' => 'REDFIN CORP'],
[
'ticker' => 'RDHL','stock_name' => 'REDHILL BIOPHARMA LTD-SP ADR'],
[
'ticker' => 'RDI','stock_name' => 'READING INTERNATIONAL INC-A'],
[
'ticker' => 'RDIB','stock_name' => 'READING INTERNATIONAL INC-B'],
[
'ticker' => 'RDIV','stock_name' => 'INVESCO S&P ULTRA DIVIDEND'],
[
'ticker' => 'RDN','stock_name' => 'RADIAN GROUP INC'],
[
'ticker' => 'RDNT','stock_name' => 'RADNET INC'],
[
'ticker' => 'RDOG','stock_name' => 'ALPS REIT DIVIDEND DOGS ETF'],
[
'ticker' => 'RDS.A','stock_name' => 'ROYAL DUTCH SHELL-SPON ADR-A'],
[
'ticker' => 'RDS.B','stock_name' => 'ROYAL DUTCH SHELL-SPON ADR-B'],
[
'ticker' => 'RDUS','stock_name' => 'RADIUS HEALTH INC'],
[
'ticker' => 'RDVT','stock_name' => 'RED VIOLET INC'],
[
'ticker' => 'RDVY','stock_name' => 'FIRST TRUST RISING DIVIDEND'],
[
'ticker' => 'RDW','stock_name' => 'REDWIRE CORP'],
[
'ticker' => 'RDWR','stock_name' => 'RADWARE LTD'],
[
'ticker' => 'RDY','stock_name' => 'DR. REDDY\'S LABORATORIES-ADR'],
[
'ticker' => 'RE','stock_name' => 'EVEREST RE GROUP LTD'],
[
'ticker' => 'REAL','stock_name' => 'REALREAL INC/THE'],
[
'ticker' => 'REAX','stock_name' => 'REAL BROKERAGE INC/THE'],
[
'ticker' => 'REC','stock_name' => 'EMLES REAL ESTATE CREDIT ETF'],
[
'ticker' => 'RECS','stock_name' => 'COLUMBIA RESRH ENHANCED CORE'],
[
'ticker' => 'REDU','stock_name' => 'RISE EDUCATION CAYMAN - ADR'],
[
'ticker' => 'REE','stock_name' => 'REE AUTOMOTIVE LTD - CLASS A'],
[
'ticker' => 'REED','stock_name' => 'REED\'S INC'],
[
'ticker' => 'REET','stock_name' => 'ISHARES GLOBAL REIT ETF'],
[
'ticker' => 'REFR','stock_name' => 'RESEARCH FRONTIERS INC'],
[
'ticker' => 'REG','stock_name' => 'REGENCY CENTERS CORP'],
[
'ticker' => 'REGI','stock_name' => 'RENEWABLE ENERGY GROUP INC'],
[
'ticker' => 'REGL','stock_name' => 'PRSHRS S&P MID 400 DVD ARIST'],
[
'ticker' => 'REGN','stock_name' => 'REGENERON PHARMACEUTICALS'],
[
'ticker' => 'REI','stock_name' => 'RING ENERGY INC'],
[
'ticker' => 'REIT','stock_name' => 'ALPS ACTIVE REIT ETF'],
[
'ticker' => 'REK','stock_name' => 'PROSHARES SHORT REAL ESTATE'],
[
'ticker' => 'REKR','stock_name' => 'REKOR SYSTEMS INC'],
[
'ticker' => 'RELI','stock_name' => 'RELIANCE GLOBAL GROUP INC'],
[
'ticker' => 'RELL','stock_name' => 'RICHARDSON ELEC LTD'],
[
'ticker' => 'RELX','stock_name' => 'RELX PLC - SPON ADR'],
[
'ticker' => 'RELY','stock_name' => 'REMITLY GLOBAL INC'],
[
'ticker' => 'REM','stock_name' => 'ISHARES MORTGAGE REAL ESTATE'],
[
'ticker' => 'REML','stock_name' => 'X-LINKS 2X MORTG REIT ETN'],
[
'ticker' => 'REMX','stock_name' => 'VANECK RARE EARTH/STRAT MET'],
[
'ticker' => 'RENN','stock_name' => 'RENREN INC-ADR'],
[
'ticker' => 'RENT','stock_name' => 'RENT THE RUNWAY INC-A'],
[
'ticker' => 'REPH','stock_name' => 'RECRO PHARMA INC'],
[
'ticker' => 'REPL','stock_name' => 'REPLIMUNE GROUP INC'],
[
'ticker' => 'REPX','stock_name' => 'RILEY EXPLORATION PERMIAN IN'],
[
'ticker' => 'RERE','stock_name' => 'AIHUISHOU INTERNATIONAL -ADR'],
[
'ticker' => 'RES','stock_name' => 'RPC INC'],
[
'ticker' => 'RESD','stock_name' => 'WISDOMTREE INTERNATIONAL ESG'],
[
'ticker' => 'RESE','stock_name' => 'WISDOMTREE EM MKT ESG FUND'],
[
'ticker' => 'RESN','stock_name' => 'RESONANT INC'],
[
'ticker' => 'RESP','stock_name' => 'WISDOMTREE US ESG FUND'],
[
'ticker' => 'RETA','stock_name' => 'REATA PHARMACEUTICALS INC-A'],
[
'ticker' => 'RETL','stock_name' => 'DIREXION DLY RETAIL BULL 3X'],
[
'ticker' => 'RETO','stock_name' => 'RETO ECO-SOLUTIONS INC'],
[
'ticker' => 'REV','stock_name' => 'REVLON INC-CLASS A'],
[
'ticker' => 'REVE','stock_name' => 'ALPINE ACQUISITION CORP'],
[
'ticker' => 'REVEU','stock_name' => 'ALPINE ACQUISITION CORP'],
[
'ticker' => 'REVG','stock_name' => 'REV GROUP INC'],
[
'ticker' => 'REVH','stock_name' => 'REVOLUTION HEALTHCARE ACQU-A'],
[
'ticker' => 'REVHU','stock_name' => 'REVOLUTION HEALTHCARE ACQUIS'],
[
'ticker' => 'REVS','stock_name' => 'COLUMBIA RESEARCH ENHANCED V'],
[
'ticker' => 'REW','stock_name' => 'PROSHARES ULTRASHORT TECH'],
[
'ticker' => 'REX','stock_name' => 'REX AMERICAN RESOURCES CORP'],
[
'ticker' => 'REXR','stock_name' => 'REXFORD INDUSTRIAL REALTY IN'],
[
'ticker' => 'REYN','stock_name' => 'REYNOLDS CONSUMER PRODUCTS I'],
[
'ticker' => 'REZ','stock_name' => 'ISHARS RES AND MULTI REALES'],
[
'ticker' => 'REZI','stock_name' => 'RESIDEO TECHNOLOGIES INC'],
[
'ticker' => 'RF','stock_name' => 'REGIONS FINANCIAL CORP'],
[
'ticker' => 'RFCI','stock_name' => 'RIVERFRONT DYNAMIC CORE INC'],
[
'ticker' => 'RFDA','stock_name' => 'RIVERFRONT DYNAMIC US DV ETF'],
[
'ticker' => 'RFDI','stock_name' => 'FIRST TRST DYN DEVEL INT ETF'],
[
'ticker' => 'RFEM','stock_name' => 'FIRST TRUST RIVERFRONT DYNAM'],
[
'ticker' => 'RFEU','stock_name' => 'FIRST TR DYNAMIC EUROPE ETF'],
[
'ticker' => 'RFFC','stock_name' => 'RIVERFRONT DYNAMIC US FC ETF'],
[
'ticker' => 'RFG','stock_name' => 'INVESCO S&P MIDCAP 400 PURE'],
[
'ticker' => 'RFI','stock_name' => 'COHEN & STEERS TOT RET RLTY'],
[
'ticker' => 'RFIL','stock_name' => 'RF INDUSTRIES LTD'],
[
'ticker' => 'RFL','stock_name' => 'RAFAEL HOLDINGS INC-CLASS B'],
[
'ticker' => 'RFM','stock_name' => 'RIVERNORTH FLEXIBLE MUNI'],
[
'ticker' => 'RFMZ','stock_name' => 'RIVERNORTH FLEX MUNI II'],
[
'ticker' => 'RFP','stock_name' => 'RESOLUTE FOREST PRODUCTS'],
[
'ticker' => 'RFV','stock_name' => 'INVESCO S&P MIDCAP 400 PURE'],
[
'ticker' => 'RGA','stock_name' => 'REINSURANCE GROUP OF AMERICA'],
[
'ticker' => 'RGC','stock_name' => 'REGENCELL BIOSCIENCE HOLDING'],
[
'ticker' => 'RGCO','stock_name' => 'RGC RESOURCES INC'],
[
'ticker' => 'RGEN','stock_name' => 'REPLIGEN CORP'],
[
'ticker' => 'RGF','stock_name' => 'REAL GOOD FOOD CO INC/THE'],
[
'ticker' => 'RGI','stock_name' => 'INVESCO S&P 500 EQUAL WEIGHT'],
[
'ticker' => 'RGLD','stock_name' => 'ROYAL GOLD INC'],
[
'ticker' => 'RGLS','stock_name' => 'REGULUS THERAPEUTICS INC'],
[
'ticker' => 'RGNX','stock_name' => 'REGENXBIO INC'],
[
'ticker' => 'RGP','stock_name' => 'RESOURCES CONNECTION INC'],
[
'ticker' => 'RGR','stock_name' => 'STURM RUGER & CO INC'],
[
'ticker' => 'RGS','stock_name' => 'REGIS CORP'],
[
'ticker' => 'RGT','stock_name' => 'ROYCE GLOBAL VALUE TRUST'],
[
'ticker' => 'RH','stock_name' => 'RH'],
[
'ticker' => 'RHE','stock_name' => 'REGIONAL HEALTH PROPERTIES'],
[
'ticker' => 'RHI','stock_name' => 'ROBERT HALF INTL INC'],
[
'ticker' => 'RHP','stock_name' => 'RYMAN HOSPITALITY PROPERTIES'],
[
'ticker' => 'RHS','stock_name' => 'INVESCO S&P 500 EQUAL WEIGHT'],
[
'ticker' => 'RIBT','stock_name' => 'RICEBRAN TECHNOLOGIES'],
[
'ticker' => 'RICK','stock_name' => 'RCI HOSPITALITY HOLDINGS INC'],
[
'ticker' => 'RICO','stock_name' => 'AGRICO ACQUISITION CORP-A'],
[
'ticker' => 'RICOU','stock_name' => 'AGRICO ACQUISITION CORP'],
[
'ticker' => 'RIDE','stock_name' => 'LORDSTOWN MOTORS CORP-CL A'],
[
'ticker' => 'RIET','stock_name' => 'HOYA CAPITAL HI DVD YLD ETF'],
[
'ticker' => 'RIG','stock_name' => 'TRANSOCEAN LTD'],
[
'ticker' => 'RIGL','stock_name' => 'RIGEL PHARMACEUTICALS INC'],
[
'ticker' => 'RIGS','stock_name' => 'RIVERFRONT STRATEGIC INCOME'],
[
'ticker' => 'RIGZ','stock_name' => 'VIRIDI CLEAN EN CRYPT MIN IN'],
[
'ticker' => 'RILY','stock_name' => 'B. RILEY FINANCIAL INC'],
[
'ticker' => 'RINF','stock_name' => 'PROSHARES INFLATION EXPECTAT'],
[
'ticker' => 'RING','stock_name' => 'ISHARES MSCI GLOBAL GOLD MIN'],
[
'ticker' => 'RIO','stock_name' => 'RIO TINTO PLC-SPON ADR'],
[
'ticker' => 'RIOT','stock_name' => 'RIOT BLOCKCHAIN INC'],
[
'ticker' => 'RISN','stock_name' => 'INSPIRE TACTICAL BALANCED ES'],
[
'ticker' => 'RISR','stock_name' => 'FOLIOBEYOND RISING RATES ETF'],
[
'ticker' => 'RIV','stock_name' => 'RIVERNORTH OPPORTUNITIES FND'],
[
'ticker' => 'RIVE','stock_name' => 'RIVERVIEW FINANCIAL CORP'],
[
'ticker' => 'RJA','stock_name' => 'ELEMENTS ROGERS AGRI TOT RET'],
[
'ticker' => 'RJF','stock_name' => 'RAYMOND JAMES FINANCIAL INC'],
[
'ticker' => 'RJI','stock_name' => 'ELEMENTS ROGERS TOTAL RETURN'],
[
'ticker' => 'RJN','stock_name' => 'ELEMENTS ROGERS ENERGY TR'],
[
'ticker' => 'RJZ','stock_name' => 'ELEMENTS ROGERS METALS TR'],
[
'ticker' => 'RKDA','stock_name' => 'ARCADIA BIOSCIENCES INC'],
[
'ticker' => 'RKLB','stock_name' => 'ROCKET LAB USA INC'],
[
'ticker' => 'RKLY','stock_name' => 'ROCKLEY PHOTONICS HOLDINGS L'],
[
'ticker' => 'RKT','stock_name' => 'ROCKET COS INC-CLASS A'],
[
'ticker' => 'RKTA','stock_name' => 'ROCKET INTERNET GROWTH OPP-A'],
[
'ticker' => 'RKTA=','stock_name' => 'ROCKET INTERNET GROWTH OPPOR'],
[
'ticker' => 'RL','stock_name' => 'RALPH LAUREN CORP'],
[
'ticker' => 'RLAY','stock_name' => 'RELAY THERAPEUTICS INC'],
[
'ticker' => 'RLGT','stock_name' => 'RADIANT LOGISTICS INC'],
[
'ticker' => 'RLGY','stock_name' => 'REALOGY HOLDINGS CORP'],
[
'ticker' => 'RLI','stock_name' => 'RLI CORP'],
[
'ticker' => 'RLJ','stock_name' => 'RLJ LODGING TRUST'],
[
'ticker' => 'RLMD','stock_name' => 'RELMADA THERAPEUTICS INC'],
[
'ticker' => 'RLX','stock_name' => 'RLX TECHNOLOGY INC-ADR'],
[
'ticker' => 'RLY','stock_name' => 'SPDR SSGA MULTI-ASSET REAL R'],
[
'ticker' => 'RLYB','stock_name' => 'RALLYBIO CORP'],
[
'ticker' => 'RM','stock_name' => 'REGIONAL MANAGEMENT CORP'],
[
'ticker' => 'RMAX','stock_name' => 'RE/MAX HOLDINGS INC-CL A'],
[
'ticker' => 'RMBI','stock_name' => 'RICHMOND MUTUAL BANCORPORATI'],
[
'ticker' => 'RMBL','stock_name' => 'RUMBLEON INC-B'],
[
'ticker' => 'RMBS','stock_name' => 'RAMBUS INC'],
[
'ticker' => 'RMCF','stock_name' => 'ROCKY MOUNTAIN CHOC FACT INC'],
[
'ticker' => 'RMD','stock_name' => 'RESMED INC'],
[
'ticker' => 'RMED','stock_name' => 'RA MEDICAL SYSTEMS INC'],
[
'ticker' => 'RMGC','stock_name' => 'RMG ACQUISITION CORP III -A'],
[
'ticker' => 'RMGCU','stock_name' => 'RMG ACQUISITION CORP III'],
[
'ticker' => 'RMI','stock_name' => 'RIVERNORTH OPPORT MUNI INC'],
[
'ticker' => 'RMM','stock_name' => 'RIVERNORTH MANAGED DURATION'],
[
'ticker' => 'RMNI','stock_name' => 'RIMINI STREET INC'],
[
'ticker' => 'RMO','stock_name' => 'ROMEO POWER INC'],
[
'ticker' => 'RMR','stock_name' => 'RMR GROUP INC/THE - A'],
[
'ticker' => 'RMT','stock_name' => 'ROYCE MICRO-CAP TRUST INC'],
[
'ticker' => 'RMTI','stock_name' => 'ROCKWELL MEDICAL INC'],
[
'ticker' => 'RNA','stock_name' => 'AVIDITY BIOSCIENCES INC'],
[
'ticker' => 'RNAZ','stock_name' => 'TRANSCODE THERAPEUTICS INC'],
[
'ticker' => 'RNDB','stock_name' => 'RANDOLPH BANCORP INC'],
[
'ticker' => 'RNDM','stock_name' => 'DEVELOPED INT SELECT EQUITY'],
[
'ticker' => 'RNDV','stock_name' => 'US EQUITY DIVIDEND SELECT'],
[
'ticker' => 'RNEM','stock_name' => 'EMERGING MARKETS EQTY SELECT'],
[
'ticker' => 'RNERU','stock_name' => 'MOUNT RAINIER ACQUISITION CO'],
[
'ticker' => 'RNG','stock_name' => 'RINGCENTRAL INC-CLASS A'],
[
'ticker' => 'RNGR','stock_name' => 'RANGER ENERGY SERVICES INC'],
[
'ticker' => 'RNLC','stock_name' => 'LARGE CAP US EQUITY SELECT'],
[
'ticker' => 'RNLX','stock_name' => 'RENALYTIX AI PLC-ADR'],
[
'ticker' => 'RNMC','stock_name' => 'MID CAP US EQUITY SELECT ETF'],
[
'ticker' => 'RNP','stock_name' => 'COHEN & STEERS REIT AND PREF'],
[
'ticker' => 'RNR','stock_name' => 'RENAISSANCERE HOLDINGS LTD'],
[
'ticker' => 'RNRG','stock_name' => 'GLOBAL X RENEWABLE ENER PROD'],
[
'ticker' => 'RNSC','stock_name' => 'SMALL CAP US EQUITY SELECT'],
[
'ticker' => 'RNST','stock_name' => 'RENASANT CORP'],
[
'ticker' => 'RNW','stock_name' => 'RENEW ENERGY GLOBAL PLC-A'],
[
'ticker' => 'RNWK','stock_name' => 'REALNETWORKS INC'],
[
'ticker' => 'RNXT','stock_name' => 'RENOVORX INC'],
[
'ticker' => 'ROAD','stock_name' => 'CONSTRUCTION PARTNERS INC-A'],
[
'ticker' => 'ROAM','stock_name' => 'HARTFORD MULTIFACTOR EMERGIN'],
[
'ticker' => 'ROBO','stock_name' => 'ROBO GLOBAL ROBOTICS AND AUT'],
[
'ticker' => 'ROBT','stock_name' => 'FIRST TRUST NASDAQ ARTIFICIA'],
[
'ticker' => 'ROCC','stock_name' => 'RANGER OIL CORP-A'],
[
'ticker' => 'ROCG','stock_name' => 'ROTH CH ACQUISITION IV CO'],
[
'ticker' => 'ROCGU','stock_name' => 'ROTH CH ACQUISITION IV CO'],
[
'ticker' => 'ROCK','stock_name' => 'GIBRALTAR INDUSTRIES INC'],
[
'ticker' => 'ROCR','stock_name' => 'ROTH CH ACQUISITION III CO'],
[
'ticker' => 'ROCRU','stock_name' => 'ROTH CH ACQUISITION III CO'],
[
'ticker' => 'RODE','stock_name' => 'HARTFORD MULTIFACTOR DIVERSI'],
[
'ticker' => 'RODI','stock_name' => 'IPATH RETURN ON DISABILITY E'],
[
'ticker' => 'RODM','stock_name' => 'HARTFORD MULTIFACTOR DEVELOP'],
[
'ticker' => 'ROG','stock_name' => 'ROGERS CORP'],
[
'ticker' => 'ROIC','stock_name' => 'RETAIL OPPORTUNITY INVESTMEN'],
[
'ticker' => 'ROIV','stock_name' => 'ROIVANT SCIENCES LTD'],
[
'ticker' => 'ROK','stock_name' => 'ROCKWELL AUTOMATION INC'],
[
'ticker' => 'ROKT','stock_name' => 'SPDR S&P KENSHO FINAL FRONTI'],
[
'ticker' => 'ROKU','stock_name' => 'ROKU INC'],
[
'ticker' => 'ROL','stock_name' => 'ROLLINS INC'],
[
'ticker' => 'ROLL','stock_name' => 'RBC BEARINGS INC'],
[
'ticker' => 'ROM','stock_name' => 'PROSHARES ULTRA TECHNOLOGY'],
[
'ticker' => 'ROMO','stock_name' => 'STRATEGY SHARES NEWFOUND/RES'],
[
'ticker' => 'RONI','stock_name' => 'RICE ACQUISITION CORP II -A'],
[
'ticker' => 'RONI=','stock_name' => 'RICE ACQUISITION CORP II'],
[
'ticker' => 'ROOF','stock_name' => 'IQ US REAL ESTATE SMALL CAP'],
[
'ticker' => 'ROOT','stock_name' => 'ROOT INC/OH -CLASS A'],
[
'ticker' => 'ROP','stock_name' => 'ROPER TECHNOLOGIES INC'],
[
'ticker' => 'RORO','stock_name' => 'ATAC US ROTATION ETF'],
[
'ticker' => 'ROSC','stock_name' => 'HARTFORD MULTIFACTOR SMALL C'],
[
'ticker' => 'ROSEU','stock_name' => 'ROSE HILL ACQUISITION CORP'],
[
'ticker' => 'ROSS','stock_name' => 'ROSS ACQUISITION CORP II -A'],
[
'ticker' => 'ROSS=','stock_name' => 'ROSS ACQUISITION CORP II'],
[
'ticker' => 'ROST','stock_name' => 'ROSS STORES INC'],
[
'ticker' => 'ROUS','stock_name' => 'HARTFORD MULTIFACTOR US EQUI'],
[
'ticker' => 'ROVR','stock_name' => 'ROVER GROUP INC'],
[
'ticker' => 'RPAR','stock_name' => 'RPAR RISK PARITY ETF'],
[
'ticker' => 'RPAY','stock_name' => 'REPAY HOLDINGS CORP'],
[
'ticker' => 'RPD','stock_name' => 'RAPID7 INC'],
[
'ticker' => 'RPG','stock_name' => 'INVESCO S&P 500 PURE GROWTH'],
[
'ticker' => 'RPHM','stock_name' => 'RENEO PHARMACEUTICALS INC'],
[
'ticker' => 'RPID','stock_name' => 'RAPID MICRO BIOSYSTEMS INC-A'],
[
'ticker' => 'RPM','stock_name' => 'RPM INTERNATIONAL INC'],
[
'ticker' => 'RPRX','stock_name' => 'ROYALTY PHARMA PLC- CL A'],
[
'ticker' => 'RPT','stock_name' => 'RPT REALTY'],
[
'ticker' => 'RPTX','stock_name' => 'REPARE THERAPEUTICS INC'],
[
'ticker' => 'RPV','stock_name' => 'INVESCO S&P 500 PURE VALUE E'],
[
'ticker' => 'RQI','stock_name' => 'COHEN & STEERS QUAL INC RLTY'],
[
'ticker' => 'RRBI','stock_name' => 'RED RIVER BANCSHARES INC'],
[
'ticker' => 'RRC','stock_name' => 'RANGE RESOURCES CORP'],
[
'ticker' => 'RRD','stock_name' => 'RR DONNELLEY & SONS CO'],
[
'ticker' => 'RRGB','stock_name' => 'RED ROBIN GOURMET BURGERS'],
[
'ticker' => 'RRH','stock_name' => 'ADVOCATE RISING RATE HDG ETF'],
[
'ticker' => 'RRR','stock_name' => 'RED ROCK RESORTS INC-CLASS A'],
[
'ticker' => 'RRX','stock_name' => 'REGAL REXNORD CORP'],
[
'ticker' => 'RS','stock_name' => 'RELIANCE STEEL & ALUMINUM'],
[
'ticker' => 'RSF','stock_name' => 'RIVERNORTH SPECIALTY FINANCE'],
[
'ticker' => 'RSG','stock_name' => 'REPUBLIC SERVICES INC'],
[
'ticker' => 'RSI','stock_name' => 'RUSH STREET INTERACTIVE INC'],
[
'ticker' => 'RSKD','stock_name' => 'RISKIFIED LTD-A'],
[
'ticker' => 'RSLS','stock_name' => 'RESHAPE LIFESCIENCES INC'],
[
'ticker' => 'RSP','stock_name' => 'INVESCO S&P 500 EQUAL WEIGHT'],
[
'ticker' => 'RSPY','stock_name' => 'REVERE SECTOR OPPORTUNITY ET'],
[
'ticker' => 'RSSS','stock_name' => 'RESEARCH SOLUTIONS INC'],
[
'ticker' => 'RSVR','stock_name' => 'RESERVOIR MEDIA INC'],
[
'ticker' => 'RSX','stock_name' => 'VANECK RUSSIA ETF'],
[
'ticker' => 'RSXJ','stock_name' => 'VANECK RUSSIA SMALL-CAP ETF'],
[
'ticker' => 'RTAI','stock_name' => 'RAREVIEW TAX ADVANTAGED INCO'],
[
'ticker' => 'RTH','stock_name' => 'VANECK RETAIL ETF'],
[
'ticker' => 'RTLR','stock_name' => 'RATTLER MIDSTREAM LP'],
[
'ticker' => 'RTM','stock_name' => 'INVESCO S&P 500 EQUAL WEIGHT'],
[
'ticker' => 'RTX','stock_name' => 'RAYTHEON TECHNOLOGIES CORP'],
[
'ticker' => 'RUBY','stock_name' => 'RUBIUS THERAPEUTICS INC'],
[
'ticker' => 'RUFF','stock_name' => 'ALPHA DOG ETF'],
[
'ticker' => 'RULE','stock_name' => 'ADAPTIVE CORE ETF'],
[
'ticker' => 'RUN','stock_name' => 'SUNRUN INC'],
[
'ticker' => 'RUSHA','stock_name' => 'RUSH ENTERPRISES INC-CL A'],
[
'ticker' => 'RUSHB','stock_name' => 'RUSH ENTERPRISES INC - CL B'],
[
'ticker' => 'RUSL','stock_name' => 'DIREXION DAILY RUSSIA BULL 2'],
[
'ticker' => 'RUTH','stock_name' => 'RUTH\'S HOSPITALITY GROUP INC'],
[
'ticker' => 'RVAC','stock_name' => 'RIVERVIEW ACQUISITION CORP-A'],
[
'ticker' => 'RVACU','stock_name' => 'RIVERVIEW ACQUISITION CORP'],
[
'ticker' => 'RVI','stock_name' => 'RETAIL VALUE INC'],
[
'ticker' => 'RVLV','stock_name' => 'REVOLVE GROUP INC'],
[
'ticker' => 'RVMD','stock_name' => 'REVOLUTION MEDICINES INC'],
[
'ticker' => 'RVNC','stock_name' => 'REVANCE THERAPEUTICS INC'],
[
'ticker' => 'RVNU','stock_name' => 'XTRACKERS MUNICIPAL INFRASTR'],
[
'ticker' => 'RVP','stock_name' => 'RETRACTABLE TECHNOLOGIES INC'],
[
'ticker' => 'RVPH','stock_name' => 'REVIVA PHARMACEUTICALS HOLDI'],
[
'ticker' => 'RVSB','stock_name' => 'RIVERVIEW BANCORP INC'],
[
'ticker' => 'RVT','stock_name' => 'ROYCE VALUE TRUST'],
[
'ticker' => 'RWAY','stock_name' => 'RUNWAY GROWTH FINANCE CORP'],
[
'ticker' => 'RWGV','stock_name' => 'DIREXION RUSSELL G/V'],
[
'ticker' => 'RWJ','stock_name' => 'INVESCO S&P SMALLCAP 600'],
[
'ticker' => 'RWK','stock_name' => 'INVESCO S&P MIDCAP 400 REV'],
[
'ticker' => 'RWL','stock_name' => 'INVESCO S&P 500 REVENUE ETF'],
[
'ticker' => 'RWLK','stock_name' => 'REWALK ROBOTICS LTD'],
[
'ticker' => 'RWM','stock_name' => 'PROSHARES SHORT RUSSELL2000'],
[
'ticker' => 'RWO','stock_name' => 'SPDR DJ GLOBAL REAL ESTATE E'],
[
'ticker' => 'RWR','stock_name' => 'SPDR DOW JONES REIT ETF'],
[
'ticker' => 'RWT','stock_name' => 'REDWOOD TRUST INC'],
[
'ticker' => 'RWVG','stock_name' => 'DIREXION RUSSELL V/G'],
[
'ticker' => 'RWX','stock_name' => 'SPDR DR INTERNATIONAL RL EST'],
[
'ticker' => 'RXD','stock_name' => 'PROSHARES ULTRASHORT HEALTH'],
[
'ticker' => 'RXDX','stock_name' => 'PROMETHEUS BIOSCIENCES INC'],
[
'ticker' => 'RXI','stock_name' => 'ISHARES GLOBAL CONSUMER DISC'],
[
'ticker' => 'RXL','stock_name' => 'PROSHARES ULTRA HEALTH CARE'],
[
'ticker' => 'RXRA','stock_name' => 'RXR ACQUISITION CORP- CL A'],
[
'ticker' => 'RXRAU','stock_name' => 'RXR ACQUISITION CORP'],
[
'ticker' => 'RXRX','stock_name' => 'RECURSION PHARMACEUTICALS-A'],
[
'ticker' => 'RXST','stock_name' => 'RXSIGHT INC'],
[
'ticker' => 'RXT','stock_name' => 'RACKSPACE TECHNOLOGY INC'],
[
'ticker' => 'RY','stock_name' => 'ROYAL BANK OF CANADA'],
[
'ticker' => 'RYAAY','stock_name' => 'RYANAIR HOLDINGS PLC-SP ADR'],
[
'ticker' => 'RYAM','stock_name' => 'RAYONIER ADVANCED MATERIALS'],
[
'ticker' => 'RYAN','stock_name' => 'RYAN SPECIALTY GROUP HLDGS-A'],
[
'ticker' => 'RYB','stock_name' => 'RYB EDUCATION INC-ADR'],
[
'ticker' => 'RYE','stock_name' => 'INVESCO S&P 500 EQUAL WEIGHT'],
[
'ticker' => 'RYF','stock_name' => 'INVESCO S&P 500 EQUAL WEIGHT'],
[
'ticker' => 'RYH','stock_name' => 'INVESCO S&P 500 EQUAL WEIGHT'],
[
'ticker' => 'RYI','stock_name' => 'RYERSON HOLDING CORP'],
[
'ticker' => 'RYJ','stock_name' => 'INVESCO RAYMOND JAMES SB-1 E'],
[
'ticker' => 'RYLD','stock_name' => 'GLOBAL X RUSSELL 2000 COV CL'],
[
'ticker' => 'RYN','stock_name' => 'RAYONIER INC'],
[
'ticker' => 'RYT','stock_name' => 'INVESCO S&P 500 EQUAL WEIGHT'],
[
'ticker' => 'RYTM','stock_name' => 'RHYTHM PHARMACEUTICALS INC'],
[
'ticker' => 'RYU','stock_name' => 'INVESCO S&P 500 EQUAL WEIGHT'],
[
'ticker' => 'RZG','stock_name' => 'INVESCO S&P SMALLCAP 600 PUR'],
[
'ticker' => 'RZLT','stock_name' => 'REZOLUTE INC'],
[
'ticker' => 'RZV','stock_name' => 'INVESCO S&P SMALLCAP 600 PUR'],
[
'ticker' => 'S','stock_name' => 'SENTINELONE INC -CLASS A'],
[
'ticker' => 'SA','stock_name' => 'SEABRIDGE GOLD INC'],
[
'ticker' => 'SAA','stock_name' => 'PROSHARES ULTRA SMALLCAP600'],
[
'ticker' => 'SABR','stock_name' => 'SABRE CORP'],
[
'ticker' => 'SABS','stock_name' => 'SAB BIOTHERAPEUTICS INC'],
[
'ticker' => 'SACH','stock_name' => 'SACHEM CAPITAL CORP'],
[
'ticker' => 'SAFE','stock_name' => 'SAFEHOLD INC'],
[
'ticker' => 'SAFM','stock_name' => 'SANDERSON FARMS INC'],
[
'ticker' => 'SAFT','stock_name' => 'SAFETY INSURANCE GROUP INC'],
[
'ticker' => 'SAGE','stock_name' => 'SAGE THERAPEUTICS INC'],
[
'ticker' => 'SAH','stock_name' => 'SONIC AUTOMOTIVE INC-CLASS A'],
[
'ticker' => 'SAIA','stock_name' => 'SAIA INC'],
[
'ticker' => 'SAIC','stock_name' => 'SCIENCE APPLICATIONS INTE'],
[
'ticker' => 'SAIL','stock_name' => 'SAILPOINT TECHNOLOGIES HOLDI'],
[
'ticker' => 'SAL','stock_name' => 'SALISBURY BANCORP INC'],
[
'ticker' => 'SALM','stock_name' => 'SALEM MEDIA GROUP INC'],
[
'ticker' => 'SAM','stock_name' => 'BOSTON BEER COMPANY INC-A'],
[
'ticker' => 'SAMAU','stock_name' => 'SCHULTZE SPECIAL PURPOSE ACQ'],
[
'ticker' => 'SAMG','stock_name' => 'SILVERCREST ASSET MANAGEME-A'],
[
'ticker' => 'SAN','stock_name' => 'BANCO SANTANDER SA-SPON ADR'],
[
'ticker' => 'SANA','stock_name' => 'SANA BIOTECHNOLOGY INC'],
[
'ticker' => 'SANBU','stock_name' => 'SANABY HEALTH ACQUISITION CO'],
[
'ticker' => 'SAND','stock_name' => 'SANDSTORM GOLD LTD'],
[
'ticker' => 'SANM','stock_name' => 'SANMINA CORP'],
[
'ticker' => 'SANW','stock_name' => 'S&W SEED CO'],
[
'ticker' => 'SAP','stock_name' => 'SAP SE-SPONSORED ADR'],
[
'ticker' => 'SAR','stock_name' => 'SARATOGA INVESTMENT CORP'],
[
'ticker' => 'SASR','stock_name' => 'SANDY SPRING BANCORP INC'],
[
'ticker' => 'SATO','stock_name' => 'INVESCO ALERIAN GALAXY CRYPT'],
[
'ticker' => 'SATS','stock_name' => 'ECHOSTAR CORP-A'],
[
'ticker' => 'SAVA','stock_name' => 'CASSAVA SCIENCES INC'],
[
'ticker' => 'SAVE','stock_name' => 'SPIRIT AIRLINES INC'],
[
'ticker' => 'SAVN','stock_name' => 'LIFEGOAL GENERAL CONSERVATIV'],
[
'ticker' => 'SB','stock_name' => 'SAFE BULKERS INC'],
[
'ticker' => 'SBAC','stock_name' => 'SBA COMMUNICATIONS CORP'],
[
'ticker' => 'SBB','stock_name' => 'PROSHARES SHORT SMALLCAP600'],
[
'ticker' => 'SBCF','stock_name' => 'SEACOAST BANKING CORP/FL'],
[
'ticker' => 'SBEA','stock_name' => 'SILVERBOX ENGAGED MERGER C-A'],
[
'ticker' => 'SBEAU','stock_name' => 'SILVERBOX ENGAGED MERGER COR'],
[
'ticker' => 'SBET','stock_name' => 'SHARPLINK GAMING LTD'],
[
'ticker' => 'SBEV','stock_name' => 'SPLASH BEVERAGE GROUP INC'],
[
'ticker' => 'SBFG','stock_name' => 'SB FINANCIAL GROUP INC'],
[
'ticker' => 'SBGI','stock_name' => 'SINCLAIR BROADCAST GROUP -A'],
[
'ticker' => 'SBH','stock_name' => 'SALLY BEAUTY HOLDINGS INC'],
[
'ticker' => 'SBI','stock_name' => 'WESTERN ASSET INTERMEDIATE'],
[
'ticker' => 'SBII','stock_name' => 'SANDBRIDGE X2 CORP-A'],
[
'ticker' => 'SBII=','stock_name' => 'SANDBRIDGE X2 CORP'],
[
'ticker' => 'SBIO','stock_name' => 'ALPS MEDICAL BREAKTHROUGHS'],
[
'ticker' => 'SBLK','stock_name' => 'STAR BULK CARRIERS CORP'],
[
'ticker' => 'SBM','stock_name' => 'PROSHARES SHORT BASIC MAT'],
[
'ticker' => 'SBND','stock_name' => 'COLUMBIA SHORT DURATION BOND'],
[
'ticker' => 'SBNY','stock_name' => 'SIGNATURE BANK'],
[
'ticker' => 'SBOW','stock_name' => 'SILVERBOW RESOURCES INC'],
[
'ticker' => 'SBR','stock_name' => 'SABINE ROYALTY TRUST'],
[
'ticker' => 'SBRA','stock_name' => 'SABRA HEALTH CARE REIT INC'],
[
'ticker' => 'SBS','stock_name' => 'CIA SANEAMENTO BASICO DE-ADR'],
[
'ticker' => 'SBSI','stock_name' => 'SOUTHSIDE BANCSHARES INC'],
[
'ticker' => 'SBSW','stock_name' => 'SIBANYE-STILLWATER LTD-ADR'],
[
'ticker' => 'SBT','stock_name' => 'STERLING BANCORP INC/MI'],
[
'ticker' => 'SBTX','stock_name' => 'SILVERBACK THERAPEUTICS INC'],
[
'ticker' => 'SBUG','stock_name' => 'IPATH SILVER ETN'],
[
'ticker' => 'SBUX','stock_name' => 'STARBUCKS CORP'],
[
'ticker' => 'SC','stock_name' => 'SANTANDER CONSUMER USA HOLDI'],
[
'ticker' => 'SCAQ','stock_name' => 'STRATIM CLOUD ACQUISITION CO'],
[
'ticker' => 'SCAQU','stock_name' => 'STRATIM CLOUD ACQUISITION CO'],
[
'ticker' => 'SCC','stock_name' => 'PROSHARES ULTRASHORT CONS SV'],
[
'ticker' => 'SCCO','stock_name' => 'SOUTHERN COPPER CORP'],
[
'ticker' => 'SCD','stock_name' => 'LMP CAPITAL AND INCOME FUND'],
[
'ticker' => 'SCDL','stock_name' => 'ETRACS 2X DIVID FACTR TR'],
[
'ticker' => 'SCHA','stock_name' => 'SCHWAB US SMALL-CAP ETF'],
[
'ticker' => 'SCHB','stock_name' => 'SCHWAB US BROAD MARKET ETF'],
[
'ticker' => 'SCHC','stock_name' => 'SCHWAB INTL SMALL-CAP EQUITY'],
[
'ticker' => 'SCHD','stock_name' => 'SCHWAB US DVD EQUITY ETF'],
[
'ticker' => 'SCHE','stock_name' => 'SCHWAB EMERGING MARKETS EQUI'],
[
'ticker' => 'SCHF','stock_name' => 'SCHWAB INTL EQUITY ETF'],
[
'ticker' => 'SCHG','stock_name' => 'SCHWAB U.S. LARGE-CAP GROWTH'],
[
'ticker' => 'SCHH','stock_name' => 'SCHWAB US REIT ETF'],
[
'ticker' => 'SCHI','stock_name' => 'SCHWAB 5-10 YEAR CORPORATE B'],
[
'ticker' => 'SCHJ','stock_name' => 'SCHWAB 1-5 YEAR CORPORATE BO'],
[
'ticker' => 'SCHK','stock_name' => 'SCHWAB 1000 INDEX ETF'],
[
'ticker' => 'SCHL','stock_name' => 'SCHOLASTIC CORP'],
[
'ticker' => 'SCHM','stock_name' => 'SCHWAB US MID CAP ETF'],
[
'ticker' => 'SCHN','stock_name' => 'SCHNITZER STEEL INDS INC-A'],
[
'ticker' => 'SCHO','stock_name' => 'SCHWAB SHORT-TERM US TREAS'],
[
'ticker' => 'SCHP','stock_name' => 'SCHWAB U.S. TIPS ETF'],
[
'ticker' => 'SCHQ','stock_name' => 'SCHWAB LONG-TERM US TREASURY'],
[
'ticker' => 'SCHR','stock_name' => 'SCHWAB INTERMEDIATE-TERM US'],
[
'ticker' => 'SCHV','stock_name' => 'SCHWAB US LARGE-CAP VALUE'],
[
'ticker' => 'SCHW','stock_name' => 'SCHWAB (CHARLES) CORP'],
[
'ticker' => 'SCHX','stock_name' => 'SCHWAB US LARGE-CAP ETF'],
[
'ticker' => 'SCHY','stock_name' => 'SCHWAB INTERNATIONAL DVD ETF'],
[
'ticker' => 'SCHZ','stock_name' => 'SCHWAB US AGGREGATE BOND ETF'],
[
'ticker' => 'SCI','stock_name' => 'SERVICE CORP INTERNATIONAL'],
[
'ticker' => 'SCJ','stock_name' => 'ISHARES MSCI JAPAN SMALL-CAP'],
[
'ticker' => 'SCKT','stock_name' => 'SOCKET MOBILE INC'],
[
'ticker' => 'SCL','stock_name' => 'STEPAN CO'],
[
'ticker' => 'SCLE','stock_name' => 'BROADSCALE ACQUISITION -CL A'],
[
'ticker' => 'SCLEU','stock_name' => 'BROADSCALE ACQUISITION CORP'],
[
'ticker' => 'SCM','stock_name' => 'STELLUS CAPITAL INVESTMENT C'],
[
'ticker' => 'SCMAU','stock_name' => 'SEAPORT CALIBRE MATERIALS AC'],
[
'ticker' => 'SCO','stock_name' => 'PROSHARES ULTRASHORT BLOOMBE'],
[
'ticker' => 'SCOA','stock_name' => 'SCION TECH GROWTH I-CLASS A'],
[
'ticker' => 'SCOAU','stock_name' => 'SCION TECH GROWTH I'],
[
'ticker' => 'SCOB','stock_name' => 'SCION TECH GROWTH II-CLASS A'],
[
'ticker' => 'SCOBU','stock_name' => 'SCION TECH GROWTH II'],
[
'ticker' => 'SCOR','stock_name' => 'COMSCORE INC'],
[
'ticker' => 'SCPH','stock_name' => 'SCPHARMACEUTICALS INC'],
[
'ticker' => 'SCPL','stock_name' => 'SCIPLAY CORP-CLASS A'],
[
'ticker' => 'SCPS','stock_name' => 'SCOPUS BIOPHARMA INC'],
[
'ticker' => 'SCRD','stock_name' => 'JANUS HENDERSON SUST CORP BD'],
[
'ticker' => 'SCS','stock_name' => 'STEELCASE INC-CL A'],
[
'ticker' => 'SCSC','stock_name' => 'SCANSOURCE INC'],
[
'ticker' => 'SCU','stock_name' => 'SCULPTOR CAPITAL MANAGEMENT'],
[
'ticker' => 'SCVL','stock_name' => 'SHOE CARNIVAL INC'],
[
'ticker' => 'SCVX','stock_name' => 'SCVX CORP - CLASS A'],
[
'ticker' => 'SCVX=','stock_name' => 'SCVX CORP'],
[
'ticker' => 'SCWX','stock_name' => 'SECUREWORKS CORP - A'],
[
'ticker' => 'SCX','stock_name' => 'STARRETT (L.S.) CO  -CL A'],
[
'ticker' => 'SCYX','stock_name' => 'SCYNEXIS INC'],
[
'ticker' => 'SCZ','stock_name' => 'ISHARES MSCI EAFE SMALL-CAP'],
[
'ticker' => 'SD','stock_name' => 'SANDRIDGE ENERGY INC'],
[
'ticker' => 'SDAC','stock_name' => 'SUSTAINABLE DEVELOPMENT AC-A'],
[
'ticker' => 'SDACU','stock_name' => 'SUSTAINABLE DEVELOPMENT ACQU'],
[
'ticker' => 'SDC','stock_name' => 'SMILEDIRECTCLUB INC'],
[
'ticker' => 'SDCI','stock_name' => 'USCF SUMMERHAVEN DYNAMIC ETF'],
[
'ticker' => 'SDD','stock_name' => 'PROSHARES ULTRASHORT SC600'],
[
'ticker' => 'SDEF','stock_name' => 'SOUND ENHANCED FIXED INCOME'],
[
'ticker' => 'SDEI','stock_name' => 'SOUND EQUITY INCOME ETF'],
[
'ticker' => 'SDEM','stock_name' => 'GLOBAL X MSCI SUPERDIVIDEND'],
[
'ticker' => 'SDG','stock_name' => 'ISHARES SUSTAINABLE MSCI GLB'],
[
'ticker' => 'SDGA','stock_name' => 'IMPACT SHARES SUSTAINABLE DE'],
[
'ticker' => 'SDGR','stock_name' => 'SCHRODINGER INC'],
[
'ticker' => 'SDH','stock_name' => 'GLOBAL INTERNET OF PEOPLE IN'],
[
'ticker' => 'SDHY','stock_name' => 'PGIM SHRT DURAT HI YLD'],
[
'ticker' => 'SDIG','stock_name' => 'STRONGHOLD DIGITAL MINING-A'],
[
'ticker' => 'SDIV','stock_name' => 'GLOBAL X SUPERDIVIDEND ETF'],
[
'ticker' => 'SDOG','stock_name' => 'ALPS SECTOR DIVIDEND DOGS'],
[
'ticker' => 'SDOW','stock_name' => 'PROSHARES ULTPRO SHRT DOW30'],
[
'ticker' => 'SDP','stock_name' => 'PROSHARES ULTSHRT UTILITIES'],
[
'ticker' => 'SDPI','stock_name' => 'SUPERIOR DRILLING PRODUCTS I'],
[
'ticker' => 'SDS','stock_name' => 'PROSHARES ULTRASHORT S&P500'],
[
'ticker' => 'SDVY','stock_name' => 'FIRST TRUST SMID CAP RISING'],
[
'ticker' => 'SDY','stock_name' => 'SPDR S&P DIVIDEND ETF'],
[
'ticker' => 'SE','stock_name' => 'SEA LTD-ADR'],
[
'ticker' => 'SEAC','stock_name' => 'SEACHANGE INTERNATIONAL INC'],
[
'ticker' => 'SEAH','stock_name' => 'SPORTS ENTERTAINMENT ACQUI-A'],
[
'ticker' => 'SEAH=','stock_name' => 'SPORTS ENTERTAINMENT ACQUISI'],
[
'ticker' => 'SEAS','stock_name' => 'SEAWORLD ENTERTAINMENT INC'],
[
'ticker' => 'SEAT','stock_name' => 'VIVID SEATS INC - CLASS A'],
[
'ticker' => 'SEB','stock_name' => 'SEABOARD CORP'],
[
'ticker' => 'SECO','stock_name' => 'SECOO HOLDING LTD - ADR'],
[
'ticker' => 'SECT','stock_name' => 'MAIN SECTOR ROTATION ETF'],
[
'ticker' => 'SEDA=','stock_name' => 'SDCL EDGE ACQUISITION CORP'],
[
'ticker' => 'SEDG','stock_name' => 'SOLAREDGE TECHNOLOGIES INC'],
[
'ticker' => 'SEE','stock_name' => 'SEALED AIR CORP'],
[
'ticker' => 'SEED','stock_name' => 'ORIGIN AGRITECH LTD'],
[
'ticker' => 'SEEL','stock_name' => 'SEELOS THERAPEUTICS INC'],
[
'ticker' => 'SEER','stock_name' => 'SEER INC'],
[
'ticker' => 'SEF','stock_name' => 'PROSHARES SHORT FINANCIALS'],
[
'ticker' => 'SEIC','stock_name' => 'SEI INVESTMENTS COMPANY'],
[
'ticker' => 'SEIX','stock_name' => 'VIRTUS SEIX SENIOR LOAN ETF'],
[
'ticker' => 'SELB','stock_name' => 'SELECTA BIOSCIENCES INC'],
[
'ticker' => 'SELF','stock_name' => 'GLOBAL SELF STORAGE INC'],
[
'ticker' => 'SEM','stock_name' => 'SELECT MEDICAL HOLDINGS CORP'],
[
'ticker' => 'SEMR','stock_name' => 'SEMRUSH HOLDINGS INC-A'],
[
'ticker' => 'SENEA','stock_name' => 'SENECA FOODS CORP - CL A'],
[
'ticker' => 'SENEB','stock_name' => 'SENECA FOODS CORP - CL B'],
[
'ticker' => 'SENS','stock_name' => 'SENSEONICS HOLDINGS INC'],
[
'ticker' => 'SENT','stock_name' => 'ADVISORSHARES ALPHA DNA EQUI'],
[
'ticker' => 'SEPZ','stock_name' => 'TRUESHARES STRUC OUT SEP ETF'],
[
'ticker' => 'SERA','stock_name' => 'SERA PROGNOSTICS INC-A'],
[
'ticker' => 'SESN','stock_name' => 'SESEN BIO INC'],
[
'ticker' => 'SEVN','stock_name' => 'SEVEN HILLS REALTY TRUST'],
[
'ticker' => 'SF','stock_name' => 'STIFEL FINANCIAL CORP'],
[
'ticker' => 'SFBC','stock_name' => 'SOUND FINANCIAL BANCORP INC'],
[
'ticker' => 'SFBS','stock_name' => 'SERVISFIRST BANCSHARES INC'],
[
'ticker' => 'SFE','stock_name' => 'SAFEGUARD SCIENTIFICS INC'],
[
'ticker' => 'SFET','stock_name' => 'SAFE-T GROUP LTD-ADR'],
[
'ticker' => 'SFIG','stock_name' => 'WISDOMTREE US SHORT TERM COR'],
[
'ticker' => 'SFIX','stock_name' => 'STITCH FIX INC-CLASS A'],
[
'ticker' => 'SFL','stock_name' => 'SFL CORP LTD'],
[
'ticker' => 'SFM','stock_name' => 'SPROUTS FARMERS MARKET INC'],
[
'ticker' => 'SFNC','stock_name' => 'SIMMONS FIRST NATL CORP-CL A'],
[
'ticker' => 'SFST','stock_name' => 'SOUTHERN FIRST BANCSHARES'],
[
'ticker' => 'SFT','stock_name' => 'SHIFT TECHNOLOGIES INC'],
[
'ticker' => 'SFUN','stock_name' => 'FANG HOLDINGS LTD - ADR'],
[
'ticker' => 'SFY','stock_name' => 'SOFI SELECT 500 ETF'],
[
'ticker' => 'SFYF','stock_name' => 'SOFI SOCIAL 50 ETF'],
[
'ticker' => 'SFYX','stock_name' => 'SOFI NEXT 500 ETF'],
[
'ticker' => 'SGA','stock_name' => 'SAGA COMMUNICATIONS INC-CL A'],
[
'ticker' => 'SGBX','stock_name' => 'SG BLOCKS INC'],
[
'ticker' => 'SGC','stock_name' => 'SUPERIOR GROUP OF COS INC'],
[
'ticker' => 'SGDJ','stock_name' => 'SPROTT JR. GOLD MINERS ETF'],
[
'ticker' => 'SGDM','stock_name' => 'SPROTT GOLD MINERS ETF'],
[
'ticker' => 'SGEN','stock_name' => 'SEAGEN INC'],
[
'ticker' => 'SGFY','stock_name' => 'SIGNIFY HEALTH INC -CLASS A'],
[
'ticker' => 'SGG','stock_name' => 'IPATH SERIES B BBG SUGAR SUB'],
[
'ticker' => 'SGH','stock_name' => 'SMART GLOBAL HOLDINGS INC'],
[
'ticker' => 'SGHT','stock_name' => 'SIGHT SCIENCES INC'],
[
'ticker' => 'SGLB','stock_name' => 'SIGMA LABS INC'],
[
'ticker' => 'SGMA','stock_name' => 'SIGMATRON INTERNATIONAL INC'],
[
'ticker' => 'SGML','stock_name' => 'SIGMA LITHIUM CORP'],
[
'ticker' => 'SGMO','stock_name' => 'SANGAMO THERAPEUTICS INC'],
[
'ticker' => 'SGMS','stock_name' => 'SCIENTIFIC GAMES CORP'],
[
'ticker' => 'SGOC','stock_name' => 'SGOCO GROUP LTD'],
[
'ticker' => 'SGOL','stock_name' => 'ABERDEEN STNDRD PHYSIC GLD'],
[
'ticker' => 'SGOV','stock_name' => 'ISHARES 0-3 MONTH TREASURY B'],
[
'ticker' => 'SGRP','stock_name' => 'SPAR GROUP INC'],
[
'ticker' => 'SGRY','stock_name' => 'SURGERY PARTNERS INC'],
[
'ticker' => 'SGTX','stock_name' => 'SIGILON THERAPEUTICS INC'],
[
'ticker' => 'SGU','stock_name' => 'STAR GROUP LP'],
[
'ticker' => 'SH','stock_name' => 'PROSHARES SHORT S&P500'],
[
'ticker' => 'SHAC','stock_name' => 'SCP & CO HEALTHCARE ACQUIS-A'],
[
'ticker' => 'SHACU','stock_name' => 'SCP & CO HEALTHCARE ACQUISIT'],
[
'ticker' => 'SHAG','stock_name' => 'WSDMTREE YLD EN US ST AGG'],
[
'ticker' => 'SHAK','stock_name' => 'SHAKE SHACK INC - CLASS A'],
[
'ticker' => 'SHBI','stock_name' => 'SHORE BANCSHARES INC'],
[
'ticker' => 'SHC','stock_name' => 'SOTERA HEALTH CO'],
[
'ticker' => 'SHCAU','stock_name' => 'SPINDLETOP HEALTH ACQUISITIO'],
[
'ticker' => 'SHCR','stock_name' => 'SHARECARE INC'],
[
'ticker' => 'SHE','stock_name' => 'SPDR GENDER DIVERSITY ETF'],
[
'ticker' => 'SHEN','stock_name' => 'SHENANDOAH TELECOMMUNICATION'],
[
'ticker' => 'SHFT','stock_name' => 'ICLIMA DIST RENEWABLE ENERGY'],
[
'ticker' => 'SHG','stock_name' => 'SHINHAN FINANCIAL GROUP-ADR'],
[
'ticker' => 'SHI','stock_name' => 'SINOPEC SHANGHAI-SPONS ADR'],
[
'ticker' => 'SHIP','stock_name' => 'SEANERGY MARITIME HOLDINGS'],
[
'ticker' => 'SHLS','stock_name' => 'SHOALS TECHNOLOGIES GROUP -A'],
[
'ticker' => 'SHLX','stock_name' => 'SHELL MIDSTREAM PARTNERS LP'],
[
'ticker' => 'SHM','stock_name' => 'SPDR NUVEEN BLOOMBERG SHORT'],
[
'ticker' => 'SHO','stock_name' => 'SUNSTONE HOTEL INVESTORS INC'],
[
'ticker' => 'SHOO','stock_name' => 'STEVEN MADDEN LTD'],
[
'ticker' => 'SHOP','stock_name' => 'SHOPIFY INC - CLASS A'],
[
'ticker' => 'SHPW','stock_name' => 'SHAPEWAYS HOLDINGS INC'],
[
'ticker' => 'SHQA','stock_name' => 'SHELTER ACQUISITION CORP I-A'],
[
'ticker' => 'SHQAU','stock_name' => 'SHELTER ACQUISITION CORP I'],
[
'ticker' => 'SHUS','stock_name' => 'SYNTAX STRAT US TOT MKT HDG'],
[
'ticker' => 'SHV','stock_name' => 'ISHARES SHORT TREASURY BOND'],
[
'ticker' => 'SHW','stock_name' => 'SHERWIN-WILLIAMS CO/THE'],
[
'ticker' => 'SHY','stock_name' => 'ISHARES 1-3 YEAR TREASURY BO'],
[
'ticker' => 'SHYD','stock_name' => 'VANECK SH HI YLD MUNI'],
[
'ticker' => 'SHYF','stock_name' => 'SHYFT GROUP INC/THE'],
[
'ticker' => 'SHYG','stock_name' => 'ISHARES 0-5 YR HY CORP BOND'],
[
'ticker' => 'SHYL','stock_name' => 'XTRACKERS SHRT DUR HIGH YIEL'],
[
'ticker' => 'SI','stock_name' => 'SILVERGATE CAPITAL CORP-CL A'],
[
'ticker' => 'SIBN','stock_name' => 'SI-BONE INC'],
[
'ticker' => 'SID','stock_name' => 'CIA SIDERURGICA NACL-SP ADR'],
[
'ticker' => 'SIEB','stock_name' => 'SIEBERT FINANCIAL CORP'],
[
'ticker' => 'SIEN','stock_name' => 'SIENTRA INC'],
[
'ticker' => 'SIERU','stock_name' => 'SIERRA LAKE ACQUISITION CORP'],
[
'ticker' => 'SIF','stock_name' => 'SIFCO INDUSTRIES'],
[
'ticker' => 'SIFI','stock_name' => 'HARBOR SCIENTIFIC ALPHA INCO'],
[
'ticker' => 'SIFY','stock_name' => 'SIFY TECHNOLOGIES-SPON ADR'],
[
'ticker' => 'SIG','stock_name' => 'SIGNET JEWELERS LTD'],
[
'ticker' => 'SIGA','stock_name' => 'SIGA TECHNOLOGIES INC'],
[
'ticker' => 'SIGI','stock_name' => 'SELECTIVE INSURANCE GROUP'],
[
'ticker' => 'SIHY','stock_name' => 'HARBOR SCIENTIFIC ALPHA HIGH'],
[
'ticker' => 'SII','stock_name' => 'SPROTT INC'],
[
'ticker' => 'SIJ','stock_name' => 'PROSHARES ULTSHRT INDUSTRIAL'],
[
'ticker' => 'SIL','stock_name' => 'GLOBAL X SILVER MINERS ETF'],
[
'ticker' => 'SILC','stock_name' => 'SILICOM LTD'],
[
'ticker' => 'SILJ','stock_name' => 'ETFMG PRIME JUNIOR SILVER MI'],
[
'ticker' => 'SILK','stock_name' => 'SILK ROAD MEDICAL INC'],
[
'ticker' => 'SILV','stock_name' => 'SILVERCREST METALS INC'],
[
'ticker' => 'SILX','stock_name' => 'ETFMG PRIME 2X DAILY JUNIOR'],
[
'ticker' => 'SIM','stock_name' => 'GRUPO SIMEC SAB-SPON ADR'],
[
'ticker' => 'SIMO','stock_name' => 'SILICON MOTION TECHNOL-ADR'],
[
'ticker' => 'SIMS','stock_name' => 'SPDR S&P KENSHO INTELLIGENT'],
[
'ticker' => 'SINO','stock_name' => 'SINO-GLOBAL SHIPPING AMERICA'],
[
'ticker' => 'SINT','stock_name' => 'SINTX TECHNOLOGIES INC'],
[
'ticker' => 'SINV','stock_name' => 'ETFMG PRIME 2X DAILY INVERSE'],
[
'ticker' => 'SIOX','stock_name' => 'SIO GENE THERAPIES INC'],
[
'ticker' => 'SIRI','stock_name' => 'SIRIUS XM HOLDINGS INC'],
[
'ticker' => 'SISI','stock_name' => 'SHINECO INC'],
[
'ticker' => 'SITC','stock_name' => 'SITE CENTERS CORP'],
[
'ticker' => 'SITE','stock_name' => 'SITEONE LANDSCAPE SUPPLY INC'],
[
'ticker' => 'SITM','stock_name' => 'SITIME CORP'],
[
'ticker' => 'SIVB','stock_name' => 'SVB FINANCIAL GROUP'],
[
'ticker' => 'SIVR','stock_name' => 'ABERDEEN STANDARD PHYSICAL S'],
[
'ticker' => 'SIX','stock_name' => 'SIX FLAGS ENTERTAINMENT CORP'],
[
'ticker' => 'SIXA','stock_name' => '6 MERIDIAN MEGA CAP EQUITY'],
[
'ticker' => 'SIXH','stock_name' => '6 MERIDIAN HEDGED EQTY-INDEX'],
[
'ticker' => 'SIXL','stock_name' => '6 MERIDIAN LOW BETA EQUITY'],
[
'ticker' => 'SIXO','stock_name' => 'ALLIANZIM US LARGE CAP 6 MON'],
[
'ticker' => 'SIXS','stock_name' => '6 MERIDIAN SMALL CAP EQUITY'],
[
'ticker' => 'SIZE','stock_name' => 'ISHARES MSCI USA SIZE FACTOR'],
[
'ticker' => 'SJ','stock_name' => 'SCIENJOY HOLDING CORP'],
[
'ticker' => 'SJB','stock_name' => 'PROSHARES SHORT HIGH YIELD'],
[
'ticker' => 'SJI','stock_name' => 'SOUTH JERSEY INDUSTRIES'],
[
'ticker' => 'SJM','stock_name' => 'JM SMUCKER CO/THE'],
[
'ticker' => 'SJNK','stock_name' => 'SPDR BLOOMBERG SHORT TERM HI'],
[
'ticker' => 'SJR','stock_name' => 'SHAW COMMUNICATIONS INC-B'],
[
'ticker' => 'SJT','stock_name' => 'SAN JUAN BASIN ROYALTY TR'],
[
'ticker' => 'SJW','stock_name' => 'SJW GROUP'],
[
'ticker' => 'SKE','stock_name' => 'SKEENA RESOURCES LTD'],
[
'ticker' => 'SKF','stock_name' => 'PROSHARES ULTSHRT FINANCIALS'],
[
'ticker' => 'SKIL','stock_name' => 'SKILLSOFT CORP'],
[
'ticker' => 'SKIN','stock_name' => 'BEAUTY HEALTH CO/THE'],
[
'ticker' => 'SKLZ','stock_name' => 'SKILLZ INC'],
[
'ticker' => 'SKM','stock_name' => 'SK TELECOM CO LTD-SPON ADR'],
[
'ticker' => 'SKOR','stock_name' => 'FLEXSHARES CREDIT-SCORED US'],
[
'ticker' => 'SKT','stock_name' => 'TANGER FACTORY OUTLET CENTER'],
[
'ticker' => 'SKX','stock_name' => 'SKECHERS USA INC-CL A'],
[
'ticker' => 'SKY','stock_name' => 'SKYLINE CHAMPION CORP'],
[
'ticker' => 'SKYA','stock_name' => 'SKYDECK ACQUISITION CORP-A'],
[
'ticker' => 'SKYAU','stock_name' => 'SKYDECK ACQUISITION CORP'],
[
'ticker' => 'SKYT','stock_name' => 'SKYWATER TECHNOLOGY INC'],
[
'ticker' => 'SKYU','stock_name' => 'PROSHARES ULTRA CLOUD COMP'],
[
'ticker' => 'SKYW','stock_name' => 'SKYWEST INC'],
[
'ticker' => 'SKYY','stock_name' => 'FIRST TRUST CLOUD COMPUTING'],
[
'ticker' => 'SLAB','stock_name' => 'SILICON LABORATORIES INC'],
[
'ticker' => 'SLAC','stock_name' => 'SOCIAL LEVERAGE ACQUISITIO-A'],
[
'ticker' => 'SLAC=','stock_name' => 'SOCIAL LEVERAGE ACQUISITION'],
[
'ticker' => 'SLAM','stock_name' => 'SLAM CORP-A'],
[
'ticker' => 'SLAMU','stock_name' => 'SLAM CORP'],
[
'ticker' => 'SLB','stock_name' => 'SCHLUMBERGER LTD'],
[
'ticker' => 'SLCA','stock_name' => 'US SILICA HOLDINGS INC'],
[
'ticker' => 'SLCR','stock_name' => 'SILVER CREST ACQUISITION C-A'],
[
'ticker' => 'SLCRU','stock_name' => 'SILVER CREST ACQUISITION COR'],
[
'ticker' => 'SLDB','stock_name' => 'SOLID BIOSCIENCES INC'],
[
'ticker' => 'SLF','stock_name' => 'SUN LIFE FINANCIAL INC'],
[
'ticker' => 'SLG','stock_name' => 'SL GREEN REALTY CORP'],
[
'ticker' => 'SLGC','stock_name' => 'SOMALOGIC INC'],
[
'ticker' => 'SLGG','stock_name' => 'SUPER LEAGUE GAMING INC'],
[
'ticker' => 'SLGL','stock_name' => 'SOL-GEL TECHNOLOGIES LTD'],
[
'ticker' => 'SLGN','stock_name' => 'SILGAN HOLDINGS INC'],
[
'ticker' => 'SLHG','stock_name' => 'SKYLIGHT HEALTH GROUP INC'],
[
'ticker' => 'SLI','stock_name' => 'STANDARD LITHIUM LTD'],
[
'ticker' => 'SLM','stock_name' => 'SLM CORP'],
[
'ticker' => 'SLN','stock_name' => 'SILENCE THERAPEUTICS PLC'],
[
'ticker' => 'SLNG','stock_name' => 'STABILIS SOLUTIONS INC'],
[
'ticker' => 'SLNH','stock_name' => 'MECHANICAL TECHNOLOGY INC'],
[
'ticker' => 'SLNO','stock_name' => 'SOLENO THERAPEUTICS INC'],
[
'ticker' => 'SLP','stock_name' => 'SIMULATIONS PLUS INC'],
[
'ticker' => 'SLQD','stock_name' => 'ISHARES 0-5 YR INV GRD CORP'],
[
'ticker' => 'SLQT','stock_name' => 'SELECTQUOTE INC'],
[
'ticker' => 'SLRC','stock_name' => 'SLR INVESTMENT CORP'],
[
'ticker' => 'SLRX','stock_name' => 'SALARIUS PHARMACEUTICALS INC'],
[
'ticker' => 'SLS','stock_name' => 'SELLAS LIFE SCIENCES GROUP I'],
[
'ticker' => 'SLT','stock_name' => 'PACER SALT HIGH TRUBETA US'],
[
'ticker' => 'SLV','stock_name' => 'ISHARES SILVER TRUST'],
[
'ticker' => 'SLVM','stock_name' => 'SYLVAMO CORP'],
[
'ticker' => 'SLVO','stock_name' => 'X-LINKS SLVR SHRS COVRD CALL'],
[
'ticker' => 'SLVP','stock_name' => 'ISHARES MSCI GLOBAL SILVER A'],
[
'ticker' => 'SLVR','stock_name' => 'SILVERSPAC INC-CL A'],
[
'ticker' => 'SLVRU','stock_name' => 'SILVERSPAC INC'],
[
'ticker' => 'SLX','stock_name' => 'VANECK STEEL ETF'],
[
'ticker' => 'SLY','stock_name' => 'SPDR S&P 600 SMALL CAP ETF'],
[
'ticker' => 'SLYG','stock_name' => 'SPDR S&P 600 SMALL CAP GROWT'],
[
'ticker' => 'SLYV','stock_name' => 'SPDR S&P 600 SMALL CAP VALUE'],
[
'ticker' => 'SM','stock_name' => 'SM ENERGY CO'],
[
'ticker' => 'SMAPU','stock_name' => 'SPORTSMAP TECH ACQUISITION C'],
[
'ticker' => 'SMAR','stock_name' => 'SMARTSHEET INC-CLASS A'],
[
'ticker' => 'SMB','stock_name' => 'VANECK SHORT MUNI ETF'],
[
'ticker' => 'SMBC','stock_name' => 'SOUTHERN MISSOURI BANCORP'],
[
'ticker' => 'SMBK','stock_name' => 'SMARTFINANCIAL INC'],
[
'ticker' => 'SMCI','stock_name' => 'SUPER MICRO COMPUTER INC'],
[
'ticker' => 'SMCP','stock_name' => 'ALPHAMARK ACT MANAGED SMALL'],
[
'ticker' => 'SMDD','stock_name' => 'PROSHARES ULTPRO SHRT MC400'],
[
'ticker' => 'SMDV','stock_name' => 'PROSHRS RSL 2000 DVD GRW ETF'],
[
'ticker' => 'SMDY','stock_name' => 'SYNTAX STRATIFIED MIDCAP ETF'],
[
'ticker' => 'SMED','stock_name' => 'SHARPS COMPLIANCE CORP'],
[
'ticker' => 'SMFG','stock_name' => 'SUMITOMO MITSUI-SPONS ADR'],
[
'ticker' => 'SMFR','stock_name' => 'SEMA4 HOLDINGS CORP'],
[
'ticker' => 'SMG','stock_name' => 'SCOTTS MIRACLE-GRO CO'],
[
'ticker' => 'SMH','stock_name' => 'VANECK SEMICONDUCTOR ETF'],
[
'ticker' => 'SMHB','stock_name' => 'ETRACS MON PAY 2X LEV US -B'],
[
'ticker' => 'SMHI','stock_name' => 'SEACOR MARINE HOLDINGS INC'],
[
'ticker' => 'SMI','stock_name' => 'VANECK HIP SUSTAINABLE MUNI'],
[
'ticker' => 'SMID','stock_name' => 'SMITH-MIDLAND CORP'],
[
'ticker' => 'SMIG','stock_name' => 'AAM B&G SM/MID CAP INC GRWTH'],
[
'ticker' => 'SMIH','stock_name' => 'SUMMIT HEALTHCARE ACQ-A'],
[
'ticker' => 'SMIHU','stock_name' => 'SUMMIT HEALTHCARE ACQUISITIO'],
[
'ticker' => 'SMIN','stock_name' => 'ISHARES MSCI INDIA SMALL-CAP'],
[
'ticker' => 'SMIT','stock_name' => 'SCHMITT INDUSTRIES INC'],
[
'ticker' => 'SMLE','stock_name' => 'XTRACKERS S&P SMALLCAP 600'],
[
'ticker' => 'SMLF','stock_name' => 'ISHARES MSCI USA SMALL-CAP M'],
[
'ticker' => 'SMLP','stock_name' => 'SUMMIT MIDSTREAM PARTNERS LP'],
[
'ticker' => 'SMLR','stock_name' => 'SEMLER SCIENTIFIC INC'],
[
'ticker' => 'SMLV','stock_name' => 'SPDR SSGA US SMALL CAP LOW'],
[
'ticker' => 'SMM','stock_name' => 'SALIENT MIDSTREAM & MLP FUND'],
[
'ticker' => 'SMMD','stock_name' => 'ISHARES RUSSELL 2500 ETF'],
[
'ticker' => 'SMMF','stock_name' => 'SUMMIT FINANCIAL GROUP INC'],
[
'ticker' => 'SMMT','stock_name' => 'SUMMIT THERAPEUTICS INC'],
[
'ticker' => 'SMMU','stock_name' => 'PIMCO SHORT TERM MUNICIPAL B'],
[
'ticker' => 'SMMV','stock_name' => 'ISHARES MSCI USA SMALL-CAP M'],
[
'ticker' => 'SMN','stock_name' => 'PROSHARES ULTSHRT BASIC MAT'],
[
'ticker' => 'SMOG','stock_name' => 'VANECK LOW CARBON ENERGY ETF'],
[
'ticker' => 'SMP','stock_name' => 'STANDARD MOTOR PRODS'],
[
'ticker' => 'SMPL','stock_name' => 'SIMPLY GOOD FOODS CO/THE'],
[
'ticker' => 'SMRT','stock_name' => 'SMARTRENT INC'],
[
'ticker' => 'SMSI','stock_name' => 'SMITH MICRO SOFTWARE INC'],
[
'ticker' => 'SMTC','stock_name' => 'SEMTECH CORP'],
[
'ticker' => 'SMTI','stock_name' => 'SANARA MEDTECH INC'],
[
'ticker' => 'SMTS','stock_name' => 'SIERRA METALS INC'],
[
'ticker' => 'SMWB','stock_name' => 'SIMILARWEB LTD'],
[
'ticker' => 'SNA','stock_name' => 'SNAP-ON INC'],
[
'ticker' => 'SNAP','stock_name' => 'SNAP INC - A'],
[
'ticker' => 'SNAX','stock_name' => 'STRYVE FOODS INC-CLASS A'],
[
'ticker' => 'SNBR','stock_name' => 'SLEEP NUMBER CORP'],
[
'ticker' => 'SNCE','stock_name' => 'SCIENCE 37 HOLDINGS INC'],
[
'ticker' => 'SNCR','stock_name' => 'SYNCHRONOSS TECHNOLOGIES INC'],
[
'ticker' => 'SNCY','stock_name' => 'SUN COUNTRY AIRLINES HOLDING'],
[
'ticker' => 'SND','stock_name' => 'SMART SAND INC'],
[
'ticker' => 'SNDL','stock_name' => 'SUNDIAL GROWERS INC'],
[
'ticker' => 'SNDR','stock_name' => 'SCHNEIDER NATIONAL INC-CL B'],
[
'ticker' => 'SNDX','stock_name' => 'SYNDAX PHARMACEUTICALS INC'],
[
'ticker' => 'SNES','stock_name' => 'SENESTECH INC'],
[
'ticker' => 'SNEX','stock_name' => 'STONEX GROUP INC'],
[
'ticker' => 'SNFCA','stock_name' => 'SECURITY NATL FINL CORP-CL A'],
[
'ticker' => 'SNGX','stock_name' => 'SOLIGENIX INC'],
[
'ticker' => 'SNII','stock_name' => 'SUPERNOVA PARTNERS ACQUISI-A'],
[
'ticker' => 'SNII=','stock_name' => 'SUPERNOVA PARTNERS ACQUISITI'],
[
'ticker' => 'SNLN','stock_name' => 'HIGHLAND/IBOXX SENIOR LOAN E'],
[
'ticker' => 'SNMP','stock_name' => 'EVOLVE TRANSITION INFRASTRUC'],
[
'ticker' => 'SNN','stock_name' => 'SMITH & NEPHEW PLC -SPON ADR'],
[
'ticker' => 'SNOA','stock_name' => 'SONOMA PHARMACEUTICALS INC'],
[
'ticker' => 'SNOW','stock_name' => 'SNOWFLAKE INC-CLASS A'],
[
'ticker' => 'SNP','stock_name' => 'CHINA PETROLEUM & CHEM-ADR'],
[
'ticker' => 'SNPE','stock_name' => 'XTRACKERS S&P 500 ESG ETF'],
[
'ticker' => 'SNPO','stock_name' => 'SNAP ONE HOLDINGS CORP'],
[
'ticker' => 'SNPS','stock_name' => 'SYNOPSYS INC'],
[
'ticker' => 'SNPX','stock_name' => 'SYNAPTOGENIX INC'],
[
'ticker' => 'SNRH','stock_name' => 'SENIOR CONNECT ACQUISITION-A'],
[
'ticker' => 'SNRHU','stock_name' => 'SENIOR CONNECT ACQUISITION C'],
[
'ticker' => 'SNSE','stock_name' => 'SENSEI BIOTHERAPEUTICS INC'],
[
'ticker' => 'SNSR','stock_name' => 'GLOBAL X INTERNET OF THINGS'],
[
'ticker' => 'SNT','stock_name' => 'SENSTAR TECHNOLOGIES LTD'],
[
'ticker' => 'SNTG','stock_name' => 'SENTAGE HOLDINGS INC'],
[
'ticker' => 'SNUG','stock_name' => 'MERLYN AI TACTICAL GRW & INC'],
[
'ticker' => 'SNV','stock_name' => 'SYNOVUS FINANCIAL CORP'],
[
'ticker' => 'SNX','stock_name' => 'TD SYNNEX CORP'],
[
'ticker' => 'SNY','stock_name' => 'SANOFI-ADR'],
[
'ticker' => 'SO','stock_name' => 'SOUTHERN CO/THE'],
[
'ticker' => 'SOCL','stock_name' => 'GLOBAL X SOCIAL MEDIA ETF'],
[
'ticker' => 'SOFI','stock_name' => 'SOFI TECHNOLOGIES INC'],
[
'ticker' => 'SOGU','stock_name' => 'THE SHORT DE-SPAC ETF'],
[
'ticker' => 'SOHO','stock_name' => 'SOTHERLY HOTELS INC'],
[
'ticker' => 'SOHU','stock_name' => 'SOHU.COM LTD-ADR'],
[
'ticker' => 'SOI','stock_name' => 'SOLARIS OILFIELD INFRAST-A'],
[
'ticker' => 'SOL','stock_name' => 'RENESOLA LTD-ADR'],
[
'ticker' => 'SOLO','stock_name' => 'ELECTRAMECCANICA VEHICLES CO'],
[
'ticker' => 'SOLY','stock_name' => 'SOLITON INC'],
[
'ticker' => 'SON','stock_name' => 'SONOCO PRODUCTS CO'],
[
'ticker' => 'SONM','stock_name' => 'SONIM TECHNOLOGIES INC'],
[
'ticker' => 'SONN','stock_name' => 'SONNET BIOTHERAPEUTICS HOLDI'],
[
'ticker' => 'SONO','stock_name' => 'SONOS INC'],
[
'ticker' => 'SONX','stock_name' => 'SONENDO INC'],
[
'ticker' => 'SONY','stock_name' => 'SONY GROUP CORP - SP ADR'],
[
'ticker' => 'SOPA','stock_name' => 'SOCIETY PASS INC'],
[
'ticker' => 'SOPH','stock_name' => 'SOPHIA GENETICS SA'],
[
'ticker' => 'SOR','stock_name' => 'SOURCE CAPITAL INC'],
[
'ticker' => 'SOS','stock_name' => 'SOS LTD'],
[
'ticker' => 'SOTK','stock_name' => 'SONO-TEK CORP'],
[
'ticker' => 'SOVO','stock_name' => 'SOVOS BRANDS INC'],
[
'ticker' => 'SOXL','stock_name' => 'DIREXION DAILY SEMI BULL 3X'],
[
'ticker' => 'SOXQ','stock_name' => 'INVESCO PHLX SEMICONDUCTOR'],
[
'ticker' => 'SOXS','stock_name' => 'DIREXION DAILY SEMI BEAR 3X'],
[
'ticker' => 'SOXX','stock_name' => 'ISHARES SEMICONDUCTOR ETF'],
[
'ticker' => 'SOYB','stock_name' => 'TEUCRIUM SOYBEAN FUND'],
[
'ticker' => 'SP','stock_name' => 'SP PLUS CORP'],
[
'ticker' => 'SPAB','stock_name' => 'SPDR PORTFOLIO AGGREGATE BON'],
[
'ticker' => 'SPAK','stock_name' => 'DEFIANCE NEXTGEN SPAC DERIVE'],
[
'ticker' => 'SPAQ','stock_name' => 'SPARTAN ACQUISITION III-A'],
[
'ticker' => 'SPAQ=','stock_name' => 'SPARTAN ACQUISITION CORP III'],
[
'ticker' => 'SPAX','stock_name' => 'ROBINSON ALT YLD PREMERG SP'],
[
'ticker' => 'SPB','stock_name' => 'SPECTRUM BRANDS HOLDINGS INC'],
[
'ticker' => 'SPBC','stock_name' => 'SIMPLIFY US EQ PLUS GBTC ETF'],
[
'ticker' => 'SPBO','stock_name' => 'SPDR PORTFOLIO CORPORATE BON'],
[
'ticker' => 'SPC','stock_name' => 'CROSSINGBRIDGE PRE-MERGER SP'],
[
'ticker' => 'SPCB','stock_name' => 'SUPERCOM LTD'],
[
'ticker' => 'SPCE','stock_name' => 'VIRGIN GALACTIC HOLDINGS INC'],
[
'ticker' => 'SPCX','stock_name' => 'SPAC & NEW ISSUE ETF'],
[
'ticker' => 'SPD','stock_name' => 'SIMPLIFY US EQUITY PLUS DOWN'],
[
'ticker' => 'SPDN','stock_name' => 'DIREXION DLY S&P 500 BEAR 1X'],
[
'ticker' => 'SPDV','stock_name' => 'AAM S&P 500 HIGH DIV VAL ETF'],
[
'ticker' => 'SPDW','stock_name' => 'SPDR PORTFOLIO DEVELOPED WOR'],
[
'ticker' => 'SPE','stock_name' => 'SPECIAL OPPORTUNITIES FUND'],
[
'ticker' => 'SPEM','stock_name' => 'SPDR PORTFOLIO EMERGING MARK'],
[
'ticker' => 'SPEU','stock_name' => 'SPDR PORTFOLIO EUROPE ETF'],
[
'ticker' => 'SPFF','stock_name' => 'GLOBAL X SUPERINCOME PREFER'],
[
'ticker' => 'SPFI','stock_name' => 'SOUTH PLAINS FINANCIAL INC'],
[
'ticker' => 'SPG','stock_name' => 'SIMON PROPERTY GROUP INC'],
[
'ticker' => 'SPGI','stock_name' => 'S&P GLOBAL INC'],
[
'ticker' => 'SPGM','stock_name' => 'SPDR PORTFOLIO MSCI GLOBAL S'],
[
'ticker' => 'SPGP','stock_name' => 'INVESCO S&P 500 GARP ETF'],
[
'ticker' => 'SPGS','stock_name' => 'SIMON PROPERTY GROUP ACQUI-A'],
[
'ticker' => 'SPGS=','stock_name' => 'SIMON PROPERTY GROUP ACQUISI'],
[
'ticker' => 'SPH','stock_name' => 'SUBURBAN PROPANE PARTNERS LP'],
[
'ticker' => 'SPHB','stock_name' => 'INVESCO S&P 500 HIGH BETA ET'],
[
'ticker' => 'SPHD','stock_name' => 'INVESCO S&P 500 HIGH DIVIDEN'],
[
'ticker' => 'SPHQ','stock_name' => 'INVESCO S&P 500 QUALITY ETF'],
[
'ticker' => 'SPHY','stock_name' => 'SPDR PORTFOLIO HIGH YIELD BO'],
[
'ticker' => 'SPI','stock_name' => 'SPI ENERGY CO LTD'],
[
'ticker' => 'SPIB','stock_name' => 'SPDR PORT INT CORP BOND ETF'],
[
'ticker' => 'SPIP','stock_name' => 'SPDR PORTFOLIO TIPS ETF'],
[
'ticker' => 'SPIR','stock_name' => 'SPIRE GLOBAL INC'],
[
'ticker' => 'SPK','stock_name' => 'SPK ACQUISITION CORP'],
[
'ticker' => 'SPKAR','stock_name' => 'SPK ACQUISITION CORP-RTS'],
[
'ticker' => 'SPKAU','stock_name' => 'SPK ACQUISITION CORP'],
[
'ticker' => 'SPKB','stock_name' => 'SILVER SPIKE ACQUISITION-A'],
[
'ticker' => 'SPKBU','stock_name' => 'SILVER SPIKE ACQUISITION COR'],
[
'ticker' => 'SPLB','stock_name' => 'SPDR PORT LNG TRM CORP BND'],
[
'ticker' => 'SPLG','stock_name' => 'SPDR PORTFOLIO S&P 500 ETF'],
[
'ticker' => 'SPLK','stock_name' => 'SPLUNK INC'],
[
'ticker' => 'SPLP','stock_name' => 'STEEL PARTNERS HOLDINGS LP'],
[
'ticker' => 'SPLV','stock_name' => 'INVESCO S&P 500 LOW VOLATILI'],
[
'ticker' => 'SPMB','stock_name' => 'SPDR PORTFOLIO MORTGAGE BACK'],
[
'ticker' => 'SPMD','stock_name' => 'SPDR PORTFOLIO S&P 400 MID C'],
[
'ticker' => 'SPMO','stock_name' => 'INVESCO S&P 500 MOMENTUM ETF'],
[
'ticker' => 'SPMV','stock_name' => 'INVESCO S&P 500 MINIMUM VARI'],
[
'ticker' => 'SPNE','stock_name' => 'SEASPINE HOLDINGS CORP'],
[
'ticker' => 'SPNS','stock_name' => 'SAPIENS INTERNATIONAL CORP'],
[
'ticker' => 'SPNT','stock_name' => 'SIRIUSPOINT LTD'],
[
'ticker' => 'SPOK','stock_name' => 'SPOK HOLDINGS INC'],
[
'ticker' => 'SPOT','stock_name' => 'SPOTIFY TECHNOLOGY SA'],
[
'ticker' => 'SPPI','stock_name' => 'SPECTRUM PHARMACEUTICALS INC'],
[
'ticker' => 'SPPP','stock_name' => 'SPROTT PHYSICAL PLATINUM AND'],
[
'ticker' => 'SPQQ','stock_name' => 'SIREN LARGE CAP BLEND INDEX'],
[
'ticker' => 'SPR','stock_name' => 'SPIRIT AEROSYSTEMS HOLD-CL A'],
[
'ticker' => 'SPRB','stock_name' => 'SPRUCE BIOSCIENCES INC'],
[
'ticker' => 'SPRE','stock_name' => 'SP/F S&P GLOBAL REIT SHARIA'],
[
'ticker' => 'SPRO','stock_name' => 'SPERO THERAPEUTICS INC'],
[
'ticker' => 'SPRX','stock_name' => 'SPEAR ALPHA ETF'],
[
'ticker' => 'SPSB','stock_name' => 'SPDR PORT SHRT TRM CORP BND'],
[
'ticker' => 'SPSC','stock_name' => 'SPS COMMERCE INC'],
[
'ticker' => 'SPSK','stock_name' => 'SP FUNDS DOW JONES GLOBAL SU'],
[
'ticker' => 'SPSM','stock_name' => 'SPDR PORTFOLIO S&P 600 SMALL'],
[
'ticker' => 'SPT','stock_name' => 'SPROUT SOCIAL INC - CLASS A'],
[
'ticker' => 'SPTI','stock_name' => 'SPDR PORT INT TREASURY TERM'],
[
'ticker' => 'SPTK','stock_name' => 'SPORTSTEK ACQUISITION CORP-A'],
[
'ticker' => 'SPTKU','stock_name' => 'SPORTSTEK ACQUISITION CORP'],
[
'ticker' => 'SPTL','stock_name' => 'SPDR PORT LNG TRM TRSRY'],
[
'ticker' => 'SPTM','stock_name' => 'SPDR PORTFOLIO S&P 1500 COMP'],
[
'ticker' => 'SPTN','stock_name' => 'SPARTANNASH CO'],
[
'ticker' => 'SPTS','stock_name' => 'SPDR PORT SHRT TRM TRSRY'],
[
'ticker' => 'SPUC','stock_name' => 'SIMPLIFY US EQUITY PLUS UPSI'],
[
'ticker' => 'SPUS','stock_name' => 'SP FUNDS S&P SHARIA INDUSTRY'],
[
'ticker' => 'SPUU','stock_name' => 'DIREXION DLY S&P 500 BULL 2X'],
[
'ticker' => 'SPVM','stock_name' => 'INVESCO S&P 500 VALUE WITH M'],
[
'ticker' => 'SPVU','stock_name' => 'INVESCO S&P 500 ENHANCED VAL'],
[
'ticker' => 'SPWH','stock_name' => 'SPORTSMAN\'S WAREHOUSE HOLDIN'],
[
'ticker' => 'SPWR','stock_name' => 'SUNPOWER CORP'],
[
'ticker' => 'SPXB','stock_name' => 'PROSHARES S&P 500 BOND ETF'],
[
'ticker' => 'SPXC','stock_name' => 'SPX CORP'],
[
'ticker' => 'SPXE','stock_name' => 'PROSHARES S&P 500 EX-ENERGY'],
[
'ticker' => 'SPXL','stock_name' => 'DIREXION DLY S&P 500 BULL 3X'],
[
'ticker' => 'SPXN','stock_name' => 'PROSHARES S&P 500 EX-FINANCI'],
[
'ticker' => 'SPXS','stock_name' => 'DIREXION DLY S&P 500 BEAR 3X'],
[
'ticker' => 'SPXT','stock_name' => 'PROSHARES S&P 500 EX-TECHNOL'],
[
'ticker' => 'SPXU','stock_name' => 'PROSH ULTRAPRO SHORT S&P 500'],
[
'ticker' => 'SPXV','stock_name' => 'PROSHARES TRUST-S&P 500 EX-H'],
[
'ticker' => 'SPXX','stock_name' => 'NUVEEN S&P500 DYNAM OVERWR'],
[
'ticker' => 'SPXZ','stock_name' => 'MORGAN CREEK-EXOS SPAC ORGIN'],
[
'ticker' => 'SPY','stock_name' => 'SPDR S&P 500 ETF TRUST'],
[
'ticker' => 'SPYC','stock_name' => 'SIMPLIFY US EQUITY PLUS CONV'],
[
'ticker' => 'SPYD','stock_name' => 'SPDR PORTFOLIO S&P 500 HIGH'],
[
'ticker' => 'SPYG','stock_name' => 'SPDR PORTFOLIO S&P 500 GROWT'],
[
'ticker' => 'SPYV','stock_name' => 'SPDR PORT S&P 500 VALUE'],
[
'ticker' => 'SPYX','stock_name' => 'SPDR S&P 500 FOSSIL FUEL RES'],
[
'ticker' => 'SQ','stock_name' => 'SQUARE INC - A'],
[
'ticker' => 'SQEW','stock_name' => 'LEADERSHARES EQUITY SKEW ETF'],
[
'ticker' => 'SQFT','stock_name' => 'PRESIDIO PROPERTY TRUST - A'],
[
'ticker' => 'SQL','stock_name' => 'SEQLL INC'],
[
'ticker' => 'SQLV','stock_name' => 'LEGG MASON SMALL-CAP QUALITY'],
[
'ticker' => 'SQM','stock_name' => 'QUIMICA Y MINERA CHIL-SP ADR'],
[
'ticker' => 'SQNS','stock_name' => 'SEQUANS COMMUNICATIONS-ADR'],
[
'ticker' => 'SQQQ','stock_name' => 'PROSHARES ULTRAPRO SHORT QQQ'],
[
'ticker' => 'SQSP','stock_name' => 'SQUARESPACE INC - CLASS A'],
[
'ticker' => 'SQZ','stock_name' => 'SQZ BIOTECHNOLOGIES CO'],
[
'ticker' => 'SR','stock_name' => 'SPIRE INC'],
[
'ticker' => 'SRAD','stock_name' => 'SPORTRADAR GROUP AG-A'],
[
'ticker' => 'SRAX','stock_name' => 'SRAX INC'],
[
'ticker' => 'SRC','stock_name' => 'SPIRIT REALTY CAPITAL INC'],
[
'ticker' => 'SRCE','stock_name' => '1ST SOURCE CORP'],
[
'ticker' => 'SRCL','stock_name' => 'STERICYCLE INC'],
[
'ticker' => 'SRDX','stock_name' => 'SURMODICS INC'],
[
'ticker' => 'SRE','stock_name' => 'SEMPRA ENERGY'],
[
'ticker' => 'SRET','stock_name' => 'GLOBAL X SUPERDIVIDEND REIT'],
[
'ticker' => 'SREV','stock_name' => 'SERVICESOURCE INTERNATIONAL'],
[
'ticker' => 'SRG','stock_name' => 'SERITAGE GROWTH PROP- A REIT'],
[
'ticker' => 'SRGA','stock_name' => 'SURGALIGN HOLDINGS INC'],
[
'ticker' => 'SRI','stock_name' => 'STONERIDGE INC'],
[
'ticker' => 'SRL','stock_name' => 'SCULLY ROYALTY LTD'],
[
'ticker' => 'SRLN','stock_name' => 'SPDR BLACKSTONE SENIOR LOAN'],
[
'ticker' => 'SRLP','stock_name' => 'SPRAGUE RESOURCES LP'],
[
'ticker' => 'SRNE','stock_name' => 'SORRENTO THERAPEUTICS INC'],
[
'ticker' => 'SRPT','stock_name' => 'SAREPTA THERAPEUTICS INC'],
[
'ticker' => 'SRRA','stock_name' => 'SIERRA ONCOLOGY INC'],
[
'ticker' => 'SRRK','stock_name' => 'SCHOLAR ROCK HOLDING CORP'],
[
'ticker' => 'SRS','stock_name' => 'PROSHARES ULTRASHORT RE'],
[
'ticker' => 'SRSA','stock_name' => 'SARISSA CAPITAL ACQUISITI-A'],
[
'ticker' => 'SRSAU','stock_name' => 'SARISSA CAPITAL ACQUISITION'],
[
'ticker' => 'SRT','stock_name' => 'STARTEK INC'],
[
'ticker' => 'SRTS','stock_name' => 'SENSUS HEALTHCARE INC'],
[
'ticker' => 'SRTY','stock_name' => 'PROSHARES ULTRAPRO SHRT R2K'],
[
'ticker' => 'SRV','stock_name' => 'CUSHING MLP & INFRASTRUCTURE'],
[
'ticker' => 'SRVR','stock_name' => 'PACER BENCHMARK DATA INFRA'],
[
'ticker' => 'SRZN','stock_name' => 'SURROZEN INC'],
[
'ticker' => 'SSAA','stock_name' => 'SCIENCE STRATEGIC ACQUISIT-A'],
[
'ticker' => 'SSAAU','stock_name' => 'SCIENCE STRATEGIC ACQUISITIO'],
[
'ticker' => 'SSB','stock_name' => 'SOUTHSTATE CORP'],
[
'ticker' => 'SSBI','stock_name' => 'SUMMIT STATE BANK'],
[
'ticker' => 'SSBK','stock_name' => 'SOUTHERN STATES BANCSHARES'],
[
'ticker' => 'SSD','stock_name' => 'SIMPSON MANUFACTURING CO INC'],
[
'ticker' => 'SSFI','stock_name' => 'DAY HAG NED DVS RES S SEC FI'],
[
'ticker' => 'SSG','stock_name' => 'PROSHARES ULTSHRT SEMICONDUC'],
[
'ticker' => 'SSKN','stock_name' => 'STRATA SKIN SCIENCES INC'],
[
'ticker' => 'SSL','stock_name' => 'SASOL LTD-SPONSORED ADR'],
[
'ticker' => 'SSLY','stock_name' => 'SYNTAX STRATIFIED SMALLCAP'],
[
'ticker' => 'SSNC','stock_name' => 'SS&C TECHNOLOGIES HOLDINGS'],
[
'ticker' => 'SSNT','stock_name' => 'SILVERSUN TECHNOLOGIES INC'],
[
'ticker' => 'SSO','stock_name' => 'PROSHARES ULTRA S&P500'],
[
'ticker' => 'SSP','stock_name' => 'EW SCRIPPS CO/THE-A'],
[
'ticker' => 'SSPX','stock_name' => 'JANUS HENDERSON US SUST EQTY'],
[
'ticker' => 'SSPY','stock_name' => 'SYNTAX STRATIFIED LARGE CAP'],
[
'ticker' => 'SSRM','stock_name' => 'SSR MINING INC'],
[
'ticker' => 'SSSS','stock_name' => 'SURO CAPITAL CORP'],
[
'ticker' => 'SSTI','stock_name' => 'SHOTSPOTTER INC'],
[
'ticker' => 'SSTK','stock_name' => 'SHUTTERSTOCK INC'],
[
'ticker' => 'SSUS','stock_name' => 'DAY HAGAN/NED DAVIS RESEARCH'],
[
'ticker' => 'SSY','stock_name' => 'SUNLINK HEALTH SYSTEMS INC'],
[
'ticker' => 'SSYS','stock_name' => 'STRATASYS LTD'],
[
'ticker' => 'ST','stock_name' => 'SENSATA TECHNOLOGIES HOLDING'],
[
'ticker' => 'STAA','stock_name' => 'STAAR SURGICAL CO'],
[
'ticker' => 'STAB','stock_name' => 'STATERA BIOPHARMA INC'],
[
'ticker' => 'STAF','stock_name' => 'STAFFING 360 SOLUTIONS INC'],
[
'ticker' => 'STAG','stock_name' => 'STAG INDUSTRIAL INC'],
[
'ticker' => 'STAR','stock_name' => 'ISTAR INC'],
[
'ticker' => 'STBA','stock_name' => 'S & T BANCORP INC'],
[
'ticker' => 'STBL','stock_name' => 'DRIVEWEALTH STEADY SAVER ETF'],
[
'ticker' => 'STC','stock_name' => 'STEWART INFORMATION SERVICES'],
[
'ticker' => 'STCN','stock_name' => 'STEEL CONNECT INC'],
[
'ticker' => 'STE','stock_name' => 'STERIS PLC'],
[
'ticker' => 'STEM','stock_name' => 'STEM INC'],
[
'ticker' => 'STEP','stock_name' => 'STEPSTONE GROUP INC-CLASS A'],
[
'ticker' => 'STER','stock_name' => 'STERLING CHECK CORP'],
[
'ticker' => 'STFC','stock_name' => 'STATE AUTO FINANCIAL CORP'],
[
'ticker' => 'STG','stock_name' => 'SUNLANDS TECHNOLOGY- SP ADR'],
[
'ticker' => 'STGW','stock_name' => 'STAGWELL INC'],
[
'ticker' => 'STIM','stock_name' => 'NEURONETICS INC'],
[
'ticker' => 'STIP','stock_name' => 'ISHARES 0-5 YEAR TIPS BOND E'],
[
'ticker' => 'STK','stock_name' => 'COLUMBIA SELIG PREM TECH GW'],
[
'ticker' => 'STKL','stock_name' => 'SUNOPTA INC'],
[
'ticker' => 'STKS','stock_name' => 'ONE GROUP HOSPITALITY INC/TH'],
[
'ticker' => 'STL','stock_name' => 'STERLING BANCORP/DE'],
[
'ticker' => 'STLA','stock_name' => 'STELLANTIS NV'],
[
'ticker' => 'STLD','stock_name' => 'STEEL DYNAMICS INC'],
[
'ticker' => 'STLG','stock_name' => 'ISHARES FACTORS US GWTH STYL'],
[
'ticker' => 'STLV','stock_name' => 'ISHARES FACTORS US VAL STYLE'],
[
'ticker' => 'STM','stock_name' => 'STMICROELECTRONICS NV-NY SHS'],
[
'ticker' => 'STN','stock_name' => 'STANTEC INC'],
[
'ticker' => 'STNC','stock_name' => 'STANCE EQUITY ESG LRG CAP CO'],
[
'ticker' => 'STNE','stock_name' => 'STONECO LTD-A'],
[
'ticker' => 'STNG','stock_name' => 'SCORPIO TANKERS INC'],
[
'ticker' => 'STOK','stock_name' => 'STOKE THERAPEUTICS INC'],
[
'ticker' => 'STON','stock_name' => 'STONEMOR INC'],
[
'ticker' => 'STOR','stock_name' => 'STORE CAPITAL CORP'],
[
'ticker' => 'STOT','stock_name' => 'SPDR DL SHRT DURATION TR ETF'],
[
'ticker' => 'STPZ','stock_name' => 'PIMCO 1-5 YEAR US TIPS INDEX'],
[
'ticker' => 'STRA','stock_name' => 'STRATEGIC EDUCATION INC'],
[
'ticker' => 'STRC','stock_name' => 'SARCOS TECHNOLOGY AND ROBOTI'],
[
'ticker' => 'STRE','stock_name' => 'SUPERNOVA PARTNERS ACQUISI-A'],
[
'ticker' => 'STRE=','stock_name' => 'SUPERNOVA PARTNERS ACQUISITI'],
[
'ticker' => 'STRL','stock_name' => 'STERLING CONSTRUCTION CO'],
[
'ticker' => 'STRM','stock_name' => 'STREAMLINE HEALTH SOLUTIONS'],
[
'ticker' => 'STRO','stock_name' => 'SUTRO BIOPHARMA INC'],
[
'ticker' => 'STRR','stock_name' => 'STAR EQUITY HOLDINGS INC'],
[
'ticker' => 'STRS','stock_name' => 'STRATUS PROPERTIES INC'],
[
'ticker' => 'STRT','stock_name' => 'STRATTEC SECURITY CORP'],
[
'ticker' => 'STSA','stock_name' => 'SATSUMA PHARMACEUTICALS INC'],
[
'ticker' => 'STT','stock_name' => 'STATE STREET CORP'],
[
'ticker' => 'STTK','stock_name' => 'SHATTUCK LABS INC'],
[
'ticker' => 'STVN','stock_name' => 'STEVANATO GROUP SPA'],
[
'ticker' => 'STWD','stock_name' => 'STARWOOD PROPERTY TRUST INC'],
[
'ticker' => 'STX','stock_name' => 'SEAGATE TECHNOLOGY HOLDINGS'],
[
'ticker' => 'STXB','stock_name' => 'SPIRIT OF TEXAS BANCSHARES I'],
[
'ticker' => 'STXS','stock_name' => 'STEREOTAXIS INC'],
[
'ticker' => 'STZ','stock_name' => 'CONSTELLATION BRANDS INC-A'],
[
'ticker' => 'STZ.B','stock_name' => 'CONSTELLATION BRANDS INC-B'],
[
'ticker' => 'SU','stock_name' => 'SUNCOR ENERGY INC'],
[
'ticker' => 'SUB','stock_name' => 'ISHARES SHORT-TERM NATIONAL'],
[
'ticker' => 'SUBS','stock_name' => 'FOUNT SUBSCRIPTION ECONOMY'],
[
'ticker' => 'SUBZ','stock_name' => 'ROUNDHILL STREAM SERV TECH'],
[
'ticker' => 'SUI','stock_name' => 'SUN COMMUNITIES INC'],
[
'ticker' => 'SULR','stock_name' => 'SMARTETFS SUSTAINABLE ENERGY'],
[
'ticker' => 'SUM','stock_name' => 'SUMMIT MATERIALS INC -CL A'],
[
'ticker' => 'SUMO','stock_name' => 'SUMO LOGIC INC'],
[
'ticker' => 'SUMR','stock_name' => 'SUMMER INFANT INC'],
[
'ticker' => 'SUN','stock_name' => 'SUNOCO LP'],
[
'ticker' => 'SUNL','stock_name' => 'SUNLIGHT FINANCIAL HOLDINGS'],
[
'ticker' => 'SUNS','stock_name' => 'SLR SENIOR INVESTMENT CORP'],
[
'ticker' => 'SUNW','stock_name' => 'SUNWORKS INC'],
[
'ticker' => 'SUNY','stock_name' => 'LIFEGOAL VACATION INVESTMENT'],
[
'ticker' => 'SUP','stock_name' => 'SUPERIOR INDUSTRIES INTL'],
[
'ticker' => 'SUPN','stock_name' => 'SUPERNUS PHARMACEUTICALS INC'],
[
'ticker' => 'SUPV','stock_name' => 'GRUPO SUPERVIELLE SA-SP ADR'],
[
'ticker' => 'SURF','stock_name' => 'SURFACE ONCOLOGY INC'],
[
'ticker' => 'SURG','stock_name' => 'SURGEPAYS INC'],
[
'ticker' => 'SUSA','stock_name' => 'ISHARES MSCI USA ESG SELECT'],
[
'ticker' => 'SUSB','stock_name' => 'ISHARES ESG AWARE 1-5 YEAR U'],
[
'ticker' => 'SUSC','stock_name' => 'ISHARES ESG AWARE USD CORPOR'],
[
'ticker' => 'SUSL','stock_name' => 'ISHARES ESG MSCI USA LEADERS'],
[
'ticker' => 'SUZ','stock_name' => 'SUZANO SA - SPON ADR'],
[
'ticker' => 'SV','stock_name' => 'SPRING VALLEY ACQUIS-CLASS A'],
[
'ticker' => 'SVA','stock_name' => 'SINOVAC BIOTECH LTD'],
[
'ticker' => 'SVAL','stock_name' => 'ISHARES US SMALL CAP VAL FAC'],
[
'ticker' => 'SVC','stock_name' => 'SERVICE PROPERTIES TRUST'],
[
'ticker' => 'SVFA','stock_name' => 'SVF INVESTMENT CORP-CL A'],
[
'ticker' => 'SVFAU','stock_name' => 'SVF INVESTMENT CORP'],
[
'ticker' => 'SVFB','stock_name' => 'SVF INVESTMENT CORP 2-CLS A'],
[
'ticker' => 'SVFC','stock_name' => 'SVF INVESTMENT CORP 3-CLS A'],
[
'ticker' => 'SVFD','stock_name' => 'SAVE FOODS INC'],
[
'ticker' => 'SVM','stock_name' => 'SILVERCORP METALS INC'],
[
'ticker' => 'SVNAU','stock_name' => '7 ACQUISITION CORP'],
[
'ticker' => 'SVOK','stock_name' => 'SEVEN OAKS ACQUISITION COR-A'],
[
'ticker' => 'SVOKU','stock_name' => 'SEVEN OAKS ACQUISITION CORP'],
[
'ticker' => 'SVOL','stock_name' => 'SIMPLIFY VOLATILITY PREMIUM'],
[
'ticker' => 'SVRA','stock_name' => 'SAVARA INC'],
[
'ticker' => 'SVSVU','stock_name' => 'SPRING VALLEY ACQUISITION'],
[
'ticker' => 'SVT','stock_name' => 'SERVOTRONICS INC'],
[
'ticker' => 'SVVC','stock_name' => 'FIRSTHAND TECHNOLOGY VALUE'],
[
'ticker' => 'SVXY','stock_name' => 'PROSHARES SHORT VIX ST FUTUR'],
[
'ticker' => 'SWAG','stock_name' => 'SOFTWARE ACQUISITION GROUP-A'],
[
'ticker' => 'SWAGU','stock_name' => 'SOFTWARE ACQUISITION GROUP I'],
[
'ticker' => 'SWAN','stock_name' => 'AMPLIFY BLACKSWAN GROWTH TSY'],
[
'ticker' => 'SWAV','stock_name' => 'SHOCKWAVE MEDICAL INC'],
[
'ticker' => 'SWBI','stock_name' => 'SMITH & WESSON BRANDS INC'],
[
'ticker' => 'SWCH','stock_name' => 'SWITCH INC - A'],
[
'ticker' => 'SWET','stock_name' => 'ATHLON ACQUISITION CORP-A'],
[
'ticker' => 'SWETU','stock_name' => 'ATHLON ACQUISITION CORP'],
[
'ticker' => 'SWI','stock_name' => 'SOLARWINDS CORP'],
[
'ticker' => 'SWIM','stock_name' => 'LATHAM GROUP INC'],
[
'ticker' => 'SWIR','stock_name' => 'SIERRA WIRELESS INC'],
[
'ticker' => 'SWK','stock_name' => 'STANLEY BLACK & DECKER INC'],
[
'ticker' => 'SWKH','stock_name' => 'SWK HOLDINGS CORP'],
[
'ticker' => 'SWKS','stock_name' => 'SKYWORKS SOLUTIONS INC'],
[
'ticker' => 'SWM','stock_name' => 'SCHWEITZER-MAUDUIT INTL INC'],
[
'ticker' => 'SWN','stock_name' => 'SOUTHWESTERN ENERGY CO'],
[
'ticker' => 'SWSS','stock_name' => 'SPRINGWATER SPECIAL SITUATIO'],
[
'ticker' => 'SWSSU','stock_name' => 'SPRINGWATER SPECIAL SITUATIO'],
[
'ticker' => 'SWTX','stock_name' => 'SPRINGWORKS THERAPEUTICS INC'],
[
'ticker' => 'SWX','stock_name' => 'SOUTHWEST GAS HOLDINGS INC'],
[
'ticker' => 'SWZ','stock_name' => 'SWISS HELVETIA FUND'],
[
'ticker' => 'SXC','stock_name' => 'SUNCOKE ENERGY INC'],
[
'ticker' => 'SXI','stock_name' => 'STANDEX INTERNATIONAL CORP'],
[
'ticker' => 'SXQG','stock_name' => '6 MERIDIAN QUALITY GROWTH'],
[
'ticker' => 'SXT','stock_name' => 'SENSIENT TECHNOLOGIES CORP'],
[
'ticker' => 'SXTC','stock_name' => 'CHINA SXT PHARMACEUTICALS IN'],
[
'ticker' => 'SXUS','stock_name' => 'JANUS HENDERSON INT SUSTAIN'],
[
'ticker' => 'SY','stock_name' => 'SO-YOUNG INTERNATIONAL-ADR'],
[
'ticker' => 'SYBT','stock_name' => 'STOCK YARDS BANCORP INC'],
[
'ticker' => 'SYBX','stock_name' => 'SYNLOGIC INC'],
[
'ticker' => 'SYF','stock_name' => 'SYNCHRONY FINANCIAL'],
[
'ticker' => 'SYK','stock_name' => 'STRYKER CORP'],
[
'ticker' => 'SYLD','stock_name' => 'CAMBRIA SHAREHOLDER YIELD ET'],
[
'ticker' => 'SYN','stock_name' => 'SYNTHETIC BIOLOGICS INC'],
[
'ticker' => 'SYNA','stock_name' => 'SYNAPTICS INC'],
[
'ticker' => 'SYNH','stock_name' => 'SYNEOS HEALTH INC'],
[
'ticker' => 'SYNL','stock_name' => 'SYNALLOY CORP'],
[
'ticker' => 'SYPR','stock_name' => 'SYPRIS SOLUTIONS INC'],
[
'ticker' => 'SYRS','stock_name' => 'SYROS PHARMACEUTICALS INC'],
[
'ticker' => 'SYTA','stock_name' => 'SIYATA MOBILE INC'],
[
'ticker' => 'SYUS','stock_name' => 'SYNTAX STRATIFIED US TOTAL M'],
[
'ticker' => 'SYY','stock_name' => 'SYSCO CORP'],
[
'ticker' => 'SZC','stock_name' => 'CUSHING NEXTGEN INFRA INC'],
[
'ticker' => 'SZK','stock_name' => 'PROSHARES ULTSHRT CONS GOODS'],
[
'ticker' => 'SZNE','stock_name' => 'PACER CFRA STOVALL EQUAL'],
[
'ticker' => 'SZZLU','stock_name' => 'SIZZLE ACQUISITION CORP'],
[
'ticker' => 'T','stock_name' => 'AT&T INC'],
[
'ticker' => 'TA','stock_name' => 'TRAVELCENTERS OF AMERICA INC'],
[
'ticker' => 'TAC','stock_name' => 'TRANSALTA CORP'],
[
'ticker' => 'TACA','stock_name' => 'TREPONT ACQUISITION CORP I-A'],
[
'ticker' => 'TACA=','stock_name' => 'TREPONT ACQUISITION CORP I'],
[
'ticker' => 'TACO','stock_name' => 'DEL TACO RESTAURANTS INC'],
[
'ticker' => 'TACT','stock_name' => 'TRANSACT TECHNOLOGIES INC'],
[
'ticker' => 'TADS','stock_name' => 'ACTIVE DIVIDEND STOCK ETF/TH'],
[
'ticker' => 'TAGG','stock_name' => 'T ROWE PRICE QM US BOND ETF'],
[
'ticker' => 'TAGS','stock_name' => 'TEUCRIUM AGRICULTURAL FUND'],
[
'ticker' => 'TAIL','stock_name' => 'CAMBRIA TAIL RISK ETF'],
[
'ticker' => 'TAIT','stock_name' => 'TAITRON COMPONENTS INC-CL A'],
[
'ticker' => 'TAK','stock_name' => 'TAKEDA PHARMACEUTIC-SP ADR'],
[
'ticker' => 'TAL','stock_name' => 'TAL EDUCATION GROUP- ADR'],
[
'ticker' => 'TALK','stock_name' => 'TALKSPACE INC'],
[
'ticker' => 'TALO','stock_name' => 'TALOS ENERGY INC'],
[
'ticker' => 'TALS','stock_name' => 'TALARIS THERAPEUTICS INC'],
[
'ticker' => 'TAN','stock_name' => 'INVESCO SOLAR ETF'],
[
'ticker' => 'TANH','stock_name' => 'TANTECH HOLDINGS LTD'],
[
'ticker' => 'TAOP','stock_name' => 'TAOPING INC'],
[
'ticker' => 'TAP','stock_name' => 'MOLSON COORS BEVERAGE CO - B'],
[
'ticker' => 'TAP.A','stock_name' => 'MOLSON COORS BEVERAGE CO - A'],
[
'ticker' => 'TARA','stock_name' => 'PROTARA THERAPEUTIC INC'],
[
'ticker' => 'TARO','stock_name' => 'TARO PHARMACEUTICAL INDUS'],
[
'ticker' => 'TARS','stock_name' => 'TARSUS PHARMACEUTICALS INC'],
[
'ticker' => 'TASK','stock_name' => 'TASKUS INC-A'],
[
'ticker' => 'TAST','stock_name' => 'CARROLS RESTAURANT GROUP INC'],
[
'ticker' => 'TATT','stock_name' => 'TAT TECHNOLOGIES LTD'],
[
'ticker' => 'TAXF','stock_name' => 'AMERICAN CENTURY DIVER MUNI'],
[
'ticker' => 'TAYD','stock_name' => 'TAYLOR DEVICES INC'],
[
'ticker' => 'TBBK','stock_name' => 'BANCORP INC/THE'],
[
'ticker' => 'TBCP','stock_name' => 'THUNDER BRIDGE CAPITAL PAR-A'],
[
'ticker' => 'TBCPU','stock_name' => 'THUNDER BRIDGE CAPITAL PARTN'],
[
'ticker' => 'TBF','stock_name' => 'PROSHARES SHORT 20+ TREASURY'],
[
'ticker' => 'TBI','stock_name' => 'TRUEBLUE INC'],
[
'ticker' => 'TBJL','stock_name' => 'INNOVATOR 20 YR T BOND 9 BUF'],
[
'ticker' => 'TBK','stock_name' => 'TRIUMPH BANCORP INC'],
[
'ticker' => 'TBLA','stock_name' => 'TABOOLA.COM LTD'],
[
'ticker' => 'TBLD','stock_name' => 'THORNBURG INCOME BUILDER OPP'],
[
'ticker' => 'TBLT','stock_name' => 'TOUGHBUILT INDUSTRIES INC'],
[
'ticker' => 'TBNK','stock_name' => 'TERRITORIAL BANCORP INC'],
[
'ticker' => 'TBPH','stock_name' => 'THERAVANCE BIOPHARMA INC'],
[
'ticker' => 'TBSA','stock_name' => 'TB SA ACQUISITION CORP -A'],
[
'ticker' => 'TBSAU','stock_name' => 'TB SA ACQUISITION CORP'],
[
'ticker' => 'TBT','stock_name' => 'PROSHARES ULTRASHORT 20+Y TR'],
[
'ticker' => 'TBUX','stock_name' => 'T ROWE PRICE ULTRA SHORT-TER'],
[
'ticker' => 'TBX','stock_name' => 'PROSHARES SHORT 7-10 YR TSY'],
[
'ticker' => 'TC','stock_name' => 'TUANCHE LTD-ADR'],
[
'ticker' => 'TCAC','stock_name' => 'TUATARA CAPITAL ACQUISITIO-A'],
[
'ticker' => 'TCACU','stock_name' => 'TUATARA CAPITAL ACQUISITION'],
[
'ticker' => 'TCBC','stock_name' => 'TC BANCSHARES INC'],
[
'ticker' => 'TCBI','stock_name' => 'TEXAS CAPITAL BANCSHARES INC'],
[
'ticker' => 'TCBK','stock_name' => 'TRICO BANCSHARES'],
[
'ticker' => 'TCBS','stock_name' => 'TEXAS COMMUNITY BANCSHARES'],
[
'ticker' => 'TCDA','stock_name' => 'TRICIDA INC'],
[
'ticker' => 'TCFC','stock_name' => 'COMMUNITY FINANCIAL CORP/THE'],
[
'ticker' => 'TCHP','stock_name' => 'T ROWE PRICE BLUE CHIP GROWT'],
[
'ticker' => 'TCI','stock_name' => 'TRANSCONTINENTAL REALTY INV'],
[
'ticker' => 'TCMD','stock_name' => 'TACTILE SYSTEMS TECHNOLOGY I'],
[
'ticker' => 'TCN','stock_name' => 'TRICON RESIDENTIAL INC'],
[
'ticker' => 'TCOM','stock_name' => 'TRIP.COM GROUP LTD-ADR'],
[
'ticker' => 'TCON','stock_name' => 'TRACON PHARMACEUTICALS INC'],
[
'ticker' => 'TCPC','stock_name' => 'BLACKROCK TCP CAPITAL CORP'],
[
'ticker' => 'TCRR','stock_name' => 'TCR2 THERAPEUTICS INC'],
[
'ticker' => 'TCRX','stock_name' => 'TSCAN THERAPEUTICS INC'],
[
'ticker' => 'TCS','stock_name' => 'CONTAINER STORE GROUP INC/TH'],
[
'ticker' => 'TCTL','stock_name' => 'PREMISE CAPITAL DIVERSIFIED'],
[
'ticker' => 'TCVA','stock_name' => 'TCV ACQUISITION CORP-A'],
[
'ticker' => 'TCX','stock_name' => 'TUCOWS INC-CLASS A'],
[
'ticker' => 'TD','stock_name' => 'TORONTO-DOMINION BANK'],
[
'ticker' => 'TDC','stock_name' => 'TERADATA CORP'],
[
'ticker' => 'TDCX','stock_name' => 'TDCX INC'],
[
'ticker' => 'TDF','stock_name' => 'TEMPLETON DRAGON FUND INC'],
[
'ticker' => 'TDG','stock_name' => 'TRANSDIGM GROUP INC'],
[
'ticker' => 'TDIV','stock_name' => 'FT NASDAQ TECH DVD INDEX FD'],
[
'ticker' => 'TDOC','stock_name' => 'TELADOC HEALTH INC'],
[
'ticker' => 'TDS','stock_name' => 'TELEPHONE AND DATA SYSTEMS'],
[
'ticker' => 'TDSA','stock_name' => 'CABANA TARGET DRAWDOWN 5 ETF'],
[
'ticker' => 'TDSB','stock_name' => 'CABANA TARGET DRAWDOWN 7 ETF'],
[
'ticker' => 'TDSC','stock_name' => 'CABANA TARGET DRAWDWN 10 ETF'],
[
'ticker' => 'TDSD','stock_name' => 'CABANA TARGET DRAWDWN 13 ETF'],
[
'ticker' => 'TDSE','stock_name' => 'CABANA TARGET DRAWDWN 16 ETF'],
[
'ticker' => 'TDTF','stock_name' => 'FLEXSHARES IBOXX 5-YEAR TARG'],
[
'ticker' => 'TDTT','stock_name' => 'FLEXSHARES IBOXX 3-YEAR TARG'],
[
'ticker' => 'TDUP','stock_name' => 'THREDUP INC - CLASS A'],
[
'ticker' => 'TDV','stock_name' => 'PROSHARES S&P TECH DVD ARIST'],
[
'ticker' => 'TDVG','stock_name' => 'T ROWE PRICE DIVIDEND GROWTH'],
[
'ticker' => 'TDW','stock_name' => 'TIDEWATER INC'],
[
'ticker' => 'TDY','stock_name' => 'TELEDYNE TECHNOLOGIES INC'],
[
'ticker' => 'TEAF','stock_name' => 'ECOFIN SUSTAIN & SOC IMPCT'],
[
'ticker' => 'TEAM','stock_name' => 'ATLASSIAN CORP PLC-CLASS A'],
[
'ticker' => 'TECB','stock_name' => 'ISHARES US TECH BREAKTHROUGH'],
[
'ticker' => 'TECH','stock_name' => 'BIO-TECHNE CORP'],
[
'ticker' => 'TECK','stock_name' => 'TECK RESOURCES LTD-CLS B'],
[
'ticker' => 'TECL','stock_name' => 'DIREXION DAILY TECH BULL 3X'],
[
'ticker' => 'TECS','stock_name' => 'DIREXION DAILY TECH BEAR 3X'],
[
'ticker' => 'TEDU','stock_name' => 'TARENA INTERNATIONAL INC-ADR'],
[
'ticker' => 'TEF','stock_name' => 'TELEFONICA SA-SPON ADR'],
[
'ticker' => 'TEGS','stock_name' => 'TREND AGGREGATION ESG ETF'],
[
'ticker' => 'TEI','stock_name' => 'TEMPLETON EMERG MKTS INC FD'],
[
'ticker' => 'TEKK','stock_name' => 'TEKKORP DIGITAL ACQUISITIO-A'],
[
'ticker' => 'TEKKU','stock_name' => 'TEKKORP DIGITAL ACQUISITION'],
[
'ticker' => 'TEL','stock_name' => 'TE CONNECTIVITY LTD'],
[
'ticker' => 'TELA','stock_name' => 'TELA BIO INC'],
[
'ticker' => 'TELL','stock_name' => 'TELLURIAN INC'],
[
'ticker' => 'TEN','stock_name' => 'TENNECO INC-CLASS A'],
[
'ticker' => 'TENB','stock_name' => 'TENABLE HOLDINGS INC'],
[
'ticker' => 'TENG','stock_name' => 'DIREXION DLY 5G COMM BULL 2X'],
[
'ticker' => 'TENX','stock_name' => 'TENAX THERAPEUTICS INC'],
[
'ticker' => 'TEO','stock_name' => 'TELECOM ARGENTINA SA-SP ADR'],
[
'ticker' => 'TEQI','stock_name' => 'T ROWE PRICE EQUITY INCOME E'],
[
'ticker' => 'TER','stock_name' => 'TERADYNE INC'],
[
'ticker' => 'TERN','stock_name' => 'TERNS PHARMACEUTICALS INC'],
[
'ticker' => 'TESS','stock_name' => 'TESSCO TECHNOLOGIES INC'],
[
'ticker' => 'TETC','stock_name' => 'TECH AND ENERGY TRANSITION-A'],
[
'ticker' => 'TETCU','stock_name' => 'TECH AND ENERGY TRANSITION'],
[
'ticker' => 'TEVA','stock_name' => 'TEVA PHARMACEUTICAL-SP ADR'],
[
'ticker' => 'TEX','stock_name' => 'TEREX CORP'],
[
'ticker' => 'TFC','stock_name' => 'TRUIST FINANCIAL CORP'],
[
'ticker' => 'TFFP','stock_name' => 'TFF PHARMACEUTICALS INC'],
[
'ticker' => 'TFI','stock_name' => 'SPDR NUVEEN BLOOMBERG MUNICI'],
[
'ticker' => 'TFII','stock_name' => 'TFI INTERNATIONAL INC'],
[
'ticker' => 'TFJL','stock_name' => 'INNOVATOR 20 YR TREAS BOND 5'],
[
'ticker' => 'TFLO','stock_name' => 'ISHARES TREASURY FLOATING RA'],
[
'ticker' => 'TFSL','stock_name' => 'TFS FINANCIAL CORP'],
[
'ticker' => 'TFX','stock_name' => 'TELEFLEX INC'],
[
'ticker' => 'TG','stock_name' => 'TREDEGAR CORP'],
[
'ticker' => 'TGA','stock_name' => 'TRANSGLOBE ENERGY CORP'],
[
'ticker' => 'TGB','stock_name' => 'TASEKO MINES LTD'],
[
'ticker' => 'TGH','stock_name' => 'TEXTAINER GROUP HOLDINGS LTD'],
[
'ticker' => 'TGI','stock_name' => 'TRIUMPH GROUP INC'],
[
'ticker' => 'TGIF','stock_name' => 'SOFI WEEKLY INCOME ETF'],
[
'ticker' => 'TGLS','stock_name' => 'TECNOGLASS INC'],
[
'ticker' => 'TGNA','stock_name' => 'TEGNA INC'],
[
'ticker' => 'TGP','stock_name' => 'TEEKAY LNG PARTNERS LP'],
[
'ticker' => 'TGRW','stock_name' => 'T ROWE PRICE GROWTH STOCK ET'],
[
'ticker' => 'TGS','stock_name' => 'TRANSPORTADOR GAS-ADR SP B'],
[
'ticker' => 'TGT','stock_name' => 'TARGET CORP'],
[
'ticker' => 'TGTX','stock_name' => 'TG THERAPEUTICS INC'],
[
'ticker' => 'TGVCU','stock_name' => 'TG VENTURE ACQUISITION CORP'],
[
'ticker' => 'TH','stock_name' => 'TARGET HOSPITALITY CORP'],
[
'ticker' => 'THACU','stock_name' => 'THRIVE ACQUISITION CORP'],
[
'ticker' => 'THC','stock_name' => 'TENET HEALTHCARE CORP'],
[
'ticker' => 'THCA','stock_name' => 'TUSCAN HOLDINGS CORP II'],
[
'ticker' => 'THCAU','stock_name' => 'TUSCAN HOLDINGS CORP II'],
[
'ticker' => 'THCP','stock_name' => 'THUNDER BRIDGE CAPITAL PAR-A'],
[
'ticker' => 'THCPU','stock_name' => 'THUNDER BRIDGE CAPITAL PARTN'],
[
'ticker' => 'THCX','stock_name' => 'THE CANNABIS ETF'],
[
'ticker' => 'THD','stock_name' => 'ISHARES MSCI THAILAND ETF'],
[
'ticker' => 'THFF','stock_name' => 'FIRST FINANCIAL CORP/INDIANA'],
[
'ticker' => 'THG','stock_name' => 'HANOVER INSURANCE GROUP INC/'],
[
'ticker' => 'THM','stock_name' => 'INTL TOWER HILL MINES LTD'],
[
'ticker' => 'THMA','stock_name' => 'THIMBLE POINT ACQUISITION-A'],
[
'ticker' => 'THMAU','stock_name' => 'THIMBLE POINT ACQUISITION CO'],
[
'ticker' => 'THMO','stock_name' => 'THERMOGENESIS HOLDINGS INC'],
[
'ticker' => 'THNQ','stock_name' => 'ROBO GLOBAL ARTIFICIAL INTEL'],
[
'ticker' => 'THO','stock_name' => 'THOR INDUSTRIES INC'],
[
'ticker' => 'THQ','stock_name' => 'TEKLA HEALTHCARE OPPORTUNITI'],
[
'ticker' => 'THR','stock_name' => 'THERMON GROUP HOLDINGS INC'],
[
'ticker' => 'THRM','stock_name' => 'GENTHERM INC'],
[
'ticker' => 'THRN','stock_name' => 'THORNE HEALTHTECH INC'],
[
'ticker' => 'THRX','stock_name' => 'THESEUS PHARMACEUTICALS INC'],
[
'ticker' => 'THRY','stock_name' => 'THRYV HOLDINGS INC'],
[
'ticker' => 'THS','stock_name' => 'TREEHOUSE FOODS INC'],
[
'ticker' => 'THTX','stock_name' => 'THERATECHNOLOGIES INC'],
[
'ticker' => 'THW','stock_name' => 'TEKLA WORLD HEALTHCARE FUND'],
[
'ticker' => 'THY','stock_name' => 'TOEWS AGILITY SHARES DYNAMIC'],
[
'ticker' => 'TIG','stock_name' => 'TREAN INSURANCE GROUP INC'],
[
'ticker' => 'TIGO','stock_name' => 'MILLICOM INTL CELLULAR S.A.'],
[
'ticker' => 'TIGR','stock_name' => 'UP FINTECH HOLDING LTD - ADR'],
[
'ticker' => 'TIL','stock_name' => 'INSTIL BIO INC'],
[
'ticker' => 'TILE','stock_name' => 'INTERFACE INC'],
[
'ticker' => 'TILT','stock_name' => 'FLEXSHARES MORNINGSTAR US MA'],
[
'ticker' => 'TIMB','stock_name' => 'TIM SA-ADR'],
[
'ticker' => 'TINT','stock_name' => 'PROSHARES SMART MATERIALS'],
[
'ticker' => 'TINV','stock_name' => 'TIGA ACQUISITION CORP- CL A'],
[
'ticker' => 'TINV=','stock_name' => 'TIGA ACQUISITION CORP'],
[
'ticker' => 'TINY','stock_name' => 'PROSHARES NANOTECHNOLOGY ETF'],
[
'ticker' => 'TIOA','stock_name' => 'TIO TECH A- CLASS A'],
[
'ticker' => 'TIOAU','stock_name' => 'TIO TECH A'],
[
'ticker' => 'TIP','stock_name' => 'ISHARES TIPS BOND ETF'],
[
'ticker' => 'TIPT','stock_name' => 'TIPTREE INC'],
[
'ticker' => 'TIPX','stock_name' => 'SPDR BLOOMBERG 1-10 YEAR TIP'],
[
'ticker' => 'TIPZ','stock_name' => 'PIMCO BROAD US TIPS INDEX'],
[
'ticker' => 'TIRX','stock_name' => 'TIAN RUIXIANG HOLDINGS LTD-A'],
[
'ticker' => 'TISI','stock_name' => 'TEAM INC'],
[
'ticker' => 'TITN','stock_name' => 'TITAN MACHINERY INC'],
[
'ticker' => 'TIXT','stock_name' => 'TELUS INTERNATIONAL CDA INC'],
[
'ticker' => 'TJX','stock_name' => 'TJX COMPANIES INC'],
[
'ticker' => 'TK','stock_name' => 'TEEKAY CORP'],
[
'ticker' => 'TKAT','stock_name' => 'TAKUNG ART CO LTD'],
[
'ticker' => 'TKC','stock_name' => 'TURKCELL ILETISIM HIZMET-ADR'],
[
'ticker' => 'TKNO','stock_name' => 'ALPHA TEKNOVA INC'],
[
'ticker' => 'TKR','stock_name' => 'TIMKEN CO'],
[
'ticker' => 'TLGA','stock_name' => 'TLG ACQUISITION ONE COR-CL A'],
[
'ticker' => 'TLGA=','stock_name' => 'TLG ACQUISITION ONE CORP'],
[
'ticker' => 'TLH','stock_name' => 'ISHARES 10-20 YEAR TREASURY'],
[
'ticker' => 'TLIS','stock_name' => 'TALIS BIOMEDICAL CORP'],
[
'ticker' => 'TLK','stock_name' => 'TELKOM INDONESIA PERSERO-ADR'],
[
'ticker' => 'TLMD','stock_name' => 'SOC TELEMED INC'],
[
'ticker' => 'TLRY','stock_name' => 'TILRAY INC-CLASS 2 COMMON'],
[
'ticker' => 'TLS','stock_name' => 'TELOS CORPORATION'],
[
'ticker' => 'TLSA','stock_name' => 'TIZIANA LIFE SCIENCES LTD'],
[
'ticker' => 'TLT','stock_name' => 'ISHARES 20+ YEAR TREASURY BO'],
[
'ticker' => 'TLTD','stock_name' => 'FLEXSHARES MORNINGSTAR DEVEL'],
[
'ticker' => 'TLTE','stock_name' => 'FLEXSHARES MORNINGSTAR EMERG'],
[
'ticker' => 'TLYS','stock_name' => 'TILLY\'S INC-CLASS A SHRS'],
[
'ticker' => 'TM','stock_name' => 'TOYOTA MOTOR CORP -SPON ADR'],
[
'ticker' => 'TMAC','stock_name' => 'MUSIC ACQUISITION CORP/THE-A'],
[
'ticker' => 'TMAC=','stock_name' => 'MUSIC ACQUISITION CORP/THE'],
[
'ticker' => 'TMAT','stock_name' => 'MAIN THEMATIC INNOVATION ETF'],
[
'ticker' => 'TMBR','stock_name' => 'TIMBER PHARMACEUTICALS INC'],
[
'ticker' => 'TMC','stock_name' => 'TMC THE METALS CO INC'],
[
'ticker' => 'TMCI','stock_name' => 'TREACE MEDICAL CONCEPTS INC'],
[
'ticker' => 'TMDI','stock_name' => 'TITAN MEDICAL INC'],
[
'ticker' => 'TMDV','stock_name' => 'PROSHARES RUSSELL US DVD GRW'],
[
'ticker' => 'TMDX','stock_name' => 'TRANSMEDICS GROUP INC'],
[
'ticker' => 'TME','stock_name' => 'TENCENT MUSIC ENTERTAINM-ADR'],
[
'ticker' => 'TMF','stock_name' => 'DRX DLY 20+ YR TREAS BULL 3X'],
[
'ticker' => 'TMFC','stock_name' => 'MOTLEY FOOL 100 INDEX ETF'],
[
'ticker' => 'TMHC','stock_name' => 'TAYLOR MORRISON HOME CORP'],
[
'ticker' => 'TMKR','stock_name' => 'TASTEMAKER ACQUISITION COR-A'],
[
'ticker' => 'TMKRU','stock_name' => 'TASTEMAKER ACQUISITION CORP'],
[
'ticker' => 'TMO','stock_name' => 'THERMO FISHER SCIENTIFIC INC'],
[
'ticker' => 'TMP','stock_name' => 'TOMPKINS FINANCIAL CORP'],
[
'ticker' => 'TMPM','stock_name' => 'TURMERIC ACQUISITION CORP-A'],
[
'ticker' => 'TMPMU','stock_name' => 'TURMERIC ACQUISITION CORP'],
[
'ticker' => 'TMQ','stock_name' => 'TRILOGY METALS INC'],
[
'ticker' => 'TMST','stock_name' => 'TIMKENSTEEL CORP'],
[
'ticker' => 'TMUS','stock_name' => 'T-MOBILE US INC'],
[
'ticker' => 'TMV','stock_name' => 'DRX DLY 20+ YR TREAS BEAR 3X'],
[
'ticker' => 'TMX','stock_name' => 'TERMINIX GLOBAL HOLDINGS INC'],
[
'ticker' => 'TNA','stock_name' => 'DIREXION DLY SM CAP BULL 3X'],
[
'ticker' => 'TNC','stock_name' => 'TENNANT CO'],
[
'ticker' => 'TNDM','stock_name' => 'TANDEM DIABETES CARE INC'],
[
'ticker' => 'TNET','stock_name' => 'TRINET GROUP INC'],
[
'ticker' => 'TNGX','stock_name' => 'TANGO THERAPEUTICS INC'],
[
'ticker' => 'TNK','stock_name' => 'TEEKAY TANKERS LTD-CLASS A'],
[
'ticker' => 'TNL','stock_name' => 'TRAVEL + LEISURE CO'],
[
'ticker' => 'TNP','stock_name' => 'TSAKOS ENERGY NAVIGATION LTD'],
[
'ticker' => 'TNXP','stock_name' => 'TONIX PHARMACEUTICALS HOLDIN'],
[
'ticker' => 'TNYA','stock_name' => 'TENAYA THERAPEUTICS INC'],
[
'ticker' => 'TOACU','stock_name' => 'TALON 1 ACQUISITION CORP'],
[
'ticker' => 'TOK','stock_name' => 'ISHARES MSCI KOKUSAI ETF'],
[
'ticker' => 'TOKE','stock_name' => 'CAMBRIA CANNABIS ETF'],
[
'ticker' => 'TOL','stock_name' => 'TOLL BROTHERS INC'],
[
'ticker' => 'TOLZ','stock_name' => 'PROSHARES GLB INFRASTRUCTURE'],
[
'ticker' => 'TOMZ','stock_name' => 'TOMI ENVIRONMENTAL SOLUTIONS'],
[
'ticker' => 'TOPS','stock_name' => 'TOP SHIPS INC'],
[
'ticker' => 'TOST','stock_name' => 'TOAST INC-CLASS A'],
[
'ticker' => 'TOTL','stock_name' => 'SPDR DOUBLELINE TR TACT ETF'],
[
'ticker' => 'TOTR','stock_name' => 'T ROWE PRICE TOTAL RETURN ET'],
[
'ticker' => 'TOUR','stock_name' => 'TUNIU CORP-SPON ADR'],
[
'ticker' => 'TOWN','stock_name' => 'TOWNE BANK'],
[
'ticker' => 'TPAY','stock_name' => 'ECOFIN DIGITAL PAYMENTS INFR'],
[
'ticker' => 'TPB','stock_name' => 'TURNING POINT BRANDS INC'],
[
'ticker' => 'TPBA','stock_name' => 'TPB ACQUISITION CORP I-CL A'],
[
'ticker' => 'TPBAU','stock_name' => 'TPB ACQUISITION CORP I'],
[
'ticker' => 'TPC','stock_name' => 'TUTOR PERINI CORP'],
[
'ticker' => 'TPGS','stock_name' => 'TPG PACE SOLUTIONS CORP'],
[
'ticker' => 'TPGY','stock_name' => 'TPG PACE BENEFICIAL FIN-CL A'],
[
'ticker' => 'TPGY=','stock_name' => 'TPG PACE BENEFICIAL FINANCE'],
[
'ticker' => 'TPH','stock_name' => 'TRI POINTE HOMES INC'],
[
'ticker' => 'TPHD','stock_name' => 'TIMOTHY PLAN HIGH DVD STOCK'],
[
'ticker' => 'TPHE','stock_name' => 'TIMOTHY PLAN HIGH DIVIDEND S'],
[
'ticker' => 'TPHS','stock_name' => 'TRINITY PLACE HOLDINGS INC'],
[
'ticker' => 'TPIC','stock_name' => 'TPI COMPOSITES INC'],
[
'ticker' => 'TPIF','stock_name' => 'TIMOTHY PLAN INTERNATIONAL E'],
[
'ticker' => 'TPL','stock_name' => 'TEXAS PACIFIC LAND CORP'],
[
'ticker' => 'TPLC','stock_name' => 'TIMOTHY PLAN US LARGE/MID CA'],
[
'ticker' => 'TPLE','stock_name' => 'TIMOTHY PLAN US LARGE/MID CA'],
[
'ticker' => 'TPOR','stock_name' => 'DRX DLY TRANSPORTS BULL 3X'],
[
'ticker' => 'TPR','stock_name' => 'TAPESTRY INC'],
[
'ticker' => 'TPSC','stock_name' => 'TIMOTHY PLAN US SMALL CAP CO'],
[
'ticker' => 'TPST','stock_name' => 'TEMPEST THERAPEUTICS INC'],
[
'ticker' => 'TPTX','stock_name' => 'TURNING POINT THERAPEUTICS I'],
[
'ticker' => 'TPVG','stock_name' => 'TRIPLEPOINT VENTURE GROWTH B'],
[
'ticker' => 'TPX','stock_name' => 'TEMPUR SEALY INTERNATIONAL I'],
[
'ticker' => 'TPYP','stock_name' => 'TORTOISE NORTH AMERICAN PIPE'],
[
'ticker' => 'TPZ','stock_name' => 'TORTOISE POWER & ENRGY INFRA'],
[
'ticker' => 'TQQQ','stock_name' => 'PROSHARES ULTRAPRO QQQ'],
[
'ticker' => 'TR','stock_name' => 'TOOTSIE ROLL INDS'],
[
'ticker' => 'TRAQ=','stock_name' => 'TRINE II ACQUISITION CORP'],
[
'ticker' => 'TRC','stock_name' => 'TEJON RANCH CO'],
[
'ticker' => 'TRCA','stock_name' => 'TWIN RIDGE CAPITAL ACQUISI-A'],
[
'ticker' => 'TRCA=','stock_name' => 'TWIN RIDGE CAPITAL ACQUISITI'],
[
'ticker' => 'TRDA','stock_name' => 'ENTRADA THERAPEUTICS INC'],
[
'ticker' => 'TREB','stock_name' => 'TREBIA ACQUISITION CORP-A'],
[
'ticker' => 'TREB=','stock_name' => 'TREBIA ACQUISITION CORP'],
[
'ticker' => 'TREC','stock_name' => 'TRECORA RESOURCES'],
[
'ticker' => 'TREE','stock_name' => 'LENDINGTREE INC'],
[
'ticker' => 'TREX','stock_name' => 'TREX COMPANY INC'],
[
'ticker' => 'TRGP','stock_name' => 'TARGA RESOURCES CORP'],
[
'ticker' => 'TRHC','stock_name' => 'TABULA RASA HEALTHCARE INC'],
[
'ticker' => 'TRI','stock_name' => 'THOMSON REUTERS CORP'],
[
'ticker' => 'TRIB','stock_name' => 'TRINITY BIOTECH PLC-SPON ADR'],
[
'ticker' => 'TRIL','stock_name' => 'TRILLIUM THERAPEUTICS INC'],
[
'ticker' => 'TRIN','stock_name' => 'TRINITY CAPITAL INC'],
[
'ticker' => 'TRIP','stock_name' => 'TRIPADVISOR INC'],
[
'ticker' => 'TRIS=','stock_name' => 'TRISTAR ACQUISITION I CORP'],
[
'ticker' => 'TRIT','stock_name' => 'TRITERRAS INC-CLASS A'],
[
'ticker' => 'TRKA','stock_name' => 'TROIKA MEDIA GROUP INC'],
[
'ticker' => 'TRMB','stock_name' => 'TRIMBLE INC'],
[
'ticker' => 'TRMD','stock_name' => 'TORM PLC-A'],
[
'ticker' => 'TRMK','stock_name' => 'TRUSTMARK CORP'],
[
'ticker' => 'TRMR','stock_name' => 'TREMOR INTERNATIONAL LTD-ADR'],
[
'ticker' => 'TRN','stock_name' => 'TRINITY INDUSTRIES INC'],
[
'ticker' => 'TRND','stock_name' => 'PACER TRENDPILOT FUNDS OF FD'],
[
'ticker' => 'TRNO','stock_name' => 'TERRENO REALTY CORP'],
[
'ticker' => 'TRNS','stock_name' => 'TRANSCAT INC'],
[
'ticker' => 'TRON','stock_name' => 'CORNER GROWTH ACQUISITION -A'],
[
'ticker' => 'TRONU','stock_name' => 'CORNER GROWTH ACQUISITION CO'],
[
'ticker' => 'TROW','stock_name' => 'T ROWE PRICE GROUP INC'],
[
'ticker' => 'TROX','stock_name' => 'TRONOX HOLDINGS PLC- A'],
[
'ticker' => 'TRP','stock_name' => 'TC ENERGY CORP'],
[
'ticker' => 'TRPL','stock_name' => 'PACER MET US LRG CAP DVD 300'],
[
'ticker' => 'TRQ','stock_name' => 'TURQUOISE HILL RESOURCES LTD'],
[
'ticker' => 'TRS','stock_name' => 'TRIMAS CORP'],
[
'ticker' => 'TRST','stock_name' => 'TRUSTCO BANK CORP NY'],
[
'ticker' => 'TRT','stock_name' => 'TRIO-TECH INTERNATIONAL'],
[
'ticker' => 'TRTL','stock_name' => 'TORTOISEECOFIN ACQUISITION-A'],
[
'ticker' => 'TRTL=','stock_name' => 'TORTOISEECOFIN ACQUISITION C'],
[
'ticker' => 'TRTN','stock_name' => 'TRITON INTERNATIONAL LTD'],
[
'ticker' => 'TRTX','stock_name' => 'TPG RE FINANCE TRUST INC'],
[
'ticker' => 'TRTY','stock_name' => 'CAMBRIA TRINITY ETF'],
[
'ticker' => 'TRU','stock_name' => 'TRANSUNION'],
[
'ticker' => 'TRUE','stock_name' => 'TRUECAR INC'],
[
'ticker' => 'TRUP','stock_name' => 'TRUPANION INC'],
[
'ticker' => 'TRV','stock_name' => 'TRAVELERS COS INC/THE'],
[
'ticker' => 'TRVG','stock_name' => 'TRIVAGO NV - ADR'],
[
'ticker' => 'TRVI','stock_name' => 'TREVI THERAPEUTICS INC'],
[
'ticker' => 'TRVN','stock_name' => 'TREVENA INC'],
[
'ticker' => 'TRX','stock_name' => 'TANZANIAN GOLD CORP'],
[
'ticker' => 'TRYP','stock_name' => 'SONICSHARES AIR HOTEL CRUISE'],
[
'ticker' => 'TS','stock_name' => 'TENARIS SA-ADR'],
[
'ticker' => 'TSBK','stock_name' => 'TIMBERLAND BANCORP INC'],
[
'ticker' => 'TSC','stock_name' => 'TRISTATE CAPITAL HLDGS INC'],
[
'ticker' => 'TSCO','stock_name' => 'TRACTOR SUPPLY COMPANY'],
[
'ticker' => 'TSE','stock_name' => 'TRINSEO PLC'],
[
'ticker' => 'TSEM','stock_name' => 'TOWER SEMICONDUCTOR LTD'],
[
'ticker' => 'TSHA','stock_name' => 'TAYSHA GENE THERAPIES INC'],
[
'ticker' => 'TSI','stock_name' => 'TCW STRATEGIC INCOME FUND'],
[
'ticker' => 'TSIB','stock_name' => 'TISHMAN SPEYER INNOVATI-CL A'],
[
'ticker' => 'TSIBU','stock_name' => 'TISHMAN SPEYER INNOVATION CO'],
[
'ticker' => 'TSJA','stock_name' => 'INNOVATOR TRIPLE STACKER-JAN'],
[
'ticker' => 'TSLA','stock_name' => 'TESLA INC'],
[
'ticker' => 'TSLX','stock_name' => 'SIXTH STREET SPECIALTY LENDI'],
[
'ticker' => 'TSM','stock_name' => 'TAIWAN SEMICONDUCTOR-SP ADR'],
[
'ticker' => 'TSN','stock_name' => 'TYSON FOODS INC-CL A'],
[
'ticker' => 'TSOC','stock_name' => 'INNOVATOR TRIPLE STACKER OCT'],
[
'ticker' => 'TSP','stock_name' => 'TUSIMPLE HOLDINGS INC - A'],
[
'ticker' => 'TSPA','stock_name' => 'T ROWE PRICE US EQY RESEARCH'],
[
'ticker' => 'TSPQ','stock_name' => 'TCW SPECIAL PURPOSE ACQ-CL A'],
[
'ticker' => 'TSPQ=','stock_name' => 'TCW SPECIAL PURPOSE ACQUISIT'],
[
'ticker' => 'TSQ','stock_name' => 'TOWNSQUARE MEDIA INC - CL A'],
[
'ticker' => 'TSRI','stock_name' => 'TSR INC'],
[
'ticker' => 'TSVT','stock_name' => '2SEVENTY BIO INC-W/I'],
[
'ticker' => 'TT','stock_name' => 'TRANE TECHNOLOGIES PLC'],
[
'ticker' => 'TTAC','stock_name' => 'TRIMTABS US FREE CASH FLOW Q'],
[
'ticker' => 'TTAI','stock_name' => 'TRIMTABS INTERNATIONAL FREE'],
[
'ticker' => 'TTC','stock_name' => 'TORO CO'],
[
'ticker' => 'TTCF','stock_name' => 'TATTOOED CHEF INC'],
[
'ticker' => 'TTD','stock_name' => 'TRADE DESK INC/THE -CLASS A'],
[
'ticker' => 'TTE','stock_name' => 'TOTALENERGIES SE -SPON ADR'],
[
'ticker' => 'TTEC','stock_name' => 'TTEC HOLDINGS INC'],
[
'ticker' => 'TTEK','stock_name' => 'TETRA TECH INC'],
[
'ticker' => 'TTGT','stock_name' => 'TECHTARGET'],
[
'ticker' => 'TTI','stock_name' => 'TETRA TECHNOLOGIES INC'],
[
'ticker' => 'TTM','stock_name' => 'TATA MOTORS LTD-SPON ADR'],
[
'ticker' => 'TTMI','stock_name' => 'TTM TECHNOLOGIES'],
[
'ticker' => 'TTNP','stock_name' => 'TITAN PHARMACEUTICALS INC'],
[
'ticker' => 'TTOO','stock_name' => 'T2 BIOSYSTEMS INC'],
[
'ticker' => 'TTP','stock_name' => 'TORTOISE PIPELINE & ENERGY'],
[
'ticker' => 'TTSH','stock_name' => 'TILE SHOP HLDGS INC'],
[
'ticker' => 'TTT','stock_name' => 'PROSHARES ULT -3X 20+ YR TSY'],
[
'ticker' => 'TTWO','stock_name' => 'TAKE-TWO INTERACTIVE SOFTWRE'],
[
'ticker' => 'TU','stock_name' => 'TELUS CORP'],
[
'ticker' => 'TUEM','stock_name' => 'TUESDAY MORNING CORP'],
[
'ticker' => 'TUFN','stock_name' => 'TUFIN SOFTWARE TECHNOLOGIES'],
[
'ticker' => 'TUGC','stock_name' => 'TRADEUP GLOBAL CORP-A'],
[
'ticker' => 'TUGCU','stock_name' => 'TRADEUP GLOBAL CORP'],
[
'ticker' => 'TUP','stock_name' => 'TUPPERWARE BRANDS CORP'],
[
'ticker' => 'TUR','stock_name' => 'ISHARES MSCI TURKEY ETF'],
[
'ticker' => 'TURN','stock_name' => '180 DEGREE CAPITAL CORP'],
[
'ticker' => 'TUSA','stock_name' => 'FT TOTAL US MARKET ALPHADEX'],
[
'ticker' => 'TUSK','stock_name' => 'MAMMOTH ENERGY SERVICES INC'],
[
'ticker' => 'TUYA','stock_name' => 'TUYA INC'],
[
'ticker' => 'TV','stock_name' => 'GRUPO TELEVISA SA-SPON ADR'],
[
'ticker' => 'TVAC','stock_name' => 'THAYER VENTURES ACQUISITIO-A'],
[
'ticker' => 'TVACU','stock_name' => 'THAYER VENTURES ACQUISITION'],
[
'ticker' => 'TVTX','stock_name' => 'TRAVERE THERAPEUTICS INC'],
[
'ticker' => 'TVTY','stock_name' => 'TIVITY HEALTH INC'],
[
'ticker' => 'TW','stock_name' => 'TRADEWEB MARKETS INC-CLASS A'],
[
'ticker' => 'TWCB','stock_name' => 'BILANDER ACQUISITION CORP-A'],
[
'ticker' => 'TWCBU','stock_name' => 'BILANDER ACQUISITION CORP'],
[
'ticker' => 'TWI','stock_name' => 'TITAN INTERNATIONAL INC'],
[
'ticker' => 'TWIN','stock_name' => 'TWIN DISC INC'],
[
'ticker' => 'TWIO','stock_name' => 'TRAJAN WEALTH INCOME OPPORTU'],
[
'ticker' => 'TWKS','stock_name' => 'THOUGHTWORKS HOLDING INC'],
[
'ticker' => 'TWLO','stock_name' => 'TWILIO INC - A'],
[
'ticker' => 'TWLV','stock_name' => 'TWELVE SEAS INVTMNT CO II -A'],
[
'ticker' => 'TWLVU','stock_name' => 'TWELVE SEAS INVESTMENT CO II'],
[
'ticker' => 'TWM','stock_name' => 'PROSHARES ULTRASHORT R2000'],
[
'ticker' => 'TWN','stock_name' => 'TAIWAN FUND INC'],
[
'ticker' => 'TWND','stock_name' => 'TAILWIND ACQUISITION CORP-A'],
[
'ticker' => 'TWND=','stock_name' => 'TAILWIND ACQUISITION CORP'],
[
'ticker' => 'TWNI','stock_name' => 'TAILWIND INTERNATIONAL ACQ-A'],
[
'ticker' => 'TWNI=','stock_name' => 'TAILWIND INTERNATIONAL ACQUI'],
[
'ticker' => 'TWNK','stock_name' => 'HOSTESS BRANDS INC'],
[
'ticker' => 'TWNT','stock_name' => 'TAILWIND TWO ACQUISITION-A'],
[
'ticker' => 'TWNT=','stock_name' => 'TAILWIND TWO ACQUISITION COR'],
[
'ticker' => 'TWO','stock_name' => 'TWO HARBORS INVESTMENT CORP'],
[
'ticker' => 'TWOA','stock_name' => 'TWO - CLASS A'],
[
'ticker' => 'TWOU','stock_name' => '2U INC'],
[
'ticker' => 'TWST','stock_name' => 'TWIST BIOSCIENCE CORP'],
[
'ticker' => 'TWTR','stock_name' => 'TWITTER INC'],
[
'ticker' => 'TX','stock_name' => 'TERNIUM SA-SPONSORED ADR'],
[
'ticker' => 'TXG','stock_name' => '10X GENOMICS INC-CLASS A'],
[
'ticker' => 'TXMD','stock_name' => 'THERAPEUTICSMD INC'],
[
'ticker' => 'TXN','stock_name' => 'TEXAS INSTRUMENTS INC'],
[
'ticker' => 'TXRH','stock_name' => 'TEXAS ROADHOUSE INC'],
[
'ticker' => 'TXT','stock_name' => 'TEXTRON INC'],
[
'ticker' => 'TY','stock_name' => 'TRI-CONTINENTAL CORP'],
[
'ticker' => 'TYA','stock_name' => 'SIMPLIFY RISK PARITY TREASUR'],
[
'ticker' => 'TYD','stock_name' => 'DRX DLY 7-10 Y TREAS BULL 3X'],
[
'ticker' => 'TYG','stock_name' => 'TORTOISE ENERGY INFRASTRUCT'],
[
'ticker' => 'TYL','stock_name' => 'TYLER TECHNOLOGIES INC'],
[
'ticker' => 'TYME','stock_name' => 'TYME TECHNOLOGIES INC'],
[
'ticker' => 'TYO','stock_name' => 'DRX DLY 7-10 Y TREAS BEAR 3X'],
[
'ticker' => 'TYRA','stock_name' => 'TYRA BIOSCIENCES INC'],
[
'ticker' => 'TZA','stock_name' => 'DIREXION DLY SM CAP BEAR 3X'],
[
'ticker' => 'TZOO','stock_name' => 'TRAVELZOO'],
[
'ticker' => 'TZPS','stock_name' => 'TZP STRATEGIES ACQUISI-CL A'],
[
'ticker' => 'TZPSU','stock_name' => 'TZP STRATEGIES ACQUISITION'],
[
'ticker' => 'U','stock_name' => 'UNITY SOFTWARE INC'],
[
'ticker' => 'UA','stock_name' => 'UNDER ARMOUR INC-CLASS C'],
[
'ticker' => 'UAA','stock_name' => 'UNDER ARMOUR INC-CLASS A'],
[
'ticker' => 'UAE','stock_name' => 'ISHARES MSCI UAE ETF'],
[
'ticker' => 'UAL','stock_name' => 'UNITED AIRLINES HOLDINGS INC'],
[
'ticker' => 'UAMY','stock_name' => 'UNITED STATES ANTIMONY CORP'],
[
'ticker' => 'UAN','stock_name' => 'CVR PARTNERS LP'],
[
'ticker' => 'UAPR','stock_name' => 'INNOVATOR U.S. EQUITY ULTRA'],
[
'ticker' => 'UAUG','stock_name' => 'INNOVATOR U.S. EQUITY ULTRA'],
[
'ticker' => 'UAVS','stock_name' => 'AGEAGLE AERIAL SYSTEMS INC'],
[
'ticker' => 'UBA','stock_name' => 'URSTADT BIDDLE - CLASS A'],
[
'ticker' => 'UBCP','stock_name' => 'UNITED BANCORP INC/OHIO'],
[
'ticker' => 'UBER','stock_name' => 'UBER TECHNOLOGIES INC'],
[
'ticker' => 'UBFO','stock_name' => 'UNITED SECURITY BANCSHARE/CA'],
[
'ticker' => 'UBND','stock_name' => 'VICTORYSHARES ESG CORE PLUS'],
[
'ticker' => 'UBOH','stock_name' => 'UNITED BANCSHARES INC/OHIO'],
[
'ticker' => 'UBOT','stock_name' => 'DIREXION DAILY ROBOTICS ART'],
[
'ticker' => 'UBP','stock_name' => 'URSTADT BIDDLE PROPERTIES'],
[
'ticker' => 'UBR','stock_name' => 'PROSHARES ULTRA MSCI BRAZIL'],
[
'ticker' => 'UBS','stock_name' => 'UBS GROUP AG-REG'],
[
'ticker' => 'UBSI','stock_name' => 'UNITED BANKSHARES INC'],
[
'ticker' => 'UBT','stock_name' => 'PROSHARES ULTRA 20+ YEAR TSY'],
[
'ticker' => 'UBX','stock_name' => 'UNITY BIOTECHNOLOGY INC'],
[
'ticker' => 'UCBI','stock_name' => 'UNITED COMMUNITY BANKS/GA'],
[
'ticker' => 'UCC','stock_name' => 'PROSHARES ULTRA CONS SERVICE'],
[
'ticker' => 'UCIB','stock_name' => 'ETRACS UBS BBG CONS MA SER B'],
[
'ticker' => 'UCL','stock_name' => 'UCLOUDLINK GROUP INC'],
[
'ticker' => 'UCO','stock_name' => 'PROSHARES ULTRA BLOOMBERG CR'],
[
'ticker' => 'UCON','stock_name' => 'FIRST TRUST TCW UNCONSTRAINE'],
[
'ticker' => 'UCRD','stock_name' => 'VICTORYSHARES ESG CORP BOND'],
[
'ticker' => 'UCTT','stock_name' => 'ULTRA CLEAN HOLDINGS INC'],
[
'ticker' => 'UCYB','stock_name' => 'PROSHARES ULTRA NASDAQ CYBR'],
[
'ticker' => 'UDEC','stock_name' => 'INNOVATOR U.S. EQUITY ULTRA'],
[
'ticker' => 'UDMY','stock_name' => 'UDEMY INC'],
[
'ticker' => 'UDN','stock_name' => 'INVESCO DB US DOLLAR INDEX B'],
[
'ticker' => 'UDOW','stock_name' => 'PROSHARES ULTRAPRO DOW30'],
[
'ticker' => 'UDR','stock_name' => 'UDR INC'],
[
'ticker' => 'UE','stock_name' => 'URBAN EDGE PROPERTIES'],
[
'ticker' => 'UEC','stock_name' => 'URANIUM ENERGY CORP'],
[
'ticker' => 'UEIC','stock_name' => 'UNIVERSAL ELECTRONICS INC'],
[
'ticker' => 'UEPS','stock_name' => 'NET 1 UEPS TECHNOLOGIES INC'],
[
'ticker' => 'UEVM','stock_name' => 'VICTORYSHARES USAA MSCI EMER'],
[
'ticker' => 'UFAB','stock_name' => 'UNIQUE FABRICATING INC'],
[
'ticker' => 'UFCS','stock_name' => 'UNITED FIRE GROUP INC'],
[
'ticker' => 'UFEB','stock_name' => 'INNOVATOR U.S. EQUITY ULTRA'],
[
'ticker' => 'UFI','stock_name' => 'UNIFI INC'],
[
'ticker' => 'UFO','stock_name' => 'PROCURE SPACE ETF'],
[
'ticker' => 'UFPI','stock_name' => 'UFP INDUSTRIES INC'],
[
'ticker' => 'UFPT','stock_name' => 'UFP TECHNOLOGIES INC'],
[
'ticker' => 'UFS','stock_name' => 'DOMTAR CORP'],
[
'ticker' => 'UG','stock_name' => 'UNITED GUARDIAN INC'],
[
'ticker' => 'UGA','stock_name' => 'UNITED STATES GAS FUND LP'],
[
'ticker' => 'UGCE','stock_name' => 'UNCOMMON PORT DES CORE EQTY'],
[
'ticker' => 'UGE','stock_name' => 'PROSHARES ULTRA CONSUM GOODS'],
[
'ticker' => 'UGI','stock_name' => 'UGI CORP'],
[
'ticker' => 'UGL','stock_name' => 'PROSHARES ULTRA GOLD'],
[
'ticker' => 'UGP','stock_name' => 'ULTRAPAR PARTICPAC-SPON ADR'],
[
'ticker' => 'UGRO','stock_name' => 'URBAN-GRO INC'],
[
'ticker' => 'UHAL','stock_name' => 'AMERCO'],
[
'ticker' => 'UHS','stock_name' => 'UNIVERSAL HEALTH SERVICES-B'],
[
'ticker' => 'UHT','stock_name' => 'UNIVERSAL HEALTH RLTY INCOME'],
[
'ticker' => 'UI','stock_name' => 'UBIQUITI INC'],
[
'ticker' => 'UIHC','stock_name' => 'UNITED INSURANCE HOLDINGS CO'],
[
'ticker' => 'UIS','stock_name' => 'UNISYS CORP'],
[
'ticker' => 'UITB','stock_name' => 'VICTORYSHARES USAA CORE INTE'],
[
'ticker' => 'UIVM','stock_name' => 'VICTORYSHARES USAA MSCI INTE'],
[
'ticker' => 'UJAN','stock_name' => 'INNOVATOR U.S. EQUITY ULTRA'],
[
'ticker' => 'UJB','stock_name' => 'PROSHARES ULTRA HIGH YIELD'],
[
'ticker' => 'UJUL','stock_name' => 'INNOVATOR U.S. EQUITY ULTRA'],
[
'ticker' => 'UJUN','stock_name' => 'INNOVATOR U.S. EQUITY ULTRA'],
[
'ticker' => 'UK','stock_name' => 'UCOMMUNE INTERNATIONAL LTD-A'],
[
'ticker' => 'UL','stock_name' => 'UNILEVER PLC-SPONSORED ADR'],
[
'ticker' => 'ULBI','stock_name' => 'ULTRALIFE CORP'],
[
'ticker' => 'ULCC','stock_name' => 'FRONTIER GROUP HOLDINGS INC'],
[
'ticker' => 'ULE','stock_name' => 'PROSHARES ULTRA EURO'],
[
'ticker' => 'ULH','stock_name' => 'UNIVERSAL LOGISTICS HOLDINGS'],
[
'ticker' => 'ULST','stock_name' => 'SPDR ULTRA SHORT-TERM BOND'],
[
'ticker' => 'ULTA','stock_name' => 'ULTA BEAUTY INC'],
[
'ticker' => 'ULTR','stock_name' => 'IQ ULTRA SHORT DURATION ETF'],
[
'ticker' => 'ULVM','stock_name' => 'VICTORYSHARES USAA MSCI USA'],
[
'ticker' => 'UMAR','stock_name' => 'INNOVATOR U.S. EQUITY ULTRA'],
[
'ticker' => 'UMAY','stock_name' => 'INNOVATOR U.S. EQUITY ULTRA'],
[
'ticker' => 'UMBF','stock_name' => 'UMB FINANCIAL CORP'],
[
'ticker' => 'UMC','stock_name' => 'UNITED MICROELECTRON-SP ADR'],
[
'ticker' => 'UMDD','stock_name' => 'PROSHARES ULTRAPRO MIDCAP400'],
[
'ticker' => 'UMH','stock_name' => 'UMH PROPERTIES INC'],
[
'ticker' => 'UMI','stock_name' => 'USCF MIDSTREAM ENERGY INCOME'],
[
'ticker' => 'UMPQ','stock_name' => 'UMPQUA HOLDINGS CORP'],
[
'ticker' => 'UNAM','stock_name' => 'UNICO AMERICAN CORP'],
[
'ticker' => 'UNB','stock_name' => 'UNION BANKSHARES INC /VT'],
[
'ticker' => 'UNCY','stock_name' => 'UNICYCIVE THERAPEUTICS INC'],
[
'ticker' => 'UNF','stock_name' => 'UNIFIRST CORP/MA'],
[
'ticker' => 'UNFI','stock_name' => 'UNITED NATURAL FOODS INC'],
[
'ticker' => 'UNG','stock_name' => 'US NATURAL GAS FUND LP'],
[
'ticker' => 'UNH','stock_name' => 'UNITEDHEALTH GROUP INC'],
[
'ticker' => 'UNIT','stock_name' => 'UNITI GROUP INC'],
[
'ticker' => 'UNL','stock_name' => 'UNITED STATES 12 MONTH NATUR'],
[
'ticker' => 'UNM','stock_name' => 'UNUM GROUP'],
[
'ticker' => 'UNOV','stock_name' => 'INNOVATOR U.S. EQUITY ULTRA'],
[
'ticker' => 'UNP','stock_name' => 'UNION PACIFIC CORP'],
[
'ticker' => 'UNTY','stock_name' => 'UNITY BANCORP INC'],
[
'ticker' => 'UNVR','stock_name' => 'UNIVAR SOLUTIONS INC'],
[
'ticker' => 'UOCT','stock_name' => 'INNOVATOR U.S. EQUITY ULTRA'],
[
'ticker' => 'UONE','stock_name' => 'URBAN ONE INC'],
[
'ticker' => 'UONEK','stock_name' => 'URBAN ONE INC'],
[
'ticker' => 'UP','stock_name' => 'WHEELS UP EXPERIENCE INC'],
[
'ticker' => 'UPC','stock_name' => 'UNIVERSE PHARMACEUTICALS INC'],
[
'ticker' => 'UPH','stock_name' => 'UPHEALTH INC'],
[
'ticker' => 'UPLD','stock_name' => 'UPLAND SOFTWARE INC'],
[
'ticker' => 'UPRO','stock_name' => 'PROSHARES ULTRAPRO S&P 500'],
[
'ticker' => 'UPS','stock_name' => 'UNITED PARCEL SERVICE-CL B'],
[
'ticker' => 'UPST','stock_name' => 'UPSTART HOLDINGS INC'],
[
'ticker' => 'UPTD','stock_name' => 'TRADEUP ACQUISITION CORP'],
[
'ticker' => 'UPTDU','stock_name' => 'TRADEUP ACQUISITION CORP'],
[
'ticker' => 'UPV','stock_name' => 'PROSHARES ULTRA FTSE EUROPE'],
[
'ticker' => 'UPW','stock_name' => 'PROSHARES ULTRA UTILITIES'],
[
'ticker' => 'UPWK','stock_name' => 'UPWORK INC'],
[
'ticker' => 'URA','stock_name' => 'GLOBAL X URANIUM ETF'],
[
'ticker' => 'URBN','stock_name' => 'URBAN OUTFITTERS INC'],
[
'ticker' => 'URE','stock_name' => 'PROSHARES ULTRA REAL ESTATE'],
[
'ticker' => 'URG','stock_name' => 'UR-ENERGY INC'],
[
'ticker' => 'URGN','stock_name' => 'UROGEN PHARMA LTD'],
[
'ticker' => 'URI','stock_name' => 'UNITED RENTALS INC'],
[
'ticker' => 'URNM','stock_name' => 'NORTHSHORE GLOBAL URANIUM MI'],
[
'ticker' => 'UROY','stock_name' => 'URANIUM ROYALTY CORP'],
[
'ticker' => 'URTH','stock_name' => 'ISHARES MSCI WORLD ETF'],
[
'ticker' => 'URTY','stock_name' => 'PROSHARES ULTRAPRO RUSS2000'],
[
'ticker' => 'USA','stock_name' => 'LIBERTY ALL STAR EQUITY FUND'],
[
'ticker' => 'USAC','stock_name' => 'USA COMPRESSION PARTNERS LP'],
[
'ticker' => 'USAI','stock_name' => 'PACER AMERICAN ENERGY INDEPE'],
[
'ticker' => 'USAK','stock_name' => 'USA TRUCK INC'],
[
'ticker' => 'USAP','stock_name' => 'UNIVERSAL STAINLESS & ALLOY'],
[
'ticker' => 'USAS','stock_name' => 'AMERICAS GOLD AND SILVER COR'],
[
'ticker' => 'USAU','stock_name' => 'US GOLD CORP'],
[
'ticker' => 'USB','stock_name' => 'US BANCORP'],
[
'ticker' => 'USBF','stock_name' => 'ISHARES USD BOND FACTOR ETF'],
[
'ticker' => 'USCB','stock_name' => 'US CENTURY BANK-CLASS A'],
[
'ticker' => 'USCI','stock_name' => 'UNITED STATES COMMODITY INDE'],
[
'ticker' => 'USCTU','stock_name' => 'TKB CRITICAL TECHNOLOGIES 1'],
[
'ticker' => 'USD','stock_name' => 'PROSHARES ULTRA SEMICONDUCT'],
[
'ticker' => 'USDP','stock_name' => 'USD PARTNERS LP'],
[
'ticker' => 'USDU','stock_name' => 'WISDOMTREE BBG USD BULLISH'],
[
'ticker' => 'USEG','stock_name' => 'U S ENERGY CORP - WYOMING'],
[
'ticker' => 'USEP','stock_name' => 'INNOVATOR U.S. EQUITY ULTRA'],
[
'ticker' => 'USEQ','stock_name' => 'INVESCO RUSSELL 1000 ENHANCE'],
[
'ticker' => 'USFD','stock_name' => 'US FOODS HOLDING CORP'],
[
'ticker' => 'USFR','stock_name' => 'WISDOMTREE FLOATING RATE TRE'],
[
'ticker' => 'USHY','stock_name' => 'ISHARES BROAD USD HIGH YIELD'],
[
'ticker' => 'USI','stock_name' => 'PRINCIPAL ULTRA-SHORT ACTIVE'],
[
'ticker' => 'USIG','stock_name' => 'ISHARES BROAD USD INVESTMENT'],
[
'ticker' => 'USIO','stock_name' => 'USIO INC'],
[
'ticker' => 'USL','stock_name' => 'UNITED STATES 12 MONTH OIL'],
[
'ticker' => 'USLB','stock_name' => 'INVESCO RUSSELL 1000 LOW BET'],
[
'ticker' => 'USLM','stock_name' => 'UNITED STATES LIME & MINERAL'],
[
'ticker' => 'USM','stock_name' => 'US CELLULAR CORP'],
[
'ticker' => 'USMC','stock_name' => 'PRINCIPAL US MEGA-CAP ETF'],
[
'ticker' => 'USMF','stock_name' => 'WISDOMTREE US MULTIFACTOR FU'],
[
'ticker' => 'USML','stock_name' => 'ETRACS 2X MINVOL FACTR TR'],
[
'ticker' => 'USMV','stock_name' => 'ISHARES MSCI USA MIN VOL FAC'],
[
'ticker' => 'USNA','stock_name' => 'USANA HEALTH SCIENCES INC'],
[
'ticker' => 'USO','stock_name' => 'UNITED STATES OIL FUND LP'],
[
'ticker' => 'USOI','stock_name' => 'X-LINKS CRUDE OIL COV CALL'],
[
'ticker' => 'USPH','stock_name' => 'U.S. PHYSICAL THERAPY INC'],
[
'ticker' => 'USRT','stock_name' => 'ISHARES CORE US REIT ETF'],
[
'ticker' => 'USSG','stock_name' => 'XTRACKERS MSCI USA ESG LDRS'],
[
'ticker' => 'UST','stock_name' => 'PROSHARES ULTRA 7-10 YEAR TR'],
[
'ticker' => 'USTB','stock_name' => 'VICTORYSHARES USAA CORE SHOR'],
[
'ticker' => 'USVM','stock_name' => 'VICTORYSHARES USAA MSCI USA'],
[
'ticker' => 'USVT','stock_name' => 'US VALUE ETF'],
[
'ticker' => 'USWS','stock_name' => 'US WELL SERVICES INC'],
[
'ticker' => 'USX','stock_name' => 'US XPRESS ENTERPRISES INC -A'],
[
'ticker' => 'USXF','stock_name' => 'ISHARES ESG ADVANCE MSCI USA'],
[
'ticker' => 'UTES','stock_name' => 'VIRTUS REAVES UTILITIES ETF'],
[
'ticker' => 'UTF','stock_name' => 'COHEN & STEERS INFRASTRUCTUR'],
[
'ticker' => 'UTG','stock_name' => 'REAVES UTILITY INCOME FUND'],
[
'ticker' => 'UTHR','stock_name' => 'UNITED THERAPEUTICS CORP'],
[
'ticker' => 'UTI','stock_name' => 'UNIVERSAL TECHNICAL INSTITUT'],
[
'ticker' => 'UTL','stock_name' => 'UNITIL CORP'],
[
'ticker' => 'UTMD','stock_name' => 'UTAH MEDICAL PRODUCTS INC'],
[
'ticker' => 'UTME','stock_name' => 'UTIME LTD'],
[
'ticker' => 'UTRN','stock_name' => 'VESPER US LARGE CAP SHORT TE'],
[
'ticker' => 'UTRS','stock_name' => 'MINERVA SURGICAL INC'],
[
'ticker' => 'UTSI','stock_name' => 'UTSTARCOM HOLDINGS CORP'],
[
'ticker' => 'UTSL','stock_name' => 'DRX DLY UTILITIES BULL 3X'],
[
'ticker' => 'UTZ','stock_name' => 'UTZ BRANDS INC'],
[
'ticker' => 'UUP','stock_name' => 'INVESCO DB US DOLLAR INDEX B'],
[
'ticker' => 'UUU','stock_name' => 'UNIVERSAL SECURITY INSTRUMNT'],
[
'ticker' => 'UUUU','stock_name' => 'ENERGY FUELS INC'],
[
'ticker' => 'UVE','stock_name' => 'UNIVERSAL INSURANCE HOLDINGS'],
[
'ticker' => 'UVSP','stock_name' => 'UNIVEST FINANCIAL CORP'],
[
'ticker' => 'UVV','stock_name' => 'UNIVERSAL CORP/VA'],
[
'ticker' => 'UVXY','stock_name' => 'PROSHARES ULTRA VIX ST FUTUR'],
[
'ticker' => 'UWM','stock_name' => 'PROSHARES ULTRA RUSSELL2000'],
[
'ticker' => 'UWMC','stock_name' => 'UWM HOLDINGS CORP'],
[
'ticker' => 'UXI','stock_name' => 'PROSHARES ULTRA INDUSTRIALS'],
[
'ticker' => 'UXIN','stock_name' => 'UXIN LTD - ADR'],
[
'ticker' => 'UYG','stock_name' => 'PROSHARES ULTRA FINANCIALS'],
[
'ticker' => 'UYM','stock_name' => 'PROSHARES ULTRA BASIC MATERI'],
[
'ticker' => 'V','stock_name' => 'VISA INC-CLASS A SHARES'],
[
'ticker' => 'VABK','stock_name' => 'VIRGINIA NATIONAL BANKSHARES'],
[
'ticker' => 'VABS','stock_name' => 'VIRTUS NEWFLEET ABS/MBS ETF'],
[
'ticker' => 'VAC','stock_name' => 'MARRIOTT VACATIONS WORLD'],
[
'ticker' => 'VACC','stock_name' => 'VACCITECH PLC'],
[
'ticker' => 'VAL','stock_name' => 'VALARIS LTD'],
[
'ticker' => 'VALE','stock_name' => 'VALE SA-SP ADR'],
[
'ticker' => 'VALN','stock_name' => 'VALNEVA SE - ADR'],
[
'ticker' => 'VALQ','stock_name' => 'AMERICAN CENTURY STOXX US'],
[
'ticker' => 'VALT','stock_name' => 'ETFMG SIT ULTRA SHORT ETF'],
[
'ticker' => 'VALU','stock_name' => 'VALUE LINE INC'],
[
'ticker' => 'VAMO','stock_name' => 'CAMBRIA VALUE & MOMENTUM ETF'],
[
'ticker' => 'VAPO','stock_name' => 'VAPOTHERM INC'],
[
'ticker' => 'VAQC','stock_name' => 'VECTOR ACQUISITION CORP II-A'],
[
'ticker' => 'VATE','stock_name' => 'INNOVATE CORP'],
[
'ticker' => 'VAW','stock_name' => 'VANGUARD MATERIALS ETF'],
[
'ticker' => 'VB','stock_name' => 'VANGUARD SMALL-CAP ETF'],
[
'ticker' => 'VBF','stock_name' => 'INVESCO BOND FUND'],
[
'ticker' => 'VBFC','stock_name' => 'VILLAGE BANK AND TRUST FINAN'],
[
'ticker' => 'VBIV','stock_name' => 'VBI VACCINES INC'],
[
'ticker' => 'VBK','stock_name' => 'VANGUARD SMALL-CAP GRWTH ETF'],
[
'ticker' => 'VBLT','stock_name' => 'VASCULAR BIOGENICS LTD'],
[
'ticker' => 'VBND','stock_name' => 'VIDENT CORE US BOND STRATEGY'],
[
'ticker' => 'VBNK','stock_name' => 'VERSABANK'],
[
'ticker' => 'VBR','stock_name' => 'VANGUARD SMALL-CAP VALUE ETF'],
[
'ticker' => 'VBTX','stock_name' => 'VERITEX HOLDINGS INC'],
[
'ticker' => 'VC','stock_name' => 'VISTEON CORP'],
[
'ticker' => 'VCAR','stock_name' => 'SIMPLIFY VOLT ROBOCAR DISRUP'],
[
'ticker' => 'VCEB','stock_name' => 'VANGUARD ESG US CORP BOND'],
[
'ticker' => 'VCEL','stock_name' => 'VERICEL CORP'],
[
'ticker' => 'VCF','stock_name' => 'DELAWARE INV CO MUNI INC FD'],
[
'ticker' => 'VCIF','stock_name' => 'VERTICAL CAPITAL INCOME'],
[
'ticker' => 'VCIT','stock_name' => 'VANGUARD INT-TERM CORPORATE'],
[
'ticker' => 'VCKA','stock_name' => 'VICKERS VANTAGE CORP I'],
[
'ticker' => 'VCKAU','stock_name' => 'VICKERS VANTAGE CORP I'],
[
'ticker' => 'VCLN','stock_name' => 'VIRTUS DUFF & PHELPS CLEAN E'],
[
'ticker' => 'VCLO','stock_name' => 'S/V CLOUD & CYBERSECURITY DI'],
[
'ticker' => 'VCLT','stock_name' => 'VANGUARD LONG-TERM CORP BOND'],
[
'ticker' => 'VCNX','stock_name' => 'VACCINEX INC'],
[
'ticker' => 'VCR','stock_name' => 'VANGUARD CONSUMER DISCRE ETF'],
[
'ticker' => 'VCRA','stock_name' => 'VOCERA COMMUNICATIONS INC'],
[
'ticker' => 'VCSH','stock_name' => 'VANGUARD S/T CORP BOND ETF'],
[
'ticker' => 'VCTR','stock_name' => 'VICTORY CAPITAL HOLDING - A'],
[
'ticker' => 'VCV','stock_name' => 'INVESCO CA V M I'],
[
'ticker' => 'VCXA','stock_name' => '10X CAPITAL VENTURE ACQUIS-A'],
[
'ticker' => 'VCXAU','stock_name' => '10X CAPITAL VENTURE ACQUISIT'],
[
'ticker' => 'VCYT','stock_name' => 'VERACYTE INC'],
[
'ticker' => 'VDC','stock_name' => 'VANGUARD CONSUMER STAPLE ETF'],
[
'ticker' => 'VDE','stock_name' => 'VANGUARD ENERGY ETF'],
[
'ticker' => 'VEA','stock_name' => 'VANGUARD FTSE DEVELOPED ETF'],
[
'ticker' => 'VEC','stock_name' => 'VECTRUS INC'],
[
'ticker' => 'VECO','stock_name' => 'VEECO INSTRUMENTS INC'],
[
'ticker' => 'VECT','stock_name' => 'VECTIVBIO HOLDING AG'],
[
'ticker' => 'VEDL','stock_name' => 'VEDANTA LTD-ADR'],
[
'ticker' => 'VEEE','stock_name' => 'TWIN VEE POWERCATS CO'],
[
'ticker' => 'VEEV','stock_name' => 'VEEVA SYSTEMS INC-CLASS A'],
[
'ticker' => 'VEGA','stock_name' => 'ADVSHRS STAR GBL BUY-WRITE'],
[
'ticker' => 'VEGI','stock_name' => 'ISHARES MSCI GLOBAL AGRICULT'],
[
'ticker' => 'VEGN','stock_name' => 'US VEGAN CLIMATE ETF'],
[
'ticker' => 'VEL','stock_name' => 'VELOCITY FINANCIAL INC'],
[
'ticker' => 'VELO','stock_name' => 'VELOCITY ACQUISITION CORP-A'],
[
'ticker' => 'VELOU','stock_name' => 'VELOCITY ACQUISITION CORP'],
[
'ticker' => 'VENA','stock_name' => 'VENUS ACQUISITION CORP'],
[
'ticker' => 'VENAR','stock_name' => 'VENUS ACQUISITION CORP -RTS'],
[
'ticker' => 'VENAU','stock_name' => 'VENUS ACQUISITION CORP'],
[
'ticker' => 'VEON','stock_name' => 'VEON LTD'],
[
'ticker' => 'VERA','stock_name' => 'VERA THERAPEUTICS INC'],
[
'ticker' => 'VERB','stock_name' => 'VERB TECHNOLOGY CO INC'],
[
'ticker' => 'VERI','stock_name' => 'VERITONE INC'],
[
'ticker' => 'VERO','stock_name' => 'VENUS CONCEPT INC'],
[
'ticker' => 'VERU','stock_name' => 'VERU INC'],
[
'ticker' => 'VERV','stock_name' => 'VERVE THERAPEUTICS INC'],
[
'ticker' => 'VERX','stock_name' => 'VERTEX INC - CLASS A'],
[
'ticker' => 'VERY','stock_name' => 'VERICITY INC'],
[
'ticker' => 'VET','stock_name' => 'VERMILION ENERGY INC'],
[
'ticker' => 'VEU','stock_name' => 'VANGUARD FTSE ALL-WORLD EX-U'],
[
'ticker' => 'VEV','stock_name' => 'VICINITY MOTOR CORP'],
[
'ticker' => 'VFC','stock_name' => 'VF CORP'],
[
'ticker' => 'VFF','stock_name' => 'VILLAGE FARMS INTERNATIONAL'],
[
'ticker' => 'VFH','stock_name' => 'VANGUARD FINANCIALS ETF'],
[
'ticker' => 'VFIN','stock_name' => 'SIMPLIFY VOLT FINTECH DISRUP'],
[
'ticker' => 'VFL','stock_name' => 'DELAWARE INV NATL MUNI INC F'],
[
'ticker' => 'VFLQ','stock_name' => 'VANGUARD US LIQUIDITY FACTOR'],
[
'ticker' => 'VFMF','stock_name' => 'VANGUARD US MULTIFACTOR ETF'],
[
'ticker' => 'VFMO','stock_name' => 'VANGUARD US MOMENTUM FACTOR'],
[
'ticker' => 'VFMV','stock_name' => 'VANGUARD US MINIMUM VOLATILI'],
[
'ticker' => 'VFQY','stock_name' => 'VANGUARD U.S. QUALITY FACTOR'],
[
'ticker' => 'VFVA','stock_name' => 'VANGUARD U.S. VALUE FACTOR'],
[
'ticker' => 'VG','stock_name' => 'VONAGE HOLDINGS CORP'],
[
'ticker' => 'VGFC','stock_name' => 'VERY GOOD FOOD CO INC/THE'],
[
'ticker' => 'VGI','stock_name' => 'VIRTUS GLOBAL MULTI-SECTOR'],
[
'ticker' => 'VGII','stock_name' => 'VIRGIN GROUP ACQUISITION C-A'],
[
'ticker' => 'VGII=','stock_name' => 'VIRGIN GROUP ACQUISITION COR'],
[
'ticker' => 'VGIT','stock_name' => 'VANGUARD INTERMEDIATE-TERM T'],
[
'ticker' => 'VGK','stock_name' => 'VANGUARD FTSE EUROPE ETF'],
[
'ticker' => 'VGLT','stock_name' => 'VANGUARD LONG-TERM TREASURY'],
[
'ticker' => 'VGM','stock_name' => 'INVESCO TRUST FOR INVESTMEN'],
[
'ticker' => 'VGR','stock_name' => 'VECTOR GROUP LTD'],
[
'ticker' => 'VGSH','stock_name' => 'VANGUARD SHORT-TERM TREASURY'],
[
'ticker' => 'VGT','stock_name' => 'VANGUARD INFO TECH ETF'],
[
'ticker' => 'VGZ','stock_name' => 'VISTA GOLD CORP'],
[
'ticker' => 'VHAQ','stock_name' => 'VIVEON HEALTH ACQUISITION CO'],
[
'ticker' => 'VHAQ=','stock_name' => 'VIVEON HEALTH ACQUISITION CO'],
[
'ticker' => 'VHAQ^','stock_name' => 'VIVEON HEALTH ACQUISIT-RTS'],
[
'ticker' => 'VHC','stock_name' => 'VIRNETX HOLDING CORP'],
[
'ticker' => 'VHI','stock_name' => 'VALHI INC'],
[
'ticker' => 'VHT','stock_name' => 'VANGUARD HEALTH CARE ETF'],
[
'ticker' => 'VIA','stock_name' => 'VIA RENEWABLES INC'],
[
'ticker' => 'VIAC','stock_name' => 'VIACOMCBS INC - CLASS B'],
[
'ticker' => 'VIACA','stock_name' => 'VIACOMCBS INC - CLASS A'],
[
'ticker' => 'VIAO','stock_name' => 'VIA OPTRONICS AG'],
[
'ticker' => 'VIAV','stock_name' => 'VIAVI SOLUTIONS INC'],
[
'ticker' => 'VICE','stock_name' => 'ADVISORSHARES VICE ETF'],
[
'ticker' => 'VICI','stock_name' => 'VICI PROPERTIES INC'],
[
'ticker' => 'VICR','stock_name' => 'VICOR CORP'],
[
'ticker' => 'VIDI','stock_name' => 'VIDENT INTERNATIONAL EQUITY'],
[
'ticker' => 'VIEW','stock_name' => 'VIEW INC'],
[
'ticker' => 'VIG','stock_name' => 'VANGUARD DIVIDEND APPREC ETF'],
[
'ticker' => 'VIGI','stock_name' => 'VANGUARD INT DIV APP INDX FD'],
[
'ticker' => 'VII','stock_name' => '7GC & CO HOLDINGS INC -CL A'],
[
'ticker' => 'VIIAU','stock_name' => '7GC & CO HOLDINGS INC'],
[
'ticker' => 'VINC','stock_name' => 'VINCERX PHARMA INC'],
[
'ticker' => 'VINO','stock_name' => 'GAUCHO GROUP HOLDINGS INC'],
[
'ticker' => 'VINP','stock_name' => 'VINCI PARTNERS INVESTMENTS-A'],
[
'ticker' => 'VIOG','stock_name' => 'VANGUARD S&P SMALL-CAP 600 G'],
[
'ticker' => 'VIOO','stock_name' => 'VANGUARD S&P SMALL-CAP 600 E'],
[
'ticker' => 'VIOT','stock_name' => 'VIOMI TECHNOLOGY CO LTD-ADR'],
[
'ticker' => 'VIOV','stock_name' => 'VANGUARD S&P SMALL-CAP 600 V'],
[
'ticker' => 'VIPS','stock_name' => 'VIPSHOP HOLDINGS LTD - ADR'],
[
'ticker' => 'VIR','stock_name' => 'VIR BIOTECHNOLOGY INC'],
[
'ticker' => 'VIRC','stock_name' => 'VIRCO MFG CORPORATION'],
[
'ticker' => 'VIRI','stock_name' => 'VIRIOS THERAPEUTICS INC'],
[
'ticker' => 'VIRS','stock_name' => 'PACER BIOTHREAT ETF'],
[
'ticker' => 'VIRT','stock_name' => 'VIRTU FINANCIAL INC-CLASS A'],
[
'ticker' => 'VIRX','stock_name' => 'VIRACTA THERAPEUTICS INC'],
[
'ticker' => 'VIS','stock_name' => 'VANGUARD INDUSTRIALS ETF'],
[
'ticker' => 'VISL','stock_name' => 'VISLINK TECHNOLOGIES INC'],
[
'ticker' => 'VIST','stock_name' => 'VISTA OIL & GAS SAB DE CV'],
[
'ticker' => 'VITL','stock_name' => 'VITAL FARMS INC'],
[
'ticker' => 'VIV','stock_name' => 'TELEFONICA BRASIL-ADR'],
[
'ticker' => 'VIVE','stock_name' => 'VIVEVE MEDICAL INC'],
[
'ticker' => 'VIVO','stock_name' => 'MERIDIAN BIOSCIENCE INC'],
[
'ticker' => 'VIXM','stock_name' => 'PROSHARES VIX MID-TERM FUT'],
[
'ticker' => 'VIXY','stock_name' => 'PROSHARES VIX SHORT-TERM FUT'],
[
'ticker' => 'VJET','stock_name' => 'VOXELJET AG-ADR'],
[
'ticker' => 'VKI','stock_name' => 'INVESCO AD MIT II'],
[
'ticker' => 'VKQ','stock_name' => 'INVESCO MUNICIPAL TRUST'],
[
'ticker' => 'VKTX','stock_name' => 'VIKING THERAPEUTICS INC'],
[
'ticker' => 'VLAT','stock_name' => 'VALOR LATITUDE ACQUISITION-A'],
[
'ticker' => 'VLATU','stock_name' => 'VALOR LATITUDE ACQUISITION C'],
[
'ticker' => 'VLCN','stock_name' => 'VOLCON INC'],
[
'ticker' => 'VLD','stock_name' => 'VELO3D INC'],
[
'ticker' => 'VLDR','stock_name' => 'VELODYNE LIDAR INC'],
[
'ticker' => 'VLGEA','stock_name' => 'VILLAGE SUPER MARKET-CLASS A'],
[
'ticker' => 'VLN','stock_name' => 'VALENS SEMICONDUCTOR LTD'],
[
'ticker' => 'VLO','stock_name' => 'VALERO ENERGY CORP'],
[
'ticker' => 'VLON','stock_name' => 'VALLON PHARMACEUTICALS INC'],
[
'ticker' => 'VLRS','stock_name' => 'CONTROLADORA VUELA CIA-ADR'],
[
'ticker' => 'VLT','stock_name' => 'INVESCO HIGH INCOME TRUST II'],
[
'ticker' => 'VLTA','stock_name' => 'VOLTA INC'],
[
'ticker' => 'VLU','stock_name' => 'SPDR S&P 1500 VALUE TILT ETF'],
[
'ticker' => 'VLUE','stock_name' => 'ISHARES MSCI USA VALUE FACTO'],
[
'ticker' => 'VLY','stock_name' => 'VALLEY NATIONAL BANCORP'],
[
'ticker' => 'VMAC','stock_name' => 'VISTAS MEDIA ACQUISITION C-A'],
[
'ticker' => 'VMACU','stock_name' => 'VISTAS MEDIA ACQUISITION CO'],
[
'ticker' => 'VMAR','stock_name' => 'VISION MARINE TECHNOLOGIES'],
[
'ticker' => 'VMBS','stock_name' => 'VANGUARD MORTGAGE-BACKED SEC'],
[
'ticker' => 'VMC','stock_name' => 'VULCAN MATERIALS CO'],
[
'ticker' => 'VMD','stock_name' => 'VIEMED HEALTHCARE INC'],
[
'ticker' => 'VMEO','stock_name' => 'VIMEO INC'],
[
'ticker' => 'VMI','stock_name' => 'VALMONT INDUSTRIES'],
[
'ticker' => 'VMM','stock_name' => 'DELAWARE INV MINN MUNI II'],
[
'ticker' => 'VMO','stock_name' => 'INVESCO MUNICIPAL OPPORTUNI'],
[
'ticker' => 'VMOT','stock_name' => 'ALPHA VALUE MOM TREND ETF'],
[
'ticker' => 'VMW','stock_name' => 'VMWARE INC-CLASS A'],
[
'ticker' => 'VNCE','stock_name' => 'VINCE HOLDING CORP'],
[
'ticker' => 'VNDA','stock_name' => 'VANDA PHARMACEUTICALS INC'],
[
'ticker' => 'VNE','stock_name' => 'VEONEER INC'],
[
'ticker' => 'VNET','stock_name' => 'VNET GROUP INC-ADR'],
[
'ticker' => 'VNLA','stock_name' => 'JANUS HENDERSON SHORT DURATI'],
[
'ticker' => 'VNM','stock_name' => 'VANECK VIETNAM ETF'],
[
'ticker' => 'VNMC','stock_name' => 'NATIXIS VAUGHAN NELSON MIDC'],
[
'ticker' => 'VNO','stock_name' => 'VORNADO REALTY TRUST'],
[
'ticker' => 'VNOM','stock_name' => 'VIPER ENERGY PARTNERS LP'],
[
'ticker' => 'VNQ','stock_name' => 'VANGUARD REAL ESTATE ETF'],
[
'ticker' => 'VNQI','stock_name' => 'VANGUARD GLBL EX-US REAL EST'],
[
'ticker' => 'VNRX','stock_name' => 'VOLITIONRX LTD'],
[
'ticker' => 'VNSE','stock_name' => 'NATIXIS VAUGHN NELSON SELECT'],
[
'ticker' => 'VNT','stock_name' => 'VONTIER CORP'],
[
'ticker' => 'VNTR','stock_name' => 'VENATOR MATERIALS PLC'],
[
'ticker' => 'VO','stock_name' => 'VANGUARD MID-CAP ETF'],
[
'ticker' => 'VOC','stock_name' => 'VOC ENERGY TRUST'],
[
'ticker' => 'VOD','stock_name' => 'VODAFONE GROUP PLC-SP ADR'],
[
'ticker' => 'VOE','stock_name' => 'VANGUARD MID-CAP VALUE ETF'],
[
'ticker' => 'VOLT','stock_name' => 'VOLT INFO SCIENCES INC'],
[
'ticker' => 'VONE','stock_name' => 'VANGUARD RUSSELL 1000'],
[
'ticker' => 'VONG','stock_name' => 'VANGUARD RUSSELL 1000 GROWTH'],
[
'ticker' => 'VONV','stock_name' => 'VANGUARD RUSSELL 1000 VALUE'],
[
'ticker' => 'VOO','stock_name' => 'VANGUARD S&P 500 ETF'],
[
'ticker' => 'VOOG','stock_name' => 'VANGUARD S&P 500 GROWTH ETF'],
[
'ticker' => 'VOOV','stock_name' => 'VANGUARD S&P 500 VALUE ETF'],
[
'ticker' => 'VOR','stock_name' => 'VOR BIOPHARMA INC'],
[
'ticker' => 'VOSO','stock_name' => 'VIRTUOSO ACQUISITION CORP -A'],
[
'ticker' => 'VOSOU','stock_name' => 'VIRTUOSO ACQUISITION CORP'],
[
'ticker' => 'VOT','stock_name' => 'VANGUARD MID-CAP GROWTH ETF'],
[
'ticker' => 'VOTE','stock_name' => 'ENGINE NO1 TRANSFORM 500 ETF'],
[
'ticker' => 'VOX','stock_name' => 'VANGUARD COMMUNICATION SERVI'],
[
'ticker' => 'VOXX','stock_name' => 'VOXX INTERNATIONAL CORP'],
[
'ticker' => 'VOYA','stock_name' => 'VOYA FINANCIAL INC'],
[
'ticker' => 'VPC','stock_name' => 'VIRTUS PRIVATE CREDIT STRATE'],
[
'ticker' => 'VPCB','stock_name' => 'VPC IMPACT ACQUISITION HOL-A'],
[
'ticker' => 'VPCBU','stock_name' => 'VPC IMPACT ACQUISITION HOLD'],
[
'ticker' => 'VPCC','stock_name' => 'VPC IMPACT ACQUISITION HOL-A'],
[
'ticker' => 'VPCC=','stock_name' => 'VPC IMPACT ACQUISITION HOLDI'],
[
'ticker' => 'VPG','stock_name' => 'VISHAY PRECISION GROUP'],
[
'ticker' => 'VPL','stock_name' => 'VANGUARD FTSE PACIFIC ETF'],
[
'ticker' => 'VPN','stock_name' => 'GLOBAL X DATA CENTER REITS'],
[
'ticker' => 'VPOP','stock_name' => 'SIMPLIFY VOLT POP CULT DISRU'],
[
'ticker' => 'VPU','stock_name' => 'VANGUARD UTILITIES ETF'],
[
'ticker' => 'VPV','stock_name' => 'INVESCO PENNSYLVANIA VALUE M'],
[
'ticker' => 'VQS','stock_name' => 'VIQ SOLUTIONS INC'],
[
'ticker' => 'VRA','stock_name' => 'VERA BRADLEY INC'],
[
'ticker' => 'VRAI','stock_name' => 'VIRTUS REAL ASSET INCOME ETF'],
[
'ticker' => 'VRAR','stock_name' => 'GLIMPSE GROUP INC/THE'],
[
'ticker' => 'VRAY','stock_name' => 'VIEWRAY INC'],
[
'ticker' => 'VRCA','stock_name' => 'VERRICA PHARMACEUTICALS INC'],
[
'ticker' => 'VRDN','stock_name' => 'VIRIDIAN THERAPEUTICS INC'],
[
'ticker' => 'VREX','stock_name' => 'VAREX IMAGING CORP'],
[
'ticker' => 'VRIG','stock_name' => 'INVESCO VARIABLE RATE INVEST'],
[
'ticker' => 'VRM','stock_name' => 'VROOM INC'],
[
'ticker' => 'VRME','stock_name' => 'VERIFYME INC'],
[
'ticker' => 'VRNA','stock_name' => 'VERONA PHARMA PLC - ADR'],
[
'ticker' => 'VRNS','stock_name' => 'VARONIS SYSTEMS INC'],
[
'ticker' => 'VRNT','stock_name' => 'VERINT SYSTEMS INC'],
[
'ticker' => 'VRP','stock_name' => 'INVESCO VARIABLE RATE PREFER'],
[
'ticker' => 'VRPX','stock_name' => 'VIRPAX PHARMACEUTICALS INC'],
[
'ticker' => 'VRRM','stock_name' => 'VERRA MOBILITY CORP'],
[
'ticker' => 'VRS','stock_name' => 'VERSO CORP - A'],
[
'ticker' => 'VRSK','stock_name' => 'VERISK ANALYTICS INC'],
[
'ticker' => 'VRSN','stock_name' => 'VERISIGN INC'],
[
'ticker' => 'VRT','stock_name' => 'VERTIV HOLDINGS CO'],
[
'ticker' => 'VRTS','stock_name' => 'VIRTUS INVESTMENT PARTNERS'],
[
'ticker' => 'VRTV','stock_name' => 'VERITIV CORP'],
[
'ticker' => 'VRTX','stock_name' => 'VERTEX PHARMACEUTICALS INC'],
[
'ticker' => 'VS','stock_name' => 'VERSUS SYSTEMS INC'],
[
'ticker' => 'VSACU','stock_name' => 'VISION SENSING ACQUISITION C'],
[
'ticker' => 'VSAT','stock_name' => 'VIASAT INC'],
[
'ticker' => 'VSCO','stock_name' => 'VICTORIA\'S SECRET & CO'],
[
'ticker' => 'VSDA','stock_name' => 'VICTORYSHARES DIVIDEND ACCEL'],
[
'ticker' => 'VSEC','stock_name' => 'VSE CORP'],
[
'ticker' => 'VSGX','stock_name' => 'VANGUARD ESG INTL STOCK ETF'],
[
'ticker' => 'VSH','stock_name' => 'VISHAY INTERTECHNOLOGY INC'],
[
'ticker' => 'VSL','stock_name' => 'VOLSHARES LARGE CAP ETF'],
[
'ticker' => 'VSLU','stock_name' => 'APPLIED FINANCE VALUATION'],
[
'ticker' => 'VSMV','stock_name' => 'VICTORYSHARES US MIN VOL ETF'],
[
'ticker' => 'VSPY','stock_name' => 'VECTORSHARES MIN VOL ETF'],
[
'ticker' => 'VSS','stock_name' => 'VANGUARD FTSE ALL WO X-US SC'],
[
'ticker' => 'VST','stock_name' => 'VISTRA CORP'],
[
'ticker' => 'VSTA','stock_name' => 'VASTA PLATFORM LTD'],
[
'ticker' => 'VSTM','stock_name' => 'VERASTEM INC'],
[
'ticker' => 'VSTO','stock_name' => 'VISTA OUTDOOR INC'],
[
'ticker' => 'VT','stock_name' => 'VANGUARD TOT WORLD STK ETF'],
[
'ticker' => 'VTAQ','stock_name' => 'VENTOUX CCM ACQUISITION CORP'],
[
'ticker' => 'VTAQR','stock_name' => 'VENTOUX CCM ACQUISITION-RGT'],
[
'ticker' => 'VTAQU','stock_name' => 'VENTOUX CCM ACQUISITION CORP'],
[
'ticker' => 'VTC','stock_name' => 'VANGUARD TOTAL CORPORATE BND'],
[
'ticker' => 'VTEB','stock_name' => 'VANGUARD TAX-EXEMPT BOND ETF'],
[
'ticker' => 'VTEX','stock_name' => 'VTEX -CLASS A'],
[
'ticker' => 'VTGN','stock_name' => 'VISTAGEN THERAPEUTICS INC'],
[
'ticker' => 'VTHR','stock_name' => 'VANGUARD RUSSELL 3000'],
[
'ticker' => 'VTI','stock_name' => 'VANGUARD TOTAL STOCK MKT ETF'],
[
'ticker' => 'VTIP','stock_name' => 'VANGUARD SHORT-TERM TIPS'],
[
'ticker' => 'VTIQ','stock_name' => 'VECTOIQ ACQUISITION CO-CL A'],
[
'ticker' => 'VTIQU','stock_name' => 'VECTOIQ ACQUISITION CORP II'],
[
'ticker' => 'VTN','stock_name' => 'INVESCO TRUST FOR INVESTMENT'],
[
'ticker' => 'VTNR','stock_name' => 'VERTEX ENERGY INC'],
[
'ticker' => 'VTOL','stock_name' => 'BRISTOW GROUP INC'],
[
'ticker' => 'VTR','stock_name' => 'VENTAS INC'],
[
'ticker' => 'VTRS','stock_name' => 'VIATRIS INC'],
[
'ticker' => 'VTRU','stock_name' => 'VITRU LTD'],
[
'ticker' => 'VTSI','stock_name' => 'VIRTRA INC'],
[
'ticker' => 'VTV','stock_name' => 'VANGUARD VALUE ETF'],
[
'ticker' => 'VTVT','stock_name' => 'VTV THERAPEUTICS INC- CL A'],
[
'ticker' => 'VTWG','stock_name' => 'VANGUARD RUSSELL 2000 GROWTH'],
[
'ticker' => 'VTWO','stock_name' => 'VANGUARD RUSSELL 2000 ETF'],
[
'ticker' => 'VTWV','stock_name' => 'VANGUARD RUSSELL 2000 VALUE'],
[
'ticker' => 'VTYX','stock_name' => 'VENTYX BIOSCIENCES INC'],
[
'ticker' => 'VUG','stock_name' => 'VANGUARD GROWTH ETF'],
[
'ticker' => 'VUSB','stock_name' => 'VANGUARD ULTRA SHORT BOND ET'],
[
'ticker' => 'VUSE','stock_name' => 'VIDENT CORE US EQUITY ETF'],
[
'ticker' => 'VUZI','stock_name' => 'VUZIX CORP'],
[
'ticker' => 'VV','stock_name' => 'VANGUARD LARGE-CAP ETF'],
[
'ticker' => 'VVI','stock_name' => 'VIAD CORP'],
[
'ticker' => 'VVNT','stock_name' => 'VIVINT SMART HOME INC'],
[
'ticker' => 'VVOS','stock_name' => 'VIVOS THERAPEUTICS INC'],
[
'ticker' => 'VVPR','stock_name' => 'VIVOPOWER INTERNATIONAL PLC'],
[
'ticker' => 'VVR','stock_name' => 'INVESCO SENIOR INCOME TRUST'],
[
'ticker' => 'VVV','stock_name' => 'VALVOLINE INC'],
[
'ticker' => 'VWE','stock_name' => 'VINTAGE WINE ESTATES INC'],
[
'ticker' => 'VWID','stock_name' => 'VIRTUS WMC INTERNATIONAL DIV'],
[
'ticker' => 'VWO','stock_name' => 'VANGUARD FTSE EMERGING MARKE'],
[
'ticker' => 'VWOB','stock_name' => 'VANGUARD EMERG MKTS GOV BND'],
[
'ticker' => 'VWTR','stock_name' => 'VIDLER WATER RESOUCES INC'],
[
'ticker' => 'VXF','stock_name' => 'VANGUARD EXTENDED MARKET ETF'],
[
'ticker' => 'VXRT','stock_name' => 'VAXART INC'],
[
'ticker' => 'VXUS','stock_name' => 'VANGUARD TOTAL INTL STOCK'],
[
'ticker' => 'VXX','stock_name' => 'IPATH SERIES B S&P 500 VIX'],
[
'ticker' => 'VXZ','stock_name' => 'IPATH SER B S&P 500 VIX M/T'],
[
'ticker' => 'VYGG','stock_name' => 'VY GLOBAL GROWTH-CL A'],
[
'ticker' => 'VYGG=','stock_name' => 'VY GLOBAL GROWTH'],
[
'ticker' => 'VYGR','stock_name' => 'VOYAGER THERAPEUTICS INC'],
[
'ticker' => 'VYM','stock_name' => 'VANGUARD HIGH DVD YIELD ETF'],
[
'ticker' => 'VYMI','stock_name' => 'VANGUARD INT HIGH DVD YLD IN'],
[
'ticker' => 'VYNE','stock_name' => 'VYNE THERAPEUTICS INC'],
[
'ticker' => 'VYNT','stock_name' => 'VYANT BIO INC'],
[
'ticker' => 'VZ','stock_name' => 'VERIZON COMMUNICATIONS INC'],
[
'ticker' => 'VZIO','stock_name' => 'VIZIO HOLDING  CORP-A'],
[
'ticker' => 'W','stock_name' => 'WAYFAIR INC- CLASS A'],
[
'ticker' => 'WAB','stock_name' => 'WABTEC CORP'],
[
'ticker' => 'WABC','stock_name' => 'WESTAMERICA BANCORPORATION'],
[
'ticker' => 'WAFD','stock_name' => 'WASHINGTON FEDERAL INC'],
[
'ticker' => 'WAFU','stock_name' => 'WAH FU EDUCATION GROUP LTD'],
[
'ticker' => 'WAL','stock_name' => 'WESTERN ALLIANCE BANCORP'],
[
'ticker' => 'WALD','stock_name' => 'WALDENCAST ACQUISITION COR-A'],
[
'ticker' => 'WALDU','stock_name' => 'WALDENCAST ACQUISITION CORP'],
[
'ticker' => 'WANT','stock_name' => 'DRX DLY CONS DISC BULL 3X'],
[
'ticker' => 'WARR','stock_name' => 'WARRIOR TECHNOLOGIES ACQ-A'],
[
'ticker' => 'WARR=','stock_name' => 'WARRIOR TECHNOLOGIES ACQUISI'],
[
'ticker' => 'WASH','stock_name' => 'WASHINGTON TRUST BANCORP'],
[
'ticker' => 'WAT','stock_name' => 'WATERS CORP'],
[
'ticker' => 'WATT','stock_name' => 'ENERGOUS CORP'],
[
'ticker' => 'WAVC','stock_name' => 'WAVERLEY CAPITAL ACQUISITI-A'],
[
'ticker' => 'WAVC=','stock_name' => 'WAVERLEY CAPITAL ACQUISITION'],
[
'ticker' => 'WAVE','stock_name' => 'ECO WAVE POWER GLOBAL AB-ADR'],
[
'ticker' => 'WB','stock_name' => 'WEIBO CORP-SPON ADR'],
[
'ticker' => 'WBA','stock_name' => 'WALGREENS BOOTS ALLIANCE INC'],
[
'ticker' => 'WBIF','stock_name' => 'WBI BULLBEAR VALUE 3000 ETF'],
[
'ticker' => 'WBIG','stock_name' => 'WBI BULLBEAR YIELD 3000 ETF'],
[
'ticker' => 'WBII','stock_name' => 'WBI BULLBEAR GLOBAL INCOME E'],
[
'ticker' => 'WBIL','stock_name' => 'WBI BULLBEAR QUALITY 3000 ET'],
[
'ticker' => 'WBIT','stock_name' => 'WBI BULLBEAR TREND S US 3000'],
[
'ticker' => 'WBIY','stock_name' => 'WBI POWER FACTOR HIGH DIV'],
[
'ticker' => 'WBK','stock_name' => 'WESTPAC BANKING CORP-SP ADR'],
[
'ticker' => 'WBND','stock_name' => 'WESTERN ASSET TOTAL RETURN E'],
[
'ticker' => 'WBS','stock_name' => 'WEBSTER FINANCIAL CORP'],
[
'ticker' => 'WBT','stock_name' => 'WELBILT INC'],
[
'ticker' => 'WBX','stock_name' => 'WALLBOX NV'],
[
'ticker' => 'WCBR','stock_name' => 'WISDOMTREE CYBERSECURITY FND'],
[
'ticker' => 'WCC','stock_name' => 'WESCO INTERNATIONAL INC'],
[
'ticker' => 'WCLD','stock_name' => 'WISDOMTREE CLOUD COMPUTING'],
[
'ticker' => 'WCN','stock_name' => 'WASTE CONNECTIONS INC'],
[
'ticker' => 'WD','stock_name' => 'WALKER & DUNLOP INC'],
[
'ticker' => 'WDAY','stock_name' => 'WORKDAY INC-CLASS A'],
[
'ticker' => 'WDC','stock_name' => 'WESTERN DIGITAL CORP'],
[
'ticker' => 'WDFC','stock_name' => 'WD-40 CO'],
[
'ticker' => 'WDH','stock_name' => 'WATERDROP INC'],
[
'ticker' => 'WDI','stock_name' => 'WESTERN ASSET DIVERS INC'],
[
'ticker' => 'WDIV','stock_name' => 'SPDR S&P GLOBAL DIVIDEND ETF'],
[
'ticker' => 'WDNA','stock_name' => 'WISDOMTREE BIOREVOLUTION FND'],
[
'ticker' => 'WE','stock_name' => 'WEWORK INC'],
[
'ticker' => 'WEA','stock_name' => 'WESTERN ASSET PREMIER BOND'],
[
'ticker' => 'WEAT','stock_name' => 'TEUCRIUM WHEAT FUND'],
[
'ticker' => 'WEBL','stock_name' => 'DIREXION DAILY DOW JONES INT'],
[
'ticker' => 'WEBR','stock_name' => 'WEBER INC - CLASS A'],
[
'ticker' => 'WEBS','stock_name' => 'DIREXION DAILY DOW JONES INT'],
[
'ticker' => 'WEC','stock_name' => 'WEC ENERGY GROUP INC'],
[
'ticker' => 'WEI','stock_name' => 'WEIDAI LTD-ADR'],
[
'ticker' => 'WELL','stock_name' => 'WELLTOWER INC'],
[
'ticker' => 'WEN','stock_name' => 'WENDY\'S CO/THE'],
[
'ticker' => 'WERN','stock_name' => 'WERNER ENTERPRISES INC'],
[
'ticker' => 'WES','stock_name' => 'WESTERN MIDSTREAM PARTNERS L'],
[
'ticker' => 'WETF','stock_name' => 'WISDOMTREE INVESTMENTS INC'],
[
'ticker' => 'WEX','stock_name' => 'WEX INC'],
[
'ticker' => 'WEYS','stock_name' => 'WEYCO GROUP INC'],
[
'ticker' => 'WF','stock_name' => 'WOORI FINANCIAL-SPON ADR'],
[
'ticker' => 'WFC','stock_name' => 'WELLS FARGO & CO'],
[
'ticker' => 'WFCF','stock_name' => 'WHERE FOOD COMES FROM INC'],
[
'ticker' => 'WFG','stock_name' => 'WEST FRASER TIMBER CO LTD'],
[
'ticker' => 'WFH','stock_name' => 'DIREXION WORK FROM HOME ETF'],
[
'ticker' => 'WFHY','stock_name' => 'WISDOMTREE US HIGH YIELD COR'],
[
'ticker' => 'WFIG','stock_name' => 'WISDOMTREE US CORPORATE BOND'],
[
'ticker' => 'WFRD','stock_name' => 'WEATHERFORD INTERNATIONAL PL'],
[
'ticker' => 'WGLD','stock_name' => 'WSHARES ENHANCED GOLD ETF'],
[
'ticker' => 'WGO','stock_name' => 'WINNEBAGO INDUSTRIES'],
[
'ticker' => 'WGRO','stock_name' => 'WISDOMTREE US GROWTH AND MOM'],
[
'ticker' => 'WH','stock_name' => 'WYNDHAM HOTELS & RESORTS INC'],
[
'ticker' => 'WHD','stock_name' => 'CACTUS INC - A'],
[
'ticker' => 'WHF','stock_name' => 'WHITEHORSE FINANCE INC'],
[
'ticker' => 'WHG','stock_name' => 'WESTWOOD HOLDINGS GROUP INC'],
[
'ticker' => 'WHLM','stock_name' => 'WILHELMINA INTERNATIONAL INC'],
[
'ticker' => 'WHLR','stock_name' => 'WHEELER REAL ESTATE INVESTME'],
[
'ticker' => 'WHR','stock_name' => 'WHIRLPOOL CORP'],
[
'ticker' => 'WIA','stock_name' => 'WESTERN ASSET INFL-LINK SEC'],
[
'ticker' => 'WIL','stock_name' => 'IPATH WOMEN IN LEADERSHIP ET'],
[
'ticker' => 'WILC','stock_name' => 'G. WILLI-FOOD INTERNATIONAL'],
[
'ticker' => 'WIMI','stock_name' => 'WIMI HOLOGRAM CLOUD INC-ADR'],
[
'ticker' => 'WINA','stock_name' => 'WINMARK CORP'],
[
'ticker' => 'WINC','stock_name' => 'WESTERN ASSET ST DUR INC ETF'],
[
'ticker' => 'WING','stock_name' => 'WINGSTOP INC'],
[
'ticker' => 'WINT','stock_name' => 'WINDTREE THERAPEUTICS INC'],
[
'ticker' => 'WINV','stock_name' => 'WINVEST ACQUISITION CORP'],
[
'ticker' => 'WINVR','stock_name' => 'WINVEST ACQUISITION CORP-RTS'],
[
'ticker' => 'WINVU','stock_name' => 'WINVEST ACQUISITION CORP'],
[
'ticker' => 'WIP','stock_name' => 'SPDR FTSE INTERNATIONAL GOVE'],
[
'ticker' => 'WIRE','stock_name' => 'ENCORE WIRE CORP'],
[
'ticker' => 'WISA','stock_name' => 'SUMMIT WIRELESS TECHNOLOGIES'],
[
'ticker' => 'WISH','stock_name' => 'CONTEXTLOGIC INC - A'],
[
'ticker' => 'WIT','stock_name' => 'WIPRO LTD-ADR'],
[
'ticker' => 'WIW','stock_name' => 'WESTERN ASSET INFL-LINK OPPS'],
[
'ticker' => 'WIX','stock_name' => 'WIX.COM LTD'],
[
'ticker' => 'WIZ','stock_name' => 'MERLYN AI BULL-RIDER BEAR-FI'],
[
'ticker' => 'WK','stock_name' => 'WORKIVA INC'],
[
'ticker' => 'WKEY','stock_name' => 'WISEKEY INTL HOLDINGS-ADR'],
[
'ticker' => 'WKHS','stock_name' => 'WORKHORSE GROUP INC'],
[
'ticker' => 'WKLY','stock_name' => 'SOFI WEEKLY DIVIDEND ETF'],
[
'ticker' => 'WKME','stock_name' => 'WALKME LTD'],
[
'ticker' => 'WKSP','stock_name' => 'WORKSPORT LTD'],
[
'ticker' => 'WLDN','stock_name' => 'WILLDAN GROUP INC'],
[
'ticker' => 'WLDR','stock_name' => 'AFFINITY WORLD LEADERS EQUIT'],
[
'ticker' => 'WLFC','stock_name' => 'WILLIS LEASE FINANCE CORP'],
[
'ticker' => 'WLK','stock_name' => 'WESTLAKE CHEMICAL CORP'],
[
'ticker' => 'WLKP','stock_name' => 'WESTLAKE CHEMICAL PARTNERS L'],
[
'ticker' => 'WLL','stock_name' => 'WHITING PETROLEUM CORP'],
[
'ticker' => 'WLMS','stock_name' => 'WILLIAMS INDUSTRIAL SERVICES'],
[
'ticker' => 'WLTH','stock_name' => 'LIFEGOAL WEALTH BUILDER ETF'],
[
'ticker' => 'WLTW','stock_name' => 'WILLIS TOWERS WATSON PLC'],
[
'ticker' => 'WM','stock_name' => 'WASTE MANAGEMENT INC'],
[
'ticker' => 'WMB','stock_name' => 'WILLIAMS COS INC'],
[
'ticker' => 'WMC','stock_name' => 'WESTERN ASSET MORTGAGE CAPIT'],
[
'ticker' => 'WMG','stock_name' => 'WARNER MUSIC GROUP CORP-CL A'],
[
'ticker' => 'WMK','stock_name' => 'WEIS MARKETS INC'],
[
'ticker' => 'WMPN','stock_name' => 'WILLIAM PENN BANCORP'],
[
'ticker' => 'WMS','stock_name' => 'ADVANCED DRAINAGE SYSTEMS IN'],
[
'ticker' => 'WMT','stock_name' => 'WALMART INC'],
[
'ticker' => 'WNC','stock_name' => 'WABASH NATIONAL CORP'],
[
'ticker' => 'WNDY','stock_name' => 'GLOBAL X WIND ENERGY ETF'],
[
'ticker' => 'WNEB','stock_name' => 'WESTERN NEW ENGLAND BANCORP'],
[
'ticker' => 'WNS','stock_name' => 'WNS HOLDINGS LTD-ADR'],
[
'ticker' => 'WNW','stock_name' => 'WUNONG NET TECHNOLOGY CO LTD'],
[
'ticker' => 'WOLF','stock_name' => 'WOLFSPEED INC'],
[
'ticker' => 'WOMN','stock_name' => 'IMPACT SHARES YWCA WOMEN\'S E'],
[
'ticker' => 'WOOD','stock_name' => 'ISHARES GLOBAL TIMBER & FORE'],
[
'ticker' => 'WOOF','stock_name' => 'PETCO HEALTH AND WELLNESS CO'],
[
'ticker' => 'WOR','stock_name' => 'WORTHINGTON INDUSTRIES'],
[
'ticker' => 'WORX','stock_name' => 'SCWORX CORP'],
[
'ticker' => 'WOW','stock_name' => 'WIDEOPENWEST INC'],
[
'ticker' => 'WPC','stock_name' => 'WP CAREY INC'],
[
'ticker' => 'WPCA','stock_name' => 'WARBURG PINCUS CAPITAL COR-A'],
[
'ticker' => 'WPCA=','stock_name' => 'WARBURG PINCUS CAPITAL CORP'],
[
'ticker' => 'WPCB','stock_name' => 'WARBURG PINCUS CAPITAL I-B'],
[
'ticker' => 'WPCB=','stock_name' => 'WARBURG PINCUS CAPITAL COR B'],
[
'ticker' => 'WPM','stock_name' => 'WHEATON PRECIOUS METALS CORP'],
[
'ticker' => 'WPP','stock_name' => 'WPP PLC-SPONSORED ADR'],
[
'ticker' => 'WPRT','stock_name' => 'WESTPORT FUEL SYSTEMS INC'],
[
'ticker' => 'WPS','stock_name' => 'ISHARES INTERNATIONAL DEVELO'],
[
'ticker' => 'WQGA','stock_name' => 'WORLD QUANTUM GROWTH ACQUI-A'],
[
'ticker' => 'WQGA=','stock_name' => 'WORLD QUANTUM GROWTH ACQUISI'],
[
'ticker' => 'WRAC','stock_name' => 'WILLIAMS ROWLAND ACQUISITION'],
[
'ticker' => 'WRAC=','stock_name' => 'WILLIAMS ROWLAND ACQUISITION'],
[
'ticker' => 'WRAP','stock_name' => 'WRAP TECHNOLOGIES INC'],
[
'ticker' => 'WRB','stock_name' => 'WR BERKLEY CORP'],
[
'ticker' => 'WRBY','stock_name' => 'WARBY PARKER INC-CLASS A'],
[
'ticker' => 'WRE','stock_name' => 'WASHINGTON REIT'],
[
'ticker' => 'WRK','stock_name' => 'WESTROCK CO'],
[
'ticker' => 'WRLD','stock_name' => 'WORLD ACCEPTANCE CORP'],
[
'ticker' => 'WRN','stock_name' => 'WESTERN COPPER AND GOLD CORP'],
[
'ticker' => 'WSBC','stock_name' => 'WESBANCO INC'],
[
'ticker' => 'WSBF','stock_name' => 'WATERSTONE FINANCIAL INC'],
[
'ticker' => 'WSC','stock_name' => 'WILLSCOT MOBILE MINI HOLDING'],
[
'ticker' => 'WSFS','stock_name' => 'WSFS FINANCIAL CORP'],
[
'ticker' => 'WSM','stock_name' => 'WILLIAMS-SONOMA INC'],
[
'ticker' => 'WSO','stock_name' => 'WATSCO INC'],
[
'ticker' => 'WSO.B','stock_name' => 'WATSCO INC  -CL B'],
[
'ticker' => 'WSR','stock_name' => 'WHITESTONE REIT'],
[
'ticker' => 'WST','stock_name' => 'WEST PHARMACEUTICAL SERVICES'],
[
'ticker' => 'WSTG','stock_name' => 'WAYSIDE TECHNOLOGY GROUP INC'],
[
'ticker' => 'WTBA','stock_name' => 'WEST BANCORPORATION'],
[
'ticker' => 'WTER','stock_name' => 'ALKALINE WATER CO INC/THE'],
[
'ticker' => 'WTFC','stock_name' => 'WINTRUST FINANCIAL CORP'],
[
'ticker' => 'WTI','stock_name' => 'W&T OFFSHORE INC'],
[
'ticker' => 'WTM','stock_name' => 'WHITE MOUNTAINS INSURANCE GP'],
[
'ticker' => 'WTMF','stock_name' => 'WISDOMTREE MGD FUTURES STRAT'],
[
'ticker' => 'WTRG','stock_name' => 'ESSENTIAL UTILITIES INC'],
[
'ticker' => 'WTRH','stock_name' => 'WAITR HOLDINGS INC'],
[
'ticker' => 'WTS','stock_name' => 'WATTS WATER TECHNOLOGIES-A'],
[
'ticker' => 'WTT','stock_name' => 'WIRELESS TELECOM GROUP INC'],
[
'ticker' => 'WTTR','stock_name' => 'SELECT ENERGY SERVICES INC-A'],
[
'ticker' => 'WU','stock_name' => 'WESTERN UNION CO'],
[
'ticker' => 'WUGI','stock_name' => 'ESOTERICA NEXTG ECONOMY ETF'],
[
'ticker' => 'WVE','stock_name' => 'WAVE LIFE SCIENCES LTD'],
[
'ticker' => 'WVFC','stock_name' => 'WVS FINANCIAL CORP'],
[
'ticker' => 'WVVI','stock_name' => 'WILLAMETTE VALLEY VINEYARDS'],
[
'ticker' => 'WW','stock_name' => 'WW INTERNATIONAL INC'],
[
'ticker' => 'WWACU','stock_name' => 'WORLDWIDE WEBB ACQUISITION C'],
[
'ticker' => 'WWD','stock_name' => 'WOODWARD INC'],
[
'ticker' => 'WWE','stock_name' => 'WORLD WRESTLING ENTERTAIN-A'],
[
'ticker' => 'WWJD','stock_name' => 'INSPIRE INTERNATIONAL ESG ET'],
[
'ticker' => 'WWOW','stock_name' => 'DIREXION WORLD WITHOUT WASTE'],
[
'ticker' => 'WWR','stock_name' => 'WESTWATER RESOURCES INC'],
[
'ticker' => 'WWW','stock_name' => 'WOLVERINE WORLD WIDE INC'],
[
'ticker' => 'WY','stock_name' => 'WEYERHAEUSER CO'],
[
'ticker' => 'WYNN','stock_name' => 'WYNN RESORTS LTD'],
[
'ticker' => 'WYY','stock_name' => 'WIDEPOINT CORP'],
[
'ticker' => 'X','stock_name' => 'UNITED STATES STEEL CORP'],
[
'ticker' => 'XAIR','stock_name' => 'BEYOND AIR INC'],
[
'ticker' => 'XAR','stock_name' => 'SPDR S&P AEROSPACE & DEF ETF'],
[
'ticker' => 'XBAP','stock_name' => 'INNOVATOR US EQY ACCEL 9 BUF'],
[
'ticker' => 'XBI','stock_name' => 'SPDR S&P BIOTECH ETF'],
[
'ticker' => 'XBIO','stock_name' => 'XENETIC BIOSCIENCES INC'],
[
'ticker' => 'XBIT','stock_name' => 'XBIOTECH INC'],
[
'ticker' => 'XBJL','stock_name' => 'INN US EQ ACC 9 BUFF JULY'],
[
'ticker' => 'XBOC','stock_name' => 'INNOVATOR US EQY ACC 9 BUFF'],
[
'ticker' => 'XBUY','stock_name' => 'AMPLIFY INTL ONLINE RETAIL'],
[
'ticker' => 'XCEM','stock_name' => 'COLUMBIA EM CORE EX-CHINA ET'],
[
'ticker' => 'XCLR','stock_name' => 'GLOBAL X S&P 500 COLLAR 95-1'],
[
'ticker' => 'XCUR','stock_name' => 'EXICURE INC'],
[
'ticker' => 'XDAP','stock_name' => 'INNOVATOR US EQY ACCEL-APR'],
[
'ticker' => 'XDAT','stock_name' => 'FRANKLIN EXPONENTIAL DATA'],
[
'ticker' => 'XDIV','stock_name' => 'METAURUS US EQUITY EX DIVIDE'],
[
'ticker' => 'XDJL','stock_name' => 'INN US EQ ACCELERATED JULY'],
[
'ticker' => 'XDOC','stock_name' => 'INNOVATOR US EQUITY ACCEL OC'],
[
'ticker' => 'XDQQ','stock_name' => 'INNOVATOR GRW 100 ACCEL QTR'],
[
'ticker' => 'XDSQ','stock_name' => 'INNOVATOR US EQY ACCL-QUART'],
[
'ticker' => 'XEL','stock_name' => 'XCEL ENERGY INC'],
[
'ticker' => 'XELA','stock_name' => 'EXELA TECHNOLOGIES INC'],
[
'ticker' => 'XELB','stock_name' => 'XCEL BRANDS INC'],
[
'ticker' => 'XENE','stock_name' => 'XENON PHARMACEUTICALS INC'],
[
'ticker' => 'XENT','stock_name' => 'INTERSECT ENT INC'],
[
'ticker' => 'XERS','stock_name' => 'XERIS BIOPHARMA HOLDINGS INC'],
[
'ticker' => 'XES','stock_name' => 'SPDR OIL & GAS EQUIP & SERV'],
[
'ticker' => 'XFINU','stock_name' => 'EXCELFIN ACQUISITION CORP'],
[
'ticker' => 'XFLT','stock_name' => 'XAI OCTAGON FLOATING RATE AL'],
[
'ticker' => 'XFOR','stock_name' => 'X4 PHARMACEUTICALS INC'],
[
'ticker' => 'XGN','stock_name' => 'EXAGEN INC'],
[
'ticker' => 'XHB','stock_name' => 'SPDR S&P HOMEBUILDERS ETF'],
[
'ticker' => 'XHE','stock_name' => 'SPDR S&P HEALTH CARE EQUIPME'],
[
'ticker' => 'XHR','stock_name' => 'XENIA HOTELS & RESORTS INC'],
[
'ticker' => 'XHS','stock_name' => 'SPDR S&P HEALTH CARE SER ETF'],
[
'ticker' => 'XIN','stock_name' => 'XINYUAN REAL ESTATE CO L-ADR'],
[
'ticker' => 'XITK','stock_name' => 'SPDR FACTSET INNOVATIVE TECH'],
[
'ticker' => 'XJH','stock_name' => 'ISHARES ESG SCREEN S&P MID'],
[
'ticker' => 'XJR','stock_name' => 'ISHARES ESG SCREEN SP SMALL'],
[
'ticker' => 'XJUN','stock_name' => 'FT CBOE VEST US EQUITY ENHAN'],
[
'ticker' => 'XL','stock_name' => 'XL FLEET CORP'],
[
'ticker' => 'XLB','stock_name' => 'MATERIALS SELECT SECTOR SPDR'],
[
'ticker' => 'XLC','stock_name' => 'COMM SERV SELECT SECTOR SPDR'],
[
'ticker' => 'XLE','stock_name' => 'ENERGY SELECT SECTOR SPDR'],
[
'ticker' => 'XLF','stock_name' => 'FINANCIAL SELECT SECTOR SPDR'],
[
'ticker' => 'XLG','stock_name' => 'INVESCO S&P 500 TOP 50 ETF'],
[
'ticker' => 'XLI','stock_name' => 'INDUSTRIAL SELECT SECT SPDR'],
[
'ticker' => 'XLK','stock_name' => 'TECHNOLOGY SELECT SECT SPDR'],
[
'ticker' => 'XLNX','stock_name' => 'XILINX INC'],
[
'ticker' => 'XLO','stock_name' => 'XILIO THERAPEUTICS INC'],
[
'ticker' => 'XLP','stock_name' => 'CONSUMER STAPLES SPDR'],
[
'ticker' => 'XLRE','stock_name' => 'REAL ESTATE SELECT SECT SPDR'],
[
'ticker' => 'XLRN','stock_name' => 'ACCELERON PHARMA INC'],
[
'ticker' => 'XLSR','stock_name' => 'SPDR SSGA US SECTOR ROTATE'],
[
'ticker' => 'XLU','stock_name' => 'UTILITIES SELECT SECTOR SPDR'],
[
'ticker' => 'XLV','stock_name' => 'HEALTH CARE SELECT SECTOR'],
[
'ticker' => 'XLY','stock_name' => 'CONSUMER DISCRETIONARY SELT'],
[
'ticker' => 'XM','stock_name' => 'QUALTRICS INTERNATIONAL-CL A'],
[
'ticker' => 'XME','stock_name' => 'SPDR S&P METALS & MINING ETF'],
[
'ticker' => 'XMHQ','stock_name' => 'INVESCO S&P MIDCAP QUALITY E'],
[
'ticker' => 'XMLV','stock_name' => 'INVESCO S&P MIDCAP LOW VOLAT'],
[
'ticker' => 'XMMO','stock_name' => 'INVESCO S&P MIDCAP MOMENTUM'],
[
'ticker' => 'XMPT','stock_name' => 'VANECK CEF MUNI INCOME ETF'],
[
'ticker' => 'XMTR','stock_name' => 'XOMETRY INC-A'],
[
'ticker' => 'XMVM','stock_name' => 'INVESCO S&P MIDCAP VALUE WIT'],
[
'ticker' => 'XNCR','stock_name' => 'XENCOR INC'],
[
'ticker' => 'XNET','stock_name' => 'XUNLEI LTD-ADR'],
[
'ticker' => 'XNTK','stock_name' => 'SPDR NYSE TECHNOLOGY ETF'],
[
'ticker' => 'XOM','stock_name' => 'EXXON MOBIL CORP'],
[
'ticker' => 'XOMA','stock_name' => 'XOMA CORP'],
[
'ticker' => 'XONE','stock_name' => 'EXONE CO/THE'],
[
'ticker' => 'XOP','stock_name' => 'SPDR S&P OIL & GAS EXP & PR'],
[
'ticker' => 'XOS','stock_name' => 'XOS INC'],
[
'ticker' => 'XOUT','stock_name' => 'GRANITESHARES XOUT US L/C'],
[
'ticker' => 'XP','stock_name' => 'XP INC - CLASS A'],
[
'ticker' => 'XPAX','stock_name' => 'XPAC ACQUISITION CORP-A'],
[
'ticker' => 'XPAXU','stock_name' => 'XPAC ACQUISITION CORP'],
[
'ticker' => 'XPDI','stock_name' => 'POWER & DIGITAL INFRAST-CL A'],
[
'ticker' => 'XPDIU','stock_name' => 'POWER & DIGITAL INFRASTRUCTU'],
[
'ticker' => 'XPEL','stock_name' => 'XPEL INC'],
[
'ticker' => 'XPER','stock_name' => 'XPERI HOLDING CORP'],
[
'ticker' => 'XPEV','stock_name' => 'XPENG INC - ADR'],
[
'ticker' => 'XPH','stock_name' => 'SPDR S&P PHARMACEUTICALS ETF'],
[
'ticker' => 'XPL','stock_name' => 'SOLITARIO ZINC CORP'],
[
'ticker' => 'XPND','stock_name' => 'FIRST TRUST EXPANDED TECH'],
[
'ticker' => 'XPO','stock_name' => 'XPO LOGISTICS INC'],
[
'ticker' => 'XPOA','stock_name' => 'DPCM CAPITAL INC - CLASS A'],
[
'ticker' => 'XPOA=','stock_name' => 'DPCM CAPITAL INC'],
[
'ticker' => 'XPOF','stock_name' => 'XPONENTIAL FITNESS INC-A'],
[
'ticker' => 'XPP','stock_name' => 'PROSHARES ULTRA FTSE CHINA50'],
[
'ticker' => 'XPRO','stock_name' => 'EXPRO GROUP HOLDINGS NV'],
[
'ticker' => 'XRAY','stock_name' => 'DENTSPLY SIRONA INC'],
[
'ticker' => 'XRLV','stock_name' => 'INVESCO S&P 500 EX-RATE SENS'],
[
'ticker' => 'XRMI','stock_name' => 'GLOBAL X S&P 500 RISK MANAGE'],
[
'ticker' => 'XRT','stock_name' => 'SPDR S&P RETAIL ETF'],
[
'ticker' => 'XRTX','stock_name' => 'XORTX THERAPEUTICS INC'],
[
'ticker' => 'XRX','stock_name' => 'XEROX HOLDINGS CORP'],
[
'ticker' => 'XSD','stock_name' => 'SPDR S&P SEMICONDUCTOR ETF'],
[
'ticker' => 'XSHD','stock_name' => 'INVESCO S&P SMALLCAP HIGH DI'],
[
'ticker' => 'XSHQ','stock_name' => 'INVESCO S&P SMALLCAP QUALITY'],
[
'ticker' => 'XSLV','stock_name' => 'INVESCO S&P SMALLCAP LOW VOL'],
[
'ticker' => 'XSMO','stock_name' => 'INVESCO S&P SMALLCAP MOMENTU'],
[
'ticker' => 'XSOE','stock_name' => 'WISDMTREE EMERG MKT EX-ST OW'],
[
'ticker' => 'XSPA','stock_name' => 'XPRESSPA GROUP INC'],
[
'ticker' => 'XSVM','stock_name' => 'INVESCO S&P SMALLCAP VALUE W'],
[
'ticker' => 'XSW','stock_name' => 'SPDR S&P SOFTWARE & SER ETF'],
[
'ticker' => 'XT','stock_name' => 'ISHARES EXPONENTIAL TECH ETF'],
[
'ticker' => 'XTAP','stock_name' => 'INNOVATOR US EQTY ACCEL PL'],
[
'ticker' => 'XTJL','stock_name' => 'INN US EQ ACCEL PLUS JULY'],
[
'ticker' => 'XTL','stock_name' => 'SPDR S&P TELECOM ETF'],
[
'ticker' => 'XTLB','stock_name' => 'XTL BIOPHARMACEUTICALS-ADR'],
[
'ticker' => 'XTN','stock_name' => 'SPDR S&P TRANSPORTATION ETF'],
[
'ticker' => 'XTNT','stock_name' => 'XTANT MEDICAL HOLDINGS INC'],
[
'ticker' => 'XTOC','stock_name' => 'INNOVATOR US EQY ACCEL PL-OC'],
[
'ticker' => 'XTR','stock_name' => 'GLOBAL X S&P 500 TAIL RISK E'],
[
'ticker' => 'XVOL','stock_name' => 'ACRUENCE ACTIVE HEDGE US ETF'],
[
'ticker' => 'XVV','stock_name' => 'ISHARES ESG SCREENED S&P500'],
[
'ticker' => 'XWEB','stock_name' => 'SPDR S&P INTERNET ETF'],
[
'ticker' => 'XXII','stock_name' => '22ND CENTURY GROUP INC'],
[
'ticker' => 'XYF','stock_name' => 'X FINANCIAL-ADR'],
[
'ticker' => 'XYL','stock_name' => 'XYLEM INC'],
[
'ticker' => 'XYLD','stock_name' => 'GLOBAL X S&P 500 COVE CALL E'],
[
'ticker' => 'XYLG','stock_name' => 'GLOBAL X S&P 500 COVC & GRW'],
[
'ticker' => 'Y','stock_name' => 'ALLEGHANY CORP'],
[
'ticker' => 'YAC','stock_name' => 'YUCAIPA ACQUISITION CORP-A'],
[
'ticker' => 'YAC=','stock_name' => 'YUCAIPA ACQUISITION CORP'],
[
'ticker' => 'YALA','stock_name' => 'YALLA GROUP LTD'],
[
'ticker' => 'YANG','stock_name' => 'DRX DLY FTSE CHINA BEAR 3X'],
[
'ticker' => 'YCBD','stock_name' => 'CBDMD INC'],
[
'ticker' => 'YCL','stock_name' => 'PROSHARES ULTRA YEN'],
[
'ticker' => 'YCS','stock_name' => 'PROSHARES ULTRASHORT YEN'],
[
'ticker' => 'YDEC','stock_name' => 'FT CBOE V INTERN EQ BUFF DEC'],
[
'ticker' => 'YELL','stock_name' => 'YELLOW CORP'],
[
'ticker' => 'YELP','stock_name' => 'YELP INC'],
[
'ticker' => 'YETI','stock_name' => 'YETI HOLDINGS INC'],
[
'ticker' => 'YEXT','stock_name' => 'YEXT INC'],
[
'ticker' => 'YGMZ','stock_name' => 'MINGZHU LOGISTICS HOLDINGS L'],
[
'ticker' => 'YI','stock_name' => '111 INC'],
[
'ticker' => 'YINN','stock_name' => 'DRX DLY FTSE CHINA BULL 3X'],
[
'ticker' => 'YJ','stock_name' => 'YUNJI INC-ADR'],
[
'ticker' => 'YJUN','stock_name' => 'FT CBOE VEST INTERNATIONAL E'],
[
'ticker' => 'YLD','stock_name' => 'PRINCIPAL ACTIVE HIGH YIELD'],
[
'ticker' => 'YLDE','stock_name' => 'CLEARBRIDG DIV STRGY ESG ETF'],
[
'ticker' => 'YMAB','stock_name' => 'Y-MABS THERAPEUTICS INC'],
[
'ticker' => 'YMAR','stock_name' => 'FT CBOE VEST INT EQTY BUF-MA'],
[
'ticker' => 'YMM','stock_name' => 'FULL TRUCK ALLIANCE -SPN ADR'],
[
'ticker' => 'YMTX','stock_name' => 'YUMANITY THERAPEUTICS INC'],
[
'ticker' => 'YNDX','stock_name' => 'YANDEX NV-A'],
[
'ticker' => 'YOLO','stock_name' => 'ADVISORSHARES PURE CANNABIS'],
[
'ticker' => 'YORW','stock_name' => 'YORK WATER CO'],
[
'ticker' => 'YOU','stock_name' => 'CLEAR SECURE INC -CLASS A'],
[
'ticker' => 'YPF','stock_name' => 'YPF S.A.-SPONSORED ADR'],
[
'ticker' => 'YPS','stock_name' => 'ARROW REVERSE CAP 500 ETF'],
[
'ticker' => 'YQ','stock_name' => '17 EDUCATION & TECHNOLOGY GR'],
[
'ticker' => 'YRD','stock_name' => 'YIREN DIGITAL LTD - SPS ADR'],
[
'ticker' => 'YSAC','stock_name' => 'YELLOWSTONE ACQUISIT CO-CL A'],
[
'ticker' => 'YSACU','stock_name' => 'YELLOWSTONE ACQUISITION CO'],
[
'ticker' => 'YSEP','stock_name' => 'FT CBOE VEST INTERNATIONAL E'],
[
'ticker' => 'YSG','stock_name' => 'YATSEN HOLDING LTD-ADR'],
[
'ticker' => 'YTEN','stock_name' => 'YIELD10 BIOSCIENCE INC'],
[
'ticker' => 'YTPG','stock_name' => 'TPG PACE BENEFICIAL II COR-A'],
[
'ticker' => 'YTRA','stock_name' => 'YATRA ONLINE INC'],
[
'ticker' => 'YUM','stock_name' => 'YUM! BRANDS INC'],
[
'ticker' => 'YUMC','stock_name' => 'YUM CHINA HOLDINGS INC'],
[
'ticker' => 'YVR','stock_name' => 'LIQUID MEDIA GROUP LTD'],
[
'ticker' => 'YXI','stock_name' => 'PROSHARES SHORT FTSE CHINA50'],
[
'ticker' => 'YY','stock_name' => 'JOYY INC-ADR'],
[
'ticker' => 'YYY','stock_name' => 'AMPLIFY HIGH INCOME ETF'],
[
'ticker' => 'Z','stock_name' => 'ZILLOW GROUP INC - C'],
[
'ticker' => 'ZBH','stock_name' => 'ZIMMER BIOMET HOLDINGS INC'],
[
'ticker' => 'ZBRA','stock_name' => 'ZEBRA TECHNOLOGIES CORP-CL A'],
[
'ticker' => 'ZCMD','stock_name' => 'ZHONGCHAO INC-CLASS A'],
[
'ticker' => 'ZD','stock_name' => 'ZIFF DAVIS INC'],
[
'ticker' => 'ZDGE','stock_name' => 'ZEDGE INC-CL B'],
[
'ticker' => 'ZEAL','stock_name' => 'ZEALAND PHARMA A/S-ADR'],
[
'ticker' => 'ZECP','stock_name' => 'ZACKS EARNINGS CONSISTENT PO'],
[
'ticker' => 'ZEN','stock_name' => 'ZENDESK INC'],
[
'ticker' => 'ZENV','stock_name' => 'ZENVIA INC - A'],
[
'ticker' => 'ZEPP','stock_name' => 'ZEPP HEALTH CORP-ADR'],
[
'ticker' => 'ZEST','stock_name' => 'ECOARK HOLDINGS INC'],
[
'ticker' => 'ZETA','stock_name' => 'ZETA GLOBAL HOLDINGS CORP-A'],
[
'ticker' => 'ZEUS','stock_name' => 'OLYMPIC STEEL INC'],
[
'ticker' => 'ZEV','stock_name' => 'LIGHTNING EMOTORS INC'],
[
'ticker' => 'ZG','stock_name' => 'ZILLOW GROUP INC - A'],
[
'ticker' => 'ZGNX','stock_name' => 'ZOGENIX INC'],
[
'ticker' => 'ZGYH','stock_name' => 'CHINA YUNHONG HOLDINGS LTD-A'],
[
'ticker' => 'ZGYHR','stock_name' => 'YUNHONG INTERNATIONAL -RIGHT'],
[
'ticker' => 'ZGYHU','stock_name' => 'YUNHONG INTERNATIONAL CO LTD'],
[
'ticker' => 'ZH','stock_name' => 'ZHIHU INC - ADR'],
[
'ticker' => 'ZHDG','stock_name' => 'ZEGA BUY AND HEDGE ETF'],
[
'ticker' => 'ZI','stock_name' => 'ZOOMINFO TECHNOLOGIES INC-A'],
[
'ticker' => 'ZIG','stock_name' => 'THE ACQUIRERS FUND ETF'],
[
'ticker' => 'ZIM','stock_name' => 'ZIM INTEGRATED SHIPPING SERV'],
[
'ticker' => 'ZION','stock_name' => 'ZIONS BANCORP NA'],
[
'ticker' => 'ZIOP','stock_name' => 'ZIOPHARM ONCOLOGY INC'],
[
'ticker' => 'ZIP','stock_name' => 'ZIPRECRUITER INC-A'],
[
'ticker' => 'ZIVO','stock_name' => 'ZIVO BIOSCIENCE INC'],
[
'ticker' => 'ZIXI','stock_name' => 'ZIX CORP'],
[
'ticker' => 'ZKIN','stock_name' => 'ZK INTERNATIONAL GROUP CO LT'],
[
'ticker' => 'ZLAB','stock_name' => 'ZAI LAB LTD-ADR'],
[
'ticker' => 'ZM','stock_name' => 'ZOOM VIDEO COMMUNICATIONS-A'],
[
'ticker' => 'ZME','stock_name' => 'ZHANGMEN EDUCATION INC- ADR'],
[
'ticker' => 'ZNGA','stock_name' => 'ZYNGA INC - CL A'],
[
'ticker' => 'ZNH','stock_name' => 'CHINA SOUTHERN AIR-SPONS ADR'],
[
'ticker' => 'ZNTE','stock_name' => 'ZANITE ACQUISITION CORP-CL A'],
[
'ticker' => 'ZNTEU','stock_name' => 'ZANITE ACQUISITION CORP'],
[
'ticker' => 'ZNTL','stock_name' => 'ZENTALIS PHARMACEUTICALS INC'],
[
'ticker' => 'ZOM','stock_name' => 'ZOMEDICA CORP'],
[
'ticker' => 'ZROZ','stock_name' => 'PIMCO 25+ YR ZERO CPN US TIF'],
[
'ticker' => 'ZS','stock_name' => 'ZSCALER INC'],
[
'ticker' => 'ZSAN','stock_name' => 'ZOSANO PHARMA CORP'],
[
'ticker' => 'ZSL','stock_name' => 'PROSHARES ULTRASHORT SILVER'],
[
'ticker' => 'ZT','stock_name' => 'ZIMMER ENERGY TRANSITION -A'],
[
'ticker' => 'ZTAQU','stock_name' => 'ZIMMER ENERGY TRANSITION ACQ'],
[
'ticker' => 'ZTO','stock_name' => 'ZTO EXPRESS CAYMAN INC-ADR'],
[
'ticker' => 'ZTR','stock_name' => 'VIRTUS TOTAL RETURN FUND INC'],
[
'ticker' => 'ZTS','stock_name' => 'ZOETIS INC'],
[
'ticker' => 'ZUMZ','stock_name' => 'ZUMIEZ INC'],
[
'ticker' => 'ZUO','stock_name' => 'ZUORA INC - CLASS A'],
[
'ticker' => 'ZVIA','stock_name' => 'ZEVIA PBC-A'],
[
'ticker' => 'ZVO','stock_name' => 'ZOVIO INC'],
[
'ticker' => 'ZWRK','stock_name' => 'Z-WORK ACQUISITION CORP-A'],
[
'ticker' => 'ZWRKU','stock_name' => 'Z-WORK ACQUISITION CORP'],
[
'ticker' => 'ZWS','stock_name' => 'ZURN WATER SOLUTIONS CORP'],
[
'ticker' => 'ZY','stock_name' => 'ZYMERGEN INC'],
[
'ticker' => 'ZYME','stock_name' => 'ZYMEWORKS INC'],
[
'ticker' => 'ZYNE','stock_name' => 'ZYNERBA PHARMACEUTICALS INC'],
[
'ticker' => 'ZYXI','stock_name' => 'ZYNEX INC']]);