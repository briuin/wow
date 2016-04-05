/// <reference path="../../../typings/tsd.d.ts" />
var Student = (function () {
    function Student(firstName, middleInitial, lastName) {
        this.firstName = firstName;
        this.middleInitial = middleInitial;
        this.lastName = lastName;
        this.fullName = firstName + " " + middleInitial + " " + lastName;
    }
    return Student;
}());
function greeter(person) {
    return "Hello, " + person.firstName + " " + person.lastName;
}
var user = new Student("Jane", "M.", "User");
var HelloMessage = React.createClass({
    render: function () {
        return React.createElement("div", null, "Hello ", this.props.name);
    }
});
$(document).ready(function () {
    //document.getElementById("title").innerHTML = greeter(user);
    ReactDOM.render(React.createElement(HelloMessage, {name: "helloooo"}), document.getElementById('title'));
});

//# sourceMappingURL=app.js.map
