--
-- Database: `vowme`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvals`
--

CREATE TABLE `approvals` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `approvalby` int(11) NOT NULL,
  `description` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `backout`
--

CREATE TABLE `backout` (
  `id` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `description` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boardcast`
--

CREATE TABLE `boardcast` (
  `id` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `emailid` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `userid` int(11) NOT NULL,
  `type` tinytext NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  `message` text NOT NULL,
  `sendemail` tinytext NOT NULL,
  `success` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `visibilitystatus` tinyint(1) NOT NULL,
  `registrationdate` date NOT NULL,
  `price` float NOT NULL,
  `info` text NOT NULL,
  `registrationdeadline` date NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `starthour` tinyint(4) NOT NULL,
  `startminute` tinyint(4) NOT NULL,
  `endhour` tinyint(4) NOT NULL,
  `endminute` tinyint(4) NOT NULL,
  `description` text NOT NULL,
  `location` tinytext NOT NULL,
  `address` tinytext NOT NULL,
  `city` tinytext NOT NULL,
  `zipcode` smallint(6) NOT NULL,
  `wwwaddress` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `eventType` tinytext NOT NULL,
  `guestsallowed` tinyint(1) NOT NULL,
  `guestsinvitationallowed` tinyint(1) NOT NULL,
  `guestbringalongs` tinyint(1) NOT NULL,
  `maxattendees` int(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participates`
--

CREATE TABLE `participates` (
  `id` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` tinytext NOT NULL,
  `lastname` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `country` tinytext NOT NULL,
  `businessphone` tinytext NOT NULL,
  `homephone` tinytext NOT NULL,
  `mobilephone` tinytext NOT NULL,
  `companyname` tinytext NOT NULL,
  `website` tinytext NOT NULL,
  `address` tinytext NOT NULL,
  `city` tinytext NOT NULL,
  `zipcode` tinyint(5) NOT NULL,
  `sendemail` tinytext NOT NULL,
  `cnic` tinytext NOT NULL,
  `username` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approvals`
--
ALTER TABLE `approvals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `approvalby` (`approvalby`);

--
-- Indexes for table `backout`
--
ALTER TABLE `backout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventid` (`eventid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `boardcast`
--
ALTER TABLE `boardcast`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventid` (`eventid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `emailid` (`emailid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `participates`
--
ALTER TABLE `participates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventid` (`eventid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `backout`
--
ALTER TABLE `backout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `boardcast`
--
ALTER TABLE `boardcast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `participates`
--
ALTER TABLE `participates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `approvals`
--
ALTER TABLE `approvals`
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`userid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_fk2` FOREIGN KEY (`approvalby`) REFERENCES `user` (`id`);

--
-- Constraints for table `backout`
--
ALTER TABLE `backout`
  ADD CONSTRAINT `eventfk` FOREIGN KEY (`eventid`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `userfk` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `boardcast`
--
ALTER TABLE `boardcast`
  ADD CONSTRAINT `boardcast_ibfk_1` FOREIGN KEY (`eventid`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `boardcast_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `boardcast_ibfk_3` FOREIGN KEY (`emailid`) REFERENCES `email` (`id`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `participates`
--
ALTER TABLE `participates`
  ADD CONSTRAINT `participates_ibfk_1` FOREIGN KEY (`eventid`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `participates_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
