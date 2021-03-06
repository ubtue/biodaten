<?php

namespace Biodaten;

define('DIR_TPL', '../tpl/');

define('DEFAULT_PAGE', 'home');
define('PAGES', [
    ['id' => 'home', 'title' => 'Home', 'navbar' => 'always'],
    ['id' => 'about', 'title' => 'About', 'navbar' => 'responsive', 'homeImage' => 'question-mark-2123969_640_400.jpg'],
    ['id' => 'news', 'title' => 'News', 'navbar' => 'responsive', 'homeImage' => 'newspapers-444447_640_400.jpg'],
    ['id' => 'conferences', 'title' => 'Conferences', 'navbar' => 'responsive', 'homeImage' => 'event-1597531_640_400.jpg'],
    ['id' => 'links', 'title' => 'Links', 'footer' => true],
    ['id' => 'privacy', 'title' => 'Privacy', 'footer' => true],
    ['id' => 'imprint', 'title' => 'Imprint', 'footer' => true],
]);

function GetPageCards() {
    $cards = '';
    foreach (PAGES as $page) {
        if (isset($page['homeImage'])) {
            $cards .=
                '<div class="card">
                    <img class="card-img-top" src="img/'.htmlspecialchars($page['homeImage']).'" alt="'.htmlspecialchars($page['title']).'">
                    <div class="card-body">
                        <a class="card-text stretched-link" href="'.GetPageUrl($page['id']).'">'.htmlspecialchars($page['title']).'</a>
                    </div>
                </div>';
        }
    }
    return $cards;
}

function GetPageNavbarEntries() {
    $entries = '';
    foreach (PAGES as $page) {
        if (isset($page['navbar'])) {
            // default: same as 'always'
            $classes = 'navbar-brand align-items-center';
            if ($page['navbar'] == 'responsive')
                $classes .= ' d-none d-sm-flex';

            $entries .=
            '<a href="'.GetPageUrl($page['id']).'" class="' . $classes . '">
                <strong>'.htmlspecialchars($page['title']).'</strong>
            </a>';
        }
    }
    return $entries;
}

function GetPageNavbarEntriesExtended() {
    $entries = '';
    foreach (PAGES as $page) {
        $entries .= '<li><a href="'.GetPageUrl($page['id']).'" class="text-white">'.htmlspecialchars($page['title']).'</a></li>';
    }
    return $entries;
}

function GetPageFooterEntries() {
    $entries = '';
    foreach (PAGES as $page) {
        if (isset($page['footer']) && $page['footer'] === true) {
            $entries .= '<a href="'.GetPageUrl($page['id']).'">'.htmlspecialchars($page['title']).'</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        }
    }
    return $entries;
}

function GetPageUrl($id) {
    return ($id == DEFAULT_PAGE) ? '/' : '/?page=' . urlencode($id);
}

function GetPageTemplate() {
    $page = $_GET['page'] ?? DEFAULT_PAGE;
    $pageTemplate = is_file(DIR_TPL . $page . '.php') ? DIR_TPL . $page . '.php' : DIR_TPL . DEFAULT_PAGE . '.php';
    return $pageTemplate;
}
