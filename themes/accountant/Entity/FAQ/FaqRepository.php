<?php
namespace Entity\FAQ;

use Entity\Faq;
use Entity\PostType\PostTypeRepository;

class FaqRepository extends PostTypeRepository {

	public function __construct()
	{
		$this->machineName = Faq::$MACHINE_NAME;
		parent::__construct();
	}

	/**
	 * Get latest Post
	 *
	 * @param int  $count
	 * @param bool $returnQuery
	 *
	 * @return array|bool|[Faq]
	 */
	public static function getLatest($count = 10, $returnQuery = false)
	{
		$result = self::findSmartAll([], [
			'count' => $count,
			'order' => 'ASC',
		], $returnQuery);

		return $result;
	}

}