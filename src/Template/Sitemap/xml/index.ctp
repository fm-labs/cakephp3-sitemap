<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<?php foreach($this->get('locations') as $location):?>
		<sitemap>
			<loc><?= $this->Url->build($location['loc']); ?></loc>
		</sitemap>
	<?php endforeach; ?>
</sitemapindex>