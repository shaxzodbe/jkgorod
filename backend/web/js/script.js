$('.iconpicker').iconpicker({

    // Icon picker title
    title: false,

    // Selected icon on init
    selected: false,

    // Default icon
    defaultValue: false,

    // inline
    // topLeftCorner
    // topLeft
    // top (center)
    // topRight
    // topRightCorner
    // rightTop
    // right (center)
    // rightBottom
    // bottomRightCorner
    // bottomRight
    // bottom (center)
    // bottomLeft
    // bottomLeftCorner
    // leftBottom
    // left (center)
    // leftTop
    placement: "bottom",

    // Determine whether to re-position the icon picker
    collision: "none",

    // Enable animation
    animation: true,

    // Hide the icon picker on select
    hideOnSelect: false,

    // Show popover footer
    showFooter: false,

    // Place the search filed in the footer
    searchInFooter: false,

    // Pick the icon when click the accept button in the footer
    mustAccept: false,

    // CSS class for the selected icon
    selectedCustomClass: "bg-primary",

    // List of icon objects
    // icons: [],

    // Custom class formatter
    fullClassFormatter: function (e) {
        return e;
    },

    // Input selector
    input: "input,.iconpicker-input",

    // Determine whether to use this the input as a search box
    inputSearch: false,

    // Append the icon picker to a specific element
    container: false,

    // Default selector
    component: ".input-group-addon,.iconpicker-component",

    // Customize the template here
    templates: {
        popover: '<div class="iconpicker-popover popover" role="tooltip"><div class="arrow"></div>' + '<div class="popover-title"></div><div class="popover-content"></div></div>',
        footer: '<div class="popover-footer"></div>',
        buttons: '<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button>' + ' <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',
        search: '<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />',
        iconpicker: '<div class="iconpicker"><div class="iconpicker-items"></div></div>',
        iconpickerItem: '<a role="button" href="javascript:;" class="iconpicker-item"><i></i></a>'
    }

});