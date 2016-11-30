import unittest

class TestStringMethods(unittest.TestCase):

    def test_upper(self):
        self.assertEqual('foo'.upper(), 'FOO')

    def test_isupper(self):
        self.assertTrue('FOO'.isupper())
        self.assertFalse('Foo'.isupper())

    def test_lower(self):
        self.assertEqual('FOO'.lower(), 'foo')    

    def test_isnumber(self):
        value_num = '25a'
        value_str = 'abcd'
        self.assertTrue(value_num.isdigit())
        self.assertFalse(value_str.isdigit())

    def test_split(self):
        s = 'hello world'
        self.assertEqual(s.split(), ['hello', 'world'])
        # check that s.split fails when the separator is not a string
        with self.assertRaises(TypeError):
            s.split(2)

if __name__ == '__main__':
    unittest.main()
