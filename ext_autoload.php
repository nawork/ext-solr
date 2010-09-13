<?php
// DO NOT CHANGE THIS FILE! It is automatically generated by extdeveval::buildAutoloadRegistry.
// This file was generated on 2009-09-15 18:31

$extensionPath = t3lib_extMgm::extPath('solr');
return array(
	'apache_solr_service_balancer' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/Service/Balancer.php',
	'apache_solr_document' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/Document.php',
	'apache_solr_exception' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/Exception.php',
	'apache_solr_httptransportexception' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/HttpTransportException.php',
	'apache_solr_invalidargumentexception' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/InvalidArgumentException.php',
	'apache_solr_noserviceavailableexception' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/NoServiceAvailableException.php',
	'apache_solr_parserexception' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/ParserException.php',
	'apache_solr_response' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/Response.php',
	'apache_solr_service' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/Service.php',

	'tx_solr_commandresolver' => $extensionPath . 'classes/class.tx_solr_commandresolver.php',
	'tx_solr_connectionmanager' => $extensionPath . 'classes/class.tx_solr_connectionmanager.php',
	'tx_solr_indexer' => $extensionPath . 'classes/class.tx_solr_indexer.php',
	'tx_solr_languagefileunavailableexception' => $extensionPath . 'classes/class.tx_solr_languagefileunavailableexception.php',
	'tx_solr_query' => $extensionPath . 'classes/class.tx_solr_query.php',
	'tx_solr_search' => $extensionPath . 'classes/class.tx_solr_search.php',
	'tx_solr_solrservice' => $extensionPath . 'classes/class.tx_solr_solrservice.php',
	'tx_solr_suggestquery' => $extensionPath . 'classes/class.tx_solr_suggestquery.php',
	'tx_solr_template' => $extensionPath . 'classes/class.tx_solr_template.php',
	'tx_solr_typo3pagecontentextractor' => $extensionPath . 'classes/class.tx_solr_typo3pagecontentextractor.php',
	'tx_solr_util' => $extensionPath . 'classes/class.tx_solr_util.php',

	'tx_solr_fieldprocessor_service' => $extensionPath . 'classes/fieldprocessor/class.tx_solr_fieldprocessor_service.php',
	'tx_solr_fieldprocessor_timestamptoisodate' => $extensionPath . 'classes/fieldprocessor/class.tx_solr_fieldprocessor_timestamptoisodate.php',

	'tx_solr_querymodifier_faceting' => $extensionPath . 'classes/querymodifier/class.tx_solr_querymodifier_faceting.php',

	'tx_solr_viewhelper_crop' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_crop.php',
	'tx_solr_viewhelper_currentresultnumber' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_currentresultnumber.php',
	'tx_solr_viewhelper_date' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_date.php',
	'tx_solr_viewhelper_link' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_link.php',
	'tx_solr_viewhelper_lll' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_lll.php',
	'tx_solr_viewhelper_oddeven' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_oddeven.php',
	'tx_solr_viewhelper_relevance' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_relevance.php',
	'tx_solr_viewhelper_relevancebar' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_relevancebar.php',
	'tx_solr_viewhelper_sortindicator' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_sortindicator.php',
	'tx_solr_viewhelper_solrlink' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_solrlink.php',
	'tx_solr_viewhelper_sorturl' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_sorturl.php',
	'tx_solr_viewhelper_ts' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_ts.php',

	'tx_solr_additionalindexer' => $extensionPath . 'interfaces/interface.tx_solr_additionalindexer.php',
	'tx_solr_command' => $extensionPath . 'interfaces/interface.tx_solr_command.php',
	'tx_solr_fieldprocessor' => $extensionPath . 'interfaces/interface.tx_solr_fieldprocessor.php',
	'tx_solr_formmodifier' => $extensionPath . 'interfaces/interface.tx_solr_formmodifier.php',
	'tx_solr_querymodifier' => $extensionPath . 'interfaces/interface.tx_solr_querymodifier.php',
	'tx_solr_substitutepageindexer' => $extensionPath . 'interfaces/interface.tx_solr_substitutepageindexer.php',
	'tx_solr_templatemodifier' => $extensionPath . 'interfaces/interface.tx_solr_templatemodifier.php',
	'tx_solr_viewhelper' => $extensionPath . 'interfaces/interface.tx_solr_viewhelper.php',
	'tx_solr_viewhelperprovider' => $extensionPath . 'interfaces/interface.tx_solr_viewhelperprovider.php',

	'tx_solr_moduleadmin' => $extensionPath . 'mod_admin/index.php',

	'tx_solr_pi_results' => $extensionPath . 'pi_results/class.tx_solr_pi_results.php',
	'tx_solr_pi_results_facetingcommand' => $extensionPath . 'pi_results/class.tx_solr_pi_results_facetingcommand.php',
	'tx_solr_pi_results_formcommand' => $extensionPath . 'pi_results/class.tx_solr_pi_results_formcommand.php',
	'tx_solr_pi_results_noresultscommand' => $extensionPath . 'pi_results/class.tx_solr_pi_results_noresultscommand.php',
	'tx_solr_pi_results_resultscommand' => $extensionPath . 'pi_results/class.tx_solr_pi_results_resultscommand.php',
	'tx_solr_pi_results_sortingcommand' => $extensionPath . 'pi_results/class.tx_solr_pi_results_sortingcommand.php',
	'tx_solr_pi_results_spellcheckformmodifier' => $extensionPath . 'pi_results/class.tx_solr_pi_results_spellcheckformmodifier.php',

	'tx_solr_scheduler_optimizetask' => $extensionPath . 'scheduler/class.tx_solr_scheduler_optimizetask.php',
	'tx_solr_scheduler_optimizetasksolrserverfield' => $extensionPath . 'scheduler/class.tx_solr_scheduler_optimizetasksolrserverfield.php',
	'tx_solr_scheduler_committask' => $extensionPath . 'scheduler/class.tx_solr_scheduler_committask.php',
	'tx_solr_scheduler_committasksolrserverfield' => $extensionPath . 'scheduler/class.tx_solr_scheduler_committasksolrserverfield.php',

	'tx_solr_report_accessfilterplugininstalledstatus' => $extensionPath . 'report/class.tx_solr_report_accessfilterplugininstalledstatus.php',
	'tx_solr_report_indexreport' => $extensionPath . 'report/class.tx_solr_report_indexreport.php',
	'tx_solr_report_schemastatus' => $extensionPath . 'report/class.tx_solr_report_schemastatus.php',
	'tx_solr_report_solrstatus' => $extensionPath . 'report/class.tx_solr_report_solrstatus.php',
);
?>