<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\CmsPageDataImport\Dependency\Facade;

use Generated\Shared\Transfer\CmsGlossaryTransfer;
use Generated\Shared\Transfer\CmsPageAttributesTransfer;
use Generated\Shared\Transfer\CmsPageTransfer;
use Generated\Shared\Transfer\CmsVersionTransfer;

interface CmsPageDataImportToCmsFacadeInterface
{
    public function hasPagePlaceholderMapping(int $idPage, string $placeholder): bool;

    public function createPage(CmsPageTransfer $cmsPageTransfer): int;

    public function findPageGlossaryAttributes(int $idCmsPage): ?CmsGlossaryTransfer;

    public function saveCmsGlossary(CmsGlossaryTransfer $cmsGlossaryTransfer): CmsGlossaryTransfer;

    public function findCmsPageById(int $idCmsPage): ?CmsPageTransfer;

    public function updatePage(CmsPageTransfer $cmsPageTransfer): CmsPageTransfer;

    public function activatePage(int $idCmsPage): void;

    public function deactivatePage(int $idCmsPage): void;

    public function getPageUrlPrefix(CmsPageAttributesTransfer $cmsPageAttributesTransfer): string;

    public function buildPageUrl(CmsPageAttributesTransfer $cmsPageAttributesTransfer): string;

    public function publishWithVersion(int $idCmsPage, ?string $versionName = null): CmsVersionTransfer;

    public function rollback(int $idCmsPage, int $version): CmsVersionTransfer;

    public function revert(int $idCmsPage): void;

    public function findLatestCmsVersionByIdCmsPage(int $idCmsPage): CmsVersionTransfer;

    /**
     * @param int $idCmsPage
     *
     * @return array<\Generated\Shared\Transfer\CmsVersionTransfer>
     */
    public function findAllCmsVersionByIdCmsPage(int $idCmsPage): array;

    public function findCmsVersionByIdCmsPageAndVersion(int $idCmsPage, int $version): CmsVersionTransfer;

    public function syncTemplate(string $cmsTemplateFolderPath): bool;
}
