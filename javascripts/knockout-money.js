(function(root, factory) {
        if (typeof define === 'function' && define.amd) {
                // AMD. Register as an anonymous module.
                define(["knockout", "accounting"], factory);
        } else {
                // Browser globals
                factory(ko, accounting);
        }
}(this, function (ko, acct) {
        ko.extenders.money = function (target, option) {
                var result = ko.computed({
                        read: target, //always return the original observable's value
                        write: function (value) {
                                //force to a valid decimal
                                var decValue = parseFloat(value);
                                if (isNaN(decValue)) {
                                        target(0);
                                } else {
                                        target(decValue);
                                }
                        }
                });

                result.formatted = ko.computed({
                        read: function () {
                                var amount = target();
                                if (!amount) {
                                        return "$0.00";
                                }

                                return acct.formatMoney(amount);
                        },
                        write: function (value) {
                                value = ("" + value).trim();
                                target(acct.unformat(value));
                        }
                });

                return result;
        };
}));
