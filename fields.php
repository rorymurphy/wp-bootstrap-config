<?php
/*
Author: Rory Murphy
Version: 1.0.0
License: Modified MIT License - See LICENSE.TXT
For more great plugins, code snippets, and ideas, see my GitHub at https://github.com/rorymurphy/
*/
function get_bootstrap_default_settings(){
    $settings = array(
        'Colors' => array(
            '@black' => array('name' => '@black', 'title' => 'Black', 'type' => 'color', 'value' => '#000', 'order'=> 10),
            '@grayDarker' => array('name' => '@grayDarker', 'title' => 'Darker Gray', 'type' => 'color', 'value' => '#222', 'order'=> 10),
            '@grayDark' => array('name' => '@grayDark', 'title' => 'Dark Gray', 'type' => 'color', 'value' => '#333', 'order'=> 10),
            '@gray' => array('name' => '@gray', 'title' => 'Gray', 'type' => 'color', 'value' => '#555', 'order'=> 10),
            '@grayLight' => array('name' => '@grayLight', 'title' => 'Light Gray', 'type' => 'color', 'value' => '#999', 'order'=> 10),
            '@grayLighter' => array('name' => '@grayLighter', 'title' => 'Lighter Gray', 'type' => 'color', 'value' => '#eee', 'order'=> 10),
            '@white' => array('name' => '@white', 'title' => 'White', 'type' => 'color', 'value' => '#fff', 'order'=> 10),
            // Accent colors
            // -------------------------
            '@blue' => array('name' => '@blue', 'title' => 'Blue', 'type' => 'color', 'value' => '#049cdb', 'order'=> 10),
            '@blueDark' => array('name' => '@blueDark', 'title' => 'Dark Blue', 'type' => 'color', 'value' => '#0064cd', 'order'=> 10),
            '@green' => array('name' => '@green', 'title' => 'Green', 'type' => 'color', 'value' => '#46a546', 'order'=> 10),
            '@red' => array('name' => '@red', 'title' => 'Red', 'type' => 'color', 'value' => '#9d261d', 'order'=> 10),
            '@yellow' => array('name' => '@yellow', 'title' => 'Yellow', 'type' => 'color', 'value' => '#ffc40d', 'order'=> 10),
            '@orange' => array('name' => '@orange', 'title' => 'Orange', 'type' => 'color', 'value' => '#f89406', 'order'=> 10),
            '@pink' => array('name' => '@pink', 'title' => 'Pink', 'type' => 'color', 'value' => '#c3325f', 'order'=> 10),
            '@purple' => array('name' => '@purple', 'title' => 'Purple', 'type' => 'color', 'value' => '#7a43b6', 'order'=> 10)
        ),
        'Scaffolding' => array(
            '@bodyBackground' => array('name' => '@bodyBackground', 'title' => 'Body Background Color', 'type' => 'color', 'value' => '@gray', 'order'=> 20),
            '@textColor' => array('name' => '@textColor', 'title' => 'Text Color', 'type' => 'color', 'value' => '@grayDark', 'order'=> 20)
        ),
        'Links' => array(
            '@linkColor' => array('name' => '@linkColor', 'title' => 'Link Color', 'type' => 'color', 'value' => '#08c', 'order'=> 20),
            '@linkColorHover' => array('name' => '@linkColorHover', 'title' => 'Link Color Hover', 'type' => 'color', 'value' => 'darken(@linkColor, 15%)', 'order'=> 20)
        ),
        'Theme Settings' => array(),
        'Typography' => array(
            '@sansFontFamily' => array('name' => '@sansFontFamily', 'title' => 'Sans Font Family', 'type' => 'font-family', 'value' => '"Helvetica Neue", Helvetica, Arial, sans-serif', 'order'=> 20),
            '@serifFontFamily' => array('name' => '@serifFontFamily', 'title' => 'Serif Font Family', 'type' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif', 'order'=> 20),
            '@monoFontFamily' => array('name' => '@monoFontFamily', 'title' => 'Mono Font Family', 'type' => 'font-family', 'value' => 'Monaco, Menlo, Consolas, "Courier New", monospace', 'order'=> 20),

            '@baseFontSize' => array('name' => '@baseFontSize', 'title' => 'Base Font Size', 'type' => 'font-size', 'value' => '14px', 'order'=> 20),
            '@baseFontFamily' => array('name' => '@baseFontFamily', 'title' => 'Base Font Family', 'type' => 'font-family', 'value' => '@sansFontFamily', 'order'=> 30),
            '@baseLineHeight' => array('name' => '@baseLineHeight', 'title' => 'Base Line Height', 'type' => 'font-size', 'value' => '20px', 'order'=> 30),
            '@altFontFamily' => array('name' => '@altFontFamily', 'title' => 'Alt Font Family', 'type' => 'font-family', 'value' => '@serifFontFamily', 'order'=> 30),

            '@headingsFontFamily' => array('name' => '@headingsFontFamily', 'title' => 'Headings Font Family', 'type' => 'font-family', 'value' => 'inherit', 'order'=> 30),
            '@headingsFontWeight' => array('name' => '@headingsFontWeight', 'title' => 'Headings Font Weight', 'type' => 'font-weight', 'value' => 'bold', 'order'=> 30),
            '@headingsColor' => array('name' => '@headingsColor', 'title' => 'Headings Color', 'type' => 'color', 'value' => 'inherit', 'order'=> 30)
        ),
        'Component Sizing' => array(
            '@fontSizeLarge' => array('name' => '@fontSizeLarge', 'title' => 'Font Size Large', 'type' => 'font-size', 'value' => '@baseFontSize * 1.25', 'order'=> 40),
            '@fontSizeSmall' => array('name' => '@fontSizeSmall', 'title' => 'Font Size Small', 'type' => 'font-size', 'value' => '@baseFontSize * 0.85', 'order'=> 40),
            '@fontSizeMini' => array('name' => '@fontSizeMini', 'title' => 'Font Size Mini', 'type' => 'font-size', 'value' => '@baseFontSize * 0.75', 'order'=> 40),

            '@paddingLarge' => array('name' => '@paddingLarge', 'title' => 'Padding Large', 'type' => 'size', 'value' => '11px 19px', 'order'=> 40),
            '@paddingSmall' => array('name' => '@paddingSmall', 'title' => 'Padding Small', 'type' => 'size', 'value' => '2px 10px', 'order'=> 40),
            '@paddingMini' => array('name' => '@paddingMini', 'title' => 'Padding Mini', 'type' => 'size', 'value' => '0 6px', 'order'=> 40),

            '@baseBorderRadius' => array('name' => '@baseBorderRadius', 'title' => 'Base Border Radius', 'type' => 'size', 'value' => '4px', 'order'=> 40),
            '@borderRadiusLarge' => array('name' => '@borderRadiusLarge', 'title' => 'Border Radius Large', 'type' => 'size', 'value' => '6px', 'order'=> 40),
            '@borderRadiusSmall' => array('name' => '@borderRadiusSmall', 'title' => 'Border Radius Small', 'type' => 'size', 'value' => '3px', 'order'=> 40)
        ),
        'Tables' => array(
            '@tableBackground' => array('name' => '@tableBackground', 'title' => 'Table Background Color', 'type' => 'color', 'value' => 'transparent', 'order'=> 30),
            '@tableBackgroundAccent' => array('name' => '@tableBackgroundAccent', 'title' => 'Table Background Accent', 'type' => 'color', 'value' => '#f9f9f9', 'order'=> 30),
            '@tableBackgroundHover' => array('name' => '@tableBackgroundHover', 'title' => 'Table Background Hover', 'type' => 'color', 'value' => '#f5f5f5', 'order'=> 30),
            '@tableBorder' => array('name' => '@tableBorder', 'title' => 'Table Border', 'type' => 'color', 'value' => '#ddd', 'order'=> 30)
        ),
        'Buttons' => array(
            '@btnBackground' => array('name' => '@btnBackground', 'title' => 'Button Background Color', 'type' => 'color', 'value' => '@white', 'order'=> 30),
            '@btnBackgroundHighlight' => array('name' => '@btnBackgroundHighlight', 'title' => 'Button Background Highlight', 'type' => 'color', 'value' => 'darken(@white, 10%)', 'order'=> 30),
            '@btnBorder' => array('name' => '@btnBorder', 'title' => 'Button Background Border', 'type' => 'color', 'value' => '#bbb', 'order'=> 30),

            '@btnPrimaryBackground' => array('name' => '@btnPrimaryBackground', 'title' => 'Primary Button Background', 'type' => 'color', 'value' => '@linkColor', 'order'=> 30),
            '@btnPrimaryBackgroundHighlight' => array('name' => '@btnPrimaryBackgroundHighlight', 'title' => 'Primary Button Background Highlight', 'type' => 'color', 'value' => 'spin(@btnPrimaryBackground, 20%)', 'order'=> 30),

            '@btnInfoBackground' => array('name' => '@btnInfoBackground', 'title' => 'Info Button Background', 'type' => 'color', 'value' => '#5bc0de', 'order'=> 30),
            '@btnInfoBackgroundHighlight' => array('name' => '@btnInfoBackgroundHighlight', 'title' => 'Info Button Background Highlight', 'type' => 'color', 'value' => '#2f96b4', 'order'=> 30),

            '@btnSuccessBackground' => array('name' => '@btnSuccessBackground', 'title' => 'Success Button Background', 'type' => 'color', 'value' => '#62c462', 'order'=> 30),
            '@btnSuccessBackgroundHighlight' => array('name' => '@btnSuccessBackgroundHighlight', 'title' => 'Success Button Background Highlight', 'type' => 'color', 'value' => '#51a351', 'order'=> 30),

            '@btnWarningBackground' => array('name' => '@btnWarningBackground', 'title' => 'Warning Button Background', 'type' => 'color', 'value' => 'lighten(@orange, 15%)', 'order'=> 30),
            '@btnWarningBackgroundHighlight' => array('name' => '@btnWarningBackgroundHighlight', 'title' => 'Warning Button Background Hightlight', 'type' => 'color', 'value' => '@orange', 'order'=> 30),

            '@btnDangerBackground' => array('name' => '@btnDangerBackground', 'title' => 'Danger Button Background', 'type' => 'color', 'value' => '#ee5f5b', 'order'=> 30),
            '@btnDangerBackgroundHighlight' => array('name' => '@btnDangerBackgroundHighlight', 'title' => 'Danger Button Background Highlight', 'type' => 'color', 'value' => '#bd362f', 'order'=> 30),

            '@btnInverseBackground' => array('name' => '@btnInverseBackground', 'title' => 'Button Inverse Background', 'type' => 'color', 'value' => '#444', 'order'=> 30),
            '@btnInverseBackgroundHighlight' => array('name' => '@btnInverseBackgroundHighlight', 'title' => 'Button Inverse Background Highlight', 'type' => 'color', 'value' => '@grayDarker', 'order'=> 30)
        ),
        'Forms' => array(
            '@inputBackground' => array('name' => '@inputBackground', 'title' => 'Input Background', 'type' => 'color', 'value' => '@white', 'order'=> 30),
            '@inputBorder' => array('name' => '@inputBorder', 'title' => 'Input Border', 'type' => 'color', 'value' => '#ccc', 'order'=> 30),
            '@inputBorderRadius' => array('name' => '@inputBorderRadius', 'title' => 'Input Border Radius', 'type' => 'size', 'value' => '@baseBorderRadius', 'order'=> 30),
            '@inputDisabledBackground' => array('name' => '@inputDisabledBackground', 'title' => 'Input Disabled Background', 'type' => 'color', 'value' => '@grayLighter', 'order'=> 30),
            '@formActionsBackground' => array('name' => '@formActionsBackground', 'title' => 'Form Actions Background', 'type' => 'color', 'value' => '#f5f5f5', 'order'=> 30),
            '@inputHeight' => array('name' => '@inputHeight', 'title' => 'Input Height', 'type' => 'size', 'value' => '@baseLineHeight + 10px', 'order'=> 30),
            '@placeholderText' => array('name' => '@placeholderText', 'title' => 'Placeholder Text', 'type' => 'color', 'value' => '@grayLight', 'order'=> 30),
            '@horizontalComponentOffset' => array('name' => '@horizontalComponentOffset', 'title' => 'Horizontal Component Offset', 'type' => 'size', 'value' => '180px', 'order'=> 30)
        ),
        'Dropdowns' => array(
            '@dropdownBackground' => array('name' => '@dropdownBackground', 'title' => 'Dropdown Background', 'type' => 'color', 'value' => '@white', 'order'=> 30),
            '@dropdownBorder' => array('name' => '@dropdownBorder', 'title' => 'Dropdown Border', 'type' => 'color', 'value' => 'rgba(0,0,0,.2)', 'order'=> 30),
            '@dropdownDividerTop' => array('name' => '@dropdownDividerTop', 'title' => 'Dropdown Divider Top', 'type' => 'color', 'value' => '#e5e5e5', 'order'=> 30),
            '@dropdownDividerBottom' => array('name' => '@dropdownDividerBottom', 'title' => 'Dropdown Divider Bottom', 'type' => 'color', 'value' => '@white', 'order'=> 30),

            '@dropdownLinkColor' => array('name' => '@dropdownLinkColor', 'title' => 'Dropdown Link Color', 'type' => 'color', 'value' => '@grayDark', 'order'=> 30),
            '@dropdownLinkColorHover' => array('name' => '@dropdownLinkColorHover', 'title' => 'Dropdown Link Color Hover', 'type' => 'color', 'value' => '@white', 'order'=> 30),
            '@dropdownLinkColorActive' => array('name' => '@dropdownLinkColorActive', 'title' => 'Dropdown Link Color Active', 'type' => 'color', 'value' => '@white', 'order'=> 30),

            '@dropdownLinkBackgroundActive' => array('name' => '@dropdownLinkBackgroundActive', 'title' => 'Dropdown Link Background Active', 'type' => 'color', 'value' => '@linkColor', 'order'=> 30),
            '@dropdownLinkBackgroundHover' => array('name' => '@dropdownLinkBackgroundHover', 'title' => 'Dropdown Link Background Hover', 'type' => 'color', 'value' => '@dropdownLinkBackgroundActive', 'order'=> 30)
        ),
        'Component Variables' => array(
            '@zindexDropdown' => array('name' => '@zindexDropdown', 'title' => 'z-index Dropdown', 'type' => 'int', 'value' => '1000', 'order'=> 10),
            '@zindexPopover' => array('name' => '@zindexPopover', 'title' => 'z-index Popover', 'type' => 'int', 'value' => '1010', 'order'=> 10),
            '@zindexTooltip' => array('name' => '@zindexTooltip', 'title' => 'z-index Tooltip', 'type' => 'int', 'value' => '1030', 'order'=> 10),
            '@zindexFixedNavbar' => array('name' => '@zindexFixedNavbar', 'title' => 'z-index Fixed Navbar', 'type' => 'int', 'value' => '1030', 'order'=> 10),
            '@zindexModalBackdrop' => array('name' => '@zindexModalBackdrop', 'title' => 'z-index Modal Backdrop', 'type' => 'int', 'value' => '1040', 'order'=> 10),
            '@zindexModal' => array('name' => '@zindexModal', 'title' => 'z-index Modal', 'type' => 'int', 'value' => '1050', 'order'=> 10)

        ),
        'Sprites' => array(
            '@iconSpritePath' => array('name' => '@iconSpritePath', 'title' => 'Icon Sprite Path', 'type' => 'path', 'value' => '"../img/glyphicons-halflings.png"', 'order'=> 10),
            '@iconWhiteSpritePath' => array('name' => '@iconWhiteSpritePath', 'title' => 'Icon White Sprite Path', 'type' => 'path', 'value' => '"../img/glyphicons-halflings-white.png"', 'order'=> 10)
        ),
        'Dividers' => array(
            '@hrBorder' => array('name' => '@hrBorder', 'title' => 'hr Border', 'type' => 'color', 'value' => '@grayLighter', 'order'=> 30)
        ),
        'Wells' => array(
            '@wellBackground' => array('name' => '@wellBackground', 'title' => 'Well Background', 'type' => '', 'value' => '#f5f5f5', 'order'=> 30)
        ),
        'Navbar' => array(
            '@navbarCollapseWidth' => array('name' => '@navbarCollapseWidth', 'title' => 'Navbar Collapse Width', 'type' => 'size', 'value' => '979px', 'order'=> 10),
            '@navbarCollapseDesktopWidth' => array('name' => '@navbarCollapseDesktopWidth', 'title' => 'Navbar Collapse Desktop Width', 'type' => 'size', 'value' => '@navbarCollapseWidth + 1', 'order'=> 20),

            '@navbarHeight' => array('name' => '@navbarHeight', 'title' => 'Navbar Height', 'type' => 'size', 'value' => '40px', 'order'=> 10),
            '@navbarBackgroundHighlight' => array('name' => '@navbarBackgroundHighlight', 'title' => 'Navbar Background Highlight', 'type' => 'color', 'value' => '#ffffff', 'order'=> 30),
            '@navbarBackground' => array('name' => '@navbarBackground', 'title' => 'Navbar Background', 'type' => 'color', 'value' => 'darken(@navbarBackgroundHighlight, 5%)', 'order'=> 30),
            '@navbarBorder' => array('name' => '@navbarBorder', 'title' => 'Navbar Border', 'type' => 'color', 'value' => 'darken(@navbarBackground, 12%)', 'order'=> 30),

            '@navbarText' => array('name' => '@navbarText', 'title' => 'Navbar Text', 'type' => 'color', 'value' => '#777', 'order'=> 30),
            '@navbarLinkColor' => array('name' => '@navbarLinkColor', 'title' => 'Navbar Link Color', 'type' => 'color', 'value' => '#777', 'order'=> 30),
            '@navbarLinkColorHover' => array('name' => '@navbarLinkColorHover', 'title' => 'Navbar Link Color Hover', 'type' => 'color', 'value' => '@grayDark', 'order'=> 30),
            '@navbarLinkColorActive' => array('name' => '@navbarLinkColorActive', 'title' => 'Navbar Link Color Active', 'type' => 'color', 'value' => '@gray', 'order'=> 30),
            '@navbarLinkBackgroundHover' => array('name' => '@navbarLinkBackgroundHover', 'title' => 'Navbar Link Background Hover', 'type' => 'color', 'value' => 'transparent', 'order'=> 30),
            '@navbarLinkBackgroundActive' => array('name' => '@navbarLinkBackgroundActive', 'title' => 'Navbar Link Background Active', 'type' => 'color', 'value' => 'darken(@navbarBackground, 5%)', 'order'=> 30),

            '@navbarBrandColor' => array('name' => '@navbarBrandColor', 'title' => 'Navbar Brand Color', 'type' => 'color', 'value' => '@navbarLinkColor', 'order'=> 30),

            // Inverted navbar
            '@navbarInverseBackground' => array('name' => '@navbarInverseBackground', 'title' => 'Navbar Inverse Background', 'type' => 'color', 'value' => '#111111', 'order'=> 30),
            '@navbarInverseBackgroundHighlight' => array('name' => '@navbarInverseBackgroundHighlight', 'title' => 'Navbar Inverse Background Highlight', 'type' => 'color', 'value' => '#222222', 'order'=> 30),
            '@navbarInverseBorder' => array('name' => '@navbarInverseBorder', 'title' => 'Navbar Inverse Border', 'type' => 'color', 'value' => '#252525', 'order'=> 30),

            '@navbarInverseText' => array('name' => '@navbarInverseText', 'title' => 'Navbar Inverse Text', 'type' => 'color', 'value' => '@grayLight', 'order'=> 30),
            '@navbarInverseLinkColor' => array('name' => '@navbarInverseLinkColor', 'title' => 'Navbar Inverse Link Color', 'type' => 'color', 'value' => '@grayLight', 'order'=> 30),
            '@navbarInverseLinkColorHover' => array('name' => '@navbarInverseLinkColorHover', 'title' => 'Navbar Inverse Link Color Hover', 'type' => 'color', 'value' => '@white', 'order'=> 30),
            '@navbarInverseLinkColorActive' => array('name' => '@navbarInverseLinkColorActive', 'title' => 'Navbar Inverse Link Color Active', 'type' => 'color', 'value' => '@navbarInverseLinkColorHover', 'order'=> 30),
            '@navbarInverseLinkBackgroundHover' => array('name' => '@navbarInverseLinkBackgroundHover', 'title' => 'Navbar Inverse Link Background Hover', 'type' => 'color', 'value' => 'transparent', 'order'=> 30),
            '@navbarInverseLinkBackgroundActive' => array('name' => '@navbarInverseLinkBackgroundActive', 'title' => 'Navbar Inverse Link Background Active', 'type' => 'color', 'value' => '@navbarInverseBackground', 'order'=> 30),

            '@navbarInverseSearchBackground' => array('name' => '@navbarInverseSearchBackground', 'title' => 'Navbar Inverse Search Background', 'type' => 'color', 'value' => 'lighten(@navbarInverseBackground, 25%)', 'order'=> 30),
            '@navbarInverseSearchBackgroundFocus' => array('name' => '@navbarInverseSearchBackgroundFocus', 'title' => 'Navbar Inverse Search Background Focus', 'type' => 'color', 'value' => '@white', 'order'=> 30),
            '@navbarInverseSearchBorder' => array('name' => '@navbarInverseSearchBorder', 'title' => 'Navbar Inverse Search Border', 'type' => 'color', 'value' => '@navbarInverseBackground', 'order'=> 30),
            '@navbarInverseSearchPlaceholderColor' => array('name' => '@navbarInverseSearchPlaceholderColor', 'title' => 'Navbar Inverse Search Placeholder Color', 'type' => 'color', 'value' => '#ccc', 'order'=> 30),
            '@navbarInverseBrandColor' => array('name' => '@navbarInverseBrandColor', 'title' => 'Navbar Inverse Brand Color', 'type' => 'color', 'value' => '@navbarInverseLinkColor', 'order'=> 30)
        ),
        'Pagination' => array(
            '@paginationBackground' => array('name' => '@paginationBackground', 'title' => 'Pagination Background', 'type' => '', 'value' => '#fff', 'order'=> 30),
            '@paginationBorder' => array('name' => '@paginationBorder', 'title' => 'Pagination Border', 'type' => '', 'value' => '#ddd', 'order'=> 30),
            '@paginationActiveBackground' => array('name' => '@paginationActiveBackground', 'title' => 'Pagination Active Background', 'type' => '', 'value' => '#f5f5f5', 'order'=> 30)
        ),
        'Hero Unit' => array(
            '@heroUnitBackground' => array('name' => '@heroUnitBackground', 'title' => 'Hero Unit Background', 'type' => 'color', 'value' => '@grayLighter', 'order'=> 30),
            '@heroUnitHeadingColor' => array('name' => '@heroUnitHeadingColor', 'title' => 'Hero Unit Heading Color', 'type' => 'color', 'value' => 'inherit', 'order'=> 30),
            '@heroUnitLeadColor' => array('name' => '@heroUnitLeadColor', 'title' => 'Hero Unit Lead Color', 'type' => 'color', 'value' => 'inherit', 'order'=> 30),
        ),
        'Form states and alerts' => array(
            '@warningText' => array('name' => '@warningText', 'title' => 'Warning Text', 'type' => 'color', 'value' => '#c09853', 'order'=> 30),
            '@warningBackground' => array('name' => '@warningBackground', 'title' => 'Warning Background', 'type' => 'color', 'value' => '#fcf8e3', 'order'=> 30),
            '@warningBorder' => array('name' => '@warningBorder', 'title' => 'Warning Border', 'type' => 'color', 'value' => 'darken(spin(@warningBackground, -10), 3%)', 'order'=> 30),

            '@errorText' => array('name' => '@errorText', 'title' => 'Error Text', 'type' => 'color', 'value' => '#b94a48', 'order'=> 30),
            '@errorBackground' => array('name' => '@errorBackground', 'title' => 'Error Background', 'type' => 'color', 'value' => '#f2dede', 'order'=> 30),
            '@errorBorder' => array('name' => '@errorBorder', 'title' => 'Error Border', 'type' => 'color', 'value' => 'darken(spin(@errorBackground, -10), 3%)', 'order'=> 30),

            '@successText' => array('name' => '@successText', 'title' => 'Success Text', 'type' => 'color', 'value' => '#468847', 'order'=> 30),
            '@successBackground' => array('name' => '@successBackground', 'title' => 'Success Background', 'type' => 'color', 'value' => '#dff0d8', 'order'=> 30),
            '@successBorder' => array('name' => '@successBorder', 'title' => 'Success Border', 'type' => 'color', 'value' => 'darken(spin(@successBackground, -10), 5%)', 'order'=> 30),

            '@infoText' => array('name' => '@infoText', 'title' => 'Info Text', 'type' => 'color', 'value' => '#3a87ad', 'order'=> 30),
            '@infoBackground' => array('name' => '@infoBackground', 'title' => 'Info Background', 'type' => 'color', 'value' => '#d9edf7', 'order'=> 30),
            '@infoBorder' => array('name' => '@infoBorder', 'title' => 'Info Border', 'type' => 'color', 'value' => 'darken(spin(@infoBackground, -10), 7%)', 'order'=> 30),
        ),
        'Tooltips and popovers' => array(
            '@tooltipColor' => array('name' => '@tooltipColor', 'title' => 'Tooltip Color', 'type' => '', 'value' => '#fff', 'order'=> 30),
            '@tooltipBackground' => array('name' => '@tooltipBackground', 'title' => 'Tooltip Background', 'type' => 'color', 'value' => '#000', 'order'=> 30),
            '@tooltipArrowWidth' => array('name' => '@tooltipArrowWidth', 'title' => 'Tooltip Arrow Width', 'type' => 'size', 'value' => '5px', 'order'=> 30),
            '@tooltipArrowColor' => array('name' => '@tooltipArrowColor', 'title' => 'Tooltip Arrow Color', 'type' => 'color', 'value' => '@tooltipBackground', 'order'=> 30),

            '@popoverBackground' => array('name' => '@popoverBackground', 'title' => 'Popover Background', 'type' => 'color', 'value' => '#fff', 'order'=> 30),
            '@popoverArrowWidth' => array('name' => '@popoverArrowWidth', 'title' => 'Popover Arrow Width', 'type' => 'color', 'value' => '10px', 'order'=> 30),
            '@popoverArrowColor' => array('name' => '@popoverArrowColor', 'title' => 'Popover Arrow Color', 'type' => 'color', 'value' => '#fff', 'order'=> 30),
            '@popoverTitleBackground' => array('name' => '@popoverTitleBackground', 'title' => 'Popover Title Background', 'type' => 'color', 'value' => 'darken(@popoverBackground, 3%)', 'order'=> 30),

            // Special enhancement for popovers
            '@popoverArrowOuterWidth' => array('name' => '@popoverArrowOuterWidth', 'title' => 'Popover Arrow Outer Width', 'type' => 'size', 'value' => '@popoverArrowWidth + 1', 'order'=> 30),
            '@popoverArrowOuterColor' => array('name' => '@popoverArrowOuterColor', 'title' => 'Popover Arrow Outer Color', 'type' => 'color', 'value' => 'rgba(0,0,0,.25)', 'order'=> 30),
        ),
        'Grid' => array(
            // Default 940px grid
            // -------------------------
            '@gridColumns' => array('name' => '@gridColumns', 'title' => 'Grid Columns', 'type' => 'int', 'value' => '12', 'order'=> 10),
            '@gridColumnWidth' => array('name' => '@gridColumnWidth', 'title' => 'Grid Column Width', 'type' => 'size', 'value' => '60px', 'order'=> 10),
            '@gridGutterWidth' => array('name' => '@gridGutterWidth', 'title' => 'Grid Gutter Width', 'type' => 'size', 'value' => '20px', 'order'=> 10),
            '@gridRowWidth' => array('name' => '@gridRowWidth', 'title' => 'Grid Row Width', 'type' => 'size', 'value' => '(@gridColumns * @gridColumnWidth) + (@gridGutterWidth * (@gridColumns - 1))', 'order'=> 20, editable=>false),
            
            // 1200px min
            '@gridColumnWidth1200' => array('name' => '@gridColumnWidth1200', 'title' => 'Grid Column Width (1200px min width)', 'type' => 'size', 'value' => '70px', 'order'=> 10),
            '@gridGutterWidth1200' => array('name' => '@gridGutterWidth1200', 'title' => 'Grid Gutter Width (1200px min width)', 'type' => 'size', 'value' => '30px', 'order'=> 10),
            '@gridRowWidth1200' => array('name' => '@gridRowWidth1200', 'title' => 'Grid Row Width (1200px min width)', 'type' => 'size', 'value' => '(@gridColumns * @gridColumnWidth) + (@gridGutterWidth * (@gridColumns - 1))', 'order'=> 20, editable=>false),
            
            // 768px-979px
            '@gridColumnWidth768' => array('name' => '@gridColumnWidth768', 'title' => 'Grid Column Width (768px to 979px width)', 'type' => 'size', 'value' => '42px', 'order'=> 10),
            '@gridGutterWidth768' => array('name' => '@gridGutterWidth768', 'title' => 'Grid Gutter Width (768px to 979px width)', 'type' => 'size', 'value' => '20px', 'order'=> 10),
            '@gridRowWidth768' => array('name' => '@gridRowWidth768', 'title' => 'Grid Row Width (768px to 979px width)', 'type' => 'size', 'value' => '(@gridColumns * @gridColumnWidth) + (@gridGutterWidth * (@gridColumns - 1))', 'order'=> 20, editable=>false),
            
            '@fluidGridColumnWidth' => array('name' => '@fluidGridColumnWidth', 'title' => 'Fluid Grid Column Width', 'type' => 'size', 'value' => 'percentage(@gridColumnWidth/@gridRowWidth)', 'order'=> 30, editable=>false),
            '@fluidGridGutterWidth' => array('name' => '@fluidGridGutterWidth', 'title' => 'Fluid Grid Gutter Width', 'type' => 'size', 'value' => 'percentage(@gridGutterWidth/@gridRowWidth)', 'order'=> 30, editable=>false),
            '@fluidGridColumnWidth1200' => array('name' => '@fluidGridColumnWidth1200', 'title' => 'Fluid Grid Column Width (1200px min width)', 'type' => 'size', 'value' => 'percentage(@gridColumnWidth1200/@gridRowWidth1200)', 'order'=> 30, editable=>false),
            '@fluidGridGutterWidth1200' => array('name' => '@fluidGridGutterWidth1200', 'title' => 'Fluid Grid Gutter Width (1200px min width)', 'type' => 'size', 'value' => 'percentage(@gridGutterWidth1200/@gridRowWidth1200)', 'order'=> 30, editable=>false),
            '@fluidGridColumnWidth768' => array('name' => '@fluidGridColumnWidth768', 'title' => 'Fluid Grid Column Width (768px to 979px width)', 'type' => 'size', 'value' => 'percentage(@gridColumnWidth768/@gridRowWidth768)', 'order'=> 30, editable=>false),
            '@fluidGridGutterWidth768' => array('name' => '@fluidGridGutterWidth768', 'title' => 'Fluid Grid Gutter Width (768px to 979px width)', 'type' => 'size', 'value' => 'percentage(@gridGutterWidth768/@gridRowWidth768)', 'order'=> 30, editable=>false)
        )
    );

    $settings = apply_filters('bootstrap_config_default_values', $settings);
    return $settings;
}