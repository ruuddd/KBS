
<!DOCTYPE html><html class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/Msiem/pen/BLrPdy?limit=all&page=40&q=shop" />


<style class="cp-pen-styles">body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}

.App {
  max-width: 800px;
  margin: 0 auto;
}
.App-nav {
  margin: 20px;
  padding: 10px;
  border-bottom: 2px solid #508FCA;
}
.App-nav ul {
  padding: 0;
  margin: 0;
}
.App-nav-item {
  list-style: none;
  display: inline-block;
  margin-right: 32px;
  font-size: 24px;
  border-bottom: 4px solid transparent;
}
.App-content {
  margin: 0 20px;
}

.App-nav-item a {
  cursor: pointer;
}
.App-nav-item a:hover {
  color: #999;
}
.App-nav-item.selected {
  border-bottom-color: #FFAA3F;
}

.Item {
  display: flex;
  justify-content: space-between;
  border-bottom: 1px solid #ccc;
  padding: 10px;
}
.Item-image {
  width: 64px;
  height: 64px;
  border: 1px solid #ccc;
  margin-right: 10px;
  float: left;
}
.Item-title {
  font-weight: bold;
  margin-bottom: 0.4em;
}
.Item-price {
  text-align: right;
  font-size: 18px;
  color: #555;
}
.Item-addToCart {
  margin-bottom: 5px;
  font-size: 14px;
  border: 2px solid #FFAA3F;
  background-color: #fff;
  border-radius: 3px;
  cursor: pointer;
}
.Item-addToCart:hover {
  background-color: #FFDDB2;
}
.Item-addToCart:active {
  background-color: #ED8400;
  color: #fff;
  outline: none;
}
.Item-addToCart:focus {
  outline: none;
}
.Item-left {
  flex: 1;
}
.Item-right {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.ItemPage-items {
  margin: 0;
  padding: 0;
}
.ItemPage-items li {
  list-style: none;
  margin-bottom: 20px;
}


.CartPage-items {
  margin: 0;
  padding: 0;
}
.CartPage-items li {
  list-style: none;
  margin-bottom: 20px;
}
.CartItem-count {
  padding: 5px 10px;
  border: 1px solid #ccc;
}
.CartItem-addOne,
.CartItem-removeOne {
  padding: 5px 10px;
  border: 1px solid #ccc;
  background: #fff;
}
.CartItem-addOne {
  border-left: none;
}
.CartItem-removeOne {
  border-right: none;
}
</style></head><body>
<body>
  <div id="root"></div>
</body>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.3.1/react.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.3.1/react-dom.min.js'></script>
<script >"use strict";

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) {if (window.CP.shouldStopExecution(2)){break;} var source = arguments[i]; for (var key in source) {if (window.CP.shouldStopExecution(1)){break;} if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } }
window.CP.exitedLoop(1);
 }
window.CP.exitedLoop(2);
 return target; };

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var items = [{
  id: 0,
  name: "Apple iPad Mini 2 16GB",
  description: "An iPad like no other. 16GB, WiFi, 4G.",
  price: 229.00
}, {
  id: 1,
  name: "Apple iPad Mini 2 32GB",
  description: "Even larger than the 16GB.",
  price: 279.00
}, {
  id: 2,
  name: "Canon T6i",
  description: "DSLR camera with lots of megapixels.",
  price: 749.99
}, {
  id: 3,
  name: "Apple Watch Sport",
  description: "A watch",
  price: 249.99
}, {
  id: 4,
  name: "Apple Watch Silver",
  description: "A more expensive watch",
  price: 599.99
}];

var Nav = function (_React$Component) {
  _inherits(Nav, _React$Component);

  function Nav() {
    _classCallCheck(this, Nav);

    return _possibleConstructorReturn(this, _React$Component.apply(this, arguments));
  }

  Nav.prototype.render = function render() {
    var _props = this.props;
    var selectedTab = _props.selectedTab;
    var onTabChange = _props.onTabChange;

    return React.createElement(
      "nav",
      { className: "App-nav" },
      React.createElement(
        "ul",
        null,
        React.createElement(
          "li",
          { className: "App-nav-item " + (selectedTab === 0 && 'selected') },
          React.createElement(
            "a",
            { onClick: onTabChange.bind(this, 0) },
            "Items"
          )
        ),
        React.createElement(
          "li",
          { className: "App-nav-item " + (selectedTab === 1 && 'selected') },
          React.createElement(
            "a",
            { onClick: onTabChange.bind(this, 1) },
            "Cart"
          )
        )
      )
    );
  };

  return Nav;
}(React.Component);

Nav.propTypes = {
  selectedTab: React.PropTypes.number.isRequired,
  onTabChange: React.PropTypes.func.isRequired
};

var Item = function Item(_ref) {
  var item = _ref.item;
  var children = _ref.children;
  return React.createElement(
    "div",
    { className: "Item" },
    React.createElement(
      "div",
      { className: "Item-left" },
      React.createElement("div", { className: "Item-image" }),
      React.createElement(
        "div",
        { className: "Item-title" },
        item.name
      ),
      React.createElement(
        "div",
        { className: "Item-description" },
        item.description
      )
    ),
    React.createElement(
      "div",
      { className: "Item-right" },
      React.createElement(
        "div",
        { className: "Item-price" },
        "$",
        item.price
      ),
      children
    )
  );
};
Item.propTypes = {
  item: React.PropTypes.object.isRequired,
  children: React.PropTypes.node
};

function ItemPage(_ref2) {
  var items = _ref2.items;
  var onAddToCart = _ref2.onAddToCart;

  return React.createElement(
    "ul",
    { className: "ItemPage-items" },
    items.map(function (item) {
      return React.createElement(
        "li",
        { key: item.id, className: "ItemPage-item" },
        React.createElement(
          Item,
          { item: item },
          React.createElement(
            "button",
            {
              className: "Item-addToCart",
              onClick: onAddToCart.bind(null, item) },
            "Add to Cart"
          )
        )
      );
    })
  );
}
ItemPage.propTypes = {
  items: React.PropTypes.array.isRequired,
  onAddToCart: React.PropTypes.func.isRequired
};

function CartPage(_ref3) {
  var items = _ref3.items;
  var onAddOne = _ref3.onAddOne;
  var onRemoveOne = _ref3.onRemoveOne;

  return React.createElement(
    "ul",
    { className: "CartPage-items" },
    items.map(function (item) {
      return React.createElement(
        "li",
        { key: item.id, className: "CartPage-item" },
        React.createElement(
          Item,
          { item: item },
          React.createElement(
            "div",
            { className: "CartItem-controls" },
            React.createElement(
              "button",
              {
                className: "CartItem-removeOne",
                onClick: onRemoveOne.bind(null, item) },
              "–"
            ),
            React.createElement(
              "span",
              { className: "CartItem-count" },
              item.count
            ),
            React.createElement(
              "button",
              {
                className: "CartItem-addOne",
                onClick: onAddOne.bind(null, item) },
              "+"
            )
          )
        )
      );
    })
  );
}
CartPage.propTypes = {
  items: React.PropTypes.array.isRequired,
  onAddOne: React.PropTypes.func.isRequired,
  onRemoveOne: React.PropTypes.func.isRequired
};

var App = function (_React$Component2) {
  _inherits(App, _React$Component2);

  function App(props) {
    _classCallCheck(this, App);

    var _this2 = _possibleConstructorReturn(this, _React$Component2.call(this, props));

    _this2.handleTabChanged = function (index) {
      _this2.setState({ selectedTab: index });
    };

    _this2.handleAddToCart = function (item) {
      _this2.setState({
        cart: [].concat(_this2.state.cart, [item.id])
      });
    };

    _this2.handleRemoveOne = function (item) {
      var index = _this2.state.cart.indexOf(item.id);
      _this2.setState({
        cart: [].concat(_this2.state.cart.slice(0, index), _this2.state.cart.slice(index + 1))
      });
    };

    _this2.state = {
      selectedTab: 0,
      cart: []
    };
    return _this2;
  }

  App.prototype.renderContent = function renderContent() {
    switch (this.state.selectedTab) {
      default:
      case 0:
        return React.createElement(ItemPage, {
          items: items,
          onAddToCart: this.handleAddToCart });
      case 1:
        return this.renderCart();
    }
  };

  App.prototype.renderCart = function renderCart() {
    // Count how many of each item is in the cart
    var itemCounts = this.state.cart.reduce(function (itemCounts, itemId) {
      itemCounts[itemId] = itemCounts[itemId] || 0;
      itemCounts[itemId]++;
      return itemCounts;
    }, {});

    // Create an array of items
    var cartItems = Object.keys(itemCounts).map(function (itemId) {
      // Find the item by its id
      var item = items.find(function (item) {
        return item.id === parseInt(itemId, 10);
      });

      // Create a new "item" that also has a 'count' property
      return _extends({}, item, {
        count: itemCounts[itemId]
      });
    });

    return React.createElement(CartPage, {
      items: cartItems,
      onAddOne: this.handleAddToCart,
      onRemoveOne: this.handleRemoveOne });
  };

  App.prototype.render = function render() {
    var selectedTab = this.state.selectedTab;

    return React.createElement(
      "div",
      { className: "App" },
      React.createElement(Nav, { selectedTab: selectedTab, onTabChange: this.handleTabChanged }),
      React.createElement(
        "main",
        { className: "App-content" },
        this.renderContent()
      )
    );
  };

  return App;
}(React.Component);

ReactDOM.render(React.createElement(App, null), document.getElementById('root'));
//# sourceURL=pen.js
</script>
</body></html>