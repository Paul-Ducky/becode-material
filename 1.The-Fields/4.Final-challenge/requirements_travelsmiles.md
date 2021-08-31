# Title: Final HTML/CSS test
- Repository: `name-of-your-business`
- Type of Challenge: `Consolidation Challenge`
- Duration: 4 days
- Deployment strategy : Github page
- Team challenge : `4+ People`

## Learning objectives
- Learn to work in group
- Learn to complete a project so it can be delivered to a client

## The mission 

- Invent a company together and think of 1 page per person in your team, that the company needs.
- Divide those pages amongst the group and each person designs one page.
- Once you are all finished, join those pages together with some form of navigation
- Publish the result with a github repository (call it `name-of-your-business`)
- Make sure everyone in the group has a fork of the website
- Explain your company in the readme of the repo and put a link to the company 'website' in there
- Add a parallax image header [Example](https://demo.athemes.com/themes/?theme=Sydney)
- Add a carousel on one page
- Mke your website responsive
- Mention your phone number somewhere on the onepager, if you click it should (try to) call you
- Have a contact form, if you submit it it should send the form to an e-mail address.

You can use bootstrap or SASS, but you are not required to use it. 
However use of these tools will give you extra credit in the evaluation.

You can choose the make the website in Dutch or English.

## Assessment

You will do some peer evaluation. Every group will evaluate one other group using the checklist below.    
**Your group will also need to add at least one requirement.**

## Adding your own requirement(s)
1. Change this file (directly on github or fork this repo)
2. Add the requirement(s) at the bottom
3. Notify the group on Discord

## What makes a good requirement?
A good requirement for this list is something that people should have been doing already and that we now explicitly write down. It should not be things that would be nice to have, but things that are essential for every self respecting website in **2021**.

## Doing the evaluation
1. Create a file in this folder
2. Copy the requirements below into it
3. Tick the right boxes
4. Commit/push the change

## Requirements

### Perfection is not a detail
- [ ] All buttons and links work
- [ ] All elements work and are complete (menu, lists, images, ...)
- [x] Everything on the page has a function, a reason to be there
- [ ] No dead links
- [x] English and dutch are not mixed
- [ ] No spelling errors
- [ ] No grammar errors
- [x] The website is deployed somewhere
- [x] Everything is relevant (no image of a barber on the website of a baker)

### Content
- [x] Openinghours (if needed)
- [x] Address (if needed)
- [x] Clickable email
- [x] A working form (you can use https://formspree.io)

### Text life matters aka typography is real
- [x] Some words are bolded
- [x] Some words are italic
- [x] Some words have a different color
- [x] We aren't using a default font, cause it's not 2004
- [x] Contrast is not too low
- [x] Typographic hierachy is correct
- [x] Text has a clear intro, middle, conclusion
- [x] Intro, middle, conclusion is style correctly
- [x] Headline font is a headline font
- [x] Body text font is a body text font
- [x] The text on the page has a good flow

### Style
- [x] Black is almost black but not #000
- [ ] White is almost white but not #fff
- [x] The website is not an ugly color mess
- [ ] The styling is consistent
- [x] It is not four totally different pages thrown together
- [x] Everything works even if you are colorblind

### Not everyone has free 4G aka speed matters
- [ ] Pictures are not too heavy
- [x] Pictures are not pixelated

### A company wants to be found/SEO	
- [x] All the keywords this company wants to be found on are on the page 
- [x] Page has an H1 tag
- [x] Page has keyword meta tags
- [x] Page has a title with the keywords in
- [x] Page loads fast
 
### Keep your workspace clean
- [ ] No unused files in the repo
- [ ] All files have a good, clear name
- [x] Good folder structure
- [x] The CSS folder does not have an image folder
- [x] Not too many files in the root folder 

### Git(hub) is what you make it
- [x] All commits use a good comment
- [x] A github description has been filled in
- [x] A github website has been filled in

### Readme but also writeme
- [x] The readme says who made it
- [x] The readme says why they made it
- [x] The readme explains what this repo/project is
- [x] The readme explains why it is on github
- [x] The readme links to a preview (screenshot)
- [x] The readme contains a nice image
- [x] The readme does not contain the readme/license of dependencies, libraries, templates
- [x] If needed they are included in the repo and are mentioned in the readme
- [x] The readme has a markdown title
- [x] The readme is divided in sections
- [x] The readme is fun to read
- [x] The readme looks good
- [x] The readme is clear, even for someone that has no idea what is going on

### I'm So Meta, Even This Acronym
- [x] Social media sharing meta tags are correct
- [x] Keywords meta tag
- [x] Description meta tag
- [x] Title of the page is included
- [x] Favicon is included
- [ ] Responsive meta tag is included --> not on every page, food for example
- [x] Charset is defined
- [ ] Author is defined

### Data is the new oil
- [x] Implements (Google) analytics

### Perform all the tests
- [x] Lighthouse
- [ ] score 75%+ on the lighthouse test   --> some pages don't reach this score
- [x] W3C validator --> errors found

### Putting the antics back in semantics (but only for the html)
- [x] The html is semanticly correct
- [x] Navigation is in a nav
- [x] Lists use list tags  -->
- [x] H tags are used to signal importance
- [x] No div is used where another element is available
- [x] No span is used where another element is available
- [x] No inline styling is put on any element
- [x] Id's are only used once
- [x] The same 'type' of elements have the same classes
- [ ] All images have an alt attribute and a title -> no alt for logo, no titles used

### Just kidding CSS deserves some love too
- [ ] CSS follows the DRY principle
- [x] The CSS does not contain conflicting selectors (multiple definition for the same class/id) Can't conflict with seperate css per page
- [ ] There is no use of !important where it can be avoided -> used for .bg-dark, could be avoided with non-bootstrap class
- [x] The page is responsive

### Thermometer goes WHERE???
- [x] Your own style is included after the style of frameworks
- [x] Script tags are put at the end of the body or in the head with async/defer if possible

### Errors are to be avoided
- [x] No http resources are used on an https website
- [x] The console shows no errors
