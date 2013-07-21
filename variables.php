<?php
/*
Author: Rory Murphy
Version: 1.0.0
License: Modified MIT License - See LICENSE.TXT
For more great plugins, code snippets, and ideas, see my GitHub at https://github.com/rorymurphy/
*/
function generate_variables_less_file($values, $options){
    ob_start();
    ?>
//
// Variables
// --------------------------------------------------


// Global values
// --------------------------------------------------


// Grays
// -------------------------
@black: <?php print $values['@black']; ?>;
@grayDarker: <?php print $values['@grayDarker']; ?>;
@grayDark: <?php print $values['@grayDark']; ?>;
@gray: <?php print $values['@gray']; ?>;
@grayLight: <?php print $values['@grayLight']; ?>;
@grayLighter: <?php print $values['@grayLighter']; ?>;
@white: <?php print $values['@white']; ?>;


// Accent colors
// -------------------------
@blue: <?php print $values['@blue']; ?>;
@blueDark: <?php print $values['@blueDark']; ?>;
@green: <?php print $values['@green']; ?>;
@red: <?php print $values['@red']; ?>;
@yellow: <?php print $values['@yellow']; ?>;
@orange: <?php print $values['@orange']; ?>;
@pink: <?php print $values['@pink']; ?>;
@purple: <?php print $values['@purple']; ?>;


// Scaffolding
// -------------------------
@bodyBackground: <?php print $values['@bodyBackground']; ?>;
@textColor: <?php print $values['@textColor']; ?>;


// Links
// -------------------------
@linkColor: <?php print $values['@linkColor']; ?>;
@linkColorHover: <?php print $values['@linkColorHover']; ?>;


// Typography
// -------------------------
@sansFontFamily: <?php print $values['@sansFontFamily']; ?>;
@serifFontFamily: <?php print $values['@serifFontFamily']; ?>;
@monoFontFamily: <?php print $values['@monoFontFamily']; ?>;

@baseFontSize: <?php print $values['@baseFontSize']; ?>;
@baseFontFamily: <?php print $values['@baseFontFamily']; ?>;
@baseLineHeight: <?php print $values['@baseLineHeight']; ?>;
@altFontFamily: <?php print $values['@altFontFamily']; ?>;

@headingsFontFamily: <?php print $values['@headingsFontFamily']; ?>;
@headingsFontWeight: <?php print $values['@headingsFontWeight']; ?>;
@headingsColor: <?php print $values['@headingsColor']; ?>;


// Component sizing
// -------------------------
// Based on 14px font-size and 20px line-height

@fontSizeLarge: <?php print $values['@fontSizeLarge']; ?>;
@fontSizeSmall: <?php print $values['@fontSizeSmall']; ?>;
@fontSizeMini: <?php print $values['@fontSizeMini']; ?>;

@paddingLarge: <?php print $values['@paddingLarge']; ?>;
@paddingSmall: <?php print $values['@paddingSmall']; ?>;
@paddingMini: <?php print $values['@paddingMini']; ?>;

@baseBorderRadius: <?php print $values['@baseBorderRadius']; ?>;
@borderRadiusLarge: <?php print $values['@borderRadiusLarge']; ?>;
@borderRadiusSmall: <?php print $values['@borderRadiusSmall']; ?>;


// Tables
// -------------------------
@tableBackground: <?php print $values['@tableBackground']; ?>;
@tableBackgroundAccent: <?php print $values['@tableBackgroundAccent']; ?>;
@tableBackgroundHover: <?php print $values['@tableBackgroundHover']; ?>;
@tableBorder: <?php print $values['@tableBorder']; ?>;

// Buttons
// -------------------------
@btnBackground: <?php print $values['@btnBackground']; ?>;
@btnBackgroundHighlight: <?php print $values['@btnBackgroundHighlight']; ?>;
@btnBorder: <?php print $values['@btnBorder']; ?>;

@btnPrimaryBackground: <?php print $values['@btnPrimaryBackground']; ?>;
@btnPrimaryBackgroundHighlight: <?php print $values['@btnPrimaryBackgroundHighlight']; ?>;

@btnInfoBackground: <?php print $values['@btnInfoBackground']; ?>;
@btnInfoBackgroundHighlight: <?php print $values['@btnInfoBackgroundHighlight']; ?>;

@btnSuccessBackground: <?php print $values['@btnSuccessBackground']; ?>;
@btnSuccessBackgroundHighlight: <?php print $values['@btnSuccessBackgroundHighlight']; ?>;

@btnWarningBackground: <?php print $values['@btnWarningBackground']; ?>;
@btnWarningBackgroundHighlight: <?php print $values['@btnWarningBackgroundHighlight']; ?>;

@btnDangerBackground: <?php print $values['@btnDangerBackground']; ?>;
@btnDangerBackgroundHighlight: <?php print $values['@btnDangerBackgroundHighlight']; ?>;

@btnInverseBackground: <?php print $values['@btnInverseBackground']; ?>;
@btnInverseBackgroundHighlight: <?php print $values['@btnInverseBackgroundHighlight']; ?>;


// Forms
// -------------------------
@inputBackground: <?php print $values['@inputBackground']; ?>;
@inputBorder: <?php print $values['@inputBorder']; ?>;
@inputBorderRadius: <?php print $values['@inputBorderRadius']; ?>;
@inputDisabledBackground: <?php print $values['@inputDisabledBackground']; ?>;
@formActionsBackground: <?php print $values['@formActionsBackground']; ?>;
@inputHeight: <?php print $values['@inputHeight']; ?>;


// Dropdowns
// -------------------------
@dropdownBackground: <?php print $values['@dropdownBackground']; ?>;
@dropdownBorder: <?php print $values['@dropdownBorder']; ?>;
@dropdownDividerTop: <?php print $values['@dropdownDividerTop']; ?>;
@dropdownDividerBottom: <?php print $values['@dropdownDividerBottom']; ?>;

@dropdownLinkColor: <?php print $values['@dropdownLinkColor']; ?>;
@dropdownLinkColorHover: <?php print $values['@dropdownLinkColorHover']; ?>;
@dropdownLinkColorActive: <?php print $values['@dropdownLinkColorActive']; ?>;

@dropdownLinkBackgroundActive: <?php print $values['@dropdownLinkBackgroundActive']; ?>;
@dropdownLinkBackgroundHover: <?php print $values['@dropdownLinkBackgroundHover']; ?>;



// COMPONENT VARIABLES
// --------------------------------------------------


// Z-index master list
// -------------------------
// Used for a bird's eye view of components dependent on the z-axis
// Try to avoid customizing these
@zindexDropdown: <?php print $values['@zindexDropdown']; ?>;
@zindexPopover: <?php print $values['@zindexPopover']; ?>;
@zindexTooltip: <?php print $values['@zindexTooltip']; ?>;
@zindexFixedNavbar: <?php print $values['@zindexFixedNavbar']; ?>;
@zindexModalBackdrop: <?php print $values['@zindexModalBackdrop']; ?>;
@zindexModal: <?php print $values['@zindexModal']; ?>;


// Sprite icons path
// -------------------------
@iconSpritePath: <?php print $values['@iconSpritePath']; ?>;
@iconWhiteSpritePath: <?php print $values['@iconWhiteSpritePath']; ?>;


// Input placeholder text color
// -------------------------
@placeholderText: <?php print $values['@placeholderText']; ?>;


// Hr border color
// -------------------------
@hrBorder: <?php print $values['@hrBorder']; ?>;


// Horizontal forms & lists
// -------------------------
@horizontalComponentOffset: <?php print $values['@horizontalComponentOffset']; ?>;


// Wells
// -------------------------
@wellBackground: <?php print $values['@wellBackground']; ?>;


// Navbar
// -------------------------
@navbarCollapseWidth: <?php print $values['@navbarCollapseWidth']; ?>;
@navbarCollapseDesktopWidth: <?php print $values['@navbarCollapseDesktopWidth']; ?>;

@navbarHeight: <?php print $values['@navbarHeight']; ?>;
@navbarBackgroundHighlight: <?php print $values['@navbarBackgroundHighlight']; ?>;
@navbarBackground: <?php print $values['@navbarBackground']; ?>;
@navbarBorder: <?php print $values['@navbarBorder']; ?>;

@navbarText: <?php print $values['@navbarText']; ?>;
@navbarLinkColor: <?php print $values['@navbarLinkColor']; ?>;
@navbarLinkColorHover: <?php print $values['@navbarLinkColorHover']; ?>;
@navbarLinkColorActive: <?php print $values['@navbarLinkColorActive']; ?>;
@navbarLinkBackgroundHover: <?php print $values['@navbarLinkBackgroundHover']; ?>;
@navbarLinkBackgroundActive: <?php print $values['@navbarLinkBackgroundActive']; ?>;

@navbarBrandColor: <?php print $values['@navbarBrandColor']; ?>;

// Inverted navbar
@navbarInverseBackground: <?php print $values['@navbarInverseBackground']; ?>;
@navbarInverseBackgroundHighlight: <?php print $values['@navbarInverseBackgroundHighlight']; ?>;
@navbarInverseBorder: <?php print $values['@navbarInverseBorder']; ?>;

@navbarInverseText: <?php print $values['@navbarInverseText']; ?>;
@navbarInverseLinkColor: <?php print $values['@navbarInverseLinkColor']; ?>;
@navbarInverseLinkColorHover: <?php print $values['@navbarInverseLinkColorHover']; ?>;
@navbarInverseLinkColorActive: <?php print $values['@navbarInverseLinkColorActive']; ?>;
@navbarInverseLinkBackgroundHover: <?php print $values['@navbarInverseLinkBackgroundHover']; ?>;
@navbarInverseLinkBackgroundActive: <?php print $values['@navbarInverseLinkBackgroundActive']; ?>;

@navbarInverseSearchBackground: <?php print $values['@navbarInverseSearchBackground']; ?>;
@navbarInverseSearchBackgroundFocus: <?php print $values['@navbarInverseSearchBackgroundFocus']; ?>;
@navbarInverseSearchBorder: <?php print $values['@navbarInverseSearchBorder']; ?>;
@navbarInverseSearchPlaceholderColor: <?php print $values['@navbarInverseSearchPlaceholderColor']; ?>;

@navbarInverseBrandColor: <?php print $values['@navbarInverseBrandColor']; ?>;


// Pagination
// -------------------------
@paginationBackground: <?php print $values['@paginationBackground']; ?>;
@paginationBorder: <?php print $values['@paginationBorder']; ?>;
@paginationActiveBackground: <?php print $values['@paginationActiveBackground']; ?>;


// Hero unit
// -------------------------
@heroUnitBackground: <?php print $values['@heroUnitBackground']; ?>;
@heroUnitHeadingColor: <?php print $values['@heroUnitHeadingColor']; ?>;
@heroUnitLeadColor: <?php print $values['@heroUnitLeadColor']; ?>;


// Form states and alerts
// -------------------------
@warningText: <?php print $values['@warningText']; ?>;
@warningBackground: <?php print $values['@warningBackground']; ?>;
@warningBorder: <?php print $values['@warningBorder']; ?>;

@errorText: <?php print $values['@errorText']; ?>;
@errorBackground: <?php print $values['@errorBackground']; ?>;
@errorBorder: <?php print $values['@errorBorder']; ?>;

@successText: <?php print $values['@successText']; ?>;
@successBackground: <?php print $values['@successBackground']; ?>;
@successBorder: <?php print $values['@successBorder']; ?>;

@infoText: <?php print $values['@infoText']; ?>;
@infoBackground: <?php print $values['@infoBackground']; ?>;
@infoBorder: <?php print $values['@infoBorder']; ?>;


// Tooltips and popovers
// -------------------------
@tooltipColor: <?php print $values['@tooltipColor']; ?>;
@tooltipBackground: <?php print $values['@tooltipBackground']; ?>;
@tooltipArrowWidth: <?php print $values['@tooltipArrowWidth']; ?>;
@tooltipArrowColor: <?php print $values['@tooltipArrowColor']; ?>;

@popoverBackground: <?php print $values['@popoverBackground']; ?>;
@popoverArrowWidth: <?php print $values['@popoverArrowWidth']; ?>;
@popoverArrowColor: <?php print $values['@popoverArrowColor']; ?>;
@popoverTitleBackground: <?php print $values['@popoverTitleBackground']; ?>;

// Special enhancement for popovers
@popoverArrowOuterWidth: <?php print $values['@popoverArrowOuterWidth']; ?>;
@popoverArrowOuterColor: <?php print $values['@popoverArrowOuterColor']; ?>;



// GRID
// --------------------------------------------------


// Default 940px grid
// -------------------------
@gridColumns: <?php print $values['@gridColumns']; ?>;
@gridColumnWidth: <?php print $values['@gridColumnWidth']; ?>;
@gridGutterWidth: <?php print $values['@gridGutterWidth']; ?>;
@gridRowWidth:            (@gridColumns * @gridColumnWidth) + (@gridGutterWidth * (@gridColumns - 1));

// 1200px min
@gridColumnWidth1200: <?php print $values['@gridColumnWidth1200']; ?>;
@gridGutterWidth1200: <?php print $values['@gridGutterWidth1200']; ?>;
@gridRowWidth1200:        (@gridColumns * @gridColumnWidth1200) + (@gridGutterWidth1200 * (@gridColumns - 1));

// 768px-979px
@gridColumnWidth768: <?php print $values['@gridColumnWidth768']; ?>;
@gridGutterWidth768: <?php print $values['@gridGutterWidth768']; ?>;
@gridRowWidth768:         (@gridColumns * @gridColumnWidth768) + (@gridGutterWidth768 * (@gridColumns - 1));


// Fluid grid
// -------------------------
@fluidGridColumnWidth:    percentage(@gridColumnWidth/@gridRowWidth);
@fluidGridGutterWidth:    percentage(@gridGutterWidth/@gridRowWidth);

// 1200px min
@fluidGridColumnWidth1200:     percentage(@gridColumnWidth1200/@gridRowWidth1200);
@fluidGridGutterWidth1200:     percentage(@gridGutterWidth1200/@gridRowWidth1200);

// 768px-979px
@fluidGridColumnWidth768:      percentage(@gridColumnWidth768/@gridRowWidth768);
@fluidGridGutterWidth768:      percentage(@gridGutterWidth768/@gridRowWidth768);

//Layout Properties
@containerBackground: <?php print $values['@containerBackground']; ?>;
@containerPadding:      <?php print $values['@containerPadding']; ?>;
@headerImagePadding:      <?php print $values['@headerImagePadding']; ?>;
@contentPadding:      <?php print $values['@contentPadding']; ?>;
<?php
    $result = ob_get_contents();
    ob_end_clean();
    return $result;
}
