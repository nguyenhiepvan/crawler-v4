<?php
/**
 * Created by PhpStorm.
 * User: hocvt
 * Date: 2020-03-08
 * Time: 03:59
 */

namespace App\Spider\StorageDrivers;


use App\Sites\Simple\SiteInfo;
use App\Spider\CrawlUrl;

interface DataStorageInterface {

    const SAVE_OVERWRITE = 'overwrite';
    const SAVE_NORMAL = 'normal';
    const SAVE_MERGE = 'merge';

    public function store( array $data, CrawlUrl $crawlUrl, SiteInfo $siteInfo = null ): bool;

    public function get( CrawlUrl $crawlUrl, SiteInfo $siteInfo = null ): array;

}
