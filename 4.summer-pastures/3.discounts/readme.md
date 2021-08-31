# Title: Discounts

- Repository: `discounts`
- Type of Challenge: `Consolidation Challenge`
- Duration: `4 days`
- Team challenge : `solo`

## Learning objectives
We need you to build us a small application that calculates discounts for orders.
There are several ways of given discounts, and we will add more ways in the future.

In the example-orders directory, you can find a couple of example orders. We would like to send them to your service in this form. How the discounts are returned, is up to you. But make sure the reasons for the discounts are transparent.

In the data directory, you can find source files for customer data and product data. You can assume these are in the format of the real external API.

This package is just a small part of a much bigger e-commerce application is quite a big application, with many developers working on the code at the same time. 
It is no surprise that because of this, maintainability is one of the core values of any good engineering team. Keep this in mind while working on your solution.

*A good OOP model is crucial for this goal*, making the code flexible and maintainable for the future.
A strong code coverage will help to make the code more stable.

## The Mission
For now, there are three possible ways of getting a discount:

- A customer who has already bought for over € 1000, gets a discount of 10% on the whole order.
- For every product of category "Switches" (id 2), when you buy five, you get a sixth for free.
- If you buy two or more products of category "Tools" (id 1), you get a 20% discount on the cheapest product.

Be warned, your coach might give you more requirements later on during the exercise!

### Required features
- Have an extensible OOP model for the discounts.
- Use a [Value Object](https://martinfowler.com/bliki/ValueObject.html) for handling the money ([PHP example](https://github.com/moneyphp/money), [JS example](https://github.com/dinerojs/dinero.js))
- Get above 90% code coverage ([PHPunit](https://www.lambdatest.com/blog/phpunit-code-coverage-report-html/), [Angular](https://angular.io/guide/testing-code-coverage))
- Perform at least one "Functional test" ([php](https://codeception.com/docs/04-FunctionalTests), [JS](https://jasmine.github.io/)). Most modern frameworks will have a build in component for this.


# The solution
https://github.com/grubolsch/discounts
