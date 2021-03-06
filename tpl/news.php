<div class="container">
    <h1>News</h1>

    <!-- use accordion, see: https://getbootstrap.com/docs/4.3/components/collapse/#accordion-example -->
    <div id="accordion-news" class="accordion">
        <?php $date='2020-07-31';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - Working across SDCs
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse show" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        BioDATEN is one of four science data centres (SDC) sponsored by the Ministry of Science, Research and Arts. Although each project addresses a different scientific community, there are cross-cutting topics that must be handled by each project. Such topics are e.g. legal aspects of research data, defining metadata for research data, education on research data management, and business models for research infrastructure. As all SDCs will work in these areas and will benefit from each other’s experiences, the coordination project bw2fdm organizes and hosts various working groups to tackle these issues. BioDATEN is an active member in all working groups so far and is happy to share experiences and to network with the other SDCs. BioDATEN is also part of the spokesperson group of two working groups.
                    </p>
                    <h3>
                        Business models
                    </h3>
                    <p>
                        BioDATEN is actively pursuing the development of a working business model required for sustainable operation. During an SDC working group meeting, BioDATEN presented a short overview on the actual state, that put together the insights from its partners, previous projects, and. The base for sustainable operation is the cooperation and agreement among partners. This entails the possibility of exchanged services and resources. From a certain point on this needs to be put into formal agreements signed by the partners in a consortium and its users. A challenge is the creation and definition of the proper legal framework. Optimally, not every consortium needs to create its own framework and agreements but can join larger structures. Those structures still need to be established. This is getting clarified in ongoing talks with the Ministry of Science, Research and Arts.
                    </p>
                    <h3>
                        Repositories
                    </h3>
                    <p>
                        In the course of another SDC working group meeting, BioDATEN presented its decision process over the last year towards a suitable repository service for data publication. It finally came up with InvenioRDM after the analysis of existing solutions like DataVerse, Fedora/DSpace or iRods. During the decision process, BioDATEN was in exchange with various experts from university libraries, computer centres within the state of Baden-Württemberg, and with experts from various NFDI consortia like DataPLANT. These activities identified the shortcomings of traditional archiv and library solutions regarding Big Data as required e.g. by bwSFS and the BioDATEN communities. InvenioRDM features a modern extensible architecture and has already a significant userbase within the Zenodo community. Thus, a high probability of sustainable and long-term service can be expected. Additionally, InvenioRDM is a modular, Python-based open source data repository software initially developed by CERN which provides a modern REST-API. The highly modular architecture is micro-service oriented, scalable, and easily extensible. It provides the necessary broad support for storage backends like S3 object storage, filesystem or WebDAV. Indexing and search is based on the Elastic Search backend. InvenioRDM allows for the simple integration of external identity providers via oAuth 2.0/OpenID Connect and exposes an OAI-PMH interface for metadata harvesting and data exchange with other repository services.
                    </p>
                    <p align="right"><sub>(HG,DvS)</sub></p>
                </div>
            </div>
        </div>

        <?php $date='2020-05-28';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - Online-only workshop and hackathon on Nextflow and nf-core
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        QBiC and the DKFZ announce their co-organized workshop on 13th to 17th of July 2020. The workshop includes a Nextflow tutorial and a nf-core hackathon with tutorials. Both events will be held online-only.
                    </p>
                    <p>
                        In case you are interested in attending the <b>Nextflow workshop</b> please find more information and register under the following link:<br>
                        <a href="https://indico.dkfz.de/event/225/">https://indico.dkfz.de/event/225/</a>
                    </p>
                    <p>
                        The Nextflow workshop is limited to 30 participants, so please only register if you plan to attend all sessions and follow the exercises. The sessions will also be live-streamed on YouTube, so it will be possible to follow the sessions via YouTube without previous registration.
                    </p>
                    <p>
                        To register for the <b>nf-core tutorials and hackathon</b>, and find out more information about the event, please follow this link:<br>
                        <a href="https://nf-co.re/events/2020/hackathon-july-2020">https://nf-co.re/events/2020/hackathon-july-2020</a>
                    </p>
                    <p align="right"><sub>(GG)</sub></p>
                </div>
            </div>
        </div>

        <?php $date='2020-05-19';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - DataPLANT NFDI – recommendation for funding
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        On 18th May 2020 we received the recommendation for funding of the DFGs NFDI panel of experts on the DataPLANT proposal. The BioDATEN Science Data Center is both involved in the role of fundamental plant researchers and in the role of service providers. In this decision, which has yet to be confirmed by the GWK (Gemeinsame Wissenschaftskonferenz) on 26th June 2020, DataPLANT was recommended for funding along with eight other consortia. For BioDATEN we are pleased that we have been able to successfully evolve our vision together with the other applicant institutions in the DataPLANT proposal. Further feedback on the proposal and the final decision is announced in August 2020 at the latest. As nine consortia are to be funded instead of the seven originally announced, it cannot yet be said whether this will have an impact on the planned budget. The planning will be accordingly cautious.
                    </p>
                    <p>
                        In order to advance the information of the community about the DataPLANT activities, there is now an initial website <a target="_blank" href="https://nfdi4plants.de/">https://nfdi4plants.de/</a> available. Further, the DataPLANT speakers have set up a Twitter account @nfdi4plants. At the same time, the DataPLANT speakers have joined cross-cutting activities and are participating, for example, in the exchange on metadata in the NFDI at the beginning of July 2020.<br>The advice of the NFDI expert panel was based on the results of the evaluation and the comments of the applicants on the evaluation results. In order to be able to adequately evaluate the applications reviewed in seven expert colloquia, the NFDI expert panel also paid special attention to the framework for setting up the NFDI in a scientifically guided procedure.
                    </p>
                    <p align="right"><sub>(DvS, JK, HG)</sub></p>
                </div>
            </div>
        </div>

        <?php $date='2020-05-15';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - BioDATEN participating in the state wide RDM WG meeting (12.05.)
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        Representatives of the Science Data Center BioDATEN took part in the RDM Working Group (AK FDM) online meeting on 12th May 2020 and contributed to the discussion both on quality assurance and governance of research data.<br>
                        The long-term character of research data and the various parties involved in the process create new challenges in research organisations with a high level of fluctuation in personnel. The researchers who created, collected and processed data may have left the research institution and projects were officially completed long ago. Many projects are also confronted with questions regarding copyright, handling of personal data and appropriate licenses for research data. Responsibility for the data must therefore be exercised in a regulated manner at any point in the data lifecycle by appropriate entities. After using service providers for storing and processing data during the project period, other entities can get involved after the project ends like subject-specific repositories or university publication services such as dark archives. The potentially perpetual storage of data after project completion is accompanied by responsibilities whose assignment should be clarified. Part of the handling can be derived from data management plans, other parts could be defined in research data policies of the scientific institution.
                    </p>
                    <p>
                        Research data management also affects aspects of good scientific practice. With the objective of achieving the greatest possible transparency and openness while at the same time considering the prudent handling of sensitive data, this requires clear regulations and agreements. For example, questions of copyright and the handling of personal data should already be clarified at the start of a research project or project in general. The same goes for the granting of suitable licenses for research data taken over by storage facilities, like repositories or dark archives, or data generated by researchers.<br>
                        BioDATEN as a science data center should therefore help it's community by suggesting guidelines and promote their implementation. These include the question of data release and regulations comparable to publication contracts with the University Library. Increasingly, an (institutionalised) RDM is becoming a prerequisite for the approval of grants for new research projects. In order to ensure that this does not remain a one-sided process, both individual researchers and the research institutions and its entities, such as research groups, institutes or CRCs, must be included in the governance considerations for the RDM.
                    </p>
                    <p>
                        In the following, a document with guidelines for practical aspects of the RDM will be compiled for individual professorships and individual working groups as well as for larger collaborative projects. These should contain clear regulations on costs and responsibility including the assignment of rights to the storage facility in cases such as data migration and deletion. Early planning is facilitated by filling out Data Management Plans. This makes it possible to plan costs and expenses for the infrastructure providers involved.
                    </p>
                    <p align="right"><sub>(DvS,HG)</sub></p>
                </div>
            </div>
        </div>

        <?php $date='2020-04-09';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - BioDATEN joined three working groups for cross-cutting topics
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        The Science Data Center BioDATEN is actively involved in the SDC's cross-cutting activities in Baden-Württemberg coordinated by the bw2FDM project. On Wednesday, 2nd April three online meetings were held which were dedicated to the topics of legal support, business models, and meta data. BioDATEN was present both in the role as contributor and consumer through various participants from Tübingen and Freiburg. In the discussion of the group, possible objectives of the legal working group got outlined, ranging from the creation of a discussion platform and a network for recommendations of action to the preparation of workshops, trainings, FAQs, checklists, handouts, knowledge bases, and model contracts. Further on, the activities in other states with regard to legal issues in RDM will be monitored. Of course, general advice with regard to legal issues in specific individual cases is problematic. The individual research institutions are primarily responsible to provide this. The working group reiterated the importance of cooperation of the technical and the legal sides. The next meeting will primarily deal with the legal implications of data sharing and reusing.
                    </p>
                    <p>
                        Business and operation models are definitely a relevant cross-cutting topic as many state sponsored projects and state-wide services share the same set of challenges including sustainable financing and the assignment of required personnel on non-existing permanent positions.<br/>
                        The BioDATEN project is aware of this as in the precursor ViCE projects which have also addresses aspects on <a href="https://www.forschungsdaten.info/typo3temp/secure_downloads/67417/0/e932f693c232feda1961dc443f466feb7114e550/BetriebsmodelleForschInfra.pdf" target="_blank">operation</a> and <a href="https://www.forschungsdaten.info/typo3temp/secure_downloads/67417/0/e932f693c232feda1961dc443f466feb7114e550/GeschaeftsmodelleForschInfra.pdf" target="_blank">business models</a>.<br/>
                        Theses aspects have already been elaborated but not solved. A certain base might be provided by the already existing cooperation framework existing in today's regulations (check for suitable legal entities and cooperation frameworks). Another option is the tight cooperation and coordination with ongoing NFDI activities like the <a href="//nfdi4plants.de" target="_blank">DataPLANT NFDI</a> for fundamental plant research for parts of the BioDATEN communities. For sustainable operation qualified staff plays a key role as well as the provisioning of storage systems for the data.
                    </p>
                    <p>
                        The third online meeting addressed the cross-cutting topic of metadata. Metadata are very important throughout the complete lifecycle of research data. While there are basic, descriptive metadata that are very likely to be shared across communities like author, DOI, affiliation etc. there are also very domain and research specific metadata like species, treatment, experimental design etc. Descriptive metadata are best handled by using established standards like DataCite. Research specific metadata are probably best coped with by using existing ontologies. Researches can than pick the label that describes their data best. Additionally, there are technical and process related metadata. To a large extend, both can be collected automatically during the data processing on HPC resources or by tools like FITS. The well established PREMIS framework is a good solution to capture technical metadata.<br/>
                        These four kinds of metadata must be containerised into one file. The METS framework offers such a container and is also well established.<br/>
                        A special role plays the usage of ORCID as a method to reference authors, contributors etc. Unlike institution-based identity management, ORCID is person-based and every researcher can update their affiliation and contact information. This comes in handy as soon as researchers leave their home institution and are no longer reachable under the institution’s email address.
                    </p>
                    <p align="right"><sub>(DvS,HG)</sub></p>
                </div>
            </div>
        </div>

        <?php $date='2020-03-17';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - New workshop on research data management
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        The Science Data Center BioDATEN is getting more and more involved in outreach and training activities in research data management. Since (junior) scientists are usually actively involved in research projects, corresponding courses should take place at the beginning of the research project if possible, so that the life cycle of the research data can be covered almost completely. Thus, the computing center of the Freiburg University is planning a full-day workshop for the CIBBS research group, a research cluster granted in the German university excellency initiative and for the bio-chemistry research training group on 25th April in Freiburg. The teaching and qualification measures are geared towards junior researchers at the beginning of their career with the aim to work towards a well thought-out and structured data and workflow preparation. The workshop follows the idea to avoid time consuming and error-prone end-of-project data management by providing advice to researchers at an early stage in the life cycle of data. Data sets should be curated with the vision of later publication from the beginning, enriched with proper metadata and converted into sustainable file formats. Junior scientists need an increasing amount of qualified knowledge to access the various advanced research infrastructures and to properly handle the associated data management.
                    </p>
                    <p>
                        The <a href="https://www.rz.uni-freiburg.de/rz-en/aktuell-en/fdm-ws-maerz-2020?set_language=en" target="_blank">workshop as planned</a> will be a combined information and training event to give an introduction to domain-specific research data management focusing on the cluster of excellence at the university of Freiburg (CIBBS) and further groups from the bioinformatics and bio-chemistry domains. They offer concrete instructions in day-to-day activities. Researchers are introduced to methodological, organizational, technical and legal challenges of research data management on the one hand, and on the other hand specific requests of the working group are dealt with. Further topics covered will encompass: Presentation of the respective research approaches and the associated RDM, learn from current procedures and workflows as examples (best practices) for the own work, learn of available and planned infrastructures and future developments in BioDATEN, creation and use of ORCID IDs, tools and methods for data management (hands-on; e.g. use of restic, rucio).
                    </p>
                    <p>
                        Further (outreach) events focus on groups like the Bioinformatics Club of senior PIs at the university of Freiburg. The presentation planned will give an overview on the ongoing activities and developments in BioDATEN and training and summer school activities of Galaxy and ELIXIR/EOSC.<br/>
                        Beside practical aspects of data management the outreach event will give an introduction to the planned bwSFS (Storage-for-Science) system as a future base for data storage, long-term archiving and publication. It will advocate for concepts like the ORCID ID to improve descriptive metadata for data publication. The qualification of PIs is to be regarded as particularly important, since these generate on the one hand a lot of data and are responsible for the reusability of these. On the other hand, these senior researchers in their role as supervisors for students and doctoral students serve as an example and should therefore adopt a sustainable approach to research data, for which BioDATEN will provide the necessary framework.
                    </p>
                </div>
            </div>
        </div>

        <?php $date='2020-02-27';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - BioDATEN at 3rd NFDI Community Workshop at LMU Munich
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        BioDATEN was present at the 3rd NFDI Community Workshop - Services for Research Data Management in Neuroscience - hosted at the Ludwig Maximilians University in Munich on 10th February. It brought in the base level services provider perspective and its expertise in the NFDI forming process. There were further services providers presenting at the workshop like the FIZ Karlsruhe and infrastructure providers in context of the Human Brain Project. These talks were followed by lightening talks on a range of services, initiatives and data providers like Fenix-RI, GIN, Cellular-resolution brain map, Zeiss research platform, NFDI4BMP, BRIDGE4NFDI, Helmholtz Metadata Services, RDM Services at Marburg University, LMU Munich University Library, Leibniz Rechenzentrum Munich, Gesellschaft für wissenschaftliche Datenverarbeitung Göttingen, Max Planck Computing and Data Facility on the European Open Science Cloud.
                    </p>
                    <p>
                        The provider's perspective in the NFDI forming process was elaborated by the BioDATEN science data center. Providers of research IT infrastructures are faced by significant technological changes especially fostered by resource virtualization. Many of the modern services and workflows are operated in an increasingly cloud-like fashion where data and computing move from independent, personal workstations to centralized, aggregated resources. Such shared resources allow to host new projects faster. The necessary excess capacity is much easier to maintain and to justify in centralized resources because the necessary shared overhead is typically much less than in independent systems. Grant providers start to understand the changed technological landscape and start to adopt their funding schemes allowing to buy-in into existing resources preferred to establish single ones per new project. Users are faced with a difficult sizing challenge as it is often impossible for them to define the “right” configuration for a required resource. These challenges are answered by the IT industry as well as by science driven cloud and aggregated HPC offerings. The aggregation of resources into larger infrastructure allows to focus on the increasing efforts in market analysis, system selection, proper procurement and operation of (large scale) IT infrastructures, which can be done by a few experts. Further on, such a strategy would eliminate the contradiction of typical project run times versus the (significant) delay for equipment provisioning and the usual write down time spans of that equipment.
                    </p>
                    <p>
                        The massive changes in the IT landscape and user expectations increase the pressure for re-orientation of university (scientific) compute centers. Cooperation in scientific cloud infrastructure is the chance for many compute centers to significantly widen their scope of IT services. It helps to keep up with the demand by the scientific communities and to offer a quite complete service portfolio. Organizationally, it allows for specialization and community focus. When defining future strategies and operation models, compute centers might find a new standing in supporting research data management by providing efficient infrastructure and consultation to the various scientific communities. Furthermore, it offers them the opportunity to participate in infrastructure calls. These developments enable researchers to offload non-domain specific tasks and services on to infrastructure provides. Suitable governance structures are to be implemented to ensure a persistent relevance of computer centers through user participation and feedback loops in the future. Close cooperation and consultation (like already done in Freiburg for the bwForCluster NEMO and for the storage infrastructure bwSFS) helps all stakeholders to have suitable and up to date infrastructures tailored to their needs. Such structures are in their infancy for the NFDI, but future NFDI wide coordination should advance this topic.
                    </p>
                    <p>
                        The financing of IT infrastructures for the various scientific communities is often grant driven and inherently not suitable for providing sustainable long-term services and research data management. The future should see a changed flow of funding from a simple project-driven and organization centered practice to demand-driven streams to different infrastructure and service providers. Large infrastructure initiatives like de.NBI or the NFDI need not only to solve the role of personnel employment (permanent vs. project based) but also to define suitable business and operation models compatible with the VAT regulations and the federal and state requirements for cash flows in mixed consortia.
                    </p>
                    <p>
                        <img class="img-fluid" src="img/news/<?=$date?>.jpg" />
                    </p>
                </div>
            </div>
        </div>

        <?php $date='2020-02-06';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - nestor Access Workshop in Fulda
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        As a member institution of nestor the University of Freiburg participated in behalf of BioDATEN in the nestor-internal two days "Workshop on Access". The workshop intends to help to foster the qualification of partners and clarify questions on digital preservation infrastructures and access systems. Use cases and significant aspects of the user perspectives are discussed following the topics of architecture and conceptional design, aspects of the use of "virtual reading rooms", support and consultation needs on historical digital materials, next generation use like big data and data mining scenarios. Further on the OAIS offers a conceptional framework to receive and store objects differently to presenting them e.g. driven by retention periods. Standardization beside legal aspects are topics to be taken into account as well.
                    </p>
                    <p>
                        Presentations to kick-start discussions and exchange were given by nestor partners like from the Leibniz Institute for German Language, the German Central Library for Medicine and the State Archive of Northrheine-Westfalia. Invited talks were delivered by Thomas Ledoux from the Bibliothèque Nationale die France: "An experienced practitioner’s view on Access (library perspective)" and Nicola Wissbrock and Sarra Hamdi, The National Archives UK: "An experienced practitioner’s view on Access (archival perspective)". The second day handled topics like "Access Rights Information in the SLUB digital long-term archive" presented by the Saxonian State and University Library Dresden (SLUB), which gave a couple of recommendations on how to pragmatically deal with copyright, usage and access statements for digital objects. The following talks covered "What is new? Changes in OAIS relating to Access" by Fernuniversität Hagen, "Chances and risks of dark archives" by the Technische Informationsbibliothek. The day got conluded by a team member of the <a href="//citar.eaas.uni-freiburg.de/">CiTAR</a> and BioDATEN long-term access team from the University of Freiburg on "Emulation as a Service". A long-term access module will get included as a module in the BioDATEN science gateway.
                    </p>
                    <p>
                        <img class="img-fluid" src="img/news/<?=$date?>.jpg" />
                    </p>
                </div>
            </div>
        </div>

        <?php $date='2020-02-05';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - DataPLANT NFDI - a further step mastered and work ahead
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        BioDATEN and DAplus+ are jointly involved in the nationwide NFDI process with DataPLANT Consortium (in the area of Fundamental Plant Research). End of January the review of the DFG assessment of the of the application and the oral presentation in Bonn (Link to the older message) in early December arrived. The reviewers gave a widely positive feedback, from which we deduce that DataPLANT is still in the group for consideration of funding. We would like to thank our collaborators from the Galaxy team, especially Anika Erxleben and from the Technical University in Kaiserslautern and Jülich Research Center. The feedback addresses various areas of the proposal, such as "Maturity and relevance", "Research data management" and "Internal structure and sustainability". Besides very positive remarks there are also some critical passages that should be considered in the answer.
                    </p>
                    <p>
                        Some snippets from the review: "The consortium is thematically closely focused on fundamental plant science research. This strong focus and the fact that, in addition to model plants, some cultivated plant species are also taken into account is seen as a clear strength of this consortium" ... "The planned implementation of processes for metadata validation seems to make sense and the claim to improve the quality of existing metadata instead of discarding it is commendable. The assessment of the quality of raw data is a interesting additional approach, which, in view of the interpretation of the results by the users carefully must be developed. The quality of the already implemented and the level of measures planned beyond this is very high. One of the planned measures is the establishment of 'data stewards' as flexible on-site assistants to be deployed, who are very demanding but also ... is very positive." ... "The consortium's efficient internal structure is impressive, consisting of the various stakeholder groups and the clearly defined bodies, including the 'Data stewards' and 'Data champions'. The topic 'efficiency and sustainability' is well received in the application addressed."
                    </p>
                    <p>
                        The "Diversity" of the consortium lead, which was quite one-sided in the current application, needs to be improved in the further process. The consortium is now requested to respond to individual points in a three-page statement in reply to the reviewers remarks. In particular, the focus of the answer will lie on points such as "How are the data stewards recruited, trained and meaningfully distributed institutionally and made available to the participants" or "Possibilities of generalising the workflow approach". The improvement of "diversity" should in particular expressed in a broader governance structure to be formulated jointly with the consortium. This will also incorporate initial experiences from the BioDATEN science data center.
                    </p>
                </div>
            </div>
        </div>

        <?php $date='2020-01-13';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - The RDM WG in Baden-Württemberg advocates for ORCID
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        Initiated by the activities of the BioDATEN Science Data Center the Research Data Management Working Group (RDM WG) in Baden-Württemberg fosters the spread and use of ORCID IDs as persistent person identifiers. This ID will provide one of the necessary base metadata items to describe data sets within the BioDATEN community. The support document created and agreed upon is meant to help decision makers in the state's research institutions to choose a suitable solution for stable identification of persons and standardization.
                    </p>
                    <p>
                        In a strongly networked scientific landscape with a high proportion of national and international cooperation, which is characteristic of the bioinformatics and other scientific communities in Baden-Württemberg, the aim is to promote or at least closely coordinate the services for research data management. This will allow a closer exchange on the challenges and a joint approach to the provision of infrastructures. Persistent identifiers for people in science and the linking of their activities and achievements are very important topics. Due to high fluctuation in science, an agreement on a uniform system such as <a href="//orcid.org" target="_blank">ORCID</a> would be a considerable alleviation, since switching between institutions does not require any changes to the database. An identifier should be stable and unique for persons and institutions.
                        With this document, the RDM WG would like to join the MoU of <a href="//doi.org/10.18452/19528" target="_blank">DINI</a> and make a recommendation for ORCID, as this system has a high acceptance on the part of institutions and individual researchers.
                    </p>
                    <p>
                        For use in research information systems and research data management, the ORCID ID of the person becomes the identifier for the PID graph, <a href="//ror.org" target="_blank">RORID</a> the identifier for organisations and <a href="//www.re3data.org" target="_blank">re3data</a> for repositories. ORCID is based on open source components, is not linked to individual commercial providers, and implements a right of co-determination within the framework of membership. Due to the already high ubiquity ORCID ID is already an accepted worldwide quasi-standard. Furthermore, such a standard helps to support cultural change by also considering research data as credits for scientific reputation. The ORCID is researcher-centric, relies on the CC0 license for metadata and can already be used as an authentication source. There is an established governance structure in which institutions can exert influence through their membership. Furthermore, the implementation ensures that researchers retain full control over their own personal data.
                    </p>
                    <p>
                        Nevertheless, in an international system like ORCID with decentralised management by researchers, there are some challenges in ensuring the quality of metadata. For example, an assignment to the current institution is not checked. There is some form of public or peer-to-peer control, but no specific enforcement of corrections. Another challenge is the management of departments, entities and organisations. This is getting addressed by RORID. As a global identity management system, the ORCID ID raises data protection issues. However, the organisation has made considerable efforts to increase the level of data protection and in particular to comply with the GDPR.
                    </p>
                </div>
            </div>
        </div>

        <?php $date='2019-12-09';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - BioDATEN and DataPLANT. NFDI application defended in Bonn
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        <b>BioDATEN was one of the originators beside DaPLUS of Kaiserslautern and Jülich of the DataPLANT NFDI consortium on fundamental plant research which finished the next round together with other consortia like NFDI4AGRI, NFDI4Earth and NFDI4BioDiversity.</b>
                    </p>
                    <p>
                        On the 2nd and 3rd of December 2019 we have been in Bonn and presented and defended our NFDI application "DataPLANT". The perceived feedback on the first day was quite positive. On the second day, we received in a further individual round a couple of more detailed questions on certain aspects. We are optimistic that we left a solid impression, whereby a general assessment and classification is difficult at this stage of the overall procedure. DataPLANT is a comparably small consortium compared to other larger ones. In January 2020, we expect a written statement, to which we can react again with a three-page comment. On this basis, the reviewers will make a recommendation by the end of May 2020. The formal decision will probably be made at the end of July 2020.
                    </p>
                    <p>
                        <img class="img-fluid" src="img/news/<?=$date?>.jpg" />
                    </p>
                </div>
            </div>
        </div>

        <?php $date='2019-11-27';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - BioDATEN in Strasbourg in EUCOR networking
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        The science data center BioDATEN exploited the chance for networking in the European Campus (EUCOR) setting. The session took place in Strasbourg on the 27th November to exchange on the current state on research data management and possible future joint activities of the member universities. BioDATEN and its concept on RDM as well as other member's actions were presented in the first half of the session. There are different forms of researchers' support provided by local research data management groups or facilities ranging from information portals to personal advice in grant application. The concept of data stewards as specialized personnel bridging the gap between the researchers and the RDM practice becomes more and more common. Some ideas got developed to setup special training courses and study tracks within the EUCOR context to qualify students in that domain.
                    </p>
                    <p>
                        The RDM landscape is quite diverse and in different levels of maturity.<br/>Many of the member universities started with education programmes on a general level or more specifically on data management plans. A major focus of the EUCOR activities are on training as the coordination overhead is the lowest. As there is quite some demand especially on the PhD level the idea came up to coordinate in domain specific courses within the EUCOR setting. Then not every institution has to provide expertise on all scientific domains but can specialize. Here the BioDATEN education and qualification activities could fit in very well to support the bioinformatics community to a wider degree, which would be perfectly in line with the SDC's objectives. Frameworks exist within EUCOR allowing university members to attend courses in other locations.
                    </p>
                    <p>
                        France has a more centralized approach on its universities and thus pushes ORCID as a national standard on persistent person identifiers (a subject evaluated in BioDATEN in work package 1.2.4). Further on exchange is planned both on ideas on technical systems for storage, suitable repository software, data visualization, governance, data stewardship and policies.
                    </p>
                    <p>
                        <img class="img-fluid" src="img/news/<?=$date?>.jpg" />
                    </p>
                </div>
            </div>
        </div>

        <?php $date='2019-11-21';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - First qualification course on Research Data Management Plans
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        The qualification activities of the BioDATEN SDC started with a course on the concept and the creation of Data Management Plans: "Introduction to Research Data Management – Data Management Plans". The course held at the Computer Center in Freiburg University was jointly organized by the Freiburg Research Data Management Group and the Science Data Center BioDATEN. The course gave a brief overview of the handling of research data and different aspects of the creation of research data management plans over the complete life cycle of the respective data. The course presented concepts and strategies for the creation of DMPs in research projects to ensure the long-term re-usability and accessibility of electronic research data, including functional issues, documentation and appropriate enrichment with metadata. Furthermore, the areas of planning archiving strategies, issues on sensitive data and, last but not least, cost and refinancing models were discussed. Recommendations for Data Management Plans were given on the structure, necessary elements ranging from standard project metadata to considerations on amount of data sets, file types and software involved. Further relevant points were data and software licensing and special considerations were dedicated on data citation which might become part of future credits for research.
                    </p>
                    <p>
                        The course was jointly organized by the Science Data Center BioDATEN, the Freiburg Research Data Management Group represented by the eScience groups of the Computer Center and the university library. Another workshop is planned due to the high demand, as well as a broadening of the range of training courses for subject-specific questions, as is increasingly the case due to the requirements of the various research groups in the bioinformatics community.
                    </p>
                    <p>
                        <img class="img-fluid" src="img/news/<?=$date?>.jpg" />
                    </p>
                </div>
            </div>
        </div>

        <?php $date='2019-11-19';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - BioDATEN present at the Research Data Management Working Group at the Stuttgart university library
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        <b>
                            The Science Data Centre BioDATEN was present at the Research Data Management Working Group (AK FDM) meeting at the Stuttgart university library to discuss the challenges of long-term identifiers. Research data management (RDM) needs to deal with objects which outlive the typical period of a project and the persons working on a research question. The identification of people needs to consider the dynamics of research, the fluctuation of researchers and ongoing technological change. These challenges need to be considered in the context of data repositories and the Science Data Centres (SDC). The person identifiers are required for information discovery on research, scholarly information and to credit scientists for the results of their research, ideally both for publication of articles and data.
                        </b>
                    </p>
                    <p>
                        The referencing of scholarly publication and sharing of data sets depends on long-term durability of identifiers. The short-term affiliation of a person with a university or a research institution contrasts this endeavour if the identity management rests upon local system or the email addresses. Thus, there is the need for stable and unambiguous references for people. Objects like papers, research data, lab notebooks and source code should be linked to one or more researchers in a proper and stable way. Ideally, the references are machine actionable. Names are problematic as they are not unique, the spelling might be incorrect and bibliographical references might vary. Researchers move around, graduate, start a PhD at a different institution or change names. Additional identifiers like email, name of the institution and department are not necessarily stable as well. The institutions’ identity management systems disambiguate but their core focus is on active members of the institution and identities are getting disabled or deleted if a person retires or moves on.
                    </p>
                    <p>
                        The BioDATEN project addresses the topic in the work package "1.2.4 Persistent Identifier". As the challenge is around for a while and is faced by a wide range of institutions and publishers, a couple of options are available. The "Gemeinsame Normdatei" (GND, Integrated Authority File) is such an approach for German speaking countries to a unique identifier that facilitates the collaborative use and administration of authority data. The GND represents and describes entities, i.e. persons, corporate bodies, conferences and events, geographic entities, topics as well as work relating to cultural and academic collections. The GND is primarily used by libraries to catalogue publications, but other institutions like archives, museums, cultural and (academic) institutions use GND as well. Publishers employ for example the <a target="_blank" href="//publons.com">ResearcherID</a> which is part of the "Web of Science". It provides identifiers - the Web of Science ResearcherIDs - which are used by institutions and funders as a persistent identifier to track research output and to update publication records in Web of Science, ensuring correct author attribution and disambiguation. Another commercial approach is the Scopus Author Identifier, a proprietary solution provided by Elsevier. For identity federations, the edu-ID plays a role. Activities concerning <a target="_blank" href="//doku.tid.dfn.de/de:aai:eduid">edu-ID</a> in Germany are coordinated by a ZKI working group. It aims for a livelong, user-centric digital identity for research and education. There are different implementations in various federations: SUNET provides eduID.se in Sweden for application and matriculation processes in higher education as well as for the creation of university user IDs. The Swiss edu-ID is the common digital identity for the academic sector.
                    </p>
                    <p>
                        <a target="_blank" href="//orcid.org">ORCID</a>, a novel approach to user-centric global person identifiers, started in 2010/11 by a Mellon grant and several other sponsors. It transcends discipline, geographic, national and institutional boundaries. Participation in ORCID is open to any organization that has an interest in scholarly communications. The access to ORCID services is based on transparent and non-discriminatory terms. Institutions can become members for an annual service fee, e.g. the University of Freiburg joined ORCID in February 2018. ORCID is governed by representatives from a broad cross-section of stakeholders which are by the majority not-for-profit. All software developed by ORCID will be released under a license approved by the Open Source Initiative. Researchers can create, edit, and maintain an ORCID ID and profile free of charge. Researchers control the defined privacy settings of their own ORCID. All profile data contributed to ORCID by researchers or claimed by them will be available in standard formats for free download. The availability of data is subject to the researchers' own privacy settings. ORCID identifiers and profile data are made available via free APIs and services. ORCID allows for identity federation account linking, e.g. to use Shibboleth federations. This requires the respective institution to allow ORCID as a Service Provider. ORCID itself can already act as an Attribute Provider based on OAuth2. To use this in services provided by the institution application integration is necessary. This will be discussed and evaluated for the envisioned BioDATEN services.
                    </p>
                    <p>
                        ORCID is already “GDPR certified”. This certification is the result of a long process initiated by the German chapter. This and its openness and independence make ORCID a prime candidate for long term person identification for BioDATEN research data sets. There are some precautious considerations: Most users are self-registered and may not be using their institution's email. There is no standardized endorsement process as an ID can be linked to institutional frameworks, but this is not required. An institutional account is difficult to distinguish from private ones. The organisation and institutional IDs are still a challenge to be unified globally. Finally, ORCID users should be aware that using ORCID has some implications: Using the ORCID API requires customising of software components. A persistent lifelong identifier allows tracking users for ever. ORCID is a US based, not-for-profit organisation, which is as such not bound to the Safe Harbour treaty. Nevertheless, it is currently the most open and viable solution available and it seems as if ORCID will become a worldwide standard. BioDATEN will strive for a coordinated solution within the State of Baden-Württemberg and opt for ORCID as the most wide spread and versatile person identifier. This could imply to add ORCID to IDM systems, provide coordinated endorsements and exchange ORCID via bwIDM federation (as an attribute).
                    </p>
                </div>
            </div>
        </div>

        <?php $date='2019-10-22';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - Start of Teaching Series on Research Data Management in Bioinformatics - Workshop on Data Management Plans in Freiburg
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        <b>
                            Research processes produce an increasing amount of digital data. They are often very discipline-specific and exist in different forms. They can be the basis as well as the result of research. Preserving, managing and curating research data thus becomes a central task for every scientist and research institution - from the preparation of a research proposal to everyday research work. This process must be structured and organised. An increasingly established solution is the use of data management plans (DMP). They can primarily be understood as an abstract concept that helps to define data management through the planned course of the research project and its subsequent long-term availability.
                        </b>
                    </p>
                    <p>
                        A DMP structures the handling of research data over their life cycle. In the process, findings on required or generated data sets are to be considered as well as their licensing, enrichment with metadata, necessary processing steps and software, or ownership over time. The aim of the event is to explore the manifold questions surrounding data management and to enable the participants to create such a plan themselves. The course will cover the following topics:
                        <ul>
                            <li>Introduction to research data management</li>
                            <li>Presentation of the individual components of a data management plan: Collection of project metadata, description of the data genesis or data stock, data management, consolidation and archiving, exchange and standardization</li>
                            <li>Development and design of a data management plan</li>
                            <li>Digital data management in the research proposal</li>
                            <li>Presentation of online help tools (e.g. RDMO) and example DMPs (BMBF, DFG)</li>
                            <li>Institutional support</li>
                        </ul>
                    </p>
                    <p>
                        The course is part of the university's professional qualification programme. Application is possible via the <a target="_blank" href="//campus.uni-freiburg.de/qisserver/pages/startFlow.xhtml?_flowId=detailView-flow&unitId=84438&periodId=1804&navigationPosition=hisinoneLehrorganisation,examEventOverview">Campus Management System</a>.
                    </p>
                </div>
            </div>
        </div>

        <?php $date='2019-10-18';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - Next step in the NFDI building process: Grant application submitted
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        <b>
                            On Tuesday the 15th October the DataPLANT NFDI consortium submitted it's proposal to the DFG. The consortium in Fundamental Plant Research consists of roughly 30 participants including universities and large research institutions distributed over the country. A significant proportion of the participants originate from Baden-Württemberg and the BioDATEN Science Data Center. Further co-applicants are the Technical University of Kaiserslautern and the Forschungszentrum Jülich.
                        </b>
                    </p>
                    <p>
                        The central aim of the DataPLANT consortium is to advance research data management in it's designated community and generate added value in the field of basic plant research. Successful collaboration and use of data of different modalities – from many sources and experiments, pre-processed or analysed with a variety of algorithms – requires contextualization of the data. The FAIR Data 1 and Linked Open Data Principles provide critical guidelines for research data management. Various consortia have therefore made proposals for best practice and compliance with these principles, but it is almost always the initiative of individual researchers to implement them. Therefore, comprehensive information on the required quality for use by third parties is rarely available. Researchers have been shown to require practical assistance in exploiting the fragmented and complex resource landscape. This increases the need for a tailor-made (infra)structure for research data management. By combining technical expertise in the fields of fundamental plant research, information and computer sciences and infrastructure specialists, DataPLANT will support plant scientists in every RDM concerns. DataPLANT will create a service environment to contextualize research data according to the FAIR principles with minimal additional effort and to support the entire research cycle in modern plant biology. The tailor-made service landscape in DataPLANT will consist of technical-digital assistance as well as on-site personnel assistance. DataPLANT thus creates a central entry point and a valuable subject-specific data and knowledge resource. In combination with teaching and training concepts, data literacy is strengthened and a long-term motivation for the creation of well-indicated data objects is                       generated. By integrating plant science into the NFDI network as a whole, DataPLANT is driving the digital transformation and democratization of research data in the field.
                    </p>
                </div>
            </div>
        </div>

        <?php $date='2019-08-20';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - Science Data Center BioDATEN as part of the NFDI process
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <p>
                        <b>Together with colleagues from Tübingen, Konstanz, Freiburg, Heidelberg, ... parts of the BioDATEN community joined forces with the DaPLUS+ consortium from Kaiserlautern, Jülich and Düsseldorf to paticipate in the process to create a National Research Data Infrastructure. The newly formed consortium centers around plant data in bioinformatics and handed in a <a target="_blank" href="//www.dfg.de/download/pdf/foerderung/programme/nfdi/absichtserklaerungen/2019/2019_data_plant.pdf">binding "Letter of Interest"</a>.</b>
                    </p>
                    <p>
                        In modern hypothesis-driven science, researchers increasingly rely on effective research data management services and infrastructures that facilitate the acquisition, processing, exchange and archival of research data sets, to enable the linking of interdisciplinary expertise and the combination of different analytical results. The immense additional insight obtained through comparative and integrative analyses provides additional value in the examination of research questions that goes far beyond individual experiments. Specifically, in the research area of fundamental plant research that this consortium focuses on, modern approaches need to integrate analyses across different system levels (such as genomics, transcriptomics, proteomics, metabolomics, phenomics). This is necessary to understand system-wide molecular physiological responses as a complex dynamic adjustment of the interplay between genes, proteins and metabolites. As a consequence, a wide range of different technologies as well as experimental and computational methods are employed to pursue state-of-the-art research questions, rendering the research objective a team effort across disciplines. The overall goal of DataPLANT is to provide the research data management practices, tools, and infrastructure to enable such collaborative research in plant biology. In this context, common standards, software, and infrastructure can ensure availability, quality, and interoperability of data, metadata, and data-centric workflows and are thus a key success factor and crucial precondition in barrier-free, high-impact collaborative plant biology research. Toward this, the key objectives pursued by this consortium are:
                        <ol>
                            <li>A specific community standard for fundamental plant research (meta)data and workflow annotation, based on generic, existing and emerging standards (e.g., ISA model, MIAPPE) and ontologies in plant science.</li>
                            <li>Assistive mechanisms and services to build, link and maintain the complete research context during data acquisition, curation, analysis, and publication.</li>
                            <li>Mechanisms for collaborative research based on enrichment and automatized crosslinking of plant-research specific (meta)data to facilitate research context management.</li>
                            <li>A cloud-based open reference implementation of these mechanisms and services, and a central hosted instance thereof.</li>
                            <li>A robust, federated infrastructure both for data computation and management covering the complete data lifecycle.</li>
                            <li>Comprehensive training of community members through workshops and summer schools and providing open training material.</li>
                        </ol>
                        The final grant application is due to the 15th October.
                    </p>
                </div>
            </div>
        </div>

	<?php $date='2019-07-04';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - Science Data Center &quot;BioDATEN&quot; at GCC 2019 conference in Freiburg
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <small>(Source: <a target="_blank" href="//www.rz.uni-freiburg.de/rz/aktuell/bioDATEN-at-GCC2019">RUF</a>)</small>
                    <p>
                        <b>The just started Science Data Center "BioDATEN" was present at this year's Galaxy conference in Freiburg, the GCC 2019. The Science Data Center BioDATEN - Bioinformatics DATa ENvironment is a community effort in standardization, services and sustainable research data management. It plans to combine the tools and services provided in frameworks like Galaxy with efforts towards standardization and research data management.</b>
                    </p>
                    <p>
                        The digitalization changes the working habits in almost all scientific disciplines with vast impact on teaching, research and interdisciplinary collaboration. The challenges faced in bioinformatics arising from vastly growing amounts of data are exemplary for a discipline establishing new ways of scientific work and insight. <a target="_blank" href="//galaxyproject.org/events/gcc2019/">Galaxy</a> as a platform already provides a wide range of tools used by a significant proportion of the community presented in BioDATEN. Through the formed consortium, comprising of bioinformaticians, core facilities, compute centers and libraries, a <a target="_blank" href="//www.rz.uni-freiburg.de/rz/aktuell/2019-sdc-biodaten-kickoff">science data center for life sciences for Baden-Württemberg just got established</a>. The four-year project will report about the anticipated goals and the work plan intended to achieve them in the relevant communities.
                    </p>
                    <p>
                        BioDATEN will heavily depend on the technical infrastructure available through Galaxy and the project partners such as bwSFS, BinAC and bwCloud or the repositories provided by the university libraries in Konstanz and Tübingen. State-wide activities will be orchestrated through the <a target="_blank" href="//www.forschungsdaten.info/">work group on research data management</a>. The SDC creates a multi institutional network among the strongest bioinformatics research sites. The consortium brings together the compute centers of the universities of Freiburg and Tübingen; the DKFZ, the EMBL and the university (BioQuant) in Heidelberg; the university libraries of Konstanz and Tübingen; the Quantitative Biology Center Tübingen; Bioinformatics and Plant Biotechnology Freiburg; CLARIN-D Center Tübingen; Livestock Microbial Ecology Hohenheim; Disease Ecology and Evolutionary Genetics Konstanz; Clinic of Neurology Ulm.
                    </p>
                    <p>
                        The project within the third line of the eScience initiative of the state - the BioDATEN SCD is funded by the Ministry of Science, Research and the Arts Baden-Württemberg - got acquired and is handled by the eScience group of the computer center. It is part of the RDMG activities. The conference poster at <a target="_blank" href="//veranstaltungen.gdch.de/tms/frontend/index.cfm?l=8911&sp_id=2">GCC 2019</a> is one of it's first activities.
                    </p>
                </div>
            </div>
        </div>

        <?php $date='2019-03-27';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapseOne">
                        <?=$date?> - Positive appraisal for Science Data Center &quot;BioDATEN&quot;
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <small>(Source: <a target="_blank" href="//jura.uni-freiburg.de/rz-en/aktuell-en/2019-sdc-biod?set_language=en">RUF</a>)</small>
                    <p>
                        <b>The request for SDC BioDATEN, which was handed in together with various partners from Tubingen, Konstanz, Heidelberg and many others, has received a funding recommendation. The project is planned to start by the middle of the year and will run as part of the third eScience funding line by the department for science, research and culture in Baden-Wurttemberg. The project complements the efforts for virtualized research environments (ViCE), bwSFS and the bwHPC-S5 activites, with the objective of establishing long-term infrastructures for a qualified research data management in the field of bioinformatics.</b>
                    </p>
                    <p>
                        The consortium that applied for the funding includes data-using researchers from all life sciences as well as bioinformatic method developers and infrastructure providers. The members of the consortium are leaders in digital data-driven research in life sciences as well as in information scientific questions. Between some of the members, long-lasting bilateral cooperations already exist. These should now be transfered to a consortium. Discipline-specific and information scientific aspects of research data management have already been tackled in shared projects or are part of current cooperation taking place as part of the de.NBI and bwHPC on a national and ELIXIR and Galaxy on an international level.
                    </p>
                    <p>
                        The coordination in Freiburg is done by the eScience department at the University IT Services. The project will receive financing for four years as part of the <a target="_blank" href="//mwk.baden-wuerttemberg.de/de/service/presse/pressemitteilung/pid/vier-science-data-centers-in-baden-wuerttemberg/">third eScience funding line of the department of science, research and culture in Baden-Wurttemberg</a>.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
