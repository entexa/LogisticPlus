# LogisticPlus
Magento 1.9 delivery box dimensions module

· [Frontend] in the product detail page: show the dimensions of the box (length, width, height) that contains the product and it will also show the volume of that box.

· [Frontend] in the cart page: show the total volume of your oder as well as the total price of the order. The idea is the total volume information will be provided later on to the parcel service to ask for a live quotation.

· [Backend] module inform for every product about these 3 dimensions. The volume is visible although it is a calculated field depending on the values of the three dimensions; if any of the dimensions change, the volume calculated is updated and stored the new value in the database.
