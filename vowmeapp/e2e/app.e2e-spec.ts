import { VowmeappPage } from './app.po';

describe('vowmeapp App', () => {
  let page: VowmeappPage;

  beforeEach(() => {
    page = new VowmeappPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
