(function(Wishlist,$){var $wishlistButton=$(".wishlist-btn"),$wishlistTile=$(".wishlist-tile-container"),numProductTiles=$wishlistTile.length,wishlist=localStorage.getItem("user_wishlist")||[];wishlist.length>0&&(wishlist=JSON.parse(localStorage.getItem("user_wishlist")));var animateWishlist=function(self){$(self).toggleClass("is-active")},updateWishlist=function(self){var productHandle=$(self).attr("data-product-handle"),isRemove=$(self).hasClass("is-active");if(isRemove){var removeIndex=wishlist.indexOf(productHandle);wishlist.splice(removeIndex,1),localStorage.setItem("user_wishlist",JSON.stringify(wishlist))}else wishlist.push(productHandle),localStorage.setItem("user_wishlist",JSON.stringify(wishlist));console.log(JSON.stringify(wishlist))},activateItemsInWishlist=function(){$wishlistButton.each(function(){var productHandle=$(this).attr("data-product-handle");wishlist.indexOf(productHandle)>-1&&$(this).addClass("is-active")})},displayOnlyWishlistItems=function(){$wishlistTile.each(function(){var productHandle=$(this).attr("data-product-handle");wishlist.indexOf(productHandle)===-1&&($(this).remove(),numProductTiles--)})},loadWishlist=function(){window.location.href.indexOf("pages/wishlist")>-1&&(displayOnlyWishlistItems(),$(".wishlist-loader").fadeOut(2e3,function(){$(".wishlist-grid").addClass("is_visible"),$(".wishlist-hero").addClass("is_visible"),numProductTiles==0?$(".wishlist-grid--empty-list").addClass("is_visible"):$(".wishlist-grid--empty-list").hide()}))},bindUIActions=function(){$wishlistButton.click(function(e){e.preventDefault(),updateWishlist(this),animateWishlist(this)})};Wishlist.init=function(){bindUIActions(),activateItemsInWishlist(),loadWishlist()}})(window.Wishlist=window.Wishlist||{},jQuery,void 0);
//# sourceMappingURL=/cdn/shop/t/2/assets/wishlist.js.map?v=105081889935872174341561366635
